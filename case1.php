<?php
$a = isset($_POST['a']) ? $_POST['a'] : null;

$res ="";
switch ($a){
    case 1:
        $res = "Dushanba";
        break;
    case 2:
        $res = "Seshanba";
        break;
    case 3:
        $res = "Chorshanba";
        break;
    case 4:
        $res = "Payshanba";
        break;
    case 5:
        $res = "juma";
        break;
    case 6:
        $res = "Shanba";
        break;
    case 7:
        $res = "Yakshanba";
        break;
    default:
    $res = "haftada yoq kun";

}
    echo $res;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>case1</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="a" placeholder="a ni kiriting" value="<?php echo $a ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>