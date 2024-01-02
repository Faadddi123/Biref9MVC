<?php 
 include "Model\company\companyDAO.php" ;
 include "Model\BUS\BUSDAO.php" ;
 include "Model\City\CityDAO.php" ;
 include "Model\Route\RouteDAO.php" ;
 include "Model\horraire\horraireDAO.php" ;
 include "Model\Travel\TravelDAO.php" ;



class contoller_companys {

    function getcompanys()  {
        
   $companyDAO = new CompanyDAO() ;
   $companys = $companyDAO-> get_companys();

   include "View\company.php" ; 


    }

    function getcompanysForm()  {
        
   $companyDAO = new CompanyDAO() ;
   $companys = $companyDAO-> get_companys();

 return $companys ;


    }


    function afficheform()  {
        $id = "2345678901234"  ; 
        $companyDAO = new CompanyDAO() ;
        $company = $companyDAO->getcompanyByID($id) ;
  
        include "View\companyForm.php" ; 
    }
 


    function setcompanys()  {
       $name = $_POST["name"] ; 
       $image = $_POST["image"] ; 
       $id = $_POST["id"] ; 

   $companyDAO = new CompanyDAO() ;
   $company = new company(  $id  ,  $name , $image) ;


    $companyDAO->update_company($company);

    include "View\companyForm.php"  ; 
       
    }
}

class contoller_BUSs {

    function getBUSs()  {
        
   $BUSDAO = new BUSDAO() ;
   $BUSs = $BUSDAO-> get_BUSs();

   include "View\BUS.php" ; 


    }

    function getBUSsForm()  {
        
   $BUSDAO = new BUSDAO() ;
   $BUSs = $BUSDAO-> get_BUSs();

 return $BUSs ;


    }


    function afficheform()  {
        $id = "2345678901234"  ; 
        $BUSDAO = new BUSDAO() ;
        $BUS = $BUSDAO->getBUSByID($id) ;
  
        include "View\BUSForm.php" ; 
    }
 


    function setBUSs()  {
       $name = $_POST["name"] ; 
       $capacite = $_POST["capacite"] ; 
       $id = $_POST["id"] ; 
       $company = $_POST["company"] ; 

   $BUSDAO = new BUSDAO() ;
   $BUS = new BUS(  $id  ,  $name , $capacite , $company) ;


    $BUSDAO->update_BUS($BUS);

    include "View\BUSForm.php"  ; 
       
    }
}
// controller/TravelController.php
class controller_Travels {
    function getTravels() {
        $travelDAO = new TravelDAO();
        $travels = $travelDAO->get_travels();
        include "View/travel.php";
    }
}

class contoller_Citys {

    function getCitys()  {
        
   $CityDAO = new CityDAO() ;
   $Citys = $CityDAO-> get_Citys();

   include "View\City.php" ; 


    }

    function getCitysForm()  {
        
   $CityDAO = new CityDAO() ;
   $Citys = $CityDAO-> get_Citys();

 return $Citys ;


    }


    function afficheform()  {
        $id = "2345678901234"  ; 
        $CityDAO = new CityDAO() ;
        $City = $CityDAO->getCityByID($id) ;
  
        include "View\CityForm.php" ; 
    }
 
}

class contoller_Routes {

    function getRoutes()  {
        
   $RouteDAO = new RouteDAO() ;
   $Routes = $RouteDAO-> get_Routes();
   $CityDAO = new CityDAO();
  
   
        foreach ($Routes as $Route) {
            $Route->setDepartCityName($CityDAO->getCityNameById($Route->getDepart_city()));
            $Route->setArriveCityName($CityDAO->getCityNameById($Route->getArrive_city()));
            
        }

   include "View/travel.php" ; 


    }

    function getRoutesForm()  {
        
   $RouteDAO = new RouteDAO() ;
   $Routes = $RouteDAO-> get_Routes();

 return $Routes ;


    }


    function afficheform()  {
        $id = "2345678901234"  ; 
        $RouteDAO = new RouteDAO() ;
        $Route = $RouteDAO->getRouteByID($id) ;
  
        include "View\RouteForm.php" ; 
    }
 


    function setRoutes()  {
       $depart_city = $_POST["depart_city"] ; 
       $Arrive_city = $_POST["Arrive_city"] ; 
       $id = $_POST["id"] ; 
       $duree = $_POST["duree"] ; 
       $periode = $_POST["periode"] ; 

   $RouteDAO = new RouteDAO() ;
   $Route = new Route(  $id, $depart_city,$Arrive_city,$duree,$periode) ;


    $RouteDAO->update_Route($Route);

    include "View\RouteForm.php"  ; 
       
    }
}

class contoller_horraires {

    function gethorraires($depart , $arrive) {
        $horraireDAO = new horraireDAO();
        if($depart == 0 || $arrive == 0){
            $horraires = $horraireDAO->get_horraires();
        }else{
            $horraires = $horraireDAO->get_horraires_by_search($depart, $arrive);
        }
        
        $RouteDAO = new RouteDAO();
        $CityDAO = new CityDAO();
        $BUSDAO = new BUSDAO();
        $companyDAO = new CompanyDAO();
    
        foreach ($horraires as $horraire) {
            $horraire->setDepartnamecity($CityDAO->getCityNameById($RouteDAO->getcityoftheroutedepart($horraire->getTri9())));
            $horraire->setArrivetnamecity($CityDAO->getCityNameById($RouteDAO->getcityoftheroutearive($horraire->getTri9())));
            $horraire->setCompanyname($companyDAO->getcompanyNameById($BUSDAO->get_id_of_company($horraire->getBus())));
            $horraire->setImagecompany($companyDAO->getcompanyImageById($BUSDAO->get_id_of_company($horraire->getBus())));
            
        }
        $Cities = $CityDAO->get_Citys();

        include "View\View.php";
    }
    
    

    function gethorrairesForm()  {
        
   $horraireDAO = new horraireDAO() ;
   $horraires = $horraireDAO-> get_horraires();

 return $horraires ;


    }


    function afficheform()  {
        $id = "2345678901234"  ; 
        $horraireDAO = new horraireDAO() ;
        $horraire = $horraireDAO->gethorraireByID($id) ;
  
        include "View\horraireForm.php" ; 
    }
 


   
}