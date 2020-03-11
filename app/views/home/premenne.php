<?php require_once("header.php"); ?> 

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-4 col-12-medium">
								<div id="sidebar">

									<!-- Sidebar -->
										<section>
											<h3>Prehľad tejto sekcii</h3>
											<p>Cieľom tejto časti je dozvedieť sa o dátových typoch a  premenných v PHP. Najmä sa pozrieme na to, ako premennú deklarovať, ako vytlačiť jej hodnotu; aké únikové sekvencie sú v PHP; aké typy údajov existujú v PHP a čo by sme mali vedieť o nich, aby deklarovať premennú; a nakoniec sa pozrieme na oblasť premenných v PHP.</p>
											<footer>
											    <h3>Môže byť užitočné</h3>
												<a href="https://en.wikipedia.org/wiki/Variable_(computer_science)" class="button icon solid fa-info-circle" target = "_blank">Čo je premenná</a>
											</footer>
										</section>

										<section>
											<h3>Obsah</h3>
											<ul class="style2">
												<li><a href="#p1">Prehľad tejto sekcii a predbežné požiadavky</a></li>
												<li><a href="#p2">Vytváranie (deklarovanie) premenných v jazyku PHP</a></li>
												<li><a href="#p3">Typy údajov: podrobne</a></li>
												<li>&ensp;&ensp;<a href="#p31">Reťazec</a></li>
												<li>&ensp;&ensp;<a href="#p32">Celé číslo</a></li>
												<li>&ensp;&ensp;<a href="#p33">Float</a></li>
												<li>&ensp;&ensp;<a href="#p34">Boolean</a></li>
												<li>&ensp;&ensp;<a href="#p35">Pole</a></li>
												<li>&ensp;&ensp;<a href="#p36">Objekt PHP</a></li>
												<li>&ensp;&ensp;<a href="#p37">Hodnota NULL</a></li>
												<li><a href="#p4">Pravidlá pomenovania premenných:</a></li>
												<li><a href="#p5">Oblasť premenných PHP</a></li>
												<li>&ensp;&ensp;<a href="#p51">Globálna a lokálna oblasť premennej</a></li>
												<li>&ensp;&ensp;<a href="#p52">Kľúčové slovo global</a></li>
												<li>&ensp;&ensp;<a href="#p53">Kľúčové slovo static</a></li>
											</ul>
										</section>

								</div>
							</div>
							<div class="col-8 col-12-medium imp-medium">
								<div id="content">

									<!-- Content -->
										<article>

											<h2 id = 'p1'>Prehľad tejto sekcii a predbežné požiadavky</h2>
											<p>Predpokladám, že väčšina z vás už pozná pojem premenná, preto nebudeme tu hovoriť o tom, čo je premenná. V podstate všetko, čo musíte vedieť o premenných, je to, že to sú akoby „kontajnery na ukladanie údajov“. Ak si nemyslíte, že ste si istí vo svojich znalostiach v tejto téme, odporúčame vám prečítať si  <a href = 'https://en.wikipedia.org/wiki/Variable_(computer_science)' target = '_blank'> tento článok</a>. Cieľom tejto časti je dozvedieť sa o dátových typoch a  premenných v PHP. Najmä sa pozrieme na to, ako premennú deklarovať, ako vytlačiť jej hodnotu; aké únikové sekvencie sú v PHP; aké typy údajov existujú v PHP a čo by sme mali vedieť o nich, aby deklarovať premennú; a nakoniec sa pozrieme na oblasť premenných v PHP. Veľa šťastia;)
											
											
											<h2 id = 'p2'>Vytváranie (deklarovanie) premenných v jazyku PHP</h2>
											<p>V PHP každá premenná sa začína znakom $, za ktorým nasleduje názov premennej. Buďte opatrní: medzi znakom $ a názvom premennej nemôžu byť medzery.
											<p><h5 class="card-header">Deklarovanie premenných</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'deklarovanie'>&lt;?php<br>
&ensp;$str = "Hello world!";<br>
&ensp;$i = 1;<br>
&ensp;$f = 0.1;<br>
?&gt;

                                                    </p> 
                                                    
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#deklarovanie')">Kopírovať</button>
                                                </div>
                                            </div>
                               <p><p>
                               
                                        V PHP sa nemusíte starať o typ údajov. Tiež nemusíte deklarovať premenne pred ich použitím. Napriek tomu, že proces vytvárania premennej a priradenia jej nejakého údajového typu prebieha bez akejkoľvek námahy z našej strany, musíte vedieť, aké typy údajov existujú.
PHP podporuje nasledujúce typy údajov:
                                        <p>
                                        <ol>
                                            <li>Reťazec</li>
<li>Celé číslo</li>
<li>Float (desatinné číslo, čísla s pohyblivou rádovou čiarkou)</li>
<li>Boolean</li>
<li>Pole</li>
<li>Objekt</li>
<li>NULL</li>

                                        </ol>
                                        <p>Zatiaľ ste sa  narazili iba na reťazce a celé čísla, ale teraz na každý z typov údajov sa pozrieme bližšie.
                                        
                                        <h2 id = 'p3'>Typy údajov: podrobne</h2>
                                        <h3 id = 'p31'>Reťazec</h3>

                                            <p>Reťazec je postupnosť znakov, napríklad “Hello, world!”.<br>

Reťazec môže byť akýkoľvek text v úvodzovkách. Môžete použiť jednotlivé alebo dvojité úvodzovky:
<p><h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'uvodzovky'>&lt;?php<br>
&ensp;$x = "Hello world!";<br>
&ensp;$y = 'Hello world!';<br><br>

&ensp;echo $x;<br>
&ensp;echo $y;<br>?&gt;
                                                    
                                                    </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#uvodzovky')">Kopírovať</button>
                                                </div>
                                            
                               <p><p>
                               Keď pridávate premennej textové hodnoty, je potrebné vedieť jednu dôležitú vec. Na rozdiel od iných programovacích jazykov, ako, napríklad, Python, v PHP existuje rozdiel medzi umiestnením textu do jednoduchých a dvojitých úvodzoviek. Ak zadáte hodnotu reťazca do jednoduchých úvodzoviek a vytlačíte ho do obrazovky, vytlačí sa presne tak, ako ste ho zadefinovali. To znamená, že únikové znaky, ako \n, \t, \\ atď. sa nebudú interpretovať ako únikové znaky, ale ako bežný text. Preto je lepšie použiť dvojité úvodzovky, pretože potom môžete mať úžitok z únikových sekvencií. Nižšie nájdete podrobnejší zoznam únikových znakov a príklady na pochopenie povedaného vyššie.
<p><img src = 'images/prem1.png' ><p>

<div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'uznaky'> &lt;?php<br>
                                                    &ensp;echo 'Hello, \tSam, \nnice to see you!';<br>
                                                    &ensp;echo "Hello, \tSam, \nnice to see you!";<br> 
                                                    ?&gt;
                                                        </p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#uznaky')">Kopírovať</button>
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">
                                                     <p class="card-text">Hello, \tSam, \nnice to see you!<br>
                                                     Hello, &ensp;&ensp;Sam, <br>nice to see you!</p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>
                                            <p><p>Je tu ešte jeden detail, ktorý musíte vedieť.Ak chcete nejaký text vytlačiť a do neho zahrnúť hodnotu nejakej premennej, musíte do úvodzoviek uviesť názov premennej alebo musíte z dvoch stran názvu premennej použiť bodky. Ak je názov premennej na začiatku alebo na konci, musíte použiť bodku iba na jednej strane. Nasledujúci príklad by mal lepšie toto objasniť.
                                            <p><img src = 'images/prem2.png' ><p>
                                            Okrem toho tu platí aj zásada, o ktorej sme hovorili vyššie. Ak dáte reťazec a názov premennej do jednotlivých úvodzoviek, reťazec sa vytlačí presne rovnakým spôsobom, ako ste ho umiestnili. Ak však použijete dvojité úvodzovky, názov premennej sa nahradí hodnotou premennej. Znova necháme príkladu toto lepšie vysvetliť.
<p><img src = 'images/prem3.png' ><p>Podobne do iných jazykoch, v PHP je možné formátovať reťazec, ale o tom budeme hovoriť neskôr v inej sekcii.
                                        
                                        <h3 id = 'p32'>Celé číslo</h3>
                                        Celočíselný dátový typ je nenulové číslo medzi -2 147 483 648 a 2 147 483 647.

<p>Pravidlá pre celé čísla:

     <ol>
     <li>Celé číslo musí mať najmenej jednu číslicu</li>
     <li>Celé číslo nesmie mať desatinnú čiarku</li>
     <li>Celé číslo môže byť buď kladné alebo záporné</li>
     <li>Celé čísla je možné zadať v troch formátoch: desatinné (založené na 10), hexadecimálne (založené na 16 - s predponou 0x) alebo osmičkové (8 - s predponou s 0)</li>
     </ol>
     <p>V nasledujúcom príklade $x je celé číslo. Funkcia PHP <strong>var_dump()</strong> vracia typ údajov a hodnotu:
                                            <div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'cele'> &lt;?php<br>
                                                    &ensp;$x = 5985;<br>
&ensp;var_dump($x);<br>?&gt;
                                                        </p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#cele')">Kopírovať</button>
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">
                                                     <p class="card-text">int(5985)
</p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>
                                            
                                            <p><h3 id = 'p33'>Float</h3>
                                            <p>

Float (číslo s pohyblivou rádovou čiarkou) je číslo s desatinnou čiarkou alebo číslo v exponenciálnej podobe.<br>

V nasledujúcom príklade $x je desatinné číslo. Funkcia PHP var_dump () vracia typ údajov a hodnotu:
<p><div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'float'> &lt;?php<br>
                                                    &ensp;$x = 10.365;<br>
&ensp;var_dump($x);<br>?&gt;
                                                        </p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#float')">Kopírovať</button></div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">
                                                     <p class="card-text">float(10.365)
</p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>
                                             
                                             
                                             
                                             <h3 id = 'p34'>Boolean</h3>
                                             <p>Booleovský jazyk predstavuje dva možné stavy: true/1 alebo false/0.<p>
                                             
                                             
                                             <div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'bool'> &lt;?php<br>
                                                    &ensp;$x = true;<br>
&ensp;echo $x;<br><br>
&ensp;$y = false;<br>
&ensp;echo $y;<br>?&gt;
                                                        </p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#bool')">Kopírovať</button>
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">
                                                     <p class="card-text">1<br><br></p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>
                                            
                                            <p><h3 id = 'p35'>Pole</h3>
                                            <p>Pole ukladá viacero hodnôt do jednej premennej.
<p><h5 class="card-header">Pole</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'ar1'>
                                                    
                                                    &lt;?php<br>
                                                    &ensp; $team = array('Bill', 'Mary', 'Mike', 'Chris', 'Anne'); <br>?&gt;
                                                    
                                                    </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#ar1')">Kopírovať</button>
                                                </div>      <p><p>
                                                Polia podporujú štandardné indexovanie, ktoré sa začína od 0.
                                                <div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 't3'> &lt;?php<br>
                                                    &ensp;echo $team[3] <br>?&gt;
                                                        </p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#t3')">Kopírovať</button>
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">
                                                     <p class="card-text">Chris</p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>
                                            <p>Môžeme vytvoriť polia viacerých dimenzií, tj polia, ktoré obsahujú ďalšie polia, ktoré obsahujú iné polia … Indexovanie môžeme použiť aj tu.
                                            <p><div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'xox'> &lt;?php<br>
                                                    &ensp;$oxo = array(array('x', ' ', 'o'),<br>
&ensp;array('o', 'o', 'x'),<br>
&ensp;array('x', 'o', ' ' ));<br>
&ensp;echo $oxo[1][2];<br>?&gt;
                                                        </p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#xox')">Kopírovať</button>
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">
                                                     <p class="card-text">X</p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>
                                            
                                            <p><h3 id = 'p36'>Objekt PHP</h3><p>

Objekt je typ údajov, ktorý ukladá údaje a informácie o tom, ako tieto údaje spracovať. V PHP musí byť objekt explicitne deklarovaný.

Najprv musíme deklarovať triedu objektov. Na tento účel používame kľúčové slovo <strong>class</strong>. Trieda je štruktúra, ktorá môže obsahovať vlastnosti a metódy:<p>
<div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'class'> &lt;?php<br>
                                                    &ensp;
&ensp;class Car {<br>
    &ensp;&ensp;function Car() {<br>
        &ensp;&ensp;&ensp;$this->model = "VW";<br>
    &ensp;&ensp;}<br>
&ensp;}<br>
// create an object<br>
&ensp;$herbie = new Car();<br>
<br>
// show object properties<br>
&ensp;echo $herbie->model; <br>?&gt;
                                                        </p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#class')">Kopírovať</button>
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">
                                                     <p class="card-text">VW</p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>
                                            
                                            <p><h3 id = 'p37'>Hodnota NULL</h3>
                                            <p>Null je špeciálny typ údajov, ktorý môže mať iba jednu hodnotu: NULL.

Premenná dátového typu NULL je premenná, ktorá nemá priradenú žiadnu hodnotu.
                                            <p><h2 id = 'p4'>Pravidlá pomenovania premenných:</h2>
                                            <p>Pri vytváraní premenných PHP sa musia dodržiavať štyri pravidlá, ktoré však sú dosť evidentne pre každého, kto už ma skúsenosti s nejakým programovacím jazykom:
                                            <ol>
                                            <li>Názvy premenných musia začínať písmenom alebo symbolom _ (podčiarknikom).</li>

<li>Názvy premenných môžu obsahovať iba znaky: a - z, A - Z, 0–9 a symbol _ .</li>

<li>Názvy premenných nesmú obsahovať medzery. Ak názov premennej pozostáva z viac, ako jedného slova, ako oddeľovač sa musí použiť podčiarknik(napríklad $ user_name).</li>

<li>Názvy premenných sú case-senzitivné (rozlišujú veľké a malé písmená). Premenná $Meno_premennej sa líši od premennej $meno_premennej.</li>

                                            </ol>
                                            <p><h2 id = 'p5'>Oblasť premenných PHP</h2>

<p>V PHP premenné môžu byť deklarované kdekoľvek v skripte. Oblasť premennej je časť súboru, kde je možné na premennú odkazovať / použiť ju.<br>

PHP má tri rôzne oblasti premenných:
<ol>
<li>lokálna</li>
<li>globálna</li>
<li>statická</li>
</ol>
                                        <p><h3 id = 'p51'>Globálna a lokálna oblasť premennej</h3>
                                        <p>Premenná deklarovaná mimo funkcie má globálny rozsah a je dostupná len mimo funkcie:<p>
                                        <div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'local'> &lt;?php<br>
                                                    &ensp;$ x = 5; // globálna oblasť<br>

&ensp;function myTest () {<br>
<br>
// použitie x vo vnútri tejto funkcie vygeneruje chybu<br>
&ensp;&ensp;echo "Premenná x vo vnútri funkcie je: $x \ n";<br>
&ensp;}<br>
&ensp;myTest ();<br>
<br>
&ensp;echo "Premenná x mimo funkcii je: $x \ n";<br>?&gt;
                                                        </p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#local')">Kopírovať</button>
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">
                                                     <p class="card-text">Premenná x vo vnútri funkcie je:<br>
                                                     Premenná x mimo funkcii je: 5</p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>
                                            <p><p>Premenná deklarovaná v rámci funkcie má lokálny rozsah a dá sa ju použiť iba v rámci tejto funkcie:<p><div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'global'> &lt;?php<br>
                                                    &ensp;unction myTest () {<br>
&ensp;&ensp;$x = 5; // lokálny rozsah<br>
&ensp;&ensp;echo "Premenná x vo vnútri funkcie je: $x \ n";<br>
&ensp;}<br>
&ensp;myTest();<br>
<br>
// použitie x mimo funkcie vygeneruje chybu<br>
&ensp;echo "Premenná x vonkajšia funkcia je: $x \ n";<br>?&gt;
                                                        </p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#global')">Kopírovať</button>
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">
                                                     <p class="card-text">Premenná x vo vnútri funkcie je: 5<br>
                                                     Premenná x vonkajšia funkcia je:</p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>
                                            <p>V rôznych funkciách môžete mať lokálne premenné s rovnakým názvom, pretože lokálne premenné sú rozpoznávané iba funkciou, v ktorej sú deklarované.<p>
                                           
                                           
                                            <h3 id = 'p52'>Kľúčové slovo global</h3>
                                            <p>Kľúčové slovo global sa používa na prístup k globálnej premennej zvnútra funkcie. Použiva sa pred premennými (vo funkcii):<p>
                                        
                                        
                                        
                                        <div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'gl'> &lt;?php<br>
                                                    
&ensp;$x = 5; // lokálny rozsah<br>
&ensp;$y = 10;<br>
&ensp;function myTest () {<br>
&ensp;&ensp;global $x,  $y;<br>
&ensp;&ensp;$y = $x + $y;<br>
&ensp;}<br>
&ensp;myTest ();<br>
&ensp;echo $ y; // výtlaci  15<br>?&gt;
                                                        </p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#gl')">Kopírovať</button>
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">
                                                     <p class="card-text">15</p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>
                                        
                                        
                                            
                                            <p>
                                            <h3 id = 'p53'>Kľúčové slovo static</h3>
                                            <p>Normálne sa po dokončení  vykonavania funkcie všetky jej premenné sa vymažú. Niekedy však chceme zachranit hodnotu lokálnej premennej, lebo mozeme potrebovat ju dalej.<br>
V tomto pripade použijeme kľúčové slovo static, keď prvýkrát deklarujete premennú:
<p>
                                      
                                      
                                      <div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'three'> &lt;?php<br>
                                                    
&ensp;function myTest() {<br>
    &ensp;&ensp;static $x = 0;<br>
    &ensp;&ensp;echo $x.' ';<br>
    &ensp;&ensp;$x++;<br>
&ensp;}<br>
<br>
&ensp;myTest();<br>
&ensp;myTest();<br>
&ensp;myTest();<br>?&gt;
                                                        </p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#three')">Kopírovať</button>
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">
                                                     <p class="card-text">0 1 2</p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>
                                      
                                      
                                      
                                       <p>Potom pri každom volaní funkcie táto premenná bude mat tu hodnotu, ktoru mala po predchadzajucom volani funkcii.<br>
<strong>Poznámka:</strong> Premenná je stále lokálna pre tuto funkciu.
        


                                        
										</article>

								</div>
							</div>
						</div>
					</div>
				</div>

<?php require_once("footer.php"); ?> 
