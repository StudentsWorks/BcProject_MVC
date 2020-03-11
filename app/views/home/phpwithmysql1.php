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
												<a href="https://www.tutorialspoint.com/php/php_and_mysql.htm" class="button icon solid fa-info-circle" target = '_blank'>Pozrieť sa</a>
											</footer>
										</section>

										<section>
											<h3>Subheading</h3>
											<ul class="style2">
                                                <li><a href="#1">PHP databázové pripojenie</a></li>
                                                <li><a href="#2">Otvorenie Databázového Pripojenia</a></li>
                                                <li><a href="#3">Uzavretie Pripojenia k Databáze</a></li>
                                                <li><a href="#4">Vytvorenie databázy</a></li>
                                                <li><a href="#5">Výber databázy</a></li>
                                                <li><a href="#6">Vytváranie Databázových Tabuliek</a></li>
                                                <li><a href="#7">Odstrániť databázu MySQL pomocou PHP</a></li>
                                                <li><a href="#8">Odstránenie tabuľky</a></li>
                                                <li><a href="#9">Vkladanie Údajov</a></li>
                                                <li><a href="#10">Získanie Údajov Z Databázy MySQL</a></li>
                                                <li><a href="#11">Aktualizácia údajov v databáze MySQL</a></li>
                                                <li><a href="#12">Odstránenie údajov z databázy MySQL</a></li>
                                                <li><a href="#13">Vykonajte zálohovanie MySQL pomocou PHP</a></li>
                                                <li><a href="#14">Používanie používateľského rozhrania phpMyAdmin</a></li>
												
											</ul>
										</section>

								</div>
							</div>
							<div class="col-8 col-12-medium imp-medium">
								<div id="content">

									<!-- Content -->
										<article>
                                            <h3>Poznámka</h3>
                                            <p>
                                            PHP bude pracovať s prakticky všetkým databázovým softvérom vrátane 
                                            Oracle a Sybase, ale najčastejšie sa používa voľne dostupná databáza MySQL.
                                            <strong>Čo by ste už mali mať?</strong>
                                            <ul>
                                                <li>Viete základy MySQL.</li>
                                                <li>Stiahli a nainštalovali ste najnovšiu verziu MySQL.</li>
                                                <li>Vytvorený užívateľ databázy guest s heslom guest123.</li>
                                                <li>Ak ste nevytvorili databázu, potom budete potrebovať používateľa root a jeho heslo, ak chcete vytvoriť databázu.</li>
                                            
                                            </ul>
                                            </p>
                                            <h2 id = 'p1'>PHP databázové pripojenie</h2>
                                            <p>
                                                <h3 id = 'p2'>Otvorenie Databázového Pripojenia</h3>
                                                PHP poskytuje funkciu mysql_connect na otvorenie databázového pripojenia.
                                                 Táto funkcia má päť parametrov a vráti Identifikátor odkazu MySQL pri úspechu alebo FALSE pri zlyhaní.
                                                 <h5 class="card-header">Syntax</h5>
                                                <div class="card-body">
                                                    <p class="card-text">
                                                    
                                                    connection mysql_connect(server,user,passwd,new_link,client_flag);
                                                    
                                                    </p>
                                                    
                                                </div>      <p><p>
                                                <table>
                                                    <tr>
                                                        <th>Č.</th>
                                                        <th>Popis Parametra</th>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                        <strong>server</strong><br>
                                                        Voliteľné - názov hosta spusteného databázového server. Ak nie je zadaná, predvolená hodnota je localhost: 3306.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>
                                                            <strong>user</strong><br>
                                                            Voliteľné-užívateľské meno prístupu k databáze. Ak nie je zadané, predvolená hodnota je názov používateľa, ktorý vlastní proces servera.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>
                                                        <strong>passwd</strong><br>
                                                        Voliteľné-heslo používateľa, ktorý pristupuje k databáze. Ak nie je zadané, predvolené je prázdne heslo.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>
                                                        <strong>new_link</strong><br>
                                                        Voliteľné - ak sa do mysql_connect uskutoční druhý hovor s rovnakými argumentmi, 
                                                        nebude vytvorené žiadne nové pripojenie; namiesto toho sa vráti identifikátor už otvoreného pripojenia.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>
                                                        <strong>client_flags</strong><br>
                                                        Voliteľné-kombinácia nasledujúcich konštánt − <ul>

	<li>MYSQL_CLIENT_SSL-použitie šifrovania SSL</li>

	<li>MYSQL_CLIENT_COMPRESS - použivanie kompresného protokolu</li>

	<li>MYSQL_CLIENT_IGNORE_SPACE-povoliť priestor po názvoch funkcií</li>

	<li>MYSQL_CLIENT_INTERACTIVE - povoliť interaktívny časový limit sekúnd nečinnosti pred zatvorením pripojenia</li></ul>
                                                        </td>
                                                    </tr>
                                                </table><br>
                                                <strong>Poznámka</strong><br>
                                                Môžete zadať server, user,  passwd v php.ini
                                                 súbore namiesto ich použitia znovu a znovu v každom PHP skripte. Skontrolujte konfiguráciu php.ini súboru.
                                                 <h3 id = 'p3'>Uzavretie Pripojenia k Databáze</h3>
                                                 <p>Jednoduchá funkcia mysql_close  poskytuje zatvorenie databázového pripojenia. 
                                                     Táto funkcia preberá pripojenie vrátené funkciou mysql_connect. Vracia TRUE pri úspechu alebo FALSE pri zlyhaní.</p>
                                                     <h5 class="card-header">Syntax</h5>
                                                <div class="card-body">
                                                    <p class="card-text">
                                                    
                                                    bool mysql_close(resource $link_identifier);
                                                    
                                                    
                                                    
                                                </div>      <p><p>
                                                    Ak nie je zadaný resource, posledná otvorená databáza je zatvorená.

                                                    <h5 class="card-header">Featured</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'a'><pre>
                                                    
&lt;?php
   $dbhost = 'localhost';
   $dbuser = 'guest';
   $dbpass = 'guest123';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
  	die('Could not connect: ' . mysql_error());
   }
   
   echo 'Connected successfully';
   mysql_close($conn);
?&gt;
                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#a')">Kopírovať</button>
                                                </div>      <p><p>
                                                </p>
                                                <h3 id = 'p4'>Vytvorenie databázy</h3>
                                                <p>
                                                Ak chcete vytvoriť a odstrániť databázu, mali by ste mať oprávnenie správcu.
                                                 Je veľmi jednoduché vytvoriť novú databázu MySQL. PHP používa funkciu mysql_query na vytvorenie databázy MySQL. 
                                                Táto funkcia má dva parametre a vracia TRUE pri úspechu  alebo FALSE pri zlyhaní.
                                                <h5 class="card-header">Syntax</h5>
                                                <div class="card-body">
                                                    <p class="card-text">
                                                    
                                                    bool mysql_query(sql, connection);                                                    
                                                    </p>
                                                    
                                                </div>      <p><p>
                                                <table>
                                                    <tr>
                                                        <th>Č.</th>
                                                        <th>Popis Parametra</th>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                        <strong>sql</strong><br>
                                                        Povinné - SQL dotaz na vytvorenie databázy
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>
                                                            <strong>connection</strong><br>
                                                            Voliteľné-ak nie je zadané, použije sa posledné pripojenie otvorené mysql_connect.
                                                        </td>
                                                    </tr>
                                                </table>
                                                <h5 class="card-header">Priklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'b'><pre>
                                                    
&lt;?php
   $dbhost = 'localhost:';
   $dbuser = 'root';
   $dbpass = 'rootpassword';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   echo 'Connected successfully';
   
   $sql = 'CREATE Database test_db';
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not create database: ' . mysql_error());
   }
   
   echo "Database test_db created successfully\n";
   mysql_close($conn); 
?&gt;
                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#b')">Kopírovať</button>
                                                </div>      <p><p>
                                                </p>
                                                <h3 id = 'p5'>Výber databázy</h3>
                                                <p>
                                                Po vytvorení spojenia s databázovým serverom je potrebné vybrať konkrétnu databázu, v ktorej sú priradené všetky tabuľky.
To je potrebné, pretože na jednom serveri môže byť viac databáz a môžete pracovať len s jedinou databázou naraz.
PHP poskytuje funkciu mysql_select_db pre výber databázy. Vracia TRUE pri úspechu  alebo FALSE pri zlyhaní.
<h5 class="card-header">Syntax</h5>
                                                <div class="card-body">
                                                    <p class="card-text">
                                                    
                                                    bool mysql_select_db( db_name, connection );                                                   
                                                    </p>
                                                    
                                                </div>      <p><p>
                                                <table>
                                                    <tr>
                                                        <th>Č.</th>
                                                        <th>Popis Parametra</th>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                        <strong>db_name</strong><br>
                                                        Povinné - Názov databázy, ktorá sa má vybrať
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>
                                                            <strong>connection</strong><br>
                                                            Voliteľné-ak nie je zadané, použije sa posledné pripojenie otvorené mysql_connect.
                                                        </td>
                                                    </tr>
                                                </table>
                                                <h5 class="card-header">Priklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'c'><pre>
                                                    
&lt;?php
   $dbhost = 'localhost:';
   $dbuser = 'guest';
   $dbpass = 'guest123';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) { 
      die('Could not connect: ' . mysql_error());
   }
   
   echo 'Connected successfully';
   
   mysql_select_db( 'test_db' );
   mysql_close($conn);
    
?&gt;
                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#c')">Kopírovať</button>
                                                </div>      <p><p>
                                                </p>
                                                <h3 id = 'p6'>Vytváranie Databázových Tabuliek</h3>
                                                <p>
                                                Ak chcete vytvoriť tabuľky v novej databáze, musíte urobiť to isté ako vytvorenie databázy. 
                                                Najprv vytvorte SQL dotaz na vytvorenie tabuľky, potom spustite dotaz pomocou funkcie mysql_query().
                                                </p>
                                                <h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'd'><pre>
                                                    
&lt;?php
   $dbhost = 'localhost:';
   $dbuser = 'root';
   $dbpass = 'rootpassword';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   echo 'Connected successfully';
   
   $sql = 'CREATE TABLE employee( '.
      'emp_id INT NOT NULL AUTO_INCREMENT, '.
      'emp_name VARCHAR(20) NOT NULL, '.
      'emp_address  VARCHAR(20) NOT NULL, '.
      'emp_salary   INT NOT NULL, '.
      'join_date    timestamp(14) NOT NULL, '.
      'primary key ( emp_id ))';
   mysql_select_db('test_db');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not create table: ' . mysql_error());
   }
   
   echo "Table employee created successfully\n";
   
   mysql_close($conn);
?&gt;
                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#d')">Kopírovať</button>
                                                </div>      <p><p>
                                                V prípade, že potrebujete vytvoriť veľa tabuliek, je lepšie vytvoriť textový súbor a dať všetky SQL 
                                                príkazy do tohto súboru, a potom načítať súbor do $sql premennej a spustiť tieto príkazy.
                                                <br>Zvážte nasledujúci obsah v sql_query.txt súbore
                                               
                                                   
                                               
                                              <div class="col-sm-6">
                                                <div class="card">
                                                    <h5 class="card-header">Program</h5>
                                                    <div class="card-body">
                                                      <p class="card-text" id = 'e'> <pre>
&lt;?php
   $dbhost = 'localhost:';
   $dbuser = 'root';
   $dbpass = 'rootpassword';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $query_file = 'sql_query.txt';
   
   $fp = fopen($query_file, 'r');
   $sql = fread($fp, filesize($query_file));
   fclose($fp); 
   
   mysql_select_db('test_db');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not create table: ' . mysql_error());
   }
   
   echo "Table employee created successfully\n";
   mysql_close($conn);
?&gt;</pre>
                                                        </p>
                                                       <button class="btn btn-primary" onclick="copyToClipboard('#e')">Kopírovať</button>
                                                    </div>
                                                 </div>
                                             </div>
                                             <div class="col-sm-6">
                                               <div class="card">
                                                   <h5 class="card-header">txt súbor</h5>
                                                    <div class="card-body">
                                                     <p class="card-text">
<pre>
CREATE TABLE employee(
   emp_id INT NOT NULL AUTO_INCREMENT,
   emp_name VARCHAR(20) NOT NULL,
   emp_address  VARCHAR(20) NOT NULL,
   emp_salary   INT NOT NULL,
   join_date    timestamp(14) NOT NULL,
   primary key ( emp_id ));
</pre>                                                         
                                                     </p>
                                                   </div>
                                               </div>
                                             </div>
                                            </div>

                                            <h3 id = 'p7'>Odstrániť databázu MySQL pomocou PHP</h3>
                                            <p>
                                            Ak databáza už nie je potrebná, môže byť vymazaná navždy pomocou mysql_query.
                                            <h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'f'><pre>
                                                    
&lt;?php
   $dbhost = 'localhost:';
   $dbuser = 'root';
   $dbpass = 'rootpassword';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'DROP DATABASE test_db';
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not delete database db_test: ' . mysql_error());
   }
   
   echo "Database deleted successfully\n";
   
   mysql_close($conn);
?&gt;
                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#f')">Kopírovať</button>
                                                </div>      <p><p>
                                                    <strong>Varovanie</strong>
                                                    <br> Je veľmi nebezpečné odstrániť databázu a akúkoľvek tabuľku. 
                                                    Takže pred odstránením akejkoľvek tabuľky alebo databázy by ste sa mali uistiť, že robíte všetko úmyselne.
                                            </p>
                                            <h3 id = 'p8'>Odstránenie tabuľky</h3>
                                            <p>Je to opäť otázka vydania jedného príkazu SQL prostredníctvom funkcie mysql_query 
                                                na odstránenie akejkoľvek tabuľky databázy. Buďte však veľmi opatrní pri používaní tohto príkazu,
                                                 pretože tým môžete odstrániť niektoré dôležité informácie, ktoré máte vo vašej tabuľke.
                                                 <h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'g'><pre>
                                                    
&lt;?php
   $dbhost = 'localhost:';
   $dbuser = 'root';
   $dbpass = 'rootpassword';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'DROP TABLE employee';
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not delete table employee: ' . mysql_error());
   }
   
   echo "Table deleted successfully\n";
   
   mysql_close($conn); 
?&gt;
                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#g')">Kopírovať</button>
                                                </div>      <p><p>
                                            </p>
                                            <h3 id = 'p9'>Vkladanie Údajov</h3>
                                            <p>
                                            Údaje je možné zadávať do tabuliek MySQL vykonaním príkazu SQL INSERT prostredníctvom PHP funkcie  
                                            mysql_query. Below a simple example to insert a record into employee table.
                                            <h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'h'><pre>
                                                    
&lt;?php
   $dbhost = 'localhost:';
   $dbuser = 'root';
   $dbpass = 'rootpassword';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'INSERT INTO employee '.
      '(emp_name,emp_address, emp_salary, join_date) '.
      'VALUES ( "guest", "XYZ", 2000, NOW() )';
      
   mysql_select_db('test_db');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   
   echo "Entered data successfully\n";
   
   mysql_close($conn);
?&gt;
                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#h')">Kopírovať</button>
                                                </div>      <p><p>
                                                V reálnej aplikácie, všetky hodnoty budú prijaté pomocou HTML
                                                 formulára a potom sa tieto hodnoty budú zachytené pomocou PHP skriptu 
                                                 a nakoniec  budú vložené do MySQL tabuliek.
Pri vložení dát je najlepšie použivať  funkciu get_magic_quotes_gpc () ak chcete zistiť, či je nastavená aktuálna 
konfigurácia pre magic quote alebo nie. Ak táto funkcia vráti hodnotu false, 
použite funkciu addslashes() na pridanie lomítok pred úvodzovkami.<br>
</p>
<h3 id = 'p10'>Získanie Údajov Z Databázy MySQL</h3>
<p>
Údaje je možné načítať z tabuliek MySQL vykonaním príkazu SQL SELECT prostredníctvom funkcie PHP mysql_query. 
Máte niekoľko možností, ako načítať dáta z MySQL.
Najčastejšie používanou možnosťou je použiť funkciu mysql_fetch_array(). 
Táto funkcia vracia riadok ako asociatívne pole, číselné pole alebo obidva. Táto funkcia vracia FALSE, ak nie sú žiadne ďalšie riadky.
Nižšie je jednoduchý príklad na načítanie záznamov z tabuľky zamestnancov.
<h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'y'><pre>
                                                    
&lt;?php
   $dbhost = 'localhost:';
   $dbuser = 'root';
   $dbpass = 'rootpassword';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT emp_id, emp_name, emp_salary FROM employee';
   mysql_select_db('test_db');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "EMP ID :{$row['emp_id']}  &lt;br&gt; ".
         "EMP NAME : {$row['emp_name']} &lt;br&gt; ".
         "EMP SALARY : {$row['emp_salary']} &lt;br&gt; ".
         "--------------------------------&lt;br&gt;";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?&gt;
                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#y')">Kopírovať</button>
                                                </div>      <p><p>
                                                Obsah riadkov je priradený k premennej $row a potom sa vytlačia hodnoty v riadku.
                                                <br>Vo vyššie uvedenom príklade konštanta MYSQL_ASSOC sa používa ako druhý argument mysql_fetch_array (), tak, že vráti riadok ako asociatívne pole. Pomocou asociatívneho poľa môžete získať prístup k poliam pomocou ich názvu namiesto použitia indexu.
PHP poskytuje inú funkciu nazývanú mysql_fetch_assoc(), ktorá tiež vracia riadok ako asociatívne pole.
<h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'z'><pre>
                                                    
&lt;?php
   $dbhost = 'localhost:';
   $dbuser = 'root';
   $dbpass = 'rootpassword';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT emp_id, emp_name, emp_salary FROM employee';
   mysql_select_db('test_db');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_assoc($retval)) {
      echo "EMP ID :{$row['emp_id']}  <br> ".
         "EMP NAME : {$row['emp_name']} <br> ".
         "EMP SALARY : {$row['emp_salary']} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn); 
?&gt;
                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#z')">Kopírovať</button>
                                                </div>      <p><p>
                                                Môžete tiež použiť konštantný MYSQL_NUM, ako druhý argument pre mysql_fetch_array().
                                                 To spôsobí funkciu vrátiť pole s číselným indexom.
                                                 <h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'l'><pre>
                                                    
&lt;?php
   $dbhost = 'localhost:';
   $dbuser = 'root';
   $dbpass = 'rootpassword';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT emp_id, emp_name, emp_salary FROM employee';
   mysql_select_db('test_db');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_NUM)) {
      echo "EMP ID :{$row[0]}  <br> ".
         "EMP NAME : {$row[1]} <br> ".
         "EMP SALARY : {$row[2]} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn); 
?&gt;
                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#l')">Kopírovať</button>
                                                </div>      <p><p>
</p>
                                        <h3 id = 'p11'>Aktualizácia údajov v databáze MySQL</h3>
                                        <p>
                                        Údaje v tabuľkách MySQL je možné aktualizovať  vykonaním SQL príkazu UPDATE a prostredníctvom funkcie PHP mysql_query.
Nižšie je jednoduchý príklad aktualizácie záznamov v tabuľke zamestnancov. Ak chcete aktualizovať záznam v akejkoľvek tabuľke, je potrebné tento záznam vyhľadať pomocou podmienenej klauzuly.
 Nižšie príklad používa primárny kľúč, aby nájsť  záznam v tabuľke zamestnancov.
 <h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'm'><pre>
                                                    
&lt;html&gt;
   
   &lt;head&gt;
      &lt;title&gt;Aktualizovať záznam v databáze MySQL &lt;/title&gt;
   &lt;/head&gt;
   
   &lt;body&gt;
      &lt;?php
         if(isset($_POST['update'])) {
            $dbhost = 'localhost:';
            $dbuser = 'root';
            $dbpass = 'rootpassword';
            
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            $emp_id = $_POST['emp_id'];
            $emp_salary = $_POST['emp_salary'];
            
            $sql = "UPDATE employee ". "SET emp_salary = $emp_salary ". 
               "WHERE emp_id = $emp_id" ;
            mysql_select_db('test_db');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not update data: ' . mysql_error());
            }
            echo "Updated data successfully\n";
            
            mysql_close($conn);
         }else {
            ?&gt;
               &lt;form method = "post" action = "&lt;?php $_PHP_SELF ?&gt;"&gt;
                  &lt;table width = "400" border =" 0" cellspacing = "1" 
                     cellpadding = "2"&gt;
                  
                     &lt;tr&gt;
                        &lt;td width = "100"&gt;Employee ID&lt;/td&gt;
                        &lt;td&gt;&lt;input name = "emp_id" type = "text" 
                           id = "emp_id"&gt;&lt;/td&gt;
                     &lt;/tr&gt;
                  
                     &lt;tr&gt;
                        &lt;td width = "100"&gt;Employee Salary&lt;/td&gt;
                        &lt;td&gt;&lt;input name = "emp_salary" type = "text" 
                           id = "emp_salary"&gt;&lt;/td&gt;
                     &lt;/tr&gt;
                  
                     &lt;tr&gt;
                        &lt;td width = "100"&gt; &lt;/td&gt;
                        &lt;td&gt; &lt;/td&gt;
                     &lt;/tr&gt;
                  
                     &lt;tr&gt;
                        &lt;td width = "100"&gt; &lt;/td&gt;
                        &lt;td&gt;
                           &lt;input name = "update" type = "submit" 
                              id = "update" value = "Update"&gt;
                        &lt;/td&gt;
                     &lt;/tr&gt;
                  
                  &lt;/table&gt;
               &lt;/form&gt;
            &lt;?php
         }
      ?&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#m')">Kopírovať</button>
                                                </div>      <p><p>
                                                    <h3 id='p12'>Odstránenie údajov z databázy MySQL</h3>
                                                    <p>
                                                    Údaje je možné vymazať z tabuliek MySQL vykonaním príkazu 
                                                    SQL DELETE a prostredníctvom funkcie PHP mysql_query.
Nižšie je jednoduchý príklad na odstránenie záznamov do tabuľky zamestnancov. Ak chcete odstrániť záznam v
 akejkoľvek tabuľke, je potrebné tento záznam vyhľadať pomocou podmienenej klauzuly.
 Nižšie príklad používa primárny kľúč, aby nájsť  záznam v tabuľke zamestnancov.
 <h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'o'><pre>
                                                    
&lt;html&gt;
   
   &lt;head&gt;
      &lt; title&gt;Odstrániť záznam z databázy MySQL&lt;/title&gt;
   &lt;/head&gt;
   
   &lt;body&gt;
      &lt;?php
         if(isset($_POST['delete'])) {
            $dbhost = 'localhost:';
            $dbuser = 'root';
            $dbpass = 'rootpassword';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
				
            $emp_id = $_POST['emp_id'];
            
            $sql = "DELETE FROM employee WHERE emp_id = $emp_id" ;
            mysql_select_db('test_db');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not delete data: ' . mysql_error());
            }
            
            echo "Deleted data successfully\n";
            
            mysql_close($conn);
         }else {
            ?&gt;
               &lt;form method = "post" action = "&lt;?php $_PHP_SELF ?&gt;"&gt;
                  &lt;table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2"&gt;
                     
                     &lt;tr&gt;
                        &lt;td width = "100"&gt;Employee ID&lt;/td&gt;
                        &lt;td&gt;&lt;input name = "emp_id" type = "text" 
                           id = "emp_id"&gt;&lt;/td&gt;
                     &lt;/tr&gt;
                     
                     &lt;tr&gt;
                        &lt;td width = "100"&gt; &lt;/td&gt;
                        &lt;td&gt; &lt;/td&gt;
                     &lt;/tr&gt;
                     
                     &lt;tr&gt;
                        &lt;td width = "100"&gt; &lt;/td&gt;
                        &lt;td&gt;
                           &lt;input name = "delete" type = "submit" 
                              id = "delete" value = "Delete"&gt;
                        &lt;/td&gt;
                     &lt;/tr&gt;
                     
                  &lt;/table&gt;
               &lt;/form&gt;
            &lt;?php
         }
      ?&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#o')">Kopírovať</button>
                                                </div>      <p><p>

                                                    </p>
                                        </p>
                                        <h3 id = 'p13'>Vykonajte zálohovanie MySQL pomocou PHP</h3>
                                        <p>
                                        Vždy je dobrou praxou pravidelné zálohovať databázy. Existujú tri spôsoby,  ktoré môžete použiť na zálohovanie databázy MySQL.
                                        <ul>
                                            <li>Pomocou príkazu SQL cez PHP.</li>
                                            <li>Pomocou MySQL mysqldump cez PHP.</li>
                                            <li>Používaním používateľského rozhrania phpMyAdmin.</li>
                                        </ul>
                                        <h4>Použitie príkazu SQL prostredníctvom PHP</h4>
                                        <p>
                                        Môžete spustiť príkaz SQL SELECT na zálohovanie akejkoľvek tabuľky. 
                                        Ak chcete vykonať kompletný výpis databázy, budete musieť napísať samostatný dotaz pre 
                                        každú tabuľku. Každá tabuľka bude uložená do samostatného textového súboru.
                                        <h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'q'><pre>
                                                    
&lt;?php
   $dbhost = 'localhost:';
   $dbuser = 'root';
   $dbpass = 'rootpassword';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
	
   $table_name = "employee";
   $backup_file  = "/tmp/employee.sql";
   $sql = "SELECT * INTO OUTFILE '$backup_file' FROM $table_name";
   
   mysql_select_db('test_db');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not take data backup: ' . mysql_error());
   }
   
   echo "Backedup  data successfully\n";
   
   mysql_close($conn); 
?&gt;
                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#q')">Kopírovať</button>
                                                </div>      <p><p>

                                        </p>
                                        Môžu existovať prípady, kedy budete musieť obnoviť údaje, ktoré ste zálohovali pred nejakým časom. Ak chcete obnoviť zálohu, stačí spustiť dotaz LOAD DATA INFILE, ako je tento
                                        <h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'r'><pre>
                                                    
&lt;?php
   $dbhost = 'localhost:';
   $dbuser = 'root';
   $dbpass = 'rootpassword';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
	
   $table_name = "employee";
   $backup_file  = "/tmp/employee.sql";
   $sql = "LOAD DATA INFILE '$backup_file' INTO TABLE $table_name";
   
   mysql_select_db('test_db');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not load data : ' . mysql_error());
   }
   echo "Loaded  data successfully\n";
   
   mysql_close($conn); 
?&gt;
                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#r')">Kopírovať</button>
                                                </div>      <p><p>
                                        <h4>Pomocou MySQL mysqldump cez PHP</h4>
                                        <p>
                                        MySQL poskytuje nástroj mysqldump na vykonávanie zálohovania databázy. Pomocou tohto binárneho súboru môžete prevziať kompletný výpis databázy v jednom príkaze.
                                        <h5 class="card-header">Príklad</h5>
                                                <div class="card-body">
                                                    <p class="card-text" id = 'p1'><pre>
                                                    
&lt;?php
   $dbhost = 'localhost:';
   $dbuser = 'root';
   $dbpass = 'rootpassword';
   
   $backup_file = $dbname . date("Y-m-d-H-i-s") . '.gz';
   $command = "mysqldump --opt -h $dbhost -u $dbuser -p $dbpass ". "test_db | gzip > $backup_file";
   
   system($command); 
?&gt;
                                                    
</pre> </p>
                                                    <button class="btn btn-primary" onclick="copyToClipboard('#p1')">Kopírovať</button>
                                                </div>      <p><p>
                                        </p>
                                        <h3 id = 'p14'>Používanie používateľského rozhrania phpMyAdmin</h3>
                                        <p>
                                        Ak máte k dispozícii používateľské rozhranie phpMyAdmin, potom je veľmi jednoduché zálohovať vašu databázu.
Ak chcete zálohovať databázu MySQL pomocou phpMyAdmin, kliknite na odkaz "export" na hlavnej stránke phpMyAdmin. Vyberte databázu, ktorú chcete zálohovať,
 skontrolujte príslušné možnosti SQL a zadajte názov záložného súboru.
                                        </p>
                                        </p>

                                        </article>

								</div>
							</div>
						</div>
					</div>
				</div>

<?php require_once("footer.php"); ?> 
