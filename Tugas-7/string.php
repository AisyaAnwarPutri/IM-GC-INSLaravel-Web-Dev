<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>
    <?php   
        echo "<h3> Soal No 1</h3>";
        /* 
            SOAL NO 1
            Tunjukan dengan menggunakan echo berapa panjang dari string yang diberikan berikut! Tunjukkan juga jumlah kata di dalam kalimat tersebut! 
        */

        echo "Kata Pertama : Hello PHP! <br>";
        $first_sentence = "Hello PHP!";
        echo "Panjang String ".strlen($first_sentence)."<br>"; 
        echo "jumlah kata ".str_word_count($first_sentence)."<br><br>";

        echo "Kata Kedua : Wisuda Tahun Ini Aamiin <br>";
        $second_sentence = "Wisuda Tahun Ini Aamiin"; // Panjang string: 23,  jumlah kata: 4        
        echo "Panjang String ".strlen($second_sentence)."<br>"; 
        echo "jumlah kata ".str_word_count($second_sentence)."<br>";
        
        echo "<h3> Soal No 2</h3>";
        /* 
            SOAL NO 2
            Mengambil kata pada string dan karakter-karakter yang ada di dalamnya. 
            
            
        */
        $string2 = "Wisuda Tahun Ini";
        
        echo "<label>String: </label> \"$string2\" <br>";
        echo "Kata pertama: " . substr($string2, 0, 6) . "<br>" ; 
        // Lanjutkan di bawah ini
        echo "Kata kedua: " . substr($string2, 6, 7) . "<br>" ;
        echo "Kata Ketiga: " . substr($string2, 12, 14) . "<br>" ;


        echo "<h3> Soal No 3 </h3>";
        /*
            SOAL NO 3
            Mengubah karakter atau kata yang ada di dalam sebuah string.
        */
        $string3 = "PHP is old but sexy!";
        echo "String: \"$string3\" "; 
        // OUTPUT : "PHP is old but awesome"
        $output = str_replace("sexy!", "awesome", $string3);
        echo "<br> OUTPUT : \"$output\" ";

    ?>
</body>
</html>