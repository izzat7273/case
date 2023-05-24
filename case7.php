<?php
$ogirlik = isset($_POST['ogirlik']) ? $_POST['ogirlik'] : null;
$birlik = isset($_POST['birlik']) ? $_POST['birlik'] : null;

echo "1-kilogramm, 2-milligramm, 3-gramm, 4-tonna, 5- sentner";
switch ($birlik){
    case 1:
        echo "Og'irligi = ".$ogirlik." kilogramm = ".$ogirlik." kilogramm"; break;
    case 2:
        echo "Og'irligi = ".$ogirlik." milligramm = ".($ogirlik/1000000)." kilogramm"; break;
    case 3:
        echo "Og'irligi = ".$ogirlik." gramm = ".($ogirlik/1000)." kilogramm"; break;
    case 4:
        echo "Og'irligi = ".$ogirlik." tonna = ".($ogirlik*1000)." kilogramm"; break;
    case 5:
        echo "Og'irligi = ".$ogirlik." sentner = ".($ogirlik/100)." kilogramm"; break;
    default:
        echo "Xato!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>case7</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="ogirlik" placeholder="ogirlik ni kiriting" value="<?php echo $ogirlik ?>">
        <input type="text" name="birlik" placeholder="birlik ni kiriting" value="<?php echo $birlik ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>