-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: iun. 15, 2023 la 03:36 PM
-- Versiune server: 10.4.28-MariaDB
-- Versiune PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `web`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `choices`
--

CREATE TABLE `choices` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `text`) VALUES
(1, 1, 0, 'în cazul depășirii în mod repetat, cu mai mult de 20 km/h, a vitezei maxime legale;'),
(2, 1, 0, 'în cazul neopririi la semnalul agentului de cale ferată;'),
(3, 1, 1, 'în cazul neprezentării în termen de 24 de ore la unitatea de poliție competentă pe raza căreia s-a produs un accident cu avarierea vehiculului.'),
(4, 2, 0, 'să reducă viteza;'),
(5, 2, 1, 'să oprească imediat;'),
(6, 2, 0, 'să continue deplasarea.'),
(7, 3, 0, 'rândul din stânga, de la o distanţă de cel puţin 100 m;'),
(8, 3, 1, 'rândul din stânga sau din dreapta, de la o distanţă de cel puţin 50 m;'),
(9, 3, 0, 'rândul din dreapta, de la o distanţă de cel puţin 100 m.'),
(10, 4, 1, 'să se asigure că manevra poate fi executată în condiţii de siguranţă, după care să semnalizeze intenţia de schimbare a poziţiei de mers şi să efectueze depăşirea;'),
(11, 4, 0, 'să semnalizeze din timp intenţia de schimbare a direcţiei de mers;'),
(12, 4, 0, 'să mărească viteza de deplasare, astfel încât să scurteze timpul de realizare a depăşirii.'),
(13, 5, 0, 'când circulaţi pe prima bandă;'),
(14, 5, 1, 'când un alt vehicul s-a angajat în depăşirea dvs.;'),
(15, 5, 0, ' în intersecţii.'),
(20, 6, 1, 'celor care, prin construcţie, nu pot depăşi viteza de 50 km/oră;'),
(21, 6, 0, 'motocicletelor cu şi fără ataş;'),
(22, 6, 1, 'tractoarelor şi maşinilor agricole autopropulsate.'),
(23, 7, 1, 'mecanismul de direcţie prezintă uzuri peste limitele admise;'),
(24, 7, 1, 'autovehiculul are aplicate inscripţii, desene, semne distinctive sau reclame de natură să împiedice ori să diminueze eficacitatea dispozitivelor de iluminare şi de semnalizare luminoasă sau citirea numărului de înmatriculare;'),
(25, 7, 1, 'autovehiculul are montate accesorii pe parbrize ori pe geamurile laterale, care restrâng sau estompează vizibilitatea conducătorului în timpul mersului.'),
(26, 8, 0, 'zgomote în zona manetei frânei de mână;'),
(27, 8, 1, 'un consum suplimentar de carburant;'),
(28, 8, 1, 'încălzirea excesivă a butucilor roţilor din spate.'),
(29, 9, 1, 'chiar şi la o viteză de coliziune de aproximativ 20 km/h, există riscul unei accidentări;'),
(30, 9, 0, 'pericolele pot apărea la o viteză de peste 60 km/h;'),
(31, 9, 0, 'pericolul de accidentare este exclus.'),
(32, 10, 1, 'deoarece aderenţa anvelopelor pe partea carosabilă scade, iar spaţiul de frânare creşte;'),
(33, 10, 0, 'deoarece nu puteţi sesiza prompt aprinderea lămpilor de stop ale autovehiculului din faţă, atunci când acesta frânează;'),
(34, 10, 0, 'deoarece roţile autovehiculului din faţă aruncă spre dvs. criblură.'),
(35, 11, 0, 'să reduceți viteza vehiculului și să circulați cu atenție;'),
(36, 11, 1, 'să opriți vehiculul;'),
(37, 11, 0, 'să reduceți viteza vehiculului și să claxonați.'),
(38, 12, 0, 'are elemente de caroserie distruse;'),
(39, 12, 1, 'au trecut mai mult de 30 de zile de la data producerii avariei;'),
(40, 12, 0, 'au trecut mai mult de 3 zile de la constatare.'),
(41, 13, 1, 'să profereze injurii;'),
(42, 13, 1, 'să săvârşească acte sau gesturi obscene;'),
(43, 13, 1, 'să adreseze celorlalţi participanţi la trafic expresii jignitoare sau vulgare.'),
(44, 14, 0, 'atunci când este format dintr-o singură linie;'),
(45, 14, 1, 'atunci când linia continuă este însoţită de una discontinuă, dispusă către partea conducătorului;'),
(46, 14, 0, 'atunci când drumul este în aliniament, iar vizibilitatea în faţă este asigurată.'),
(47, 15, 0, 'numai pentru circulaţia rutieră care se desfăşoară în tunele;'),
(48, 15, 1, 'numai pentru banda deasupra căreia este instalat;'),
(49, 15, 0, 'pentru toată lăţimea părţii carosabile.'),
(50, 16, 0, 'puteţi depăşi numai după ce pietonii şi bicicliştii v-au făcut semn în acest sens;'),
(51, 16, 1, 'respectaţi prevederile legale;'),
(52, 16, 0, 'bicicliştii şi pietonii pot fi depăşiţi numai dacă distanţa laterală este de 3 m.'),
(53, 17, 0, 'anual, la orice service auto;'),
(54, 17, 1, 'periodic, conform legii;'),
(55, 17, 0, 'la cel mult doi ani, la o staţie de inspecţie tehnică autorizată.'),
(56, 18, 1, 'instalarea de mijloace de semnalizare rutieră sau modificarea poziţiei acestora fără autorizaţie legală;'),
(57, 18, 1, 'organizarea sau participarea, în calitate de conducător auto sau de animale, la întreceri neautorizate pe drumurile publice;'),
(58, 18, 1, 'blocarea cu intenţie a drumului public, dacă se pune în pericol siguranţa circulaţiei.'),
(59, 19, 0, 'să folosiţi pe timpul zilei luminile de întâlnire;'),
(60, 19, 1, 'să opriţi pe partea carosabilă;'),
(61, 19, 0, 'să depăşiţi.'),
(62, 20, 0, 'circulaţi mai departe cu viteză mărită;'),
(63, 20, 1, 'reduceţi viteza şi vă angajaţi mult spre dreapta;'),
(64, 20, 0, 'avertizaţi cu farurile vehiculele care circulă din sens opus.'),
(65, 21, 0, 'semnalizaţi cu claxonul şi cu luminile, pentru a împiedica persoana respectivă să traverseze;'),
(66, 21, 1, 'reduceţi din timp viteza şi luaţi toate măsurile de evitare a lovirii persoanei care traversează;'),
(67, 21, 0, 'legal nu aveţi nicio obligaţie, iar în caz de accident, pietonul imprudent va răspunde, inclusiv pentru eventualele avarii produse.'),
(68, 22, 0, 'lipseşte simbolul „RO”;'),
(69, 22, 1, 'autovehiculul prezintă scurgeri de carburanţi sau de lubrifianţi;'),
(70, 22, 0, 'nu ai practică de conducere de cel puţin un an.'),
(71, 23, 0, 'oricărui accidentat;'),
(72, 23, 1, 'accidentaţilor aflaţi în stare de inconştienţă, care nu respiră şi nu au puls;'),
(73, 23, 0, 'numai accidentaţilor care au suferit fracturi uşoare.'),
(74, 24, 0, 'legea nu prevede obligaţii;'),
(75, 24, 1, 'elevii pot fi neatenţi şi pot apărea brusc în faţa maşinii;'),
(76, 24, 0, 'elevii vor traversa numai pe trecerea de pietoni.'),
(77, 25, 1, 'durează cel mult 5 minute;'),
(78, 25, 0, 'vehiculul a fost oprit pentru îmbarcarea sau debarcarea unor persoane, fără ca prin aceasta să fie perturbată circulaţia;'),
(79, 25, 0, 'vehiculele de până la 3,5 tone execută operaţiunea de aprovizionare cu mărfuri alimentare.');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `questions`
--

INSERT INTO `questions` (`question_number`, `text`) VALUES
(1, 'În care dintre situații se suspendă exercitarea dreptului de a conduce?'),
(2, 'La semnalul poliţistului având braţul stâng întins orizontal, orientat cu faţa către autovehiculul care se apropie, conducătorul auto trebuie:'),
(3, 'Ce rând trebuie să ocupe conducătorul de vehicul şi de la ce distanţă, pentru a se deplasa pe direcţia înainte, într-o intersecţie fără marcaje din afara localităţii?'),
(4, 'Ce trebuie să facă un conducător de vehicul pentru ca depăşirea să fie considerată regulamentară?'),
(5, 'Când nu este permis să măriți viteza de deplasare a vehiculului?'),
(6, 'Căror categorii de autovehicule le este interzis să circule pe autostradă?'),
(7, 'Se interzice circulaţia pe drumurile publice a autovehiculului dacă:'),
(8, 'Neeliberarea completă a frânei de staţionare determină:'),
(9, 'Ce pericole pot apărea prin nefolosirea centurii de siguranţă?'),
(10, 'De ce este necesar să măriţi distanţa faţă de autovehiculul care circulă în faţa dvs., atunci când circulaţi pe un carosabil umed?'),
(11, 'La semnalul nevăzătorilor care traversează strada sunteți obligat:'),
(12, 'Un autovehicul avariat nu mai poate circula dacă:'),
(13, 'Conducătorilor de vehicule le este interzis:'),
(14, 'În ce situaţie se poate încălca marcajul longitudinal continuu al axului drumului?'),
(15, 'Semnificaţia unui indicator rutier, instalat deasupra unei benzi de circulaţie, este valabilă:'),
(16, 'Ce trebuie să aveţi în vedere atunci când intenţionaţi să depăşiţi atât biciclişti, cât şi grupuri de pietoni care se deplasează pe carosabil?'),
(17, 'Inspecția tehnică periodică a autovehiculelor / tractoarelor agricole sau forestiere și a remorcilor trebuie efectuată:'),
(18, 'Se pedepsesc penal următoarele acţiuni:'),
(19, 'Dacă circulaţi pe un drum naţional european (E), vă este interzis:'),
(20, 'Din sens opus, un vehicul depăşeşte un altul şi nu poate reveni pe banda sa. Cum vă comportaţi corect?'),
(21, 'Cum procedaţi în cazul în care observaţi în timp util o persoană în vârstă care traversează neregulamentar drumul public, în faţa dvs.?'),
(22, 'Nu poţi circula cu autovehiculul pe drumurile publice atunci când:'),
(23, 'Resuscitarea cardio-respiratorie trebuie efectuată:'),
(24, 'Ce trebuie să aveţi în vedere în cazul în care vă apropiaţi de o şcoală şi observaţi că elevii părăsesc clădirea?'),
(25, 'Imobilizarea voluntară a unui vehicul se consideră oprire, dacă:');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` char(10) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `teste_trecute` int(11) NOT NULL DEFAULT 0,
  `teste_picate` int(11) NOT NULL DEFAULT 0,
  `progres` float NOT NULL DEFAULT 0,
  `lectii_completate` varchar(65) NOT NULL DEFAULT '00000000000000000000000000000000000000000000000000000000000000000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `user`
--

INSERT INTO `user` (`id`, `email`, `phone`, `username`, `password_hash`, `teste_trecute`, `teste_picate`, `progres`, `lectii_completate`) VALUES
(1, 'claudia.solomon39@yahoo.com', '0764466605', 'claudia', '$2y$10$hSRFutChA74v3qAxQLF1reXs.a1mrgvWIaEcE1mKVes4UFbMmFvHy', 0, 0, 0, '00000000000000000000000000000000000000000000000000000000000000000'),
(3, 'claudia.solomon59@yahoo.com', '0787816027', 'claudia2', '$2y$10$mPf/AIwKQ3nkfPontUm3re5RvBPkT10ZZlB2ucrvuHoBW6sw5tQTS', 5, 2, 9.23077, '11111100000000000000000000000000000000000000000000000000000000000'),
(4, 'claudia.solomon29@yahoo.com', '0764466605', 'claudia3', '$2y$10$BL5z5pIitus2Fg2cJv.aAuypCok04tkAf9sEi1c1jIFmm/lnUOdfW', 0, 0, 0, '00000000000000000000000000000000000000000000000000000000000000000');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexuri pentru tabele `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT pentru tabele `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
