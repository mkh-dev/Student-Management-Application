<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppression</title>
   
</head>
<body>
    
    <?php include 'connexion.php' ?>
    <?php
    $id= $_GET ['id'];
$supp=$bdd->exec("DELETE FROM client WHERE id ='$id'");
echo $supp. 'entrées supprimées !';
?>
</body>
</html>
