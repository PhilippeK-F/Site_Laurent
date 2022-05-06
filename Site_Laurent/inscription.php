<!DOCTYPE html>
    <html lang="fr">
          <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="index.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
            <title>Inscription</title>
        </head>
        <header>
          <a href="index.html" class="logo"><span>Accueil</span></a>
        </header>
        <body>
            <form action="cnx.php" method="POST">
                <h2 class="title">Inscription</h2>
                <div class="form-group">
                    <input type="text" name="Nom" class="form-control" placeholder="Nom" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" name="Prénom" class="form-control" placeholder="Prénom" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" name="Mail" class="form-control" placeholder="Mail" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
                </div> 
                <div class="form-control">
                    <label>Sexe</label>
                    <input type="radio" name="Sexe" value="Homme"/>Homme
                    <input type="radio" name="Sexe" value="Femme"/>Femme
            <?php
            if($res["Sexe"]=="Homme")
            {
            ?>
            <input type="radio" name="Sexe" class="form-control" value="Homme" checked="true"/>Homme 
            <input type="radio" name="Sexe" class="form-control" value="Femme" checked="true"/>Femme <br>
            <?php
            }

            else{
                ?>


                <?php
            }
            ?>
            </div>            
                <div class="form-control">
                    <button type="submit" class="btn">Valider</button>
                </div>
            </form>
        </div>

        </body>
</html>




