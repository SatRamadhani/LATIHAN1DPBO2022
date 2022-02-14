<?php

    /* Saya [Muhammad Satria Ramadhani - 2005128] mengerjakan evaluasi [Latihan
    Praktikum 01] dalam mata kuliah [Desain dan Pemrograman Berorientasi Objek]
    untuk keberkahan-Nya, maka saya tidak melakukan kecurangan seperti yang
    telah dispesifikasikan. Aamiin. */

    // Import class file.
    include "Team.php";
    include "Output.php";

    // Declare variable and objects.
    $length = array(0, 0, 0, 0);  // Column's length (hardcoded as 4).
    $objTeam = array();           // Array of object due to multiple teams.
    $objTable = new Table(2, 0);

    /* Hardcode due to lack of pure PHP input method. */

    // First team.
    $team1 = new Team();
    $team1->setName("Running Eight");
    $team1->setCountry("Indonesia");
    $team1->setYear(2019);
    $team1->addPlayer("Aldian");
    $team1->addPlayer("Binsar");
    $team1->addPlayer("Carlos");
    $team1->addPlayer("Cica");
    $team1->addPlayer("Ndee");
    $team1->addPlayer("Raka");
    $team1->addPlayer("Rivalka");
    $team1->addPlayer("Techi");

    // Second team, with main usage of constructor.
    $team2 = new Team();
    $team2->setName("Bonds of Three");
    $team2->setCountry("Indonesia");
    $team2->setYear(2021);
    $team2->addPlayer("Dicki");
    $team2->addPlayer("Hanliszt");
    $team2->addPlayer("Knight");

    // Merge team as array.
    array_push($objTeam, $team1);
    array_push($objTeam, $team2);

    // Table maximum length hardcode.
    $length[0] = 14;
    $length[1] = 9;
    $length[2] = 4;
    $length[3] = 8;
    
    // Create and print table.
    $objTable->createTable(2, $objTeam, $length);
?>