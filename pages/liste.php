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
    <link rel="stylesheet" type="text/css" href="../assets/DataTables/datatables.min.css" />
    <script src="../assets/liste.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="../assets/jquery-ui-1.13.1.custom/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../assets/DataTables/datatables.min.js"></script>
    <script src="../assets/mdb5-free-standard/js/mdb.min.js" defer></script>

</head>

</head>
<title>Liste</title>

<body>
    <div class="principe d-flex align-items-center col-md-10 offset-md-1">
        <div class="container-fluid bgi">
            <div class="row">
                <div class="col-md-12 d-flex log">
                    <img src="../images/UJKZ.png" class="col-md-1 col-sm-2 float-start logo">
                    <h2 class="col-md-2 col-sm-2 p-2 text-dark text-center">UFR/SDS</h2>
                    <img src="../images/pharma.png" class="col-md-1 col-sm-2 float-end logo1">
                </div>
            </div>
            <div class="coco d-flex">
                <div class="row col-md-11">
                    <?php

                    require '../back-end/conndb.php';

                    $reponse = $bdd->prepare("SELECT * FROM etudiant");
                    $reponse->execute();

                    echo '<table class="table table-hover table-striped" id="mytable">
                    <thead>
                            <tr>
                                <th scope="col">Order</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Prenom</th>
                                <th scope="col">Date_N</th>
                                <th scope="col">Tel</th>
                                <th scope="col">Email</th>
                                <th scope="col">Tuteur</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>';
                    $i = 1;
                    while ($list = $reponse->fetch()) {


                        echo '
                         <tbody>
                            <tr>
                                 <td>' . $i . '</td>
                                <td>' . $list['nom'] . '</td>
                                <td>' . $list['prenom'] . '</td>
                                <td>' . $list['date_n'] . '</td>
                                <td>' . $list['telephone'] . '</td>
                                <td>' . $list['email'] . '</td>

                                
                                ';
                        if (isset($list['id_tuteur'])) {

                            echo '<td>  <div class="jQuery_accordion text-center bg-primary" style="width:75px">
                            <h3>tuteur</h3>';

                            $tutlist = $bdd->query("SELECT * FROM tuteur WHERE telephone= $list[id_tuteur]");
                            $tut = $tutlist->fetchAll();
                            foreach ($tut as $tuteur) {
                                echo '
                                      
                            <ul style="width:200px">
                           
                                <li>' . $tuteur['nom'] . '</li>
                                <li>' . $tuteur['prenom'] . '</li>
                               <li> ' . $tuteur['telephone'] . '</li>
                               <li> ' . $tuteur['email'] . '</li>
                                </ul>
                            ';
                            }



                            echo '</div></td>';
                            echo ' 
                           
                                <td >
                                  <a href="../pages/modifier.php?id=' . $list['id'] . '"> <span class="icon">  <i class="fas fa-user-pen"></i></a>
                                  <a href="../back-end/delete.php?id=' . $list['id'] . '"> <span class="icon"> <i class="fas fa-trash-alt"></i></span></a>
                                </td>
                            </tr>
                        </tbody>';
                            $i++;
                        } else {
                            echo '<td class="text-center bg-danger" style="width:75px">  
                            <p>vide</p>      
                        </td>';
                            echo ' 
                           
                                <td>
                                <a href="../pages/modifier.php?id=' . $list['id'] . '"> <span class="icon">  <i class="fas fa-user-pen"></i></a>
                                  <a href="../back-end/delete.php?id=' . $list['id'] . '"> <span class="icon"> <i class="fas fa-trash-alt"></i></span></a>
                                </td>
                            </tr>
                        </tbody>';
                            $i++;
                        }
                    }
                    echo '</table>';
                    ?>


                </div>


                <div class=" bout">
                    <a href="#"> <button type="submit" class="btn boutli  text-center">+</button></a>
                    <a href="#"> <button type="submit" class="btn boutfli  text-center">X</button></a>
                </div>

            </div>

        </div>

    </div>
    <div class="row text-center text-light bg-success footer">
        <h4>&copy;UFR SDS/UJKZ</h4>
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
                            <input  value="'.$list['nom']. '" class="form-control" id="nom" name="nom" required>
                            <input  value="' . $list['prenom'] . '" class="form-control" id="prenom" name="prenom" required>
                            <input  value="' . $list['date'] . '" class="form-control" id="date" name="date_n" required>
                            <input value="' . $list['email'] . '" class="form-control" id="email" name="email" required>
                            <input value="' . $list['telephone'] . '" class="form-control" id="telephone" name="telephone" required>
                            <input  value="' . $list['id_tuteur'] . '" class="form-control" id="id_tuteur" name="prenom"  required>
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
</body>


</html>