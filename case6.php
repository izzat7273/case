<?php
$uzunlik = isset($_POST['uzunlik']) ? $_POST['uzunlik'] : null;
$birlik = isset($_POST['birlik']) ? $_POST['birlik'] : null;

echo "1-detsimetr, 2-kilometr, 3-metr, 4-millimeter, 5- santimetr: ";
switch ($birlik) {
    case 1: echo $uzunlik . " desimetr = " . ($uzunlik / 10) . " metr";
    break;
    case 2: echo $uzunlik . " kilometr = " . ($uzunlik * 1000) . " metr";
    break;
    case 3: echo $uzunlik . " metr = " . ($uzunlik) . " metr";
    break;
    case 4: echo $uzunlik . " millimetr = " . ($uzunlik / 1000) . " metr";
    break;
    case 5: echo $uzunlik . " santimetr = " . ($uzunlik / 100) . " metr";
    break;
    default: echo "Xato";
    break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>case6</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="uzunlik" placeholder="uzunlik ni kiriting" value="<?php echo $uzunlik ?>">
        <input type="text" name="birlik" placeholder="birlik ni kiriting" value="<?php echo $birlik ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>