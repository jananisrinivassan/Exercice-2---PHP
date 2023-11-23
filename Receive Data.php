<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h1>FORM RECEIVE</h1>
    <p>
        Nom:
        <?php echo $_POST['nom'] ?>
    </p>

    <p>
        Genre:
        <?php
        if (isset($_POST['genre'])) {
            echo $_POST['genre'];
        } else {
            echo "Genre non renseigné";
        }
        ?>
    </p>

    <p>
        Nationalité:
        <?php
        if (isset($_POST['nationalite'])) {
            echo $_POST['nationalite'];
        } else {
            echo "Nationalité non renseignée";
        }
        ?>
    </p>

    <p>
        Pays à visiter:
        <?php
        if (isset($_POST['pays'])) {
            foreach ($_POST['pays'] as $value) {
                echo $value . "<br>";
            }
        } else {
            echo "Pays à vister non renseigné";
        }
        ?>
    </p>

    <p>
        langues:
        <?php
        if (isset($_POST['langue'])) {
            foreach ($_POST['langue'] as $value) {
                echo $value . "<br>";
            }
        } else {
            echo "Pays à vister non renseigné";
        }
        ?>
    </p>

</body>

</html>