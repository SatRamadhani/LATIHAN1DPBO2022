class Table:

    # Table attributes.
    __row = 0
    __col = 0
    __length = 0  # Length for border.

    # Public Methods.

    # Empty constructor for table, use 0 as default value.
    def __init__(self):
        self.__row = 0
        self.__col = 0
        self.__length = 0
    
    # Constructor with table's row and column as parameter.
    def __init__(self, row, col):
        self.__row = row
        self.__col = col
        self.__length = 0
    
    # Set table attribute (use "row" or "col" respectively).
    def setAttr(self, choice, argsAttr):
        if(choice == "row"):
            self.__row = argsAttr
        elif(choice == "col"):
            self.__col = argsAttr
    
    # Get table attribute (use "row" or "col" respectively).
    def getAttr(self, choice):
        if(choice == "row"):
            return self.__row
        elif(choice == "col"):
            return self.__col
        
        # Avoid non-void function warnings and wrong arguments.
        return 0
    
    # Create and print table (object "Team" as data output).
    def createTable(self, n, objTeam, length):
        mode = 0  #Used while printing list player.

        # Calculate border length and print upper border.
        self.__calculateLength(4, length)
        self.__createBorder()

        # Print all team data ...
        for i in range(n):
            # ... and print all players on that team.
            for j in range(objTeam[i].getPlayerTotal()):
                # If data hasn't printed at all, print the data's common attributes.
                if(mode == 0):

                    # Name.
                    print("| " + objTeam[i].getName(), end = "")
                    print(" " * (length[0] - len(objTeam[i].getName())), end = "")
                    
                    # Country.
                    print(" | " + objTeam[i].getCountry(), end = "")
                    print(" " * (length[1] - len(objTeam[i].getCountry())), end = "")
                    
                    # Year founded.
                    print(" | " + objTeam[i].getYear(), end = "")
                    print(" " * (length[2] - objTeam[i].getYearLen()), end = "")
                    
                    # Set mode, so those common attributes won't printed twice.
                    mode = 1
                
                # If common attributes has been printed, just print space in each data.
                else:

                    # Name.
                    print("| ", end = "")
                    print(" " * length[0], end = "")
                    
                    # Length.
                    print(" | ", end = "")
                    print(" " * length[1], end = "")
                    
                    # Year founded.
                    print(" | ", end = "")
                    print(" " * length[2], end = "")
            
                # Print current player with index based on iteration.
                print(" | " + objTeam[i].getCurrentPlayer(j), end = "")
                print(" " * (length[3] - len(objTeam[i].getCurrentPlayer(j))), end = "")
                
                print(" |")
            
            # Create middle and lower border and set back mode to 0.
            self.__createBorder()
            mode = 0

    # Private Methods.

    # Calculate length for table (only used on createTable).
    def __calculateLength(self, n, length):
        for i in range(n):
            self.__length += length[i]

    # Print horizontal border (only used on createTable).
    def __createBorder(self):
        for i in range(self.__length + 13):
            print("-", end = "")
        
        print("")


