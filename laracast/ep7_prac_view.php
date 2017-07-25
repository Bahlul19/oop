<!DOCTYPE html>
<html>

    <head>
        <title>
            Laracast
        </title>
    </head>
    <body>

        <ul>

            <?php foreach ($task as $features => $details) : ?>
                <li><strong><?= $features ?></strong> <?= $details ?></li>
            <?php endforeach; ?>

        </ul>


    </body>

</html>