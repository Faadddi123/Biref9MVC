<?php 
require_once 'Model\connexion.php';
require_once 'Model\Travel\modeltravel.php';
class TravelDAO {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function get_travels() {
        $query = "SELECT * FROM Route";
        $stmt = $this->db->query($query);
        $stmt->execute();
        $travelsData = $stmt->fetchAll();
        $travels = array();
        foreach ($travelsData as $travel) {
            $travels[] = new Travel($travel["id"], $travel["depart_city"], $travel["Arrive_city"], $travel["duree"], $travel["periode"],$travel["prix"]);
        }
        return $travels;
    }
}
?>