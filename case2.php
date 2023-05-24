<?php
$k = isset($_POST['k']) ? $_POST['k'] : null;

switch ($k){
    case 1:
        echo "yomon";
        break;
    case 2:
        echo "qoniqarsiz";
        break;
    case 3:
        echo "qoniqarli";
        break;
    case 4:
        echo "yaxshi";
        break;
    case 5:
        echo "alo";
        break;
    default:
        echo "xato";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>case2</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="k" placeholder="k ni kiriting" value="<?php echo $k ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>