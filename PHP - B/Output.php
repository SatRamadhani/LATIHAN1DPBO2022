<?php
    class Table
    {
        // Table attributes.
        private $row;
        private $col;
        private $length;  // Length for border.

        /* Public Methods.
           Please take note that after a few try, PHP seems to not acceptt
           multiple constructor. So I decided to set it with needed parameter. */

        // Constructor with table's row and column as parameter.
        public function __construct($row, $col)
        {
            $this->row = $row;
            $this->col = $col;
            $this->length = 0;
        }

        // Set table attribute (use "row" or "col" respectively).
        public function setAttr($choice, $argsAttr)
        {
            if(strcmp($choice, "row") == 0)
            {
                $this->row = $argsAttr;
            }
            if(strcmp($choice, "col") == 0)
            {
                $this->col = $argsAttr;
            }
        }

        // Get table attribute (use "row" or "col" respectively).
        public function getAttr($choice)
        {
            if(strcmp($choice, "row") == 0)
            {
                return $this->row;
            }
            if(strcmp($choice, "col") == 0)
            {
                return $this->col;
            }

            // Avoid non-void function warnings and wrong arguments.
            return 0;
        }

        // Create and print table (object "Team" as data output).
        public function createTable($n, $objTeam, $length)
        {
            // Set font size and type.
            // *Font face seems to be working, but not with the size. Why?
            echo "<font size = '12'>" . "<font face = 'Courier New'>";

            $mode = 0; // Used while printing list player.

            // Calculate border length and print upper border.
            $this->calculateLength(4, $length);
            $this->createBorder();

            // Print all team data ...
            for($i = 0; $i < $n; $i++)
            {
                // ... and print all players on that team.
                for($j = 0; $j < $objTeam[$i]->getPlayerTotal(); $j++)
                {
                    // If data hasn't printed at all, print the data's common attributes.
                    if($mode == 0)
                    {
                        // Name.
                        echo "| " . $objTeam[$i]->getName();
                        echo str_repeat("&nbsp;", ($length[0] - strlen($objTeam[$i]->getName())));

                        // Country.
                        echo " | " . $objTeam[$i]->getCountry();
                        echo str_repeat("&nbsp;", ($length[1] - strlen($objTeam[$i]->getCountry())));

                        // Year founded.
                        echo " | " . $objTeam[$i]->getYear();
                        // error --> echo str_repeat("&nbsp;", ($length[2] - $objTeam[$i]->getYearLen()));

                        // Set mode, so those common attributes won't printed twice.
                        $mode = 1; 
                    }
                    // If common attributes has been printed, just print space in each data.
                    else
                    {
                        // Name.
                        echo "| ";
                        echo str_repeat("&nbsp;", $length[0]);

                        // Country.
                        echo " | ";
                        echo str_repeat("&nbsp;", $length[1]);

                        // Year founded.
                        echo " | ";
                        echo str_repeat("&nbsp;", $length[2]);
                    }

                    // Print current player with index based on iteration.
                    echo " | " . $objTeam[$i]->getCurrentPlayer($j);
                    echo str_repeat("&nbsp;", ($length[3] - strlen($objTeam[$i]->getCurrentPlayer($j))));

                    echo " |" . "<br/>";
                }

                // Create middle and lower border and set back mode to 0.
                $this->createBorder();
                $mode = 0;
            }

            echo "</font>";
        }

        /* Private Methods. */

        // Calculate length for table (only used on createTable).
        private function calculateLength($n, $length)
        {
            for($i = 0; $i < $n; $i++)
            {
                $this->length += $length[$i];
            }
        }

        // Print horizontal border (only used on createTable).
        private function createBorder()
        {
            for($i = 0; $i < ($this->length + 13); $i++)
            {
                echo "-";
            }

            echo "<br/>";
        }
    }
?>