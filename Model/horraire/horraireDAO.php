<?php
require_once 'Model\connexion.php';
require_once 'Model\horraire\modelhorraire.php';
class horraireDAO{
    private $db;
    public function __construct(){
        $this->db = Database::getInstance()->getConnection(); 
    }

    public function get_horraires(){
        $query = "SELECT * FROM horraire";
        $stmt = $this->db->query($query);
        $stmt -> execute();
        $horrairesData = $stmt->fetchAll();
        $horraires = array();
        foreach ($horrairesData as $B) {
            $horraires[] = new horraire($B["hr_dep"], $B["hr_arv"],$B["Prix"],$B["nhar"],$B["tri9"],$B["bus"]);
        }
        return $horraires;

    }

    public function get_horraires_by_search($departcity,$arrivecity){
        $query = "SELECT Horraire.* FROM Horraire INNER JOIN route on Horraire.tri9 = route.id WHERE route.depart_city = $departcity and route.Arrive_city = $arrivecity";
        $stmt = $this->db->query($query);
        $stmt -> execute();
        $horrairesData = $stmt->fetchAll();
        $horraires = array();
        foreach ($horrairesData as $B) {
            $horraires[] = new horraire($B["hr_dep"], $B["hr_arv"],$B["Prix"],$B["nhar"],$B["tri9"],$B["bus"]);
        }
        return $horraires;

    }

    

    function gethorraireByID($id) {
        $query = "SELECT * FROM horraire where id = $id";
        $stmt = $this->db->query($query);
        $stmt -> execute();
        $B = $stmt->fetch();
     
            $horraire = new horraire($B["hr_dep"], $B["hr_arv"],$B["Prix"],$B["nhar"],$B["tri9"],$B["bus"]);
        
        return $horraire;
          
    }



}



