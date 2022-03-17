<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>

            <link rel="stylesheet" href="/SITE/css/style.css">
            <title>Connexion</title>
        </head>
        <body>
            <div class="login-form">
                <?php 
                    if(isset($_GET['login_err']))
                    {
                        $err = htmlspecialchars($_GET['login_err']);

                        switch($err)
                        {
                            case 'password':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> mot de passe incorrect
                                </div>
                            <?php
                            break;

                            case 'email':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> email incorrect
                                </div>
                            <?php
                            break;

                            case 'already':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> compte non existant
                                </div>
                            <?php
                            break;
                        }
                    }
                    ?> 
                
                <form action="connexion.php" method="post">

                    <h6>Connexion</h6> 

                    <div class="imgcontainer">
                        <img src="images/avatar_cnx.png" alt="Avatar" class="avatar">
                    </div>  
                    
                    <div class="form-container">
                        <label for="email"><b>Email</b></label>
                        </br>
                        <input type="email" name="email" placeholder="Email" required="required" autocomplete="off">
                        </br>
                        <label for="psw"><b>Mot de passe</b></label>
                        </br>
                        <input type="password" name="password" placeholder="Mot de passe" required="required" autocomplete="off">
                        </br>
                        <button type="submit">Connexion</button>
                    </div>  
                    <div class="form-container" style="background-color:#f1f1f1">
                        <button type="submit"><a class="botton-inscription" href="inscription.php">Inscription</a></button>
                    </div>

                </form>
            </div>
        </body>


        <style>
            body{
                background-color: rgba(112, 111, 111, 0.966);
            }
            form {
                border: 3px solid black;
                margin: 5% 30%;
                background-color: white;
            }
            input[type=email], input[type=password] {
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
            .botton-inscription{
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
            h6{
                text-align: center;
                font-size: 150%
            }

        </style>
  

        
</html>