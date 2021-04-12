<?php

define("LIBRARY",$_SERVER["DOCUMENT_ROOT"] . "/mascellani/");

require_once(LIBRARY."controllers/PersonaController.php");
require_once(LIBRARY."models/Veicolo.php");
require_once(LIBRARY."models/Auto.php");
require_once(LIBRARY."models/Moto.php");
require_once(LIBRARY."models/Persona.php");

use Matteo\Controllers\PersonaController;

//VISTA
$items = PersonaController::getPersone();
$item = PersonaController::getPersona("Matteo");

?>

<div>Lista persone</div>
    <?php if(isset($item["name"])): ?>
        <ul>
            <li><?php echo $item["name"] . " " . $item["surname"]; ?></li>
        </ul>
    <?php endif; ?>

<ul>
    <?php foreach($items as $item): ?>
        <li><?php echo $item["name"] . " " . $item["surname"]; ?></li>
    <?php endforeach; ?>
</ul>


<select name="name" placeholder="" data-id="" data-toggle="tooltip">
    <?php foreach($items as $item): ?>
        <option><?php echo $item["name"] . " " . $item["surname"]; ?></option>
    <?php endforeach; ?>
</select>