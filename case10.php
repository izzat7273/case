<?php
$y = isset($_POST['y']) ? $_POST['y'] : null;
$k = isset($_POST['k']) ? $_POST['k'] : null;

switch ($y) {
    case 'l':
        echo "shimol ";
        break;
    case 'j':
        echo "janub ";
        break;
    case 'q':
        echo "sharq ";
        break;
    case "g'":
        echo "g'arb ";
        break;
    default:
        echo "bunday yo'nalish yo'q ";
}
switch ($k) {
    case 0:
        echo "harakatni davom ettir";
        break;
    case 1:
        echo "chapga buril";
        break;
    case 2:
        echo "o'ngga buril";
        break;
    default:
        echo "bunday komanda yo'q";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>case10</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="y" placeholder="y ni kiriting" value="<?php echo $y ?>">
        <input type="text" name="k" placeholder="k ni kiriting" value="<?php echo $k ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>