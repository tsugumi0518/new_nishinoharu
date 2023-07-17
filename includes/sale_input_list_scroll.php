<?php
include 'includes/db_info.php';
try {
    include 'includes/pdo_info.php';

    $stmt = $db->prepare('SELECT purchase_history.purchase_id, purchase_history.sale_time, purchase_history.total_price
                         FROM purchase_history
                         LEFT OUTER JOIN cart_items ON purchase_history.purchase_id = cart_items.purchase_id
                         GROUP BY purchase_history.purchase_id
                         ORDER BY sale_time DESC
                         ');
           
    // クエリ実行
    $stmt->execute();

} catch (PDOException $e) {
    exit('エラー：' . $e->getMessage());
}
?>

<div class="sale_list_scroll">
    <p>販売一覧</p>
    <table class="sale_list2">
        <thead>
            <tr>
                <th>選択</th>
                <th>販売管理番号</th>
                <th>販売日時</th>
                <th>合計金額</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $stmt->fetch()): ?>
                <tr>
                    <td>
                        <label>
                            <input type="radio" name="purchase_id[]" value="<?php echo $row['purchase_id']; ?>">
                        </label>
                    </td>
                    <td>
                        <div class="scroll_hover">
                            <?php echo $row['purchase_id']; ?>
                            <div class="scroll_detail">
                                <!-- 販売内容を <dl> 要素で表示 -->
                                <dl class="sale_detail_list_scr">
                                    <p>詳細表示</p>
                                    <div class="scr_dt">
                                        <dt>部位</dt>
                                        <dt>等級</dt>
                                        <dt>種類</dt>
                                        <dt>単価</dt>
                                        <dt>数量</dt>
                                    </div>
                                    <?php
                                    // 購入内容出力
                                    $stmt2 = $db->prepare('SELECT t_unit_price.meat_site, t_unit_price.grade, t_unit_price.classification, t_unit_price.unit_price, cart_items.volume
                                                        FROM cart_items
                                                        JOIN t_unit_price ON cart_items.unit_price_code = t_unit_price.unit_price_code
                                                        WHERE cart_items.purchase_id = :purchase_id');
                                    $stmt2->bindParam(':purchase_id', $row['purchase_id']);
                                    $stmt2->execute();
                                    while ($detailRow = $stmt2->fetch()) {
                                        echo '<div class="scr_dd">';
                                        echo '<dd>' . $detailRow['meat_site'] . '</dd>';
                                        echo '<dd>' . $detailRow['grade'] . '</dd>';
                                        echo '<dd>' . $detailRow['classification'] . '</dd>';
                                        echo '<dd>' . $detailRow['unit_price'] . '円' . '(税込：' . $detailRow['unit_price'] * 1.1 . '円)' . '</dd>';
                                        echo '<dd>' . $detailRow['volume'] . '</dd>';
                                        echo '</div>';
                                    }
                                    ?>
                                </dl>
                                <!-- 販売内容を <dl> 要素で表示終わり -->
                            </div>
                        </div>
                    </td>
                    <td><?php echo $row['sale_time']; ?></td>
                    <td><?php echo $row['total_price']; ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
