<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Eric
 * Date: 20/02/14
 * Time: 19:10
 * To change this template use File | Settings | File Templates.
 */

if(!isset($_REQUEST['action']))
    $action = 'list';
else
    $action = $_REQUEST['action'];

switch($action){
    case 'list':{
        $the_bugs = getBugsOpenByUser($_SESSION['login']['id']);
        $bugs_en_cours = $the_bugs[0];
        $bugs_fermes =  $the_bugs[1];
        include("vues/v_dashboard_club.php");
        break;
    }
    case 'nouveau':{
        if (isset($_POST['objet'])){
            $files = $_FILES['avatar'];
            $message = ajouterNewBug($files);
            uploadFiles($files);
            include("vues/v_message.php");
        }
        $the_products = getAllProducts();
        include("vues/v_new_bug.php");
        break;
    }
}


?>