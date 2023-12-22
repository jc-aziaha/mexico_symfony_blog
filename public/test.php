<?php
    // Controller
    $categories = [
        "Développement Web",
        "Développement Mobile",
        "Développement Logiciel",
    ];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="" method="post">
            <div>
                <label for="">La catégorie</label>
                <select name="" id="">
                    <option value="" selected disabled>Choisissez une catégorie</option>
                    <?php foreach($categories as $key => $category) : ?>
                        <option value="<?= $key ?>"><?= $category ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </form>
    </body>
</html>