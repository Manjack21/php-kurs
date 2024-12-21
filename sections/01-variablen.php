<a class="w3-btn w3-round w3-border" href="index.php?section=02">Weiter: Operatoren</a>

<h2>Variablen</h2>

<p>
    PHP Skripte werden zwischen <code>&lt;?php</code> und <code>?&gt;</code> geschrieben. 
    Lässt man diese weg wird das PHP Skript als Text auf der Webseite ausgegeben.
</p>
<p>
    <strong>Übung</strong><br>
    Öffne die Datei <i><?php echo($fileName); ?></i>, suche nach "Übung 01-01" 
    und ändere den Übungsbereich so dass das folgende PHP Skript ausgeführt wird.
    <div class="w3-container w3-border w3-border-grey w3-round">
    <!-- Übung 01-01 
    Start des Übungsbereichs: Ändere die folgenden Zeile -->
    echo("\x47\x75\x74 \x67\x65\x6D\x61\x63\x68\x74!");
    <!-- Ende des Übungsbereichs -->
    </div>
</p>

<br>

<p>Variablen in PHP werden mit einem $ Zeichen gefolgt von einem Variablennamen. 
    Es muss kein Typ angegeben werden. Der Typ einer Variable kann sogar jederzeit 
    geändert werden</p>
<strong>Beispiele:</strong>
<div class="w3-container w3-border w3-border-grey w3-round">
    <pre><code class="language-php">&lt;?php
    // Eine Text-Variable (Typ String)
    $text = "Hallo, Welt!";
    
    // Eine ganzzahlige Variable (Typ Integer)
    $zahl = 15;
    
    // Eine Wahrheitswert Variable  (Typ Boolean)
    $bool = true;

    // Eine Gleitkommazahl Variable  (Typ Float)
    $komma = 7.6;

    // Die Kommazahl wird jetzt zu einer Text Variable  (jetzt Typ String)
    $komma = "Ein Text";
?&gt;</code></pre>
</div>


<h3>Arrays</h3>
<p> Mehrere Variablenwerte können in einem Array gespeichert werden.</p>
<strong>Beispiele:</strong>
<div class="w3-container w3-border w3-border-grey w3-round">
<pre><code class="language-php">&lt;?php
    // Erstellt ein Array mit 5 Zahlen
    $feld = [1,2,3,4,5];
    // Die Elemente in einem Array werden mit 0 beginnend nummeriert
    // $feld[0] == 1
    // $feld[1] == 2
    // $feld[2] == 3
    // ...

    // Fügt eine weitere Zahl zum Array hinzu
    $feld[] = 6;

    // Ändert den Wert in Index 1 von 2 zu 5
    // hier ist $feld[1] == 2;
    $feld[1] = 5;
    // jetzt ist $feld[1] == 5;
?&gt;</code></pre>
</div>

<p>
    <strong>Übung</strong><br>
    Öffne die Datei <i><?php echo($fileName); ?></i>, suche nach "Übung 01-02".<br>
    Erstelle ein Array <code>$feld</code> mit 3 Einträgen: Index 1 enthält die Zahl 5, Index 2 enthält den Wahrheitswert false, Index 3 enthält den Text "Hallo"
    <div class="w3-container w3-border w3-border-grey w3-round">
    <?php     
    /** Übung 01-02 Start des Übungsbereichs */

    /** Ende des Übungsbereichs */
    error_reporting(E_ALL ^ E_WARNING);
    checkTask(fn() => $feld[0] === 5, "Feld 0 enthält die Zahl 5", "Index 0 ist nicht 5");
    checkTask(fn() => $feld[1] === false, "Feld 1 enthält den Wert false", "Index 1 ist nicht false");
    checkTask(fn() => $feld[2] === "Hallo", "Feld 2 enthält den Text 'Hallo'", "Index 2 ist nicht Hallo");
    error_reporting(E_ALL);
    ?>
    </div>
</p>