<h1>大樂透選號</h1>

<?php
//亂數函式 rand(x,y)

$lotto=[];
while(count($lotto)<6){
  $t=rand(1,49);
  if(!in_array ($t,$lotto)){
    $lotto[]=$t;
  }
}

echo "<pre>";
print_r($lotto);
echo "</pre>"


?>

<h1>威力彩選號</h1>

<?php
//亂數函式 rand(x,y)

$lotto=[];
$second=rand(1,8);
while(count($lotto)<6){
  
  $t=rand(1,38);
  if(!in_array ($t,$lotto)){
    $lotto[]=$t;
  }
}
$lotto[]=$second;
echo "<pre>";
print_r($lotto);
echo "</pre>"

?>

<h3>威力彩對獎</h3>
中獎號碼:
第一區:08,15,21,28,38,39;<br>
第二區:07;<br>

<?php
//亂數函式 rand(x,y)
$s1=[8,15,21,27,28,38];
$s2=7;
$lotto=[];
$second=rand(1,8);
while(count($lotto)<6){
  
  $t=rand(1,38);
  if(!in_array ($t,$lotto)){
    $lotto[]=$t;
  }
}
$lotto[]=$second;
echo "<pre>";
print_r($lotto);
echo "</pre>";

$l2=array_pop($lotto);
if($l2==$s2){
  $res2=1;
}else{
  $res2=0;
}

// print_r($lotto);

$res1=0;
foreach($s1 as $t){
  foreach($lotto as $l){
    if($t==$l){
      $res1=$res1+1;
    }
  }
}

echo "<br>";
echo "第一區中了".$res1."個號碼<br>";
echo "第二區中了".$res2."個號碼<br>";

?>



<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>