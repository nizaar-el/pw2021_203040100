<?php
/*
Nizaar El Hufazh
203040100
Shift Kamis 8.00 - 9.00
*/
?>

<?php 
$pemain_bola = [
    "Mohammad Salah",
    "Cristiano Ronaldo",
    "Lionel Messi",
    "Zlatan Ibrahimovic",
    "Neymar Jr"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan3b_203040100</title>
    <style>
        .tabel {
			border: 1px solid black;
			padding: 5px;
			text-align: left;
			font-family: arial;
			width: 450px;
			font-size: 14px;
		}
    </style>
</head>
<body>
    <div class="tabel">
        <h3>Daftar Pemain Bola Terkenal</h3>
        <table>
            <ol>
                <?php foreach($pemain_bola as $pb) {
                    echo "<li>$pb</li>";
                }
                ?>
            </ol>

            <?php
            array_push($pemain_bola, "Luca Modric", "Sadio Mane");
            sort($pemain_bola);
            ?>
            <h3>Daftar Pemain Bola Terkenal Baru</h3>
            <ol>
                <?php foreach($pemain_bola as $pb) {
                    echo "<li>$pb</li>";
                }
                ?>
            </ol>
        </table>
    </div>
</body>
</html>