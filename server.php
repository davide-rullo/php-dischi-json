<?php
//recupero il file json e lo trasformo in php
$discs = json_decode(file_get_contents('discs.json'), true);

echo json_encode($discs);
