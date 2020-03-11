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
											<p>V tejto sekcii sa pozrieme na podmienené a cyklické príkazy, ako if ... (else if)...(else)..., switch, while, do ... while.</p>
											<footer>
												<h3>Môže byť užitočné</h3>
												<a href="https://www.w3schools.com/php/php_looping.asp" class="button icon solid fa-info-circle" target = '_blank'>Slučky&ensp;&ensp;&ensp;&ensp;</a>
												<p><p><a href="https://www.w3schools.com/php/php_if_else.asp" class="button icon solid fa-info-circle" target = '_blank'>Podmienky</a>
											</footer>
										</section>

										<section>
											<h3>Obsah</h3>
											<ul class="style2">
												<li><a href="#p1">Operátory a slučky</a></li>
												<li><a href="#p2">Príkaz if</a></li>
												<li><a href="#p3">Príkaz if ... else</a></li>
												<li><a href="#p4">Príkaz if ... elseIf ... else</a></li>
												<li><a href="#p5">Príkaz switch</a></li>
												<li><a href="#p6">Príkaz while</a></li>
												<li><a href="#p7">Príkaz do ... while</a></li>
												<li><a href="#p8">Príkaz for</a></li>
												<li><a href="#p9">Príkaz foreach</a></li>
												<li><a href="#p10">Záver</a></li>
												
											</ul>
										</section>

								</div>
							</div>
							<div class="col-8 col-12-medium imp-medium">
								<div id="content">

									<!-- Content -->
										<article>

											<h2 id = 'p1'>Operátory a slučky</h2>
											<p>Pojem podmieňovacieho príkazu pravdepodobne je známy každému, kto niekedy pracoval s akýmkoľvek programovacím jazykom. Toto je jeden z najzákladnejších spôsobov, ako zmeniť smer vášho programu. Podmienené podmienky umožňujú rôzne reagovať na rôzne vstupy. Ako si viete predstaviť, je to rozhodujúce pre dynamické webové stránky, na účely ktorých sa používa PHP.
<br>V PHP existujú tri druhy konečných podmieňovacích príkazov:
<ul>
<li>if ... (elseif) ... else ...</li>
<li>switch</li>
<li>? (o tomto operátore už sme spomenuli v časti Operátory, preto tu sa už nim zaoberať nebudeme)</li>
</ul>
<br>Neskôr v tejto sekcii sa tiež pozrieme na slučky for a while.

<h3 id = 'p2'>Príkaz if</h3>
<p>Príkaz if vykoná nejaký kód, ak je jedna podmienka splnená.
<p><h5 class="card-header">Syntax</h5>
                                                <div class="card-body">
                                                    <p class="card-text">
                                                    
                                                    if (podmienka) {<br>
     &ensp;kód, ktorý sa má vykonať, ak je splnená podmienka;<br>
}

                                                    
                                                    </p>
                                                </div>      <p><p>
                                                <h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text">
                                                    
                                                    &lt;?php<br>
&ensp;$t = 10;<br>

&ensp;if ($t &lt; 20) {<br>
     &ensp;&ensp;echo "Prajem pekný deň!";<br>
&ensp;}<br>
?&gt;
<h3 id = 'p3'>Príkaz if ... else</h3>
<p>Príkaz if ... else vykoná nejaký kód, ak je podmienka pravdivá, a iný kód, ak je táto podmienka nepravdivá.<p>
<h5 class="card-header">Syntax</h5>
                                                <div class="card-body">
                                                    <p class="card-text">
                                                    
                                                    if (podmienka) {<br>
     &ensp;kód, ktorý sa má vykonať, ak je splnená podmienka;<br>
}else {<br>
&ensp;kód, ktorý sa má vykonať, ak je podmienka nepravdivá;<br>
}                                                  
                                                    </p> 
                                                
                                                </div>      <p><p>
                                                    <h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'a'>
                                                    
                                                    &lt;?php<br>
                                                    $t = 30;<br>

if ($t &lt; 20) <br>
     &ensp;echo "Prajem pekný deň!";<br>
} else {<br>
     &ensp;echo “Prajem dobrú noc!“;<br>
}<br>
 
                                                    ?&gt;
                                                    
                                                    </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#a')">Kopírovať</button>
                                                </div>      <p><p>
                                                <h3 id = 'p4'>Príkaz if ... elseIf ... else</h3>
                                                <p>Príkaz if ... elseif ... else vykonáva rôzne kódy pre viac ako dve podmienky.<p>
                                                <h5 class="card-header">Syntax</h5>
                                                <div class="card-body">
                                                    <p>
                                                    
                                                    if (podmienka) {<br>
     &ensp;kód, ktorý sa má vykonať, ak je táto podmienka splnená;<br>
} elseif (podmienka) {<br>
     &ensp;kód, ktorý sa má vykonať, ak je prvá podmienka nesprávna a táto podmienka je pravdivá;<br>
} else {<br>
     &ensp;kód, ktorý sa má vykonať, ak sú všetky podmienky nepravdivé;<br>
}<br>

                                                    </p>
                                                    
                                                </div>      <p><p>
                                                <h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'b'>
                                                    
                                                    &lt;?php<br>
                                                       $t = 15;<br>

if ($t &lt; 10) {<br>
     &ensp;echo “Dobré ráno!“;<br>
} elseif ($t &gt; 20) {<br>
&ensp;echo “Prajem dobrú noc!“;<br>
} else {<br>
     &ensp;echo "Prajem pekný deň!";<br>
}<br>
 
                                                    ?&gt;
                                                    
                                                    </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#b')">Kopírovať</button>
                                                </div>      <p><p>

<h3 id = 'p5'>Príkaz switch</h3>
<p>Príkaz switch sa používa na vykonávanie rôznych kusov kódu na základe rôznych podmienok.<p>      <div class="card-body">
                                                    <p>
                                                    
                                                    switch (n) {<br>
&ensp;case prípad1:<br>
&ensp;&ensp;kód, ktorý sa má vykonať, ak n = hodnota1;<br>
&ensp;&ensp;break;<br>
&ensp;case prípad2:<br>
&ensp;&ensp;kód, ktorý sa má vykonať, ak n = hodnota2;<br>
&ensp;&ensp;break;<br>
&ensp;case pripad3:<br>
&ensp;&ensp;kód, ktorý sa má vykonať, ak n = hodnota3;<br>
&ensp;&ensp;break;<br>
&ensp;...<br>
&ensp;default:<br>
&ensp;&ensp;kód, ktorý sa má vykonať, ak hodnota n je rožná od všetkých hodnot hore;<br>
}<br>

<p><strong>Ako to funguje:</strong> Máme jeden výraz n (najčastejšie premennú). Hodnota n sa potom porovná s hodnotami každého prípadu. Ak hodnota n sa rovná hodnote v nejakom prípade, vykoná sa blok kódu spojený s týmto prípadom. Pomocou kľúčového slova break zabránite automatickému vykonávaniu ďalšieho porovnávania a ďalších prípadov. Ak nepoužívate slovo break, vykonajú sa všetky prípady spĺňajúce podmienku. Ak sa hodnota n sa nerovná hodnote žiadneho prípadu, použije sa kód, ktorý nasleduje kľúčovému slovu default.
                                                    
                                                    
                                                </div>        
                                                <h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'c'>
                                                    
                                                    &lt;?php<br>
                                                    $obfarba = "cervena";<br>
switch ($obfarba) {<br>
&ensp;case "červena“:<br>
&ensp;&ensp;echo „Vaša obľúbená farba je červená!“;<br>
&ensp;&ensp;break;<br>
&ensp;case "modra“:<br>
&ensp;&ensp;echo "Vaša obľúbená farba je modrá!“;<br>
&ensp;&ensp;break;<br>
&ensp;case "zelena“:<br>
&ensp;&ensp;echo "Vaša obľúbená farba je zelená!“;<br>
&ensp;&ensp;break;<br>
&ensp;default:<br>
&ensp;&ensp;echo "Vaša obľúbená farba nie je ani červená, ani modrá, ani zelená!“;<br>
}<br>
 
                                                    ?&gt;
                                                    
                                                    </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#c')">Kopírovať</button>
                                                </div>      <p><p>  
                                                <p>Nasledujúce niekoľko príkladov sú veľmi podobné. Odlišujú sa len kľúčovými slovami break a default. Prezrite si ich, aby ste lepšie porozumeli tomu, ako funguje príkaz switch.<p>
                                                <p>Porovnajte nasledujúce dva príklady a ich výstupy:<p>
                                                
                                                
                                                <div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'd'> &lt;?php<br>
                                                    $i=1;<br>
switch ($i) {<br>
    &ensp;   case 0:<br>
&ensp;       case 1:<br>
    &ensp;   case 2:<br>
        &ensp;   &ensp;   echo "i je menej ako 3, ale nie negatívne";<br>
&ensp;   &ensp;           break;<br>
&ensp;       case 3:<br>
&ensp;   &ensp;           echo "i je 3";<br>
}<br>
 
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
                                                     <p class="card-text">i je menej ako 3, ale nie negatívne</p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>
                                            
                                            <div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'e'> &lt;?php<br>
                                                    &ensp;$i=1;<br>
switch ($i) {<br>
    &ensp;case 0:<br>
&ensp;&ensp;echo "i = 0";<br>
&ensp;&ensp;        break;<br>
&ensp;    case 1:<br>
&ensp;&ensp;echo "i = 1";<br>
&ensp;&ensp;        break;<br>
&ensp;    case 2:<br>
&ensp;&ensp;        echo "i = 2";<br>
&ensp;&ensp;        break;<br>
&ensp;    case 3:<br>
      &ensp;  echo "i = 3";<br>
}<br>
 
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
                                                     <p class="card-text">i=1</p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>                                        
                                                    <p>V prvom príklade prve dva prípady neobsahovali break, takže aj keď $i bolo rovné 0 alebo 1, príkaz bol vykonaný, až kým nedosiahol prvému break. V druhom príklade však každý prípad obsahoval obsahovalo svoj vlastný break, takže sme mohli okamžite vidieť výsledok každého prípadu a hneď potom príkaz konci svoje vykonanie.
V týchto príkladoch sa hodnota $i zhodovala s jednou z hodnôt v každom prípade, takže sme nepotrebovali default kód. Čo by sa však stalo, keby $i bolo rovné 8? Uvidíme v nasledujúcom príklade.<p>
<div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'f'> &lt;?php<br>
                                                    &ensp;$i=8;<br>
switch ($i) {<br>
    &ensp;case 0:<br>
&ensp;&ensp;echo "i = 0";<br>
&ensp;&ensp;        break;<br>
&ensp;    case 1:<br>
&ensp;&ensp;echo "i = 1";<br>
&ensp;&ensp;        break;<br>
&ensp;    case 2:<br>
&ensp;&ensp;        echo "i = 2";<br>
&ensp;&ensp;        break;<br>
&ensp;    case 3:<br>
&ensp;&ensp;        echo "i = 3";<br>
&ensp;&ensp;        break;<br>
}<br>

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
                                                     <p class="card-text"> </p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>
<p>Ukazuje sa, že v tomto prípade nedostaneme ani žiadnu chybu, ani žiadny výstup, a program bude hladko vykonaný. Prečo teda potrebujeme default kód?
Ak vyvíjate komplexnú webovú stránku, veľmi pravdepodobne sa dostanete do situácie, keď sa niečo funguje zle alebo nefunguje vôbec. Často, ak zadáte default kód, ktorý hovorí, že sa v danej konkrétnej časti niečo pokazilo, je oveľa ľahšie problém vyriešiť. Navyše týmto spôsobom si môžete byť vždy istí, že táto časť bola vykonaná. Ak po vykonaní príkazu switch nevidíte žiadne výsledky a nezadali ste predvolený kód, nemôžete si byť istí, či sa nenašla žiadna zhoda alebo program túto časť nevykonal vôbec.
<p>Po tom, čo sme povedali, urobme veci správne.<p>
<div class="row">
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Vstup</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'f'> &lt;?php<br>
                                                    &ensp;$i=8;<br>
switch ($i) {<br>
    &ensp;case 0:<br>
&ensp;&ensp;echo "i = 0";<br>
&ensp;&ensp;        break;<br>
&ensp;    case 1:<br>
&ensp;&ensp;echo "i = 1";<br>
&ensp;&ensp;        break;<br>
&ensp;    case 2:<br>
&ensp;&ensp;        echo "i = 2";<br>
&ensp;&ensp;        break;<br>
&ensp;    case 3:<br>
&ensp;&ensp;        echo "i = 3";<br>
&ensp;&ensp;        break;<br>
&ensp;default:
&ensp;&ensp;     echo "Hodnota neidentifikovana";

}<br>

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
                                                     <p class="card-text"> Hodnota neidentifikovana</p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>
<h3 id = 'p6' >Príkaz while</h3>
<p>Slučka while vykonáva blok kódu, pokiaľ je zadaná podmienka splnená.
<p><h5 class="card-header">Syntax</h5>
                                                <div class="card-body">
                                                    <p>
                                                    
                                                    while (podmienka je pravdivá) {<br>
&ensp;kód, ktorý sa má vykonať;<br>
}<br>

                                                    </p>
                                                    
                                                </div>      <p><p>
                                                <h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'g'>
                                                    
                                                    &lt;?php<br>
                                                       $x = 1;<br>
while ($x <= 5) {<br>
     &ensp;echo "Číslo je: $ x \n";<br>
     &ensp;$x++;<br>
}<br>
 
                                                    ?&gt;
                                                    
                                                    </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#g')">Kopírovať</button>
                                                </div>      <p><p>
                                                
                                                <h3 id = 'p7' >Príkaz do ... while</h3>
<p>Slučka do ... while vždy vykoná blok kódu aspoň raz, potom skontroluje podmienku a opakuje slučku, pokiaľ je zadaná podmienka pravdivá.
<p><h5 class="card-header">Syntax</h5>
                                                <div class="card-body">
                                                    <p>
                                                    
                                                    do {<br>
&ensp;kód, ktorý sa má vykonať;<br>
} while (podmienka je pravdivá);<br>


                                                    </p>
                                                    
                                                </div>      <p><p>
                                                <h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'g'>
                                                    
                                                    &lt;?php<br>
                                                       $x = 1;
<br>
do {<br>
    &ensp;echo "Cislo je: $x \n";<br>
&ensp;    $x++;<br>
} while ($x <= 10);
<br>
 
                                                    ?&gt;
                                                    
                                                    </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#g')">Kopírovať</button>
                                                </div>      <p><p>


											<h3 id = 'p8'>Príkaz  for</h3><p>
Slučka for  sa používa, keď vopred viete, koľkokrát by sa mala nejaka cast kodu sa opakovat.
<p><h5 class="card-header">Syntax</h5>
                                                <div class="card-body">
                                                    <p>
                                                    
                                                    for (od; do;  prirastok) {<br>
&ensp;kód, ktorý sa má vykonať;<br>
}<br>



                                                    </p></div> 
                                                    <p><ul><strong>Parametre:</strong>
<li>od: Inicializuje hodnotu počítadla slučky</li>
<li>do: Vyhodnotené pre každú iteráciu slučky. Ak sa vyhodnotí ako True, slučka pokračuje. Ak sa vyhodnotí na False, slučka končí.</li>
<li>prirastok: Zvyšuje hodnotu počítadla slučky</li>
</ul>
<p>Nasledujúci príklad zobrazuje čísla od 0 do 10:

                                                    
                                                
                                                <h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'h'>
                                                    
                                                    &lt;?php<br>
                                                       for ($x = 0; $x <= 10; $x ++) {<br>
&ensp;echo "Číslo je: $ x \n";<br>
}

<br>
 
                                                    ?&gt;
                                                    
                                                    </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#h')">Kopírovať</button>
                                                </div>      <p><p>
                                                <h3 id = 'p9'>Príkaz foreach</h3><p>
Slučka foreach pracuje iba na poliach a používa sa na opakovanie každej dvojice kľúč / hodnota v poli.<p>
<p><h5 class="card-header">Syntax</h5>
                                                <div class="card-body">
                                                    <p>
                                                        foreach ($array as $value) {<br>
&ensp;kód, ktorý sa má vykonať;<br>
}<br>
                                                    </p></div>  
                                                   <p> Pre každú iteráciu slučky sa hodnota aktuálneho prvku poľa priradí hodnote $value a  ukazovateľ poľa sa posunie o jeden, až kým nedosiahne posledný prvok poľa.
<p>Nasledujúci príklad ukazuje slučku, ktorá vynesie hodnoty poľa $farby:

                                                   

                                                    
                                                
                                                <h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'y'>
                                                    
                                                    &lt;?php<br>
                                                       $farby = array ("cervena", "zelena", "modra", "zlta");<br>
foreach ($farby ako $hodnota ) {<br>
&ensp;echo "$hodnota \n";<br>

}

<br>
 
                                                    ?&gt;
                                                    
                                                    </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#y')">Kopírovať</button>
                                                </div>      <p><p>

                                                
                       <h2 id = 'p10'>Záver</h2><p>
V tejto časti sme sa pozreli na všetky podmienené príkazy a slučky v jazyku PHP. Keď viete ich použivať, dokážete robiť veľa vecí. Tieto vyhlásenia sú jednoduché, ale sú základom všetkých programov, ktoré v budúcnosti napíšete.
                         
                                                
                                                
                                                
										</article>

								</div>
							</div>
						</div>
					</div>
				</div>

<?php require_once("footer.php"); ?> 
