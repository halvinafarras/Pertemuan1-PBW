<?php
if (isset($_POST['submit3'])) {
   
    $input_string = $_POST['hewan'];
    $array_hewan = explode(',', $input_string);
    
    echo "<div>";
    echo "</div>";
    echo "<strong>Daftar Hewan:</strong>";
    echo "<ul>";
    echo "</ul>";
    foreach ($array_hewan as $hewan) {
        echo "<li>" . trim($hewan) . "</li>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Soal 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST" action="">
        <label>Masukkan Minimal 5 Nama Hewan (pisahkan dengan koma):</label>
        <div>
            <input type="text" name="hewan" placeholder="Ketikan 5 nama hewan..." required>
            <button type="submit" name="submit3">Tampilkan</button>
        </div>
    </form>
</body>
</html>