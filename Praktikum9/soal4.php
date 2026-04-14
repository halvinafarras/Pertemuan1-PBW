<?php

    if (isset($_POST['number'])) {
        $number = $_POST['number'];
        $result = ($number % 2 == 0) ? 'genap' : 'ganjil';
        echo "Angka $number adalah $result.";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Soal 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" action="">
        <label for="number">Masukkan angka:</label>
        <input type="number" id="number" name="number" placeholder="Ketikan angka..." required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>