<?php
session_start();
// Vérifie si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération et validation des données
    $candidate_id = $_SESSION['id'];
    $candidate_name = $_SESSION['nom'];
    $votes = intval($_POST['votes']); // Conversion en entier
    $amount = intval($_POST['amount']); // Conversion en entier

    // Vérification des données requises
    if ($votes > 0 && $amount > 0 && !empty($candidate_id) && !empty($candidate_name)) {
        // Informations KKia Pay
        $apiKey = "dd16fe20652d11efbf02478c5adba4b8"; // Remplacez par votre clé API
        $callbackUrl = "http://localhost/beau"; // URL de retour après paiement
        $sandbox = "true"; // Mode test (remplacez par "false" en production)

        // Affichage des informations
        echo "<h2>Informations sur le paiement :</h2>";
        echo "Candidate ID : " . $candidate_id . "<br>";
        echo "Candidate Name : " . $candidate_name . "<br>";
        echo "Nombre de voix : " . $votes . "<br>";
        echo "Montant total : " . $amount . " XOF<br>";
        echo "<hr>";

        // Balise KKia Pay intégrée avec des valeurs dynamiques
        echo "
        <kkiapay-widget 
            amount='$amount' 
            key='$apiKey' 
            position='center' 
            sandbox='$sandbox' 
            data='$candidate_name' 
            callback='$callbackUrl'>
        </kkiapay-widget>
        ";

        // Script pour activer KKia Pay
        echo "
        <script src='https://cdn.kkiapay.me/k.js'></script>
        ";
    } else {
        echo "Erreur : Données invalides ou incomplètes.";
    }
} else {
    echo "Accès non autorisé.";
}
?>
