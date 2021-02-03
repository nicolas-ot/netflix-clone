<?php
require_once("includes/header.php");

if(!isset($_GET["id"])) {
    ErrorMessage::show("No ID passed into page");
}

$entity = new Entity($con, $_GET["id"]);

$preview = new PreviewProvider($con, $user);
echo $preview->createPreviewVideo($entity);

$containers = new SeasonProvider($con, $user);
echo $containers->create($entity);

?>