class Team:

    # Team attributes.
    __name = ""
    __country = ""
    __year = 0
    __player = [""]

    # Public Methods.

    # Empty constructor for team, use empty string and 0 as default value.
    def __init__(self):
        __name = ""
        __country = ""
        __year = 0
    
    # Constructor with team's data as parameter.
    def __init(self, name, country, year):
        self.__name = name
        self.__country = country
        self.__year = year

    # Different with Table class, this class has separated Setter and Getter
    # due to different return value.

    # Set name attribute.
    def setName(self, name):
        self.__name = name
    
    # Set country attribute.
    def setCountry(self, country):
        self.__country = country
    
    # Set year attribute.
    def setYear(self, year):
        self.__year = year
    
    # Add player to team's data (treated as array of string).
    def addPlayer(self, player):
        self.__player.append(player)
    
    # Get name attribute.
    def getName(self):
        return self.__name
    
    # Get country attribute.
    def getCountry(self):
        return self.__country
    
    # Get year attribute.
    def getYear(self):
        return self.__year
    
    # Count year's total digit.
    def getYearLen(self):
        return len(str(self.__year))
    
    # Get certain player with array index as parameter. 
    def getCurrentPlayer(self, index):
        return self.__player[index]
    
    # Get total player in team.
    def getPlayerTotal(self):
        return len(self.__player)
    
