<?php include 'includes/login.php'; ?>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $formValues1 = $_POST['purchase_id'];
        $formValues2 = $_POST['B1'];
        
        // データベース接続情報を含むファイルをインクルード
        include 'includes/db_info.php';
        
        try {
            include 'includes/pdo_info.php';
    
            // 1つ目のクエリを実行
            foreach ($formValues1 as $formValue1) {
                $stmt1 = $db->prepare('SELECT purchase_history.purchase_id, purchase_history.sale_time, t_unit_price.meat_site, t_unit_price.grade, t_unit_price.classification, t_unit_price.unit_price, cart_items.volume, purchase_history.total_price
                            FROM purchase_history
                            JOIN cart_items ON purchase_history.purchase_id = cart_items.purchase_id
                            JOIN t_unit_price ON cart_items.unit_price_code = t_unit_price.unit_price_code
                            WHERE purchase_history.purchase_id = :purchase_id');
                $stmt1->bindValue(':purchase_id', $formValue1);
                $stmt1->execute();
                $result1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
    
                // 結果の表示などの処理を行う
            }
    
            // 2つ目のクエリを実行
            foreach ($formValues2 as $formValue2) {
                $stmt2 = $db->prepare('SELECT * FROM t_yamato WHERE B1 = :B1');
                $stmt2->bindValue(':B1', $formValue2);
                $stmt2->execute();
                $result2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
    
                // 結果の表示などの処理を行う
            }
    
            // 結果の表示などの処理を行う
    
        } catch (PDOException $e) {
            exit('エラー：' . $e->getMessage());
        }
    }
?>
<?php
    foreach ($formValues2 as $formValue3) {
        $stmt3 = $db->prepare('SELECT B12 FROM t_yamato WHERE B1 = :B1');
        $stmt3->bindValue(':B1', $formValue2);
        $stmt3->execute();
        $result3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);
    
        // B12の最初の3文字を抜き出して出力する
        foreach ($result3 as $row3) {
            $b12 = $row3['B12'];
            $prefecture_char = mb_substr($b12, 0, 3, 'UTF-8');
    
            $stmt4 = $db->prepare('SELECT area FROM yamato_zone WHERE prefectures LIKE :prefecture');
            $stmt4->bindValue(':prefecture', '%' . $prefecture_char . '%');
            $stmt4->execute();
            $result4 = $stmt4->fetchAll(PDO::FETCH_ASSOC);
    
            // 部分一致したデータの出力
            foreach ($result4 as $row4) {
                $area = $row4['area'];
    
                $stmt5 = $db->prepare('SELECT tariff FROM yamato_tariff_list WHERE arrival_zone LIKE :arrivalZone AND size = 80');
                $stmt5->bindValue(':arrivalZone', '%' . $area . '%');
                $stmt5->execute();
                $result5 = $stmt5->fetchAll(PDO::FETCH_ASSOC);
    
                // 部分一致かつsizeが80のデータの出力
                foreach ($result5 as $row5) {
                    $tariff = str_replace(',', '', $row5['tariff']);
                    $tariff = floatval($tariff);
                }
            }
        }
    }
   
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style_invoice.css">
        <link media="print" rel="stylesheet" href="print.css">
        <!--jquery 3.5.1-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!--このページ用のｊｓ-->
        <script src="js/function_invoice.js"></script>


    </head>
    <body>
        <div class="pring_btn_div">
            <input type="button" value="このページを印刷" onclick="window.print();" class="printButton">
            <button class="printButton"><a href="invoice_page.php">インボイス作成画面に戻る</a></button>
        </div>
        <article class="print_article">
            <section class="print_pages">
                <table class="invoice_table">
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>納品書番号:</td>
                            <?php
                                if (!empty($result1)) {
                                    echo '<td colspan="2">' . $result1[0]['purchase_id'] . '</td>';
                                } else {
                                    echo '<td colspan="2"></td>';
                                }
                            ?>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>作成日:</td>
                            <td><?php echo date('Y/m/d')."<br/>\n"; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="10">納品書</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <?php
                                // t_yamatoテーブルからのデータを表示するための処理
                                if (!empty($result2)) {
                                    echo '<td colspan="2">' . $result2[0]['B16'] . '</td>';
                                } else {
                                    echo '<td colspan="2"></td>';
                                }
                            ?>
                            <?php
                                // t_yamatoテーブルからのデータを表示するための処理
                                if (!empty($result2)) {
                                    echo '<td>' . $result2[0]['B18'] . '</td>';
                                } else {
                                    echo '<td></td>';
                                }
                            ?>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="2">株式会社　大野原牧場</td>
                        </tr>
                        <tr>
                            <td colspan="3">下記の通り納品いたしましたのでご査収ください。</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>〒</td>
                            <td>888-8888</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="2">福岡県福岡市○○区●●1111-11</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>TEL:</td>
                            <td>092-111-1111</td>
                        </tr>
                        <tr>
                            <td>合計金額</td>
                            <?php
                                // t_yamatoテーブルからのデータを表示するための処理
                                if (!empty($result1)) {
                                    echo '<td>' . $result1[0]['total_price'] . '</td>';
                                } else {
                                    echo '<td></td>';
                                }
                            ?>
                            <?php //echo $total + $total * 0.08 + $tariff * 0.1; ?>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>FAX:</td>
                            <td>092-111-1112</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>担当:</td>
                            <td><?php echo $_SESSION['employee_name']; ?></td>
                        </tr>
                        <tr>
                            <td>発送日</td>
                            <?php
                                // t_yamatoテーブルからのデータを表示するための処理
                                if (!empty($result2)) {
                                    echo '<td>' . $result2[0]['B5'] . '</td>';
                                } else {
                                    echo '<td></td>';
                                }
                            ?>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <!--8%テーブル-->
                        <tr>
                            <td colspan="2">日付／期間</td>
                            <td>部位</td>
                            <td>種類</td>
                            <td>等級</td>
                            <td>単価</td>
                            <td>数量</td>
                            <td>金額</td>
                            <td colspan="2">補足</td>
                        </tr>
                        <tr>
                            <td colspan="10">●税率8%項目</td>
                        </tr>
                        <?php if (!empty($result1)): ?>
                            <?php $count = 0; ?>
                            <?php $total = 0; // 合計値を保持する変数 ?>
                            <?php foreach ($result1 as $row): ?>
                                <?php if ($count < 8): ?>
                                    <tr>
                                        <td colspan="2"><?php echo $row['sale_time']; ?></td>
                                        <td><?php echo $row['meat_site']; ?></td>
                                        <td><?php echo $row['classification']; ?></td>
                                        <td><?php echo $row['grade']; ?></td>
                                        <td><?php echo $row['unit_price']; ?></td>
                                        <td><?php echo $row['volume']; ?></td>
                                        <td><?php echo $row['unit_price'] * $row['volume']; ?></td>
                                        <td colspan="2"></td>
                                    </tr>
                                    <?php $total += $row['unit_price'] * $row['volume']; // 合計値を加算 ?>
                                <?php else: ?>
                                    <?php break; ?>
                                <?php endif; ?>
                                <?php $count++; ?>
                            <?php endforeach; ?>
                            <?php if ($count < 8): ?>
                                <?php for ($i = $count; $i < 8; $i++): ?>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td colspan="2"></td>
                                    </tr>
                                <?php endfor; ?>
                            <?php endif; ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="2">●税率8%項目小計</td>
                                <td><?php echo $total; ?></td>
                                <td colspan="2"></td>
                            </tr>
                        <?php else: ?>
                            <?php for ($i = 0; $i < 8; $i++): ?>
                                <tr>
                                    <td colspan="2"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td colspan="2"></td>
                                </tr>
                            <?php endfor; ?>
                        <?php endif; ?>
                        
                        <!--10%テーブル-->
                        <tr>
                            <td colspan="10">●税率10%項目</td>
                        </tr>
                        <tr>
                            <td colspan="2">送料</td>
                            <td>冷蔵</td>
                            <td>80サイズ</td>
                            <td><?php echo $prefecture_char; ?></td>
                            <td></td>
                            <td></td>
                            <td><?php echo $tariff; ?></td>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="2">●税率10%項目小計</td>
                            <td><?php echo $tariff; ?></td>
                            <td colspan="2"></td>
                        </tr>
                        <!--小計合計計算-->
                        <tr>
                            <td colspan="7">小計</td>
                            <td><?php echo $total + $tariff; ?></td>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <td colspan="7">消費税(8%対象)</td>
                            <td><?php echo $total * 0.08; ?></td>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <td colspan="7">消費税(10%対象)</td>
                            <td><?php echo $tariff * 0.1; ?></td>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <td colspan="7">合計金額</td>
                            <td><?php echo $total + $total * 0.08 + $tariff * 0.1; ?></td>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <!--それぞれ合計-->
                        <tr>
                            <td colspan="7"></td>
                            <td>8%対象合計</td>
                            <td></td>
                            <td><?php echo $total * 1.08; ?></td>
                        </tr>
                        <tr>
                            <td colspan="7"></td>
                            <td>10%対象合計</td>
                            <td></td>
                            <td><?php echo $tariff * 1.1; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <!--特記事項-->
                        <tr>
                            <td>●特記事項</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>・備考1：</td>
                            <td colspan="9"></td>
                        </tr>
                        <tr>
                            <td>・備考2：</td>
                            <td colspan="9"></td>
                        </tr>
                        <tr>
                            <td>・備考3：</td>
                            <td colspan="9"></td>
                        </tr>
                        <tr>
                            <td>・備考4：</td>
                            <td colspan="9"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    
                </table>
            </section>
        </article>
    </body>
</html>








