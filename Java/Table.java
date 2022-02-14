public class Table
{
    // Table attributes.
    private int row;
    private int col;
    private int length;  // Length for border.

    /* Public Methods. */
    
    // Empty constructor for table, use 0 as default value.
    public Table()
    {
        this.row = 0; this.col = 0;
        this.length = 0;
    }

    // Constructor with table's row and column as parameter. 
    public Table(int row, int col)
    {
        this.row = row;
        this.col = col;
        this.length = 0;
    }

    // Set table attribute (use "row" or "col" respectively).
    public void setAttr(String choice, int argsAttr)
    {
        if(choice.equals("row"))
        {
            this.row = argsAttr;
        }
        else if(choice.equals("col"))
        {
            this.col = argsAttr;
        }
    }

    // Get table attribute (use "row" or "col" respectively).
    public int getAttr(String choice)
    {
        if(choice.equals("row"))
        {
            return this.row;
        }
        else if(choice.equals("col"))
        {
            return this.col;
        }

        // Avoid non-void function warnings and wrong arguments.
        return 0;
    }

    // Create and print table (object "Team" as data output).
    public void createTable(int n, Team objTeam[], int length[])
    {
        int i, j, k,
            mode = 0;  // Used while printing list player.
        
        // Calculate border length and print upper border.
        calculateLength(4, length);
        createBorder();

        // Print all team data ...
        for(i = 0; i < n; i++)
        {
            // ... and print all players on that team.
            for(j = 0; j < objTeam[i].getPlayerTotal(); j++)
            {
                // If data hasn't printed at all, print the data's common attributes.
                if(mode == 0)
                {
                    // Name.
                    System.out.print("| " + objTeam[i].getName());
                    for(k = 0; k < (length[0] - objTeam[i].getName().length()); k++)
                    {
                        System.out.print(" ");
                    }

                    // Country.
                    System.out.print(" | " + objTeam[i].getCountry());
                    for(k = 0; k < (length[1] - objTeam[i].getCountry().length()); k++)
                    {
                        System.out.print(" ");
                    }

                    // Year founded.
                    System.out.print(" | " + objTeam[i].getYear());
                    for(k = 0; k < (length[2] - objTeam[i].getYearLen()); k++)
                    {
                        System.out.print(" ");
                    }

                    // Set mode, so those common attributes won't printed twice.
                    mode = 1;
                }
                // If common attributes has been printed, just print space in each data.
                else
                {
                    // Name.
                    System.out.print("| ");
                    for(k = 0; k < length[0]; k++)
                    {
                        System.out.print(" ");
                    }

                    // Country.
                    System.out.print(" | ");
                    for(k = 0; k < length[1]; k++)
                    {
                        System.out.print(" ");
                    }

                    // Year founded.
                    System.out.print(" | ");
                    for(k = 0; k < length[2]; k++)
                    {
                        System.out.print(" ");
                    }
                }

                // Print current player with index based on iteration.
                System.out.print(" | " + objTeam[i].getCurrentPlayer(j));
                for(k = 0; k < (length[3] - objTeam[i].getCurrentPlayer(j).length()); k++)
                {
                    System.out.print(" ");
                }

                System.out.println(" |");
            }

            // Create middle and lower border and set back mode to 0.
            createBorder();
            mode = 0;
        }
        
    }

    /* Private Methods. */

    // Calculate length for table (only used on createTable).
    private void calculateLength(int n, int length[])
    {
        int i;
        for(i = 0; i < n; i++)
        {
            this.length += length[i];
        }
    }

    // Print horizontal border (only used on createTable).
    private void createBorder()
    {
        int i;
        for(i = 0; i < (length + 13); i++)
        {
            System.out.print("-");
        }

        System.out.print("\n");
    }
}