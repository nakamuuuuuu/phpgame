<?php
// var_dump($_POST)
$aitenomark=$_POST["aitenomark"];
$aitenonumber=$_POST["aitenonumber"];
$jibunnomark=$_POST["jibunnomark"];
$jibunnonumber=$_POST["jibunnonumber"];
$highlow=$_POST["highlow"];
?>

<h1>high&lowゲーム</h1>
相手のカード：
<?php echo $aitenomark.$aitenonumber ?>
<br>
<?php echo $highlow?>
を選択しました。
<br>
自分のカード：
<?php echo $jibunnomark.$jibunnonumber ?>
<br>
<?php
if($aitenonumber>$jibunnonumber){
$result ="low";//自分のカードが小さい場合
}
elseif($aitenonumber<$jibunnonumber){
$result = "high";//自分のカードが大きい場合
}
else{
  $result = $highlow;  //自分のカードと相手のカードが同じ数字
}

if($highlow==$result){
echo 'あなたの勝ちです';
}

else{
    echo 'あなたの負けです';
}
?>

<br>
<a href="select.php">もう一度遊ぶ</a>