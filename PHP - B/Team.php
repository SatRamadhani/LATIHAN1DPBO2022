<?php
    class Team
    {
        // Team attributes.
        private $name;
        private $country;
        private $year;
        private $player = array();

        /* Public Methods.
           Please take note that after a few try, PHP seems to not accept
           multiple constructor. So I decided to set it as empty constructor. */

        // Empty constructor for team, use empty string and 0 as default value.
        public function __construct()
        {
            $name = "";
            $country = "";
            $year = 0;
        }

        /* Different with Table class, this class has separated Setter and Getter
           due to different return value. */

        // Set name attribute.
        public function setName($name)
        {
            $this->name = $name;
        }

        // Set country attribute.
        public function setCountry($country)
        {
            $this->country = $country;
        }

        // Set year attribute.
        public function setYear($year)
        {
            $this->year = $year;
        }

        // Add player to team's data (treated as array of string).
        public function addPlayer($player)
        {
            array_push($this->player, $player);
        }

        // Get name attribute.
        public function getName()
        {
            return $this->name;
        }

        // Get country attribute.
        public function getCountry()
        {
            return $this->country;
        }

        // Get year attribute.
        public function getYear()
        {
            return $this->year;
        }

        // Count year's total digit.
        public function getYearLen()
        {
            return strlen((string) $this->name);
        }

        // Get certain player with array(?) index as parameter. 
        public function getCurrentPlayer($x)
        {
            return $this->player[$x];
        }

        // Get total player in team.
        public function getPlayerTotal()
        {
            return count($this->player);
        }

        // Destructor.
        function __destruct()
        {

        }
    }
?>