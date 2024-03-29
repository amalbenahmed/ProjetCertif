
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

    <title>Log In Admin</title>
</head>

<body>

<?php
include "recette.php";


$rec = new Recette();
$rec->id = $_GET['id'];
$xyz = $rec->readrecette();

?>

    <div class="card mb-3 bg-danger" style="max-width: 100%;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <a href="#"> <img src="../img/logo.png" class="card-img s" alt="..."></a>
            </div>
            <div class="col-md-8">
                <div class="card-body">

                <h4 class="card-title titre"> <?php if(isset($_SESSION['email'])){
                         include "user.php";

                         $u = new User();
                         $u->email=$_SESSION['email'];
                         $data = $u->readUserName();

                         while($x=$data->fetchObject()){
                            echo "Bienvenue ".$x->nom;
                         }
                         
                        ;} ?> </h4>           <div class="input">
                       <a <?php echo 'href="./dex.php?dex"' ?> > <input type="button" name="user" value="deconexion" class="btn btn-warning"></a></div>
                </div>  </div>
                </div>
            </div>
        </div>
    </div>


    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <ul class="navbar-nav">
        <li class="nav-item active">
                <a class="nav-link" href="../php/moncompte.php">Mon compte </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../php/ajoutrecette.php">Ajouter recette</a>
            </li>
            
            <li class="nav-item active">
                <a class="nav-link" href="../php/name.php">Afficher  les recettes </a>
            </li>
        </ul>
    </nav>


    
    <?php
if($x = $xyz->fetchObject()){
?>
    <form name="f" method="GET" action="../php/updtrectuser.php"  >
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nom de recette</label>
                    <input type="text" class="form-control" name="nom" id="inputEmail4" placeholder="Nom de recette" value="<?php echo $x->nomrec; ?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">id</label>
                    <input type="text" name="id" class="form-control" id="inputZip" value="<?php echo $x->id; ?>" readonly>
                </div>
                

                <div class="form-group col-md-4">
                    <label for="inputState">Type de recette</label>
                    <select id="inputState" class="form-control" name="type">
                        <option selected value="<?php echo $x->typerec; ?>">
                        <?php echo $x->typerec; ?></option>
                        <option>Jus</option>
                        <option>Gateau</option>
                        <option>Cake</option>
                        <option>Macaron</option>
                        <option>Sablé</option>
                        <option>Tarte</option>
                    </select>
                </div>

            </div>
           <div class="form-group purple-border">
  <label for="exampleFormControlTextarea4">Les composants</label>
  <textarea class="form-control" name="comp" id="exampleFormControlTextarea4" rows="3" value="<?php echo $x->comp; ?>"></textarea>
</div>

<div class="form-group green-border-focus">
  <label for="exampleFormControlTextarea5">Les etapes de preparation</label>
  <textarea class="form-control" name="etap" id="exampleFormControlTextarea5" rows="3" value="<?php echo $x->etape; ?>"></textarea>
</div>
            <button type="submit" class="btn btn-warning ">modifier recette</button>
        </form>
<?php
}
?>
</body>

</html>