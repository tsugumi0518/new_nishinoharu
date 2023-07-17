<?php include('includes/login.php'); ?>
<?php
    include 'includes/db_info.php';

    // 接続
    include 'includes/pdo_info.php';

    // フォームデータ送信確認
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Fetch the form data
        $b1 = $_POST['B1'];

        // プリペアードステートメントを準備
        $stmt = $db->prepare('SELECT * FROM t_yamato WHERE B1 = :B1');
        $stmt->execute(['B1' => $b1]);
        $result = $stmt->fetchAll();

        if ($result) {
            $delimiter = ',';
            $filename = 'yamato_' . $b1 . '.csv';

            // ファイルポインタを作成
            $f = fopen('php://memory', 'w');

            // データの各行を出力し、行をCSV形式にフォーマットしてファイルポインタに書き込む
            foreach ($result as $row) {
                $lineData = array($row['B1'], $row['B2'], $row['B3'], $row['B4'], $row['B5'], $row['B6'],$row['B7'],$row['B8'],$row['B9'],$row['B10'],
                                $row['B11'],$row['B12'],$row['B13'],$row['B14'],$row['B15'],$row['B16'],$row['B17'],$row['B18'],$row['B19'],$row['B20'],
                                $row['B21'],$row['B22'],$row['B23'],$row['B24'],$row['B25'],$row['B26'],$row['B27'],$row['B28'],$row['B29'],$row['B30'],
                                $row['B31'],$row['B32'],$row['B33'],$row['B34'],$row['B35'],$row['B36'],$row['B37'],$row['B38'],$row['B39'],$row['B40'],
                                $row['B41'],$row['B42'],$row['B43'],$row['B44'],$row['B45'],$row['B46'],$row['B47'],$row['B48'],$row['B49'],$row['B50'],
                                $row['B51'],$row['B52'],$row['B53'],$row['B54'],$row['B55'],$row['B56'],$row['B57'],$row['B58'],$row['B59'],$row['B60'],
                                $row['B61'],$row['B62'],$row['B63'],$row['B64'],$row['B65'],$row['B66'],$row['B67'],$row['B68'],$row['B69'],$row['B70'],
                                $row['B71'],$row['B72'],$row['B73'],$row['B74'],$row['B75'],$row['B76'],$row['B77'],$row['B78'],$row['B79'],$row['B80'],
                                $row['B81'],$row['B82'],$row['B83'],$row['B84'],$row['B85'],$row['B86'],$row['B87'],$row['B88'],$row['B89'],$row['B90'],
                                $row['B91'],$row['B92'],$row['B93'],$row['B94'],$row['B95']
                            );
                fputcsv($f, $lineData, $delimiter);
            }

            // ファイルの先頭に戻る
            fseek($f, 0);

            // 表示ではなく、ファイルのダウンロードとしてヘッダーを設定する
            header('Content-Type: text/csv');
            header('Content-Disposition: attachment; filename="' . $filename . '";');

            // ファイルポインタ上の残りのすべてのデータを出力
            fpassthru($f);
        } else {
            echo '0 results';
        }
    } else {
        echo "フォームデータが受信されませんでした";
    }
    $db = null;
?>