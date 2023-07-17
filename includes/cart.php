<?php
// セッションの有効期限を1時間に設定
ini_set('session.cookie_lifetime', 3600);
session_start();

// カートが空の場合は初期化---------------------
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// 商品をカートに追加する---------------------
function addToCart($unit_price_code, $unit_name, $meat_site, $grade, $classification, $unit_price, $volume) {
    // すでにカートに同じ商品がある場合、数量を更新する
    if (isset($_SESSION['cart'][$unit_price_code])) {
        $_SESSION['cart'][$unit_price_code]['volume'] += $volume;
    } else {
        $_SESSION['cart'][$unit_price_code] = array(
            'unit_name' => $unit_name,
            'meat_site' => $meat_site,
            'grade' => $grade,
            'classification' => $classification,
            'unit_price' => $unit_price,
            'volume' => $volume,
        );
    }
}

// カートから商品を削除する---------------------
function removeFromCart($unit_price_code) {
    if (isset($_SESSION['cart'][$unit_price_code])) {
        unset($_SESSION['cart'][$unit_price_code]);
    }
}

// カートの合計金額を計算する---------------------
function calculateTotal() {
    $total = 0;
    foreach ($_SESSION['cart'] as $item) {
        $total += $item['unit_price'] * $item['volume'];
    }
    return $total;
}

// カートの内容を表示する---------------------
function displayCartAndSendToDatabase() {
    // データベース接続の設定
    include('includes/db_info.php');

    $cart = $_SESSION['cart'];
    $total = calculateTotal();

    // バッファリングを開始
    ob_start();

    echo '<div class="total_price_div">';
        echo '<p class="total_p">カートの中身</p>';
        echo '<p class="total_p">合計金額: ' . $total * 1.1 . '円' . '(' . '税：' . round($total * 0.1) . ')</p>';
        echo '<form action="sale_input_page.php" method="post">';
            echo '<button type="submit" name="submit" id="btn3">登録</button>';
        echo '</form>';
    echo '</div>';
    echo '<ul class="total_li">';
    foreach ($cart as $unit_price_code => $item) {
        echo '<li>';
        echo $item['unit_name'] . $item['grade'] . ' 個数: ' . $item['volume'] . ' × ' . $item['unit_price'] . '円';
        echo '<form action="" method="post">';
        echo '<input type="hidden" name="remove_id" value="' . $unit_price_code . '">';
        echo '<input type="submit" class="delete_btn" name="remove" value="削除">';
        echo '</form>';
        echo '</li>';
    }
    echo '</ul>';

    // バッファの内容を送信
    ob_end_flush();

    // 登録ボタンが押された場合の処理
    if (isset($_POST['submit'])) {
        try {
            $db = new PDO($dsn, $user, $password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // 買い物データを作成
            $randomNumber = str_pad(mt_rand(0, 99999), 5, '0', STR_PAD_LEFT);
            $purchase_id = date('YmdHis') . $randomNumber;
            $sale_time = date('Y-m-d H:i:s');
            $total_price = $total + round($total * 0.1);


            // 買い物データをデータベースに追加
            $sql = 'INSERT INTO purchase_history (purchase_id, sale_time, total_price) VALUES (:purchase_id, :sale_time, :total_price)';
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':purchase_id', $purchase_id, PDO::PARAM_STR);
            $stmt->bindParam(':sale_time', $sale_time, PDO::PARAM_STR);
            $stmt->bindParam(':total_price', $total_price, PDO::PARAM_STR);
            $stmt->execute();

            // 追加した買い物データのIDを取得
            // $purchase_id = $db->lastInsertId();

            // カート内の各アイテムをデータベースに追加
            foreach ($cart as $unit_price_code => $item) {
                $volume = $item['volume'];
                
                // $unit_price_code = $item['unit_price_code'];

                $sql = 'INSERT INTO cart_items (purchase_id, unit_price_code, sale_time, volume)
                        VALUES (:purchase_id, :unit_price_code, :sale_time, :volume)';
                $stmt = $db->prepare($sql);
                $stmt->bindParam(':purchase_id', $purchase_id, PDO::PARAM_STR);
                $stmt->bindParam(':unit_price_code', $unit_price_code, PDO::PARAM_STR);
                $stmt->bindParam(':sale_time', $sale_time, PDO::PARAM_STR);
                $stmt->bindParam(':volume', $volume, PDO::PARAM_INT);
                $stmt->execute();
            }
            // echo '登録完了';
            // echo '<a href="sale_input_page.php">販売入力画面へ戻る</a>';

            // 登録完了メッセージを作成
            $message = "登録完了しました。";

            // JavaScriptを出力してポップアップを表示
            echo '<script>alert("' . $message . '");</script>';

            // 作成リスト一覧へ飛ぶ
            echo '<script>window.location.href = "sale_input_list.php";</script>';

            // カートをクリア
            $_SESSION['cart'] = array();

            // セッションを破棄して終了
            // session_destroy();

            exit();
        } catch (PDOException $e) {
            echo "データベースエラー: " . $e->getMessage();
        }
    }
}

// POSTデータの処理---------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        $unit_price_code = $_POST['unit_price_code'];
        $unit_name = $_POST['unit_name'];
        $meat_site = $_POST['meat_site'];
        $grade = $_POST['grade'];
        $classification = $_POST['classification'];
        $volume = $_POST['volume'];
        $unit_price = $_POST['unit_price'];

        addToCart($unit_price_code, $unit_name, $meat_site, $grade, $classification, $unit_price, $volume);
    } elseif (isset($_POST['remove'])) {
        $removeId = $_POST['remove_id'];
        removeFromCart($removeId);
    }
}
?>