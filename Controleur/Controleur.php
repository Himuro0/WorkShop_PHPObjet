<?php
require 'Modele/modele.php';

// Affiche la liste de tous les billets du blog
function accueil() {
  $billets = getBillets();
  require 'Vue/vueAccueil.php';

}

// Affiche les détails sur un billet
function billet($idBillet) {
  $billetId = getBillet($idBillet);
  require 'Vue/vueBillets.php';
}

// Affiche une erreur
function erreur($msgErreur) {
  require 'Vue/vueErreur.php';
}

?>