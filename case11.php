<?php
$k1 = isset($_POST['k1']) ? $_POST['k1'] : null;
$k2 = isset($_POST['k2']) ? $_POST['k2'] : null;

switch ($k1){
    case "v":
        echo "shimolga "; break;
    case "f":
        echo "janubga "; break;
    case "q":
        echo "sharqga "; break;
    case "g":
        echo "g'arbga "; break;
    default:
        echo "bunday tomon yo'q ";
}
switch ($k2){
    case 0:
        echo "o'nga buriling "; break;
    case 1:
        echo 'chapga buriling '; break;
    case 2:
        echo "180 gradusga buriling "; break;
    default:
        echo "bunday burilish yo'q ";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>case11</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="k1" placeholder="k1 ni kiriting" value="<?php echo $k1 ?>">
        <input type="text" name="k2" placeholder="k2 ni kiriting" value="<?php echo $k2 ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>