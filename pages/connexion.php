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
            echo '"' . $tuteur['nom'] . ',' . $tuteur['prenom'] . ',' . $tuteur['telephone'] . '", ';
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
          <div class="col-md-2 col-sm-2 text-dark text-center">
            <h2>MENU</h2>
            <div class="card menu">
              <div class="card-body">
    
             <a href="./liste.php">  <button type="submit" class="btn btn-secondary mt-3">Lister</button></a>
                <button type="button" class="btn btn-primary mt-3" data-mdb-toggle="modal" data-mdb-target="#exampleModal">Tuteur</button>
              </div>
            </div>
          </div>
          <div class="col-md-10 text-dark text-center">
            <h2>AJOUTER UN ETUDIANT </h2>
            <div class=" col-md-12 d-flex justify-content-center">

              <div class="card col-md-10 mb-3 etudiant">

                <?php


                if (isset($_GET['error_msg'])) {
                  echo  "<span class='coca bg-danger'>$_GET[error_msg]</span>";
                }
                if (isset($_GET['success_msg'])) {
                  echo  "<span class='coca bg-success'>$_GET[success_msg]</span>";
                }


                ?>
                <div class="card-body d-flex justify-content-md-center">
                  <form action="../back-end/etudiant.php" method="post">
                    <div class="form-group  formins">
                      <input type="text" class="form-control" id="nom" name="nom" placeholder="nom" required>
                      <input type="text" class="form-control" id="prenom" name="prenom" placeholder="prenom" required>
                      <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
                      <input type="date" class="form-control" id="date_n" name="date_n" placeholder="Date de naissance" required>
                      <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Teléphone" required>
                      <input class="form-check-input mt-3" type="radio" name="radio" id="Radio1" value="true">
                      <label class="form-check-label mt-3" for="inlineRadio1">oui</label>
                      <input class="form-check-input mt-3" type="radio" name="radio" id="Radio2" value="false" checked>
                      <label class="form-check-label mt-3" for="inlineRadio2">non</label>
                    </div>
                    <div id="tuteur">
                      <div class="form-group d-flex ">
                        <input id="tags" class="form-control " placeholder="Tuteur" name="tuteur"> <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                          <i class="fa-solid fa-user-plus"></i>
                        </button>


                      </div>

                    </div>

                    <div class="row"> <button type="submit" class="btn bouton mb-2" name="save">Ajouter</button> </div>
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



    <div class="modal fade col-md-8" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header d-flex justify-content-center">
            <h5 class="modal-title" id="exampleModalLabel">TUTEUR</h5>

          </div>
          <div class="modal-body">
            <form action="../back-end/add_tuteur.php" method="post">
              <div class="form-group col-md-6 offset-md-3">
                <input type="text" class="form-control" id="nom" name="nom" placeholder="nom" required>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="prenom" required>
                <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
                <input type="" class="form-control" id="telephone" name="telephone" placeholder="Teléphone" required>
              </div>
          </div>
          <div class="modal-footer d-flex justify-content-evenly">
            <button type="button" class="btn btn-danger" data-mdb-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="add_tuteur">Enregistrer</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script>

    </script>
</body>

</html>