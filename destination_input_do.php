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
                        <h2>送り状確認</h2>
                    </div>

                    <!--ページごとの右側エリア-->
                    <div class="right_area_contents2">
                        <div class="destination_form_area">
                            <div class="contents_top_left">
                                <form class="destination_form" action="destination_input_complete.php" method="POST">
                                        <caption>お届け先情報</caption>
                                        <table class="destination_table2">
                                            <tbody>
                                                <tr>
                                                    <th>お客様管理番号</th>
                                                    <td><textarea name="B1" readonly style="white-space: normal"><?php echo $_POST['B1']; ?></textarea></td>
                                                    <th>出荷予定日</th>
                                                    <td><textarea name="B5" readonly style="white-space: normal"><?php echo $_POST['B5']; ?></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th>送り状種類</th>
                                                    <td><textarea name="B2" readonly style="white-space: normal"><?php echo $_POST['B2']; ?></textarea></td>
                                                    <th>お届け予定日</th>
                                                    <td><textarea name="B6" readonly style="white-space: normal"><?php echo $_POST['B6']; ?></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th>クール区分</th>
                                                    <td><textarea name="B3" readonly style="white-space: normal"><?php echo $_POST['B3']; ?></textarea></td>
                                                    <th>配達時間帯</th>
                                                    <td><textarea name="B7" readonly style="white-space: normal"><?php echo $_POST['B7']; ?></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th>伝票番号</th>
                                                    <td><textarea name="B4" readonly style="white-space: normal"><?php echo $_POST['B4']; ?></textarea></td>
                                                    <th>お届け先コード</th>
                                                    <td><textarea name="B8" readonly style="white-space: normal"><?php echo $_POST['B8']; ?></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th>お届け先電話番号</th>
                                                    <td><textarea name="B9" readonly style="white-space: normal"><?php echo $_POST['B9']; ?></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th>お届け先電話番号枝番</th>
                                                    <td><textarea name="B10" readonly style="white-space: normal"><?php echo $_POST['B10']; ?></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th>お届け先郵便番号</th>
                                                    <td><textarea name="B11" readonly style="white-space: normal"><?php echo $_POST['B11']; ?></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th>お届け先住所</th>
                                                    <td colspan="3"><textarea name="B12" readonly style="white-space: normal"><?php echo $_POST['B12']; ?></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th>アパートマンション名</th>
                                                    <td colspan="3"><textarea name="B13" readonly style="white-space: normal"><?php echo $_POST['B13']; ?></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th>お届け先会社・部門１</th>
                                                    <td colspan="3"><textarea name="B14" readonly style="white-space: normal"><?php echo $_POST['B14']; ?></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th>お届け先会社・部門２</th>
                                                    <td colspan="3"><textarea name="B15" readonly style="white-space: normal"><?php echo $_POST['B15']; ?></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th>お届け先名</th>
                                                    <td colspan="3"><textarea name="B16" readonly style="white-space: normal"><?php echo $_POST['B16']; ?></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th>お届け先名(ｶﾅ)</th>
                                                    <td colspan="3"><textarea name="B17" readonly style="white-space: normal"><?php echo $_POST['B17']; ?></textarea></td>
                                                </tr>
                                                <tr>
                                                    <th>敬称</th>
                                                    <td><textarea name="B18" readonly style="white-space: normal"><?php echo $_POST['B18']; ?></textarea></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <!--アコーディオン/その他エリア-->
                                        <dl class="other_input_area">
                                            <dt class="other_input_area_dt">その他の項目</dt>
                                            <dd class="other_input_area_dd">
                                                <caption>その他設定</caption>
                                                <table class="other_table2">
                                                    <tbody>
                                                        <tr>
                                                            <th>発行枚数</th>
                                                            <td><textarea name="B38" readonly style="white-space: normal"><?php echo $_POST['B38']; ?></textarea></td>
                                                            <th>クロネコwebコレクトデータ登録</th>
                                                            <td><textarea name="B43" readonly style="white-space: normal"><?php echo $_POST['B43']; ?></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <th>個数口表示フラグ</th>
                                                            <td><textarea name="B39" readonly style="white-space: normal"><?php echo $_POST['B39']; ?></textarea></td>
                                                            <th>クロネコwebコレクト加盟店番号</th>
                                                            <td><textarea name="B44" readonly style="white-space: normal"><?php echo $_POST['B44']; ?></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <th>請求先顧客コード</th>
                                                            <td><textarea name="B40" readonly style="white-space: normal"><?php echo $_POST['B40']; ?></textarea></td>
                                                            <th>クロネコwebコレクト申込受付番号１</th>
                                                            <td><textarea name="B45" readonly style="white-space: normal"><?php echo $_POST['B45']; ?></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <th>請求先分類コード</th>
                                                            <td><textarea name="B41" readonly style="white-space: normal"><?php echo $_POST['B41']; ?></textarea></td>
                                                            <th>クロネコwebコレクト申込受付番号２</th>
                                                            <td><textarea name="B46" readonly style="white-space: normal"><?php echo $_POST['B46']; ?></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <th>運賃管理番号</th>
                                                            <td><textarea name="B42" readonly style="white-space: normal"><?php echo $_POST['B42']; ?></textarea></td>
                                                            <th>クロネコwebコレクト申込受付番号３</th>
                                                            <td><textarea name="B47" readonly style="white-space: normal"><?php echo $_POST['B47']; ?></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <th>お届け予定ｅメール利用区分</th>
                                                            <td><textarea name="B48" readonly style="white-space: normal"><?php echo $_POST['B48']; ?></textarea></td>
                                                            <th>入力機種</th>
                                                            <td><textarea name="B50" readonly style="white-space: normal"><?php echo $_POST['B50']; ?></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <th>お届け予定ｅメールe-mailアドレス</th>
                                                            <td><textarea name="B49" readonly style="white-space: normal"><?php echo $_POST['B49']; ?></textarea></td>
                                                            <th>お届け予定ｅメールメッセージ</th>
                                                            <td><textarea name="B51" readonly style="white-space: normal"><?php echo $_POST['B51']; ?></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <th>お届け完了ｅメール利用区分</th>
                                                            <td><textarea name="B52" readonly style="white-space: normal"><?php echo $_POST['B52']; ?></textarea></td>
                                                            <th>複数口くくりキー</th>
                                                            <td><textarea name="B74" readonly style="white-space: normal"><?php echo $_POST['B74']; ?></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <th>お届け完了ｅメールe-mailアドレス</th>
                                                            <td><textarea name="B53" readonly style="white-space: normal"><?php echo $_POST['B53']; ?></textarea></td>
                                                            <th>検索キータイトル1</th>
                                                            <td><textarea name="B75" readonly style="white-space: normal"><?php echo $_POST['B75']; ?></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <th>お届け完了ｅメールメッセージ</th>
                                                            <td><textarea name="B54" readonly style="white-space: normal"><?php echo $_POST['B54']; ?></textarea></td>
                                                            <th>検索キー1</th>
                                                            <td><textarea name="B76" readonly style="white-space: normal"><?php echo $_POST['B76']; ?></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <th>クロネコ収納代行利用区分</th>
                                                            <td><textarea name="B55" readonly style="white-space: normal"><?php echo $_POST['B55']; ?></textarea></td>
                                                            <th>検索キータイトル2</th>
                                                            <td><textarea name="B77" readonly style="white-space: normal"><?php echo $_POST['B77']; ?></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <th>予備</th>
                                                            <td><textarea name="B56" readonly style="white-space: normal"><?php echo $_POST['B56']; ?></textarea></td>
                                                            <th>検索キー2</th>
                                                            <td><textarea name="B78" readonly style="white-space: normal"><?php echo $_POST['B78']; ?></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <th>収納代行請求金額(税込)</th>
                                                            <td><textarea name="B57" readonly style="white-space: normal"><?php echo $_POST['B57']; ?></textarea></td>
                                                            <th>検索キータイトル3</th>
                                                            <td><textarea name="B79" readonly style="white-space: normal"><?php echo $_POST['B79']; ?></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <th>収納代行内消費税額等</th>
                                                            <td><textarea name="B58" readonly style="white-space: normal"><?php echo $_POST['B58']; ?></textarea></td>
                                                            <th>検索キー3</th>
                                                            <td><textarea name="B80" readonly style="white-space: normal"><?php echo $_POST['B80']; ?></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <th>収納代行請求先郵便番号</th>
                                                            <td><textarea name="B59" readonly style="white-space: normal"><?php echo $_POST['B59']; ?></textarea></td>
                                                            <th>検索キータイトル4</th>
                                                            <td><textarea name="B81" readonly style="white-space: normal"><?php echo $_POST['B81']; ?></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <th>収納代行請求先住所</th>
                                                            <td><textarea name="B60" readonly style="white-space: normal"><?php echo $_POST['B60']; ?></textarea></td>
                                                            <th>検索キー4</th>
                                                            <td><textarea name="B82" readonly style="white-space: normal"><?php echo $_POST['B82']; ?></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <th>アパートマンション名</th>
                                                            <td><textarea name="B61" readonly style="white-space: normal"><?php echo $_POST['B61']; ?></textarea></td>
                                                            <th>検索キータイトル5</th>
                                                            <td><textarea name="B83" readonly style="white-space: normal"><?php echo $_POST['B83']; ?></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <th>収納代行請求先会社・部門名１</th>
                                                            <td><textarea name="B62" readonly style="white-space: normal"><?php echo $_POST['B62']; ?></textarea></td>
                                                            <th>検索キー5</th>
                                                            <td><textarea name="B84" readonly style="white-space: normal"><?php echo $_POST['B84']; ?></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <th>収納代行請求先会社・部門名２</th>
                                                            <td><textarea name="B63" readonly style="white-space: normal"><?php echo $_POST['B63']; ?></textarea></td>
                                                            <th>予備</th>
                                                            <td><textarea name="B85" readonly style="white-space: normal"><?php echo $_POST['B85']; ?></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <th>収納代行請求先名(漢字)</th>
                                                            <td><textarea name="B64" readonly style="white-space: normal"><?php echo $_POST['B64']; ?></textarea></td>
                                                            <th>予備</th>
                                                            <td><textarea name="B86" readonly style="white-space: normal"><?php echo $_POST['B86']; ?></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <th>収納代行請求先名(カナ)</th>
                                                            <td><textarea name="B65" readonly style="white-space: normal"><?php echo $_POST['B65']; ?></textarea></td>
                                                            <th>投函予定メール利用区分</th>
                                                            <td><textarea name="B87" readonly style="white-space: normal"><?php echo $_POST['B87']; ?></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <th>収納代行問合せ先名(漢字)</th>
                                                            <td><textarea name="B66" readonly style="white-space: normal"><?php echo $_POST['B66']; ?></textarea></td>
                                                            <th>投函予定メールe-mailアドレス</th>
                                                            <td><textarea name="B88" readonly style="white-space: normal"><?php echo $_POST['B88']; ?></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <th>収納代行問合せ先郵便番号</th>
                                                            <td><textarea name="B67" readonly style="white-space: normal"><?php echo $_POST['B67']; ?></textarea></td>
                                                            <th>投函予定メールメッセージ</th>
                                                            <td><textarea name="B89" readonly style="white-space: normal"><?php echo $_POST['B89']; ?></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <th>収納代行問合せ先住所</th>
                                                            <td><textarea name="B68" readonly style="white-space: normal"><?php echo $_POST['B68']; ?></textarea></td>
                                                            <th>投函完了メール（お届け先宛）利用区分</th>
                                                            <td><textarea name="B90" readonly style="white-space: normal"><?php echo $_POST['B90']; ?></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <th>アパートマンション名</th>
                                                            <td><textarea name="B69" readonly style="white-space: normal"><?php echo $_POST['B69']; ?></textarea></td>
                                                            <th>投函完了メール（お届け先宛）e-mailアドレス</th>
                                                            <td><textarea name="B91" readonly style="white-space: normal"><?php echo $_POST['B91']; ?></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <th>収納代行問合せ先電話番号</th>
                                                            <td><textarea name="B70" readonly style="white-space: normal"><?php echo $_POST['B70']; ?></textarea></td>
                                                            <th>投函完了メール（お届け先宛）メールメッセージ</th>
                                                            <td><textarea name="B92" readonly style="white-space: normal"><?php echo $_POST['B92']; ?></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <th>収納代行管理番号</th>
                                                            <td><textarea name="B71" readonly style="white-space: normal"><?php echo $_POST['B71']; ?></textarea></td>
                                                            <th>投函完了メール（ご依頼主宛）利用区分</th>
                                                            <td><textarea name="B93" readonly style="white-space: normal"><?php echo $_POST['B93']; ?></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <th>収納代行品名</th>
                                                            <td><textarea name="B72" readonly style="white-space: normal"><?php echo $_POST['B72']; ?></textarea></td>
                                                            <th>投函完了メール（ご依頼主宛）e-mailアドレス</th>
                                                            <td><textarea name="B94" readonly style="white-space: normal"><?php echo $_POST['B94']; ?></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <th>収納代行備考</th>
                                                            <td><textarea name="B73" readonly style="white-space: normal"><?php echo $_POST['B73']; ?></textarea></td>
                                                            <th>投函完了メール（ご依頼主宛）メールメッセージ</th>
                                                            <td><textarea name="B95" readonly style="white-space: normal"><?php echo $_POST['B95']; ?></textarea></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </dd>
                                        </dl>
                                <!-- </form> -->
                            </div>
                            <div class="contents_top_right">
                                <!-- <form class="destination_form" action="destination_input_complete.php" method="POST"> -->
                                    <caption>送り主情報</caption>
                                    <table class="destination_table2">
                                        <tbody>
                                            <tr>
                                                <th>ご依頼主コード</th>
                                                <td><textarea name="B19" readonly style="white-space: normal"><?php echo $_POST['B19']; ?></textarea></td>
                                                <th>ご依頼主電話番号</th>
                                                <td><textarea name="B20" readonly style="white-space: normal"><?php echo $_POST['B20']; ?></textarea></td>
                                            </tr>
                                            <tr>
                                                <th>ご依頼主郵便番号</th>
                                                <td><textarea name="B22" readonly style="white-space: normal"><?php echo $_POST['B22']; ?></textarea></td>
                                                <th>ご依頼主電話番号枝番</th>
                                                <td><textarea name="B21" readonly style="white-space: normal"><?php echo $_POST['B21']; ?></textarea></td>
                                            </tr>
                                            <tr>
                                                <th>ご依頼主住所</th>
                                                <td colspan="3"><textarea name="B23" readonly style="white-space: normal"><?php echo $_POST['B23']; ?></textarea></td>
                                            </tr>
                                            <tr>
                                                <th>ご依頼主アパートマンション</th>
                                                <td colspan="3"><textarea name="B24" readonly style="white-space: normal"><?php echo $_POST['B24']; ?></textarea></td>
                                            </tr>
                                            <tr>
                                                <th>ご依頼主名</th>
                                                <td colspan="3"><textarea name="B25" readonly style="white-space: normal"><?php echo $_POST['B25']; ?></textarea></td>
                                            </tr>
                                            <tr>
                                                <th>ご依頼主名（ｶﾅ）</th>
                                                <td colspan="3"><textarea name="B26" readonly style="white-space: normal"><?php echo $_POST['B26']; ?></textarea></td>
                                            </tr>
                                            <tr>
                                                <th>品名コード１</th>
                                                <td><textarea name="B27" readonly style="white-space: normal"><?php echo $_POST['B27']; ?></textarea></td>
                                                <th>品名１</th>
                                                <td><textarea name="B28" readonly style="white-space: normal"><?php echo $_POST['B28']; ?></textarea></td>
                                            </tr>
                                            <tr>
                                                <th>品名コード２</th>
                                                <td><textarea name="B29" readonly style="white-space: normal"><?php echo $_POST['B29']; ?></textarea></td>
                                                <th>品名2</th>
                                                <td><textarea name="B30" readonly style="white-space: normal"><?php echo $_POST['B30']; ?></textarea></td>
                                            </tr>
                                            <tr>
                                                <th>荷扱い１</th>
                                                <td><textarea name="B31" readonly style="white-space: normal"><?php echo $_POST['B31']; ?></textarea></td>
                                                <th>荷扱い２</th>
                                                <td><textarea name="B32" readonly style="white-space: normal"><?php echo $_POST['B32']; ?></textarea></td>
                                            </tr>
                                            <tr>
                                                <th>記事</th>
                                                <td colspan="3"><textarea name="B33" readonly style="white-space: normal"><?php echo $_POST['B33']; ?></textarea></td>
                                            </tr>
                                            <tr>
                                                <th>ｺﾚｸﾄ代金引換額（税込）</th>
                                                <td><textarea name="B34" readonly style="white-space: normal"><?php echo $_POST['B34']; ?></textarea></td>
                                                <th>内消費税額等</th>
                                                <td><textarea name="B35" readonly style="white-space: normal"><?php echo $_POST['B35']; ?></textarea></td>
                                            </tr>
                                            <tr>
                                                <th>止置き</th>
                                                <td><textarea name="B36" readonly style="white-space: normal"><?php echo $_POST['B36']; ?></textarea></td>
                                                <th>止置き営業所コード</th>
                                                <td><textarea name="B37" readonly style="white-space: normal"><?php echo $_POST['B37']; ?></textarea></td>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <td></td>
                                                <th></th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <td></td>
                                                <th></th>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                
                                    <div class="contents_bottom">
                                        <button type="button" onclick="history.back(-1)"  class="destination_input_btn">戻る</button>
                                        <button class="destination_input_btn">送信</button>
                                    </div><!--contents_bottom end-->
                                </form>
                            </div><!--contents_top_right end-->
                            
                        </div><!--destination_form_area evd-->
                    </div><!--right_area_contents2 end-->
                </div><!--right_area end-->
            </div><!--main_area end-->
            
            <!--本文ここまで-->
        </div><!--main_wrap end-->
    </main>

<?php include('includes/footer.php'); ?>