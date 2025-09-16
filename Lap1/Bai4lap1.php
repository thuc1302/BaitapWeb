<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dãy số</title>
</head>
<body>
    <?php
        $tong = $tich = $tongchan = $tongle = "";
        $start = $end = "";

        if (isset($_POST["start"]) && isset($_POST["end"])) {
            $start = (int)$_POST["start"];
            $end   = (int)$_POST["end"];

            $tong = 0;
            $tich = 1;
            $tongchan = 0;
            $tongle = 0;

            for ($i = $start; $i <= $end; $i++) {
                $tong += $i;
                $tich *= $i;
                if ($i % 2 == 0) {
                    $tongchan += $i;
                } else {
                    $tongle += $i;
                }
            }
        }
    ?>
<form action="Bai4lap1.php" method="POST">
<table border="1" width="500">
<tr>
    <td>Số bắt đầu</td>
    <td><input type="text" name="start" value="<?php echo $start; ?>" /></td>
    <td>Số kết thúc</td>
    <td><input type="text" name="end" value="<?php echo $end; ?>" /></td>
</tr>
<tr>
    <td colspan="4">Kết quả</td>
</tr>
<tr>
    <td>Tổng các số</td>
    <td colspan="3"><input type="text" value="<?php echo $tong; ?>" readonly /></td>
</tr>
<tr>
    <td>Tích các số</td>
    <td colspan="3"><input type="text" value="<?php echo $tich; ?>" readonly /></td>
</tr>
<tr>
    <td>Tổng các số chẵn</td>
    <td colspan="3"><input type="text" value="<?php echo $tongchan; ?>" readonly /></td>
</tr>
<tr>
    <td>Tổng các số lẻ</td>
    <td colspan="3"><input type="text" value="<?php echo $tongle; ?>" readonly /></td>
</tr>
<tr>
    <td colspan="4" align="center">
        <input type="submit" value="Tính toán" />
    </td>
</tr>
</table>
</form>
</body>
</html>
