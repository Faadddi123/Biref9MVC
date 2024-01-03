<?php
require_once 'Model\connexion.php';
require_once 'Model\company\modelcompany.php';
class CompanyDAO{
    private $db;
    public function __construct(){
        $this->db = Database::getInstance()->getConnection(); 
    }

    public function get_companys(){
        $query = "SELECT * FROM company";
        $stmt = $this->db->query($query);
        $stmt -> execute();
        $companysData = $stmt->fetchAll();
        $companys = array();
        foreach ($companysData as $B) {
            $companys[] = new company($B["id"],$B["name"],$B["image"]);
        }
        return $companys;

    }

    public function update_company($company){
        $query = "UPDATE `company` SET `name`='".$company->getname()."',`image`='".$company->getimage()."' where `id`='".$company->getid()."'";
        // echo $query;
        $stmt = $this->db->query($query);
        $stmt -> execute();
    }

    function getcompanyByID($id) {
        $query = "SELECT * FROM company where id = $id";
        $stmt = $this->db->query($query);
        $stmt -> execute();
        $B = $stmt->fetch();
     
            $company = new company($B["id"],$B["name"],$B["image"]);
        
        return $company;
          
    }
    
    
    public function getcompanyNameById($id) {
        $query = "SELECT name FROM company WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result['name'];
        } else {
      
            return "City Not Found"; 
        }
        
    }
    
    public function getcompanyImageById($id) {
        $query = "SELECT image FROM company WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['image'];
    } else {
        return "City Not Found"; 
    }
    }



}



