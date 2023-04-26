<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pvView</title>
    <link rel="stylesheet" href="../publicView/src/private.css">
</head>
<body>
    <nav>
        <?php
        include_once "../publicView/src/menu.php"
        ?>
    </nav>
    
    <form action="" method="POST" id="artistForm">
        <label for="">nom :</label>
        <input type="text" name="nomart" required>
        <label for="userPassword">Mot de passe :</label>
        
        <input type="checkbox" placeholder="Rester connecter">
        <button type="submit">Se connecter</button>

    </form>
    <form action="" method="POST" id="instrumentForm">
        <label for="nom"></label>
        <input type="text" name="" required>
        <label for="description">Description:</label>
        
        <input type="checkbox" placeholder="new">
        <button type="submit">new instru</button>

    </form> 
    <?php
        
        if (isset($fetchDetailInstrument)):
          foreach ($fetchDetailInstrument as $item):
      ?>
    <table>
   
        <tr>
            <th>type</th>
            <th>contenue</th>
            <th>auteur</th>
        </tr>
        <tr>
            <th></th>
            <td>
                <p><?=$dataInstrumentPrivate = fetchInstrumentHome($dbConnect);?></p>
            </td>
            <td>
                <p><?=$dataAuteurPrivate = fetch ?></p>
            </td>
            <td><input type="submit"></td>
        </tr>
    </table>
    <?php
                endforeach;
            endif;
        ?>



    <footer>
        <?php
        include_once "../publicView/src/footer.php"
        ?>
    </footer>4

</body>
</html>