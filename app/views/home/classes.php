<?php require_once("header.php"); ?> 
			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-4 col-12-medium">
								<div id="sidebar">

									<!-- Sidebar -->
										<section>
											<h3>Môže byť užitočné</h3>
											<footer>
												<a href="https://www.w3schools.com/php/php_oop_classes_objects.asp" class="button icon solid fa-info-circle">Tutorial</a>
											</footer>
										</section>

										<section>
											<h3>Prehľad</h3>
											<ul class="style2">
												<li><a href="#p1">Triedy</a></li>
												<li><a href="#p2">Terminológia</a></li>
												<li><a href="#p3">Definícia triedy</a></li>
												<li><a href="#p4">Definujte objekty</a></li>
												<li><a href="#p5">PHP - instanceof</a></li>
												<li><a href="#p6">Klonovanie oproti kopírovaniu objektov</a></li>
												<li><a href="#p7">Rozsah pôsobnosti a metódy v PHP</a></li>
												<li><a href="#p8">Dedičstvo</a></li>
												<li><a href="#p9">Parent</a></li>
												<li><a href="#p10">Metóda final</a></li>
											</ul>
										</section>

								</div>
							</div>
							<div class="col-8 col-12-medium imp-medium">
								<div id="content">

									<!-- Content -->
										<article>

											<h2 id ='p1'>Triedy</h2>
											<form action = "test.php" method = "POST">
											<label class="container">One
  <input type="radio" >One
  <span class="checkmark"></span>
</label>

<label class="container">Two
  <input type="radio">
  <span class="checkmark"></span>
</label>
  
</form>
											<p>Už sme sa naučili základov PHP. Predchádzajúca časť, ktorá sa zaoberala funkciami,
												 nám dala obrovskú moc pri zlepšovaní kvality kodu a našej produktivity a efektivity ako programátorov.
												  V tejto časti získame ešte jednu úroveň abstrakcie. Zameriame sa najmä na triedy. Koncepcia používania funkcií
												   a tried v programovaní sa označuje ako OOP (Object Oriented Programming). Jediným spôsobom, ako sa dostať na 
												   vrchol programových výšok, je plynule pouzivanie OOP. Aby ste tohto dosiahli, budete musieť (dúfajme, len trochu)
												 premenit svoje myslenie a nastaviť ho tak, aby pracovalo v tomto smere. Pripravme sa na naše spoznanie tried.
											</p>
											<h3 id = 'p2'>Terminológia</h3>
											<p>Najprv objasníme niekoľko pojmov, ktoré sú základom OOP.
												<ul>
													<li>Trieda: šablóna pre objekty. Toto je spojenie nejakého kódu a niektorých údajov. Môžeme povedať, že trieda je plánom pre objekty.</li>
													<li>Objekt: inštancia triedy.</li>
													<li>Vlastnosť: údaje, ktoré sa vzťahujú k objektu.</li>
													<li>Metódy: funkčnosť objektu. Toto sú funkcie v rámci triedy.</li>														</li>
												</ul>
											</p>
											<h3 id = 'p3'>Definícia triedy:</h3>
											<h5 class="card-header">Syntax</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'a'>
                                                    
													&lt;?php<br>
													class ClassName{<br>
													&ensp;   //kod<br>
													}<br>
                                                    ?&gt;
                                                    
                                                    </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#a')">Kopírovať</button>
                                                </div>      <p><p>
													Nižšie uvádzame príklad jednoduchej triedy.
													<h5 class="card-header">Trieda</h5>
													<div class="card-body">
														<p class="card-text" id = 'b'>
														
														&lt;?php<br>
														class Animal{<br>
														&ensp;   // Properties<br>
														&ensp;public $name;<br>
														&ensp;public $age;<br>
														&ensp;// Methods<br>
														&ensp;function set_name($name) {<br>
															&ensp;&ensp;$this->name = $name;<br>
															&ensp;}<br>
															&ensp;function get_name() {<br>
     
																&ensp;&ensp;return $this->name;<br>
																&ensp;}<br>
																
														?&gt;<br>
														}
														</p>
														<button class="btn btn-primary" onclick="copyToClipboard('#b')">Kopírovať</button>
													</div>      <p><p>

											<h3 id = "p4">Definujte objekty</h3>
											<p>
												Triedy nie majú žiadny zmysel bez objektov! Môžeme vytvoriť viac objektov jednej triedy. Každý objekt má všetky vlastnosti a metódy definované v triede, ale budú mať rôzne hodnoty.
Objekty triedy sa vytvárajú pomocou kľúčového slova new.
V nasledujúcom príklade $cat a $dog sú príklady triedy Animal:
<h5 class="card-header">Trieda Animal</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'c'>
                                                    
                                                    &lt;?php<br>
                                                      class Animal{<br>
														&ensp; // Properties<br>
														&ensp; public $name;<br>
														&ensp; public $animal;<br>
													  
														&ensp; // Methods<br>
														&ensp; function set_name($name) {<br>
															&ensp; &ensp; $this->name = $name;<br>
															&ensp; }<br>
															&ensp; function get_name() {<br>
																&ensp; &ensp; return $this->name;<br>
																&ensp; }<br>
													  &ensp; }<br>
													  
													  $cat = new Animal();<br>
													  $dog = new Animal();<br>
													  $cat->animal = ‘Cat’;<br>
													  $cat->set_name('Mark');<br>
													  $dog->animal = ‘Dog’<br>
$dog->set_name('Jim');<br>

echo $cat->get_name().’\n’;<br>
echo $dog->get_name();<br>
													   
                                                    ?&gt;
                                                    
                                                    </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#c')">Kopírovať</button>
                                                </div>      <p><p>

											</p>
											<p>
												Kde teda môžeme zmeniť hodnotu vlastnosti $ name? Existujú dva spôsoby:

												<ol>
													<li>Vo vnútri triedy (pridaním metódy set_name () a použitím $ this) $ toto kľúčové slovo odkazuje na aktuálny objekt a je k dispozícii iba vo vnútri metód:
														<h5 class="card-header">Vo vnútri triedy</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'd'>
                                                    
													&lt;?php<br>
													class Animal {<br>
														&ensp;	public $name;<br>
														&ensp;function set_name($name) {<br>
															&ensp;&ensp;$this->name = $name;<br>
															&ensp;}<br>
													  }
													  $elephant = new Animal();<br>
													  $elephant->set_name("Joe");<br>
                                                    
                                                    ?&gt;
                                                    
                                                    </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#d')">Kopírovať</button>
                                                </div>      <p><p>
													</li>
													<li>Mimo triedy (priamo zmenou hodnoty vlastnosti):
														<h5 class="card-header">Mimo triedy</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'e'>
                                                    
													&lt;?php<br>
													class Animal {<br>
														&ensp;	public $name;<br>
													  }<br>
													  $elephant = new Animal();<br>
													  $elephant->name = "Joe";<br>
                                                    
                                                    ?&gt;
                                                    
                                                    </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#e')">Kopírovať</button>
                                                </div>      <p><p>
													</li>

												</ol>
											</p>
											<h3 id = 'p5'>PHP - instanceof</h3>
											<p>
												Kľúčové slovo instanceof môžete použiť na kontrolu, či objekt patrí do konkrétnej triedy:
												<h5 class="card-header">instanceof</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'f'>
                                                    
                                                    &lt;?php<br>
                                                    $monkey = new Animal();<br>
var_dump($monkey instanceof Animal);<br>
                                                    ?&gt;
                                                    
                                                    </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#f')">Kopírovať</button>
                                                </div>      <p><p>
											</p>
											<h3 id = 'p6'>Klonovanie oproti kopírovaniu objektov</h3>
											<p>
												Predpokladajme, že ste chceli vytvoriť kópiu objektu a potom by ste s ním chceli pracovať bez toho, aby ste pôvodný objekt zmenili. Na úvod sa pozrime na príklad, ktorý môže byť riešením problému.
												<h5 class="card-header">zla kopia</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'g'>
                                                    
                                                    &lt;?php<br>
                                                    $cat1 = new Animal();<br>
  $cat1->set_name(‘Jim’);<br>
  $cat2 = $cat1;<br>
  $cat2->set_name(‘Joe’);<br>
  echo "cat1 name = " . $cat1->name . "\n”;<br>
echo "cat2 name = " . $cat2->name;<br>

                                                    ?&gt;
                                                    
                                                    </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#g')">Kopírovať</button>
                                                </div>      <p><p>
											</p>
											Vytvorili sme objekt $cat1 a vlastnosť name sme nastavili na Jim. Potom vytvorili $cat2, priradili tomuto objektu hodnotu $cat1 a vlastnosti name objektu $cat2 priamo priradili hodnotu Joe- alebo sme si mysleli, že ju priradili. Tento kód však poskytne nasledujúce informácie:
											<h5 class="card-header">Vystup</h5>
											<div class="card-body">
												<p class="card-text">
												
												
												object1 name = Joe<br>
object2 name = Joe

											
												</p>
												
											</div>      <p><p>
												Čo sa stalo? $cat1 aj $cat2 sa vzťahujú na ten istý objekt, takže zmena vlastnosti name $ cat2 na Joe spôsobila to, že
rovnaká hodnota bola priradená aj vlastností name u $cat1.
Ak sa chcete vyhnúť tejto zámene, použite príkaz clone, ktorý vytvorí novú inštanciu triedy a skopíruje hodnoty vlastnosti z pôvodnej triedy do novej inštancie.
<h5 class="card-header">Dobra kopia</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'h'>
                                                    
                                                    &lt;?php<br>
                                                    $cat1 = new Animal();<br>
  $cat1->set_name(‘Jim’);<br>
  $cat2 = clone $cat1;<br>
  $cat2->set_name(‘Joe’);<br>
  echo "cat1 name = " . $cat1->name . "\n”;<br>
echo "cat2 name = " . $cat2->name;<br>

                                                    ?&gt;
                                                    
                                                    </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#h')">Kopírovať</button>
                                                </div>      <p><p>

												<h3 id = "p7">Rozsah pôsobnosti a metódy v PHP</h3>
												<p>
													PHP poskytuje tri kľúčové slová na kontrolu rozsahu vlastností a metód:
													<ul>
														<li>public: Vlastnosti s týmto rozsahom sa predvolené získavajú, keď sa premenná deklaruje pomocou kľúčového slova public alebo keď sa premenná deklaruje implicitne pri prvom použití. Metódy sa štandardne deklarujú ako public.
														</li>
														<li>private: Ku vlastnostiam a metódam s týmto rozsahom je možné odkazovať iba s tried, ktoré zbedačili tuto vlastnosť od tejto triedy.</li>
														<li>protected: môžeme použiť vlastnosť len v rámci tejto triedy.
														</li>
													</ul>
													<h5 class="card-header">Rozsah</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'y'>
                                                    
                                                    &lt;?php<br>
                                                      class Example<br>
													{<br>
														&ensp;public $name = "Michael"; // public $age = 23; // public<br>
														&ensp;protected $usercount; // <br>
													
														&ensp;private function admin() // <br>
														&ensp;{<br>
														&ensp;&ensp;// admin code<br>
														&ensp;}<br>
													}<br>
													
                                                    ?&gt;
                                                    
                                                    </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#y')">Kopírovať</button>
                                                </div>      <p><p>
												</p>
												<h3 id = 'p8'>Dedičstvo</h3>
												Po vytvorení triedy je možné z nej získať podtriedu. Ušetrí sa tým veľa času: Namiesto toho, aby ste kód starostlivo prepisovali, bude možné vziať triedu podobnú tej, ktorá by sa mala vytvoriť, rozšíriť ju na podtriedu a jednoducho vykonať zmeny na miestach, ktoré budú mať charakteristické vlastnosti. Dosahuje sa to pomocou kľúčového slova extends.
												<h5 class="card-header">Dedičstvo</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'z'>
                                                    
                                                    &lt;?php<br>
                                                       class Shopping<br>
													{<br>
														&ensp;function milk()<br>
														&ensp;{<br>
															&ensp;&ensp;echo "I bought some milk \n";<br>
															&ensp;}<br>
													}<br>
													class Shopping1 extends Shopping<br>
													{<br>
														&ensp;function bread()<br>
														&ensp;{<br>
															&ensp;&ensp;echo "I bought some bread \n";<br>
															&ensp;}<br>
													}<br>
													
													
													$me = new Shopping1();<br>
													$me -> milk();<br>
													$me -> bread();<br>
													
                                                    ?&gt;<br>
                                                    
                                                    </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#z')">Kopírovať</button>
                                                </div>      <p><p>

												<h3 id = 'p9'>Parent</h3>
												Ak v podtriede je metóda s takým istým názvom, ako metóda v materskej triede, jej inštrukcie prepisu to, čo bolo definovane v materskej triede. Niekedy je toto správanie v rozpore s vašimi zámerami a potrebujete prístup k rodičovskej metóde. Na tento účel môžete použiť kľúčové slovo parent.
												<h5 class="card-header">Featured</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'q'>
                                                    
                                                    &lt;?php<br>
                                                       class Dad<br>
													{<br>
														&ensp;function test()<br>
														&ensp;{<br>
															&ensp;&ensp;echo "[Class Dad] I am your dad<br>";<br>
															&ensp;}<br>
													}<br>
													class Son extends Dad<br>
													{<br>
														&ensp;function test()<br>
														&ensp;{<br>
														&ensp;&ensp;echo "[Class Son] I am Bill<br>";<br>
														&ensp;}<br>
														&ensp;function test2()<br>
														&ensp;{<br>
															&ensp;&ensp;parent::test();<br>
															&ensp;}<br>
														}<br>
														
														
														$object = new Son;<br>
														$object->test();<br>
														$object->test2();<br>
														
														//[Class Son] I am Bill<br>
														[Class Dad] I am your dad<br>
														
													

                                                    ?&gt;
                                                    
                                                    </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#q')">Kopírovať</button>
                                                </div>      <p><p>
													<h3 id = "p10">Metóda final</h3>
													Ak chcete zabrániť tomu, aby podtrieda prepísala metódu nadtriedy, môžete použiť kľúčové slovo final. Ako sa to robí, je uvedene v príklade.

													<h5 class="card-header">Featured</h5>
													<div class="card-body">
														<p class="card-text" id = 'l'>
														
														&lt;?php<br>
														class User<br>
														&ensp;   {<br>
															&ensp;   final function copyright()<br>
															&ensp;   {<br>
																&ensp;   &ensp;   echo "This class was created by me ";<br>
																&ensp;   }<br>
														}<br>
														
														?&gt;
														
														</p>
														<button class="btn btn-primary" onclick="copyToClipboard('#l')">Kopírovať</button>
													</div>      <p><p>
											

											

										</article>

								</div>
							</div>
						</div>
					</div>
				</div>

<?php require_once("footer.php"); ?> 
