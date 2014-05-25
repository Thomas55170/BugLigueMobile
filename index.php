<?php
session_start();

// test du type de STA
require_once './mobile/lib/Mobile-Detect/Mobile_Detect.php';
$detect = new Mobile_Detect;

// Any mobile device (phones or tablets).
if ( $detect->isMobile() ) {
    header('Location:./mobile/');
}


include("util/fonctions.inc.php");
include("vues/v_entete.php") ;
include("vues/v_bandeau.php") ;


$msgErreurs = array();

if(!isset($_REQUEST['uc']))
    $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];

if (!isset($_SESSION['login'])){
    $uc="connexion";
}

switch($uc)
{
	case 'accueil':
		{
            include("vues/v_accueil.php");
            include("vues/v_connexion.php");
            break;
        }
    case 'connexion':
        {
            if (isset($_POST['valider'])){
                $pseudo = $_POST['pseudo'];
                $mdp = $_POST['mdp'];

                if (authentifierUser($pseudo, $mdp)){
                    header("Location:index.php?uc=dash");
                }else{
                    $msgErreurs[] = "Votre login n'a pas été reconnu par l'application";
                    include("vues/v_connexion.php");
                }
            }else{
                include("vues/v_connexion.php");
            }

            break;
        }
    case 'liste_tickets':
        {
            // on va chercher les tickets
            require_once "bootstrap.php";

            $dql = "SELECT b, e, r FROM Bug b JOIN b.engineer e JOIN b.reporter r ORDER BY b.created DESC";

            $query = $entityManager->createQuery($dql);
            $query->setMaxResults(30);
            $bugs = $query->getResult();

            include("vues/v_liste_tickets.php");
            break;
        }
    case 'dash':
    {
        if (isset($_SESSION['login'])){
            if ($_SESSION['login']['fonction'] == "Responsable" ){
                include("./controleurs/c_dashboard_resp.php");
            }else{
                if ($_SESSION['login']['fonction'] == "Technicien" ){
                    include("./controleurs/c_dashboard_tech.php");
                }else{
                    if ($_SESSION['login']['fonction'] == "Utilisateurs" ){

                        include("./controleurs/c_dashboard_club.php");
                    }
                }
            }
        }
        break;
    }
    case 'deconnexion' :
    {
        seDeconnecter();
        header("Location: ./");
    }
}
include("vues/v_erreurs.php");
include("vues/v_pied.php") ;
?>

