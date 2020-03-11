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
												<a href="https://www.tutorialspoint.com/html/html_forms.htm" class="button icon solid fa-info-circle" target = '_blank'>Pozrieť sa</a>
											</footer>
										</section>

										<section>
											<h3>Obsah</h3>
											<ul class="style2">
												<li><a href="#p1">Intro</a></li>
												<li><a href="#p2">Čo je HTML?</a></li>
												<li><a href="#p3">Ako spustiť HTML kód?</a></li>
												<li><a href="#p4">Ako pridať PHP do HTML?</a></li>
												<li><a href="#p5">Čo d´alej</a></li>
												
											</ul>
										</section>

								</div>
							</div>
							<div class="col-8 col-12-medium imp-medium">
								<div id="content">

									<!-- Content -->
										<article>

											<h2 id = 'p1'>Intro</h2>
											<p>
											Predchádzajúca časť, ako už bolo spomenuté, bola úplne venovaná čistému PHP kódu. Museli sme poznať základy jazyka bez akéhokoľvek kontextu. Zatiaľ  nezažili sme PHP ako jazyk na vývoj webových stránok. V tejto časti sa však najprv pozrieme na HTML, čo je kostra webových stránok, a ako PHP a HTML skutočne  spolupracujú. Tiež, od tohto bodu už nebudeme spúšťať PHP kód v termináli. Budeme používať HTML, aby priamo zobraziť výsledok našich programov do webového prehliadača.
<br>Čo však musíte vedieť, je, že nebudeme sa pozerať na HTML v detailoch. Pre tých, ktorí plánujú stať webovými vývojármi, znalosť HTML, ktorú tu získate, nebude stačiť. Okrem toho, nebudeme sa pozerať na CSS, čo je ďalší základný jazyk pre webových vývojárov. Samozrejme, na vyriešenie tohto problému môžete hľadať niektoré materiály on-line (existuje ich veľa), alebo použiť niektoré z odporúčaných z odporúčaní tejto webovej stránky.

											</p>
											<h3 id = 'p2'>Čo je HTML?</h3>
											<p>
											Už sme sa na túto otázku pozrali, ale tu by som chcela trochu rozšíriť túto tému.
											HTML je skratka od Hypertext Markup Language a  používa sa na vytvorenie kostry webových stránok.
											<br>HTML kód zabezpečuje správne formátovanie textu a obrázkov, aby váš Internetový prehliadač mohol zobraziť ich, ako sú určené. Bez HTML by prehliadač nevedel, ako zobraziť text ako prvky alebo načítať obrázky alebo iné prvky. HTML tiež poskytuje základnú štruktúru stránky, na ktorej CSS(<a href = "https://www.computerhope.com/jargon/c/css.htm">Cascade Style Sheet</a>) ma moc zmeniť vzhľad stránky. Moholi by sme myslieť na HTML ako na kosti (štruktúru) webovej stránky,  a na CSS ako jej kožu (vzhľad).
<br>Každá webová stránka, ktorú vidíte na internete, je napísaná pomocou jednej verzie kódu HTML alebo inej. V súčasnosti používame HTML5, ktorý má významné výhody oproti svojim starším verziám. Tu budem len stručne zdôrazniť najdôležitejšie z nich.
<ol>
	<li>Čistejší kód a žiadny  zmätok s &lt;!DOCTYPE&gt; značkou na začiatku. Môžete pozrieť  <a href = "https://alistapart.com/article/doctype/"> tuto stránku</a>, aby sa dozviete viac o tom, akou bolesť táto značka bývala pre vývojárov.</li>
	<li>Mobilná Optimalizácia</li>											
	<li>Podpora zvuku / videa</li>
	<li>Podpora prístupu k polohe</li>
	<li>Kompatibilný s viacermí prehľadaváčmi</li>
	<li>Možnosti rozvoja hier</li>
</ol>	
Aby rozšíriť vaše pochopenie týchto funkcií mohli by ste sa pozrieť na <a href = "https://dzone.com/articles/top-10-major-benefits-of-html-5">tento</a>  
 a <a href = "https://www.valuecoders.com/blog/technology-and-apps/top-10-advantages-of-html5-development/">tento</a>  odkazy.
 Vyššie uvedené funkcie boli prevzaté aj z týchto zdrojov.										
</p>
<h3 id = 'p3'>Ako spustiť HTML kód?</h3>
<p>
Začneme s uvedením niektorých základných pravidiel. Pri písaní kódu HTML musíte dodržiavať štandardnú štruktúru, ktorá je znázornená na obrázku nižšie.
<br>
<img src="https://qatechhub.com/wp-content/uploads/2016/09/BasicHtmlStructure.png" width = "80%" height = "60%"><br>
Všetky tieto časti musia byť zahrnuté vo vašom súbore. Samozrejme, na účely štúdia časť &lt;head&gt; nie je príliš rozhodujúca. Koniec koncov, ešte nepotrebujete názov stránky. Ale, samozrejme, v reálnych príkladoch vám nie je dovolené ju pustiť.
Ďalším dôležitým pravidlom je, že absolútna väčšina značiek, ktoré boli otvorené, máju byť aj uzavreté. Ak chcete napríklad otvoriť značku html, použite konštrukciu &lt;html&gt;. Ak chcete zatvoriť akúkoľvek značku, musíte pridať / po znaku &lt;,  a potom zadať názov značky. Napríklad na zatvorenie značky html použite &lt;/html&gt;. 
Výnimky z týchto pravidiel sú &lt;img&gt;, &lt;br&gt;, &lt;input&gt; a niektoré ďalšie. Tiež neuzatvárame &lt;!DOCTYPE&gt; značka.
<br>Ak chcete získať nejaké praktické zručnosti, budeme pracovať s nasledujúcim jednoduchým príkladom:
<h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'a'><pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
 &lt;head&gt;
  &lt;meta charset="utf-8"&gt;
  &lt;title&gt;Príklad stránky&lt;/title&gt;
 &lt;/head&gt;
 &lt;body&gt;
  &lt;h1&gt;Toto je záhlavie 1&lt;/h1&gt;
  &lt;p&gt;Ahoj&lt;/p&gt;
 &lt;/body&gt;
&lt;/html&gt; 
                                                   
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#a')">Kopírovať</button>
												</div>      <br>
												Takže teraz otvorte textový editor, skopírujte kód a uložte ho s rozšírenie .html. Teraz dvakrát kliknite na súbor v správcovi súborov. Mal by sa automaticky otvoriť predvoleným webovým prehliadačom. Ak nie, kliknite pravým tlačidlom myši na súbor a v záložke "Vybrať inú aplikáciu" vyberte webový prehliadač. 
												<br>
												Teraz môžete začať experimentovať. Pokúste sa odstrániť niektoré otváracie a zatváracie značky a uvidíte, či to stále funguje. Tip: začnite odstrániť zo spodu; musíte odstrániť dosť veci, aby tento program prestať pracovať. Tiež by ste si mohli položiť otázku, či je kód HTML case-senzitivný a potom otestujte svoje predpoklady.
												<br> Tip: toto je nejednoznačná otázka.
												</p>
												<h3 id = 'p4'>Ako pridať PHP do HTML?</h3>
												<p>
												Neskôr budeme používať PHP pre niektoré úlohy, ktoré nemožno vykonať pomocou čistého HTML. Zatiaľ sa však budeme zaoberať len tým, ako integrovať jeden jazyk do druhého.
Aby prehliadač vedel, že v určitom okamihu sa už nezaoberá s HTML, ale s PHP, musíme použiť značky. Ste už oboznámení s nimi. Sú to &lt;?php ... ?&gt; značky. Vnútri nich dáte PHP kód. Náš aktualizovaný príklad bude vyzerať nasledujúcim spôsobom:
<h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'b'><pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
 &lt;head&gt;
  &lt;meta charset="utf-8"&gt;
  &lt;title&gt;Príklad stránky&lt;/title&gt;
 &lt;/head&gt;
 &lt;body&gt;
  &lt;h1&gt;Toto je záhlavie 1&lt;/h1&gt;
  &lt;p&gt;&lt;?php echo "Ahoj"?&gt;&lt;/p&gt;
 &lt;/body&gt;
&lt;/html&gt; 
                                                   
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#b')">Kopírovať</button>
												</div>      <br>
												V tomto prípade musíte tento súbor uložiť s rozšírením .php a spustiť ho rovnakým spôsobom, akým sme spustili test, aby sme zistili, či náš server Apache funguje.
												 Musíme si pripomenúť, že používame localhost/file_name.php v adresnom riadku prehliadača.												
</p>
<h3 id = 'p5'>Čo d´alej</h3>
<p>
Dokončili sme túto časť. Teraz vieme, ako integrovať PHP do HTML a lepšie sme pochopili, čo je HTML. V nasledujúcich častiach sa pozrieme trochu podrobnejšie na HTML a funkcie, ktoré ponúka. 
</p>


											 <!--
                                            <h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = ''><pre>
&lt;?php
 
?&gt;                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#')">Kopírovať</button>
                                                </div>      <br>
-->

										</article>

								</div>
							</div>
						</div>
					</div>
				</div>

<?php require_once("footer.php"); ?> 
