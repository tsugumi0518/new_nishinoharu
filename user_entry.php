<?php include('includes/header.php'); ?>

    <main role="main" class="container">
        <div class="main_wrap">
            <!--ここから「本文」-->

            <div class="main_title">
                <h1>社員マスター</h1>
            </div>
            <!--各システム切り替えボタン-->
            <div class="transition_wrap">
                <div class="user_div">
                    <form action="user_maintenance.php" method="post">
                        <div class="form-group2">
                            <label>社員番号　※数字7ケタ</label>
                            <input type="number" name="employee_id" class="form-control" placeholder="半角数字7ケタで入力" required>
                        </div>
                        <div class="form-group2">
                            <label>ログインパスワード</label>
                            <input type="text" name="pass" pattern="^[a-zA-Z0-9]{4,12}$" class="form-control" placeholder="半角英数字で入力" required>
                        </div>
                        <div class="form-group2">
                            <label>入社年月日</label>
                            <input type="date" name="joining_company_date" class="form-control" required>
                        </div>
                        <div class="form-group2">
                            <label>読み仮名（カタカナ）</label>
                            <input type="text" name="employee_furigana" class="form-control" placeholder="苗字と名前の間は1文字あける" required>
                        </div>
                        <div class="form-group2">
                            <label>氏名（漢字）</label>
                            <input type="text" name="employee_name" class="form-control" placeholder="苗字と名前の間は1文字あける" required>
                        </div>
                        <div class="form-group2">
                            <label>部署名</label>
                            <input type="text" name="unit" class="form-control" required>
                        </div>
                        <div class="form-group2">
                            <label>役職</label>
                            <input type="text" name="director" class="form-control" required>
                        </div>
                        <div class="entry_div">
                            <input type="submit" class="btn btn-primary" name="submit_new" value="ユーザー新規登録">
                            <input type="submit" class="btn btn-primary" name="submit_change" value="ユーザー情報変更">
                            <input type="submit" class="btn btn-primary" name="submit_delete" value="ユーザー情報削除">
                        </div>
                    </form>
                <div><!--user_div end-->
                <div class="logout_button_div">
                    <button class="logout_button" onclick="location.href='logout.php'"><span>ログアウト</span></button>
                </div>
            </div><!--transition_wrap end-->
            
                <!--本文ここまで-->
        </div><!--main_wrap end-->
    </main>

<?php include('includes/footer.php'); ?>









