<?php
    require_once("includes/header.php");

    $preview = new PreviewProvider($con, $user);
    echo $preview->createPreviewVideo(null);

    $containers = new CategoryContainers($con, $user);
    echo $containers->showAllCategories();

?>