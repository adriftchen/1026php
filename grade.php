<h3>成績表格矩陣寫法</h3>
$id[]=student1;
$id[]=student2;
$id[]=student3;
$id[]=student4;
$id[]=student5;
<?php

$score_array=array(
0=> array('id'=>student1,'chinese'=>10,'english'=>20,
'history'=>30,'chemistry'=>40,'math'=>50
),
1=> array('id'=>student2,'chinese'=>50,'english'=>60,
'history'=>70,'chemistry'=>80,'math'=>90
),
2=> array('id'=>student3,'chinese'=>71,'english'=>72,
'history'=>73,'chemistry'=>74,'math'=>75
),
3=> array('id'=>student4,'chinese'=>90,'english'=>80,
'history'=>90,'chemistry'=>80,'math'=>90
),
4=> array('id'=>student5,'chinese'=>55,'english'=>65,
'history'=>75,'chemistry'=>85,'math'=>95
));
?>
<?php
//接著建立一個排序的函數

function score_sort($a, $b){

        //下面的chinese是要排序的陣列索引，可以替換成你要排序的東西(例如:english或是math)

        if($a['chinese'] == $b['chinese']) return 0;

        return ($a['chinese'] > $b['chinese']) ? 1 : -1;

}

//最後使用usort來做排序

// usort(要排序的陣列,使用的函數)

        usort($score_array, 'score_sort');

//列印驗證就可以了

        print_r($score_array);
        ?>