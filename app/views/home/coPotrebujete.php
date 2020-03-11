<?php require_once("header.php"); ?> 

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-4 col-12-medium">
								<div id="sidebar">

									<!-- Sidebar -->
										<section>
											<h3>Čo je to vlastne PHP?</h3>
											<p>Ak ste tento článok ešte nečítali, odporúčam vám to urobiť teraz.</p>
											<footer>
												<a href="coJePHP.html" class="button icon solid fa-info-circle">Čítať</a>
											</footer>
										</section>

										<section>
											<h3>Obsah</h3>
											<ul class="style2">
												<li><a href="#p1">Ahoj;)</a></li>
												<li><a href="#p2">Prečo by som trvala na tom, aby ste nainštalovali PHP lokálne (na váš vlastný počítač):</a></li>
												<li><a href="#p3">Je na čase, aby ste sa trochu zmätili:</a></li>
												<li><a href="#p4">1. Webový server</a></li>
												<li><a href="#p5">2.Programovací jazyk pre prácu s databázami</a></li>
												<li><a href="#p6">3.Štruktúra webových stránok</a></li>
												<li><a href="#p7">4.Stylovanie webových stránok</a></li>
												<li><a href="#p8">5.Ako keby ste nemali dosť: JavaScript</a></li>
												<li><a href="#p9">6.Jednoduchý textový editor:</a></li>
												<li><a href="#p10">Urobte si prestávku a vracajte sa:</a></li>
											</ul>
										</section>

								</div>
							</div>
							<div class="col-8 col-12-medium imp-medium">
								<div id="content">

									<!-- Content -->
										<article>

											<h2 id='p1'>Ahoj;)</h2>

											<p>Gratulujem, za minútu začnete študovať PHP. Ak si stále nie ste istí, čo je PHP a či naozaj potrebujete komplikovať svoj život ďalším programovacím jazykom, odporúčam tento článok. Tí, ktorí sa rozhodli, že PHP je naozaj to, čo pomôže im splniť ich ciele, navrhujem hneď sa ponoriť do inštalačného procesu, aby sa zbaviť všetkých ciest späť.
</p>

											<h3 id='p2'>Prečo by som trvala na tom, aby ste nainštalovali PHP lokálne (na váš vlastný počítač):</h3>
											<p>Existuje určitá kategória ľudí, ku ktorým som patrila aj ja, ktorí neradi pridávajú do svojich počítačov akýkoľvek druh odpadu. Ako čoraz viac a viac sa ponárate do programovania, začínate vidieť, že neustála inštalácia ďalšieho kódu, ktorý napísali iní programátori (knižnice, rámce atď.) je nevyhnutnou súčasťou profesionality, takže nesmiete sa toho báť. Podobne, keď začnete pracovať s novým jazykom, buďte pripravení nainštalovať do počítača veľa nových vecí. Je dobrou praxou vždy čítať o tom, čo inštalujete a kedy a načo sa ono používa, ale, ako figurína v novom predmete, sa často nenachádzate v pozícii, v ktorej by ste sa mohli hádať. Medzi ten odpad, okrem mnohých ďalších vecí, zahrňujú lokálnu inštaláciu akéhokoľvek druhu softvéru, ktorý môže byť použitý prostredníctvom internetu. Je pravda, že môžete ľahko nájsť online PHP editory, ako napríklad <a href = 'http://sandbox.onlinephpfunctions.com/'>tento</a>, a ako začiatočnícky mohli by ste pracovať s PHP takýmto spôsobom, aby uľahčiť si život. Ale musíte sa zameriavať na to, aby sa stali profesionálmi vo web vývoji, a nato potrebujete sa učiť profesionálnych zručnosti od začiatku. Lokálna práca s PHP je úplným začiatkom vašej cesty k tomuto cieľu. Preto sa umiestnite, pozorne si prečítajte článok a a potom pokračujte v čítaní ďalších článkov, ktoré budú o inštalačnom procese.
</p>
											
											<h2 id='p3'>Je na čase, aby ste sa trochu zmätili:</h2>
											<p>Napriek tomu, že budete pracovať s PHP, pred vykonávaním aj najjednoduchšieho programu v jazyku je dosť  vecí, ktoré musíte nainštalovať. V tejto časti sa podrobne pozrieme na každú z nich.</p>
											
											<h3 id='p4'>1. Webový server</h3>
											<p>Aby sme ľahko pochopili, čo je webový server, použijem metaforu, ktorý som našla v <a href = 'https://www.wpbeginner.com/glossary/apache/' target = '_blank'>tomto  článku</a>:
“Zaujíma vás, čo je webový server? No, web server je ako hostiteľ reštaurácie. Keď prídete do reštaurácie, hostiteľ vás pozdraví, skontroluje vaše informácie o rezervácii a vezme vás ku vašemu stolu. Podobne, ako hostiteľ reštaurácie, webový server kontroluje požadovanú webovú stránku a vyvoláva ju pre vás. Webový server však nie je len váš hostiteľ, ale aj váš čašník. Akonáhle nájde požadovanú webovú stránku, podáva vám aj webovú stránku [angl.webpage]. Webový server je tiež Maitre D reštaurácie. Vybavuje vašu komunikáciu s webovou stránkou [angl. website] (kuchyňou), spracováva vaše požiadavky, zabezpečuje, že ostatní zamestnanci (moduly) sú pripravení vám slúžiť. Je to aj upratovač, pretože čistí stoly (pamäť, cache, moduly) a upratuje pred príchodom nových zákazníkov.
<p>
Takže v podstate webový server je softvér, ktorý prijíma vašu požiadavku na prístup na webovú stránku. Spustí niekoľko bezpečnostných kontrol na vašej požiadavke HTTP a prenesie vás na webovú stránku. V závislosti od požadovanej stránky môže stránka požiadať server o spustenie niekoľkých ďalších modulov pri generovaní dokumentu, ktorý vám bude slúžiť. Potom vám slúži dokument, ktorý ste požadovali. Nie je to úžasné?”
<p>
Budeme používať najrozšírenejší webový server <a href = 'https://httpd.apache.org/' target="_blank">Apache</a>. Apache je open source softvér dostupný zadarmo. Je rýchly, spoľahlivý a bezpečný. Na Apache bežia 67% [https://www.wpbeginner.com/glossary/apache/ ]  všetkých webových serverov na svete. Tento server môže ľahko byť prispôsobený tak, aby vyhovoval potrebám mnohých rôznych prostredí. Väčšina poskytovateľov hostingu WordPress používa Apache ako svoj webový server. Pre tých, ktorí nevedia, <a href = 'https://kinsta.com/knowledgebase/what-is-wordpress/' target="_blank">WordPress je najjednoduchší a najpopulárnejší spôsob vytvoriť vlastné webové stránky alebo blog. V skutočnosti, viac ako jeden zo štyroch webových stránok, ktoré navštívite, bol pravdepodobne vytvorený prostredníctvom WordPress</a>.
Teraz poďme ďalej.</p>
											
											<h3 id='p5'>2.Programovací jazyk pre prácu s databázami</h3>
											<p>Na rozdiel od webového servera to nie je niečo, čo budete potrebovať okamžite, ale keď začnete sa približovať k pokročilejším témam, práca s databázami sa stane nevyhnutnosťou. Samozrejme pre niektoré základné webové stránky, ktoré boli vyvinuté v procese učenia sa, databázy nie sú potrebné, lebo, koniec koncov, zobraziť jednoduché HTML stránky je rýchlejšie, ako pripájať sa k databázam a odoberať informáciu odtiaľ. Ale databázy sú dôležité pre väčšinu moderných webových stránok, pretože v nich sa uchovávajú prihlasovacie údaje používateľa, informácie, špecifické pre účely nejakých stránok (napríklad, obsah e-shopu) a všetky druhy ďalších dôležitých informácii. V súčasnosti nie je možné ukladať a uchovávať veľké množstvo údajov ináč, ako použitím SRBD (Systém Riadenia Báz Dát). Neexistujú iné opcie, ktoré by poskytovali také ľahké uchovávanie veľkého počtu dát, pripojenia k dátam a manipuláciu nad nimi, ako to nám umožňujú SRBD. Viac o výhodách SRBD môžete prečitať <a href = 'https://searchsqlserver.techtarget.com/definition/database-management-system' target="_blank">tu</a>. 
<p>	Medzi najrozšírenejšie možnosti nájdete jazyky, ako PostgreSQL a jeho bratranca, MySQL, ktorý je pravdepodobne ešte používanejší pre vývoj webových aplikácií. Ďalšou veľmi populárnou možnosťou je MariaDB, ktorá je v podstate vidlicovým projektom MySQL (v softvérovom inžinierstve vidlicový proekt (<a href = 'https://en.wikipedia.org/wiki/Fork_(software_development)' target="_blank">fork project</a>) je proek, pri ktorom vývojári odoberú kópiu zdrojového kódu z jedného softvérového balíka a začnú z neho vyvíjať ďalší nezávislý proect, čím sa vytvorí samostatný program).
</p>
											
											<h3 id='p6'>3.Štruktúra webových stránok</h3>
											<p>Ak ste si prečítali článok o PHP [link], viete, že PHP je skriptovací jazyk, ktorý sa používa na pridávanie dynamických funkcií na vaše webové stránky, zatiaľ čo štruktúra je poskytovaná HTML. HTML je jazyk, v ktorom definujete obrysy, nejaké vlastnosti stránky, ako sú tlačidlá, tabuľky, polia, zoznamy atď., a mnoho ďalších veci. Aby ste mohli používať PHP vo webovom vývoji, musíte byť oboznámení s HTML. Podrobenejšie o tom, ako sú tieto jazyky pripojené, porozprávame neskor. Teraz je ešte len jedna vec, ktorú treba povedať o HTML. Máte dobrý dôvod mat radi HTML, pretože váš prehliadač už vie, ako ho interpretovať a nebudete musieť ho inštalovať! Hurá, všetko, čo budete potrebovať na písanie kódu v HTML je jednoduchý textový editor a váš obľúbený prehliadač.
</p>
											
											<h3 id='p7'>4.Stylovanie webových stránok</h3>
											<p>Všeobecne povedané, aby zmeniť výzor vašich stránok môžete použiť CSS (Cascading Style Sheets). S týmto jazykom môžete meniť typy písma, farby a obrysy HTML objektov. Existujú rôzne spôsoby použitia CSS (napríklad, informácie CSS môžete pridať priamo do HTML tagov, alebo ich môžete zadať do hlavovej časti .html dokumentu medzi tagy style). Ale najužitočnejším a najpohodlnejším spôsobom je vytvoriť samostatný súbor '.css', ktorý bude obsahovať všetky informácie o stylingu všetkých objektoch, ktoré sa používajú na vašich stránkach. To je trochu mätúce na prvý vzhľad, ale takýto spôsob použitia CSS umožňuje vykonávať akékoľvek zmeny rýchlo a zaisťuje integritu štýlov vo všetkých webových stránkach. Bohužiaľ, nebudeme sa sústreďovať na CSS, ale ak sa v budúcnosti ocitnete v oblasti vývoja webových stránok, toto je ta oblasť, ktorej by ste sa mali veľa  venovať. Nebudeme pracovať s CSS, ale musí sa spomenúť, že jazyk je skvelý kamarát HTML, a jedna z vecí, ktoré majú spoločné, je, že podobne, ako s HTML, nie je potrebné nič inštalovať na prácu v CSS.
</p>
											
											<h3 id='p8'>5.Ako keby ste nemali dosť: JavaScript</h3>
											<p>Nad všetkými jazykmi, ktoré sme doteraz pokryli, je veľký šéf: JavaScript. Možno ste sa narazili na tento jazyk v iných oblastiach programovania. Je populárny medzi začiatočníkmi v programovaní, lebo v nom relatívne ľahko môžete získať chuť toho, čo sú premenné, dátové typy a ako proces písania jednoduchého programu vyzerá, ale je primárne používaný pre účely webového vývoja. JavaScript sa používa na pridávanie dynamických funkcií na webové stránky.
A teraz sa môžete cítiť zmätení, pretože keď sme hovorili o PHP, povedali sme, že PHP je ten, kto pridáva dynamické funkcie. To je určite pravda, ale tieto dvaja sa nemajú navzájom nahrádzať, skôr sa vzájomne dopĺňajú. Ale, ako som uviedla, JavaScript je veľký šéf: má kontrolu nad všetkým, čo by ste len mohli umiestniť na vašu stránku. Má moc zmeniť akúkoľvek časť akéhokoľvek dokumentu, ktorý je za vizuálnou reprezentáciou vašej stránky (to znamená, že môže vykonať zmeny v súboroch .html a .css), ale nemôže nahradiť zodpovedne jazyky. JavaScript je pre profesionálov absolútnou nevyhnutnosťou kvôli jeho sile a funkčnosti. Napriek tomu, že je úplne zbytočný bez iných jazykov, na vašej ceste ku profesionálnemu webovému vývojáru je to jazyk, ktorý môže slúžiť, ako hrozienko v koláčiku vašich znalosti. Je to šéf, ale musí mať koho kontrolovať.
</p>
											
											<h3 id='p9'>6.Jednoduchý textový editor:</h3>
											<p>Pravdepodobne už jeden máte. Vyberte si niečo, čo poznáte. Medzi najobľúbenejšie možnosti patria Atom, Vim, Brackets,  Notepad, Visual Studio Code etc.</p>
											
											<h2 id='p10'>Urobte si prestávku a vracajte sa:</h2>
											<p>Doteraz sme sa dozvedeli veľa úvodných informácií, ktoré sa môžu zdať trochu abstraktné, ale sú naozaj dôležité. V nasledujúcich častiach sa budeme rozprávať o tom, ako nainštalovať všetko, čo je potrebné nastaviť pred ďalším postupom.
Teraz vám odporúčam urobiť <a href = ''>test</a>, aby ste skontrolovali svoje pochopenie informácií v článku. Prosím, nepreskočte nasledujúci článok, ktorý bude o magických balíkoch, šetriacich váš čas a energiu počas inštalačného procesu.</p>
											

										</article>

								</div>
							</div>
						</div>
					</div>
				</div>

<?php require_once("footer.php"); ?> 