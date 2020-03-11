<?php require_once("header.php"); ?> 
			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-4 col-12-medium">
								<div id="sidebar">

									<!-- Sidebar -->
										<section>
                                        <h3>Ďalšie zdroje</h3>
											
											<footer>
												<a href="https://www.php.net/manual/en/book.curl.php" class="button icon solid fa-info-circle" target = '_blank'>Pozrieť sa</a>
											</footer>
										</section>

										<section>
											<h3>Subheading</h3>
											<ul class="style2">
                                                <li><a href="#p1">Použitie cURL pre vzdialené požiadavky</a></li>
                                                <li><a href="#p2">Ako to funguje?</a></li>
                                                <li><a href="#p3">Načítať webovú stránku</a></li>
                                                <li><a href="#p4">Prihlásenie sa na webovú stránku</a></li>
                                                <li><a href="#p5">Práca s FTP</a></li>
                                                <li><a href="#p6">Odosielanie viacerých požiadaviek</a></li>
                                                <li><a href="#p7">Riešenie problémov</a></li>
                                                <li><a href="#p8">Zhrnutie použitých možností:</a></li>
												
											</ul>
										</section>

								</div>
							</div>
							<div class="col-8 col-12-medium imp-medium">
								<div id="content">

									<!-- Content -->
										<article>

                                            <h2 id = 'p1'>Použitie cURL pre vzdialené požiadavky</h2>
                                            <p>
                                            Ak chcete implementovať API s PHP, ktoré by mohlo naozaj pracovať, pravdepodobne by ste použili nejaký rámec. Ale PHP poskytuje užitočnú knižnicu s názvom cURL, ktorá môže byť použitá na vytvorenie API od začiatku. 
<br>cURL ponúka silný a efektívny spôsob, ako implementovať vzdialené volania, takže ak niekedy potrebujete nejaký nástroj pre prístup k externým API, cURL je skvelý nástroj pre tieto účely. Poskytuje nám pekné rozhranie a pomerne jednoduchý spôsob, ako vykonať požiadavky.


                                            </p>
                                            <h3 id = 'p2'>Ako to funguje?</h3>
                                            <p>
                                            Všetky žiadosti cURL nasledujú rovnaký základný vzor:
                                            <ol>
                                                <li>Najprv inicializujeme zdroj cURL (často skrátený ako ch od "cURL handle") volaním funkcie curl_init().
</li>
                                                <li>Ďalej nastavíme rôzne možnosti, ako je URL, metóda žiadania, údaje o zaťažení atď. Možnosti je možné nastaviť individuálne s curl_setopt(), alebo môžeme prejsť rad možností curl_setopt_array().</li>
                                                <li>Potom vykonáme požiadavku volaním curl_exec().
</li>
                                                <li>Nakoniec sme oslobodili zdroj a povolili mu vypratať pamäť.
</li>
                                            </ol>
                                            Takže jednoduchý kód na podanie žiadosti vyzerá takto:
                                            <h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'a'><pre>
&lt;?php
// inicializovať zdroj
$ch = curl_init();
// nastaviť jednu možnosť...
curl_setopt($ch, OPTION, $value);
// ... alebo rad možností
curl_setopt_array($ch, array(
OPTION1 => $value1,
OPTION2 => $value2
));
// vykonať
$output = curl_exec($ch);

// uvoľniť pamäť
curl_close($ch); 
?&gt;                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#s')">Kopírovať</button>
                                                </div>      <br>
                                                Jediná vec, ktorá sa zmení pre žiadosť, je, aké možnosti sú nastavené, čo samozrejme závisí od toho, čo robíte s cURL.

                                            </p>
                                            <h3 id = 'p3'>Načítať webovú stránku</h3>
                                            <p>
                                            Najzákladnejším príkladom použitia cURL je jednoducho načítanie obsahu webovej stránky. Takže, poďme načítať domovskú stránku BBC ako príklad.
                                            <h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'b'><pre>
&lt;?php
curl_setopt_array(
    $ch, array(
    CURLOPT_URL => 'http://www.bbc.co.uk/',
    CURLOPT_RETURNTRANSFER => true
));
$output = curl_exec($ch);
echo $output;
?&gt;                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#b')">Kopírovať</button>
                                                </div>      <br>
                                                Skontrolujte výstup v prehliadači a mali by ste vidieť zobrazenú webovú stránku BBC.
                                            </p>
                                            <h3 id = 'p4'>Prihlásenie sa na webovú stránku</h3>
                                            <p>
                                            cURL vykonáva GET požiadavku, aby získať obsah stránky, ale cURL môžete použiť aj iné metódy, ako je napríklad POST a dať. Pre tento príklad, poďme simulovať prihlásenie do nejakej webovej stránky. Prihlásenie sa vykoná odoslaním POST požiadavky na http://example.com/wp-login.php s nasledujúcimi podrobnosťami:
                                            <ul>
                                                <li>login - užívateľské meno
</li>
                                                <li>pwd - heslo</li>
                                                <li>redirect_to - URL kam chceme ísť po prihlásení</li>
                                                <li>testcookie -b y mala byť nastavená na hodnotu 1, ak stránka využíva cookies.</li>
                                            </ul>
                                            Samozrejme, tieto parametre sú špecifické pre každú stránku. Vždy by ste mali skontrolovať vstupné mená pre seba, niečo, čo sa dá ľahko urobiť zobrazením zdroja stránky HTML vo vašom prehliadači.
                                            <h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'c'><pre>
&lt;?php
$postData = array(
    'login' => 'acogneau',
    'pwd' => 'secretpassword',
    'redirect_to' => 'http://example.com',
    'testcookie' => '1'
);
curl_setopt_array($ch, array(
    CURLOPT_URL => 'http://example.com/wp-login.php',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_COOKIESESSION => true,
    CUROPT_COOKIEJAR => 'cookie.txt'
));
$output = curl_exec($ch);
 
?&gt;                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#c')">Kopírovať</button>
                                                </div>      <br>    
                                        </p>
                                        <h3 id = 'p5'>Práca s FTP</h3>
                                        <p>
                                        Použitie cURL na stiahnutie a nahrať súborov cez FTP je rovnako jednoduché. Poďme sa pozrieť na sťahovanie súboru:
                                        <h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'd'><pre>
&lt;?php
curl_setopt_array($ch, array(
    CURLOPT_URL => 'ftp://ftp.example.com/test.txt',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERPWD => 'username:password'
));

$output = curl_exec($ch);
echo $output;
?&gt;                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#d')">Kopírovať</button>
                                                </div>      <br> 
                                                Všimnite si, že nie je veľa verejných FTP serverov, ktoré umožňujú anonymné nahrávanie a sťahovanie z bezpečnostných dôvodov.
<br>Je to takmer rovnaké ako odoslanie požiadavky HTTP, ale len pár maličkých rozdielov:
<ul>
    <li>CURLOPT_URL-URL súboru, všimnite si použitie "ftp://" namiesto " http://”</li>
    <li>CURLOT_USERPWD - prihlasovacie poverenia pre FTP server</li>
</ul>
Nahrávanie súboru cez FTP je o niečo zložitejšie, ale stále zvládnuteľné. Vyzerá to takto:
<h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'e'><pre>
&lt;?php
$fp = fopen('test.txt', 'r');
curl_setopt_array($ch, array(
    CURLOPT_URL => 'ftp://ftp.example.com/test.txt',
    CURLOPT_USERPWD => 'username:password'
    CURLOPT_UPLOAD => true,
    CURLOPT_INFILE => $fp,
    CURLOPT_INFILESIZE => filesize('test.txt')
));
curl_exec($ch);
fclose($fp);
curl_close($ch);
 
?&gt;                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#e')">Kopírovať</button>
                                                </div>      <br>

   
                                    </p>
                                    <h3 id = 'p6'>Odosielanie viacerých požiadaviek</h3>
                                    <p>
                                    Predstavte si, že musíme vykonať päť žiadostí, aby získať všetky potrebné údaje. Pamätajte si, že niektoré veci budú mimo našej kontroly, ako je latencia siete a rýchlosť odozvy cieľových serverov. Malo by byť zrejmé, potom, že akékoľvek oneskorenie pri vydávaní päť po sebe idúcich hovorov môže sa naozaj ratať! Jedným zo spôsobov, ako zmierniť tento problém, je asynchrónne vydanie požiadaviek.
<br>Prístup k vykonávaniu viacerých asynchrónnych žiadostí o zvlnenie je trochu odlišný od toho, čo sme používali predtým. Začneme rovnakým – začiname každý kanál a potom nastavujeme možnosti – ale potom iniciovali sme multihandler pomocou curl_multi_init() a pridali sme našé kanály, a to s curl_multi_add_handle(). Vykonávame manipulátory tým, že ich prechádzame a kontrolujeme ich stav. Nakoniec získame obsah odpovede s curl_multi_getcontent ().
<h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'f'><pre>
&lt;?php
// URL, ktorú chceme získať
$urls = array(
    'http://www.google.com',
    'http://www.bing.com',
    'http://www.yahoo.com',
    'http://www.twitter.com',
    'http://www.facebook.com'
);

// inicializujeme multihandler
$mh = curl_multi_init();
$channels = array();
foreach ($urls as $key => $url) {
    // inicializujeme individuálny kanál
    $channels[$key] = curl_init();
    curl_setopt_array($channels[$key], array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true
    ));
    // pridavame kanál do multihandlera
    curl_multi_add_handle($mh, $channels[$key]);
}
// spustiť - ak je aktívne pripojenie, pokračujte v slučke
$active = null;
do {
    $status = curl_multi_exec($mh, $active);
} while ($active && $status == CURLM_OK);
// vytlačíme obsah, odstránime manipulátory a zatvorime ich
foreach ($channels as $chan) {
    echo curl_multi_getcontent($chan);
    curl_multi_remove_handle($mh, $chan);
    curl_close($chan);
}
// zatvorime multihandler
curl_multi_close($mh);
?&gt;                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#f')">Kopírovať</button>
                                                </div>      <br>
                                                Vyššie uvedený kód trval okolo 1,100 ms. Vykonávanie požiadaviek postupne bez multihandlera trvalo okolo 2,000 ms. Predstavte si, aký bude váš zisk, ak posielate stovky žiadostí!

                                    </p>
                                    <h3 id = 'p7'>Riešenie problémov</h3>
                                    <p>
                                    Ak používate cURL, pravdepodobne vykonávate svoje požiadavky na servery tretích strán. Nemôžete ich ovládať a veľa sa môže pokaziť: servery môžu ísť offline, štruktúry adresárov sa môžu zmeniť atď. Potrebujeme efektívny spôsob, ako zistiť, čo je zlé, keď niečo nefunguje, a našťastie cURL ponúka dve funkcie pre toto: curl_getinfo() a curl_error().
<br>curl_getinfo () vracia pole so všetkými informáciami týkajúcimi sa kanála, takže ak chcete skontrolovať, či je všetko v poriadku, môžete použiť:
    <h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'g'><pre>
&lt;?php
var_dump(curl_getinfo($ch));
// Ak sa objaví chyba, môžete sa pozrieť na to s curl_error():
    if (!curl_exec($ch)) {
        // ak curl_exec () vrátil false, tak zlyhal
        echo 'An error has occurred: ' . curl_error($ch);
    } else {
        echo 'everything was successful';
    }
?&gt;                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#g')">Kopírovať</button>
                                                </div>      <br></p>
                                                <h3 id = 'p8'>Zhrnutie použitých možností:</h3>
                                                <p>
                                                    <ul>
                                                        <li>CURLOPT_URL-určuje adresu URL pre požiadavku</li>

                                                    <li>CURLOPT_RETURNTRANSFER - pri nastavení false, curl_exec () vracia true alebo false v závislosti na úspechu žiadosti. Keď je nastavená na hodnotu true, curl_exec () vráti obsah odpovede.</li>
                                                    <li>CURLOPT_POST - nastavte to na True, ak chcete odoslať POST žiadosť</li>
                                                    <li>CURLOPT_POSTFIELDS-údaje, ktoré budú odoslané v tele žiadosti</li>
                                                    <li>CURLOPT_FOLLOWLOCATION – ak je nastavená na True, cURL bude nasledovať presmerovanie</li>
                                                    <li>CURLOPT_COOKIESESSION – ak je nastavená na hodnotu True, cURL začne novú reláciu cookie a ignoruje všetky predchádzajúce súbory cookie</li>
                                                    <li>CURLOPT_COOKIEJAR - toto je názov súboru, v ktorom by cURL mal liožiť informácie o súboroch cookie. Uistite sa, že máte správne oprávnenia na zápis do súboru</li>
                                                    <li>CURLOPT_UPLOAD-zrejmé True</li>
                                                    <li>CURLOPT_INFILE-čitateľný prúd pre súbor, ktorý chceme nahrať</li>
                                                    <li>CURLOPT_INFILESIZE-Veľkosť súboru, ktorý chceme nahrať v bajtoch</li>
                                                    </ul>
                                                </p>

                                        </article>

								</div>
							</div>
						</div>
					</div>
				</div>

<?php require_once("footer.php"); ?> 
