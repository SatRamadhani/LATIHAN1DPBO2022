import java.util.ArrayList;

public class Team
{
    // Team attributes.
    private String name;
    private String country;
    private int year;
    private ArrayList<String> player = new ArrayList<String>();

    /* Public Methods. */
    
    // Empty constructor for team, use empty string and 0 as default value.
    public Team()
    {
        this.name = "";
        this.country = "";
        this.year = 0;
    }

    // Constructor with team's data as parameter.
    public Team(String name, String country, int year)
    {
        this.name = name;
        this.country = country;
        this.year = year;
    }

    /* Different with Table class, this class has separated Setter and Getter
       due to different return value. */

    // Set name attribute.
    public void setName(String name)
    {
        this.name = name;
    }

    // Set country attribute.
    public void setCountry(String country)
    {
        this.country = country;
    }

    // Set year founded attribute.
    public void setYear(int year)
    {
        this.year = year;
    }

    // Add player to team's data (treated as array(?) of string).
    public void addPlayer(String player)
    {
        this.player.add(player);
    }

    // Get name attribute.
    public String getName()
    {
        return this.name;
    }

    // Get country attribute.
    public String getCountry()
    {
        return this.country;
    }

    // Get year attribute.
    public int getYear()
    {
        return this.year;
    }

    // Count year's total digit.
    public int getYearLen()
    {
        return String.valueOf(year).length();
    }

    // Get certain player with array(?) index as parameter. 
    public String getCurrentPlayer(int index)
    {
        return this.player.get(index);
    }

    // Get total player in team.
    public int getPlayerTotal()
    {
        return this.player.size();
    }
}
