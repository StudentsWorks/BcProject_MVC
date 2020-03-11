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
											<p>V tejto časti sa pozrieme na všetky druhy operátorov, ktoré existujú v PHP a na ich funkcie.</p>
											<footer>
											    <h3>Môže byť užitočné</h3>
												<a href="https://www.w3schools.com/php/php_operators.asp" class="button icon solid fa-info-circle" target = '_blank'>Operátory</a>
											</footer>
										</section>

										<section>
											<h3>Obsah</h3>
											<ul class="style2">
												<li><a href="#p1">Operátory</a></li>
												<li><a href="#p2">Aritmetické operátory</a></li>
												<li><a href="#p3">Operátory priradenia</a></li>
												<li><a href="#p4">Porovnávacie operátory</a></li>
												<li><a href="#p5">Operátory implementácie/dekrementácie</a></li>
												<li><a href="#p6">Logické operátory</a></li>
												<li><a href="#p7">Reťazcové operátory</a></li>
												<li><a href="#p8">Operátori podmieneného priradenia</a></li>
												<li><a href="#p9">Priorita operátorov</a></li>
											</ul>
										</section>

								</div>
							</div>
							<div class="col-8 col-12-medium imp-medium">
								<div id="content">

									<!-- Content -->
										<article>

											<h2 id = 'p1'>Operátory</h2>

											<p>Operátory sú matematické, reťazcové, logické a porovnávacie príkazy, ako sú plus, mínus, násobenie a delenie. Operátori PHP sú riadené štandardnou logikou, ako aj v iných programovacích jazykoch, preto porozumieť im je dosť ľahké. Táto časť je zameraná na oboznámenie sa s kategóriami operátorov a funkciami každej kategórie.
											<p><h3 id = 'p2'>Aritmetické operátory</h3>
											<p>Aritmetické operátory sa používajú na vykonávanie matematických operácií. Môžu byť použite pre štyri základné operácie (sčítanie, odčítanie, násobenie a delenie), ako aj nájdenie modulu (zvyšok delenia) a zvýšenie alebo zníženie hodnoty o jednu.<p>
											<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Operátor</th>
      <th scope="col">Názov</th>
      <th scope="col">Príklad</th>
      <th scope="col">Výsledok</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">+</th>
      <td>Súčet</td>
      <td>$x + $y</td>
      <td>súčet $x a $y</td>
    </tr>
    <tr>
      <th scope="row">-</th>
      <td>Odčítanie</td>
      <td>$x - $y</td>
      <td>rozdiel $x a $y</td>
    </tr>
    <tr>
      <th scope="row">*</th>
      <td>Násobenie</td>
      <td>$x * $y</td>
      <td>násobok $x a $y</td>
    </tr>
    <tr>
      <th scope="row">/</th>
      <td>Delenie</td>
      <td>$x / $y</td>
      <td>kvocient z $x a $y</td>
    </tr>
    <tr>
      <th scope="row">%</th>
      <td>Modul</td>
      <td>$x % $y</td>
      <td>zvyšok delenia $x na $y</td>
    </tr>
    <tr>
      <th scope="row">**</th>
      <td>Umocňovanie</td>
      <td>$x ** $y</td>
      <td>výsledok $y-tej mocniny $x</td>
    </tr>
  </tbody>
</table>
<p>                                      <h3 id = 'p3'>Operátory priradenia</h3><p>
Tieto operátory sa používajú na priradenie hodnôt k premenným. Patria sem najjednoduchší operátor =, ako aj operátori + =, - = atď.
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Priradenie</th>
      <th scope="col">Rovnaké ako</th>
      <th scope="col">Popis</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">$x = $y</th>
      <th>$x = $y</td>
      <td>ľavý operand sa nastaví na hodnotu práveho</td>
    </tr>
    <tr>
      <td scope="row">$x = $x + $y</th>
      <th>$x += $y</td>
      <td>sčitanie</td>
    </tr>
    <tr>
      <td scope="row">$x = $x - $y</th>
      <th>$x -= $y</td>
      <td>odčitanie</td>
    </tr>
    <tr>
      <td scope="row">$x = $x * $y</th>
      <th>$x *= $y</td>
      <td>násobok</td>
    </tr>
    <tr>
      <td scope="row">$x = $x / $y</th>
      <th>$x /= $y</td>
      <td>delenie</td>
    </tr>
    <tr>
      <td scope="row">$x = $x % $y</th>
      <th>$x %= $y</td>
      <td>modul</td>
    </tr>
  </tbody>
</table>
                        <p><h3 id = 'p4'>Porovnávacie operátory</h3><p>
Používajú sa na porovnanie hodnoty premenných. Porovnávacie operátory sú veľmi užitočné v príkazoch if.

<br>Všimnite si, že operátory = a == sú určené pre rôzne ciele. Prvý je operátorom priradenia, ale druhý je operátorom porovnávania.<p>
 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Operátor</th>
      <th scope="col">Názov</th>
      <th scope="col">Príklad&ensp;&ensp;</th>
      <th scope="col">Popis</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">==</th>
      <td>Rovná sa</td>
      <td>$x == $y</td>
      <td>Vráti hodnotu true, ak hodnota $x rovná sa $y</td>
    </tr>
    <tr>
      <th scope="row">===</th>
      <td>Identickosť</td>
      <td>$x === $y</td>
      <td>Vráti hodnotu true, ak hodnota $x rovná sa $y a premenné sú rovnákeho typu</td>
    </tr>
    <tr>
      <th scope="row">!=</th>
      <td>Nerovná sa</td>
      <td>$x != $y</td>
      <td>Vráti true, ak $x sa nerovná $y</td>
    </tr>
    <tr>
      <th scope="row">&lt;&gt;</th>
      <td>Nerovná sa</td>
      <td>$x &lt;&gt; $y</td>
      <td>Vráti true, ak $x sa nerovná $y</td>
    </tr>
    <tr>
      <th scope="row">!==</th>
      <td>Nie identickosť</td>
      <td>$x !== $y</td>
      <td>Vráti true, ak premenná $x nie je rovná $y alebo premenné nie sú rovnakého typu</td>
    </tr>
    <tr>
      <th scope="row">&gt;</th>
      <td>Väčši ako</td>
      <td>$x &gt; $y</td>
      <td>Vráti true, ak $x je väčšia ako $y</td>
    </tr>
    <tr>
      <th scope="row">&lt;</th>
      <td>Menší ako</td>
      <td>$x &lt; $y</td>
      <td>Vráti true, ak $x je menšia ako $y</td>
    </tr>
    <tr>
      <th scope="row">&gt;=</th>
      <td>Väčši ako alebo rovná sa</td>
      <td>$x &gt;= $y</td>
      <td>Vráti true, ak je $x väčšia alebo rovná $y</td>
    </tr>
    <tr>
      <th scope="row">&lt;=</th>
      <td>Menší ako alebo rovná sa</td>
      <td>$x &lt;= $y</td>
      <td>Vráti true, ak je $x menšia alebo rovná $y</td>
    </tr>
    <tr>
      <th scope="row">&lt;=&gt;</th>
      <td>Kozmická loď</td>
      <td>$x &lt;=&gt; $y</td>
      <td>Vráti celé číslo menšie ako, rovné alebo väčšie ako nula, v závislosti od toho, či je $ x menšie ako, rovné alebo väčšie ako $ y. Zavedené v PHP 7.</td>
    </tr>
  </tbody>
</table>
<p>
<h3 id = 'p5'>Operátory implementácie/dekrementácie</h3>
Operátory inkrementácie sa používajú na zvýšenie hodnoty premennej.
Operátory dekrementácie sa používajú na zníženie hodnoty premennej.
<p><table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Operátor</th>
      <th scope="col">Názov</th>
      <th scope="col">Popis</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">++$x</th>
      <td>Preinkrementácia</td>
      <td>Zvyšuje $x o jeden, potom vracia $x</td>
    </tr>
    <tr>
      <th scope="row">$x++</th>
      <td>Postinkrementácia</td>
      <td>Vrácia $x a potom zvyšuje $x o jeden</td>
    </tr>
    <tr>
      <th scope="row">--$x</th>
      <td>Predekrementácia</td>
      <td>Dekrementuje $x o jeden, potom vracia $x</td>
    </tr>
    <tr>
      <th scope="row">$x--</th>
      <td>Postdekrementácia</td>
      <td>Vráti $x a potom dekrementuje $x o jeden</td>
    </tr>
  </tbody>
</table>
<h3 id = 'p6'>Logické operátory</h3>
<p>Logické operátory PHP sa používajú na kombinovanie podmienených príkazov.<p>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Operátor</th>
      <th scope="col">Názov</th>
      <th scope="col">Príklad&ensp;&ensp;</th>
      <th scope="col">Popis</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">and</th>
      <td>And</td>
      <td>$x and $y</td>
      <td>true, ak sú $x aj $y true</td>
    </tr>
    <tr>
      <th scope="row">or</th>
      <td>Or</td>
      <td>$x or $y</td>
      <td>true, ak buď $x alebo $y je true</td>
    </tr>
    <tr>
      <th scope="row">xor</th>
      <td>Xor</td>
      <td>$x xor $y</td>
      <td>true, ak buď $x alebo $y je true, ale nie obidve</td>
    </tr>
    <tr>
      <th scope="row">&&</th>
      <td>And</td>
      <td>$x && $y</td>
      <td>true, ak aj $x aj $y je true</td>
    </tr>
    <tr>
      <th scope="row">||</th>
      <td>Or</td>
      <td>$x || $y</td>
      <td>true, ak buď $x alebo $y je true</td>
    </tr>
    <tr>
      <th scope="row">!</th>
      <td>Not</td>
      <td>!$x</td>
      <td>true, ak $x nie je true</td>
    </tr>
  </tbody>
</table>
<h3 id = 'p7'>Reťazcové operátory</h3><p>
PHP má dva operátory, ktoré sú špeciálne navrhnuté pre reťazce.<p>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Operátor</th>
      <th scope="col">Názov</th>
      <th scope="col">Príklad&ensp;&ensp;</th>
      <th scope="col">Popis</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">.</th>
      <td>Zreťazenie</td>
      <td>$x.$y</td>
      <td>Spojenie $x a $y</td>
    </tr>
    <tr>
      <th scope="row">.=</th>
      <td>Zreťazenie a priradenie</td>
      <td>$x.=$y</td>
      <td>Pripojí $y k $x</td>
    </tr>
  </tbody>
</table>
<h3 id = 'p8'>Operátori podmieneného priradenia</h3><p>
Operátory podmieneného priradenia PHP sa používajú na nastavenie hodnoty v závislosti od podmienok:<p>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Operátor</th>
      <th scope="col">Názov</th>
      <th scope="col">Príklad&ensp;&ensp;</th>
      <th scope="col">Popis</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">+</th>
      <td>Spojenie</td>
      <td>$x + $y</td>
      <td>Spojenie $x a $y</td>
    </tr>
    <tr>
      <th scope="row">==</th>
      <td>Rovná sa</td>
      <td>$x == $y</td>
      <td>Vráti hodnotu true, ak $x a $y majú rovnaké páry kľúč / hodnota</td>
    </tr>
    <tr>
      <th scope="row">===</th>
      <td>Identickosť</td>
      <td>$x === $y</td>
      <td>Vráti hodnotu true, ak $x a $y majú rovnaké páry kľúč/hodnota v rovnakom poradí a rovnakého typu</td>
    </tr>
    <tr>
      <th scope="row">!=</th>
      <td>Nerovná sa</td>
      <td>$x != $y</td>
      <td>Vráti true, ak $x sa nerovná $y</td>
    </tr>
    <tr>
      <th scope="row">&lt;&gt;</th>
      <td>Nerovná sa</td>
      <td>$x &lt;&gt; $y</td>
      <td>Vráti true, ak $x sa nerovná $y</td>
    </tr>
    <tr>
      <th scope="row">!==</th>
      <td>Nie identickosť</td>
      <td>$x !== $y</td>
      <td>Vráti hodnotu true, ak $x a $y majú rôzné páry kľúč/hodnota lebo v rôznom poradí</td>
    </tr>
  </tbody>
</table>

<h3 id = 'p9'>Priorita operátorov:</h3>
<p>Nasledujúci zoznam ukazuje prioritu operátorov (čím bližšie sú ku koncu, tým menšiu prioritu oni majú).<p>

<ol>
<li>()</li>
<li>++ --</li>
<li>!</li>
<li>* / %</li>
<li>+ -</li>
<li><< >></li>
<li>< <= > >= <></li>
<li>== != === !== </li>
<li>&</li>
<li>^</li>
<li>|</li>
<li>&&</li>
<li>||</li>
<li>?:</li>
<li>= += –= *= /= .= %= &= != ^= <<= >>=</li>
<li>and</li>
<li>xor</li>
<li>or</li>
</ol>





										</article>

								</div>
							</div>
						</div>
					</div>
				</div>

<?php require_once("footer.php"); ?> 
