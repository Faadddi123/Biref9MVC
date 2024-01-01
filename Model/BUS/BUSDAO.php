<?php
require_once 'Model\connexion.php';
require_once 'Model\BUS\modelBUS.php';
class BUSDAO{
    private $db;
    public function __construct(){
        $this->db = Database::getInstance()->getConnection(); 
    }

    public function get_BUSs(){
        $query = "SELECT * FROM BUS";
        $stmt = $this->db->query($query);
        $stmt -> execute();
        $BUSsData = $stmt->fetchAll();
        $BUSs = array();
        foreach ($BUSsData as $B) {
            $BUSs[] = new BUS($B["id"],$B["name"],$B["capacite"],$B["Company"]);
        }
        return $BUSs;

    }
    public function get_id_of_company($id){
        $query = "SELECT company FROM BUS WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    
        // Check if the query was successful
        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result['company'];
        } else {
            // Handle the case when no rows are found (return a default value or throw an exception)
            return "City Not Found"; // You can replace this with any default value or error message
        }
    }

    public function update_BUS($BUS){
        $query = "UPDATE `BUS` SET `name`='".$BUS->getname()."',`image`='".$BUS->getimage()."' where `id`='".$BUS->getid()."'";
        // echo $query;
        $stmt = $this->db->query($query);
        $stmt -> execute();
    }

    function getBUSByID($id) {
        $query = "SELECT * FROM BUS where id = $id";
        $stmt = $this->db->query($query);
        $stmt -> execute();
        $B = $stmt->fetch();
     
            $BUS = new BUS($B["id"],$B["name"],$B["capacite"],$B["Company"]);
        
        return $BUS;
          
    }



}



