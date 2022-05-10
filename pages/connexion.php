<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="../assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<title>Connexion</title>

<body>
  <div class=" principe d-flex align-items-center ">
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
            <div class="card menu"></div>
          </div>
          <div class="col-md-10 text-dark text-center">
            <h2>AJOUTER UN ETUDIANT </h2>
            <div class=" col-md-12 d-flex justify-content-center">
              <div class="card col-md-10 etudiant">
                <div class="card-body">
                  <form action="../index.php" method="post" class="d-flex justify-content-md-around">
                    <div class="form-group border-4 border-bottom  formins">
                      <input type="text" class="form-control" id="exampleInputnom" name="nom" placeholder="nom" required>
                      <input type="text" class="form-control" id="exampleInputnom" name="prenom" placeholder="prenom" required>
                      <input type="email" class="form-control" id="exampleInputnom" name="email" placeholder="email" required>
                      <input type="text" class="form-control" id="exampleInputnom" name="password" placeholder="Teléphone" required>

                      <input class="form-check-input" type="radio" name="Radio" id="Radio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">oui</label>
                      <input class="form-check-input" type="radio" name="Radio" id="Radio2" value="option2">
                      <label class="form-check-label" for="inlineRadio2">non</label>
                        <button type="submit" class="btn btn-primary">Ajouter</button>

                    </div>
                    <div class="form-group border-4 border-bottom formins">
                      //ajouter un input de type select avec une fonction recherche de l'etudiant
                      <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                  </form>
                  
                      
                      
                      
                      <select class="form-control" name="tuteur">
                        <option value="">tuteur</option>
                        <?php
                        $sql = "SELECT * FROM tuteur";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                          while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row['id'] . '">' . $row['nom'] . ' ' . $row['prenom'] . '</option>';
                          }
                        }
                        ?>
                      </select>
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


</body>

</html>