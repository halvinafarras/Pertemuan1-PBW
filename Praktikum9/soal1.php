
<?php
    if (isset($_POST['roda_kendaraan'])) {
        $roda_kendaraan = $_POST['roda_kendaraan'];

        switch($roda_kendaraan) {
            case "2":
                echo "Jenis Kendaraan: Motor, Sepeda, Skuter";
                break;
            case "3":
                echo "Jenis Kendaraan: Becak, Bajaj";
                break;
            case "4":
                echo "Jenis Kendaraan: Mobil";
                break;
            case "8":
                echo "Jenis Kendaraan: Truk, Bus";
                break;
            default:
                echo "Jenis Kendaraan tidak dikenali";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Soal 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" action="">
        <label for="roda_kendaraan">Masukkan jumlah roda kendaraan:</label>
        <input type="number" id="roda_kendaraan" name="roda_kendaraan" placeholder="Ketikan jumlah roda..." required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

