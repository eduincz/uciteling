<?php
get_header();

$args = array( 
	'post_type' => 'workshop', 
	'posts_per_page' => -1,
	'meta_key' => 'prijmeni_autora',
	'orderby' => 'meta_value',
	'meta_type' => 'CHAR',
	'order' => 'ASC'
);
$workshops = get_posts($args);
$argsLectors = array( 
	'post_type' => 'lektor', 
	'posts_per_page' => -1,
	'meta_key' => 'prijmeni',
	'orderby' => 'meta_value',
	'meta_type' => 'CHAR',
	'order' => 'ASC'
);
$lectors = get_posts($argsLectors);
$lectorsCnt = 0;
$workshopsCnt = 0;
?>

<div class="teaser-block">
	<div class="container">
		<img src="https://www.uciteling.cz/wp/wp-content/uploads/2022/02/uciteling_logo.png" class="teaser-image" alt="" />
		<h2 class="teaser-heading">
			INSPIRACE SDÍLENÍM
		</h2>
	</div>
</div>

<!-- Modal -->
<?php foreach($workshops as $workshop){
	echo "<div class=\"modal fade\" id=\"workshopModal-$workshop->ID\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"workshopModal-$workshop->ID\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-body\">
        <h4 class=\"workshop-modal-heading\">
			".$workshop->nazev."
		</h4>
		  <p class=\"workshop-modal-author\">
			  ".$workshop->jmeno_a_prijmeni_autora." ".$workshop->prijmeni_autora."
		  </p>
		  <p class=\"workshop-modal-text\">
			  ".$workshop->popis."
		  </p>
      </div>
    </div>
  </div>
</div>";
}
?>


<!-- Modal -->
<?php foreach($lectors as $lector){
	echo "<div class=\"modal fade\" id=\"lectorModal-$lector->ID\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"lectorModal-$lector->ID\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-body\">
		  <p class=\"lector-modal-author\">
			  ".$lector->jmeno." ".$lector->prijmeni."
		  </p>
		  <p class=\"lector-modal-text\">
			  ".$lector->popis."
		  </p>
      </div>
    </div>
  </div>
</div>";
}
?>


<div class="workshops-block">
	<div class="container">
		<p class="workshops-text">
			<strong>Pilotní Učiteling proběhl v pátek 8. dubna 2022. Děkujeme všem za účast a vzájemnou inspiraci!</strong><br />
			<strong>Den workshopů</strong> zaměřených na profesní i osobní rozvoj učitelů navazující na cíle <a href="https://www.msmt.cz/uploads/Brozura_S2030_online_CZ.pdf" target="_blank" class="highlighted highlighted-link">Strategie 2030+</a>. <br />
			<strong>Sdílení</strong> jako důležitý princip podpory pozitivních změn ve vzdělávání.
		</p>
		<div class="row">
			<div class="col-md-6 text-center">
				<h2 class="workshops-small-heading">
					NAŠE VIZE:
				</h2>
				<p class="workshops-small-text">
					Rozvoj a podpora kvalitní práce učitelů
				</p>
				<img src="https://www.uciteling.cz/wp/wp-content/uploads/2022/02/znak_srdce.png" class="heart-image" alt="" />
			</div>
			<div class="col-md-6 text-center divided-left">
				<h2 class="workshops-small-heading">
					NAŠE MISE:
				</h2>
				<p class="workshops-small-text">
					 Přinášíme dobrou praxi do sboroven
				</p>
				<p class="workshops-small-text">
					Usilujeme o přímý a okamžitý dopad ověřené dobré praxe na žáky
				</p>
				<p class="workshops-small-text">
					Zapojujeme klíčové  aktéry ve vzdělávání přímo v regionu
				</p>
			</div>
		</div>
	</div>
</div>


<div class="why-block">
	<div class="container text-center">
		<h3 class="why-heading">
			CO PRO TO DĚLÁME?
		</h3>
		<p class="why-text">
			<img src="https://www.uciteling.cz/wp/wp-content/uploads/2022/02/sipky.png" class="arrow-right-small" alt="" /> realizujeme jednodenní inspirativní setkání zaměřené na rozvoj pedagogických dovedností<br /><br />
			<img src="https://www.uciteling.cz/wp/wp-content/uploads/2022/02/sipky.png" class="arrow-right-small" alt="" /> motivujeme ke sdílení, jako k základnímu principu pedagogické praxe <br /><br />
			<img src="https://www.uciteling.cz/wp/wp-content/uploads/2022/02/sipky.png" class="arrow-right-small" alt="" /> klademe důraz na aktivní zapojení učitelů <br /><br />
			<img src="https://www.uciteling.cz/wp/wp-content/uploads/2022/02/sipky.png" class="arrow-right-small" alt="" /> ukazujeme způsob, jak je ve výuce možné naplňovat cíle a opatření Strategie 2030+ se zaměřením na kvalitu pedagogické práce každého učitele
		</p>
	
	</div>
</div>

<div class="uciteling-block">
	<div class="container">
		<div class="text-center">
			<h3 class="uciteling-heading">
				UČITELING PŘINÁŠÍ <img src="https://www.uciteling.cz/wp/wp-content/uploads/2022/02/sipka_bila.png" class="arrow-right" alt="" />
			</h3><br /><br />
		</div>
			<div class="row">
				<div class="col-md-2">
					<img src="https://www.uciteling.cz/wp/wp-content/uploads/2022/02/01_ikona.png" class="uciteling-icon" alt="" />
				</div>
				<div class="col-md-10">
					<p class="uciteling-text">
						vzájemné sdílení  a inspiraci<br />
					</p>
				</div>
			</div>
		
			<div class="row">
				<div class="col-md-2">
					<img src="https://www.uciteling.cz/wp/wp-content/uploads/2022/02/02_ikona.png" class="uciteling-icon" alt="" />
				</div>
				<div class="col-md-10">
					<p class="uciteling-text">
						společnou radost a vášeň pro učitelství<br />
					</p>
				</div>
			</div>
		
			<div class="row">
				<div class="col-md-2">
					<img src="https://www.uciteling.cz/wp/wp-content/uploads/2022/02/03_ikona.png" class="uciteling-icon uciteling-icon-5" alt="" />
				</div>
				<div class="col-md-10">
					<p class="uciteling-text">
						přemýšlení o smyslu a dopadech práce učitele<br />
					</p>
				</div>
			</div>
		
			<div class="row">
				<div class="col-md-2">
					<img src="https://www.uciteling.cz/wp/wp-content/uploads/2022/02/04_ikona.png" class="uciteling-icon uciteling-smaller-icon" alt="" />
				</div>
				<div class="col-md-10">
					<p class="uciteling-text">
						tipy aplikovatelné ve výuce<br />
					</p>
				</div>
			</div>
		
			<div class="row">
				<div class="col-md-2">
					<img src="https://www.uciteling.cz/wp/wp-content/uploads/2022/02/05_ikona.png" class="uciteling-icon uciteling-smaller-icon" alt="" />
				</div>
				<div class="col-md-10">
					<p class="uciteling-text">
						hledání nových cest k podpoře učení každého žáka<br />
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-2">
					<img src="https://www.uciteling.cz/wp/wp-content/uploads/2022/02/06_ikona.png" class="uciteling-icon uciteling-smaller-icon" alt="" />
				</div>
				<div class="col-md-10">
					<p class="uciteling-text">
						bezpečné prostředí pro objevování vlastního pedagogického potenciálu<br />
					</p>
				</div>
			</div>
		
			<div class="row">
				<div class="col-md-2">
					<img src="https://www.uciteling.cz/wp/wp-content/uploads/2022/02/07_ikona.png" class="uciteling-icon uciteling-smaller-icon" alt="" />
				</div>
				<div class="col-md-10">
					<p class="uciteling-text" id="this-year">
						příklady dobré praxe spolupráce celé sborovny<br />
					</p>
				</div>	
			</div>	
	</div>
</div>

<div class="this-year-block">
	<div class="container text-center">
		<img src="https://www.uciteling.cz/wp/wp-content/uploads/2022/02/uciteling2022_logo.png" class="this-year-image" alt="" />
		<h3 class="this-year-heading">
			JAK PROJEKT FUNGUJE
		</h3>
		<p class="this-year-text">
			Učiteling je příležitostí seznámit se s pedagogikou inspirativních učitelů prostřednictvím vlastního zážitku. Přináší rady, jak získanou inspiraci zařadit do vlastní praxe a zároveň poskytuje prostor pro reflexi a sdílení osobních učitelských příběhů.<br /><br />
			CÍLE: <br />
			Snížení nerovnosti v přístupu ke kvalitnímu vzdělávání a umožnění maximálního rozvoje potenciálu dětí, žáků a studentů.<br /><br />

			<strong>KDY: 8. 4. 2022 → 8:00 – 18:00</strong> <br /><br />

			<strong>KDE: <a class="highlighted highlighted-link" href="https://www.sougastro.cz" target="_blank">SŠ podnikání a gastronomie, Praha</a></strong> <br /><br />
		</p>
		<img src="https://www.uciteling.cz/wp/wp-content/uploads/2022/02/sipky.png" class="this-year-arrow" alt="" />
		<h3 class="this-year-heading" id="login">
			KDO SE MŮŽE ZAPOJIT?
		</h3>
		<p class="this-year-text">
			Pedagogický pracovník ze základní či střední školy nebo víceletého gymnázia. Přihlášky přijímáme do  20. 3. 2022
		</p>
		<a href="https://docs.google.com/forms/d/e/1FAIpQLSc3cuWEFTJGdQbxq5ywEL917CKqBW1BeZr5UeqOPE3p63eW3g/viewform?vc=0&c=0&w=1&flr=0" target="_blank" class="login-link">Chci se přihlásit</a>
		
		<img src="https://www.uciteling.cz/wp/wp-content/uploads/2022/02/znak_srdce.png" class="this-year-heart" alt="" />
	</div>
</div>

<div class="program-block">
	<div class="container">
		<div class="text-center">
			<h3 class="program-heading">
				PROGRAM
			</h3>	
		</div>
		<div class="row">
			<div class="col-md-3">
				<p class="red-block left-block">
					7:45 – 8:30
				</p>
			</div>
			<div class="col-md-9">
				<p class="red-block">
					Registrace účastníků + snídaně
				</p>
			</div>
			<div class="col-md-3">
				<p class="blue-block left-block">
					8:30 – 9:00
				</p>
			</div>
			<div class="col-md-9">
				<p class="blue-block">
					Zahájení, představení projektu Učiteling
				</p>
			</div>
			<div class="col-md-3">
				<p class="blue-block left-block">
					9:00 – 10:30
				</p>
			</div>
			<div class="col-md-9">
				<p class="blue-block">
					První blok workshopů:<br/>
					VÁCLAV FIALA - Zachraň racka!<br/>
					BARBORA HEŘMANOVÁ - Individualizace v Čj<br/>
					MARKÉTA VOKURKOVÁ - Podle nosa poznáš kosa<br/>
					ŠTĚPÁNKA BAIERLOVÁ - Začínáme s robotikou<br/>
				</p>
			</div>
			<div class="col-md-3">
				<p class="red-block left-block">
					10:30 – 11:00
				</p>
			</div>
			<div class="col-md-9">
				<p class="red-block">
					Coffee break
				</p>
			</div>
			<div class="col-md-3">
				<p class="blue-block left-block">
					11:00 – 12:30
				</p>
			</div>
			<div class="col-md-9">
				<p class="blue-block">
					Druhý blok workshopů:<br/>
					VÁCLAV FIALA - Zachraň racka!<br/>
					TOMÁŠ CHROBÁK - Přemýšlivá matematika<br/>
					MARKÉTA VOKURKOVÁ - Podle nosa poznáš kosa<br/>
					PAVLÍNA LOŇKOVÁ - Pište si<br/>
				</p>
			</div>
			<div class="col-md-3">
				<p class="red-block left-block">
					12:30 – 13:30
				</p>
			</div>
			<div class="col-md-9">
				<p class="red-block">
					Oběd
				</p>
			</div>
			<div class="col-md-3">
				<p class="blue-block left-block">
					13:30 – 15:00
				</p>
			</div>
			<div class="col-md-9">
				<p class="blue-block">
					Třetí blok workshopů:<br/>
					BARBORA HEŘMANOVÁ - Individualizace v Čj<br/>
					TOMÁŠ CHROBÁK - Přemýšlivá matematika<br/>
					ŠTĚPÁNKA BAIERLOVÁ - Jak fungují počítače<br/>
					PAVLÍNA LOŇKOVÁ - Pište si<br/>
				</p>
			</div>
			<div class="col-md-3">
				<p class="red-block left-block">
					15:00 – 15:30
				</p>
			</div>
			<div class="col-md-9">
				<p class="red-block">
					Coffee break
				</p>
			</div>
			<div class="col-md-3">
				<p class="blue-block left-block">
					15:30 – 16:30
				</p>
			</div>
			<div class="col-md-9">
				<p class="blue-block">
					Společná reflexe
				</p>
			</div>
			<div class="col-md-3">
				<p class="red-block left-block">
					16:30 – 17:00
				</p>
			</div>
			<div class="col-md-9">
				<p class="red-block">
					Coffee break
				</p>
			</div>
			<div class="col-md-3">
				<p class="blue-block left-block">
					17:00 – 18:00
				</p>
			</div>
			<div class="col-md-9">
				<p class="blue-block">
					Moderované setkání s Alexem Katakalidisem a Pavlínou Loňkovou: <br />
					"Jak být dobrým učitelem a nezbláznit se z toho"
				</p>
			</div>
			<div class="col-md-3">
				<p class="blue-block left-block">
					18:00 – 18:15
				</p>
			</div>
			<div class="col-md-9">
				<p class="blue-block">
					Závěrečné slovo
				</p>
			</div>
			<div class="col-md-3">
				<p class="red-block left-block">
					18:15
				</p>
			</div>
			<div class="col-md-9">
				<p class="red-block">
					Raut
				</p>
			</div>
		</div>
		<div class="row">
			<?php foreach($workshops as $workshop){
			$workshopsCnt++;
			$middle = '';
			if($workshopsCnt%3 == 2){
				$middle = "workshop-middle";
			}
		    $popis = substr($workshop->popis, 0, 170);
	   		$popis = substr($popis, 0, strrpos($popis, ' '));
	echo "<div class=\"col-md-4\">
				<div class=\"workshop $middle\">
					<h4 class=\"workshop-heading\">
						".$workshop->nazev."
					</h4>
					<p class=\"workshop-author\">
						".$workshop->jmeno_a_prijmeni_autora." ".$workshop->prijmeni_autora."
					</p>
					<p class=\"workshop-text\">
						".$popis." ...
					</p>
					<a href=\"#\" class=\"workshop-more\" data-toggle=\"modal\" data-target=\"#workshopModal-$workshop->ID\">
						číst více
					</a>
				</div>
			</div>";
} ?>
			
		</div>
	</div>
</div>

<div class="lectors-block">
	<div class="container text-center">
		<h3 class="lectors-heading">
			LEKTOŘI
		</h3>
		<div class="row">
			<?php foreach($lectors as $lector){
			if($lector->host !== '1'){
				$lectorsCnt++;
				$middle = '';
				if($lectorsCnt%3 == 2){
					$middle = "lector-middle";
				}
				$popis = substr($lector->popis, 0, 170);
				$popis = substr($popis, 0, strrpos($popis, ' '));
				$image = wp_get_attachment_image_src($lector->fotografie);
				echo "<div class=\"col-md-4\">
					<div class=\"lector $middle\">
						<img src=\"$image[0]\" class=\"author-image\" alt=\"\" />
						<p class=\"lector-author\">
							".$lector->jmeno." ".$lector->prijmeni."
						</p>
						<p class=\"lector-text\">
							".$popis." ...
						</p>
						<a href=\"#\" class=\"lector-more\" data-toggle=\"modal\" data-target=\"#lectorModal-$lector->ID\">
							číst více
						</a>
					</div>
				</div>";
			}
}?>
			
		</div>
		<h3 class="lectors-heading">
			HOST
		</h3>
		<div class="row">
			<?php foreach($lectors as $lector){
			if($lector->host === '1'){
				$lectorsCnt++;
				$middle = '';
				if($lectorsCnt%3 == 2){
					$middle = "lector-middle";
				}
				$popis = substr($lector->popis, 0, 170);
				$popis = substr($popis, 0, strrpos($popis, ' '));
				$image = wp_get_attachment_image_src($lector->fotografie);
				echo "<div class=\"col-md-12\">
					<div class=\"lector $middle\">
						<img src=\"$image[0]\" class=\"author-image\" alt=\"\" />
						<p class=\"lector-author\">
							".$lector->jmeno." ".$lector->prijmeni."
						</p>
						<p class=\"lector-text\">
							".$popis." ...
						</p>
						<a href=\"#\" class=\"lector-more\" data-toggle=\"modal\" data-target=\"#lectorModal-$lector->ID\">
							číst více
						</a>
					</div>
				</div>";
			}
}?>
			
		</div>
	</div>
</div>

<div class="contact-block" id="contact">
	<div class="container text-center">
		<h3 class="contact-heading">
			KONTAKT
		</h3>
		<p class="contact-text">
			<a href="mailto:info@uciteling.cz">info@uciteling.cz</a>
		</p>
	</div>
</div>

<div class="bottom-block">
	<div class="container">
		<img src="https://www.uciteling.cz/wp/wp-content/uploads/2022/02/znak_srdce.png" class="heart-image-bottom" alt="" />
		<p class="bottom-text">
			Učiteling realizuje <a href="https://eduin.cz" target="_blank">EDUIN, o. p. s.</a> a <a href="https://www.ucitelskaplatforma.cz" target="_blank">Učitelská platforma</a>
		</p>
		<p class="bottom-logos">
			<img src="https://www.uciteling.cz/wp/wp-content/uploads/2022/02/loga_EDU_UP.png" class="bottom-logos-img" alt="" />
		</p>
		<p class="bottom-nadace">
			<strong style="font-weight: 400;color: #1c1cd4;font-size: 20px;">za podpory:</strong><br /> <a class="nadace-logo" href="https://www.nadacecs.cz" target="_blank"><img src="https://www.uciteling.cz/wp/wp-content/uploads/2022/02/NCS-png.png" alt="" /></a><br /><br />
		</p>
		<p class="bottom-text">
			Učiteling © 2022
		</p>
	</div>
</div>


<script id='cmplz-cookiebanner-js-extra'>
var complianz = {"prefix":"cmplz_","user_banner_id":"1","set_cookies":[],"block_ajax_content":"","banner_version":"10","version":"6.1.2","store_consent":"","do_not_track":"","consenttype":"optin","region":"eu","geoip":"","dismiss_timeout":"","disable_cookiebanner":"","soft_cookiewall":"","dismiss_on_scroll":"","cookie_expiry":"365","url":"https:\/\/uciteling.cz\/wp\/wp-json\/complianz\/v1\/","locale":"lang=cs&locale=cs_CZ","set_cookies_on_root":"","cookie_domain":"","current_policy_id":"14","cookie_path":"\/wp\/","tcf_active":"","placeholdertext":"Klepnut\u00edm p\u0159ijm\u011bte marketingov\u00e9 soubory cookie a povolte tento obsah","css_file":"https:\/\/uciteling.cz\/wp\/wp-content\/uploads\/complianz\/css\/banner-{banner_id}-{type}.css?v=10","page_links":{"eu":{"cookie-statement":{"title":"Z\u00e1sady cookies ","url":"https:\/\/uciteling.cz\/wp\/zasady-cookies-eu\/"},"privacy-statement":{"title":"Prohl\u00e1\u0161en\u00ed o ochran\u011b osobn\u00edch \u00fadaj\u016f","url":"https:\/\/www.eduin.cz\/oou\/"}}},"tm_categories":"","forceEnableStats":"","preview":"","clean_cookies":""};
</script>
<script defer src='https://uciteling.cz/wp/wp-content/plugins/complianz-gdpr/cookiebanner/js/complianz.min.js' id='cmplz-cookiebanner-js'></script>

<?php
	wp_footer();
?>
