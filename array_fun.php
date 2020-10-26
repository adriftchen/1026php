<h1>陣列函式</h1>
<h3>is_array()</h3>
<?php

$a=[1,2,3];
$b="天氣";
echo '$a=>'.is_array($a);
echo "<br>";
echo '$b=>'.is_array($b); 
//單引號內為字串
echo "<br>";

if(is_array($a)){
  echo '$a is an array';
}else{
  echo '$a is not an array';
}
?>

<h3>in_array()</h3>
$a=['A','B','C','D','E'];

<?php
$a=['A','B','C','D','E'];
echo in_array('C',$a);
echo "<br>";
if (in_array('C',$a)){
  echo 'C在陣列中';
}else{
  echo 'C不在陣列中';
}

?>
<h3>sort()</h3>
<!-- key值排序完會不見 -->
<?php
$a=['D','B','A','C','E'];
print_r($a);
sort($a);
print_r($a);
echo "<br>"

?>
<?php

$a=[
'國文'=>'D',
'英文'=>'B',
'數學'=>'A',
'地理'=>'C',
'歷史'=>'E'
];
print_r($a);
echo "<br>";
sort($a);
print_r($a);
echo "<br>";
?>

<h3>array_fill()</h3>

<?php
$a=array_fill(0,10,'Hii');

echo "<pre>";
print_r($a);
echo "</pre>";
?>

<h3>array_search()</h3>
$a=[
'國文'=>'D',
'英文'=>'B',
'數學'=>'A',
'地理'=>'C',
'歷史'=>'E'
];
<br>
找成績A代表的科目

<?php
$a=[
  '國文'=>'D',
  '英文'=>'B',
  '數學'=>'A',
  '地理'=>'C',
  '歷史'=>'E'
  ];
echo array_search('A',$a);
echo "<br>";
$a=['D','B','A','A','E'];
echo array_search('A',$a);

?>

<h3>array_keys()</h3>

<?php
$a=[
  '國文'=>'D',
  '英文'=>'B',
  '數學'=>'A',
  '地理'=>'C',
  '歷史'=>'E'
  ];

  $keys=array_keys($a);
  echo "<pre>";print_r($keys);echo "</pre>";
?>

<h3>array_merge()</h3>
<?php
$a=[1,2,3];
$b=['A','B','C'];
$c=array_merge($a,$b);
echo "<pre>";print_r($c);echo "</pre>";

$c=array_merge($a,$b);
echo "<pre>";print_r($a);echo "</pre>";

?>
<h3>serialize()</h3>
<!-- unserialize() 變回陣列 -->

<?php
$a=[
  '國文'=>'D',
  '英文'=>'B',
  '數學'=>'A',
  '地理'=>'C',
  '歷史'=>'E'
  ];
  echo  serialize($a);
  // 產生出字串 a:5表示array,5 elemtnts。s:6 表示 string,6bytes。還原時以字串長度還原
  ?>

<h3>implode()</h3>
<!-- 只能組合'值' -->
<?php
$a=[
  '國文'=>'D',
  '英文'=>'B',
  '數學'=>'A',
  '地理'=>'C',
  '歷史'=>'E'
  ];

$result=implode('***',$a);
// 分隔符號***可自己設

echo $result;

print_r(explode(',',$result));

?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

