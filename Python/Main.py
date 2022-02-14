# Saya [Muhammad Satria Ramadhani - 2005128] mengerjakan evaluasi [Latihan
# Praktikum 01] dalam mata kuliah [Desain dan Pemrograman Berorientasi Objek]
# untuk keberkahan-Nya, maka saya tidak melakukan kecurangan seperti yang
# telah dispesifikasikan. Aamiin.

# Import class file.
from Team import Team
from Table import Table

# Declare Column's length (hardcoded as 4).
length = [0, 0, 0, 0]

# Declare input for integer and string.
intInput = 0
strInput = ""

# Total team's input.
n = int(input("Masukkan jumlah tim : "))

# Declare object.
objTeam = []            # Array of object due to multiple teams.
objTable = Table(n, 4)

# Input for each team.
for i in range (n):
    
    # After input, max length of that attribute's column checked and set
    # if it is greater than the current length.

    # Initialize each team object.
    print("")
    print("Masukkan tim ke-" + str(i + 1) + "!")
    objTeam.append(Team())

    # Name.
    strInput = str(input("Nama Tim       : "))
    objTeam[i].setName(strInput)
    if(len(strInput) > length[0]):
        length[0] = len(strInput)
    
    # Country.
    strInput = str(input("Asal Negara    : "))
    objTeam[i].setCountry(strInput)
    if(len(strInput) > length[1]):
        length[1] = len(strInput)
    
    # Year founded.
    intInput = str(input("Tahun Berdiri  : "))
    objTeam[i].setYear(intInput)
    if(objTeam[i].getYearLen() > length[2]):
        length[2] = objTeam[i].getYearLen()
    
    # Total and list player.
    intInput = int(input("Jumlah Anggota : "))
    print("Nama Anggota   :")
    for j in range (intInput):
        strInput = str(input(str(j + 1) + ". "))
        objTeam[i].addPlayer(strInput)
        if(len(strInput) > length[3]):
            length[3] = len(strInput)

# Create and print table.
objTable.createTable(n, objTeam, length)