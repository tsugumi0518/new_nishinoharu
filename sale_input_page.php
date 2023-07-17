<?php include('includes/cart.php'); ?>

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
                        <h2>販売入力</h2>
                    </div>

                    <!--ページごとの右側エリア-->
                    <div class="right_area_contents">
                        <?php include('includes/input_card_table2.php'); ?>
                    </div><!--right_area_contents end-->
                    <div class="contents_bottom">
                        <div class="contents_bottom_area">
                            <?php
                                // カートの表示
                                displayCartAndSendToDatabase();
                            ?>
                        </div>
                    </div><!--contents_bottom end-->
                </div><!--right_area end-->
            </div><!--main_area end-->
            
                <!--本文ここまで-->
        </div><!--main_wrap end-->
    </main>

<?php include('includes/footer.php'); ?>