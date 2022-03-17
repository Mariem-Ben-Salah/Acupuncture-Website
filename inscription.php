<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>
            <title>Inscription</title>
        </head>
        <body>

        <div class="login-form">
            <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> inscription réussie !
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php 
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 

                    }
                }
                ?>
            
            <form action="inscription_traitement.php" method="post">

                <h3>Inscription</h3>  

                <div class="imgcontainer">
                        <img src="images/avatar_insc.png" alt="Avatar" class="avatar">
                </div> 

                <div class="form-container">
                    <label for="uname"><b>Pseudo</b></label>
                    </br>
                    <input type="text" name="pseudo" placeholder="Pseudo" required="required" autocomplete="off">
                    </br>
                    <label for="email"><b>Email</b></label>
                    </br>
                    <input type="email" name="email" placeholder="Email" required="required" autocomplete="off">
                    </br>
                    <label for="password"><b>Mot de passe</b></label>
                    </br>
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                    </br>
                    <label for="password"><b>Confirmer le mot de passe</b></label>
                    </br>
                    <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
                    </br>
                    <button type="submit">Inscription</button>
                </div>

                <div class="form-container" style="background-color:#f1f1f1">
                    <button type="submit"><a class="botton-connexion" href="index.php">Connexion</a></button>
                </div>   

            </form>
        </div>

        <style>
            body{
                background-color: rgba(112, 111, 111, 0.966);
            }
            form {
                border: 3px solid black;
                margin: 5% 30%;
                background-color: white;
            }
            input[type=email], input[type=password], input[type=text] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }
            button {
                background-color: black;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }
            button:hover {
                opacity: 0.8;
            }
            .botton-connexion{
                text-align: center;
                background-color: black;
                color: white;
            }
            .imgcontainer {
                text-align: center;
                margin: 2px 0 2px 0;
            }
            img.avatar {
                margin-top: 3%;
                width: 10%;
                height: 10%;
            }
            .form-container {
                padding: 5% 30% ;
            }
            h3{
                text-align: center;
                font-size: 150%
            }

        </style>
        </body>
</html>
