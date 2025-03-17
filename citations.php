<?php
$citations1 = ["Die Wahrheit wird nicht aufgedeckt – sie wird freigelassen!","Trump ist der einzige, der die geheime Agenda stoppen kann!","5G ist mehr als nur Strahlung – es ist Kontrolle!","Die Elite will, dass du im Dunkeln bleibst – aber wir bringen das Licht!","Flache Erde? Wir sind nicht die Verrückten – wir sind die, die wachen!","Zerstört die 5G-Masten – für die Freiheit, für die Wahrheit!","Wer fragt, hat bereits die Antwort: Die Erde ist flach!","Die Medien lügen – wir decken die Wahrheit auf!"];
$citations2 = ["Die Elite belügt uns – Zeit, den Schleier zu lüften!","Der Mondlandungsbetrug ist nur der Anfang – was verstecken sie noch?","Trump ist der wahre Retter – weil er uns aus der Matrix führt!","Du wirst in der Matrix leben, wenn du nicht aufwachst!","5G: Kontrolle, Überwachung, Zerstörung – wir sagen Nein!","Lass uns das System stürzen – wir sind die, die wissen, was wirklich läuft!","Die wahre Macht liegt bei uns – zusammen können wir alles aufdecken!","Wahlen manipuliert – der wahre Sieger wurde nie genannt!"];
$citations3 = ["Was ist unter der Erde? Der Eingang zur geheimen Welt!","CERN: Sie öffnen Tore, die besser geschlossen bleiben sollten!","Chemtrails – sie sprühen mehr als nur „Wolken“!","Reptiloiden unter uns – sie sind die wahre Elite!","Sie haben uns den Mond gezeigt – aber nie die Wahrheit!","Die Illuminaten sind keine Legende – sie sind die Wahrheit!","Sie haben uns den Mond gezeigt – aber nie die Wahrheit!","Die Minions existieren - und sie haben Hitler zur Macht gebracht!"];

// Es bruucht ei message_box pro Pool. De Style isch wurscht.
echo "<div id='message_box1' style='font-size: 20px; padding: 10px;'></div>";
echo "<div id='message_box2' style='font-size: 20px; padding: 10px;'></div>";
echo "<div id='message_box3' style='font-size: 20px; padding: 10px;'></div>";

echo "<script>
    let citations1 = " . json_encode($citations1) . ";
    let citations2 = " . json_encode($citations2) . ";
    let citations3 = " . json_encode($citations3) . ";

    let index = 0; // Das isch eif d Startziit vom index.

    // Da müend wider die message_box sache sii.
    function updateMessages() {
        document.getElementById('message_box1').innerText = citations1[index % citations1.length];
        document.getElementById('message_box2').innerText = citations2[index % citations2.length];
        document.getElementById('message_box3').innerText = citations3[index % citations3.length];
        
        index++; //Da wächslets zu de nächschte citation.
    }

    // Das echoed d citations.
    updateMessages();

    //Das isch de Ziitintervall
    setInterval(updateMessages, 6000);
</script>";
?>
