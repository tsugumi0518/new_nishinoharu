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
                        <h2>送り状詳細情報</h2>
                    </div>
                    
                    <!--------------------------->
                <div class="sale_list_div2">
                <?php
                    include 'includes/db_info.php';
                    try {
                        include 'includes/pdo_info.php';

                        // フォームが送信された場合の処理
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            // 選択された購入番号を取得
                            $selectedB1 = $_POST['B1'];

                            // データベースから選択された購入番号の情報を取得
                            $query = 'SELECT * FROM t_yamato
                                    WHERE B1 = :B1';

                            $stmt = $db->prepare($query);
                            $stmt->bindParam(':B1', $selectedB1);
                            $stmt->execute();

                            // 結果を取得して表示するなど、適切な処理を行ってください
                            $row = $stmt->fetch();

                            echo '<div class="contents_top_left">
                                    <table class="destination_table3 ">
                                        <tbody>
                                            <tr>
                                                <th>お客様管理番号:</th>
                                                <td>' . $row['B1'] . '</td>
                                                <th>出荷予定日:</th>
                                                <td>' . $row['B5'] . '</td>
                                            </tr>
                                            <tr>
                                                <th>送り状種類:</th>
                                                <td>' . $row['B2'] . '</td>
                                                <th>お届け予定日:</th>
                                                <td>' . $row['B6'] . '</td>
                                            </tr>
                                            <tr>
                                                <th>クール区分:</th>
                                                <td>' . $row['B3'] . '</td>
                                                <th>配達時間帯:</th>
                                                <td>' . $row['B7'] . '</td>
                                            </tr>
                                            <tr>
                                                <th>伝票番号:</th>
                                                <td>' . $row['B4'] . '</td>
                                                <th>お届け先コード:</th>
                                                <td>' . $row['B8'] . '</td>
                                            </tr>
                                            <tr>
                                                <th>お届け先電話番号:</th>
                                                <td>' . $row['B9'] . '</td>
                                            </tr>
                                            <tr>
                                                <th>お届け先電話番号枝番:</th>
                                                <td>' . $row['B10'] . '</td>
                                            </tr>
                                            <tr>
                                                <th>お届け先郵便番号:</th>
                                                <td>' . $row['B11'] . '</td>
                                            </tr>
                                            <tr>
                                                <th>お届け先住所:</th>
                                                <td colspan="3">' . $row['B12'] . '</td>
                                            </tr>
                                            <tr>
                                                <th>アパートマンション名:</th>
                                                <td colspan="3">' . $row['B13'] . '</td>
                                            </tr>
                                            <tr>
                                                <th>お届け先会社・部門１:</th>
                                                <td colspan="3">' . $row['B14'] . '</td>
                                            </tr>
                                            <tr>
                                                <th>お届け先会社・部門２:</th>
                                                <td colspan="3">' . $row['B15'] . '</td>
                                            </tr>
                                            <tr>
                                                <th>お届け先名:</th>
                                                <td colspan="3">' . $row['B16'] . '</td>
                                            </tr>
                                            <tr>
                                                <th>お届け先名(ｶﾅ):</th>
                                                <td colspan="3">' . $row['B17'] . '</td>
                                            </tr>
                                            <tr>
                                                <th>敬称:</th>
                                                <td>' . $row['B18'] . '</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <form action="yamato_b2.php" method="POST">
                                        <input type="hidden" name="B1" value="' . $row['B1'] . '">
                                        <input type="submit" value="ヤマトB2データの出力" class="yamato_btn">
                                    </form>
                                </div>
                                <div class="contents_top_right">
                                    <caption>送り主情報</caption>
                                    <table class="destination_table3">
                                        <tbody>
                                            <tr>
                                                <th>ご依頼主コード:</th>
                                                <td>' . $row['B19'] . '</td>
                                                <th>ご依頼主電話番号:</th>
                                                <td>' . $row['B20'] . '</td>
                                            </tr>
                                            <tr>
                                                <th>ご依頼主郵便番号:</th>
                                                <td>' . $row['B22'] . '</td>
                                                <th>ご依頼主電話番号枝番:</th>
                                                <td>' . $row['B21'] . '</td>
                                            </tr>
                                            <tr>
                                                <th>ご依頼主住所:</th>
                                                <td colspan="3">' . $row['B23'] . '</td>
                                            </tr>
                                            <tr>
                                                <th>ご依頼主アパートマンション:</th>
                                                <td colspan="3">' . $row['B24'] . '</td>
                                            </tr>
                                            <tr>
                                                <th>ご依頼主名:</th>
                                                <td colspan="3">' . $row['B25'] . '</td>
                                            </tr>
                                            <tr>
                                                <th>ご依頼主名（ｶﾅ）:</th>
                                                <td colspan="3">' . $row['B26'] . '</td>
                                            </tr>
                                            <tr>
                                                <th>品名コード１:</th>
                                                <td>' . $row['B27'] . '</td>
                                                <th>品名１:</th>
                                                <td>' . $row['B28'] . '</td>
                                            </tr>
                                            <tr>
                                                <th>品名コード２:</th>
                                                <td>' . $row['B29'] . '</td>
                                                <th>品名2:</th>
                                                <td>' . $row['B30'] . '</td>
                                            </tr>
                                            <tr>
                                                <th>荷扱い１:</th>
                                                <td>' . $row['B31'] . '</td>
                                                <th>荷扱い２:</th>
                                                <td>' . $row['B32'] . '</td>
                                            </tr>
                                            <tr>
                                                <th>記事:</th>
                                                <td colspan="3">' . $row['B33'] . '</td>
                                            </tr>
                                            <tr>
                                                <th>ｺﾚｸﾄ代金引換額（税込）:</th>
                                                <td>' . $row['B34'] . '</td>
                                                <th>内消費税額等:</th>
                                                <td>' . $row['B35'] . '</td>
                                            </tr>
                                            <tr>
                                                <th>止置き:</th>
                                                <td>' . $row['B36'] . '</td>
                                                <th>止置き営業所コード:</th>
                                                <td>' . $row['B37'] . '</td>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <td></td>
                                                <th></th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <td></td>
                                                <th></th>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>';
                                echo '<button class="back_btn2"><a href="destination_input_list.php">一覧に戻る</a></button>';
                            echo '</div>';
                            }
                        } catch (PDOException $e) {
                            exit('エラー：' . $e->getMessage());
                        }
                        ?>
                </div><!--sale_list_div2 end-->
                <!--------------------------->
 
                </div><!--right_area end-->
            </div><!--main_area end-->
            
                <!--本文ここまで-->
        </div><!--main_wrap end-->
    </main>

<?php include('includes/footer.php'); ?>