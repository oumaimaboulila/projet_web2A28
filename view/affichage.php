<?php

include 'add.php';

$employer = new employerC();

$result=$employer->listemployes();
$del=$employer->delete();



?>

<body>
    <table>
    <?php foreach ($result as $row) :?>
        <tr>
            <td><?=$row['id'];?></td>
            <td><?=$row['lastname'];?></td>
            <td><?=$row['firstname'];?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>