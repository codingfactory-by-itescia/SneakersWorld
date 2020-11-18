<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SneakersWorld</title>
</head>
<body>
    <?php
        $servname = 'localhost';
        $dbname = 'sneakersbdd';
        $user = 'root';
        $pass = 'root';
        
        try{
            $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
            $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sql = "INSERT INTO Clients(Nom, Prenom)
            VALUES ('Demorest', 'Axel')";
        
        $dbco->exec($sql);
        echo 'donnée bien envoyée !';
        }
        
        catch(PDOException $e){
          echo "Erreur : " . $e->getMessage();
        }
    ?>
</body>
</html>