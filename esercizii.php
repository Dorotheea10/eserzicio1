<?php
// Impostare il fuso orario
date_default_timezone_set('Europe/Rome');

// Ottenere la data corrente
$oggi = date('d/m/Y');

// Stampare la data
echo "La data di oggi è: $oggi";
?>



<?php
// Array delle squadre di Serie A e delle loro formazioni
$squadre = array(
    "Juventus" => array("Portiere" => "Buffon", "Difensore" => "Chiellini", "Centrocampista" => "Arthur", "Attaccante" => "Ronaldo"),
    "Inter" => array("Portiere" => "Handanovic", "Difensore" => "De Vrij", "Centrocampista" => "Barella", "Attaccante" => "Lukaku"),
    "Milan" => array("Portiere" => "Donnarumma", "Difensore" => "Romagnoli", "Centrocampista" => "Kessie", "Attaccante" => "Ibrahimovic"),
    // Aggiungi altre squadre e formazioni secondo necessità
);

// Stampare i dati utilizzando i cicli
foreach ($squadre as $nome_squadra => $formazione) {
    echo "Squadra: $nome_squadra <br>";
    echo "Formazione: <br>";
    foreach ($formazione as $ruolo => $giocatore) {
        echo "$ruolo: $giocatore <br>";
    }
    echo "<br>";
}
?>




<?php
// Array delle partite di Serie A e delle relative squadre con le formazioni
$partite = array(
    array(
        "squadra_casa" => "Juventus",
        "formazione_casa" => array("Portiere" => "Buffon", "Difensore" => "Chiellini", "Centrocampista" => "Arthur", "Attaccante" => "Ronaldo"),
        "squadra_ospite" => "Milan",
        "formazione_ospite" => array("Portiere" => "Donnarumma", "Difensore" => "Romagnoli", "Centrocampista" => "Kessie", "Attaccante" => "Ibrahimovic")
    ),
    array(
        "squadra_casa" => "Inter",
        "formazione_casa" => array("Portiere" => "Handanovic", "Difensore" => "De Vrij", "Centrocampista" => "Barella", "Attaccante" => "Lukaku"),
        "squadra_ospite" => "Roma",
        "formazione_ospite" => array("Portiere" => "Mirante", "Difensore" => "Mancini", "Centrocampista" => "Veretout", "Attaccante" => "Mkhitaryan")
    ),
    // Aggiungi altre partite con le rispettive squadre e formazioni secondo necessità
);

// Stampare i dati utilizzando i cicli
foreach ($partite as $partita) {
    echo "Partita: " . $partita["squadra_casa"] . " vs " . $partita["squadra_ospite"] . "<br>";
    echo "Formazione " . $partita["squadra_casa"] . ": <br>";
    foreach ($partita["formazione_casa"] as $ruolo => $giocatore) {
        echo "$ruolo: $giocatore <br>";
    }
    echo "<br>";
    echo "Formazione " . $partita["squadra_ospite"] . ": <br>";
    foreach ($partita["formazione_ospite"] as $ruolo => $giocatore) {
        echo "$ruolo: $giocatore <br>";
    }
    echo "<br>";
}
?>

