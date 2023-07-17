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
                        <h2>インボイス作成</h2>
                    </div>

                    <!--ページごとの右側エリア-->
                    <div class="right_area_contents3">
                        <div class="destination_form_area">
                            <div class="contents_top_left2">
                                <form action="invoice_do.php" method="POST" class="scroll_form">
                                <?php include('includes/sale_input_list_scroll.php'); ?>
                            </div>

                            <div class="contents_top_right2">
                                <?php include('includes/destination_input_list_scroll.php'); ?>
                            </div><!--contents_top_right end-->
                        </div><!--destination_form_area evd-->
                        <div class="invoice_btn">
                                <!-- <input type="hidden" name="purchase_id" value="<?php echo $row['purchase_id']; ?>">
                                <input type="hidden" name="B1" value="<?php echo $row['B1']; ?>"> -->
                                <input type="submit" class="invoice_submit" name="invoice_submit" value="インボイス作成">
                            </form>
                        </div>
                    </div><!--right_area_contents end-->
                </div><!--right_area end-->
            </div><!--main_area end-->
            
            <!--本文ここまで-->
        </div><!--main_wrap end-->
    </main>

<?php include('includes/footer.php'); ?>








