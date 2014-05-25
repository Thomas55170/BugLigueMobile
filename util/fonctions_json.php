<?php

function getBugById($id){
    require "../bootstrap.php";
    $the_bug = $entityManager->find('Bug', $id);
    return json_encode($the_bug->jsonSerialize());
}
?>