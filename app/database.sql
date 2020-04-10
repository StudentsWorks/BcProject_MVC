CREATE DATABASE IF NOT EXISTS BCproject;

ALTER DATABASE BCproject CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

USE BCproject;

CREATE TABLE tests (
    test_id INT(6) PRIMARY KEY AUTO_INCREMENT,
    test_type VARCHAR(15),
    test_name varchar(50) UNIQUE
); 

CREATE TABLE solutions (
    question_id INt(8) PRIMARY KEY AUTO_INCREMENT,
    test_name  varchar(50) REFERENCES tests.test_name,
    question varchar(800),
    solution varchar(200)
);


CREATE TABLE options_bank (
    option_id INT(6) PRIMARY KEY AUTO_INCREMENT,
    test_name varchar(50) REFERENCES tests.test_name,
    options VARCHAR(1000)
);

INSERT INTO tests(test_name, test_type) VALUES
    ("instalacia", "open"),
    ("syntax", "multiple"),
    ("premenne", "open"),
    ("operatory", "multiple"),
    ("sluckyApodmenky", "open"),
    ("funckie", "open"),
    ("triedy", "open"),
    ("mysql", "open"),
    ("cookies", "multiple"),
    ("sessions", "multiple");

INSERT INTO solutions(question, solution, test_name) VALUES
    ("Kto kontroluje požadovanú webovú stránku a vyvoláva ju pre vás?", "webový server", "instalacia"),
    ("Prihlasovacie údaje používateľa všetky druhy ďalších dôležitých informácii sa uchovávajú v","databázach", "instalacia"),
    ("Jazyk, v ktorom definujete obrysy, nejaké vlastnosti stránky, ako sú tlačidlá, tabuľky, polia, zoznamy atď.", "html", "instalacia"),
    ("S týmto jazykom môžete meniť typy písma, farby a obrysy HTML objektov", "css", "instalacia"),
    ("veľký šéf nad vetkými web jazykmi", "javaskript", "instalacia"),
    ("Jjeden z najjednoduchších lokálnych serverov, ktorý funguje vo všetkých hlavných operačných systémoch", "xampp", "instalacia"),
    ("Tento server funguje len v operačnom systéme Windows.", "wamp", "instalacia"),

    ("Jednoriadkový komentár", "//", "syntax"),
    ("Viacriadkový komentár", "/**/", "syntax"),
    ("Príkazy PHP sa končia", "bodkočiarkou", "syntax"),
    ("PHP kód dávame do značiek", "&lt;?php ?&gt;", "syntax"),
    ("Tento znak musí predchádzať menám všetkých premenných", "$", "syntax"),

    ("medzi znakom $ a názvom premennej nemôžu byť", "medzery", "premenne"),
    ("Ktorý s nasledujúcich typov údajov PHP NEpodporuje: reťazec, celé číslo, NULL, set, object", "set", "premenne"),
    ("Údajový typ, ktorý obsahuje ostupnosť znakov", "reťazec", "premenne"),
    ("Nenulové číslo medzi -2 147 483 648 a 2 147 483 647: ", "celé číslo", "premenne"),
    ("Číslo s pohyblivou rádovou čiarkou", "float", "premenne"),
    ("Predstavuje dva možné stavy: true/1 alebo false/0", "Boolean", "premenne"),
    ("Ukladá viacero hodnôt do jednej premennej", "pole", "premenne"),
    ("Typ údajov, ktorý ukladá údaje a informácie o tom, ako tieto údaje spracovať", "objekt", "premenne"),
    ("Špeciálny typ údajov, ktorý môže mať iba jednu hodnotu", "null", "premenne"),
    ("Kľúčové slovo _____ sa používa na prístup k globálnej premennej zvnútra funkcie", "global", "premenne"),
    ("V pripade, keď chceme zachranit hodnotu lokálnej premennej,použijeme kľúčové slovo", "static", "premenne"),

    ("Ktorý s nasledujúcich operátorov je aritmetický", "*", "operatory"),
    ("Ktorý s nasledujúcich operátorov je operátorom priradenia", "=", "operatory"),
    ("Ktorý s nasledujúcich operátorov je porovnávacím", "===", "operatory"),
    ("Ktorý s nasledujúcich operátorov je operátorom dekrementácie", "--", "operatory"),
    ("Logický operátor OR", "||", "operatory"),
    ("Ktorý s nasledujúcich operátorov je reťazcový", ".=", "operatory"), 
    ("Operátor s najväčšou príoritou", "()", "operatory"),

    ("Príkaz __ vykoná nejaký kód, ak je jedna podmienka splnená", "if", "sluckyApodmenky"),
    ("Príkaz __ ... ____ vykoná nejaký kód, ak je podmienka pravdivá, a iný kód, ak je táto podmienka nepravdivá.", "if else", "sluckyApodmenky"),
    ("Príkaz if ... ______ ... else vykonáva rôzne kódy pre viac ako dve podmienky.", "elseif", "sluckyApodmenky"),
    ("Príkaz _____ sa používa na vykonávanie rôznych kusov kódu na základe rôznych podmienok.", "switch", "sluckyApodmenky"),
    ("Slučka _____ vykonáva blok kódu, pokiaľ je zadaná podmienka splnená. ", "while", "sluckyApodmenky"),
    ("Slučka __ ... ____ vždy vykoná blok kódu aspoň raz, potom skontroluje podmienku", "do while", "sluckyApodmenky"),
    ("Slučka ___ sa používa, keď vopred viete, koľkokrát by sa mala nejaka cast kodu sa opakovat. ", "for", "sluckyApodmenky"),
    ("Slučka ______ pracuje iba na poliach a používa sa na opakovanie každej dvojice kľúč/hodnota v poli.", "foreach", "sluckyApodmenky"),

    ("Deklarovanie funkcie sa začína slovom", "function", "funckcie"),
    ("Názov funkcie NIE môže začínať ", "číslom", "funckcie"),
    ("Názvy funkcií NIE sú case-senzitívne (pravda/nepravda)", "pravda", "funckcie"),
    ("______ sú uvedené za názvom funkcie, v zátvorkách.", "argumnety", "funckcie"),
    ("Ak chcete, aby funkcia vrátila hodnotu, použite príkaz", "return", "funckcie"),
    ("Ak chcete deklarovať typ pre návrat funkcie, pri deklarovaní funkcie pridajte", ":", "funckcie"),
    ("Funkcia ____vráti celkový počet znakov vrátane medzier", "strlen()", "funckcie"),
    ("Funkcia ____ sa používa na vrátenie podreťazca alebo časti reťazca (tu a dalej odpoved v tvare funkcia() )", "substring()", "funckcie"),
    ("Niekedy musíme nájsť nejaký podreťazec v reťazci. Na toto slúži funkcia ", "strpos()", "funckcie"),
    ("Táto funkcia zaokrúhľuje čísla s desatinnými miestami nahor alebo nadol", "round()", "funckcie"),
    ("Vracia náhodné číslo medzi dvoma číslami", "rand()", "funckcie"),

    ("Šablóna pre objekty, spojenie nejakého kódu a niektorých údajov", "trieda", "triedy"),
    ("Inštancia triedy", "objekt", "triedy"),
    ("Údaje, ktoré sa vzťahujú k objektu", "vlastnosť", "triedy"),
    ("Funkčnosť objektu. Toto sú funkcie v rámci triedy", "metódy", "triedy"),
    ("Objekty triedy sa vytvárajú pomocou kľúčového slova", "new", "triedy"),
    ("Kľúčové slovo _____ môžete použiť na kontrolu, či objekt patrí do konkrétnej triedy", "instanceof", "triedy"),
    ("Metódy sa štandardne deklarujú", "public", "triedy"),
    ("Ku vlastnostiam a metódam s týmto rozsahom je možné odkazovať iba s tried, ktoré zbedačili tuto vlastnosť od tejto triedy", "private", "triedy"),
    ("Môžeme použiť vlastnosť len v rámci tejto triedy", "protected", "triedy"),

    ("Názov hosta spusteného databázového server. Predvolená hodnota je localhost: 3306", "server", "mysql"),
    ("Užívateľské meno prístupu k databáze", "user", "mysql"),
    ("Hheslo používateľa, ktorý pristupuje k databáze", "passwd", "mysql"),
    ("Ak sa do mysql_connect uskutoční druhý hovor s rovnakými argumentmi, nebude vytvorené žiadne nové pripojenie", "new_link", "mysql"),
    ("Zatvorenie databázového pripojenia", "mysql_close", "mysql"),
    ("Funkcia na otvorenie databázového pripojenia", "mysql_connect", "mysql"),
    ( "PHP poskytuje funkciu _____ pre výber databázy", " mysql_select_db", "mysql"),
    ("Údaje je možné načítať z tabuliek MySQL vykonaním príkazu SQL SELECT prostredníctvom funkcie", "mysql_query", "mysql"),

    ("Nastavuje názov súboru cookie a je uložený v premennej prostredia HTTP_COOKIE_VARS", "name", "cookies"),
    ("Nastavuje hodnotu pomenovanej premennej a je obsah, ktorý skutočne chcete uložiť", "value", "cookies"),
    ("Toto špecifikuje budúci čas v sekundách od 00: 00: 00 GMT 1. Januára 1970.", "expiry", "cookies"),
    ("Toto určuje adresáre, pre ktoré je súbor cookie platný.", "path", "cookies"),
    ("Toto môže byť použité na zadanie názvu domény vo veľmi veľkých doménach a musí obsahovať aspoň dve obdobia", "domain", "cookies"),
    ("Tato hodnota môže byť nastavená na 1, aby určiť, že cookie by mala byť odoslaná iba bezpečným prenosom pomocou HTTPS", "security", "cookies"),
    ("Funkciu _____ môžete použiť na kontrolu, či je súbor cookie nastavený alebo nie", "isset()", "cookies"),

    ("Umiestnenie dočasného súboru je určené nastavením v php.ini súbor s názvom", "session.save_path", "sessions"),
    ("PHP relácie je ľahko spustiť volaním na funkciu", "session_start()", "sessions"),
    ("Premenné relácie sú uložené v asociatívnom poli s názvom ", "$_SESSION", "sessions"),
    ("Využivajte funkciu ______ na kontrolu, či je premenná relácie už nastavená alebo nie", "isset()", "sessions"),
    ("PHP relácia môže byť zničená pomocou funckie", "session_destroy()", "sessions"),
    ("Ak chcete zničiť jednu premennú relácie, môžete použiť funkciu", "unset()", "sessions");

INSERT INTO options_bank (options, test_name) VALUES
    ('["@","!","%", "#", "&", "^", "*", ":", ".", ",", "\", "/", "-", "+", "()", "&lt;&gt;"]', "syntax"),
    ('["!=", "+-", "/*", "//", "$", "&", "&&", "and", "{}", "@", "?", "..", "|||", "~"]', "operatory"), 
    ('["cookie_vars", "cookie_chars", "called", "set", "valid", "named_as", "lifetime", "run_at", "host", "find", "look"]', "cookies"),
    ('["session.path", "session.map", "is_valid()", "exists()", "wasset()", "destroy()", "forget()", "kill()", "make()", "create()", "manage()"]', "sessions");
