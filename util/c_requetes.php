<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Eric
 * Date: 27/02/14
 * Time: 19:17
 * To change this template use File | Settings | File Templates.
 */

include("./fonctions_json.php");

switch($_POST['action']){
    case 'infos_ticket' :
    {
        echo getBugById($_POST['data']);//$_POST['data']);
    }
}
