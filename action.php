<!DOCTYPE html>
<html>

<head>
    <title>secret</title>
    <meta charset="utf-8">
</head>

<body>
    <?php
        if (isset ($_POST['mdp'])) {
            if ($_POST['mdp'] == 'kangourou') {
                echo '<p> code secret </p>';
            } else {
                echo '<p> mauvais mdp veuillez <a href="index.php">recommencer</a></p>';
            }
        }        
    ?>
</body>

</html>