<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php $results = $_POST; ?>
    <table border="1">
        <?php foreach ($results as $key => $result): ?>
            <tr>
                <td><?php echo $key; ?></td>
                <td>:</td>
                <td><?php echo $result; ?></td>
            </tr>
        <?php endforeach ?>
    </table>

</body>

</html>