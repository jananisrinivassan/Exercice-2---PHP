<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>
<!-- <body>
    <h1>Formulaire</h1>
    <form action="b.php" method="get">
        <fieldset>
            <legend>INFO</legend>
        <label for="nom">Nom : </label>
        <input type="text" placeholder="Votre nom ici" name="nom" maxlength="50" required>
        <label for="age">Age</label>
        <input type="number" name="age" min="1" max="199" required>
        <input type="submit" value="ENVOYER">
        </fieldset>
    </form>
</body> -->

<body>
    <h1>Formulaire</h1>
    <form action="b.php" method="post">
        <fieldset>
            <legend>INFO</legend>
        <label for="nom">Nom : </label>
        <input type="text" placeholder="Votre nom ici" name="nom" maxlength="50" required>
        <label for="age">Age</label>
        <input type="number" name="age" min="1" max="199" required>
        <input type="submit" value="ENVOYER">
        </fieldset>
    </form>
</body>
</html>