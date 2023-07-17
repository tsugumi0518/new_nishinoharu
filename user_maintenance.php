<?php 
    // include 'includes/login.php';

    //---------------------共通設定-------------------
    //DB接続情報。
    include 'includes/db_info.php';

    //受け取るデータの変数を用意
    $employee_id = mb_convert_kana($_POST['employee_id'], "n");
    $pass = mb_convert_kana($_POST['pass'], "a");
    $joining_company_date = $_POST['joining_company_date'];
    $employee_furigana = mb_convert_kana($_POST['employee_furigana'], "khs");
    $employee_name = mb_convert_kana($_POST['employee_name'], "s");
    $unit = $_POST['unit'];
    $director = $_POST['director'];

    //-------------------新規会員登録処理-----------------------
   
    if (isset($_POST['submit_new'])){
        
        //[0-9]{7}...=7文字の半角数字
        if (!preg_match('/^\d{7}$/', $employee_id)){
            exit('半角数字7文字で従業員IDを入力してください。');
        }

        //名前をクッキーにセット
        setcookie('name', $employee_name, time() + 60*60*24*0.5);

        //DB接続・データ保存
        try {
            include 'includes/pdo_info.php';

            //-------t_employeeテーブルのプリペアドステートメントを作成------------
            $stmt = $db->prepare(
                'INSERT INTO t_employee (employee_id, password, joining_company_date, employee_furigana, employee_name, unit, director)
                VALUES (:employee_id, :pass, :joining_company_date, :employee_furigana, :employee_name, :unit, :director)'
            );

            //プリペアドステートメントにパラメーターを割り当てる
            //パスワードはハッシュ化する
            $stmt->bindParam(':employee_id', $employee_id, PDO::PARAM_INT);
            $stmt->bindParam(':pass', hash("sha256", $pass), PDO::PARAM_STR);
            $stmt->bindParam(':joining_company_date', $joining_company_date, PDO::PARAM_STR);
            $stmt->bindParam(':employee_furigana', $employee_furigana, PDO::PARAM_STR);
            $stmt->bindParam(':employee_name', $employee_name, PDO::PARAM_STR);
            $stmt->bindParam(':unit', $unit, PDO::PARAM_STR);
            $stmt->bindParam(':director', $director, PDO::PARAM_STR);

            //クエリの実行
            $stmt->execute();

        } catch (PDOException $e){
            exit('エラー：' . $e->getMessage());
        }
    }

    //-------------------会員変更処理-----------------------
    if (isset($_POST['submit_change'])){
        echo '変更ボタンが押されました';
    }

    //-------------------会員削除処理-----------------------
    if (isset($_POST['submit_delete'])){
        //データの受け取り変数設定
        $employee_id = mb_convert_kana($_POST['employee_id'], "n");

        //DB接続・データ削除
        try {
            include 'includes/pdo_info.php';

            //-----------t_employeeテーブルから削除--------------
            $stmt = $db->prepare('
                DELETE FROM t_employee
                WHERE employee_id = :employee_id
            ');

            //プリペアドステートメントにパラメーターを割り当てる
            $stmt->bindParam(':employee_id', $employee_id, PDO::PARAM_STR);

            //クエリの実行
            $stmt->execute();

        } catch (PDOException $e){
            exit('エラー：' . $e->getMessage());
        }
    }

    //ユーザ情報入力画面に戻る
    header('Location: index_login.php');
    exit();
?>
