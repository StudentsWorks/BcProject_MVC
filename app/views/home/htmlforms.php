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
												<a href="https://www.tutorialspoint.com/html/index.htm" class="button icon solid fa-info-circle" target = '_blank'>Pozrieť sa</a>
											</footer>
										</section>

										<section>
											<h3>Obsah</h3>
											<ul class="style2">
												<li><a href="#p1">HTML formuláre</a></li>
												<li><a href="#p2">Atribúty Formulára</a></li>
												<li><a href="#p3">Ovládacie prvky formulára HTML</a></li>
												<li><a href="#p4">Ovládacie Prvky Zadávania Textu</a></li>
												<li><a href="#p5">Jednoriadkové ovládače textového vstupu </a></li>
												<li>&nbsp;&nbsp;<a href="#p6">Atribúty</a></li>
												<li><a href="#p7">Ovládač zadávania hesla</a></li>
												<li>&nbsp;&nbsp;<a href="#p8">Atribúty</a></li>
												<li><a href="#p9">Viacriadkové Ovládače Vstupu Textu</a></li>
												<li>&nbsp;&nbsp;<a href="#p10">Atribúty</a></li>
												<li><a href="#p11">Políčka</a></li>
												<li>&nbsp;&nbsp;<a href="#p12">Atribúty</a></li>
												<li><a href="#p13">Výberové polia</a></li>
												<li>&nbsp;&nbsp;<a href="#p14">Atribúty</a></li>
												<li><a href="#p15">Nahranie súborov</a></li>
												<li>&nbsp;&nbsp;<a href="#p16">Atribúty</a></li>
												<li><a href="#p17">Ovládače Tlačidiel</a></li>
												<li><a href="#p17">Skryté Ovládače Formulára</a></li>

												
											</ul>
										</section>

								</div>
							</div>
							<div class="col-8 col-12-medium imp-medium">
								<div id="content">

									<!-- Content -->
										<article>
										<h2 id = 'p1'>HTML formuláre</h2>
										<p>Formuláre HTML sú potrebné, ak chcete zbierať niektoré údaje od 
											návštevníka stránky. Napríklad počas registrácie používateľa by ste chceli
											 zbierať informácie, ako je meno, e-mailová adresa, kreditná karta atď.
Formulár bude mať vstup z návštevníka webu a potom ho pošle na back-end aplikácie ako CGI, ASP skript alebo 
PHP skript atď. Back-end aplikácia bude vykonávať požadované spracovanie na odovzdaných
 údajov na základe definovanej obchodnej logiky vnútri aplikácie.</p>
 K dispozícii sú rôzne prvky formulára, ako sú textové polia, polia textarea,  rozbaľovacie ponuky, rádiové tlačidlá, začiarkavacie políčka atď.
Značka HTML &lt;form&gt; sa používa na vytvorenie formulára HTML a má nasledujúcu syntax <br>
<h5 class="card-header">Syntax</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = ''><pre>
                                                    
&lt;form action = "Script URL" method = "GET|POST"&gt;
   prvky formulára, ako sú input, textarea atď.
&lt;/form&gt;
</pre>
                                                    </p>
                                                    
                                                </div>      <p><p>

										<h3 id = 'p2'>Atribúty Formulára</h3>
										<p>Okrem bežných atribútov je uvedený zoznam najčastejšie používaných atribútov formulára</p>
										<br>
										<table>
											<tr>
												<th>Č.</th>
												<th>Popis Atribútu</th>
											</tr>
											<tr>
												<td>1</td>
												<td><strong>action</strong><br>
Backend script pripravený na spracovanie vašich odovzdaných údajov.
</td>
											</tr>
											<tr>
												<td>2</td>
												<td><strong>method</strong><br>
												Metóda, ktorá sa má použiť na odovzdávanie údajov. Najčastejšie používané sú metódy GET A POST.
												</td>
											</tr>
											<tr>
												<td>3</td>
												<td><strong>target</strong>
													Zadajte cieľové okno alebo rámček, kde sa zobrazí výsledok skriptu. Zoberie hodnoty ako _blank, _self, _parent atď.</td>
											</tr>
											<tr>
												<td>4</td>
												<td><strong>encoded</strong><br>
													Atribút enctype môžete použiť na zadanie spôsobu kódovania údajov v prehliadači pred odoslaním na server. Možné hodnoty sú −
<strong>/x-www-form-urlencoded</strong> - toto je štandardná metóda, ktorú väčšina formulárov používa v jednoduchých scenároch.<br>
<strong>multipart/form-data<strong> - toto sa používa, ak chcete nahrať binárne údaje vo forme súborov, ako je obrázok, súbor word atď.</td>
											</tr>
										</table>
										<h3 id = 'p3'>Ovládacie prvky formulára HTML</h3>
										<p>Existujú rôzne typy ovládacích prvkov formulára, ktoré môžete použiť na zhromažďovanie údajov pomocou HTML formulára
											<ul>
												<li>Ovládacie Prvky Zadávania Textu</li>
												<li>Začiarkavacie Políčka</li>
												<li>Ovládanie Rádiové</li>
												<li>Výberové Ovládacie Prvky</li>
												<li>Súborové Políčka</li>
												<li>Skryté Ovládacie Prvky</li>
												<li>Klikacie Tlačidlá</li>
												<li><strong>Odoslať a Obnoviť</strong> tlačidla</li>

											</ul>
										</p>

										<h3 id = 'p4'>Ovládacie Prvky Zadávania Textu</h3>
										<p>Na formulároch sa používajú tri typy zadávania textu 
											<ul>
												<li><strong> Ovládače zadávania textu v jednom riadku</strong> − toto ovládanie sa používa pre položky,
													 ktoré vyžadujú iba jeden riadok používateľského vstupu,
													 ako sú vyhľadávacie polia alebo názvy. Sú vytvorené pomocou značky HTML &lt;input&gt;</li>
												<li><strong> Ovládače zadávania hesla</strong> - to je tiež jednoriadkový textový vstup, ale maskuje znak hneď, ako 
													ho používateľ zadá. Sú tiež vytvorené pomocou značky HTML  &lt;input&gt;</li>
												<li><strong> Viacriadkové ovládače textového vstupu</strong>  − používaju sa, keď je používateľ povinný uviesť podrobnosti, ktoré môžu byť dlhšie, 
													ako jedna veta. Viacriadkové vstupné ovládače sa vytvárajú pomocou značky HTML &lt;textarea&gt;</li>
											</ul>
										</p>
										<h3 id = 'p5'>Jednoriadkové ovládače textového vstupu </h3>
										<p>
										Toto ovládanie sa používa pre položky, ktoré vyžadujú iba jeden riadok používateľského vstupu, 
										ako sú vyhľadávacie polia alebo názvy. Sú vytvorené pomocou značky HTML &lt;input&gt;.
										<br> <div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = ''>
														  <img src= 'images/ei11.png'>
                                                        </p>
                                                       
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">

                                                     <p>   <img src= 'images/eo11.png'> </p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>
										</p>
										<h4 id = 'p6'>Atribúty</h4>
										Nasleduje zoznam atribútov pre značku &lt;input&gt; na vytváranie textového poľa.<br>
										<table>
											<tr>
												<th>Č.</th>
												<th>Popis Atribútu</th>
											</tr>
											<tr>
												<td>1</td>
												<td><strong>type</strong><br>
												Označuje typ ovládača vstupu a pre ovládanie zadávania textu sa nastaví na text.
</td>
											</tr>
											<tr>
												<td>2</td>
												<td><strong>name</strong><br>
												Používa sa na zadanie názvu ovládača, ktorý je odoslaný na server, kde má byť rozpoznaný, a získať hodnotu.
												</td>
											</tr>
											<tr>
												<td>3</td>
												<td><strong>value</strong>
												Toto môže byť použité na poskytnutie počiatočnej hodnoty vnútri ovládacieho prvku.</td>
											</tr>
											<tr>
												<td>4</td>
												<td><strong>size</strong><br>
												Umožňuje určiť šírku polia zadávania textu z hľadiska znakov.</td>

											</tr>
											<tr>
												<td>5</td>
												<td><strong>maxlength</strong><br>
												Umožňuje určiť maximálny počet znakov, ktoré môže používateľ zadať do textového poľa.</td>
										
											</tr>
										</table>
										<h3 id = 'p7'>Ovládač zadávania hesla</h3>
										<p>Toto je tiež jednoriadkový textový vstup, ale maskuje znak hneď, ako ho používateľ zadá. 
											Sú tiež vytvorené pomocou značky HTML &lt;input&gt;, ale atribút typu je nastavený na<strong> password</strong>.</p>
											<br>Tu je základný príklad jednoriadkového vstupu, ktorý sa používa na zadanie hesla používateľa 

											<br> <div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = ''>
														  <img src= 'images/ei12.png'>
                                                        </p>
                                                       
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">

                                                     <p>   <img src= 'images/eo12.png'> </p>
                                                   </div>
                                               </div>
                                             </div>
											</div>	
											<h4 id = 'p8'>Atribúty</h4>
											<p>
											<table>
											<tr>
												<th>Č.</th>
												<th>Popis Atribútu</th>
											</tr>
											<tr>
												<td>1</td>
												<td><strong>type</strong><br>
												Označuje typ ovládača vstupu a pre ovládanie zadávania textu sa nastaví na password.
</td>
											</tr>
											<tr>
												<td>2</td>
												<td><strong>name</strong><br>
												Používa sa na zadanie názvu ovládača, ktorý je odoslaný na server, kde má byť rozpoznaný, a získať hodnotu.
												</td>
											</tr>
											<tr>
												<td>3</td>
												<td><strong>value</strong>
												Toto môže byť použité na poskytnutie počiatočnej hodnoty vnútri ovládacieho prvku.</td>
											</tr>
											<tr>
												<td>4</td>
												<td><strong>size</strong><br>
												Umožňuje určiť šírku polia zadávania textu z hľadiska znakov.</td>

											</tr>
											<tr>
												<td>5</td>
												<td><strong>maxlength</strong><br>
												Umožňuje určiť maximálny počet znakov, ktoré môže používateľ zadať do textového poľa.</td>
										
											</tr>
										</table>
											</p>

											<h3 id = 'p9'>Viacriadkové Ovládače Vstupu Textu</h3>
											<p>
											Toto sa používa, keď je používateľ povinný uviesť podrobnosti, ktoré môžu byť dlhšie ako jedna veta.
											 Viacriadkové vstupné ovládacie prvky sa vytvárajú pomocou značky HTML &lt;textarea&gt;.
											 <br>
											 Tu je základný príklad viacriadkového zadávania textu, ktorý sa používa na opis položky
											 <br> <div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = ''>
														  <img src= 'images/ei13.png'>
                                                        </p>
                                                       
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">

                                                     <p>   <img src= 'images/eo13.png'> </p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>
											</p>
											<h4 id = 'p10'>Atribúty</h4>
											<p>
											Nasleduje zoznam atribútov pre značku &lt;textarea&gt;.
											<br><table>
											<tr>
												<th>Č.</th>
												<th>Popis Atribútu</th>
											</tr>
											<tr>
												<td>1</td>
												<td><strong>name</strong><br>
												Používa sa na zadanie názvu ovládača, ktorý je odoslaný na server, kde má byť rozpoznaný, a získať hodnotu.
												</td>
												
											</tr>
											<tr>
												<td>2</td>
												<td><strong>rows</strong><br>
												Označuje počet riadkov poľa.
</td>
												
											</tr>
											<tr>
												<td>3</td>
												<td><strong>cols</strong>
												Označuje počet stĺpcov poľa.</td>
											</tr>
										</table>
											</p>
											<h3 id = 'p11'>Políčka</h3>
											<p>
											Začiarkavacie políčka sa používajú, ak je potrebné vybrať viac ako jednu možnosť. 
											Sú tiež vytvorené pomocou značky HTML < input>, ale atribút typu je nastavený na<strong> checkbox</strong>
											<br> <div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = ''>
														  <img src= 'images/ei14.png'>
                                                        </p>
                                                       
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">

                                                     <p>   <img src= 'images/eo14.png'> </p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>
											</p>
											<h4 id = 'p12'>Atribúty</h4>
											<p>
											Nasleduje zoznam atribútov pre značku &lt;checkbox&gt;.
											<br><table>
											<tr>
												<th>Č.</th>
												<th>Popis Atribútu</th>
											</tr>
											<tr>
												<td>1</td>
												<td><strong>type</strong><br>
												Označuje typ ovládania vstupu a pre zaškrtávacie políčka atribút sa nastaví na checkbox.
												</td>
												
											</tr>
											<tr>
												<td>2</td>
												<td><strong>name</strong><br>
												Používa sa na zadanie názvu ovládača, ktorý je odoslaný na server, kde má byť rozpoznaný, a získať hodnotu.
</td>
												
											</tr>
											<tr>
												<td>3</td>
												<td><strong>value</strong>
												Hodnota, ktorá sa použije, ak je  políčko začiarknuté.</td>
											</tr>
											<tr>
												<td>4</td>
												<td><strong>checked</strong>
												Nastavte na checked, ak ho chcete predvolene vybrať.</td>
											</tr>
										</table>
											</p>

											<h3 id = 'p13'>Výberové polia</h3>
											<p>
											Výberové pole, tiež volal rozbaľovacie pole,  poskytuje možnosť vypísať rôzne možnosti vo 
											forme rozbaľovacieho zoznamu, odkiaľ užívateľ môže vybrať jednu alebo viac možností.
											<br> <div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = ''>
														  <img src= 'images/ei15.png'>
                                                        </p>
                                                       
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">

                                                     <p>   <img src= 'images/eo15.png'> </p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>
											</p>
											<h4 id = 'p14'>Atribúty</h4>
											<p>
											Nasleduje zoznam dôležitých atribútov značky &lt;select&gt; 
											<br><table>
											<tr>
												<th>Č.</th>
												<th>Popis Atribútu</th>
											</tr>
											<tr>
												<td>1</td>
												<td><strong>name</strong><br>
												Používa sa na zadanie názvu ovládača, ktorý je odoslaný na server, kde má byť rozpoznaný, a získať hodnotu.
												</td>
												
											</tr>
											<tr>
												<td>2</td>
												<td><strong>size</strong><br>
												To môže byť použité na prezentáciu rozbaľovacieho sa zoznamu.
</td>
												
											</tr>
											<tr>
												<td>3</td>
												<td><strong>multiple</strong>
												Ak je nastavený na "multiple", potom umožňuje užívateľovi vybrať viac položiek z ponuky.</td>
											</tr>
										</table>
										<br>
										Nasleduje zoznam dôležitých atribútov značky &lt;option&gt;
										<br><table>
											<tr>
												<th>Č.</th>
												<th>Popis Atribútu</th>
											</tr>
											<tr>
												<td>1</td>
												<td><strong>value</strong><br>Hodnota, ktorá sa použije, ak je vybratá zodpovedná možnosť v poli.Používa sa na zadanie názvu ovládača, ktorý je odoslaný na server, kde má byť rozpoznaný, a získať hodnotu.
												</td>
												
											</tr>
											<tr>
												<td>2</td>
												<td><strong>selected</strong><br>
												Určuje, že táto možnosť by mala byť pôvodne vybratá hodnota pri načítaní stránky.
</td>
												
											</tr>
											<tr>
												<td>3</td>
												<td><strong>label</strong>
												Alternatívny spôsob označovania možností</td>
											</tr>
										</table>
											</p>

											<h4 id = 'p15'>Nahranie súborov</h4>
											<p>
											Ak chcete používateľovi povoliť nahrať súbor na vaše webové stránky, budete musieť použiť file upload box.
											 Toto je tiež vytvorené pomocou prvku &lt;input&gt;, ale atribút typu je nastavený na<strong>file</strong>.
											 <br> <div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = ''>
														  <img src= 'images/ei17.png'>
                                                        </p>
                                                       
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">

                                                     <p>   <img src= 'images/eo17.png'> </p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>
											</p>
											<h4 id = 'p16'>Atribúty</h4>
											<p>
											Nasleduje zoznam dôležitých atribútov súboru nahranie súborov
											<br><table>
											<tr>
												<th>Č.</th>
												<th>Popis Atribútu</th>
											</tr>
											<tr>
												<td>1</td>
												<td><strong>name</strong><br>Používa sa na zadanie názvu ovládača, ktorý je odoslaný na server, kde má byť rozpoznaný, a získať hodnotu.
												</td>
												
											</tr>
											<tr>
												<td>2</td>
												<td><strong>accept</strong><br>
												Určuje typy súborov, ktoré server prijíma.
</td>
												
											</tr>

										</table>
											</p>
										<h3 id = 'p17'>Ovládače Tlačidiel</h3>
										<p>
										Existujú rôzne spôsoby, ako v HTML vytvoriť klikacie tlačidlá. Pomocou značky &lt;input&gt; môžete tiež vytvoriť
										 klikateľné tlačidlo nastavením atribútu type na button. Atribút type môže mať nasledujúce hodnoty.
										 <br><table>
											<tr>
												<th>Č.</th>
												<th>Popis Atribútu</th>
											</tr>
											<tr>
												<td>1</td>
												<td><strong>submit</strong>
												<br>Tým sa vytvorí tlačidlo, ktoré automaticky odošle formulár.
												</td>
												
											</tr>
											<tr>
												<td>2</td>
												<td><strong>reset</strong><br>
												Tým sa vytvorí tlačidlo, ktoré automaticky obnoví ovládacie prvky formulára na ich počiatočné hodnoty.
											</td>
												
											</tr>
											<tr>
												<td>3</td>
												<td><strong>button</strong>
												<br>Tým sa vytvorí tlačidlo, ktoré sa používa na spustenie skriptu na strane klienta, keď používateľ klikne na toto tlačidlo.
												</td>
												
											</tr>
											<tr>
												<td>4</td>
												<td><strong>image</strong><br>
												Tým sa vytvorí klikacie tlačidlo, ale môžeme použiť obrázok ako pozadie tlačidla.
</td>
												
											</tr>

										</table>
										<br>Tu je príklad HTML kódu pre formulár s tromi typmi tlačidiel.actions<br> <div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = ''>
														  <img src= 'images/ei18.png'>
                                                        </p>
                                                       
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">

                                                     <p>   <img src= 'images/eo18.png'> </p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div> 
										</p>
										<h4 id = 'p18'>Skryté Ovládače Formulára</h4>
										<p>
										Skryté ovládače formulára sa používajú na skrytie údajov vo vnútri stránky, 
										ktoré sa neskôr môžu sa posielať na server. Toto ovládanie sa skrýva vo vnútri kódu 
										a nezobrazuje sa na aktuálnej stránke. Napríklad nasledujúci skrytý formulár sa používa na udržanie aktuálneho
										 čísla stránky. Keď používateľ klikne na ďalšiu stránku, hodnota skrytého ovládania sa odošle na webový server a
										 tam sa rozhodne, ktorá stránka sa zobrazí ďalej na základe odovzdanej aktuálnej stránky.
										 <br>Tento príklad HTML kódy ukázuje využitie skrytého ovládača
										 <br> <div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = ''>
														  <img src= 'images/ei19.png'>
                                                        </p>
                                                       
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">

                                                     <p>   <img src= 'images/eo19.png'> </p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>
										</p>




										</article>

								</div>
							</div>
						</div>
					</div>
				</div>

<?php require_once("footer.php"); ?> 
