/* Saya [Muhammad Satria Ramadhani - 2005128] mengerjakan evaluasi [Latihan
Praktikum 01] dalam mata kuliah [Desain dan Pemrograman Berorientasi Objek]
untuk keberkahan-Nya, maka saya tidak melakukan kecurangan seperti yang
telah dispesifikasikan. Aamiin. */

import java.util.*;

public class Main
{
    public static void main(String[] args)
    {
        // Declare variables.
        int i, j, n = 0,            // Iteration and total team.
            intInput = 0;           // Input for integer.
        int[] length = new int[4];  // Column's length (hardcoded as 4).
        String strInput;            // Input for string.
        
        // Scanner / input object.
        java.util.Scanner sc = new Scanner(System.in);
        
        // Initialize length.
        for(i = 0; i < 4; i++)
        {
            length[i] = 0;
        }

        // Total team's input.
        System.out.print("Masukkan jumlah tim : ");
        try 
        {
            n = sc.nextInt();
        } catch (Exception e) {}

        // Declare object.
        Team[] objTeam = new Team[n];      // Array of object due to multiple teams.
        Table objTable = new Table(n, 0);
        
        // Input for each team.
        sc.nextLine();
        for(i = 0; i < n; i++)
        {
            /* After input, max length of that attribute's column checked and set
               if it is greater than the current length. */
            
            // Initialize each team object.
            objTeam[i] = new Team();

            System.out.println("");
            System.out.println("Masukkan tim ke-" + (i + 1) + "!");

            // Name.
            System.out.print("Nama Tim       : ");
            strInput = sc.nextLine();
            objTeam[i].setName(strInput);
            if(strInput.length() > length[0])
            {
                length[0] = strInput.length();
            }

            // Country.
            System.out.print("Asal Negara    : ");
            strInput = sc.nextLine();
            objTeam[i].setCountry(strInput);
            if(strInput.length() > length[1])
            {
                length[1] = strInput.length();
            }

            // Year founded.
            System.out.print("Tahun Berdiri  : ");
            try 
            {
                intInput = sc.nextInt();
            } catch (Exception e) {}
            objTeam[i].setYear(intInput);
            if(objTeam[i].getYearLen() > length[2])
            {
                length[2] = objTeam[i].getYearLen();
            }

            // Total player.
            System.out.print("Jumlah Anggota : ");
            try 
            {
                intInput = sc.nextInt();
            } catch (Exception e) {}

            // List player.
            sc.nextLine();
            System.out.println("Nama Anggota   :");
            for(j = 0; j < intInput; j++)
            {
                System.out.print((j + 1) + ". ");
                strInput = sc.nextLine();
                objTeam[i].addPlayer(strInput);
                if(strInput.length() > length[3])
                {
                    length[3] = strInput.length();
                }
            }
        }
        
        // Create and print table.
        objTable.createTable(n, objTeam, length);
        sc.close();
    }
}
