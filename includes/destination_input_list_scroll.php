
<?php 
    include 'includes/db_info.php';
    try {
        include 'includes/pdo_info.php';

        $stmt = $db->prepare('SELECT B1, B5, B6, B2, B16, B12, B25, B23, B28
                            FROM t_yamato
							ORDER BY B1 DESC
                            ');
           
        //クエリ実行
        $stmt->execute();

    } catch (PDOException $e){
        exit('エラー：' . $e->getMessage());
    }
    
?>
<div class="sale_list_scroll">
    <!-- <form class="sale_list_form" action="#" method="POST"> -->
        <p>出荷情報一覧</P>
        <table class="destination_list2">
            <!-- <caption style="caption-side:top;">出荷情報一覧</caption> -->
            <thead>
                <tr>
                    <th>選択</th>
                    <th>出荷予定日</th>
                    <th>お届け予定日</th>
                    <th>送り状種類</th>
                    <th>お届け先名</th>
                    <th>お届け先住所</th>
                    <th>ご依頼主名</th>
                    <th>ご依頼主住所</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $stmt->fetch()): ?>
                    <tr>
                        <td>
                            <label>
                                <input type="radio" name="B1[]" value="<?php echo $row['B1']; ?>">
                            </label>
                        </td>
                        <td><?php echo $row['B5']; ?></td>
                        <td><?php echo $row['B6']; ?></td>
                        <td><?php echo $row['B2']; ?></td>
                        <td><?php echo $row['B16']; ?></td>
                        <td><?php echo $row['B12']; ?></td>
                        <td><?php echo $row['B25']; ?></td>
                        <td><?php echo $row['B23']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <!-- <button type="submit" class="detale_btn">詳細を表示</button> -->
    <!-- </form> -->
</div><!--sale_list_div end-->
