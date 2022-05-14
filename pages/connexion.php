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

          $search = $bdd->query("SELECT * FROM admine");
          $search->execute();
          $result = $search->fetchAll();
          foreach ($result as $tuteur) {
            echo '"' . $tuteur['nom'] . ',' . $tuteur['prenom'] . ',' . $tuteur['email'] . '", ';
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
              <div class="card-body"> <button type="submit" class="btn btn-primary mt-2">Ajouter</button>
                <button type="submit" class="btn btn-primary mt-3">Lister</button>
                <button type="submit" class="btn btn-primary mt-3">Tuteur</button>
              </div>
            </div>
          </div>
          <div class="col-md-10 text-dark text-center">
            <h2>AJOUTER UN ETUDIANT </h2>
            <div class=" col-md-12 d-flex justify-content-center">
              <div class="card col-md-10 mb-3 etudiant">
                <div class="card-body d-flex justify-content-md-center">
                  <form action="" method="post">
                    <div class="form-group  formins">
                      <input type="text" class="form-control" id="exampleInputnom" name="nom" placeholder="nom" required>
                      <input type="text" class="form-control" id="exampleInputnom" name="prenom" placeholder="prenom" required>
                      <input type="email" class="form-control" id="exampleInputnom" name="email" placeholder="email" required>
                      <input type="text" class="form-control" id="exampleInputnom" name="password" placeholder="Teléphone" required>
                      <input class="form-check-input mt-3" type="radio" name="Radio" id="Radio1" value="true">
                      <label class="form-check-label mt-3" for="inlineRadio1">oui</label>
                      <input class="form-check-input mt-3" type="radio" name="Radio" id="Radio2" value="false" checked>
                      <label class="form-check-label mt-3" for="inlineRadio2">non</label>
                    </div>
                    <div id="tuteur">
                      <div class="form-group d-flex ">
                        <input id="tags" class="form-control " placeholder="Tuteur"> <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                          +
                        </button>


                      </div>

                    </div>

                    <div class="row"> <button type="submit" class="btn bouton mb-2">Ajouter</button> </div>

                </div>
                </form>


              </div>
            </div>
          </div>
        </div>

        <div class="row text-center text-light bg-success footer">
          <h4>&copy;UFR SDS/UJKZ</h4>
        </div>
      </div>
    </div>



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">TUTEUR</h5>
            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" id="nom" name="nom" placeholder="nom" required>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="prenom" required>
                <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
                <input type="text" class="form-control" id="tel" name="password" placeholder="Teléphone" required>
              </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
          </div>
        </div>
      </div>
    </div>

</body>

</html>