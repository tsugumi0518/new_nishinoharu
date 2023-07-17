<?php
session_start();

// ログインフォームが送信された場合の処理
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // データベースへの接続情報を設定してください
    include 'includes/db_info.php';

    include 'includes/pdo_info.php';

    // POSTされた社員番号とパスワードを取得
    $inputId = $_POST['id'];
    $inputPass = $_POST['pass'];

    // データベースから該当の社員情報を取得するクエリを実行
    $stmt = $db->prepare("SELECT * FROM t_employee WHERE employee_id = :id");
    $stmt->bindParam(':id', $inputId);
    $stmt->execute();

    if ($stmt->rowCount() === 1) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // パスワードの検証
        $hashedPass = hash('sha256', $inputPass);
        if ($hashedPass === $row['password']) {
            // ログイン成功時の処理
            $_SESSION['user'] = $row['employee_id'];
            $_SESSION['employee_name'] = $row['employee_name'];
            $_SESSION['login_time'] = time();
            $_SESSION['expiration'] = $_SESSION['login_time'] + (12 * 60 * 60); // 12時間後のタイムスタンプ
            header('Location: top.php');
            exit();
        }
    }

    // ログインが失敗した場合のエラーメッセージ
    $errorMessage = "ログインに失敗しました。";
}
?>

<?php include('includes/header.php'); ?>

<main role="main" class="container">
    <div class="main_wrap">
        <!--ここから「本文」-->
        <div class="login_wrap">
            <div class="main_title">
                <h1>業務管理システム</h1>
            </div>
            <!--ログインフォーム-->
            <div class="login_form_wrap">
                <form class="login_form" action="index_login.php" method="POST">
                    <div class="form-group">
                        <div class="form-group_sub">
                            <label for="name">社員番号　　</label>
                            <input type="text" id="id" name="id" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group_sub">
                            <label for="name">パスワード　</label>
                            <input type="password" id="pass" name="pass" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group_sub">
                            <input type="submit" class="login_btn" value="ログイン">
                        </div>
                    </div>
                </form>
            </div>
            <?php if (isset($errorMessage)): ?>
                <div class="error_message">
                    <p><?php echo $errorMessage; ?></p>
                </div>
            <?php endif; ?>
            <div class="main_title">
                <p>新規社員登録が完了しました。</p>
            </div>
        </div><!--login_wrap end-->
            <!--本文ここまで-->
    </div><!--main_wrap end-->
</main>

<?php include('includes/footer.php'); ?>
