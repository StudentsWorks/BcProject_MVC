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
												<a href="https://www.tutorialspoint.com/mvc_framework/mvc_framework_introduction.htm" class="button icon solid fa-info-circle" target = '_blank'>Pozrieť sa</a>
											</footer>
										</section>

										<section>
											<h3>Obsah</h3>
											<ul class="style2">
                                                <li><a href="#p1">Vytvorte si vlastný rámec MVC</a></li>
                                                <li><a href="#p2">Krok 1: Vytvorte štruktúru vášho rámca</a></li>
                                                <li><a href="#p3">Krok 2: bootstrapping</a></li>
                                                <li><a href="#p4">Krok 3: Smerovanie</a></li>
                                                <li><a href="#p5">Krok 4: Kontrolóri</a></li>
                                                <li><a href="#p6">Krok 5</a></li>
                                                <li><a href="#p7">Krok 6: Pohľady</a></li>
                                                <li><a href="#p8">Zhrnutie: </a></li>
                                                <li><a href="#p9">Analógia:</a></li>
												
											</ul>
										</section>

								</div>
							</div>
							<div class="col-8 col-12-medium imp-medium">
								<div id="content">

									<!-- Content -->
										<article>

											<h2 id = 'p1'>Vytvorte si vlastný rámec MVC</h2>
                                            <p>
                                            <img src="images/f1.png" align='left' style="padding:2%">
                                            Ako vývojár s veľkou pravdepodobnosťou budete sa  zaoberať jedným z už implementovaných,
                                             široko používaných a udržiavaných rámcov. Ale vzhľadom na ich zložitosť, ak chcete pochopiť princíp MVC,
                                              mali by ste lepšie začať budovaním vlastného rámca. Potom, keď viete, 
                                            čo kam patrí a aké sú funkcie všetkých rámcových komponentov, môžete začať skúmať používané rámce. </p>
                                            <h3 id = 'p2'>Krok 1: Vytvorte štruktúru vášho rámca</h3>
                                            <p>
                                            V tomto kroku vytvoríme všetky priečinky, ktoré sú zvyčajne zahrnuté v každom rámci MVC a budeme diskutovať o ich funkciách. Neskôr ich naplníme súbormi.
                                            
                                            Vytvorte adresár, ktorý bude ukladať všetky ďalšie adresáre. V našom prípade je to mvc. Ďalej budeme pracovať v tomto adresári.
<ol>

<li><strong> public:</strong> koreňový adresár pre aplikáciu. Toto je miesto, kde sú uložené bootstrap, css, img, atď. 
    <ul>
    <li>CSS</li>
    <li>JavaScript</li>
    </ul>
</li>
<li><strong> app:</strong> obsahuje všetky najdôležitejšie priečinky, ako sú kontrolóri, jadro, modely a zobrazenia. Obsahuje tiež inicializačný súbor, ktorý bude obsahovať základnú funkčnosť.
    <ul>
    <li><strong>core: </strong>zaoberá sa  rozdelením URL adresy a smerovaním. Spracováva aj vaše kontrolóri, t. j. vyberá správny kontrolór, keď je aplikácia spustená.</li>
    <li><strong>controllers: </strong>obsahuje  .php súbory kontrolórov</li>
    <li><strong>models:</strong> obsahuje modely</li>
    <li><strong>views:</strong> výstupy, ktoré používateľ vidí</li>
        <strong> home:</strong> Predvolené zobrazenie, ktoré štandardne poskytne kontrolór home.

    </ul>
</li>

</ol>
<strong> Nápad:</strong> Užívatelia začnú komunikáciu s aplikáciou vo  zložke public, ktorá bude obsahovať súbor index.php.  V rámci index.php potom voláme novú inštanciu aplikácie, ktorá potom prečíta adresu URL, ak je k dispozícii, a zavolá správny ovládač, ktorý pôjde a poskytne príslušný pohľad. 
V adresári models budeme mať modely, ktoré budú k dispozícii na použitie, a môžeme pridať im funkčnosť, ktorú  potrebujeme.
                                            </p>
                                            <h3 id = 'p3'>Krok 2: bootstrapping</h3>
                                            <p>
                                            Najprv v rámci adresára public musíme vytvoriť index.php súbor, ktorý je miesto, kde užívatelia začnú komunikovať so stránkou. Odtiaľ požadujeme inicializačný súbor init.php.
<br>Pokiaľ init.php v tejto chvíli neexistuje, musíme ísť do adresára app a vytvoriť init.php tam.
<br>V  adresári core vytvárame App.php súbor, a potom voláme app triedu, ktorá je definovaná tam, init.php. Tým sa pre nás vytvorí nová aplikácia.
<br>Potom v rámci toho istého adresára vytvoríme Controller.php. V súbore definujeme triedu Controller.
<h4> Aktuálny stav:</h4>
<img src="images/f2.png" width="80%" height="60%">
<img src="images/f3.png" width="80%" height="60%">
<img src="images/f4.png" width="80%" height="60%">
<img src="images/f5.png" width="80%" height="60%">

                                            </p>
                                            <h3 id = 'p4'>Krok 3: Smerovanie</h3>
                                            <p>
                                            Vnútri controllers vytvoríme nový kontrolór, home.php. Tam máme triedu Home,  ktorá rozširuje základný kontrolór.
                                            <img src="images/f6.png" width="80%" height="60%">
                                            V triede App, ktorá je definovaná v application.php definujeme predvolenú metódu a kontrolór. Vytvoríme tiež prázdne pole params, ktoré nám neskôr umožní uložiť parametre odovzdané z adresy URL.
<br>Potom vytvoríme pomocnú funkciu parseUrl, ktorá bude zahŕňať rozloženie a orezávanie dezinfikovanej URL. Takže, poskytne nám kontrolór, metódu a parametre uvedené po nich v riadku adresy URL.
<img src="images/f9.png" width="80%" height="60%"> <br>
<strong>#line 21 return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));</strong>
<br>Vo vnútri adresára application vytvárame .htaccess súbor, aby zabrániť používateľom prístup k súborom aplikácie. Neobmedzujeme prístup k adresáru public, pretože chceme, aby naši používatelia mohli používať aplikáciu.
<img src="images/f7.png" width="80%" height="60%"><br>
Vo vnútri public vytvárame ďalší .htaccess súbor, ktorý sa bude zaoberať smerovaním.
<img src="images/f8.png" width="80%" height="60%"><br>
<h3 id = 'p5'>Krok 4: Kontrolóri</h3>
Teraz zavoláme kontrolór (ak existuje) a zavoláme metódu v rámci tohto regulátora (opäť, ak existuje). Ak metóda nie je odovzdaná alebo neexistuje, náš kontrolór automaticky zavolá metódu index. Aby  urobiť toto pokračujeme v úprave application.php.
<br>Nižšie nájdete finálnu verziu application.php, so všetkými metódami, ktoré budeme potrebovať.
<h5 class="card-header">App.php</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'a'><pre>
                                          
&lt;?php
class App {
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = array();
    public function __construct (){
        $url = $this->parseUrl();
        if (file_exists('../app/controllers/'. $url[0]. '.php' )) {
            $this->controller = $url[0];
            unset($url[0]);
        }
        require_once '../app/controllers/'.$this->controller.'.php';
        $this->controller = new $this->controller;
        if (isset($url[1])){
            if (method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                    unset($url[1]);
            }
        }
    
        $this->params = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
    public function parseUrl() {
        if (isset($_GET['url'])) {
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}
?&gt;
</pre> </p>
<button class="btn btn-primary" onclick="copyToClipboard('#a')">Kopírovať</button>
</div>      <br>


                                            </p>
                                            <h3 id = 'p6'>Krok 5</h3>
                                            Teraz budeme pracovať nad načítavaním modelov. Budeme to robiť na základe našej triedy Controller, ktorá sa nachádza v súbor Controller.php. Vytvoríme metódu, ktorá by nám umožnila načítať model a potom s ním skutočne urobiť niečo.
<br>Aby manipulovať s modelmi, poďme najprv vytvoriť jeden. V priečinku models vytvorte súbor User.php,  a potom definujte v ňom triedu User. Definujeme verejnú premennú $name v triede.

<img src="images/f10.png" width="80%" height="60%"><br>
Potom sa vrátime k Controller.php.V rámci  triedy Controller definujeme verejnú funkciu model, ktorá by nám umožnila načítať modely a vrátiť novú inštanciu požadovaného modelu.
<img src="images/f11.png" width="80%" height="60%"><br>
Potom v našom kontrolóri home, ktorý je v priečinku controllers, vytvoríme predvolenú funkciu index , ktorá inštantizuje nový objekt User. Berie jeden parameter, name,  a potom ho vytlačí.
<img src="images/f12.png" width="80%" height="60%"><br>
                                        <h3 id = 'p7'>Krok 6: Pohľady</h3>
										<p>
                                        Teraz sa budeme zaoberať pohľadmi. Doteraz sa nám podarilo dať všetku logiku do kontrolóra a modelu.
<br>Budeme vytvárať metódu v Controller.php, ktorá by načítavala pohľad.

<img src="images/f15.png" width="80%" height="60%"><br>
Opäť, aby začať pracovať s pohľadmi, musíme vytvoriť jeden. V priečinku views sa nachádza priečinok home. Vnútri tohto priečinku vytvorime súbor index.php. Hovorí 'Hello' a načíta meno zvnútra kontrolóra home.
<img src="images/f13.png" width="80%" height="60%"><br>
<img src="images/f14.png" width="80%" height="60%"><br>

                                        </p>
                                        <h3 id = 'p8'>Zhrnutie: </h3>
                                        <p>
                                        takto vyzerá jednoduchý rámec MVC. Základný cieľ bol úspešne dosiahnutý: nám sa podarilo rozdeliť aplikáciu do modelov,
                                         pohľadov a kontrolórov. Tiež sme vyčistili pohľady od logiky, nechajúc tým sa zaoberať modelom a kontrolórom. 
                                         Naš rámec je príliš základný a chýba mu kontrola chýb, takže by nemal byť použitý v reálnych podmienkach, ale je v 
                                         poriadku, aby sme pochopili koncept.

                                        </p>
                                        <h3 id = 'p9'>Analógia:</h3>
                                        <img src="images/f16.png"  align='left' style="padding:2%">
                                        Ak sa v tomto bode pozriete na štruktúru jedného z najpopulárnejších a najpoužívanejších rámcov PHP nazývaných Laravel, môžete si všimnúť veľa podobností.
<br>Máme zložku app. Súbory PHP uložené priamo v adresári app sú modely.
<br>Máme priečinok route, ktorý ukladá všetky smerovacie cesty v aplikácii. 
<br>Máme tiež  adresár public, ktorý obsahuje súbory css a js.
<br>Okrem toho existuje veľa ďalších zložiek, ale ako už bolo povedané, žiadny z reálnych rámcov sa tu nebude diskutovať.




								</div>
							</div>
						</div>
					</div>
				</div>

<?php require_once("footer.php"); ?> 
