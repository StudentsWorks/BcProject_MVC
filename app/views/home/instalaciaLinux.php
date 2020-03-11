<?php require_once("header.php"); ?> 

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-4 col-12-medium">
								<div id="sidebar">

									<!-- Sidebar -->
										<section>
											<h3>Čo by ste mali robiť v prípade problémov?</h3>
											<p>Počas inštalačného procesu sa môžu vyskytnúť nejaké problémy. Celkom možne je nájsť riešenie každého prípadu na internete. Dobrým zdrojom informácií je nasledujúca stránka.</p>
											<footer>
												<a href="https://hostadvice.com/how-to/how-to-install-apache-mysql-php-on-an-ubuntu-18-04-vps/" class="button icon solid fa-info-circle" target = '_blank'>Prejsť na tuto stránku</a>
											</footer>
										</section>
										
										<section>
											<h3>Dávam prednosť ľahšiemu spôsobu</h3>
											<p>Ak si neželáte komplikovať svoj život mnohými zbytočnými inštalačnými úlohami, pozrite si túto stránku, kde nájdete pokyny, ako nainštalovať PHP pomocou XAMPP.</p>
											<footer>
												<a href="https://vitux.com/how-to-install-xampp-on-your-ubuntu-18-04-lts-system/" class="button icon solid fa-info-circle" target = '_blank'">Prejsť na tuto stránku</a>
											</footer>
										</section>

										<section>
											<h3>Obsah</h3>
											<ul class="style2">
												<li><a href="#p1">Pár slov o Linuxe</a></li>
												<li><a href="#p2">Začiname:</a></li>
												<li><a href="#p3">Krok 1</a></li>
												<li><a href="#p4">Krok 2</a></li>
												<li><a href="#p5">Krok 3</a></li>
												<li><a href="#p6">Krok 4</a></li>
												<li><a href="#p7">Krok 5</a></li>
											</ul>
										</section>

								</div>
							</div>
							<div class="col-8 col-12-medium imp-medium">
								<div id="content">

									<!-- Content -->
										<article>

											<h2 id='p1'>Pár slov o Linuxe</h2>

											<p>Keďže ste na tejto stránke, pravdepodobne viete o všetkých výhodách, ktoré Linux poskytuje programátorom, a teraz si ich užívate, ale považujem za svoju povinnosť ešte raz zvýrazniť najväčšie výhody Linuxu. Túto časť môžete ľahko preskočiť.
											<ul>
											    <li>Linux je bezplatný. Môžete si stiahnuť a nainštalovať operačný systém Linux zadarmo. Okrem toho je zvyšok softvéru zadarmo.</li>
											    <li>Linux je jednoduchá inštalácia. Väčšina ľudí nikdy ne inštaluje operačný systém. Ale dokonca aj mladý programátor môže ľahko zistiť, ako hľadať operačný systém Linux, chytiť ISO a zapísať ho na USB disk. Po spustení živého disku USB sa inštalácia systému Linux nelíši od inštalácie programu v systéme Windows. Navyše, ak chcete zachovať svoj existujúci operačný systém, vždy máte možnosť dual-boot, teda môžete mať súčasne dva operačné systémy.</li>
											    <li>Máte možnosť preskúmať. Linux ponúka ideálne miesto na testovanie vašich schopností. Môžete pristupovať k zdrojovému kódu takmer akejkoľvek časti operačného systému, od grafického rozhrania až po jadro. Väčšina z nich vám nedáva zmysel, bez ohľadu na to, koľko skúseností máte. Ale mať slobodu experimentovať je skvelým spôsobom, ako sa naučiť, a v systéme Linux sa nemusíte obávať, že by ste sa pri práci dostali do akýchkoľvek právnych problémov.</li>
											    <li>Existuje podpora pre väčšinu programovacích jazykov. Potrebujete písať v C, C ++, CSS, Java, JavaScript, HTML, PHP, Perl, Python, Ruby alebo Vala? Linux podporuje všetky z nich a zoznam pokračuje. Iste, existujú nejaké výnimky. Visual Basic podporuje iba systém Windows, ale môžete použiť aj Swift od Apple. Všeobecne platí, že ak programovací jazyk nie je obmedzený na konkrétny operačný systém, potom pravdepodobne funguje na Linuxe. Ak jazyk, ktorý chcete používať, nie je v ihneď nainštalovaný, môžete to môžete to urobiť rýchlo a ľahko sami.</li>
											    <li>Linux Terminal. Terminál sa môže zdať zastaraný, ale je veľmi efektívny a mnoho programátorov ho používa. Veľa úloh možno vykonať zadaním príkazu namiesto kliknutia veľkého počtu tlačidiel vo viacerých oknách.</li>
											    <li>Gnome Shell, virtuálne desktopy, klávesové skratky, rozšírenia. Všetky tieto veci uľahčujú život programátora alebo bežného používateľa a výkon tejto osoby je omnoho vyššia </li>
											    <li>Operačné systémy Linux nie sú s vekom pomalšie a pomalšie. Nevyžadujú toľko zdrojov, ako napríklad Windows. Sú vytvorené pre ľudí inými ľuďmi. Nie sú  komerčné.</li>
											</ul>
											<p>Znalosť operačného systému Linux a skúsenosti s prácou v tomto systéme sú veľkými výhodamy na trhu práce. Tí, ktorí majú záujem stať sa programátormi, by mali tieto zručnosti považovať za dôležitú predispozíciu úspechu v tomto smere.
</p>

											<h2 id='p2'>Začiname:</h2>
											<p>Aby ste mohli dokončiť túto časť, budete potrebovať server Ubuntu 18.04 s používateľským kontom so sudo právamy a základnou bránou firewall. Z bezpečnostných dôvodov sa odporúča používať konto typu non-root.
</p>
											
											<h3 id='p3'>Krok 1 - Inštalácia Apache a aktualizácia Firewallu</h3>
											<p>Webový server Apache patrí medzi najpopulárnejšie webové servery na svete. Je dobre zdokumentovaný a bol široko využívaný väčšinu histórie webu, preto je skvelou voľbou pre hosťovanie webových stránok.
<p>
Inštalácia Apache pomocou správcu balíkov Ubuntu, apt:

											<p><img src="images/l1.png" alt="Image"/>
											<p>Keďže ide o príkaz sudo, tieto operácie sa vykonávajú s privilégiami root. Požiada vás o heslo vášho bežného používateľa na overenie vašich zámerov.
<p>Akonáhle zadáte heslo, apt vám povie, ktoré balíky plánuje nainštalovať a koľko miesta na disku zaberajú. Pre pokračovanie stlačte Y a stlačte ENTER, a inštalácia bude pokračovať.
</p>											
											<h3 id='p4'>Krok 2  - Upravte bránu firewall tak, aby umožňovala webovú prevádzku</h3>
											<p>Ďalej, za predpokladu, že ste postupovali podľa počiatočných inštrukcií pre nastavenie servera a povolili bránu firewall UFW, uistite sa, že brána firewall umožňuje prevádzku protokolu HTTP a HTTPS. Môžete skontrolovať, či UFW má profil aplikácie pre Apache, ako je to:<p>
											<img src="images/l2.png" alt="Icon" />
											<p>
											Ak sa pozriete na profil Apache Full, mal by ukázať, že umožňuje prevádzku na porty 80 a 443:
											<img src="images/l2_2.png" alt="Icon" width = '110%' />
											
											<p>Povoliť prichádzajúcu premávku HTTP a HTTPS pre tento profil:
											<p><img src="images/l2_3.png" alt="Image" />
											
											<p>Môžete hneď skontrolovať, či je všetko v poriadku. Do adresného riadku vašeho webového prehliadača napíšte slovo localhost. Mali by ste vidieť nasledujúce informácie:
											<img src="images/l2_5.png" alt="Icon" />
											
											<p>Ak vidíte túto stránku, webový server je teraz správne nainštalovaný a prístupný cez bránu firewall.</p>
											
											<h3 id='p5'>Krok 3 -  Inštalácia MySQL</h3>
											<p>Teraz, keď máte svoj webový server spustený, je čas nainštalovať MySQL. MySQL je databázový riadiaci systém. V podstate bude organizovať a poskytovať prístup k databázam, kde môžu vaše stránky ukladať informácie.</p>
											
											<p>Opäť použite apt na získanie a inštaláciu tohto softvéru:
											<p><img src="images/l3.png" alt="Image" />
											<p>Tento príkaz tiež zobrazí zoznam balíkov, ktoré budú nainštalované, spolu s množstvom miesta na disku, ktoré zaberajú. Pokračujte zadaním Y.
<p>
Teraz môžete pristupovať k MySQL nasledujúcim príkazom:
                                            <img src="images/3_1.png" alt="Image" />
											
											<h3 id='p6'>Krok 4 - Inštalácia PHP</h3>
											<p>Opäť využijeme apt príkaz na inštaláciu PHP. Okrem toho zahrnúť niektoré pomocné balíky tentoraz tak, že kód PHP môže bežať pod serverom Apache a komunikovať s databázou MySQL:</p>
											<p><img src="images/l4.png" alt="Image" />
											
											
											<p>Aby všetko fungovalo správne, musíte povedať Apache, aby najprv hľadal súbor index.php.
Ak to chcete urobiť, zadajte tento príkaz a otvorte súbor dir.conf v textovom editore s privilégiami root:
                                            <p><img src="images/l4_1.png" alt="Image" />
                                            
                                            <p>Dajte súbor index.php na prvé mesto a uložte ho:
                                            <p><img src="images/l4_2.png" alt="Image" width = '100%'/>
                                            
											<h3 id='p7'>Krok 5 - Testovanie PHP na webovom serveri</h3>
											<p>Ak chcete otestovať, či je váš systém správne nakonfigurovaný pre PHP, vytvorte veľmi jednoduchý html skript s názvom test.html. Aby mohol Apache nájsť tento súbor a správne ho obsluhovať, musí byť uložený vo veľmi špecifickom adresári, ktorý sa nazýva "web root".
<p>
V Ubuntu 18.04 sa tento adresár nachádza v adresári  /var/www/html/. Vytvorte súbor na danom mieste spustením:
                                            <p><img src="images/l5.png" alt="Image" />
                                            <p>Vytvorte a uložte tento  súbor:
                                            <p><img src="images/12.png" alt="Image" />
<p>Teraz do adresového riadku webového prehliadača zadajte localhost / test.html. Mali by ste vidieť túto stránku:
<p>                                         <img src="images/13.png" alt="Image" />
<p> Nebuďte zmätený tým, že používame html kód, aj keď sa máme učiť PHP. Ako už možno viete, tieto dva jazyky majú rôzne funkcie, ale úzko súvisia. Vo vyššie uvedenom príklade nie je jediný riadok PHP, takže sa zdá rozumné uložiť súbor s príponou .html. Ale aj keby v súbore bol kód PHP, stále by sme používali túto príponu.

											
											<h3>Teraz sme pripravený na prácu s jazykom PHP.</h3>
											
									</article>

								</div>
							</div>
						</div>
					</div>
				</div>

<?php require_once("footer.php"); ?> 
