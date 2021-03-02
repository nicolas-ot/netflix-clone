<?php
include_once("../includes/config.php");
include_once("../includes/classes/SearchResultProvider.php");
include_once("../includes/classes/EntityProvider.php");
include_once("../includes/classes/Entity.php");
include_once("../includes/classes/PreviewProvider.php");

if(isset($_POST["term"]) && isset($_POST["username"])) {
    $src = new SearchResultProvider($con, $_POST["username"]);
    echo $src->getResults($_POST["term"]);
}
else {
    echo "lmao";
}
?>