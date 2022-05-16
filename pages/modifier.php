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
    <script src="../assets/mdb5-free-standard/js/mdb.min.js" defer></script>
</head>
<title>Connexion</title>

<body>
    <script>
        $(function() {
            $('#tags').autocomplete({
                source: [
                    <?php
                    require '../back-end/conndb.php';

                    $search = $bdd->query("SELECT * FROM tuteur");
                    $search->execute();
                    $result = $search->fetchAll();
                    foreach ($result as $tuteur) {
                        echo '"' . $tuteur['telephone'] . '", ';
                    }; ?>
                ]
            });
        });
    </script>

    <div class=" principe d-flex align-items-center col-md-10 offset-md-1 ">
        <div class="container col-md-12 col-sm-12 bgi">
            <div class="row">
                <div class="col-md-12 d-flex log">
                    <img src="../images/UJKZ.png" class="col-md-1 col-sm-2 float-start logo">
                    <h2 class="col-md-2 col-sm-2 p-2 text-dark text-center">UFR/SDS</h2>
                    <img src="../images/pharma.png" class="col-md-1 col-sm-2 float-end logo1">
                </div>
            </div>
            <div class="row">

                <div class="col-md-12 d-flex menaj">

                    <div class="col-md-10 text-dark text-center">
                        <h2>MODIFIER UN ETUDIANT </h2>
                        <div class=" col-md-12 d-flex justify-content-center">

                            <div class="card col-md-10 mb-3 etudiant">

                                <div class="card-body">
                                    <?php
                                    require '../back-end/conndb2.php';
                                    if (isset($_GET['id'])) {
                                        $id = $_GET['id'];
                                        $search = $bdd->prepare("SELECT * FROM etudiant WHERE id =$id");
                                        $search->execute();
                                        $list = $search->fetch();
                                        echo '
                 <form action="../back-end/update.php?id='.$id.'" method="post">
                                    <div class="form-group col-md-6 offset-md-3">
                                        <input value="' . $list['nom'] . '" class="form-control" id="nom" name="nom" required>
                                        <input value="' . $list['prenom'] . '" class="form-control" id="prenom" name="prenom" required>
                                        <input value="' . $list['date_n'] . '" class="form-control" id="date" name="date_n" required>
                                        <input value="' . $list['email'] . '" class="form-control" id="email" name="email" required>
                                        <input value="' . $list['telephone'] . '" class="form-control" id="telephone" name="telephone" required>
                                         <input value="' . $list['id_tuteur'] . '" id="tags" class="form-control " placeholder="Tuteur" name="id_tuteur" required>
                                    </div>
                            
                            <div class=" mt-2 ">
                                <button type="button" class="btn btn-danger">Close</button>
                                <button type="submit" class="btn btn-primary" name="add_tuteur">Enregistrer</button>
                            </div>    
                            </form>';
                                    }
                                   

                                    ?>
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





</body>

</html>