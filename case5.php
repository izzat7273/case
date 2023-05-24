<?php
$son1 = isset($_POST['son1']) ? $_POST['son1'] : null;
$amal = isset($_POST['amal']) ? $_POST['amal'] : null;
$son2 = isset($_POST['son2']) ? $_POST['son2'] : null;

switch ($amal) {
    case '+':
        echo $son1 . " + " . $son2 . " = " . ($son1 + $son2);
        break;
    case '-':
        echo $son1 . " - " . $son2 . " = " . ($son1 - $son2);
        break;
    case '*':
        echo $son1 . " * " . $son2 . " = " . ($son1 * $son2);
        break;
    case '/':
        echo $son1 . " / " . $son2 . " = " . ($son1 / $son2);
        break;
    default:
        echo "Xato! Bunday amal yo'q";
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>case5</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="son1" placeholder="son1 ni kiriting" value="<?php echo $son1 ?>">
        <input type="text" name="amal" placeholder="amal ni kiriting" value="<?php echo $amal ?>">
        <input type="text" name="son2" placeholder="son2 ni kiriting" value="<?php echo $son2 ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>