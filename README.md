# Einsteiger Kurs Programmierung in PHP

## Installation
1. Download

   PHP ist eine Skriptsprache die vom PHP-Interpreter ausgeführt werden kann. Die Windowsversion kann unter https://windows.php.net/download#php-8.4 heruntergeladen werden.

1. Installation PHP

   Die Zip-Datei muss ausgepackt werden, bspw. unter `C:\opt\php`. Anschließend sollte eine Datei `C:\opt\php\php.exe` existieren.

1. Path Variable anpassen

   Suche im Startmenü nach `Umgebungsvariablen für dieses Konto bearbeiten`. Bearbeite die `Path` Variable, und füge einen Eintrag `C:\opt\php` hinzu.

1. Test

    Öffne powershell und gib `php /v` ein. Es sollte eine Ausgabe ähnlich wie die folgende erscheinen.
    ```powershell
    PHP 8.4.2 (cli) (built: Dec 17 2024 17:28:28) (NTS Visual C++ 2022 x64)
    Copyright (c) The PHP Group
    Zend Engine v4.4.2, Copyright (c) Zend Technologies
    ```

1. Start des PHP Servers

    Um den Kurs zu beginnen navigiere in das Kursverzeichnis und starte den PHP Server mit `php.exe -S localhost:8080`. Anschließend kannst du den Kurs im Browser aufrufen: http://localhost:8080.


##