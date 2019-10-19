<?php
//課題1
$a =3;
$b =7;
echo $a+$b;
echo PHP_EOL;
//課題2
$array_month=["1月","2月","3月","4月","5月","6月","7月",
"8月","9月","10月","11月","12月"];
echo $array_month[7];
echo PHP_EOL;
//課題3
$hello ="Hello,";
$name ="Sase Daiki";
$world="'s World!";
echo $hello.$name.$world;
echo PHP_EOL;
//課題4
$tech_boost="tech ";
$tech_boost.="boost";
echo $tech_boost;
echo PHP_EOL;
//課題5
$calendar_2018 = [
//$2018_calendar = { 変数名のはじめに数字はNG,配列は角括弧「[ ]」を使う
  "January" => "1月",
  //"February" => "2月"、配列はカンマ「,」を使う
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  //"June" = "6月",連想配列のキーは「=>」を使う 
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  //"October" => 10月,10月は文字列なのでダブルクォーテーション「""」を使う
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
  //};配列は角括弧「[ ]」を使う
  ];

// 12月を表示する
//echo $2018_calendar[December];連想配列から要素を取り出す為に
//ダブルクォーテーション「""」を使う
echo $calendar_2018["December"];
echo PHP_EOL;
?>