<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải phương trình bậc 2</title>
</head>
<body>
<?php
    $a = $b = $c = "";
    $nghiem = "";

    if (isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"])) {
        $a = (float)$_POST["a"];
        $b = (float)$_POST["b"];
        $c = (float)$_POST["c"];

        if ($a == 0) { 
            if ($b == 0) {
                if ($c == 0) $nghiem = "Phương trình có vô số nghiệm";
                else $nghiem = "Phương trình vô nghiệm";
            } else {
                $x = -$c / $b;
                $nghiem = "Phương trình có nghiệm: x = " . round($x, 2);
            }
        } else {
            $delta = $b*$b - 4*$a*$c;
            if ($delta < 0) {
                $nghiem = "Phương trình vô nghiệm";
            } elseif ($delta == 0) {
                $x = -$b / (2*$a);
                $nghiem = "Phương trình có nghiệm kép: x = " . round($x, 2);
            } else {
                $x1 = (-$b + sqrt($delta)) / (2*$a);
                $x2 = (-$b - sqrt($delta)) / (2*$a);
                $nghiem = "Phương trình có 2 nghiệm phân biệt: x1 = " . round($x1, 2) . ", x2 = " . round($x2, 2);
            }
        }
    }
?>
<form action="Bai5lap1.php" method="post">
    <table width="600" border="1">
        <tr>
            <td colspan="4" bgcolor="blue" style="color:white"><strong>Giải phương trình bậc 2</strong></td>
        </tr>
        <tr>
            <td width="120">Phương trình</td>
            <td width="120"><input type="text" name="a" value="<?php echo $a; ?>" />X<sup>2</sup> +</td>
            <td width="120"><input type="text" name="b" value="<?php echo $b; ?>" />X +</td>
            <td width="120"><input type="text" name="c" value="<?php echo $c; ?>" /> = 0</td>
        </tr>
        <tr>
            <td>Nghiệm</td>
            <td colspan="3">
                <input type="text" size="60" readonly value="<?php echo $nghiem; ?>" />
            </td>
        </tr>
        <tr>
            <td colspan="4" align="center">
                <input type="submit" value="Xuất" />
            </td>
        </tr>
    </table>
</form>
</body>
</html>
