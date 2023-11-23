<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>

<body>
    <h1>SEND</h1>
    <form action="Receive Data.php" method="post">
    <p>
        Nom: <input type="text" name="nom" required><br><br>
    </p>
    <P>
        Genre: <input type="radio" name="genre" value="masculin" />Homme
        <input type="radio" name="genre" value="feminine" />Femme
        <br><br>
    </P>
    <p>
        Nationalité: <select name="nationalite">
            <option value="fr">Française</option>
            <option value="de">Allemande</option>
            <option value="es">Espagnole</option>
            <option value="en">Anglaise</option>
            <option value="vide" selected>VIDE</option>
        </select>
    </p>

    <p>
        Pays à visister :<br>
        <input type="checkbox" name="pays[]" value="France" />France
        <input type="checkbox" name="pays[]" value="Allemagne" />Allemagne
        <input type="checkbox" name="pays[]" value="Espagne" />Espagne
        <input type="checkbox" name="pays[]" value="Angleterre" />Angleterre
        <br>
    </p>

    <p>
        Langues :<br>
        <input type="checkbox" name="langue[]" value="Française" />Française
        <input type="checkbox" name="langue[]" value="Allemande" />Allemande
        <input type="checkbox" name="langue[]" value="Espagnole" />Espagnole
        <input type="checkbox" name="langue[]" value="Anglaise" />Anglaise
        <br>
    </p>

    <p>
        <input type="submit" value="ENVOYER">
        <input type="reset" value="EFFACER">
    </p>

    </form>




</body>

</html>