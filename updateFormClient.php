
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modifications Clients</title>

        </head>
        <style> 
label {
    float: left;
    width :200px;
}
input {
    width: 200px;
}
form {
    width: 450px;
    margin-bottom: 15px;
}
        </style>
        </head>
        <body>
<fieldset>
            <legend>Modifier les informations</legend>
            <form action="updateClient.php" method="get">
                <div>
                    <label for="id">Id</label>
                    <input type="text" name="id" id="id" placeholder ="Entrez Votre ID" required>
                </div>
                <div>
                    <label for="nom">Nom</label>
                    <input  type="text" name="nom" id="nom" placeholder ="Entrez Votre Nom" required>
                </div>

                <div>
                    <label for="prenom">Prenom</label>
                    <input  type="text" name="prenom" id="prenom"placeholder ="Entrez Votre Prenom" required>
                </div>

                <div>
                    <label for="adresse">Adresse</label>
                    <input  type="text" name="adresse" id="adresse" placeholder ="Entrez Votre Adresse" required>
                </div>

                <div>
                    <label for="ville">Ville</label>
                    <input  type="text" name="ville" id="ville"placeholder ="Entrez Votre Ville" required>
                </div>
                <div>
                    <label for="codepostal">Code Postal</label>
                    <input  type="text" name="codepostal" id="codepostal" placeholder ="Entrez Votre Code Postal" required>
                </div>
                <div>
                <input type="checkbox" id="confirmation" name="confirmation[]" value="confirmation"/> Confirmer <br/>
</div>

                <div>
<input type="submit" value="Envoyer">
                </div>

                </div>
            </fieldset>
</form>
</body>
</html>