<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tỉnh tổng trong dãy số</title>
</head>
<body>
<?php
    $dayso = "";
    $tong = "";

    if (isset($_POST["dayso"])) {
        $dayso = $_POST["dayso"];
        $mang = explode(",", $dayso);
        $tong = 0;
        foreach ($mang as $so) {
            if (is_numeric(trim($so))) {
                $tong += (int)trim($so);
            }
        }
    }
?>
<form action="Bai6lap1.php" method="post">
    <table width="500" border="1" align="center" cellpadding="5">
        <tr>
            <td colspan="2" align="center" bgcolor="#66CCFF">
                <strong>NHẬP VÀ TÍNH TRÊN DÃY SỐ</strong>
            </td>
        </tr>
        <tr>
            <td width="150">Nhập dãy số:</td>
            <td>
                <input type="text" name="dayso" size="40" value="<?php echo $dayso; ?>" />
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Tổng dãy số" />
            </td>
        </tr>
        <tr>
            <td>Tổng dãy số:</td>
            <td>
                <input type="text" name="tong" size="40" readonly value="<?php echo $tong; ?>" />
            </td>
        </tr>
    </table>
</form>
</body>
</html>
