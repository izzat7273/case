
<?php
$oy = isset($_POST['oy']) ? $_POST['oy'] : null;

switch ($oy){
    case 1:
    case 2:
    case 12:
        echo "qish";
        break;
    case 3:
    case 4:
    case 5:
        echo "Bahor";
        break;
    case 6:
    case 7:
    case 8:
        echo "Yoz";
        break;
    case 9:
    case 10:
    case 11:
        echo "kuz";
        break;
    default:
        echo "noto'g'ri oy kiritildi";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>case3</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="oy" placeholder="oy ni kiriting" value="<?php echo $oy ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>