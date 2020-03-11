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
												<a href="https://www.tutorialspoint.com/php/php_cookies.htm" class="button icon solid fa-info-circle" target = '_blank'>Pozrieť sa</a>
											</footer>
										</section>

										<section>
											<h3>Obsah</h3>
											<ul class="style2">
                                                <li><a href="#p1">PHP-Cookies</a></li>
                                                <li><a href="#p2">Anatómia Cookie</a></li>
                                                <li><a href="#p3">Nastavenie Cookies s PHP</a></li>
                                                <li><a href="#p4">Prístup k súborom cookie s PHP</a></li>
                                                <li><a href="#p5">Odstránenie súborov Cookie s PHP</a></li>
												
											</ul>
										</section>

								</div>
							</div>
							<div class="col-8 col-12-medium imp-medium">
								<div id="content">

									<!-- Content -->
										<article>

                                            <h2 id = 'p1'>PHP-Cookies</h2>
                                            <p>Súbory cookies sú textové súbory uložené v klientskom počítači a sú uchovávané na účely sledovania. PHP transparentne podporuje HTTP cookies.
<br>Existujú tri kroky na identifikáciu vracajúcich sa užívateľov
                                                <ul>
                                                    <li>Server script odošle sadu cookies do prehliadača. Napríklad meno, vek alebo identifikačné číslo atď.</li>
                                                    <li>Prehliadač ukladá tieto informácie na lokálnom počítači pre budúce použitie.</li>
                                                    <li>Keď nabudúce prehliadač odošle akúkoľvek požiadavku na webový server potom odošle tieto informácie
                                                         cookies na server a server používa tieto informácie na identifikáciu používateľa.</li>
                                                    
                                                </ul>
                                                Táto kapitola vás naučí, ako nastaviť súbory cookies, ako k nim pristupovať a ako ich odstrániť.
                                                </p>
                                                <h3 id = 'p2'>Anatómia Cookie</h3>
                                                <p>
                                                Cookies sú zvyčajne nastavené v hlavičke HTTP(hoci JavaScript môže tiež nastaviť cookie priamo v prehliadači).
                                                 PHP skript, ktorý nastaví súbor cookie, môže poslať hlavičky, ktoré vyzerajú takto 
                                                 <h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = ''><pre>
                                                    
HTTP/1.1 200 OK
Date: Fri, 04 Feb 2000 21:03:38 GMT
Server: Apache/1.3.9 (UNIX) PHP/4.0b3
Set-Cookie: name=xyz; expires=Friday, 04-Feb-07 22:03:38 GMT; 
                 path=/; domain=tutorialspoint.com
Connection: close
Content-Type: text/html                                              
</pre> </p>
</div>     <br>
Ako môžete vidieť, hlavička súboru Cookie obsahuje dvojicu hodnôt názvu-hodnota, dátum GMT, 
cestu a doménu. Názov a hodnota budú URL zakódované. Pole expires je pokyn pre prehliadač, aby "zabudol " cookie po

danom čase a dátume.<br>
Ak je prehliadač nakonfigurovaný na ukladanie súborov cookie, tieto informácie uchováva až do dátumu uplynutia platnosti.
 Ak používateľ zobrazí prehliadač na ľubovoľnej stránke, ktorá zodpovedá ceste 
a doméne súboru cookie, odošle súbor cookie na server. Hlavičky prehliadača by mohli vyzerať takto
<h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = ''><pre>
GET / HTTP/1.0
Connection: Keep-Alive
User-Agent: Mozilla/4.6 (X11; I; Linux 2.2.6-15apmac ppc)
Host: zink.demon.co.uk:1126
Accept: image/gif, */*
Accept-Encoding: gzip
Accept-Language: en
Accept-Charset: iso-8859-1,*,utf-8
Cookie: name=xyz                                             
</pre> </p>
</div>      <br>
PHP skript potom bude mať prístup k cookie v environmentálnych premenných $_COOKIE alebo $HTTP_COOKIE_VARS[]
 ktorý obsahuje všetky názvy a hodnoty cookie.
 Cookie možno pristupovať pomocou $HTTP_COOKIE_VARS["name"].
                                                </p>
                                                <h3 id = 'p3'>Nastavenie Cookies s PHP</h3>
                                                <p>PHP poskytuje funkciu setcookie() na nastavenie cookie. Táto funkcia vyžaduje šesť argumentov a mala by byť volaná pred značkou &lt;html&gt;. 
                                                    Pre každý súbor cookie musí byť táto funkcia volaná samostatne.
<br><strong>setcookie(name, value, expire, path, domain, security);</strong>                                                <br>
Tu je detail všetkých argumentov −
<ul>
    <li><strong>name</strong> nastavuje názov súboru cookie a je uložený v
     premennej prostredia HTTP_COOKIE_VARS. Táto premenná sa používa pri prístupe k súborom cookie.</li>
    <li><strong>value</strong> nastavuje hodnotu pomenovanej premennej a je obsah, ktorý skutočne chcete uložiť.</li>
    <li><strong>expiry</strong> toto špecifikuje budúci čas v sekundách od 00: 00: 00 GMT 1. Januára 1970.
     Po uplynutí tejto doby sa cookie stane nedostupným.
     Ak tento parameter nie je nastavený, cookie automaticky skončí po zatvorení webového prehliadača.</li>
    <li><strong>path</strong> toto určuje adresáre, pre ktoré je súbor cookie platný. Jedno opačné lomítko umožňuje cookie byť 
    platným pre všetky adresáre.</li>
    <li><strong>domain</strong> toto môže byť použité na zadanie názvu domény vo veľmi veľkých doménach 
    a musí obsahovať aspoň dve obdobia, ktoré majú byť platné. Všetky súbory cookie sú platné iba pre hostiteľa a
     doménu, ktorá ich vytvorila.</li>
    <li><strong>security</strong> tato hodnota môže byť nastavená na 1, aby určiť, že cookie by mala byť odoslaná iba 
    bezpečným prenosom pomocou HTTPS. Inak je nastavená na hodnotu 0,
     čo znamená, cookie môže byť odoslaná pravidelným HTTP.</li>
</ul>
Nasledujúci príklad vytvorí dva cookies meno a vek tieto cookies bude vypršala po jednej hodine.
<h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'a'><pre>
&lt;?php
setcookie("name", "John Watkin", time()+3600, "/","", 0);
   setcookie("age", "36", time()+3600, "/", "",  0); 
?&gt;
&lt;html&gt;
   
   &lt;head&gt;
      &lt;title&gt;Nastavenie Cookies s PHP &lt;/title&gt;
   &lt;/head&gt;
   
   &lt;body&gt;
      &lt;?php echo "Set Cookies"?&gt;
   &lt;/body&gt;
   
&lt;/html&gt;
                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#a')">Kopírovať</button>
                                                </div>      <br>
                                                </p>
                                                <h3 id = 'p4'>Prístup k súborom cookie s PHP</h3>
                                                <p>
                                                PHP poskytuje mnoho spôsobov prístupu k súborom cookie. Najjednoduchší spôsob je použiť premenné $_COOKIE alebo $HTTP_COOKIE_VARS. 
                                                Nasledujúci príklad bude mať prístup ku všetkým súborom cookie, ktoré sú uvedené vyššie.
                                                <h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'b'><pre>
&lt;html&gt;
   
   &lt;head&gt;
      &lt; title&gt;Prístup k súborom cookie s PHP &lt; / title&gt;
   &lt;/head&gt;
   
   &lt;body&gt;
      
      &lt;?php
         echo $_COOKIE ["name"]. "&lt;br / &gt;";
         
         / * je ekvivalentné */
         echo $HTTP_COOKIE_VARS["name"]. "&lt;br /&gt;";
         
         echo $_COOKIE["age"] . "&lt;br /&gt;";
         
         / * je ekvivalentné */
         echo $HTTP_COOKIE_VARS["age"] . "&lt;br /&gt;";
      ?&gt;
      
   &lt;/body&gt;
&lt;/html&gt;                                             
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#b')">Kopírovať</button>
                                                </div>      <br> 
                                                Funkciu isset() môžete použiť na kontrolu, či je súbor cookie nastavený alebo nie. 
                                                <h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'c'><pre>
&lt;html&gt;
   
   &lt;head&gt;
      &lt; title&gt;Prístup k súborom cookie s PHP &lt; / title&gt;
   &lt;/head&gt;
   
   &lt;body&gt;
      
      &lt;?php
         if( isset($_COOKIE["name"]))
            echo "Welcome " . $_COOKIE["name"] . "&lt;br /&gt;";
         
         else
            echo "Sorry... Not recognized" . "&lt;br /&gt;";
      ?&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#c')">Kopírovať</button>
                                                </div>      <br>  
                                            </p>
                                            <h3 id = 'p5'>Odstránenie súborov Cookie s PHP</h3>
                                            <p>
                                            Oficiálne, ak chcete odstrániť súbor cookie, mali by ste zavolať setcookie() len s argumentom názvu, ale to nie vždy funguje dobre a nie je spoľahlivé.
<br>Je najbezpečnejšie nastaviť cookie s dátumom, ktorý už vypršal
<h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'd'><pre>
&lt;?php
    setcookie( "name", "", time()- 60, "/","", 0);
    setcookie( "age", "", time()- 60, "/","", 0); 
?&gt;
&lt;html&gt;
   
   &lt;head&gt;
      &lt; title&gt;Vymazanie súborov cookie s PHP &lt; / title&gt;
   &lt;/head&gt;
   
   &lt;body&gt;
      &lt;?php echo "Deleted Cookies" ?&gt;
   &lt;/body&gt;
   
&lt;/html&gt;
                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#d')">Kopírovať</button>
                                                </div>      <br>
                                            </p>

                                        </article>
                                        

								</div>
							</div>
						</div>
					</div>
				</div>

<?php require_once("footer.php"); ?> 
