/* Saya [Muhammad Satria Ramadhani - 2005128] mengerjakan evaluasi [Latihan
Praktikum 01] dalam mata kuliah [Desain dan Pemrograman Berorientasi Objek]
untuk keberkahan-Nya, maka saya tidak melakukan kecurangan seperti yang
telah dispesifikasikan. Aamiin. */

#include "header.hh"

int main()
{
    // Declare variables.
    int i, j, n,                   // Iteration and total team.
        intInput,                  // Input for integer.
        length[4] = {0, 0, 0, 0};  // Column's length (hardcoded as 4).
    string strInput;               // Input for string.

    // Total team's input.
    cout << "Masukkan jumlah tim : ";
    cin >> n;

    // Declare object.
    Team objTeam[n];       // Array of object due to multiple teams.
    Table objTable(n, 0);

    // Input for each team.
    for(i = 0; i < n; i++)
    {
        /* After input, max length of that attribute's column checked and set
           if it is greater than the current length. */

        cout << '\n' << "Masukkan tim ke-" << (i + 1) << "!\n";
        
        // Name.
        cout << "Nama Tim       : ";
        getline(cin >> ws, strInput);
        objTeam[i].setName(strInput);
        if(strInput.length() > length[0])
        {
            length[0] = strInput.length();
        }

        // Country.
        cout << "Asal Negara    : ";
        getline(cin >> ws, strInput);
        objTeam[i].setCountry(strInput);
        if(strInput.length() > length[1])
        {
            length[1] = strInput.length();
        }

        // Year founded.
        cout << "Tahun Berdiri  : ";
        cin >> intInput;
        objTeam[i].setYear(intInput);
        if(objTeam[i].getYearLen() > length[2])
        {
            length[2] = objTeam[i].getYearLen();
        }

        // Total player.
        cout << "Jumlah Anggota : ";
        cin >> intInput;

        // List player.
        cout << "Nama Anggota   :\n";
        for(j = 0; j < intInput; j++)
        {
            cout << (j + 1) << ". ";
            getline(cin >> ws, strInput);
            objTeam[i].addPlayer(strInput);
            if(strInput.length() > length[3])
            {
                length[3] = strInput.length();
            }
        }
    }

    // Create and print table.
    objTable.createTable(n, objTeam, length);

    return 0;
}