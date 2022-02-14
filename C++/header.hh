// Declare library.
#include <iostream>
#include <string>
#include <vector>

using namespace std;

// Team with four attributes : Name, Country, Year founded, and list Player. 
class Team
{
    public:
        // Constructor.
        Team();
        Team(string name, string country, int year);

        // Set Attributes.
        void setName(string name);
        void setCountry(string country);
        void setYear(int year);
        void addPlayer(string player);

        // Get Attributes.
        string getName();
        string getCountry();
        int getYear();
        int getYearLen();

        // Get Player Attributes.
        string getCurrentPlayer(int index);
        int getPlayerTotal();

        // Destructor.
        ~Team();
    
    private:
        string name, country;
        int year; 
        vector<string> player;

};

// Table as data output media.
class Table
{
    public:
        // Constructor.
        Table();
        Table(int row, int col);

        // Set & Get Attributes.
        void setAttr(string choice, int argsAttr);
        int getAttr(string choice);

        // Create table.
        void createTable(int n, Team objTeam[], int length[]);

        // Destructor.
        ~Table();

    private:
        int row, col,
            length;

        void calculateLength(int n, int length[]);
        void createBorder();
};