<?php

session_start();

// Tableau associatif des candidates (réutilisable dans toutes les pages)
$candidates = [
    1 => ['name' => 'IDOHOU OLIVE', 'image' => 'images/1-IDOHOU OLIVE.png'],
    2 => ['name' => 'KEBI Hélèna', 'image' => 'images/2-KEBI Hélèna.png'],
    3 => ['name' => 'HOUNKANLINPKE Raïssa', 'image' => 'images/3-HOUNKANLINPKE RAISSA.png'],
    4 => ['name' => 'TOSSA Amorette', 'image' => 'images/4-TOSSA AMORETTE.png'],
    5 => ['name' => 'TETEVI Vanessa', 'image' => 'images/5-TETEVI VANESSA.png'],
    6 => ['name' => 'DEMAVO Sidoine', 'image' => 'images/06-DEMAVO SIDOINE.png'],
    7 => ['name' => 'QUENUM Merveille', 'image' => 'images/7-QUENUM MERVEILLE.png'],
    8 => ['name' => 'SAGBO Marie', 'image' => 'images/8-SAGBO MARIE.png'],
    9 => ['name' => 'GBETOHO Elodie', 'image' => 'images/9-gbetoho elodie.png'],
    10 => ['name' => 'AGUIDI Natacha', 'image' => 'images/10-AGUIDI NATACHA.png'],
    11 => ['name' => 'OTCHOUN A. Sylvie', 'image' => 'images/11-OTCHOUN A. SYLVIE.png'],
    12 => ['name' => 'TABOUE Auriole', 'image' => 'images/12-taboue Auriol.png'],
];

// Vérifie si un ID est passé dans l'URL
if (isset($_GET['id']) && array_key_exists($_GET['id'], $candidates)) {
    $id = $_GET['id'];
    $_SESSION['id']=$id;
    $candidate = $candidates[$id];
    $_SESSION['nom']=$candidate['name'];
    
} else {
    // Redirige vers la page principale si aucun ID valide n'est fourni
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>REINE DES MEDIAS</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom " style="background-color: rgb(22, 21, 21);">
            <div class="container px-5">
                <img  class="ban" src="images/NEW LOGO .png" alt="" srcset="">
                <a class="navbar-brand" href="#page-top">CR COMMUNICATION</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#page-top">Acceuil</a></li>
                        <li class="nav-item"><a class="nav-link" href="#scroll">Candidates</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        

        <div class="containe" style="text-align:center">
        <h1>Vote pour <?php echo $candidate['name']; ?></h1>
        <img src="<?php echo $candidate['image']; ?>" alt="<?php echo $candidate['name']; ?>" style="width:300px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.6);">
        <br><br>
        <p>Candidate <?php echo "<strong>".$id."  </strong>:". $candidate['name']; ?></p>

        <!-- Formulaire de paiement -->
  <!-- Formulaire de paiement -->
<form action="paiement.php" method="POST">
    <!-- ID et nom de la candidate -->
    <input type="hidden" name="candidate_id" value="1">
    <input type="hidden" name="candidate_name" value="IDOHOU OLIVE">

    <!-- Nombre de voix -->
    <label for="votes">Nombre de voix :</label>
    <input class="form-control" type="number" id="votes" name="votes" value="1" min="1" required  style="text-align:center; width: 60%; margin-left:20%" onchange="updatePrice()">

    <!-- Prix calculé -->
    <p id="priceDisplay">Montant : 150 XOF</p>
    <input type="hidden" id="amount" name="amount" value="150">

    <!-- Bouton de soumission -->
    <button type="submit" style="background-color:#f784bc; color:white;">Suivant</button>
</form>

<script>
    // Mise à jour du prix en fonction des votes sélectionnés
    function updatePrice() {
        var votes = document.getElementById('votes').value;
        var price = votes * 150; // 150 XOF par vote

        // Mise à jour du champ caché et de l'affichage
        document.getElementById('amount').value = price;
        document.getElementById('priceDisplay').innerText = "Montant : " + price + " XOF";
    }
</script>

    </div>
        <!-- Footer-->
        <footer class="py-5 bg-black" id="contact">
            <div class="container px-5" style="text-align: center;">
                <a href="tel:0197978366"> Contact : 0197978366 ou 0167320732</a> <br><br>
                <a href="mailto:cdelowan@gmail.com"> Adresse électronique : cdelowan@gmail.com</a> <br><br>
                <p class="m-0 text-center text-white small">Copyright &copy; CRM COMMUNICATION 2023</p>
            </div>
            
        </footer>
<!-- Bootstrap core JS-->

<style>
    .containe {
        margin: 3%;
        padding: 3%;
        width: 60%;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.6);
        margin-left: 20%;
    }

    /* Media query pour les petits écrans (par exemple, les téléphones Android) */
    @media only screen and (max-width: 768px) {
        .containe {
            width: 90%;         /* Augmente la largeur pour les petits écrans */
            margin-left: 5%;    /* Centrer le conteneur */
            padding: 5%;        /* Augmente un peu le padding pour plus d'espace */
        }
    }

    /* Media query pour les très petits écrans (comme les téléphones très compacts) */
    @media only screen and (max-width: 480px) {
        .containe {
            width: 95%;         /* Utiliser presque toute la largeur */
            margin-left: 2%;    /* Ajuster le margin */
            padding: 5%;        /* Ajouter plus de padding pour éviter la congestion */
        }
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>

<script src="https://cdn.kkiapay.me/k.js">

    </body>
</html>
