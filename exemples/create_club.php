<?php
// create_club.php
require_once "bootstrap.php";

$theNewClub = new Club();
$theNewClub->setNomClub("ASNL");
$theNewClub->setAdresseClub("Rue du stade");
$theNewClub->setCpClub("54000");
$theNewClub->setMailClub("contact@asnl.net");
$theNewClub->setVilleClub("Nancy");
$theNewClub->setTelClub("0383525252");
$theNewClub->setImgClub("asnl.jpg");
$theNewClub->setCodeFFF(540001);
$theNewClub->setMdpClub("anslpassword");

$entityManager->persist($theNewClub);
$entityManager->flush();

echo "Your new Bug Id: ".$theNewClub->getNumClub()."\n";