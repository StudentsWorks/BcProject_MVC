<?php require_once("header.php"); ?> 

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-4 col-12-medium">
								<div id="sidebar">

									<!-- Sidebar -->
										<section>
											<h3>Stručný prehľad tejto časti:</h3>
											<p>V tejto sekcii budeme sa venovať syntaxe PHP.<br>
											Každé vyhlásenie je uvedené na príklade. Odporúčam vám vyskúšať všetko na vašom počítači, ale na účely štúdia čistého jazyka PHP by ste mohli použiť aj online tester PHP.
											<footer>
												<a href="http://sandbox.onlinephpfunctions.com/" target = "_blank" class="button icon solid fa-info-circle">Online tester PHP</a>
											</footer>
										</section>

										<section>
											<h3>Obsah</h3>
											<ul class="style2">
												<li><a href="#p1">Komentáre</a></li>
												<li><a href="#p2">Základná syntax</a></li>
												<li><a href="#p3">Bodkočiarky</a></li>
												<li><a href="#p4">Tagy</a></li>
												<li><a href="#p5">Symbol $</a></li>												
												<li><a href="#p6">Odstupy</a></li>
											</ul>
										</section>

								</div>
							</div>
							<div class="col-8 col-12-medium imp-medium">
								<div id="content">

									<!-- Content -->
										<article>
							
					                        <h3 id = 'p1'>Komentáre:</h3>
					                        <p>Väčšina tu použitého kódu bude obsahovať komentáre. Na začiatku štúdia nového programovacieho jazyka sa tiež odporúča komentovať všetko, čo vám nie je jasné. Preto začneme zaoberaním toho, ako sa v PHP používajú pripomienky.
<p>
Existujú dva spôsoby pridať poznámky k vášmu PHP kódu. Prvý spôsob je pridať dva priame lomítka na začiatku riadku. Teda sa tento samostatný riadok zmení na komentár:
                        
					                        <p>
					                        <div class="card">
                                                <h5 class="card-header">Jednoriadkový komentár 1</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'komentar'>// Toto je komentár
</p>
                                            <button class="btn btn-primary" onclick="copyToClipboard('#komentar')">Kopírovať</button>
                                                </div>
                                            </div>
                                            <p>
                                            
                                            <p>Takýto komentár môžete vložiť aj bezprostredne za riadok kódu, aby opísať, co tento riadok robí:					                        
					                        <p>
					                        <div class="card">
                                                <h5 class="card-header">Jednoriadkový komentár 2</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'komentar1'>$ x + = 10; // Zvýšte $ x o 10
</p>
                                            <button class="btn btn-primary" onclick="copyToClipboard('#komentar1')">Kopírovať</button>
                                                </div>
                                            </div>
                                            <p><p>
                                            
					                        Ak potrebujete komentár pozostávajúci z niekoľkých riadkov, musíte použiť druhý spôsob komentovania, ktorý je uvedený v nasledujúcom príklade.
					                        <p>
					                        <p>
					                        <div class="card">
                                                <h5 class="card-header">Viacriadkový komentár</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'viacriadkovy'>&lt;?php <br>&ensp; /* Toto je oblasť<br>
&ensp; viacriadkového komentára,<br>
&ensp; ktorá nebude<br>
&ensp; interpretovaná */<br>
?&gt;

</p>
                                                <button class="btn btn-primary" onclick="copyToClipboard('#viacriadkovy')">Kopírovať</button>
                                                </div>
                                            </div>
                                            <p><p>
                                            
                                            Tento druh komentára je možné použiť, ak chcete dočasne ignorovať časť kódu, aby ste mohli otestovať váš program.
Mali by ste však pamätať na to, že nemôžete komentovať časť kódu, ktorá už obsahuje ďalšie komentáre, pretože tlmočník PHP teda nerozumie, kde sa komentár končí, a zobrazuje chybové hlásenie.
<p>
	                                        <p>
                                            <div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'chyba'>&lt;?php
&ensp;    <br>
&ensp;    / * Toto je oblasť<br>
&ensp;    viacriadkového komentára,<br>
&ensp;    /*ktory obsahuje další komentár*/<br>
&ensp;    preto tento program<br>
&ensp;    zahlasí chybu* /<br>
?&gt;
</p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#chyba')">Kopírovať</button>
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">
                                                     <p class="card-text">PHP Parse error:  syntax error, unexpected '/', expecting end of file in cesta/meno_suboru.php on line 3.</p>
                                                   </div>
                                               </div>
                                             </div>	
                                             </div>
                                             <p><p>
                                             
                                             <h2 id = 'p2'>Základná syntax</h2>
                                             PHP je veľmi jednoduchý jazyk, ktorý má korene v jazyku C a Perl, ale stále viac sa podobá
Java. Avšak existujú pravidla, týkajúce sa jeho syntaxe a štruktúry, ktoré budeme musieť naštudovať.
                                             
                                             <p><h3 id = 'p3'>Bodkočiarky</h3>
<p>V predchádzajúcich príkladoch si môžete všimnúť, že príkazy PHP končia  sa bodkočiarkou:<p>
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Bodkočiarky</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'bodkociarky'>&lt;?php<br>
&ensp;$ x + = 10;<br>
?&gt;
</p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#bodkociarky')">Kopírovať</button>
                                                    </div>
                                                 </div>
                                             </div>
                                    <p><p>			                    
                                            
                                             
                                            
                                            Asi najčastejšou príčinou chýb, s ktorými sa stretávajú začiatočníci pri práci s PHP,  je zabudnutie. Ak neuložíte bodkočiarku, PHP bude musieť prejednávať niekoľko príkazov, ako jeden. Tato situácia spôsobí syntaktickú chybu - Parse Error.<p>
                                                
					                        <div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'nesubodkociarky'>&lt;?php<br>
&ensp;$a = 5<br>
&ensp;$a - 5;<br>
?&gt;
</p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#nesubodkociarky')">Kopírovať</button>
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">
                                                     <p class="card-text">PHP Parse error:  syntax error, unexpected '$a' (T_VARIABLE) in php shell code on line 3</p>
                                                   </div>
                                               </div>
                                             </div>
                                             </div>
                                             <p><p>
                                             <h3 id = 'p4'>Tagy:</h3>
                                             <p>Musíte si tiež všimnúť, že do PHP kód dávame do značiek &lt;? php ...?&gt;, ktoré sa volajú tagy. Toto pravidlo platí rovnako pri písaní čistého PHP kódu a pri zahrnutí kódu PHP do kódu HTML. Do jednej značky môžete vložiť niekoľko riadkov. V skutočnosti sa neodporúča roztrhať tieto značky, pokiaľ to nebudete musieť urobiť. Ak máte jeden konzistentný kus kód, zahrňte ho do jednej dvojice značkiek. V interaktívnom mode, však, tagy použivať nemusíte. 
                                             <p><img src = 'images/cisphp1.png' ><p>
                                             
                                             <h3 id = 'p5'>Symbol $</h3>
<p>V PHP znak $ musí predchádzať menám všetkých premenných. To je potrebné, aby syntaktický analyzátor PHP okamžite si uvedomil, že sa zaoberá premennou, a, následkom toho, mohol pracovať rýchlejšie. Akéhokoľvek typu sú tieto premenné – čísla, reťazce alebo polia, mali by všetky vyzerať, ako v nasledujúcom príklade.<p>
											
											<div class="card">
                                                <h5 class="card-header">Priradenia troch typov premenných</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'tritypy'>&lt;?php<br> &ensp;$moje_cislo = 1;<br>
&ensp;$moj_retazec = "Ahoj";<br>
&ensp;$moje_pole = array („jedna“, „dve“, „tri“);<br>
?&gt;
</p> 
                                                    
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#tritypy')">Kopírovať</button>
                                                </div>
                                            </div>
                                            <p><p>
                                            
                                            <h3 id = 'p6'>Odstupy</h3>
                                            <p>Na rozdiel od jazykov, v ktorých odstupy a umiestnenia kódu sú veľmi prísne určene (napríklad Python), PHP vám poskytuje úplnú slobodu použivať (alebo ignorovať) akékoľvek odsadenie a ľubovoľný počet medzier. V skutočnosti sa zvyčajne odporúča rozumné a logické používanie odsadenia (spolu s veľkým počtom komentárov), pretože toto pomáha pomáha pri rozmení vášho vlastného kódu, keď sa k nemu musíte po určitom čase vrátiť. Taktiež toto pomáha ostatným programátorom, ktorí musia váš kód citát, použivať alebo podporovať.<p>
                                            <h1>A na tomto skončíme túto sekciu.</h1>
                             <div class="card">
                             
                             <!---
                                                <h5 class="card-header">Featured</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'p1'>
                                                    
                                                    &lt;?php<br>
                                                    &ensp;   With supporting text below as a natural lead-in to additional content. 
                                                    ?&gt;
                                                    
                                                    </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#p1')">Kopírovať</button>
                                                </div>      <p><p>
                               
                               
                                            <div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = ''> &lt;?php<br>
                                                    &ensp;   With supporting text below as a natural lead-in to additional content. 
                                                    ?&gt;
                                                        </p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#')">Kopírovať</button>
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">
                                                     <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>--->

										</article>

								</div>
							</div>
						</div>
					</div>
				</div>

<?php require_once("footer.php"); ?> 
