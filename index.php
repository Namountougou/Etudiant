
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="./assets/mdb5-free-standard/css/mdb.min.css">
</head>
<title>Accueil</title>
<html>

<body>


    <div class=" principe d-flex align-items-center col-md-10 offset-md-1">

        <div class="container col-md-12 col-sm-12 bgi" style="background-image: url('./images/oks.jpg')">

            <div class="row">
                <div class="col-md-12 d-flex log">
                    <img src="./images/UJKZ.png" class="col-md-1 col-sm-2 float-start logo">
                    <h3 class="col-md-2 col-sm-2 p-2 text-light text-center">ADMIN</h3>

                    <img src="./images/pharma.png" class="col-md-1 col-sm-2 float-end logo1">
                </div>
            </div>
            <div class="row d-flex col-md-12 justify-content-md-center">
                <div class=" card col-md-4 rounded-3  saisi">
                    <div class="card-body">
                        <img src="./images/iconedoc.png" class="col-md-1 offset-md-4 col-sm-2 logdoc">

                        <form action="" method="POST" class="d-flex justify-content-md-center">
                            <div class="form-group border-4 border-bottom  formins">
                                <input type="text" class="form-control" id="nom" name="nom" placeholder="nom">
                                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="prenom">
                                <input type="text" class="form-control" id="email" name="email" placeholder="email">
                                <input type="password" class="form-control" id="pwd" name="pwd" placeholder="password">
                                <input type="password" class="form-control" id="cfpwd" name="cfpwd" placeholder="confirmpassword">
                                <button type="submit" class="btn bouton offset-md-2" name="valider">Submit</button>
                                <?php if (isset ($error_msg)) {
                                    echo   "<span class='alert alert-danger text-center erreur' id='error'>$error_msg</span>";
                                } ?>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="row ms-2 text-center text-light bg-success footer">
                <h4>&copy;UFR SDS/UJKZ</h4>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        function display(){
            document.getElementById("error").style.display = "none";}
        
        setTimeout(display, 2000);
        
    </script>



</body>

</html>