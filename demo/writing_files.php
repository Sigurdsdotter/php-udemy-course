<?php

// Denna kod gör att det som skrivs i fwrite, förs över till example.txt

    $file = "example.txt";

    if($handle = fopen($file, 'w')) {

    fwrite($handle, 'I love PHP');

    fclose($handle); 
     
    } else {

    echo "The application was not able to write on the file";    

    }

               







/* Om det uppstår problem.. kan bero på att Apache inte har tillåtelse att skriva.
Ge Apache tillåtelse: Googla 'give apache permission to write php' / https://stackoverflow.com/questions/22062266/how-to-give-apache-permission-to-write-to-home-directory
Hitta denna text, bör vara högt på sidan i stackoverflow: Give 0777 permission to file itself.
*/
// Eller.. ändra fil tillståndet till eget användarnamn. Om Mac user name är "mendocino", ändra tillståndet till: chown -R mendocino:staff /sites
// Hur instruktören löst det: Gå till mappen demo i datorn, högerklicka och se info. Se Sharing & Permissions, ge alla tillåtelse read and write. OBS! Gör det inte om jobbar på kontor, bara om jobbar privat egenföretagare t ex!


?>