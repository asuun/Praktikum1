<!DOCTYPE html>
<head>
<title>Praktikum 1</title>



	<link rel="stylesheet" type="text/css" href="CSS.css">
	<meta charset="utf-8"/>

	<script>
function openWin() {
    window.open("https://github.com/asuun/Praktikum1.git");
}
</script>
</head>


<body>
<h1>Esimese nädala praktikum</h1>

<a href="">
	<p><small>
		pealkiri on tehtud rohelisena CSSis</small></p>


	<em id="tekst">fotogeeniline kass</em>


	<br>
</a>



<img id="kass" src=images.jpg alt="Kass"
	 width="900" height="684"
/>




<h3><strong>
	<u>Esimese nädala praktikumi ülesanne</u>
</strong></h3>
<form>
	<input type="button" value="Githubi link" onclick="openWin()">
</form>

<ol>
	<li>Loo oma arvutis lihtne HTML lehekülg. Lisa lehele ka mõni pilt.</li>
	<li>	Laadi leht ülesse enos.itcollege.ee serverisse.</li>
	<li>Lisa lehele CSS fail ja muuda loodud lehekülg ilusamaks.</li>
	<li>Võta kasutsele PHP. Muuda HTML fail PHP failiks ning pane see kuvama serveris kasutatavat
		PHP versiooni (näiteks läbi phpversion() meetodi).</li>
	<li>Logi sisse MySQL serverisse ja loo seal üks lihtne tabel.</li>
	<li>Pane kogu oma kirjutatud kood versioonihaldusesse. (Väga oluline punkt!)</li>
	<li>Tee lehele midagi huvitavat kasutades Javascript-i. Näiteks tee kell, mis loendab, mitu sekundit
		on praktikumi lõpuni vms :)</li>
</ol>

<h3>
	<strong>
		<u>pooleli jäin</u>
	</strong>
</h3>

<ul>
	<li>Pane kogu oma kirjutatud kood versioonihaldusesse. (Väga oluline punkt!)</li>
	<li>Tee lehele midagi huvitavat kasutades Javascript-i. Näiteks tee kell, mis loendab,
		mitu sekundit on praktikumi lõpuni vms :)</li>
</ul>

<h3>
	<u>
		giti link
	</u>
</h3>
<p>
	<a href="https://github.com/asuun/v-rgurakendused">Võrgurakenduste praktikumid</a>


</p>

<h3>
	PHP versiooniks on:
</h3>
<p>
<?php
echo ' ' . phpversion();
echo phpversion('tidy');
  ?>
</p>
<p>
 <a href="http://validator.w3.org/check?uri=referer">
  <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
 </a>
</p>

</body>
