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
												<a href="https://www.tutorialspoint.com/php/php_sessions.htm" class="button icon solid fa-info-circle" target = '_blank'>Pozrieť sa</a>
											</footer>
										</section>

										<section>
											<h3>Obsah</h3>
											<ul class="style2">
                                                <li><a href="#p1">PHP-relácie</a></li>
                                                <li><a href="#p2">Spustenie relácie PHP</a></li>
                                                <li><a href="#p3">Zničenie relácie PHP</a></li>
                                                <li><a href="#p4">Zapnutie automatickej relácie</a></li>
                                                <li><a href="#p5">Relácie bez súborov cookie</a></li>
											</ul>
										</section>

								</div>
							</div>
							<div class="col-8 col-12-medium imp-medium">
								<div id="content">

									<!-- Content -->
										<article>

                                            <h2 id = 'p1'>PHP-relácie</h2>
                                            <p>
                                            Alternatívnym spôsobom sprístupnenia údajov na rôznych stránkach celej webovej stránky je použitie relácie PHP.
<br>Relácia vytvorí súbor v dočasnom adresári na serveri, kde sú uložené registrované premenné relácie a ich hodnoty. Tieto údaje budú k dispozícii všetkým stránkam na webe počas tejto návštevy.
<br>Umiestnenie dočasného súboru je určené nastavením v <strong>php.ini</strong> súbor s názvom <strong>session.save_path</strong>. Pred použitím ľubovoľnej premennej relácie sa uistite, že máte nastavenú cestu.
<br>Keď sa začne relácia, následujúce veci sa stanu
<ul>
    <li>PHP najprv vytvorí jedinečný identifikátor pre túto konkrétnu reláciu, ktorá je náhodným reťazcom 32 hexadecimálnych čísel, ako je 3c7foj34c3jj973hjkop2fc937e3443.</li>
    <li>Súbor cookie s názvom PHPSESSID sa automaticky odošle do počítača používateľa na uloženie jedinečného identifikačného reťazca relácie.</li>
    <li>Súbor sa automaticky vytvorí na servere v určenom dočasnom adresáre a nesie názov jedinečný identifikátor prefixom sess_ ie sess_3c7foj34c3jj973hjkop2fc937e3443.</li>

</ul>
Keď PHP skript chce vybrať hodnotu z relácie premennej, PHP automaticky dostane jedinečný identifikátor relácie reťazec z PHPSESSID cookie a potom vyzerá v jeho dočasný adresár pre súbor ložisko, ktoré meno a potvrdenie môže byť vykonané porovnaním oboch hodnôt.
<br>Relácia končí, keď používateľ stratí prehliadač alebo po opustení stránky, server ukončí reláciu po vopred určenom časovom období, bežne trvajúcom 30 minút.
                                            </p>
                                            <h3 id = 'p2'>Spustenie relácie PHP</h3>
                                            <p>
                                            PHP relácie je ľahko spustiť volaním na funkciu <strong> session_start()</strong>.Táto funkcia najprv skontroluje, či je relácia už spustená a ak nie, spustí ju. Odporúča sa zavolať session_start () na začiatku stránky.
<br>Premenné relácie sú uložené v asociatívnom poli s názvom <strong> $_SESSION[]</strong>. Tieto premenné môžu byť prístupné počas životnosti relácie.
<br>Nasledujúci príklad spustí reláciu a potom zaregistruje premennú nazvanú counter, ktorá sa zvýši pri každej návšteve stránky počas relácie.
<br>Využivajte funkciu <strong> isset()</strong> na kontrolu, či je premenná relácie už nastavená alebo nie.
<h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'a'><pre>                                                    
&lt;?php
session_start();
   
   if( isset( $_SESSION['counter'] ) ) {
      $_SESSION['counter'] += 1;
   }else {
      $_SESSION['counter'] = 1;
   }
	
   $msg = "You have visited this page ".  $_SESSION['counter'];
   $msg .= "in this session.";
?&gt;
&lt;html&gt;
   
   &lt;head&gt;
      &lt;title&gt;Setting up a PHP session&lt;/title&gt;
   &lt;/head&gt;
   
   &lt;body&gt;
      &lt;?php  echo ( $msg ); ?&gt;
   &lt;/body&gt;
   
&lt;/html&gt;
                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#a')">Kopírovať</button>
                                                </div>      <br>
                                                To bude produkovať nasledujúci výsledok −
<br><strong>You have visited this page 1in this session.</strong>
                                            </p>
                                            <h3 id = 'p3'>Zničenie relácie PHP</h3>
                                            <p>
                                            PHP relácia môže byť zničená pomocou funckie <strong> session_destroy()</strong>.
                                             Táto funkcia nepotrebuje žiadny argument a jediné volanie môže zničiť všetky premenné
                                              relácie. Ak chcete zničiť jednu premennú relácie, môžete použiť funkciu<strong> unset()</strong> na deaktiváciu premennej relácie.
<br>Tu je príklad pre zrušenia jednej premennej 
<h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'b'><pre>                                                    
&lt;?php
    unset($_SESSION['counter']);
?&gt;
                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#b')">Kopírovať</button>
                                                </div>      <br>
                                                Tu je volanie, ktoré zničí všetky premenné relácie
                                                <h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'c'><pre>                                                    
&lt;?php
    session_destroy();
?&gt;
                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#c')">Kopírovať</button>
                                                </div>      <br>
                                            
                                            </p>
                                            <h3 id = 'p4'>Zapnutie automatickej relácie</h3>
                                            Nemusíte volať start_session () funkciu spustiť reláciu, keď používateľ navštívi vaše stránky,
                                             ak môžete premennú nastaviť <strong> session.auto_start</strong>  na 1 v súbore<strong> php.ini</strong>.
                                             <h3 id = 'p5'>Relácie bez súborov cookie</h3>
                                             <p>
                                             Môže sa vyskytnúť prípad, keď používateľ neumožňuje ukladať súbory cookie na svojom počítači. Takže existuje iný spôsob odosielania ID relácie do prehliadača.
<br>Prípadne môžete použiť konštantný SID, ktorý je definovaný v prípade, že relácia začala. Ak klient neposlal príslušné cookie relácie, má formu session_name=session_id. V opačnom prípade sa rozširuje na prázdny reťazec. Preto ho môžete bezpodmienečne vložiť do adries URL.
<br>Nasledujúci príklad ukazuje, ako zaregistrovať premennú a ako správne prepojiť na inú stránku pomocou SID.
<h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'd'><pre>                                                    
&lt;?php
    session_start();
   
   if (isset($_SESSION['counter'])) {
      $_SESSION['counter'] = 1;
   }else {
      $_SESSION['counter']++;
   }
   
   $msg = "You have visited this page ".  $_SESSION['counter'];
   $msg .= "in this session.";
   
   echo ( $msg );
?&gt;
&lt;p&gt;
   To continue  click following link &lt;br /&gt;
   
   &lt;a  href = "nextpage.php?&lt;?php echo htmlspecialchars(SID); ?&gt;"&gt;
&lt;/p&gt;
                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#d')">Kopírovať</button>
                                                </div>      <br>
                                                To bude produkovať nasledujúci výsledok −
<br><strong> You have visited this page 1in this session.<br>
To continue click following link </strong><br><br>

<strong>htmlspecialchars()</strong> sa môže použiť pri tlači SID, aby sa zabránilo útokom súvisiacim s XSS. 
                                            </p>


                                        </article>
                                        
                                         

								</div>
							</div>
						</div>
					</div>
				</div>

<?php require_once("footer.php"); ?> 
