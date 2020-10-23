<?php
/* Home Controller
 * 2014-10-14
 * Created By OJBA
 * Last Modification 2014-10-14 20:04
 */

  function run(){
    $viewData = array(
    "prodName1" => "PANADOL",
    "prodName2" => "MIGRADORIXINA",
    "prodName3" => "KETEROLAKO TRAMAMINA"
    );

    renderizar("home", $viewData);
  }

  run();
?>
