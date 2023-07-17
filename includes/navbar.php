<div class="menu"><!--カテゴリ-->
    <label for="menu_bar01">顧客管理</label>
    <input type="checkbox" id="menu_bar01" />
    <ul id="links01">
        <li><a href="#">Link01</a></li>
        <li><a href="#">Link02</a></li>
    </ul>
    <label for="menu_bar02">個体管理</label>
    <input type="checkbox" id="menu_bar02" />
    <ul id="links02">
        <li><a href="#">Link01</a></li>
        <li><a href="#">Link02</a></li>
    </ul>
    <label for="menu_bar03">販売管理</label>
    <input type="checkbox" id="menu_bar03" />
    <ul id="links03">
        <li><a href="sale_input_list.php">販売一覧</a></li>
        <li><a href="sale_input_page.php">販売入力</a></li>
        <li><a href="destination_input_list.php">送り状作成一覧</a></li>
        <li><a href="destination_input_page.php">送り状入力</a></li>
        <li><a href="invoice_page.php">インボイス作成</a></li>
    </ul>
    <label for="menu_bar04">社員マスター</label>
    <input type="checkbox" id="menu_bar04" />
    <ul id="links04">
        <li><a href="user_entry.php">新規社員登録</a></li>
        <li><a href="#">Link02</a></li>
    </ul>
</div>
<div class="left_area_logout">
    <p class="login_name"><?php echo $_SESSION['employee_name']; ?></p>
    <button class="left_area_logout_button" onclick="location.href='logout.php'"><span>ログアウト</span></button>
</div>






