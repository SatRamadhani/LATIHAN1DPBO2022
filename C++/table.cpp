#include "header.hh"

/* Public Methods. */

// Empty constructor for table, use 0 as default value.
Table::Table()
{
    row = 0, col = 0,
    length = 0;
}

// Constructor with table's row and column as parameter. 
Table::Table(int row, int col)
{
    this->row = row;
    this->col = col;
    length = 0;
}

// Set table attribute (use "row" or "col" respectively).
void Table::setAttr(string choice, int argsAttr)
{
    if(choice.compare("row") == 0)
    {
        row = argsAttr;
    }
    else if(choice.compare("col") == 0)
    {
        col = argsAttr;
    }
}

// Get table attribute (use "row" or "col" respectively).
int Table::getAttr(string choice)
{
    if(choice.compare("row") == 0)
    {
        return row;
    }
    else if(choice.compare("col") == 0)
    {
        return col;
    }

    // Avoid non-void function warnings and wrong arguments.
    return 0;
}

// Create and print table (object "Team" as data output).
void Table::createTable(int n, Team objTeam[], int length[])
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
            if(!mode)
            {
                // Name.
                cout << "| " << objTeam[i].getName();
                for(k = 0; k < (length[0] - objTeam[i].getName().length()); k++)
                {
                    cout << ' ';
                }

                // Country.
                cout << " | " << objTeam[i].getCountry();
                for(k = 0; k < (length[1] - objTeam[i].getCountry().length()); k++)
                {
                    cout << ' ';
                }

                // Year founded.
                cout << " | " << objTeam[i].getYear();
                for(k = 0; k < (length[2] - objTeam[i].getYearLen()); k++)
                {
                    cout << ' ';
                }

                // Set mode, so those common attributes won't printed twice.
                mode = 1;
            }
            // If common attributes has been printed, just print space in each data.
            else
            {
                // Name.
                cout << "| ";
                for(k = 0; k < length[0]; k++)
                {
                    cout << ' ';
                }
                
                // Country.
                cout << " | ";
                for(k = 0; k < length[1]; k++)
                {
                    cout << ' ';
                }

                // Year founded.
                cout << " | ";
                for(k = 0; k < length[2]; k++)
                {
                    cout << ' ';
                }
            }

            // Print current player with index based on iteration.
            cout << " | " << objTeam[i].getCurrentPlayer(j);
            for(k = 0; k < (length[3] - objTeam[i].getCurrentPlayer(j).length()); k++)
            {
                cout << ' ';
            }

            cout << " |\n";
        }

        // Create middle and lower border and set back mode to 0.
        createBorder();
        mode = 0;
    }
}

// Destructor.
Table::~Table()
{

}

/* Private Methods. */

// Calculate length for table (only used on createTable).
void Table::calculateLength(int n, int length[])
{
    int i;
    for(i = 0; i < n; i++)
    {
        this->length += length[i];
    }
}

// Print horizontal border (only used on createTable).
void Table::createBorder()
{
    int i;
    for(i = 0; i < (length + 13); i++)
    {
        cout << '-';
    }

    cout << '\n';
}