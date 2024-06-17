<?php
include 'compteBancaire.php';
include 'Titulaire.php';

// Création des titulaires
$titulaire1 = new Titulaire("Lecomte", "Albert", "1989-07-13", "Jumet");
$titulaire2 = new Titulaire("Lecomte", "Rafaêlle", "2018-11-18", "Colmar");

// Création des comptes bancaires
$compte1 = new CompteBancaire("Compte courant", 450 ,"€", $titulaire1);
$compte2 = new CompteBancaire("Livret A", 5000 ,"€", $titulaire2);
$compte3 = new CompteBancaire("Livret A", 1500 ,"€", $titulaire1);

// Ajout des comptes aux titulaires
$titulaire1->ajouterCompte($compte1);
$titulaire2->ajouterCompte($compte2);
$titulaire1->ajouterCompte($compte3);

// Affichage des informations des titulaires et de leurs comptes

echo $titulaire1->afficherInformations();
echo $titulaire2->afficherInformations();


// Exemple de virement
$compte1->effectuerVirement(100, $compte2);
$compte2->effectuerVirement(350, $compte1);
$compte3->effectuerVirement(250, $compte2);

// Affichage des informations des comptes après le virement

echo "<br>Après virement : <br><br> ";
echo $compte1->afficherInformations();
echo $compte2->afficherInformations();
echo $compte3->afficherInformations();

