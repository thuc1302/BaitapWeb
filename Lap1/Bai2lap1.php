<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải phương trình bậc 1</title>
</head>
<body>
    <?php 
    if (isset($_POST["a"]) && isset($_POST["b"])) {
        $a = (float)$_POST["a"];
        $b = (float)$_POST["b"];

        if ($a == 0) {
            if ($b == 0) {
                $nghiem = "Phương trình có vô số nghiệm";
            } else {
                $nghiem = "Phương trình vô nghiệm";
            }
        } else {
            $x = -$b / $a;
            $x = round($x, 2); // làm tròn 2 chữ số thập phân
            $nghiem = "x = $x";
        }
    }
    ?>
    <form action="Bai2lap1.php" method="post">
        <table width="800" border="1">
            <tr>
                <td colspan="3" bgcolor="blue" style="color:white"><strong>Giải phương trình bậc 1</strong></td>
            </tr>
            <tr>
                <td width="150">Phương trình</td>
                <td width="250">
                    <input name="a" type="text" value="<?php if(isset($a)) echo $a; ?>"/> X + 
                </td>
                <td width="380">
                    <input name="b" type="text" value="<?php if(isset($b)) echo $b; ?>"/> = 0
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Nghiệm: 
                    <input name="kq" type="text" value="<?php if(isset($nghiem)) echo $nghiem; ?>" readonly />
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="Giải phương trình" />
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
