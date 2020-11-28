
<!DOCTYPE html>
<html>
		<head>
			<meta name="viewport" content="width=device-width, initial-scale=1">
		</head>

	<body>
	
	
	<h2 style="font-size: 1.8em;
	color: #27318b;">Aplikacija e-logos</h2>

	<iframe style="float: left ; padding: ;
	margin: 0 1em 0 0" width="600" height="360" src="https://www.youtube.com/embed/EcxBrTvLbBM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

	<p class="about">Uz sve veće opterećenje logopeda, u smislu velikoj broja narudžbi za postupke logopedske procjene i terapije, i nastojanje da se udovolji što većem broju zahtjeva za istima (zbog generalno preopterećenog sustava zdravstvene i socijalne skrbi, a premalog broja logopeda na takvim radnim mjestima), ideja je pridonijeti rasterećenju administrativnog dijela posla logopeda koji uključuje postupke poput unosa klijenata, upisa zaposlenih te vođenja evidencije o istima, kontakta sa klijentima i sl. S ciljem spomenutog rasterećenja u (barem jednoj) domeni posla logopeda, povećanja učinkovitosti i racionalnijeg upravljanja vremenom, razvila se aplikacija  <a href="#">e-logos</a></p>

	<p class="about">Aplikacija <strong>E-LOGOS</strong> trenutno nudi mogućnost login-a vlasnika-admina, zaposlenika (logopedi ,administrativni djelatnici, čistači i ostali). Vlasnik, odnosno admin je tip korisnika 1, i kao takav, jedino on može vidjeti dio za registraciju novih klijenata te administratorske (upravljače ploče) gdje može uređivati podatke o zaposlenicima i klijentima te iste brisati. Zaposlenici mogu vidjeti sve ostale stavke u meni-u osim adminskih. </p>

	<p class="about">Aplikacija ima mogučnost unosa <a href="http://localhost/e-logos/index.php?menu=3" target="_blank">kontakt</a> obrasca koji se automatski šalje na email vlasnika(PHPMailer preko gmail smtp-a).</p>

	<h3  class="h3about">ADMIN</h3>
	<p>Admin može <a href="http://localhost/e-logos/index.php?menu=4" target="_blank">registrirati</a> nove korisnike kao i izvršiti <a href="http://localhost/e-logos/index.php?menu=5" target="_blank">registraciju klijenata.</a><br>
	Admin također može ući u upravljačku ploču te tamo mjenjati podatke o korisniku i klijentu te može vidjeti njegove podatke sa slikom klikom na ikonicu čovjeka</p>
	
	<h3 class="h3about">Wheater API</h3>
	<p class="about"> U aplikaciju je pomoću API za vrijeme sa <a href="https://openweathermap.org/api" target="_blank"> stranice</a> i pomoću JSON-a umetnut dio gdje se može pretraživati vrijeme u cijelom svijetu unosom grada u za to predviđen input.</p>

	<h3 class="h3about">Chuck Norris API</h3>
	<p>U aplikaciju je pomoću API-ja sa <a href="https://api.chucknorris.io" target="_blank">stranice </a> i pomoću JSON-a umetnut dio za zabavu gdje se pritiskom na sliku Chucka mjenjaju vicevi o Chuck Norrisu.</p>

	<h3 class="h3about">Mogućnosti aplikacije u budućnosti</h3>
	<p class="about">U aplikaciju bi se nekoj bližoj budućnosti htjele napraviti još neke stvari poput:<br></p>

		<ul >
			
			<li>Izrada tablice narudžbe koja bi se povezala sa tablicom klijenti te bi se moglo vidjeti kada je neki klijent naručen</li>
			<li>Izrada dijela koda koji bi slao email korisniku na dan kada je naručen par sati prije termina kao obavijest o narudžbi</li>
			<li>Proširiti prava admina da može uređivati sve dijelove o korisnicima aplikacije i klijentima, mijenjati šifre i ostalo</li>
			<li>Napraviti upravljačku ploču za zaposlenike da mogu koristiti aplikaciju tj. samo dijelove koji se tiču njih, npr.logoped zaposlenik može unositi klijente  no ne može ih brisat već samo vlasnik/admin može. Računovodstvo da ima unos i računanje raznih knjigovodstvenih stvari koje se tiču tvrtke (plače, knjigovodstvo...) Čistači slati zahtjeve za robom koja im treba itd...</li>
			<li>Izrada API-a ukoliko postoji za logopedske igre koje bi pomagala tijekom terapije, ako ne razviti svoje</li>
			<li>Omogućiti chat između zaposlenika unutar aplikacije</li>

		</ul>	

	<p class="about">Za daljnji razvo,j aplikacija bi se razvijala u frameworku Laravel povezana sa phpmyadminom kao podrška za MySQL bazu i apache server.</p>

	</body>
</html>

