<?php
    foreach ($formValues2 as $formValue3) {
        $stmt3 = $db->prepare('SELECT B12 FROM t_yamato WHERE B1 = :B1');
        $stmt3->bindValue(':B1', $formValue2);
        $stmt3->execute();
        $result3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);
    
        // B12の最初の3文字を抜き出して出力する
        foreach ($result3 as $row3) {
            $b12 = $row3['B12'];
            $firstThreeCharacters = mb_substr($b12, 0, 3, 'UTF-8');
    
            $stmt4 = $db->prepare('SELECT area FROM yamato_zone WHERE prefectures LIKE :prefecture');
            $stmt4->bindValue(':prefecture', '%' . $firstThreeCharacters . '%');
            $stmt4->execute();
            $result4 = $stmt4->fetchAll(PDO::FETCH_ASSOC);
    
            // 部分一致したデータの出力
            foreach ($result4 as $row4) {
                $area = $row4['area'];
    
                $stmt5 = $db->prepare('SELECT tariff FROM yamato_tariff_list WHERE arrival_zone LIKE :arrivalZone AND size = 80');
                $stmt5->bindValue(':arrivalZone', '%' . $area . '%');
                $stmt5->execute();
                $result5 = $stmt5->fetchAll(PDO::FETCH_ASSOC);
    
                // 部分一致かつsizeが80のデータの出力
                foreach ($result5 as $row5) {
                    $tariff = $row5['tariff'];
                }
            }
        }
    }
   
?>