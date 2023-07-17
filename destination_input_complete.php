<?php include('includes/login.php'); ?>
<?php
    //受け取るデータの変数を用意
    $randomNumber = str_pad(mt_rand(0, 99999), 5, '0', STR_PAD_LEFT);
    $B1 = date('YmdHis') . $randomNumber;
    $B2 = $_POST['B2'];
    $B3 = $_POST['B3'];
    $B4 = $_POST['B4'];
    $B5 = $_POST['B5'];
    $B6 = $_POST['B6'];
    $B7 = $_POST['B7'];
    $B8 = $_POST['B8'];
    $B9 = $_POST['B9'];
    $B10 = $_POST['B10'];
    $B11 = $_POST['B11'];
    $B12 = $_POST['B12'];
    $B13 = $_POST['B13'];
    $B14 = $_POST['B14'];
    $B15 = $_POST['B15'];
    $B16 = $_POST['B16'];
    $B17 = $_POST['B17'];
    $B18 = $_POST['B18'];
    $B19 = $_POST['B19'];
    $B20 = $_POST['B20'];
    $B21 = $_POST['B21'];
    $B22 = $_POST['B22'];
    $B23 = $_POST['B23'];
    $B24 = $_POST['B24'];
    $B25 = $_POST['B25'];
    $B26 = $_POST['B26'];
    $B27 = $_POST['B27'];
    $B28 = $_POST['B28'];
    $B29 = $_POST['B29'];
    $B30 = $_POST['B30'];
    $B31 = $_POST['B31'];
    $B32 = $_POST['B32'];
    $B33 = $_POST['B33'];
    $B34 = $_POST['B34'];
    $B35 = $_POST['B35'];
    $B36 = $_POST['B36'];
    $B37 = $_POST['B37'];
    $B38 = $_POST['B38'];
    $B39 = $_POST['B39'];
    $B40 = $_POST['B40'];
    $B41 = $_POST['B41'];
    $B42 = $_POST['B42'];
    $B43 = $_POST['B43'];
    $B44 = $_POST['B44'];
    $B45 = $_POST['B45'];
    $B46 = $_POST['B46'];
    $B47 = $_POST['B47'];
    $B48 = $_POST['B48'];
    $B49 = $_POST['B49'];
    $B50 = $_POST['B50'];
    $B51 = $_POST['B51'];
    $B52 = $_POST['B52'];
    $B53 = $_POST['B53'];
    $B54 = $_POST['B54'];
    $B55 = $_POST['B55'];
    $B56 = $_POST['B56'];
    $B57 = $_POST['B57'];
    $B58 = $_POST['B58'];
    $B59 = $_POST['B59'];
    $B60 = $_POST['B60'];
    $B61 = $_POST['B61'];
    $B62 = $_POST['B62'];
    $B63 = $_POST['B63'];
    $B64 = $_POST['B64'];
    $B65 = $_POST['B65'];
    $B66 = $_POST['B66'];
    $B67 = $_POST['B67'];
    $B68 = $_POST['B68'];
    $B69 = $_POST['B69'];
    $B70 = $_POST['B70'];
    $B71 = $_POST['B71'];
    $B72 = $_POST['B72'];
    $B73 = $_POST['B73'];
    $B74 = $_POST['B74'];
    $B75 = $_POST['B75'];
    $B76 = $_POST['B76'];
    $B77 = $_POST['B77'];
    $B78 = $_POST['B78'];
    $B79 = $_POST['B79'];
    $B80 = $_POST['B80'];
    $B81 = $_POST['B81'];
    $B82 = $_POST['B82'];
    $B83 = $_POST['B83'];
    $B84 = $_POST['B84'];
    $B85 = $_POST['B85'];
    $B86 = $_POST['B86'];
    $B87 = $_POST['B87'];
    $B88 = $_POST['B88'];
    $B89 = $_POST['B89'];
    $B90 = $_POST['B90'];
    $B91 = $_POST['B91'];
    $B92 = $_POST['B92'];
    $B93 = $_POST['B93'];
    $B94 = $_POST['B94'];
    $B95 = $_POST['B95'];


include 'includes/db_info.php';

try {
    include 'includes/pdo_info.php';

$stmt = $db->prepare(
                    'INSERT INTO t_yamato (B1,B2,B3,B4,B5,B6,B7,B8,B9,B10,B11,B12,B13,B14,B15,B16,B17,B18,B19,B20,B21,B22,B23,B24,B25,B26,B27,B28,B29,B30,B31,B32,B33,B34,B35,B36,B37,B38,B39,B40,B41,B42,B43,B44,B45,B46,B47,B48,B49,B50,B51,B52,B53,B54,B55,B56,B57,B58,B59,B60,B61,B62,B63,B64,B65,B66,B67,B68,B69,B70,B71,B72,B73,B74,B75,B76,B77,B78,B79,B80,B81,B82,B83,B84,B85,B86,B87,B88,B89,B90,B91,B92,B93,B94,B95
                    )
                    VALUES (:B1,:B2,:B3,:B4,:B5,:B6,:B7,:B8,:B9,:B10,:B11,:B12,:B13,:B14,:B15,:B16,:B17,:B18,:B19,:B20,:B21,:B22,:B23,:B24,:B25,:B26,:B27,:B28,:B29,:B30,:B31,:B32,:B33,:B34,:B35,:B36,:B37,:B38,:B39,:B40,:B41,:B42,:B43,:B44,:B45,:B46,:B47,:B48,:B49,:B50,:B51,:B52,:B53,:B54,:B55,:B56,:B57,:B58,:B59,:B60,:B61,:B62,:B63,:B64,:B65,:B66,:B67,:B68,:B69,:B70,:B71,:B72,:B73,:B74,:B75,:B76,:B77,:B78,:B79,:B80,:B81,:B82,:B83,:B84,:B85,:B86,:B87,:B88,:B89,:B90,:B91,:B92,:B93,:B94,:B95
                    )'
);

    //プリペアドステートメントにパラメーターを割り当てる
    //bindParam=$stmtから取得した値を:PARAM_STR=文字列型としてあてはめる
    $stmt->bindParam(':B1', $B1, PDO::PARAM_STR);
    $stmt->bindParam(':B2', $B2, PDO::PARAM_INT);
    $stmt->bindParam(':B3', $B3, PDO::PARAM_INT);
    $stmt->bindParam(':B4', $B4, PDO::PARAM_STR);
    $stmt->bindParam(':B5', $B5, PDO::PARAM_STR);
    $stmt->bindParam(':B6', $B6, PDO::PARAM_STR);
    $stmt->bindParam(':B7', $B7, PDO::PARAM_STR);
    $stmt->bindParam(':B8', $B8, PDO::PARAM_STR);
    $stmt->bindParam(':B9', $B9, PDO::PARAM_STR);
    $stmt->bindParam(':B10', $B10, PDO::PARAM_STR);
    $stmt->bindParam(':B11', $B11, PDO::PARAM_STR);
    $stmt->bindParam(':B12', $B12, PDO::PARAM_STR);
    $stmt->bindParam(':B13', $B13, PDO::PARAM_STR);
    $stmt->bindParam(':B14', $B14, PDO::PARAM_STR);
    $stmt->bindParam(':B15', $B15, PDO::PARAM_STR);
    $stmt->bindParam(':B16', $B16, PDO::PARAM_STR);
    $stmt->bindParam(':B17', $B17, PDO::PARAM_STR);
    $stmt->bindParam(':B18', $B18, PDO::PARAM_STR);
    $stmt->bindParam(':B19', $B19, PDO::PARAM_STR);
    $stmt->bindParam(':B20', $B20, PDO::PARAM_STR);
    $stmt->bindParam(':B21', $B21, PDO::PARAM_STR);
    $stmt->bindParam(':B22', $B22, PDO::PARAM_STR);
    $stmt->bindParam(':B23', $B23, PDO::PARAM_STR);
    $stmt->bindParam(':B24', $B24, PDO::PARAM_STR);
    $stmt->bindParam(':B25', $B25, PDO::PARAM_STR);
    $stmt->bindParam(':B26', $B26, PDO::PARAM_STR);
    $stmt->bindParam(':B27', $B27, PDO::PARAM_STR);
    $stmt->bindParam(':B28', $B28, PDO::PARAM_STR);
    $stmt->bindParam(':B29', $B29, PDO::PARAM_STR);
    $stmt->bindParam(':B30', $B30, PDO::PARAM_STR);
    $stmt->bindParam(':B31', $B31, PDO::PARAM_STR);
    $stmt->bindParam(':B32', $B32, PDO::PARAM_STR);
    $stmt->bindParam(':B33', $B33, PDO::PARAM_STR);
    $stmt->bindParam(':B34', $B34, PDO::PARAM_INT);
    $stmt->bindParam(':B35', $B35, PDO::PARAM_INT);
    $stmt->bindParam(':B36', $B36, PDO::PARAM_INT);
    $stmt->bindParam(':B37', $B37, PDO::PARAM_INT);
    $stmt->bindParam(':B38', $B38, PDO::PARAM_INT);
    $stmt->bindParam(':B39', $B39, PDO::PARAM_INT);
    $stmt->bindParam(':B40', $B40, PDO::PARAM_STR);
    $stmt->bindParam(':B41', $B41, PDO::PARAM_STR);
    $stmt->bindParam(':B42', $B42, PDO::PARAM_STR);
    $stmt->bindParam(':B43', $B43, PDO::PARAM_INT);
    $stmt->bindParam(':B44', $B44, PDO::PARAM_STR);
    $stmt->bindParam(':B45', $B45, PDO::PARAM_STR);
    $stmt->bindParam(':B46', $B46, PDO::PARAM_STR);
    $stmt->bindParam(':B47', $B47, PDO::PARAM_STR);
    $stmt->bindParam(':B48', $B48, PDO::PARAM_INT);
    $stmt->bindParam(':B49', $B49, PDO::PARAM_STR);
    $stmt->bindParam(':B50', $B50, PDO::PARAM_INT);
    $stmt->bindParam(':B51', $B51, PDO::PARAM_STR);
    $stmt->bindParam(':B52', $B52, PDO::PARAM_INT);
    $stmt->bindParam(':B53', $B53, PDO::PARAM_STR);
    $stmt->bindParam(':B54', $B54, PDO::PARAM_STR);
    $stmt->bindParam(':B55', $B55, PDO::PARAM_INT);
    $stmt->bindParam(':B56', $B56, PDO::PARAM_STR);
    $stmt->bindParam(':B57', $B57, PDO::PARAM_STR);
    $stmt->bindParam(':B58', $B58, PDO::PARAM_STR);
    $stmt->bindParam(':B59', $B59, PDO::PARAM_STR);
    $stmt->bindParam(':B60', $B60, PDO::PARAM_STR);
    $stmt->bindParam(':B61', $B61, PDO::PARAM_STR);
    $stmt->bindParam(':B62', $B62, PDO::PARAM_STR);
    $stmt->bindParam(':B63', $B63, PDO::PARAM_STR);
    $stmt->bindParam(':B64', $B64, PDO::PARAM_STR);
    $stmt->bindParam(':B65', $B65, PDO::PARAM_STR);
    $stmt->bindParam(':B66', $B66, PDO::PARAM_STR);
    $stmt->bindParam(':B67', $B67, PDO::PARAM_STR);
    $stmt->bindParam(':B68', $B68, PDO::PARAM_STR);
    $stmt->bindParam(':B69', $B69, PDO::PARAM_STR);
    $stmt->bindParam(':B70', $B70, PDO::PARAM_STR);
    $stmt->bindParam(':B71', $B71, PDO::PARAM_STR);
    $stmt->bindParam(':B72', $B72, PDO::PARAM_STR);
    $stmt->bindParam(':B73', $B73, PDO::PARAM_STR);
    $stmt->bindParam(':B74', $B74, PDO::PARAM_STR);
    $stmt->bindParam(':B75', $B75, PDO::PARAM_STR);
    $stmt->bindParam(':B76', $B76, PDO::PARAM_STR);
    $stmt->bindParam(':B77', $B77, PDO::PARAM_STR);
    $stmt->bindParam(':B78', $B78, PDO::PARAM_STR);
    $stmt->bindParam(':B79', $B79, PDO::PARAM_STR);
    $stmt->bindParam(':B80', $B80, PDO::PARAM_STR);
    $stmt->bindParam(':B81', $B81, PDO::PARAM_STR);
    $stmt->bindParam(':B82', $B82, PDO::PARAM_STR);
    $stmt->bindParam(':B83', $B83, PDO::PARAM_STR);
    $stmt->bindParam(':B84', $B84, PDO::PARAM_STR);
    $stmt->bindParam(':B85', $B85, PDO::PARAM_STR);
    $stmt->bindParam(':B86', $B86, PDO::PARAM_STR);
    $stmt->bindParam(':B87', $B87, PDO::PARAM_INT);
    $stmt->bindParam(':B88', $B88, PDO::PARAM_STR);
    $stmt->bindParam(':B89', $B89, PDO::PARAM_STR);
    $stmt->bindParam(':B90', $B90, PDO::PARAM_INT);
    $stmt->bindParam(':B91', $B91, PDO::PARAM_STR);
    $stmt->bindParam(':B92', $B92, PDO::PARAM_STR);
    $stmt->bindParam(':B93', $B93, PDO::PARAM_INT);
    $stmt->bindParam(':B94', $B94, PDO::PARAM_STR);
    $stmt->bindParam(':B95', $B95, PDO::PARAM_STR);


    //クエリの実行
    $stmt->execute();
    // 登録完了メッセージを作成
    $message = "送り状の登録が完了しました。インボイス作成画面へ";

    // JavaScriptを出力してポップアップを表示
    echo '<script>alert("' . $message . '");</script>';

    // 元のページにリダイレクト
    echo '<script>window.location.href = "invoice_page.php";</script>';

    exit();
    //キャッチ構文↓
} catch (PDOException $e){
    //$eにエラー項目が保存されていて、エラーが出たときにはどんなエラーか
    //メッセージで知らせる文章
    exit('エラー：' . $e->getMessage());
}

?>


<!-------------------------------------------------------------->
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
                        <h2>送り状確認</h2>
                    </div>
                    <!--ページごとの右側エリア-->
                    <div class="right_area_contents2">
                        <div class="destination_form_area">
                            <div class="contents_top_left">
                                <form class="destination_form" action="#" method="POST">
                                        <caption>お届け先情報</caption>
                                        <table class="destination_table2">
                                            <tbody>
                                                <tr>
                                                    <th>お客様管理番号</th>
                                                    <td><?php echo $_POST['B1']; ?></td>
                                                    <th>出荷予定日</th>
                                                    <td><?php echo $_POST['B5']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>送り状種類</th>
                                                    <td><?php echo $_POST['B2']; ?></td>
                                                    <th>お届け予定日</th>
                                                    <td><?php echo $_POST['B6']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>クール区分</th>
                                                    <td><?php echo $_POST['B3']; ?></td>
                                                    <th>配達時間帯</th>
                                                    <td><?php echo $_POST['B7']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>伝票番号</th>
                                                    <td><?php echo $_POST['B4']; ?></td>
                                                    <th>お届け先コード</th>
                                                    <td><?php echo $_POST['B8']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>お届け先電話番号</th>
                                                    <td><?php echo $_POST['B9']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>お届け先電話番号枝番</th>
                                                    <td><?php echo $_POST['B10']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>お届け先郵便番号</th>
                                                    <td><?php echo $_POST['B11']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>お届け先住所</th>
                                                    <td colspan="3"><?php echo $_POST['B12']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>アパートマンション名</th>
                                                    <td colspan="3"><?php echo $_POST['B13']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>お届け先会社・部門１</th>
                                                    <td colspan="3"><?php echo $_POST['B14']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>お届け先会社・部門２</th>
                                                    <td colspan="3"><?php echo $_POST['B15']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>お届け先名</th>
                                                    <td colspan="3"><?php echo $_POST['B16']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>お届け先名(ｶﾅ)</th>
                                                    <td colspan="3"><?php echo $_POST['B17']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>敬称</th>
                                                    <td><?php echo $_POST['B18']; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <!--アコーディオン/その他エリア-->
                                        <dl class="other_input_area">
                                            <dt class="other_input_area_dt">その他の項目</dt>
                                            <dd class="other_input_area_dd">
                                                <caption>その他設定</caption>
                                                <table class="other_table2">
                                                    <tbody>
                                                        <tr>
                                                            <th>発行枚数</th>
                                                            <td><?php echo $_POST['B38']; ?></td>
                                                            <th>クロネコwebコレクトデータ登録</th>
                                                            <td><?php echo $_POST['B43']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>個数口表示フラグ</th>
                                                            <td><?php echo $_POST['B39']; ?></td>
                                                            <th>クロネコwebコレクト加盟店番号</th>
                                                            <td><?php echo $_POST['B44']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>請求先顧客コード</th>
                                                            <td><?php echo $_POST['B40']; ?></td>
                                                            <th>クロネコwebコレクト申込受付番号１</th>
                                                            <td><?php echo $_POST['B45']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>請求先分類コード</th>
                                                            <td><?php echo $_POST['B41']; ?></td>
                                                            <th>クロネコwebコレクト申込受付番号２</th>
                                                            <td><?php echo $_POST['B46']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>運賃管理番号</th>
                                                            <td><?php echo $_POST['B42']; ?></td>
                                                            <th>クロネコwebコレクト申込受付番号３</th>
                                                            <td><?php echo $_POST['B47']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>お届け予定ｅメール利用区分</th>
                                                            <td><?php echo $_POST['B48']; ?></td>
                                                            <th>入力機種</th>
                                                            <td><?php echo $_POST['B50']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>お届け予定ｅメールe-mailアドレス</th>
                                                            <td><?php echo $_POST['B49']; ?></td>
                                                            <th>お届け予定ｅメールメッセージ</th>
                                                            <td><?php echo $_POST['B51']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>お届け完了ｅメール利用区分</th>
                                                            <td><?php echo $_POST['B52']; ?></td>
                                                            <th>複数口くくりキー</th>
                                                            <td><?php echo $_POST['B74']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>お届け完了ｅメールe-mailアドレス</th>
                                                            <td><?php echo $_POST['B53']; ?></td>
                                                            <th>検索キータイトル1</th>
                                                            <td><?php echo $_POST['B75']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>お届け完了ｅメールメッセージ</th>
                                                            <td><?php echo $_POST['B54']; ?></td>
                                                            <th>検索キー1</th>
                                                            <td><?php echo $_POST['B76']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>クロネコ収納代行利用区分</th>
                                                            <td><?php echo $_POST['B55']; ?></td>
                                                            <th>検索キータイトル2</th>
                                                            <td><?php echo $_POST['B77']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>予備</th>
                                                            <td><?php echo $_POST['B56']; ?></td>
                                                            <th>検索キー2</th>
                                                            <td><?php echo $_POST['B78']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>収納代行請求金額(税込)</th>
                                                            <td><?php echo $_POST['B57']; ?></td>
                                                            <th>検索キータイトル3</th>
                                                            <td><?php echo $_POST['B79']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>収納代行内消費税額等</th>
                                                            <td><?php echo $_POST['B58']; ?></td>
                                                            <th>検索キー3</th>
                                                            <td><?php echo $_POST['B80']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>収納代行請求先郵便番号</th>
                                                            <td><?php echo $_POST['B59']; ?></td>
                                                            <th>検索キータイトル4</th>
                                                            <td><?php echo $_POST['B81']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>収納代行請求先住所</th>
                                                            <td><?php echo $_POST['B60']; ?></td>
                                                            <th>検索キー4</th>
                                                            <td><?php echo $_POST['B82']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>アパートマンション名</th>
                                                            <td><?php echo $_POST['B61']; ?></td>
                                                            <th>検索キータイトル5</th>
                                                            <td><?php echo $_POST['B83']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>収納代行請求先会社・部門名１</th>
                                                            <td><?php echo $_POST['B62']; ?></td>
                                                            <th>検索キー5</th>
                                                            <td><?php echo $_POST['B84']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>収納代行請求先会社・部門名２</th>
                                                            <td><?php echo $_POST['B63']; ?></td>
                                                            <th>予備</th>
                                                            <td><?php echo $_POST['B85']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>収納代行請求先名(漢字)</th>
                                                            <td><?php echo $_POST['B64']; ?></td>
                                                            <th>予備</th>
                                                            <td><?php echo $_POST['B86']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>収納代行請求先名(カナ)</th>
                                                            <td><?php echo $_POST['B65']; ?></td>
                                                            <th>投函予定メール利用区分</th>
                                                            <td><?php echo $_POST['B87']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>収納代行問合せ先名(漢字)</th>
                                                            <td><?php echo $_POST['B66']; ?></td>
                                                            <th>投函予定メールe-mailアドレス</th>
                                                            <td><?php echo $_POST['B88']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>収納代行問合せ先郵便番号</th>
                                                            <td><?php echo $_POST['B67']; ?></td>
                                                            <th>投函予定メールメッセージ</th>
                                                            <td><?php echo $_POST['B89']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>収納代行問合せ先住所</th>
                                                            <td><?php echo $_POST['B68']; ?></td>
                                                            <th>投函完了メール（お届け先宛）利用区分</th>
                                                            <td><?php echo $_POST['B90']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>アパートマンション名</th>
                                                            <td><?php echo $_POST['B69']; ?></td>
                                                            <th>投函完了メール（お届け先宛）e-mailアドレス</th>
                                                            <td><?php echo $_POST['B91']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>収納代行問合せ先電話番号</th>
                                                            <td><?php echo $_POST['B70']; ?></td>
                                                            <th>投函完了メール（お届け先宛）メールメッセージ</th>
                                                            <td><?php echo $_POST['B92']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>収納代行管理番号</th>
                                                            <td><?php echo $_POST['B71']; ?></td>
                                                            <th>投函完了メール（ご依頼主宛）利用区分</th>
                                                            <td><?php echo $_POST['B93']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>収納代行品名</th>
                                                            <td><?php echo $_POST['B72']; ?></td>
                                                            <th>投函完了メール（ご依頼主宛）e-mailアドレス</th>
                                                            <td><?php echo $_POST['B94']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>収納代行備考</th>
                                                            <td><?php echo $_POST['B73']; ?></td>
                                                            <th>投函完了メール（ご依頼主宛）メールメッセージ</th>
                                                            <td><?php echo $_POST['B95']; ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </dd>
                                        </dl>
                                <!-- </form> -->
                            </div>
                            <div class="contents_top_right">
                                <!-- <form class="destination_form" action="destination_input_complete.php" method="POST"> -->
                                    <caption>送り主情報</caption>
                                    <table class="destination_table2">
                                        <tbody>
                                            <tr>
                                                <th>ご依頼主コード</th>
                                                <td><?php echo $_POST['B19']; ?></td>
                                                <th>ご依頼主電話番号</th>
                                                <td><?php echo $_POST['B20']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>ご依頼主郵便番号</th>
                                                <td><?php echo $_POST['B22']; ?></td>
                                                <th>ご依頼主電話番号枝番</th>
                                                <td><?php echo $_POST['B21']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>ご依頼主住所</th>
                                                <td colspan="3"><?php echo $_POST['B23']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>ご依頼主アパートマンション</th>
                                                <td colspan="3"><?php echo $_POST['B24']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>ご依頼主名</th>
                                                <td colspan="3"><?php echo $_POST['B25']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>ご依頼主名（ｶﾅ）</th>
                                                <td colspan="3"><?php echo $_POST['B26']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>品名コード１</th>
                                                <td><?php echo $_POST['B27']; ?></td>
                                                <th>品名１</th>
                                                <td><?php echo $_POST['B28']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>品名コード２</th>
                                                <td><?php echo $_POST['B29']; ?></td>
                                                <th>品名2</th>
                                                <td><?php echo $_POST['B30']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>荷扱い１</th>
                                                <td><?php echo $_POST['B31']; ?></td>
                                                <th>荷扱い２</th>
                                                <td><?php echo $_POST['B32']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>記事</th>
                                                <td colspan="3"><?php echo $_POST['B33']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>ｺﾚｸﾄ代金引換額（税込）</th>
                                                <td><?php echo $_POST['B34']; ?></td>
                                                <th>内消費税額等</th>
                                                <td><?php echo $_POST['B35']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>止置き</th>
                                                <td><?php echo $_POST['B36']; ?></td>
                                                <th>止置き営業所コード</th>
                                                <td><?php echo $_POST['B37']; ?></td>
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
                                    </table>
                                
                                    <div class="contents_bottom">
                                        <p><a href="destination_input_page.php">送り状入力ページに戻る</a></p>
                                    </div><!--contents_bottom end-->
                                </form>
                            </div><!--contents_top_right end-->
                            
                        </div><!--destination_form_area end-->
                    </div><!--right_area_contents2 end-->
                </div><!--right_area end-->
            </div><!--main_area end-->
            
            <!--本文ここまで-->
        </div><!--main_wrap end-->
    </main>

<?php include('includes/footer.php'); ?>