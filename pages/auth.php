<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../assets/mdb5-free-standard/css/mdb.min.css">
    <link rel="stylesheet" href="../assets/jquery-ui-1.13.1.custom/jquery-ui.min.css">
    <script src="../assets/index.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="../assets/jquery-ui-1.13.1.custom/jquery-ui.min.js"></script>
    <script src="../assets/mdb5-free-standard/js/mdb.min.js"></script>
</head>
<title>Authentication</title>

<body>

    <div class=" principe d-flex align-items-center col-md-10 offset-md-1">
        <div class="container col-md-12 col-sm-12 bgi">
            <div class="row">
                <div class="col-md-12 d-flex log">
                    <img src="../images/UJKZ.png" class="col-md-1 col-sm-2 float-start logo">
                    <h2 class="col-md-2 col-sm-2 p-2 text-dark text-center">UFR/SDS</h2>
                    <img src="../images/pharma.png" class="col-md-1 col-sm-2 float-end logo1">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 menaj">

                    <div class="col-md-12 text-dark text-center">
                        <h2>AUTHENTIFICATION</h2>
                        <div class=" col-md-12 d-flex justify-content-center">
                            <div class="card d-flex col-md-10 mb-3 auth">
                                <div class="card-body d-flex justify-content-md-center">
                                    <div class="d-flex col-md-7 offset-md-5 align-items-center formau">
                                        <div class="col-md-3 imag">
                                            <img src="../images/Admin.png">
                                        </div>
                                        <form action="../back-end/signin.php" method="post" class="col-md-6 offset-md-2">
                                            <div class="form-group  formins">
                                                <input type="text" class="form-control" id="email" name="email" placeholder="Entrez votre Email" required>
                                                <input type="text" class="form-control" id="mdp" name="pwd" placeholder="Mot de passe" required>
                                                <button type="submit" class="btn bouton mb-2" name="connecter">Connecter</button>
                                                <?php
                                                //renvoyer un message d'erreur si les champs sont vides
                                                

                                                if (isset($error_msg)) {
                                                    echo   "<span class='alert alert-danger text-center erreur' id='error'>$error_msg</span>";
                                                } ?>
                                            </div>

                                        </form>


                                    </div>





                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row text-center text-light bg-success footer">
                        <h4>&copy;UFR SDS/UJKZ</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function display() {
            document.getElementById("error").style.display = "none";
        }

        setTimeout(display, 3000);
    </script>

</body>


</html>