<!DOCTYPE html>
<html>

<head>
    <title>Titre</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/master.css">
</head>

<body>
    <form action="action.php" method="post">
        <p>
            Mot de passe :
            <input type="password" name="mdp">
            <input type="submit" value="Valider">

        </p>
    </form>
    <br> 
    <?php 
            $monfichier = fopen('fichier/compteur.txt', 'r+');
            $pages_vues = fgets($monfichier);
            $pages_vues += 1;
            fseek($monfichier, 0);
            fputs($monfichier, $pages_vues); 
            echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>';
    ?>
    
    <script>
        
    </script>

</body>

</html>