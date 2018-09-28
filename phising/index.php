<?php
ini_set('display_errors',1);
error_reporting(E_ALL);


$mail  = 'adam.giesinger@namics.com';
$vorname = 'Adam';
$nachname = 'Giesinger';

$subject = 'Passwortzurücksetzung';

$message = <<<nachricht
<html>
<head>
    <title>Verifizierung der Zugangsdaten</title>
    <style>
        body {
            font-family: "Open Sans", sans-serif;
        }

        .wrapper {
            border: 1px solid lightgrey;
            margin: 2% 18%;
            border-radius: 4px;
        }

        header {
            border-bottom: 1px solid lightgrey;
            padding: 1vh;
            display: flex;

        }

        header img {
            align-self: center
        }

        header span {
            font-weight: bold;
            color: #20986D;
            font-size: 14px;
            margin: calc(2vh) 0 0 1%;
        }

        .content {
            border-bottom: 1px solid lightgrey;
            padding: 1vh;
        }

        footer {
            padding: 1vh;
            font-size: 12px;
        }

    </style>
</head>
<body>
<div class="wrapper">
    <header>
        <img src="http://adamgiesinger.ch/phising/yeet.png" height="60px">
        <span>Booga AG</span>
    </header>
    <div class="content">
        <p>Guten Tag $vorname $nachname</p>
        <p>Aufgrund eines Serverausfalls vom 4. September 2018 müssen wir alle Zugangsdaten verifizieren. Klicken Sie
            <a href="http://localhost:8888/PhisingProjekt/pw-verification/">hier</a> um ihre Zugangsdaten zu bestätigen.</p>
        <p>Freundliche Grüsse</p>
        <p>Thomas Koller, CEO Booga AG</p>
    </div>
    <footer>
        <span>
            Herzlich. Vertrauen. Team. E-Business. Seit 1994. Booga.<br><br>
            Booga AG, Teufenerstrasse 28, CH-9000 St. Gallen<br>
            Telefon +41 71 123 45 67<br>
            thomas.koller@booga.com<br><br>
            <a href="http://twitter.com/booga">twitter.com/booga</a><br>
        </span>
    </footer>
</div>
</body>
</html>
nachricht;

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'To: ' . $vorname . ' ' . $nachname . ' <' . $mail . '>' . "\r\n";
$headers .= 'From: Thomas Koller <thomas.koller@booga.com>' . "\r\n";

mail($mail, $subject, $message, $headers);