<?php
require_once 'Model\connexion.php';
require_once 'Model\Route\modelRoute.php';
class RouteDAO{
    private $db;
    public function __construct(){
        $this->db = Database::getInstance()->getConnection(); 
    }

    public function get_Routes(){
        $query = "SELECT * FROM Route";
        $stmt = $this->db->query($query);
        $stmt -> execute();
        $RoutesData = $stmt->fetchAll();
        $Routes = array();
        foreach ($RoutesData as $B) {
            $Routes[] = new Route($B["id"],$B["depart_city"],$B["Arrive_city"],$B["duree"],$B["periode"]);
        }
        return $Routes;

    }
    public function getcityoftheroutearive($id) {
        $query = "SELECT Arrive_city FROM Route WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    
        // Check if the query was successful
        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result['Arrive_city'];
        } else {
            // Handle the case when no rows are found (return a default value or throw an exception)
            return "City Not Found"; // You can replace this with any default value or error message
        }
    }
    
    public function getcityoftheroutedepart($id) {
        $query = "SELECT depart_city FROM Route WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    
        // Check if the query was successful
        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result['depart_city'];
        } else {
            // Handle the case when no rows are found (return a default value or throw an exception)
            return "City Not Found"; // You can replace this with any default value or error message
        }
    }
    
    public function update_Route($Route){
        $query = "UPDATE `Route` SET `name`='".$Route->getname()."',`image`='".$Route->getimage()."' where `id`='".$Route->getid()."'";
        // echo $query;
        $stmt = $this->db->query($query);
        $stmt -> execute();
    }

    function getRouteByID($id) {
        $query = "SELECT * FROM Route where id = $id";
        $stmt = $this->db->query($query);
        $stmt -> execute();
        $B = $stmt->fetch();
     
            $Route = new Route($B["id"],$B["depart_city"],$B["Arrive_city"],$B["duree"],$B["periode"]);
        
        return $Route;
          
    }

}



