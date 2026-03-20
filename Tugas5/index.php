<?php
$nama = "";
$nilai = "";
$predikat = "";
$status = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];

    if ($nama == "" || $nilai == "") {
        $error = "Nama dan Nilai harus diisi!";
    } else {

        if ($nilai >= 85 && $nilai <= 100) {
            $predikat = "A";
            $status = "Lulus";
        } elseif ($nilai >= 75 && $nilai <= 84) {
            $predikat = "B";
            $status = "Lulus";
        } elseif ($nilai >= 65 && $nilai <= 74) {
            $predikat = "C";
            $status = "Lulus";
        } elseif ($nilai >= 50 && $nilai <= 64) {
            $predikat = "D";
            $status = "Tidak Lulus";
        } elseif ($nilai >= 0 && $nilai <= 49) {
            $predikat = "E";
            $status = "Tidak Lulus";
        } else {
            $predikat = "Tidak valid";
            $status = "-";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan Nilai Mahasiswa</title>

    <style>
        body {
            font-family: Arial;
            background-color: #f8d7df;
        }

        .container {
            width: 400px;
            margin: 80px auto;
            padding: 25px;
            background-color: #fce4ec;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(255, 105, 180, 0.3);
        }

        h2 {
            text-align: center;
            color: #ff5c8a;
            margin-bottom: 20px;
        }

        form label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #999;
            box-sizing: border-box;
        }

        .btn {
            width: 100%;
            margin-top: 15px;
            padding: 10px;
            background-color: #ff5c8a;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #e04875;
        }

        .hasil {
            margin-top: 20px;
            padding: 15px;
            background-color: #f3d6dc;
            border-radius: 10px;
        }

        .error {
            color: red;
            margin-top: 10px;
            text-align: center;
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
    <h2>Input Nilai</h2>

    <form method="post" action="">
        <label>Nama:</label>
        <input type="text" name="nama">

        <label>Nilai:</label>
        <input type="number" name="nilai">

        <input type="submit" value="Proses" class="btn">
    </form>

    <?php if ($error != "") { ?>
        <p class="error"><?php echo $error; ?></p>
    <?php } ?>

    <?php if ($error == "" && $nama != "" && $nilai != "") { ?>
        <div class="hasil">
            <p>Nama : <?php echo $nama; ?></p>
            <p>Nilai : <?php echo $nilai; ?></p>
            <p>Predikat : <?php echo $predikat; ?></p>
            <p>Status : <?php echo $status; ?></p>
        </div>
    <?php } ?>

</div>

<div class="watermark">@2026 halvina farras savitri</div>

</body>
</html>