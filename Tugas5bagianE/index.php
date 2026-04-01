<?php
$error = "";

if(isset($_POST['submit'])){
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $semester = $_POST['semester'];
    $ukt = $_POST['ukt'];

    if(empty($semester)){
        $error = "Semester wajib diisi!";
    } elseif($semester < 1){
        $error = "Semester tidak boleh kurang dari 1!";
    } else {

        $diskon = 0;

        if($ukt >= 5000000 && $semester > 8){
            $diskon = 15;
        } elseif($ukt >= 5000000){
            $diskon = 10;
        } else {
            $diskon = 0;
        }

        $potongan = ($diskon/100) * $ukt;
        $total = $ukt - $potongan;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Diskon UKT</title>

    <style>
        body{
            font-family: Arial;
            background-color: #ffe6f0;
            margin: 0;
        }

        .container{
            width: 350px;
            margin: 80px auto;
            background: white;
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0 0 15px pink;
        }

        h2{
            text-align: center;
            color: #ff4da6;
        }

        .form-group{
            margin-bottom: 12px;
        }

        label{
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #ff4da6;
        }

        input{
            width: 100%;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #ffb6c1;
            box-sizing: border-box;
        }

        button{
            width: 100%;
            padding: 10px;
            background-color: #ff4da6;
            color: white;
            border: none;
            border-radius: 10px;
            margin-top: 10px;
            cursor: pointer;
        }

        .error{
            color: red;
            margin-bottom: 10px;
        }

        .hasil{
            margin-top: 15px;
            padding: 10px;
            background: #fff0f5;
            border-radius: 10px;
        }
        .watermark{
            position: absolute;
            bottom: 10px;
            right: 15px;
            font-size: 12px;
            color: gray;
            opacity: 0.6;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Form Diskon UKT</h2>

    <?php if($error != ""){ ?>
        <div class="error"><?php echo $error; ?></div>
    <?php } ?>

    <form method="POST">
        <div class="form-group">
            <label>NPM</label>
            <input type="text" name="npm">
        </div>

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama">
        </div>

        <div class="form-group">
            <label>Prodi</label>
            <input type="text" name="prodi">
        </div>

        <div class="form-group">
            <label>Semester</label>
            <input type="number" name="semester" min="1">
        </div>

        <div class="form-group">
            <label>Biaya UKT</label>
            <input type="number" name="ukt">
        </div>

        <button type="submit" name="submit">Hitung</button>
    </form>

    <?php if(isset($total) && $error == ""){ ?>
    <div class="hasil">
        <h3>Hasil</h3>
        NPM : <?php echo $npm; ?> <br>
        Nama : <?php echo $nama; ?> <br>
        Prodi : <?php echo $prodi; ?> <br>
        Semester : <?php echo $semester; ?> <br>
        UKT : Rp <?php echo number_format($ukt,0,",","."); ?> <br>
        Diskon : <?php echo $diskon; ?>% <br>
        Total Bayar : Rp <?php echo number_format($total,0,",","."); ?>
    </div>
    <?php } ?>

</div>

<div class="watermark">@2026 halvina farras savitri</div>

</body>
</html>