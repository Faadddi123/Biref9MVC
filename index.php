<?php 
include "Contoller/controllercompany.php";
    // include "Contoller/controllerBUS.php";
    // include "Contoller/controllerCity.php";
    // include "Contoller/controllerRoutes.php";
    // include "Contoller/controllerHorraires.php";
    // include "Contoller/controllerTravels.php"; // Include the controller for Travels

$contoller_companys = new contoller_companys() ; 
$contoller_BUSs = new contoller_BUSs() ; 
$contoller_Citys = new contoller_Citys() ; 
$contoller_Routes = new contoller_Routes() ; 
$contoller_horraires = new contoller_horraires() ; 
$contoller_searshes = new Controller_searsh() ; 
$controller_Travels = new controller_Travels() ; 
session_start();
if (isset($_GET["action"])) {
    $action = $_GET["action"];

    if ($action === "find") {
        // $contoller_horraires->gethorraires($depart,$arrive) ;
        $contoller_searshes->searsh() ;
    }

    // Add condition to display travels
    if ($action === "travels") {
        $controller_Travels->getTravels();
    }
} else {
    if($_SESSION["depart"] != 0 && $_SESSION["arrive"] != 0){
        $depart = $_SESSION["depart"];
        $arrive = $_SESSION["arrive"];
    }else{

    }

    $depart = 0;
    $arrive = 0;
    $contoller_horraires->gethorraires($depart,$arrive) ;
    

}

// Add other code as needed
// $controller_companies->afficheform();
// $controller_companies->setCompanies();
?>
