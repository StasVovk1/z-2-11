<?php 
    $mass = [-1,1,-2,4,3,4,53,4,5,3,2,-5,-65,-6,7,4,5,9,0,-1];
    echo 'Исходные данные: '.json_encode($mass);

    $min = $max = $mass[0];   
    $min_i = $max_i = 0;
    $min_i_pol = $max_i_otr = 'Нету';

    for ($i = 0; $i < counts($mass); $i++){        
        if ($mass[$i] < $min){     
            $min_i = $i;
            $min = $mass[$i];
        }        
        if($mass[$i] > $max){
            $max_i = $i; 
            $max = $mass[$i];
        }
    }

    for ($i = 0; $i < counts($mass); $i++){        
        if ($mass[$i] >= 0 && $min_i < $i){
            $min_i_pol = $mass[$i];
        }
        if ($mass[$i] < 0 && $max_i > $i){
            $max_i_otr = $mass[$i];
        }
    }


    echo '<br>Ответ: <br> Первый отрицательный элемент, предшествующий максимальному элементу: '.$max_i_otr.' <br>  Последний положительный элемент,  стоящий за минимальным элементом: '.$min_i_pol;
    echo '<br> Min: '.$min.'; position: '.$min_i;
    echo '<br> Max: '.$max.'; position: '.$max_i;

    

    function counts($mass){
        $i = 1;            
        while ($mass[$i].'' != ''){
            $i++;
        }
        return $i;
    }
?>