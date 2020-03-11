<?php require_once("header.php"); ?> 

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-4 col-12-medium">
								<div id="sidebar">

									<!-- Sidebar -->
										<section>
											<h3>Budeme použivať</h3>
											<footer>
												<a href="https://www.youtube.com/watch?v=Ka44kcFSruk" class="button icon solid fa-info-circle" target = '_blank'>Video</a><p><p>
												<a href="https://stackoverflow.com/questions/12870880/run-php-file-in-windows-cmd" class="button icon solid fa-info-circle" target = '_blank'>Príručka</a>
											</footer>
										</section>

										<section>
											<h3>Obsah</h3>
											<ul class="style2">
												<li><a href="#p1">Spoznajte PHP z pohľadu nezávislého jazyka, nie v kontexte vývoja webových aplikácií.</a></li>
												<li><a href="#p2">Používatelia systému Windows:</a></li>
												<li><a href="#p3">Používatelia systému Linux Ubuntu</a></li>
												<li><a href="#p4">Pre používateľov Windows aj Linux sú platné nasledujúce príkazy.</a></li>
											</ul>
										</section>

								</div>
							</div>
							<div class="col-8 col-12-medium imp-medium">
								<div id="content">

									<!-- Content -->
										<article>

											<h2 id='p1'>Spoznajte PHP z pohľadu nezávislého jazyka, nie v kontexte vývoja webových aplikácií.</h2>

											<p>Aj keď je dosť šialené používať PHP v akomkoľvek inom kontexte, okrem kontextu web vývoja, venujeme tejto téme maličký segment, hlavne preto, že vám to neskor, keď sa dostaneme k vývoju stránok, dá zručnosť rozlišovať, kde je HTML kód a kde je PHP kód.
V tejto sekcii neurobíme nič komplikované. Má iba dva ciele: zistiť, ako spustiť čistý kód PHP a otestovať, či on funguje na vašom počítači. Takže začnime.
</p>

											<h3 id = 'p2'>Používatelia systému Windows:</h3>
											<p>Pre vás je to trochu zložitejšie. Musíte upraviť systémovú premennú PATH, aby príkazový riadok „vedel, čo robiť“, keď sa narazí na súbory .php. Aby ste si všetko spravili, odporúčam vám pozrieť <a href = 'https://www.youtube.com/watch?v=Ka44kcFSruk' target = '_blank'>toto video</a> a precitať <a href = 'https://stackoverflow.com/questions/12870880/run-php-file-in-windows-cmd' target = '_blank'>tuto príručku</a>. Video vám tiež ukáže, ako otestovať váš súbor .php. Ak používate systém Windows 10, odporúčam vám prejsť na krok číslo 7 v písomnej príručke, ale potom stále sa prepnúť na video.</p>

											<h3 id = 'p3'>Používatelia systému Linux Ubuntu:</h3>
											<p>Na spustenie súborov .php nemusíte podnikať žiadne ďalšie kroky. Všetko, čo potrebujete, je dostať sa do priečinka, ktorý obsahuje daný súbor, v terminále a napísať:</p>
											<h4>php -f meno_suboru.php</h4>
											<p>
											<h4>Vyskúšajte sami.</h4>
											
											<h3 id = 'p4'>Pre používateľov aj Windowsu, aj Linuxu sú platné nasledujúce príkazy.</h3>
											<p><img src = 'images/term2.png'>
											
											<p>Na spustenie súboru .php sme už použili príkaz php -f. Chcela by som tiež poukázať na príkaz php -a. Zasahuje interaktívny režim. Funguje to podobným spôsobom, ako interaktívne prostredie Pythonu, takže pravdepodobne by ste mali byť schopní pochopiť, ako to funguje. Kedykoľvek chcete preskúmať nový príkaz alebo nie ste si istí, ako niečo funguje, alebo ak chcete pred vložením do súboru vyskúšať kus kódu, mali by ste použiť interaktívny režim.
											<p>Nižšie vidíte snímku obrazovky, ktorá vám môže poskytnúť predstavu o interaktívnom režime:
											<p><img src = 'images/term3.png'>
											
											<p>To je všetko, čo sa malo povedať v tejto časti. Vyskúšajte všetko a prejdite na ďalšiu časť. Nakoniec začneme kódovať;)</p>
											

										</article>

								</div>
							</div>
						</div>
					</div>
				</div>

<?php require_once("footer.php"); ?> 
