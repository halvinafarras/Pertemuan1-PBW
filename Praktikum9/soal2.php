<?php
if (isset($_POST['number'])) {
    $number = $_POST['number'];
    for ($i = 2; $i <= $number; $i += 2) {
        echo $i . " ";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Soal 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" action="">
        <label for="number">Masukkan angka:</label>
        <input type="number" id="number" name="number" placeholder="Ketikan angka max 10..." required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>