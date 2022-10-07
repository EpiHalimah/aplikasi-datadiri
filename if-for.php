<?php
      //materi percabagan(IF ELSE)
      $nilai = 78;
      echo "nilai kamu adalah $nilai <br>";
      echo "maka setatus kamu =";
      if ($nilai >= 78 ){
        echo "lulus beneran";
      }else if ($nilai == 78) {
          echo "lulus KKM ";
      }else {
        echo "tidak lulus";
      }
      echo "<hr>";


      $nilai_web = 79;
      $nilai_pbo = 82;
      echo "nilai web kamu = $nilai_web <br>";
      echo "nilai pbo kamu = $nilai_pbo <br>";
      echo "kelulusan  kamu =";

      if ($nilai_web >= 80 AND $nilai_pbo >= 80 ){
        echo "lulus 2 mapel produktif";

      }else if ($nilai_web >= 80 OR $nilai_pbo >= 80 ){
        
        if ($nilai_web >= 80){
            echo "lulus mapel web";
        }
        if ($nilai_pbo >= 80){
            echo "lulus mapel pbo";
        }
         }else {
        echo "tidak lulus mapel produktif";
      }
      echo "<hr>";
      //materi perulagan (while, do while ,for)
      $i = 1;
      while ( $i <= 5){
        echo "hello word ! ke - $i <br>";
        $i++; //assigment +1

      }
      echo "<hr>";
      $j = 1;
      do{
        echo $j. "<br>";
        $j++;
      }while ($j <= 5);
        echo "<hr>";

        $k = 1;
        for ($k = 1; $k <= 10; $k++){
            echo $k."<br>";
        }
        echo "<hr>";
          for ($x = 9; $x >= 1; $x--){
            for ($y = 1; $y <= $x; $y++)
            echo "*";{
                echo "<br>";
            }
          }

          echo "<hr>";
            for ($x = 9; $x >= 1; $x--){
              for ($y = 1; $y <= $x; $y++)
              echo "$y";{
                  echo "<br>";
              }
            }
            echo "<hr>";
            for ($z = 1; $z <= 10; $z++) {
                if ($z %2 ==0){
                    echo $z . "- genap <br>";

                }else {
                    echo $z . "-ganjil <br> ";


                }
            }
   
?>