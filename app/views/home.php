<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DataBase</h1>
    <?php 
        foreach ($data['dataStudent'] as $std) {
            ?>
            <li>
                <tr>
                    <td><?= $std["id"] ?></td>
                    <td><?= $std["name"] ?></td>
                </tr>
            </li>
            <?php
        }
    ?>
</body>
</html>