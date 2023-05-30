<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <h1>Berlatih Array</h1>
        
    <?php 
        echo "<h3> Soal 1 </h3>";
        /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Jongho", "Yeosang", "Seonghwa", "Joshua", "Jun", "Jeonghan"
            Adults: "Yoongi", "Hoseok",  "Seokjin", "Namjoon", "Yunho"
        */
        $kids; // Lengkapi di sini
        echo "Array Kids <br>";
        $kids = array("Jongho", "Yeosang", "Seonghwa", "Joshua", "Jun", "Jeonghan");
        print_r($kids);
        echo "<br><br>";

        echo "Array Adults <br>";
        $adults = array("Yoongi", "Hoseok",  "Seokjin", "Namjoon", "Yunho"); 
        print_r($adults);
        echo "<h3> Soal 2</h3>";
        /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
        echo "Cast Stranger Things: ";
        echo "<br>";
        $panjang_kids = count ($kids);
        echo "Total Kids: $panjang_kids" ; // Berapa panjang array kids
        echo "<br>";
        echo "<ol>"; 
        echo "<li> $kids[0] </li>";
        echo "<li> $kids[1] </li>";
        echo "<li> $kids[2] </li>";
        echo "<li> $kids[3] </li>";
        echo "<li> $kids[4] </li>";
        echo "<li> $kids[5] </li>";
        echo "</ol>";
        echo "<br>";

        $panjang_adults = count ($adults);
        echo "Total Adults: $panjang_adults" ;// Berapa panjang array adults
        echo "<br>";
        echo "<ol>";
        echo "<li> $adults[0] </li>";
        echo "<li> $adults[1] </li>";
        echo "<li> $adults[2] </li>";
        echo "<li> $adults[3] </li>";
        echo "<li> $adults[4] </li>";
        echo "</ol>";

        /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)
            
            Nama:Choi Jongho
            Umur:22
            Grup:Ateez
            Posisi:Vokal Line

            Nama:Kang Yeosang
            Umur:23
            Grup:Ateez
            Posisi:Visual Line

            Nama:Park Seonghwa
            Umur:23
            Grup:Ateez
            Posisi:Dancer Line

            Nama:Jung Yunho
            Umur:23
            Grup:Ateez
            Posisi:Dancer Line
            
        */        
        echo "<h3> Soal 3</h3>";
        $karyawan = [
            [
            "Nama" => "Choi Jongho",
            "Umur" => 22,
            "Grup" => "Ateez",
            "Posisi" => "Vokal Line",
            ],

            [
            "Nama" => "Kang Yeosang",
            "Umur" => 23,
            "Grup" => "Ateez",
            "Posisi" => "Visual Line",
            ],

            [
            "Nama" => "Park Seonghwa",
            "Umur" => 23,
            "Grup" => "Ateez",
            "Posisi" => "Dancer Line",
            ],

            [
            "Nama" => "Jung Yunho",
            "Umur" => 23,
            "Grup" => "Ateez",
            "Posisi" => "Dancer Line",
            ],
        ];

        print_r($karyawan);
        echo "<br><br>";

        for ($i=0; $i<count($karyawan[0]); $i++) {
            foreach ($karyawan[$i] as $key => $value) {
                echo $key . ":" . $value;
                echo "<br>";
            };
            echo "<br>";
        }
        
    ?>
</body>
</html>