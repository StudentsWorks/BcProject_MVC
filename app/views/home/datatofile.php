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
												<a href="https://www.tutorialspoint.com/php/php_files.htm" class="button icon solid fa-info-circle" target = '_blank'>Pozrieť sa</a>
											</footer>
										</section>

										<section>
											<h3>Obsah</h3>
											<ul class="style2">
												<li><a href="#p1">Uloženie údajov formulára do textového súboru</a></li>
												<li><a href="#p2">Program</a></li>
												<li><a href="#p3">HTML časť</a></li>
												<li><a href="#p4">Pokrokový návod</a></li>
												
												
											</ul>
										</section>

								</div>
							</div>
							<div class="col-8 col-12-medium imp-medium">
								<div id="content">

									<!-- Content -->
										<article>

											<h2 id = 'p1'>Uloženie údajov formulára do textového súboru</h2>
											<p>
											V tejto časti dosiahneme veľmi dôležitú úlohu, ktorú možno ľahko vykonať pomocou  PHP a HTML formulára.
<br>Niekedy sa stáva, že musíme uložiť niektoré údaje do lokálneho súboru, skôr než robiť to pomocou databázy. Áno, je fakt, že v mnohých prípadoch nechceme ukladať naše textové údaje do databázy.
<br>Tu vám dávam príklad.  Predpokladajme, že máte formulár formátu HTML a chcete uložiť údaje predložené používateľom v textovom súbore tak, že môžete ľahko dostať k nim prístup neskôr bez otvorenia databázy.
											</p>
											<h3 id = 'p2'>PHP Program pre ukladanie dát HTML formulára v .txt súbore</h3>
											Nižšie jr poskytnutý PHP kód na ukladanie údajov formulára do textového súboru. Pozrite sa kód.
											<h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'a'><pre>                                                    
&lt;?php
if(isset($_POST['textdata']))
{
	$data=$_POST['textdata'];

	$fp = fopen('data.txt', 'a');
	fwrite($fp, $data);
	fclose($fp);
} 
?&gt;
                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#a')">Kopírovať</button>
												</div>      <br><br>
												
												<ul>
													<li><strong> textdata </strong>je názov nášho poľa formulára HTML, ktoré je uvedené nižšie.</li>
													<li><strong> data.txt</strong> je súbor, ktorý musíme vytvoriť na ukladanie údajov formulára.</li>
													<li><strong> $data</strong> je premenná PHP na ukladanie údajov formulára zadaných používateľom.</li>
												</ul>
												<br>
												<h4 id = 'p3'>HTML časť</h4>
												<h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'b'><pre>                                                    
&lt;!DOCTYPE html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;title&gt;Ukladať údajov formulára do súboru&lt;/title&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;form method="post"&gt;
			Zadajte Text tu:&lt;br&gt;
			&lt;input type="text" name="textdata"&gt;&lt;br&gt;
			&lt;input type="submit" name="submit"&gt;
		&lt;/form&gt;
	&lt;/body&gt;
&lt;/html&gt;
                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#b')">Kopírovať</button>
												</div>      <br>
												<h3 id = 'p4'>Pokrokový návod, ako dať data HTML formulára do textového súboru pomocou PHP</h3>
												<p>
													<ol>
														<li>
															<strong>Vytvorte súbor PHP, vložte nižšie uvedený kód a uložte ho.</strong>
															<h5 class="card-header">Krok 1</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'c'><pre>                                                    
													&lt;!DOCTYPE html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;title&gt;Ukladať údajov formulára do súboru&lt;/title&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;form method="post"&gt;
			Zadajte Text tu:&lt;br&gt;
			&lt;input type="text" name="textdata"&gt;&lt;br&gt;
			&lt;input type="submit" name="submit"&gt;
		&lt;/form&gt;
	&lt;/body&gt;
&lt;/html&gt;
&lt;?php
	if(isset($_POST['textdata']))
	{
		$data=$_POST['textdata'];
		$fp = fopen('data.txt', 'a');

		fwrite($fp, $data);
		fclose($fp);
	}
?&gt;
                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#c')">Kopírovať</button>
                                                </div>      <br>
														</li>
														<li>Vytvorte nový súbor v rovnakom adresári alebo priečinku, pomenujte ho data.txt a uložte ho.</li>
														<li>Teraz spustite súbor PHP. Zadajte ľubovoľný text, stlačte tlačidlo Submit a skontrolujte súbor data.txt. Text zadaný vo formulári sa uloží do textového súboru.</li>
													</ol>
												</p>


										</article>

								</div>
							</div>
						</div>
					</div>
				</div>

<?php require_once("footer.php"); ?> 
