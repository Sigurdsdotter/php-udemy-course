<?php

// Denna kod för att läsa fwrite, förs över till example.txt. Man kan också skriva i example.txt och det registreras när man öppnar denna reading_files.php
// Ändra 'w' till 'r' och fwrite till fread. Spara bites i en variabel. 

    $file = "example.txt";

    if($handle = fopen($file, 'r')) {

    //echo $content = fread($handle, 10);               // Varje bite motsvarar en karaktär. I love PHP är 10 bite.
    echo $content = fread($handle, filesize($file));    // Denna built in function läser hela filen oavsett antal bites.

    fclose($handle); 
     
    } else {

    echo "The application was not able to write on the file";    

    }


    // HUR MAN RADERAR FILER!
    // Jag hade en delete.php fil testade med.

    unlink("delete.php");

               







/* Om det uppstår problem.. kan bero på att Apache inte har tillåtelse att skriva.
Ge Apache tillåtelse: Googla 'give apache permission to write php' / https://stackoverflow.com/questions/22062266/how-to-give-apache-permission-to-write-to-home-directory
Hitta denna text, bör vara högt på sidan i stackoverflow: Give 0777 permission to file itself.
*/
// Eller.. ändra fil tillståndet till eget användarnamn. Om Mac user name är "mendocino", ändra tillståndet till: chown -R mendocino:staff /sites
// Hur instruktören löst det: Gå till mappen demo i datorn, högerklicka och se info. Se Sharing & Permissions, ge alla tillåtelse read and write. OBS! Gör det inte om jobbar på kontor, bara om jobbar privat egenföretagare t ex!


?>