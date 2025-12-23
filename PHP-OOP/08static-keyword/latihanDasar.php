<!-- STUDI KASUS: Sistem Penghitung Kendaraan Parkir -->
<?php
class Parkir
{
    public static $totalKendaraan = 0;
    public static $totalMotor = 0;
    public static $totalMobil = 0;
    public $jenis;

    public function __construct($jenis)
    {
        if ($jenis === "motor") {
            self::$totalMotor++;
        } elseif ($jenis === "mobil") {
            self::$totalMobil++;
        } else {
            echo "selain motor dan mobil dilarang parkir";
        }
        self::$totalKendaraan++;
    }

    public static function infoParkir()
    {
        $data = [
            "total_kendaraan" => self::$totalKendaraan,
            "total_motor" => self::$totalMotor,
            "total_mobil" => self::$totalMobil,
        ];
        return $data;
    }

    public static function resetParkir()
    {
        self::$totalKendaraan = 0;
        self::$totalMotor = 0;
        self::$totalMobil = 0;
    }
}
new Parkir("motor");
new Parkir("mobil");
new Parkir("motor");
new Parkir("mobil");
new Parkir("mobil");

$dts[0] = Parkir::infoParkir();
Parkir::resetParkir();
$dts[1] = Parkir::infoParkir();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parkiran</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Total Kendaraan Yang Parkir</th>
            <th>Mobil</th>
            <th>Motor</th>
        </tr>
        <?php foreach ($dts as $row): ?>
            <tr>
                <td><?= $row['total_kendaraan'] ?></td>
                <td><?= $row['total_mobil'] ?></td>
                <td><?= $row['total_motor'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>