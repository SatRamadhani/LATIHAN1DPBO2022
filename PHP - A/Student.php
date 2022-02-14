<?php
    class Student
    {
        // Team attributes.
        private $id;
        private $name;
        private $gender;
        private $program;
        private $semester;

        /* Public Methods.
           Please take note that after a few tries, PHP seems to not accept
           multiple constructor. So I decided to set it as empty constructor. */
        
        // Empty constructor for team, use empty string and 0 as default value.
        public function __construct()
        {
            $nim = 0;
            $name = "";
            $gender = "";
            $program = "";
            $semester = 0;
        }

        // Set NIM attribute.
        public function setNIM($id)
        {
            $this->id = $id;
        }

        // Set name attribute.
        public function setName($name)
        {
            $this->name = $name;
        }

        // Set gender attribute.
        public function setGender($gender)
        {
            $this->gender = $gender;
        }

        // Set study program attribute.
        public function setProgram($program)
        {
            $this->program = $program;
        }

        // Set semester attribute.
        public function setSemester($semester)
        {
            $this->semester = $semester;
        }

        // Get NIM attribute.
        public function getNIM()
        {
            return $this->id;
        }

        // Get name attribute.
        public function getName()
        {
            return $this->name;
        }

        // Get gender attribute.
        public function getGender()
        {
            return $this->gender;
        }

        // Get program attribute.
        public function getProgram()
        {
            return $this->program;
        }

        // Get semester attribute.
        public function getSemester()
        {
            return $this->semester;
        }

        function __destruct()
        {

        }
    }
?>