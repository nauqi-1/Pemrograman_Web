<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Informasi Dosen</title>
    <style>
        table {
            border-collapse: collapse;
            width: 30%;
            margin: 20px;
        }
        th, td {
            border: 2px solid black ;
            text-align: center;
            padding: 5px;
        }
        th {
            background-color: #fddffd;
        }
    </style>
</head>
<body>
    <?php
    $Dosen = [
        'Nama' => 'Elok Nur Hamdana',
        'Domisili' => 'Malang',
        'Jenis Kelamin' => 'Perempuan'
    ];
    ?>
    <table>
        <tr>
            <th></th>
            <th></th>
        </tr>
        <?php foreach ($Dosen as $info => $detail): ?>
            <tr>
                <td><?php echo $info; ?></td>
                <td><?php echo $detail; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
