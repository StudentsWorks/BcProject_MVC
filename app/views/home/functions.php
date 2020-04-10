<?php require_once("header.php"); ?>

<!-- Main -->
<div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-4 col-12-medium">
								<div id="sidebar">

									<!-- Sidebar -->
										<section>
											<h3>Prehľad</h3>
											<p>Táto časť bude venovaná výlučne funkciám. V prvej časti tejto sekcie sa dozvieme definovať svoje vlastné funkcie. Druhá časť je zameraná na predstavenie niektorých základných funkcií PHP.
</p>
											<footer>
												<a href="https://www.php.net/manual/en/indexes.functions.php" class="button icon solid fa-info-circle" target = _blank>Dokumentácia o funkciách</a>
											</footer>
										</section>

										<section>
											<h3>Obsah</h3>
											<ul class="style2">
												<li><a href="#p1">Funkcie v jazyku PHP</a></li>
												<li><a href="#p2">Funkcie a kvalita kódu</a></li>
												<li><a href="#p3">Vytvorenie funkcie v PHP</a></li>
												<li><a href="#p4">Argumenty funkcií PHP</a></li>
												<li><a href="#p5">Predvolená hodnota argumentu</a></li>
												<li><a href="#p6">Funkcie PHP - vracanie hodnôt</a></li>
												<li><a href="#p7">Dátový typ hodnoty, ktorú funkcia vracia</a></li>
												<li><a href="#p8">Úvod do vstavaných funkcií</a></li>
												<li><a href="#p9">PHP reťazcové funkcie:</a></li>
												<li>&ensp;&ensp;<a href="#p91">Zistenie dĺžky reťazca</a></li>
												<li>&ensp;&ensp;<a href="#p92">Vrátenie časti reťazca</a></li>
												<li>&ensp;&ensp;<a href="#p93">Konverzia reťazcov na veľké alebo malé písmená</a></li>
												<li>&ensp;&ensp;<a href="#p94">Hľadanie podreťazca</a></li>
												<li><a href="#p10">Aritmetické funkcie</a></li>
												<li>&ensp;&ensp;<a href="#101">Zaokrúhľovanie čísiel</a></li>
												<li>&ensp;&ensp;<a href="#p102">Generovanie náhodných čísel</a></li>
												<li><a href="#p11">Funkcie na manipuláciu s poliami</a></li>
												<li>&ensp;&ensp;<a href="#p111">Pridávanie nových prvkov</a></li>
												<li>&ensp;&ensp;<a href="#p112">Triedenie poli</a></li>
												<li><a href="#p12">Zhrnutie</a></li>

											</ul>
										</section>

								</div>
							</div>
<div class="col-8 col-12-medium imp-medium">
								<div id="content">

									<!-- Content -->
										<article>

											<h2 id = 'p1'>Funkcie v jazyku PHP</h2>

											<p>Táto časť bude venovaná výlučne funkciám. PHP funkcie sú podobné funkciám v iných programovacích jazykoch. Funkcia je pomenovaná časť programu, ktorá vykonáva konkrétnu úlohu. Moderné programovacie jazyky umožňujú programátorom definovať svoje vlastné funkcie. V prvej časti tejto sekcie sa pozrieme na tento proces.
Druhá časť je zameraná na predstavenie niektorých základných funkcií PHP. Vstavané funkcie PHP sú skutočnou silou tohto jazyka. Ich existuje viac, ako 1000. Takže ak sa chcete stať profesionálnym vývojárom v jazyku PHP, musíte venovať veľa času skúmaniu funkcií vstavaných funkcií. Preto by som skutočne odporučila stráviť nejaký čas skúmaním <a href = 'https://www.php.net/manual/en/indexes.functions.php' target = _blank'>oficiálnej dokumentácie o funkciách</a>.
Schopnosť písať vlastné funkcie je skvelá cnosť, ale najmúdrejší spôsob kódovania je použivať vstavané funkcie namiesto písania veci, ktoré už boli veľakrát napísané.


											<h3 id = 'p2'>Funkcie a kvalita kódu
</h3>
											<p>Predtým, ako sa pozrieme na proces definovania našich vlastných funkcií, spomeňme výhody funkcií.<br>
V porovnaní s kontinuálnym lineárnym kódom majú funkcie mnoho výhod.<p>
<ol>
<li>Ušetrite čas pri písaní programu.
</li>
<li>Zníženie počtu chýb syntaxe a ďalších chýb programovania.</li>
<li>Skrátenie času načítania programových súborov.
</li>
<li>Znížená doba vykonávania, pretože každá funkcia je kompilovaná iba raz, bez ohľadu na frekvenciu jej volaní.

</li>
</ol>
<h3 id = 'p3'>Vytvorenie funkcie v PHP</h3><p>

Deklarovanie funkcie sa začína slovom function. Kód funkcie je uvedený medzi zložené zátvorky.
<p>
<h5 class="card-header">Syntax</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'p1'>
                                                    
                                                    function meno_funkcie (argumenty) {<br>
&ensp;kód, ktorý sa má vykonať;<br>
}


                                                    
                                                    </p>
                                                    
                                                </div>      <p><p>
                                                <strong>Poznámka:</strong><br><ul> <li>Názov funkcie môže začínať písmenom alebo znakom podčiarknutia (nie číslom).</li>
                                                <li>Názvy funkcií NIE sú case-senzitívne.</li>
                                                </ul><p>

<strong>Tip:</strong> Lepšie, ked’ funkcia má názov, ktorý odráža to, čo ona robí.
<p><div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'a'> &lt;?php<br>
                                                       function hello() {<br>
    &ensp;echo "Hello world!";<br>
    
}<br>

hello();<br>
                                                    ?&gt;
                                                        </p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#a')">Kopírovať</button>
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">
                                                     <p class="card-text">Hello world!</p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div><p><p>
<h3 id = 'p4'>Argumenty funkcií PHP</h3><p>

Funkcie môžu mat nejaké vstupne hodnoty (argumenty). Argumenty sú uvedené za názvom funkcie, v zátvorkách. Môžete pridať ľubovoľný počet argumentov, stačí ich oddeliť čiarkou.<p>

Nasledujúci príklad má funkciu s jedným argumentom ($meno). Keď sa volá funkcia pozdrav(), odovzdáme jej meno (napr. Sara) a ono sa použije vo funkcii.<br><div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'b'> &lt;?php<br>
                                                       function pozdrav($meno) {<br>
&ensp;echo "Ahoj, $meno \n";<br>
}<br>

pozdrav('Katka');<br>

pozdrav('Marek');<br>

pozdrav('Silvia');<br>

                                                    ?&gt;
                                                        </p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#b')">Kopírovať</button>
                                                    </div>
                                                 </div>
                                             </div>
<div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">
                                                     <p class="card-text">Ahoj, Katka<br>Ahoj, Marek<br>Ahoj, Silvia<br></p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>
                                            
                                      <p><p>Nasledujúci príklad má funkciu s dvoma argumentmi ($meno a $priezvisko):
<p>                      
                                            
                                            <div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'c'> &lt;?php<br>
                                                      function pozdrav($meno, $priezvisko) {<br>
&ensp;echo "Ahoj, $meno $priezvisko";<br>
}<br>
pozdrav('Katka', 'Lucikova');<br>
pozdrav('Marek', 'Kopcik');<br>
pozdrav('Silvia', 'Surkova');<br>
 
                                                    ?&gt;
                                                        </p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#c')">Kopírovať</button>
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">
                                                     <p class="card-text">Ahoj, Katka Lucikova<br>Ahoj, Marek Kopcik<br>Ahoj, Silvia Surkova<br></p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>
                                            <p><p><h3 id = 'p5'>Predvolená hodnota argumentu</h3><p>
Nasledujúci príklad ukazuje, ako používať predvolenu hodnotu argumentu. Ak zavolame funkciu vyska() bez argumentov, použije sa predvolená hodnota ako argument:<p>
<div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'd'> &lt;?php<br>
                                                      function vyska(int $v = 50) {<br>
&ensp; echo "Výška je: $v \n";<br>
}<br>
vyska(350);<br>
vyska(); // použije predvolenú hodnotu 50<br>
vyska(135);<br>
 
                                                    ?&gt;
                                                        </p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#d')">Kopírovať</button>
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">
                                                     <p class="card-text">Výška je: 350<br>Výška je: 50<br>Výška je: 135</p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>
                                           <p><p><h3 id = 'p6'> Funkcie PHP - vracanie hodnôt</h3><p>
Ak chcete, aby funkcia vrátila hodnotu, použite príkaz return:<p>
<div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'e'> &lt;?php<br>
                                                       function sucet(int $x, int $y) {<br>
&ensp;$z = $x + $y;<br>
&ensp;return $z;<br>
}<br>
echo "5 + 10 =". sucet(5, 10);<br>
echo "7 + 13 =". sucet(7, 13);<br>
 
                                                    ?&gt;
                                                        </p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#e')">Kopírovať</button>
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">
                                                     <p class="card-text">5 + 10 = 15<br> 7 + 13 = 20</p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>
                                            <p><p><h3 id = 'p7'>Dátový typ hodnoty, ktorú funkcia vracia</h3><p>


PHP7 podporuje deklarácie typu pre príkaz return. Ak chcete deklarovať typ pre návrat funkcie, pri deklarovaní funkcie pridajte dvojbodku (:) a typ pred otvorenú zloženú zátvorku {. Môžete zadať iný typ návratnosti ako typy argumentov, ale uistite sa, že návrat je správny typ.<br>

V nasledujúcom príklade určíme typ návratu pre funkciu:<p>
<div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'f'> &lt;?php<br>
                                                       function sucet(float $a, float $b): float {<br>
&ensp;return $a + $b;<br>
}<br>
echo sucet(1.2, 5.2);<br>
 
                                                    ?&gt;
                                                        </p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#f')">Kopírovať</button>
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">
                                                     <p class="card-text">6.4</p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>
<p><p><h2 id = 'p8'>Úvod do vstavaných funkcií</h2>
Teraz je čas sa pozrieť na možnosti, ktoré PHP ponúka. Existuje neuveriteľne veľa vstavaných funkcií, ale my sa pozrieme iba na niektoré, najužitočnejšie z nich. Funkcie budú rozdelené do blokov. V každom bloku sa budeme zaoberať konkrétnym typom údajov. 
<br><strong>Poznámka:</strong> väčšina informácií v nasledujúcej časti bola prevzatá z <a href = "https://matthewhorne.me/learning-php-101-built-in-functions/ " target = _blank>tohto úžasného článku</a>.<p>
<h3 id = 'p9'>PHP reťazcové funkcie:</h3>
Reťazcové funkcie patria medzi najčastejšie používané. Ako webové vývojári, musíte často pracovať so zadávaním reťazcov, takže tieto základné operácie sú veľmi užitočné.<p>

<h1 id = 'p91'>Zistenie dĺžky reťazca</h1><p>
Funkcia <strong>strlen()</strong> vráti celkový počet znakov vrátane medzier.<p>
<div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'g'> &lt;?php<br>
                                                    $meno = "Katka";<br>
echo strlen ($meno);<br>
 
                                                    ?&gt;
                                                        </p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#g')">Kopírovať</button>
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">
                                                     <p class="card-text">5</p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>
                                            <p><p>
                                            <h1 id = 'p92'>Vrátenie časti reťazca</h1><p>

Funkcia <strong>substring()</strong> sa používa na vrátenie podreťazca alebo časti reťazca. Táto funkcia má 3 parametre, ktoré môžete odovzdať.<p><h5 class="card-header">Syntax</h5>
                                                <div class="card-body">
                                                                                                        
                                                    substr($retazec, $start, $dlzka);
                                                    </p>
                                                    
                                                </div>      <p><p>
                                                Kde:<un>
                                                <li>$retazec - reťazec. Vstup musí obsahovať najmenej jeden znak.</li>
<li>$start - indexovanie reťazcov sa začína od 0. Ak chcete začať od prvého znaku, zadajte 0. Záporná hodnota prejde na koniec reťazca.</li>
<li>$dlzka - (nepovinný) je počet znakov, ktoré funkcia vráti.</li>

                                                </ul>
                                                <p><div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'h'> &lt;?php<br>
                                                    $meno = "Katka Novakova";<br>
echo subst($meno, 0, 5);<br>
echo substr($meno, 6); <br>
echo substr($meno, -6, 6); <br>

                                                    ?&gt;
                                                        </p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#h')">Kopírovať</button>
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">
                                                     <p class="card-text">Katka<br>Novakova<br>vakova<br></p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>
                                            <p><strong>Poznámka:</strong> Ak nezadáte parameter $dlzka, táto funkcia vráti cely zvyšok reťazca od $start.


<h1 id = 'p92'>Konverzia reťazcov na veľké alebo malé písmená</h1><p>

Dve užitočné reťazcové funkcie, ktoré sa ľahko používajú, sú <strong>strtoupper()</strong> a <strong>strtolower()</strong>. Tieto funkcie môžu konvertovať celý reťazec na veľké alebo malé písmená.<p>
<div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'y'> &lt;?php<br>
                                                    $meno = "Katka";<br>
echo strtoupper($meno);<br>
echo strtolower($meno);<br>
 
                                                    ?&gt;
                                                        </p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#y')">Kopírovať</button>
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">
                                                     <p class="card-text">KATKA<br>katka</p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div><p><p>
                                            <h1 id = 'p93'>Hľadanie podreťazca</h1><p>

Niekedy musíme nájsť nejaký podreťazec v reťazci. Na toto slúži funkcia <strong>strpos()</strong>.
<h5 class="card-header">Syntax</h5>
                                                <div class="card-body">
                                                    
                                                    
                                                    strpos ($retazec, $podretazec, $offset)
                                                    
                                                    </p>
                                                    
                                                </div>      <p><p>
                                                 Kde:<un>
                                                <li>$retazec - toto je reťazec, v ktorom nájdete $podretazec od [0].</li>
<li>$podretazec - to je to, čo hľadáte.</li>
<li>$offset - (nepovinný) vyhľadávanie sa začne s tejto pozície v reťazci. Nemôže byť negatívny.
</li>

                                                </ul><p><div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'z'> &lt;?php<br>
                                                    $meno = "Katka Novakova";<br>
echo strpos($meno, "a"); <br>
echo strpos($meno, "va"); <br>
echo strpos($meno, "m"); <br>
 
                                                    ?&gt;
                                                        </p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#z')">Kopírovať</button>
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">
                                                     <p class="card-text">1<br>8<br>false</p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>
                                            <strong>Poznámka: strpos() </strong>rozlišuje veľké a malé písmená.
                                            <p><h2 id = 'p10'>Aritmetické funkcie</h2><p>

Okrem funkcii na manipulácie s reťazcami, v jazyku PHP tiež existujú funkcie na manipuláciu s číslami.


<p><h1 id = 'p101'>Zaokrúhľovanie čísiel</h1><p>Jednou z najbežnejšie používaných matematických funkcií je <strong>round()</strong>. Táto funkcia zaokrúhľuje čísla s desatinnými miestami nahor alebo nadol. Číslo môžete zaokrúhliť na celé číslo alebo na desatinné číslo.<p><h5 class="card-header">Syntax</h5>
                                                <div class="card-body">
                                                    <p class="card-text" >
                                                    
                                                    round($cislo, $presnost, $mode)

                                                    
                                                    </p>
                                                    
                                                </div>      <p>
                                                Kde:
                                                <un>
                                                <li>$cislo - je hodnota, ktorá sa má zaokrúhliť.
</li>
<li>$presnost - (nepovinný) počet čísiel za čiarkou, na ktoré sa musí číslo zaokrúhliť.</li>
<li>$mode - typ zaokrúhľovania. Môže byť jedným z nasledujúcich spôsobov: PHP_ROUND_HALF_UP, PHP_ROUND_HALF_DOWN, PHP_ROUND_HALF_EVEN, PHP_ROUND_HALF_ODD. Ďalšie podrobnosti a príklady režimov nájdete v <a href = 'https://www.php.net/manual/en/function.round.php' target = _blank>dokumentoch PHP</a>.<p>
</li>

                                                </ul>
                                                <div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'l'> &lt;?php<br>
                                                    $cislo = 3.55776232;<br>
echo round($cislo). "\n"; <br>
echo round($cislo, 1). "\n"; <br>
echo round($cislo, 3). "\n"; <br>

                                                    ?&gt;
                                                        </p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#l')">Kopírovať</button>
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">
                                                     <p class="card-text">4<br>3.6<br>3.558</p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>
                                            <p><p>Ak jednoducho potrebujete zaokrúhliť číslo na najbližšie celé číslo, sú funkcie vhodnejšie na tento účel.<ul>

<li><strong>ceil()</strong> - zaokrúhľuje zlomky nahor.</li>
<li><strong>floor()</strong> - zaokrúhľuje zlomky nadol.</li>
</ul><p>
<div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'm'> &lt;?php<br>
                                                    $cislo = 3,55776232;<br>
echo<br>
ceil($cislo). "\n";<br>
floor($cislo). "\n";<br>
 
                                                    ?&gt;
                                                        </p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#m')">Kopírovať</button>
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">
                                                     <p class="card-text">4<br>3</p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div><p><p>
                                            Obidve funkcie vyžadujú hodnotu a na rozdiel od round() nemajú žiadne ďalšie parametre.
                                            <p>



<h1 id = 'p102'>Generovanie náhodných čísel</h1><p>

Ďalšou veľmi bežnou matematickou funkciou je <strong>rand()</strong>, ktorá vracia náhodné číslo medzi dvoma číslami.<p>
<h5 class="card-header">Syntax</h5>
                                                <div class="card-body">
                                                    <p class="card-text" >
                                                    
                                                    rand($min, $max)<br>

                                                    
                                                    </p>
                                                    
                                                </div>
                                                <p>Kde:<ul>
                                                <li>$min - (nepovinný) nastavuje najnižšiu hodnotu, ktorá sa môže vrátiť. Predvolená hodnota je 0</li>
                                                <li>$max - (nepovinný) nastavuje maximálnu hodnotu, ktorá sa môže vrátiť. Predvolené vráti getrandmax().</li>
                                                
                                                </ul>
                                                <strong>Poznámka: getrandmax()</strong> vracia rožné hodnoty na rôznych počítačoch. Aby sa dozvedieť veľkosť tejto hodnoty, musíte skúsiť skúsiť tuto funkciu.<p>
                                                
                                                <h2 id = 'p11'>Funkcie na manipuláciu s poliami</h2><p>

<strong>array()</strong> je sama o sebe funkcia, ktorá ukladá viac hodnôt do jednej premennej. Okrem funkcie <strong>array()</strong> existuje množstvo ďalších funkcií na manipuláciu s poliami. Tu sa pozrieme na niektoré z najbežnejších.
<h1 id = 'p111'>Pridávanie nových prvkov</h1><p>
Pridať nove prvky na koniec poľa sa dá pomocou funkcie <strong>array_push()</strong>.
<p><h5 class="card-header">Syntax</h5>
                                                <div class="card-body">
                                                    <p class="card-text" >
                                                    
                                                    array_push ($pole, $hodnota1, $hodnota2)<br>

                                                    
                                                    </p>
                                                    
                                                </div> <p>Kde:<ul>
                                                <li>$pole - pole, do ktorého pridávate nové prvky.
</li>
                                                <li>$hodnota1 - (povinná) je prvá hodnota, ktorú pridávate na koniec poľa.</li>
                                                <li>$hodnota2 - (nepovinná) je druhá hodnota, ktorú pridávate na koniec poľa.</li>
                                                </ul><p>Môžete zadať toľko hodnôt, koľko potrebujete.

<p><div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'n'> &lt;?php<br>
                                                    $ovocie = array ();<br>
<br>
array_push($ovocie, 'Jablka');<br>
array_push($ovocie, 'Hruse');<br>
array_push($ovocie, 'Pomarance');<br>
array_push($ovocie, 'Banany');<br>

<br>
echo join (", ", $ovocie);<br>
 
                                                    ?&gt;
                                                        </p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#n')">Kopírovať</button>
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">
                                                     <p class="card-text">Jablka, Hruse, Pomarance, Banany</p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div><p><p>Je však lepšie uviesť všetky prvky poľa takto:<p>
                                            
                                            
                                            <div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'o'> &lt;?php<br>
                                                    ovocie = array();<br>


array_push ($ovocie,
'Jablka',
'Hruse',
'Pomarance',
'Banany');<br>

echo join (", ", $ovocie);<br>
 
                                                    ?&gt;
                                                        </p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#o')">Kopírovať</button>
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">
                                                     <p class="card-text">Jablka, Hruse, Pomarance, Banany</p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>
                                             
                                             
                                             
                                             <p>Výsledky sú rovnaké<p>
                                             <h1 id = 'p112'>Triedenie poli</h1><p>

Okrem pridávania položiek do poľa niekedy musíme ich usporiadať. PHP má na tieto účely funkciu s "prekvapujúcim' názvom <strong>sort()</strong>.<h5 class="card-header">Syntax</h5>
                                                <div class="card-body">
                                                    <p class="card-text">
                                                    
                                                    sort($pole, $sort_flags)
                                                    </p>
                                                    
                                                </div>      <p>Kde:<ul>
                                                <li>$pole - pole, ktoré chcete zoradiť.
</li>
                                                <li>$sort_flags - (nepovinný) mení správanie pri triedení. Viac informácií nájdete v <a href = 'https://www.php.net/manual/en/function.sort.php' target = _blank>dokumentácii PHP</a></li>
                                                </ul><p>V predvolenom nastavení funkcia usporiada pole abecedne alebo číselne.
<p><div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'p'> &lt;?php<br>
                                                    $ovocie = array();<br>

array_push ($ovocie, 'Jablka', 'Hruse', 'Pomarance', 'Banany');<br>

sort ($ovocie);<br>

echo join (", ", $ovocie);<br>

                                                    ?&gt;
                                                        </p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#p')">Kopírovať</button>
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">
                                                     <p class="card-text">Banany, Hruse, Jablka, Pomarance</p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div><p><p>Ak potrebujete zoradiť pole v opačnom poradí, môžete použiť funkciu  <strong>rsort()</strong>. Funguje úplne rovnako, ako sort(), s výnimkou, že výstup je obrátený.<p>
                                            <div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'q'> &lt;?php<br>
                                                    ovocie = array();<br>

array_push ($ovocie,
'Jablka',
'Hruse',
'Pomarance',
'Banany');<br>

rsort ($ovocie);<br>


echo join (", ", $ovocie); <br>
 
                                                    ?&gt;
                                                        </p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#q')">Kopírovať</button>
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">Výstup</h5>
                                                    <div class="card-body">
                                                     <p class="card-text">Pomarance, Jablka, Hruse, Banany</p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div><p><p>
                                            <h3 id = 'p12'>Zhrnutie</h3><p>
V tejto časti sme sa dozvedeli, ako definovať svoje vlastné funkcie a prečo by sme mali to robiť. Dozvedeli sme sa tiež, že ak máte príležitosť využiť funkciu, ktorú už napísal niekto iný, určite by ste to mali urobiť. Tiež sme sa zoznámili s niekoľkými zabudovanými funkciami. To, čo sme videli, je len malá časť funkcií, ktoré PHP má. Pre tých, ktorí plánujú získať silné znalosti a zručnosti v jazyku PHP, je potrebné ďalšie študovanie funkcií.

										</article>

								</div>
							</div>
						</div>
					</div>
				</div>

<?php require_once("footer.php"); ?>