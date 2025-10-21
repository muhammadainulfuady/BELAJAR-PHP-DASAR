<!-- array mahasiswa -->
<?php
$mahasiswa = [
    [
        "nama" => "Muhammad Ainul Fuady",
        "nim" => "240411100009",
        "asal" => "Gresik",
        "ttl" => "18/05/2006",
        "umur" => 19,
        "gambar" => "adibg-red.jpg"
    ],
    [
        "nama" => "Muhammad Ainul Fuady",
        "nim" => "240411100009",
        "asal" => "Gresik",
        "ttl" => "18/05/2006",
        "umur" => 19,
        "gambar" => "adibg-red.jpg"
    ]
]; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data mahasiswa utm </title>
    <style>
        table {
            margin-top: 10px;
            margin: 0 auto;
            width: 100%;
            border: 1px solid lightgreen;
            padding: 10px;
            background-color: lightblue;
        }

        table td {
            background-color: black;
            color: white;
            font-size: 20px;
            padding: 10px;
            padding: 30px;
        }

        table th {
            text-transform: capitalize;
            padding: 30px;
            background-color: gray;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <?php $iterasi = 0 ?>
    <?php foreach ($mahasiswa as $key => $value): ?>
        <table border="1" cellpadding="10" cellspacing="0" class="iyut">
            <p>tabel mahasiswa ke-<?php echo $iterasi += 1 ?></p>
            <?php foreach ($mahasiswa[$key] as $key => $key2): ?>
                <tr>
                    <th><?php echo $key ?></th>
                    <td>:</td>
                    <td><?php echo $key2 ?></td>
                </tr>
                </div>
            <?php endforeach ?>
        </table>
    <?php endforeach ?>
</body>

</html>