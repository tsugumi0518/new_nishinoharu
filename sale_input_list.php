<?php include('includes/login.php'); ?>
<?php 
    include 'includes/db_info.php';
    try {
        include 'includes/pdo_info.php';

        $stmt = $db->prepare('SELECT purchase_history.purchase_id, purchase_history.sale_time, purchase_history.total_price
                            FROM purchase_history
                            LEFT OUTER JOIN cart_items ON purchase_history.purchase_id = cart_items.purchase_id
                            GROUP BY purchase_history.purchase_id;
                            ');
           
        //クエリ実行
        $stmt->execute();

    } catch (PDOException $e){
        exit('エラー：' . $e->getMessage());
    }
    
?>
<?php
    //1ページに表示される書き込みの数
    $num = 15;

    include 'includes/db_info.php';

    //GETメソッドで2ページ目以降が指定されているとき
    $page = 1;
    if (isset($_GET['page']) && $_GET['page'] > 1){
        $page = intval($_GET['page']);
    }

    try {
        include 'includes/pdo_info.php';

        //プリペアドステートメントを作成
        $stmt = $db->prepare('SELECT * FROM purchase_history
                            ORDER BY sale_time
                            DESC LIMIT :page, :num'
                            );

        //パラメーター割り当て
        $page = ($page-1) * $num;
        $stmt->bindParam(':page', $page, PDO::PARAM_INT);
        $stmt->bindParam(':num', $num, PDO::PARAM_INT);

        //クエリ実行
        $stmt->execute();
    } catch (PDOException $e){
        exit('エラー：' . $e->getMessage());
    }
?>


<?php include('includes/header.php'); ?>

    <main role="main">
        <div class="main_wrap">
            <!--ここから「本文」-->
            <div class="sub_title">
                <h1>販売管理</h1>
            </div>

            <!--共通コンテンツエリア-->
            <div class="main_area">

                <div class="left_area">
                    <p>カテゴリ項目</p>

                    <?php include('includes/navbar.php'); ?><!--カテゴリ-->

                </div><!--left_area end-->

                <!--ページごとのエリア-->
                <div class="right_area">
                    <!--ページごとのエリアのタイトル-->
                    <div class="right_area_title">
                        <h2>販売一覧</h2>
                    </div>
                    
                    <!--------------------------->
                    <div class="sale_list_div">
                        <form class="sale_list_form" action="sale_input_detail.php" method="POST">
                            <table class="sale_list">
                                <!-- <caption style="caption-side:top;">販売一覧</caption> -->
                                <thead>
                                    <tr>
                                        <th>選択</th>
                                        <th>販売管理番号</th>
                                        <th>販売日時</th>
                                        <th>合計金額</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = $stmt->fetch()): ?>
                                        <tr>
                                            <td>
                                                <label>
                                                    <input type="radio" name="purchase_id" value="<?php echo $row['purchase_id']; ?>">
                                                </label>
                                            </td>
                                            <td><?php echo $row['purchase_id']; ?></td>
                                            <td><?php echo $row['sale_time']; ?></td>
                                            <td><?php echo $row['total_price']; ?></td>
                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                            <button type="submit" class="detale_btn">詳細を表示</button>
                            <!-- <button type="submit" class="detale_btn"><a href="destination_input_page.php">送り状作成</a></button>
                            <button type="submit" class="detale_btn"><a href="invoice_page.php">インボイス作成</a></button> -->
                        </form>
                    </div><!--sale_list_div end-->
                    <?php
                        //ページ数の表示
                        try {
                            //プリペアドステートメントを作成
                            //SQLのカウントで何件書き込みがあるか調べる
                            $stmt = $db->prepare('SELECT COUNT(*) FROM purchase_history');
                            //クエリの実行
                            $stmt->execute();
                            //var_dump($stmt->execute());
                        } catch (PDOException $e){
                            exit('エラー：' . $e->getMassage());
                            //try catch構文で変数$eを使っているが、eじゃないといけないわけじゃないが
                            //一般的にはerrerという意味でeが使われる
                        }

                        //書き込みの件数を取得
                        //
                        $comments = $stmt->fetchColumn();
                        //ページ数を計算。コメント数を、1ページの最大書き込み数で割る
                        //ceil関数=切り上げ。1ページ最大数を1件でも超えたら切り上げて次のページ表示
                        $max_page = ceil($comments / $num);
                        //ページングの必要があれば表示
                        if ($max_page >= 1){
                            echo '<nav><ul class="pagination">';
                            for ($i = 1; $i <= $max_page; $i++){
                                echo '<li class="pagination_item"><a href="sale_input_list.php?page='.$i.'">' . $i .'</a></li>';
                            }
                            echo '</ul></nav>';
                        }
                    ?>
                    <!--------------------------->

                </div><!--right_area end-->
            </div><!--main_area end-->
            
                <!--本文ここまで-->
        </div><!--main_wrap end-->
    </main>

<?php include('includes/footer.php'); ?>