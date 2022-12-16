<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifications</title>
   
</head>
<body>
    
    <?php include 'connexion.php' ?>
    <?php
$id= $_GET ['id'];
$nom= $_GET ['nom'];
$prenom= $_GET ['prenom'];
$adresse= $_GET ['adresse'];
$ville= $_GET ['ville'];
$codepostal= $_GET ['codepostal']; 

$nb_modifs=$bdd->exec("UPDATE client SET nom='$nom', prenom='$prenom', adresse='$adresse', ville='$ville', codepostal='$codepostal' WHERE id='$id'");

echo $nb_modifs.'entrées ont été modifiées !';
?>

</body>
</html>