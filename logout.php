<?php 
session_start();  // セッション開始

// セッション変数が存在する場合、削除する
if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
} 

// ログインページにリダイレクト
header('Location: index.php');
exit();
?>

<?php include 'includes/header.php'; ?>

<main role="main" class="container">
    <div class="main_wrap">
        <!--ここから「本文」-->
        <div class="login_wrap">
            <div class="main_title">
                <h1>業務管理システム</h1>
            </div>
            <!--ログインフォーム-->
            <div class="login_form_wrap">
                <form class="login_form" action="index.php" method="POST">
                    <div class="form-group">
                        <div class="form-group_sub">
                            <label for="employee_id">社員番号　　</label>
                            <input type="text" id="employee_id" name="employee_id" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group_sub">
                            <label for="pass">パスワード　</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group_sub">
                            <input type="submit" class="login_btn" value="ログイン">
                        </div>
                    </div>
                </form>
            </div>
            <div class="main_title">
                <p>今日もお疲れ様です。</p>
            </div>
            <button class="user_entry_btn" onclick="location.href='user_entry.php'"><span>新規社員登録</span></button>
        </div><!--login_wrap end-->
        <!--本文ここまで-->
    </div><!--main_wrap end-->
</main>

<?php include 'includes/footer.php'; ?>
