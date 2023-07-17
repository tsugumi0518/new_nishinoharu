<table class="destination_table">
<tbody>
    <tr>
        <th>お客様管理番号</th>
        <td><input type="text" name="B1"></td>
        <th>出荷予定日</th>
        <td><input type="date" name="B5"></td>
    </tr>
    <tr>
        <th>送り状種類</th>
        <td><select class="select_td" name='B2'>
                <option value='0'>発払い</option>
                <option value='2'>コレクト</option>
                <option value='3'>ＤＭ便</option>
                <option value='4'>タイム</option>
                <option value='5'>着払い</option>
                <option value='6'>発払い（複数口）</option>
                <option value='7'>ネコポス</option>
                <option value='8'>宅急便コンパクト</option>
                <option value='9'>宅急便コンパクトコレクト</option>
            </select>
        </td>
        <th>お届け予定日</th>
        <td><input type="date" name="B6"></td>
    </tr>
    <tr>
        <th>クール区分</th>
        <td><select class="select_td" name='B3'>
                <option value='0'>通常</option>
                <option value='1'>クール冷凍</option>
                <option value='2'>クール冷蔵</option>
            </select>
        </td>
        <th>配達時間帯</th>
        <td>
            <select class="select_td" name='B7'>
                <option value='0000'>指定なし</option>
                <option value='0812'>午前中</option>
                <option value='1416'>14～16時</option>
                <option value='1618'>16～18時</option>
                <option value='1820'>18～20時</option>
                <option value='1921'>19～21時</option>
                <option value='0010'>タイム指定10時まで</option>
                <option value='0011'>タイム指定110時まで</option>
                <option value='0012'>タイム指定12時まで</option>
                <option value='0013'>タイム指定13時まで</option>
                <option value='0014'>タイム指定14時まで</option>
                <option value='0015'>タイム指定15時まで</option>
                <option value='0016'>タイム指定16時まで</option>
                <option value='0017'>タイム指定17時まで</option>
                <option value='0018'>タイム指定18時まで</option>
                <option value='0019'>タイム指定19時まで</option>
            </select>
        </td>
    </tr>
    <tr>
        <th>伝票番号</th>
        <td><input type="text" name="B4"></td>
        <th>お届け先コード</th>
        <td><input type="text" name="B8"></td>
    </tr>
    <tr>
        <th>お届け先電話番号</th>
        <td><input type="tel" name="B9"></td>
    </tr>
    <tr>
        <th>お届け先電話番号枝番</th>
        <td><input type="text" name="B10"></td>
    </tr>
    <tr>
        <th>お届け先郵便番号</th>
        <td><input type="text" name="B11"></td>
    </tr>
    <tr>
        <th>お届け先住所</th>
        <td colspan="3"><input type="text" name="B12"></td>
    </tr>
    <tr>
        <th>アパートマンション名</th>
        <td colspan="3"><input type="text" name="B13"></td>
    </tr>
    <tr>
        <th>お届け先会社・部門１</th>
        <td colspan="3"><input type="text" name="B14"></td>
    </tr>
    <tr>
        <th>お届け先会社・部門２</th>
        <td colspan="3"><input type="text" name="B15"></td>
    </tr>
    <tr>
        <th>お届け先名</th>
        <td colspan="3"><input type="text" name="B16"></td>
    </tr>
    <tr>
        <th>お届け先名(ｶﾅ)</th>
        <td colspan="3"><input type="text" name="B17"></td>
    </tr>
    <tr>
        <th>敬称</th>
        <td>
            <select class="select_td" name='B18'>
                <option value='様'>様</option>
                <option value='御中'>御中</option>
                <option value='殿'>殿</option>
                <option value='行'>行</option>
                <option value='係'>係</option>
                <option value='宛'>宛</option>
                <option value='先生'>先生</option>
                <option value='なし'>なし</option>
            </select>
        </td>
    </tr>
</tbody>
</table>
