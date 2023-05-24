<?php
$n = isset($_POST['n']) ? $_POST['n'] : null;
$r = isset($_POST['r']) ? $_POST['r'] : null;
$d = isset($_POST['d']) ? $_POST['d'] : null;
$l = isset($_POST['l']) ? $_POST['l'] : null;
$s = isset($_POST['s']) ? $_POST['s'] : null;

$pi = 3.14;
echo "1 - radius, 2 - diametr, 3 - uzunlik, 4 - doiraning yuzasi: ";

switch ($n) {
    case 1:
        echo "R = ";
        $d = 2 * $r;
        $l = 2 * $pi * $r;
        $s = $pi * $r * $r;
        echo "D = " . $d . "\n";
        echo "L = " . $l . "\n";
        echo "S = " . $s . "\n";
        break;
    case 2:
        echo "D = ";
        $r = $d / 2;
        $l = 2 * $pi * $r;
        $s = $pi * $r * $r;
        echo "R = " . $r . "\n";
        echo "L = " . $l . "\n";
        echo "S = " . $s . "\n";
        break;
    case 3:
        echo "L = ";
        $r = $l / (2 * $pi);
        $d = 2 * $r;
        $s = $pi * $r * $r;
        echo "R = " . $r . "\n";
        echo "D = " . $d . "\n";
        echo "S = " . $s . "\n";
        break;
    case 4:
        echo "S = ";
        $r = sqrt($s / $pi);
        $d = 2 * $r;
        $l = $pi * 2 * $r;
        echo "R = " . $r . "\n";
        echo "D = " . $d . "\n";
        echo "L = " . $l . "\n";
        break;
    default:
        echo "Xato";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>case12</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="n" placeholder="n ni kiriting" value="<?php echo $n ?>">
        <input type="text" name="r" placeholder="r ni kiriting" value="<?php echo $r ?>">
        <input type="text" name="d" placeholder="d ni kiriting" value="<?php echo $d ?>">
        <input type="text" name="l" placeholder="l ni kiriting" value="<?php echo $l ?>">
        <input type="text" name="s" placeholder="s ni kiriting" value="<?php echo $s ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>
