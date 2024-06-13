<?php

    $file = "example.txt";

    $handle = fopen($file, 'w');       // w = writing. Denna function handlar om att öppna och skriva i en fil.

    fclose($handle);                 // behöver stänga processen, annars kommer programmet gå långsammare.

    //  Jag fick först inte fram filen under demo mappen. Fick denna kod av ChatGPT för att få veta om den existerar.
   /*
    if ($handle) {
        fclose($handle);
        echo "Filen $file har skapats.";
    } else {
        echo "Kunde inte skapa filen $file. Kontrollera behörigheter.";
    }
    */





/* Om det uppstår problem.. kan bero på att Apache inte har tillåtelse att skriva.
Ge Apache tillåtelse: Googla 'give apache permission to write php' / https://stackoverflow.com/questions/22062266/how-to-give-apache-permission-to-write-to-home-directory
Hitta denna text, bör vara högt på sidan i stackoverflow: Give 0777 permission to file itself.
*/
// Eller.. ändra fil tillståndet till eget användarnamn. Om Mac user name är "mendocino", ändra tillståndet till: chown -R mendocino:staff /sites
// Hur instruktören löst det: Gå till mappen demo i datorn, högerklicka och se info. Se Sharing & Permissions, ge alla tillåtelse read and write. OBS! Gör det inte om jobbar på kontor, bara om jobbar privat egenföretagare t ex!
?>