#include "header.hh"

/* Public Methods. */

// Empty constructor for team, use empty string and 0 as default value.
Team::Team()
{
    name = "";
    country = "";
    year = 0;
};

// Constructor with team's data as parameter.
Team::Team(string name, string country, int year)
{
    this->name = name;
    this->country = country;
    this->year = year;
}

/* Different with Table class, this class has separated Setter and Getter
   due to different return value. */

// Set name attribute.
void Team::setName(string name)
{
    this->name = name;
}

// Set country attribute.
void Team::setCountry(string country)
{
    this->country = country;
}

// Set year founded attribute.
void Team::setYear(int year)
{
    this->year = year;
}

// Add player to team's data (treated as array(?) of string).
void Team::addPlayer(string player)
{
    this->player.push_back(player);
}

// Get name attribute.
string Team::getName()
{
    return name;
}

// Get country attribute.
string Team::getCountry()
{
    return country;
}

// Get year attribute.
int Team::getYear()
{
    return year;
}

// Count year's digit.
int Team::getYearLen()
{
    return to_string(year).length();
}

// Get certain player with array(?) index as parameter. 
string Team::getCurrentPlayer(int index)
{
    return player[index];
}

// Get total player in team.
int Team::getPlayerTotal()
{
    return player.size();
}

// Destructor.
Team::~Team()
{
    
}