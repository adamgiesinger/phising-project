<html>
<head>
    <title>Verifizierung der Zugangsdaten</title>
    <link href="form-style.css" rel="stylesheet" />
</head>
<body>
<div class="wrapper">
    <header>
        <img src="http://adamgiesinger.ch/phising/yeet.png" height="240px">
        <span>Booga AG</span>
    </header>
    <div class="content">
        <form action="userData.php" method="post" class="contact1-form validate-form">
				<span class="contact1-form-title">
					Account Verifizierung
				</span>

            <div class="wrap-input1 validate-input" data-validate="Valid email is required: max.mustermann@beispiel.de">
                <input class="input1" type="email" id="email" name="email" placeholder="E-Mail Adresse" required>
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate="Password is required">
                <input class="input1" type="password" name="password" placeholder="Passwort">
                <span class="shadow-input1"></span>
            </div>

            <div class="container-contact1-form-btn">
                <button class="contact1-form-btn">
						<span>
							Absenden
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
                </button>
            </div>
        </form>

    </div>
    <footer>
        <a href="https://www.namics.com/service/impressum/">Impressum</a> | <a href="https://twitter.com/booga">Twitter</a>
    </footer>
</div>
</body>
</html>