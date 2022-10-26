<?php
require 'latihankoneksi1.php';

$dd = query ("SELECT * FROM buku_cerita");

?>

<!DOCTYPE html>
<htmmmml lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>.....</title>
</head>
<body>


<h3> CERITA <h3>
    <table border="1">
    <thead>
        <th>NO</th>
        <th>Judul</th>
        <th>Author</th>
        <th>Chapter</th>

    <?php $i = 1?>
    <?php foreach ($dd as $aa ) :?>
    </thead>
    <tbody>
        <tr>
            <td><?= $i;?></td>
            
            <td><?php echo $aa ['judul'];?></td>
            <td><?php echo $aa ['author'];?></td>
            <td><?php echo $aa ['chapter'];?></td>
    </tr>
    <?php $i++?>
    <?php endforeach; ?>

    </tbody>
    </table>
    </body>
    </html>
    