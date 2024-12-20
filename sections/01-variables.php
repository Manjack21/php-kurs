<h2>Variablen</h2>

<p>
    PHP Skripte werden zwischen &lt;?php und ?&gt; geschrieben. 
    Lässt man diese weg wird das PHP Skript als Text auf der Webseite ausgegeben.
</p>
<p>
    <strong>Übung</strong><br>
    Öffne die Datei <i>"sections/01-variables.php"</i> und sorge dafür dass das 
    folgende PHP Skript ausgeführt wird.
    <div class="w3-container w3-border w3-border-grey w3-round">
    <!-- Start des Übungsbereichs Ändere die folgenden Zeile -->
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