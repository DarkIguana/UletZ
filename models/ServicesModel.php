<?php

function getServicesByCat($countryId){
     global $db;
    $sql = "SELECT * 
                              FROM services
                              WHERE category_id='{$countryId}'"; 
  $rs = mysqli_query($db, $sql);
  return createSmartyRsArray($rs);
}

