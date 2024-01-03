<?php
require_once 'Model\connexion.php';
require_once 'Model\horraire\modelhorraire.php';
class horraireDAO{
    private $db;
    public function __construct(){
        $this->db = Database::getInstance()->getConnection(); 
    }

    public function get_horraires(){
        $query = "SELECT * FROM horraire WHERE nhar > CURDATE();";
        $stmt = $this->db->query($query);
        $stmt -> execute();
        $horrairesData = $stmt->fetchAll();
        $horraires = array();
        foreach ($horrairesData as $B) {
            $horraires[] = new horraire($B["hr_dep"], $B["hr_arv"],$B["Prix"],$B["nhar"],$B["tri9"],$B["bus"]);
        }
        return $horraires;

    }

    public function get_horraires_by_search($departcity, $arrivecity, $datetime) {
        try {
            // Format datetime
            $formattedDatetime = date('Y-m-d', strtotime($datetime));
    
            // Prepare and execute the SQL query with parameterized statements
            $query = "SELECT Horraire.* FROM Horraire INNER JOIN route ON Horraire.tri9 = route.id WHERE route.depart_city = :departcity and route.Arrive_city = :arrivecity AND Horraire.nhar > CURDATE() AND Horraire.nhar > :datetime";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':departcity', $departcity, PDO::PARAM_INT); // Assuming $departcity is an integer, adjust accordingly
            $stmt->bindParam(':arrivecity', $arrivecity, PDO::PARAM_INT); // Assuming $arrivecity is an integer, adjust accordingly
            $stmt->bindParam(':datetime', $formattedDatetime, PDO::PARAM_STR); // Assuming $datetime is a string, adjust accordingly
            $stmt->execute();
    
            // Fetch results
            $horrairesData = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            // Process the results
            $horraires = array();
            foreach ($horrairesData as $B) {
                $horraires[] = new horraire($B["hr_dep"], $B["hr_arv"], $B["Prix"], $B["nhar"], $B["tri9"], $B["bus"]);
            }
    
            return $horraires;
        } catch (PDOException $e) {
            // Handle the exception
            echo "Error: " . $e->getMessage();
            return array(); // Return an empty array or handle the error as needed
        }
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



