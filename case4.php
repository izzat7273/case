<?php
$n = isset($_POST['n']) ? $_POST['n'] : null;

switch ($n) {
    case 1:
        echo "31";
        break;
    case 2:
        echo "28";
        break;
    case 3:
        echo "31";
        break;
    case 4:
        echo "30";
        break;
    case 5:
        echo "31";
        break;
    case 6:
        echo "30";
        break;
    case 7:
        echo "31";
        break;
    case 8:
        echo "30";
        break;
    case 9:
        echo "30";
        break;
    case 10:
        echo "31";
        break;
    case 11:
        echo "30";
        break;
    case 12:
        echo "31";
        break;
    default:
        echo "Xato";
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>case4</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="n" placeholder="n ni kiriting" value="<?php echo $n ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>