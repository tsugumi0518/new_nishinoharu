<?php include('includes/login.php'); ?>
<?php include('includes/header.php'); ?>

    <main role="main" class="container">
        <div class="main_wrap">
            <!--ここから「本文」-->

            <div class="main_title">
                <h1>業務管理システム</h1>
            </div>
            <!--各システム切り替えボタン-->
            <div class="transition_wrap">
            <p><?php echo $_SESSION['employee_name']; ?>さん、現在ログイン中です。退社時はログアウトを忘れずに！</p>
                <div class="category_button_div">
                    <button class="category_button" onclick="location.href='#'"><span>顧客管理</span></button>
                    <button class="category_button" onclick="location.href='#'"><span>個体管理</span></button>
                    <button class="category_button" onclick="location.href='sale_input_page.php'"><span>販売管理</span></button>
                </div>
                <div class="logout_button_div">
                    <button class="logout_button" onclick="location.href='logout.php'"><span>ログアウト</span></button>
                </div>
            </div>
            
                <!--本文ここまで-->
        </div><!--main_wrap end-->
    </main>

<?php include('includes/footer.php'); ?>