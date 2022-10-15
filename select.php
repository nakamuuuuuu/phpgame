<?php
$marks=['♠️','🍀','💖','💠',];

$numbers=[1,2,3,4,5,6,7,8,9,10,11,12,13,];

$cards=[];


foreach($marks as $mark){
foreach($numbers as $number){
    $cards[]=["mark"=>$mark,"number"=>$number];
}
}
$key=array_rand($cards);
$aitenocard=$cards[$key];
unset($cards[$key]);
$key=array_rand($cards);
$jibunnocard=$cards[$key];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>high&lowゲーム</h1>
   相手のカード:<?php echo $aitenocard["mark"].$aitenocard["number"];?>
    <form action="result.php" method="post">
        <input type="hidden" name="aitenomark" value="<?php echo $aitenocard["mark"]?>">
        <input type="hidden" name="aitenonumber"value="<?php echo $aitenocard["number"]?>">
        <input type="hidden" name="jibunnomark"value="<?php echo $jibunnocard["mark"]?>">
        <input type="hidden" name="jibunnonumber"value="<?php echo $jibunnocard["number"]?>">
        <input type="radio" name="highlow"value="high" required>High
        <input type="radio" name="highlow"value="low">Low
        <input type="submit" value="決定">
        </form>
</body>
</html>