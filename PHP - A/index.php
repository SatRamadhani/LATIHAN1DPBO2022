<?php

    /* Saya [Muhammad Satria Ramadhani - 2005128] mengerjakan evaluasi [Latihan
    Praktikum 01] dalam mata kuliah [Desain dan Pemrograman Berorientasi Objek]
    untuk keberkahan-Nya, maka saya tidak melakukan kecurangan seperti yang
    telah dispesifikasikan. Aamiin. */

    // Import class file.
    include "Student.php";

    // Declare class.
    $objStudent = array();  // Array of object due to multiple teams.

    /* Input. Hardcode due to lack of pure PHP input method. */

    // First student.
    $student1 = new Student();
    $student1->setNIM(2000514);
    $student1->setName("Satechi Knight");
    $student1->setGender("Laki-laki");
    $student1->setProgram("Ilmu Komputer");
    $student1->setSemester(4);

    // Second
    $student2 = new Student();
    $student2->setNIM(2001680);
    $student2->setName("Dicki Hanliszt");
    $student2->setGender("Laki-laki");
    $student2->setProgram("Ilmu Komputer");
    $student2->setSemester(4);

    // Third student.
    $student3 = new Student();
    $student3->setNIM(2005128);
    $student3->setName("Aldian Techi Hamard");
    $student3->setGender("Laki-laki");
    $student3->setProgram("Ilmu Komputer");
    $student3->setSemester(4);

    // Fourth student.
    $student4 = new Student();
    $student4->setNIM(2199875);
    $student4->setName("Carla Anastasia Amicitia");
    $student4->setGender("Perempuan");
    $student4->setProgram("Manajemen Bisnis");
    $student4->setSemester(2);

    // Push all students to array.
    array_push($objStudent, $student1);
    array_push($objStudent, $student2);
    array_push($objStudent, $student3);
    array_push($objStudent, $student4);

    /* Output. */

    echo "=== DATA MAHASISWA ===" . "<br/>";

    for($i = 0; $i < count($objStudent); $i++)
    {
        echo "NIM : " . $objStudent[$i]->getNIM() . "<br/>";
        echo "Nama : " . $objStudent[$i]->getName() . "<br/>";
        echo "Jenis Kelamin : " . $objStudent[$i]->getGender() . "<br/>";
        echo "Program : " . $objStudent[$i]->getProgram() . "<br/>";
        echo "Semester : " . $objStudent[$i]->getSemester() . "<br/><br/>";
    }
?>