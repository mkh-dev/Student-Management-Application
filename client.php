<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
   
</head>
<body>
    
    <?php include 'connexion.php' ?>
    <?php
        // Requête SQL
        $sql = 'SELECT * FROM client ORDER BY nom,prenom DESC';
        // Envoyer la requête au serveur et récupérer le résultat
        // le résultat peut être null si la requête est erronée
        $reponse = $bdd->query($sql);


    ?>
    
   
        <hr>
        <div >
            <a href="createClient.php">
                <button > Ajouter client</button>
            </a>
        </div>
        <hr>
            
                <table >
                    <thead >
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Adresse</th>
                            <th>Ville</th>
                            <th>Code postal</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if ($reponse->rowCount()>0)
                            {
                                while ($ligne = $reponse->fetch(PDO::FETCH_ASSOC))
                                {
                                    echo "<tr>";
                                    echo "<td>".$ligne['id']."</td>";
                                    echo "<td>".$ligne['nom']."</td>";
                                    echo "<td>".$ligne['prenom']."</td>";
                                    echo "<td>".$ligne['adresse']."</td>";
                                    echo "<td>".$ligne['ville']."</td>";
                                    echo "<td>".$ligne['codepostal']."</td>";
                                    echo '<td><a href="deleteClient.php?id=' . $ligne['id'] . '"><button > Supprimer client</button></a> ';
                                    echo ' <a href="updateFormClient.php?id=' . $ligne['id'] . '"><button > Modifier client</button></a></td>';
                                    
                                    echo "</tr>";
                                }
                            }
                        ?>
                    </tbody>
                </table>
          
    

 

   
</body>
</html>