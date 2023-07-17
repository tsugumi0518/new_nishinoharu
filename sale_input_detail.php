<?php include('includes/login.php'); ?>
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
                        <h2>販売入力</h2>
                    </div>
                    
                    <!--------------------------->
                    <div class="sale_list_div">
                        <?php
                            include 'includes/db_info.php';
                            try {
                                include 'includes/pdo_info.php';

                                // フォームが送信された場合の処理
                                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                    // 選択された購入番号を取得
                                    $selectedPurchaseId = $_POST['purchase_id'];

                                    // データベースから選択された購入番号の情報を取得
                                    $query = 'SELECT purchase_history.purchase_id, purchase_history.sale_time, t_unit_price.meat_site, t_unit_price.grade, t_unit_price.classification, t_unit_price.unit_price, cart_items.volume, purchase_history.total_price
                                    FROM purchase_history
                                    JOIN cart_items ON purchase_history.purchase_id = cart_items.purchase_id
                                    JOIN t_unit_price ON cart_items.unit_price_code = t_unit_price.unit_price_code
                                    WHERE purchase_history.purchase_id = :purchase_id';

                                    $stmt = $db->prepare($query);
                                    $stmt->bindParam(':purchase_id', $selectedPurchaseId);
                                    $stmt->execute();

                                    // 合計金額などを出力するテーブル
                                    echo '<table class="sale_detail">';
                                    $row = $stmt->fetch();
                                        echo '<tr><th>販売番号</th><td>' . $row['purchase_id'] . '</td></tr>';
                                        echo '<tr><th>販売日時</th><td>' . $row['sale_time'] . '</td></tr>';
                                        echo '<tr><th>合計金額</th><td>' . $row['total_price'] . '円' . '(内消費税' . $row['total_price'] / 1.1 * 0.1 . '円)' . '</td></tr>';
                                    echo '</table>';

                                    // 購入内容などを出力するテーブル
                                    echo '<table class="sale_detail_list">
                                            <caption style="caption-side:top;">販売内容</caption>
                                            <thead>
                                                <tr>
                                                    <th>部位</th>
                                                    <th>グレード</th>
                                                    <th>種類</th>
                                                    <th>単価</th>
                                                    <th>数量</th>
                                                </tr>
                                            </thead>
                                            <tbody>';
                                    $stmt->execute(); 
                                    while ($row = $stmt->fetch()) {
                                        echo '<tr>';
                                        echo '<td>' . $row['meat_site'] . '</td>';
                                        echo '<td>' . $row['grade'] . '</td>';
                                        echo '<td>' . $row['classification'] . '</td>';
                                        echo '<td>' . $row['unit_price'] . '円' . '(税込：' . $row['unit_price'] * 1.1 . '円)' . '</td>';
                                        echo '<td>' . $row['volume'] . '</td>';
                                        echo '</tr>';
                                    }
                                    echo '</tbody></table>';
                                    echo '<button class="back_btn"><a href="sale_input_list.php">一覧に戻る</a></button>';
                                    echo '<form action="destination_input_page2.php" method="POST">
                                        <input type="hidden" name="purchase_id" value="' . $selectedPurchaseId . '">
                                        <input type="submit" name="purchase_submit" value="送り状作成(仮)">
                                        </form>';
                                }
                            } catch (PDOException $e) {
                                exit('エラー：' . $e->getMessage());
                            }
                        ?>
                    </div><!--sale_list_div end-->
                    <!--------------------------->
 
                </div><!--right_area end-->
            </div><!--main_area end-->
            
                <!--本文ここまで-->
        </div><!--main_wrap end-->
    </main>

<?php include('includes/footer.php'); ?>