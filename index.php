<?php
$candidates = [
    [
        'id' => 1,
        'name' => 'IDOHOU OLIVE',
        'image' => 'images/1-IDOHOU OLIVE.png'
    ],
    [
        'id' => 2,
        'name' => 'KEBI Hélèna',
        'image' => 'images/2-KEBI Hélèna.png'
    ],
    [
        'id' => 3,
        'name' => 'HOUNKANLINPKE Raïssa',
        'image' => 'images/3-HOUNKANLINPKE RAISSA.png'
    ],
    [
        'id' => 4,
        'name' => 'TOSSA Amorette',
        'image' => 'images/4-TOSSA AMORETTE.png'
    ],
    [
        'id' => 5,
        'name' => 'TETEVI Vanessa',
        'image' => 'images/5-TETEVI VANESSA.png'
    ],
    [
        'id' => 6,
        'name' => 'DEMAVO Sidoine',
        'image' => 'images/06-DEMAVO SIDOINE.png'
    ],
    [
        'id' => 7,
        'name' => 'QUENUM Merveille',
        'image' => 'images/7-QUENUM MERVEILLE.png'
    ],
    [
        'id' => 8,
        'name' => 'SAGBO Marie',
        'image' => 'images/8-SAGBO MARIE.png'
    ],
    [
        'id' => 9,
        'name' => 'GBETOHO Elodie',
        'image' => 'images/9-gbetoho elodie.png'
    ],
    [
        'id' => 10,
        'name' => 'AGUIDI Natacha',
        'image' => 'images/10-AGUIDI NATACHA.png'
    ],
    [
        'id' => 11,
        'name' => 'OTCHOUN A. Sylvie',
        'image' => 'images/11-OTCHOUN A. SYLVIE.png'
    ],
    [
        'id' => 12,
        'name' => 'TABOUE Auriole',
        'image' => 'images/12-taboue Auriol.png'
    ],
];
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
<body>

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
        <header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container px-5">
                    <h1 class="h11" >BIENVENUE AU CONCOURS REINE DES MEDIAS EDITION 3</h1>
                   <br> <P style="font-family: montsserat;" class="h12">
                        Le concours REINE DES MÉDIAS met en lumière les talents des femmes des
                         médias en valorisant leurs qualités culinaires, professionnelles, 
                         d'intégration sociale et leur contribution à la culture. Organisé par CR COMMUNICATION
                        , cet événement célèbre l'engagement et l'excellence féminine dans le monde des médias.</P>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#scroll">Candidates</a>
                </div>
            </div>
            <div class="bg-circle-1 bg-circle"></div>
            <div class="bg-circle-2 bg-circle"></div>
            <div class="bg-circle-3 bg-circle"></div>
            <div class="bg-circle-4 bg-circle"></div>
        </header>
<br><br>
        <section class="container py-5">
    <div class="row row-cols-1 row-cols-md-3 g-4"> <!-- Grille avec 3 colonnes par ligne -->
        <?php foreach ($candidates as $index => $candidate) : ?>
            <div class="col"  > <!-- Une colonne pour chaque candidate -->
                <div class="card shadow-sm text-center" style="border-radius: 15px; overflow: hidden;">
                    <!-- Image -->
                    <img src="<?php echo $candidate['image']; ?>" class="card-img-top" alt="<?php echo $candidate['name']; ?>" style="height: 300px; object-fit: cover;">
                    <!-- Corps de la carte -->
                    <div class="card-body" style="box-shadow: 0 8px 16px rgba(0, 0, 0, 0.6);">
                        <h5 class="card-title">Candidate No <?php echo $candidate['id']; ?></h5>
                        <p class="card-text"><?php echo $candidate['name']; ?></p>
                        <!-- Bouton de vote -->
                        <form action="vote.php" method="get">
                            <input type="hidden" name="id" value="<?php echo $candidate['id']; ?>">
                            <button style="width:300px; height:50px" class="btn btn-primary btn-sm rounded-pill mt-4" type="submit">Voter maintenant</button>
                        </form>
                    </div>
                </div>
            </div>
            
        <?php endforeach; ?>
    </div>
</section>

    <footer class="py-5 bg-black" id="contact">
            <div class="container px-5" style="text-align: center;">
                <a href="tel:0197978366"> Contact : 0197978366 ou 0167320732</a> <br><br>
                <a href="mailto:cdelowan@gmail.com"> Adresse électronique : cdelowan@gmail.com</a> <br><br>
                <p class="m-0 text-center text-white small">Copyright &copy; CRM COMMUNICATION 2023</p>
            </div>
            
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
    </body>
</html>
