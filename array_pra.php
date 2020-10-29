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

<h1>找出五百年內的閏年</h1>
<?php
$year=date("Y");
$array=[];

for($i=0;$i<500;$i++){

    if(($year+$i)%4 == 0 && (($year+$i)%100 != 0  || (($year+$i)%400==0 && ($year+$i) % 3200 !=0))){

        $array[]=$year+$i;
        
    }   
}

echo "五百年內的閏年:<br>";
foreach($array as $year){
    echo $year ."<br>";
}

echo "一共有".count($array)."個閏年";

?>

<h1>已知西元1024年為甲子年，提供一個西元年份，輸出天干地支的年別</h1>
<?php
$a=['甲','乙','丙','丁','戊','己','庚','辛','壬','癸'];
$b=['子','丑','寅','卯','辰','巳','午','未','申','酉','戌','亥'];
$year=1085;
echo $year,"年是",$a[abs(($year-1024)%10)],$b[abs(($year-1024)%12)],"年";
?>

<h1>在不產生新陣列的狀況，將一個陣列的元素順序反向</h1>
<?php
$a=[2,4,6,1,8];
echo"原陣列:";
echo"<pre>";
print_r($a);
echo"</pre>";

for($i=0;$i<ceil(count($a)/2);$i++){
  $tmp;
  $tmp=$a[$i];
  $a[$i]=$a[count($a)-1-$i];
  $a[count($a)-1-$i]=$tmp;
}
echo"反序後新陣列";
echo"<pre>";
print_r($a);
echo"</pre>";

echo"<pre>";
print_r(array_reverse($a));
echo"</pre>";

?>