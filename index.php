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
$controller_Travels = new controller_Travels() ; 

if (isset($_GET["action"])) {
    $action = $_GET["action"];

    if ($action === "update") {
        $controller_companies->setCompanies();
    }

    // Add condition to display travels
    if ($action === "travels") {
        $controller_Travels->getTravels();
    }
} else {
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST["Depart_City"]) && isset($_POST["Arrive_City"])){
            $depart = intval($_POST["Depart_City"]);
            $arrive = intval($_POST["Arrive_City"]);
            echo $depart , $arrive;
            $contoller_horraires->gethorraires($depart,$arrive) ;
        
        }else{

        }

    }

    $depart = 0;
    $arrive = 0;
    $contoller_horraires->gethorraires($depart,$arrive) ;
    

}

// Add other code as needed
// $controller_companies->afficheform();
// $controller_companies->setCompanies();
?>
