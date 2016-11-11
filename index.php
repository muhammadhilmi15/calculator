<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    if(isset($_POST['hitung'])){
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];
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
    <div class="kalkulator">
        <h2 class="judul">KALKULATOR</h2>
        <form method="post" action="index.php">
            <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
            <input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
            <!-- <fieldset name="operasi" class="fieldset">
                <legend>Operator</legend>
                <input type="radio" class="form-radio" value="tambah"> <label for="rd1">+</label>
                <input type="radio" class="form-radio" value="kurang"> <label for="rd2">-</label>
                <input type="radio" class="form-radio" value="kali"> <label for="rd3">x</label>
                <input type="radio" class="form-radio" value="bagi"> <label for="rd3">/</label>
            </fieldset> -->
            <select class="opt" name="operasi">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="x">x</option>
                <option value="/">/</option>
            </select>
            <input type="submit" name="hitung" value="Hitung" class="tombol">
        </form>
        <?php if(isset($_POST['hitung'])){ ?>
            <label class="texthasil"><?php echo "Hasil dari ".$bil1." ".$operasi." ".$bil2." = ";?></label>
            <input type="text" value="<?php echo $hasil; ?>" class="bil">
            <?php }else{ ?>
                <input type="text" value="0" class="bil">
            <?php } ?>
        </div>
    </body>
</html>
