<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouts Clients</title>
   
</head>
<body>
    
    <?php include 'connexion.php' ?>
    <?php
$id= $_GET['id'];
$nom= $_GET['nom'];
$prenom= $_GET['prenom'];
$adresse= $_GET['adresse'];
$ville= $_GET['ville'];
$codepostal= $_GET['codepostal'];
$bdd->exec("INSERT INTO client (id, nom, prenom, adresse, ville, codepostal) VALUES ('$id', '$nom', '$prenom', '$adresse', '$ville', '$codepostal')");
echo "La personne a été bien ajoutée !"; 

?>
</body>
</html>