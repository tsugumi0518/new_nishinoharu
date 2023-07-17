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
                        <h2>送り状入力</h2>
                    </div>

                    <!--ページごとの右側エリア-->
                    <div class="right_area_contents2">
                        <div class="destination_form_area">
                            <div class="contents_top_left">
                                <form class="destination_form" action="destination_input_do.php" method="POST">
                                    <caption>お届け先情報</caption>
                                    <?php include('includes/to_destination_table.php'); ?>

                                    <!--アコーディオン/その他エリア-->
                                    <?php include('includes/other_table.php'); ?>
                                <!-- </form> -->
                            </div>
                            <div class="contents_top_right">
                                <!-- <form class="destination_form" action="destination_input_do.php" method="POST"> -->
                                    <caption>送り主情報</caption>
                                    <?php include('includes/from_destination_table.php'); ?>
                                
                                    <div class="contents_bottom2">
                                        <input type="submit" class="destination_input_btn" name="destination_input_btn" value="入力内容確認">
                                    </div><!--contents_bottom end-->
                                </form>
                            </div><!--contents_top_right end-->
                        </div><!--destination_form_area evd-->
                    </div><!--right_area_contents end-->
                </div><!--right_area end-->
            </div><!--main_area end-->
            
            <!--本文ここまで-->
        </div><!--main_wrap end-->
    </main>

<?php include('includes/footer.php'); ?>








