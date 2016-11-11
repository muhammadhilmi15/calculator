<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <?php
    if(isset($_POST['hitung'])){
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operator'];
        switch ($operasi) {
            case '+':
            $hasil = $bil1+$bil2;
            break;
            case '-':
            $hasil = $bil1-$bil2;
            break;
            case 'x':
            $hasil = $bil1*$bil2;
            break;
            case '/':
            $hasil = $bil1/$bil2;
            break;
        }
    }
    ?>
    <form method="post" action="index.php">
        <table width="30%" height="60%" border="0" align="center">
            <tr align="center">
                <td colspan="4"><b>Kalkulator</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Angka Pertama</td>
                <td><input name="bil1" type="text" size="30"></td>
            </tr>
            <tr>
                <td>Angka Kedua</td>
                <td><input name="bil2" type="text" size="30"></td>
            </tr>
            <tr>
                <td>Operator</td>
                <td>
                    <input type="radio" name="operator" value="+"> +
                    <input type="radio" name="operator" value="-"> -
                    <input type="radio" name="operator" value="x"> x
                    <input type="radio" name="operator" value="/"> /
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Hitung" name="hitung"></td>
            </tr>
            <tr>
                <td>Hasil</td>
                <td>
                    <?php if(isset($_POST['hitung'])){ ?>
                        <label class="texthasil"><?php echo "Hasil dari ".$bil1." ".$operasi." ".$bil2." = ";?></label><br>
                        <input type="text" size="30" value="<?php echo $hasil; ?>">
                    <?php }else{ ?>
                        <input type="text" size="30" value="0">
                    <?php } ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
