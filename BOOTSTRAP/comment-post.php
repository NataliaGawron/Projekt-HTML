<?php
   $imie=$_POST['imie'];
   $nazwisko=$_POST['email'];
   $nazwisko=$_POST['komentarz'];
   
   $openFile=fopen("C:\Users\Natalia\Desktop\Responisive-website", "a+b+c");
      $ciagZnakow=$email."\t".$imie."\n".$komentarz."\n";
      if(fwrite($openFile, $ciagZnakow))
         echo "Uda³o siê zapisaæ dane w pliku.";
      else
         "Nie udana próba zapisu danych w pliku!";
   fclose($openFile);
?>