<?php 



class Travel {
    private $id;
    private $departCity;
    private $arriveCity;
    private $duree;
    private $periode;
    private $prix;

    

    public function __construct($id, $departCity, $arriveCity, $duree, $periode ,$prix) {
        $this->id = $id;
        $this->departCity = $departCity;
        $this->arriveCity = $arriveCity;
        $this->duree = $duree;
        $this->periode = $periode;
        $this->prix = $prix;
    }
    /**
             * Get the value of id
             */ 
            public function getid()
            {
                    return $this->id;
            }

    // Add getter methods here

    /**
     * Get the value of departCity
     */ 
    public function getDepartCity()
    {
        return $this->departCity;
    }

    /**
     * Get the value of arriveCity
     */ 
    public function getArriveCity()
    {
        return $this->arriveCity;
    }

    /**
     * Get the value of duree
     */ 
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Get the value of periode
     */ 
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    
}
?>