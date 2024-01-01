
<?php 


 
    class horraire{
        private $hr_dep;
        private $hr_arv;
        private $Prix;
        private $nhar;
        private $tri9;
        private $bus;
        private $departnamecity;
        private $arrivetnamecity;
        private $companyname;
        private $imagecompany;


        public function __construct($hr_dep, $hr_arv,$Prix,$nhar,$tri9,$bus
        ){
            $this->hr_dep = $hr_dep;
            $this->hr_arv = $hr_arv;
            $this->Prix = $Prix;
            $this->nhar = $nhar;
            $this->tri9 = $tri9;
            $this->bus = $bus;
        }

        /**
         * Get the value of hr_dep
         */ 
        public function gethr_dep()
        {
                return $this->hr_dep;
        }




        /**
         * Get the value of hr_arv
         */ 
        public function getHr_arv()
        {
                return $this->hr_arv;
        }

        /**
         * Get the value of Prix
         */ 
        public function getPrix()
        {
                return $this->Prix;
        }

        /**
         * Get the value of nhar
         */ 
        public function getNhar()
        {
                return $this->nhar;
        }

        /**
         * Get the value of tri9
         */ 
        public function getTri9()
        {
                return $this->tri9;
        }

        /**
     * Get the value of departnamecity
     */ 
    public function getDepartnamecity()
    {
        return $this->departnamecity;
    }

    /**
     * Set the value of departnamecity
     *
     * @return  self
     */ 
    public function setDepartnamecity($departnamecity)
    {
        $this->departnamecity = $departnamecity;

        return $this;
    }

    /**
     * Get the value of arrivetnamecity
     */ 
    public function getArrivetnamecity()
    {
        return $this->arrivetnamecity;
    }

    /**
     * Set the value of arrivetnamecity
     *
     * @return  self
     */ 
    public function setArrivetnamecity($arrivetnamecity)
    {
        $this->arrivetnamecity = $arrivetnamecity;

        return $this;
    }

    /**
     * Get the value of companyname
     */ 
    public function getCompanyname()
    {
        return $this->companyname;
    }

    /**
     * Set the value of companyname
     *
     * @return  self
     */ 
    public function setCompanyname($companyname)
    {
        $this->companyname = $companyname;

        return $this;
    }

        /**
         * Get the value of bus
         */ 
        public function getBus()
        {
                return $this->bus;
        }

        /**
         * Get the value of imagecompany
         */ 
        public function getImagecompany()
        {
                return $this->imagecompany;
        }

        /**
         * Set the value of imagecompany
         *
         * @return  self
         */ 
        public function setImagecompany($imagecompany)
        {
                $this->imagecompany = $imagecompany;

                return $this;
        }
    }
?>