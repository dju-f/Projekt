-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2025 at 05:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conspiracy_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `article_title` varchar(255) NOT NULL,
  `article_subtitle` varchar(255) NOT NULL,
  `article_image` varchar(255) NOT NULL,
  `article_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `article_title`, `article_subtitle`, `article_image`, `article_text`) VALUES
(1, 'Die Flache Erde – Die größte Lüge der modernen Wissenschaft!', 'Seit Jahrhunderten wird uns eingetrichtert, dass die Erde eine Kugel ist. Doch was, wenn all dies eine gigantische Lüge ist? Die Flat Earth Theory deckt auf, dass wir auf einer stabilen, flachen Scheibe leben und bewusst getäuscht werden.', 'images/fe_cover.png', '<h2 class=\"article\">Beweise für eine flache Erde: Der Horizont ist immer flach</h2>\r\n\r\n<p>Wenn die Erde eine Kugel wäre, dann müssten wir eine merkliche Krümmung erkennen können. Doch egal ob auf dem Meer, in der Wüste oder hoch oben in einem Flugzeug – der Horizont bleibt immer perfekt flach. Zahlreiche Amateurballonaufnahmen zeigen einen geraden Horizont, selbst in großen Höhen. Eine Krümmung existiert nicht. </p>\r\n \r\n<h2 class=\"article\">Wasser bleibt immer waagerecht</h2>\r\n \r\n<p>Nach den Gesetzen der Physik sucht Wasser immer den tiefsten Punkt und bleibt dabei horizontal. Wären wir auf einer Kugel, dann müsste Wasser sich um die Krümmung biegen – eine absurde Vorstellung. Die Tatsache, dass Ozeane, Seen und Flüsse vollkommen eben sind, widerlegt das Globusmodell eindeutig. </p>\r\n \r\n<h2 class=\"article\">Die NASA und die gefälschten Weltraumbilder</h2>\r\n \r\n<p>Alle Bilder der Erde aus dem „Weltraum“ stammen von der NASA oder anderen Raumfahrtorganisationen. Doch diese Bilder sind nachweislich manipuliert oder computergeneriert. Offizielle NASA-Mitarbeiter haben zugegeben, dass die Bilder der Erde mit CGI bearbeitet werden. Wieso sollte man echte Fotos fälschen, wenn die Erde tatsächlich eine Kugel wäre? </p>\r\n\r\n<img src=\"images/fe_fake.jpeg\" alt=\"fe_fake\" width=\"600\" class=\"article\">\r\n\r\n<h2 class=\"article\">Die Antarktis als unüberwindbare Grenze </h2>\r\n \r\n<p>Laut dem Mainstream-Modell ist die Antarktis ein gefrorener Kontinent am „Südpol“. Tatsächlich jedoch handelt es sich um eine riesige Eisbarriere, die den Rand der flachen Erde umgibt. Niemand darf ohne spezielle Genehmigung dorthin reisen, und unabhängige Expeditionen werden verhindert. Warum? Weil sie die Wahrheit entdecken könnten! </p>\r\n \r\n<img src=\"images/fe_arktis.jpeg\" alt=\"fe_arktis\" width=\"600\" class=\"article\">\r\n\r\n<h2 class=\"article\">Flugrouten widersprechen dem Globusmodell </h2>\r\n \r\n<p>Viele Flugrouten zwischen der Südhalbkugel und der Nordhalbkugel machen auf einer Kugelerde keinen Sinn, doch auf einer flachen Erde ergeben sie eine logische Strecke. Kommerzielle Flugzeuge umgehen oft die Antarktis – ein weiteres Indiz dafür, dass die Wahrheit über die wahre Form der Erde vertuscht wird. </p>\r\n \r\n<h2 class=\"article\">Warum die Wahrheit verborgen wird </h2>\r\n \r\n<p>Die Frage, die viele stellen: Warum sollten „sie“ uns anlügen? Die Antwort ist einfach: Kontrolle. Wenn die Menschheit erkennen würde, dass sie auf einer stabilen, flachen Erde lebt, wäre das gesamte Weltbild der modernen Wissenschaft in Frage gestellt. Raumfahrtprogramme, die Vorstellung von unendlichem Raum, sogar die Evolutionstheorie – all das basiert auf dem Globusmodell. Ein Erwachen zur Wahrheit würde das Machtgefüge der Eliten erschüttern. </p>\r\n \r\n<h2 class=\"article\">Fazit </h2>\r\n \r\n<p>Die Flat Earth Theory ist keine Fantasie, sondern eine fundierte Erkenntnis, die mit zahlreichen logischen Beweisen gestützt wird. Die Welt ist nicht das, was uns erzählt wird – sie ist viel außergewöhnlicher, als wir je gedacht haben. Es ist Zeit, dass die Menschheit aufwacht und die größte Täuschung der Geschichte hinterfragt. Die Wahrheit ist vor unseren Augen – wir müssen nur bereit sein, sie zu sehen. </p>\r\n \r\n<h2 class=\"article\">Hier ist ein Video, dass diese Theorie begründet:</h2>\r\n \r\n<video width=\"600\" controls class=\"article\">\r\n    <source src=\"images/fe_yt.mp4\" type=\"video/mp4\">\r\n \r\n</video>\r\n\r\n<br>\r\n<a class=\"button_test\" href=\"https://www.google.com/\" target=\"_blank\">Kaufe unseren Flat Earth Schlüsselanhänger! </a>'),
(2, 'Die Hohle Erde: Ein verborgenes Reich unter unseren Füßen!', 'Die Theorie der hohlen Erde besagt, dass unsere Erde ein hohler Körper ist, der geheime Zivilisationen im Inneren beherbergt. Berichte über Eingänge in die Polarregionen und wissenschaftliche Anomalien werfen Fragen auf. Ein Reich unter unseren Füssen!', 'images/he_cover.jpeg', '\r\n \r\n<p>Alles, was du über die Erde zu wissen glaubst, ist eine Lüge. Seit Jahrhunderten wird uns ein falsches Weltbild aufgezwungen, um die größte Wahrheit der Menschheit zu verbergen: Die Erde ist hohl. Unter unseren Füßen existiert eine geheime Welt, bevölkert von hochentwickelten Wesen, deren Technologie und Wissen jede Vorstellungskraft übersteigt. Die Regierungen wissen es. Die Elite weiß es. Doch sie halten es verborgen, denn die Wahrheit würde ihr gesamtes Machtgefüge zum Einsturz bringen.</p>\r\n \r\n<h2 class=\"article\">Die Grösste Vertuschung aller Zeiten</h2>\r\n \r\n<p>Die hohle Erde ist keine bloße Theorie – sie ist ein streng gehütetes Geheimnis. Warum gibt es so viele Sperrzonen in der Antarktis? Warum verschwinden immer wieder Expeditionen? Warum sind Satellitenbilder der Polargebiete manipuliert oder unvollständig? Weil dort die Eingänge zu einer anderen Welt liegen.</p>\r\n \r\n<p>Schon seit Jahrhunderten gibt es Berichte von Forschern, Piloten und Seeleuten, die von gigantischen Öffnungen an den Polen erzählen, von unerklärlichen Wetterphänomenen und einer völlig neuen, unbekannten Welt. Wer diese Geheimnisse entdeckt, verschwindet oder wird mundtot gemacht.</p>\r\n \r\n<img src=\"images/he_maps.jpeg\" alt=\"he_maps\" width=\"600\" class=\"article\">\r\n\r\n<h2 class=\"article\">Die Eingänge zur inneren Erde</h2>\r\n \r\n<p>Die beiden Hauptzugänge zur hohlen Erde befinden sich an den Polen. Es ist kein Zufall, dass Flugzeuge niemals direkt über diese Gebiete fliegen dürfen und dass Satellitenbilder dort stets bearbeitet sind. Es ist kein Zufall, dass Regierungen und Militärs strengste Überwachung über diese Regionen halten.</p>\r\n \r\n<p>In den 1940er Jahren berichtete der US-Admiral Richard E. Byrd von einer Expedition, bei der er eine riesige, unbekannte Welt jenseits des Eises entdeckte – mit üppigen Wäldern, gigantischen Flüssen und einer fortschrittlichen Zivilisation. Kurz nach seiner Rückkehr wurde sein Bericht unterdrückt, und alle Informationen über seine Entdeckung verschwanden.</p>\r\n \r\n<p>Was hat er gesehen? Warum durfte niemand erfahren, was er gefunden hatte?</p>\r\n \r\n<img src=\"images/he_eingang.jpeg\" alt=\"he_eingang\" width=\"600\" class=\"article\">\r\n\r\n<h2 class=\"article\">Eine Welt voller Leben – Die geheime Zivilisation der Inneren Erde</h2>\r\n \r\n<p>In der hohlen Erde leben Wesen, die uns in jeder Hinsicht überlegen sind. Manche behaupten, es seien die Nachfahren von Atlantis und Lemurien, die sich nach dem Untergang ihrer Reiche in die Erde zurückzogen. Andere berichten von gigantischen, strahlenden Wesen mit unglaublichen Kräften, die als Wächter dieser verborgenen Welt dienen.</p>\r\n\r\n<img src=\"images/he_cover.jpeg\" alt=\"he_cover\" width=\"600\" class=\"article\">\r\n\r\n<p>Diese Zivilisation besitzt eine Technologie, die unsere kühnsten Vorstellungen übertrifft. Sie haben Fluggeräte, die sich schneller und lautloser bewegen als jedes irdische Flugzeug. Sie beherrschen Energien, die unbegrenzte Kraft liefern könnten – doch genau dieses Wissen wird vor uns verborgen.</p>\r\n\r\n<p>Warum hält die Elite diese Informationen unter Verschluss? Weil die Technologie der Inneren Erde die gesamte Weltordnung umstürzen könnte. Wenn wir freien Zugang zu dieser Energie hätten, gäbe es keine Abhängigkeit mehr von Öl, Gas oder Elektrizität. Die Konzerne würden zusammenbrechen. Die Kontrolle der Eliten wäre vorbei.</p>\r\n \r\n<h2 class=\"article\">Die Innere Sonne – Die wahre Energiequelle der Erde</h2>\r\n \r\n<p>Einer der größten Beweise für die hohle Erde ist die Existenz einer inneren Sonne. Während uns erzählt wird, dass der Erdkern ein brodelnder Feuerball ist, existiert dort in Wahrheit eine zweite Sonne, die das Innere der Erde erhellt und ein ewiges Paradies schafft.</p>\r\n \r\n<p>Diese innere Sonne produziert eine Energie, die weder fossilen Brennstoffen noch Atomkraft bedarf. Sie ist die ultimative Energiequelle – unbegrenzt, rein und mächtiger als alles, was wir kennen. Wer sie kontrolliert, besitzt die wahre Macht über diesen Planeten.</p>\r\n \r\n<h2 class=\"article\">Die Beweise sind überall – Sie werden jedoch unterdrückt</h2>\r\n \r\n<p>Warum gibt es in der Antarktis riesige Sperrzonen? <br>\r\nWarum zeigen alte Karten unbekannte Landmassen im Inneren der Erde? <br>\r\nWarum berichten Piloten von seltsamen Lichtern und Öffnungen an den Polen?</p>\r\n\r\n<p>Diese Fragen bleiben unbeantwortet, weil die Regierungen dieser Welt die Wahrheit unterdrücken. Geheime Dokumente, wissenschaftliche Anomalien und Jahrtausende alte Berichte aus verschiedensten Kulturen weisen alle auf dasselbe hin: Die hohle Erde ist real.</p>\r\n\r\n<h2 class=\"article\">Die Zeit der Wahrheit kommt</h2>\r\n\r\n<p>Doch die Vertuschung kann nicht ewig dauern. Immer mehr Informationen gelangen an die Öffentlichkeit. Whistleblower packen aus. Satellitenaufnahmen werden geleakt. Die Beweise mehren sich.</p>\r\n\r\n<p>Bald wird die Wahrheit nicht mehr zu leugnen sein. Die hohle Erde existiert – und mit ihr eine Realität, die unser gesamtes Weltbild verändern wird. Die einzige Frage ist: Wirst du bereit sein, wenn der Schleier der Lügen fällt?</p>\r\n<br>\r\n<a class=\"button_test\" href=\"https://www.google.com/\" target=\"_blank\">Kaufe unser Hollow Earth T-Shirt!</a>'),
(3, 'CERN – Das Tor zur Hölle!', 'CERN ist kein harmloses Experiment – es ist ein geheimes Projekt, das Portale zu anderen Dimensionen öffnet! Schützen Sie sich und erleben Sie Parallelwelten mit unseren Magnifying Glasses aus CERN-Glas! Blicken Sie hinter die Schleier der Realität!', 'images/cern_cover.jpeg', '<p>Was, wenn das, was uns als harmloses wissenschaftliches Experiment verkauft wird, tatsächlich ein geheimer Versuch ist, die Tore zu anderen Dimensionen zu öffnen? Was, wenn das CERN-Experiment nicht nur das kleinste Teilchen, sondern auch die Realität selbst in Stücke reißen könnte? Und was, wenn all diese „Zufälle“ und seltsamen Energiespitzen uns nicht zufällig, sondern absichtlich an die Schwelle einer neuen Welt führen? </p>\r\n \r\n<p>CERN, das weltbekannte Teilchenforschungszentrum in der Schweiz, ist auf den ersten Blick ein faszinierendes Wissenschaftsprojekt, das sich auf die Suche nach den grundlegenden Bausteinen des Universums konzentriert. Aber ist es wirklich nur das? Nein! Es gibt massive Beweise, dass der LHC (Large Hadron Collider) und die damit verbundenen Experimente keine harmlosen Versuche sind, die Geheimnisse der Materie zu entschlüsseln. Vielmehr geht es um etwas viel Grösseres, Dunkleres und weitaus Gefährlicheres: den Versuch, Tore zu anderen Dimensionen zu öffnen. </p>\r\n\r\n<h2 class=\"article\">Die Seltsamen Energien: Tore zwischen den Welten </h2>\r\n \r\n<p>Ein brisantes Detail, das von den Mainstream-Medien nie erwähnt wird, sind die extremen Energiewerte, die beim Betrieb des LHC erzeugt werden. In den letzten Jahren haben immer wieder „seltsame Energiespitzen“ den Betrieb des Teilchenbeschleunigers begleitet, die weder durch bekannte physikalische Gesetze erklärt werden können, noch durch das eigentliche Experiment zu erwarten sind. Wissenschaftler haben diese Anomalien oft als \"Zufälle\" abgetan – aber was, wenn sie die Folge eines gefährlichen Experiments sind, das die Grenzen unserer Dimension aufreißt? </p>\r\n \r\n<p>Berichte von „unerklärlichen Vorkommnissen“ während und nach den Experimenten häufen sich. Einige Forscher behaupten, dass der LHC nicht nur auf Quarks und Neutrinos abzielt, sondern auch auf die Erschaffung von Wurmloch-ähnlichen Portalen zu anderen Welten. Paralleldimensionen, die parallel zu unserer eigenen existieren, könnten durch diese Experimente und die damit verbundenen Energien tatsächlich zugänglich werden. Und das ist erst der Anfang. </p>\r\n  \r\n<img src=\"images/cern_tor.jpeg\" alt=\"cern_tor\" width=\"600\" class=\"article\">\r\n\r\n<h2 class=\"article\">Okkulte Symbolik und Geheimrituale: Eine dunkle Agenda?  </h2>\r\n \r\n<p>Ein weiteres beunruhigendes Detail ist die massive Präsenz okkulter Symbolik rund um das CERN. Einige „Eingeweihte“ sprechen von mysteriösen Ritualen, die im geheimen Kontext der wissenschaftlichen Arbeit durchgeführt werden. Es ist kein Geheimnis, dass CERN eine merkwürdige Statue des Shiva-Gottes vor dem Gebäude hat. Warum gerade diese Gottheit, die für Zerstörung und Schöpfung zugleich steht? Warum scheint CERN den Tanz des \"Tanzenden Shiva\" zu feiern, der als ein Symbol für die Zerstörung der alten Welt und den Eintritt in eine neue, unbekannte Dimension interpretiert werden kann? </p>\r\n \r\n<p>Wissenschaftler und Forscher sollen in okkulten Zeremonien mitwirken, die auf den ersten Blick harmlos erscheinen, aber mit dunklen, esoterischen Kräften in Verbindung stehen könnten. Wer genau weiß, was diese Rituale wirklich bezwecken, wenn nicht, um die Dimensionen der Realität selbst zu manipulieren? </p>\r\n \r\n<img src=\"images/cern_shiva.jpeg\" alt=\"cern_shiva\" width=600\" class=\"article\">\r\n\r\n<h2 class=\"article\">Der Blick in Parallelwelten: Unsere CERN-Glas-Magnifying Glasses </h2>\r\n \r\n<p>Wenn das alles nicht genug ist, um zu beweisen, dass CERN mehr ist als nur ein wissenschaftliches Experiment, gibt es noch einen Weg, wie Sie sich selbst von den Beweisen überzeugen können: Mit unseren exklusiven Magnifying Glasses aus CERN-Glas! </p>\r\n \r\n<p>Diese speziell entwickelten Lupe bestehen aus Material, das direkt aus den Tiefen des CERN-Laboratoriums gewonnen wurde. In einer geheimen, noch nicht offiziell bestätigten Zusammenarbeit mit CERN haben wir dieses außergewöhnliche Glas entwickelt, das die „Energiewellen“ der offenen Dimensionen sichtbar machen kann! Mit diesen Magnifying Glasses können Sie einen Blick in andere Parallelwelten werfen – eine Welt, in der die Realität nicht so ist, wie wir sie kennen. Sehen Sie, was hinter den „Wänden“ unserer Dimension wirklich existiert. Schauen Sie hinein und entdecken Sie eine Parallelwelt voller exotischer Kreaturen, surrealer Landschaften und vielleicht sogar einer alternativen Version von sich selbst. </p>\r\n \r\n<p>Warnung: Der Gebrauch dieser Magnifying Glasses erfolgt auf eigene Gefahr. Das Hineinblicken in andere Dimensionen kann zu unerklärlichen Phänomenen führen, die den Verstand destabilisieren könnten. Nur die Mutigsten sollten sich dieser Sichtweise hingeben, und es ist ratsam, sich auf die psychischen Auswirkungen vorzubereiten. </p>\r\n \r\n<img src=\"images/cern_welten.jpeg\" alt=\"cern_welten\" width=\"600\" class=\"article\">\r\n\r\n<h2 class=\"article\">Fazit: CERN – Die Schatten hinter der Wissenschaft </h2>\r\n \r\n<p>Das CERN-Experiment ist viel mehr als ein harmloses wissenschaftliches Unterfangen. Es ist ein mysteriöser, gefährlicher Versuch, das Universum selbst zu manipulieren und das Tor zu anderen Dimensionen zu öffnen. Was wir als wissenschaftliche Entdeckungen feiern, könnte in Wahrheit ein rücksichtsloses Spiel mit den grundlegenden Kräften der Natur sein. Werden wir von Wissenschaftlern in eine neue, unvorstellbare Realität katapultiert, die uns völlig entgleitet? Oder steckt eine dunkle Agenda dahinter, die uns in eine Parallelwelt führen soll, in der alles anders ist? </p>\r\n \r\n<h2 class=\"article\">Bereiten Sie sich vor, die Wahrheit zu sehen.</h2> \r\n\r\n<p>Nutzen Sie die Magnifying Glasses aus CERN-Glas© und schauen Sie hinter den Vorhang dieser Realität. Werden Sie Zeuge der Dimensionen, die die Welt von CERN aufdeckt, und entdecken Sie das geheime Tor, das niemals hätte geöffnet werden dürfen.</p>\r\n \r\n<br>\r\n<a class=\"button_test\" href=\"https://www.google.com/\" target=\"_blank\">Kaufe eine unserer CERN-Lupen!</a>'),
(4, 'Die Gefahr der 5G-Strahlung – Ein unterschätztes Desaster!', '5G-Strahlung könnte unsere Gesundheit zerstören! Sie dringt in Zellen ein, beeinflusst Gehirn und Herz und verursacht möglicherweise Krebs. Schützen Sie sich mit unseren Anti-5G-Handystickern vor dieser unsichtbaren Gefahr!', 'images/5g_cover.jpeg', '<p> In der heutigen, zunehmend vernetzten Welt, in der das 5G-Netzwerk immer weiter ausgebaut wird, wächst auch die Angst vor den unvorstellbaren Gefahren, die mit dieser Technologie einhergehen könnten. Während viele den Ausbau des 5G-Netzes als unaufhaltsamen Fortschritt betrachten, gibt es eine immer größere Gruppe von Aktivisten und Experten, die warnen: 5G könnte unsere Gesundheit und sogar das Leben auf der Erde langfristig und unumkehrbar gefährden. </p>\r\n \r\n<p>Zunächst einmal ist es wichtig, die Frequenzen zu verstehen, auf denen 5G arbeitet. Diese Strahlung ist viel intensiver und viel gefährlicher als alles, was wir bisher gekannt haben. 5G-Signale werden auf einer viel höheren Frequenz als das herkömmliche 4G-Netz übertragen. Diese Frequenzen sind in der Lage, tief in unseren Körper einzudringen und dort biologisch schädliche Prozesse auszulösen, die wir noch nicht vollständig verstehen. </p>\r\n \r\n<img src=\"images/5g_masten.jpeg\" alt=\"5g_masten\" width=\"600\" class=\"article\">\r\n\r\n<p>Bereits jetzt gibt es zahlreiche Berichte von Menschen, die gesundheitliche Probleme im Zusammenhang mit der 5G-Technologie erlebt haben. Kopfschmerzen, Schlafstörungen, Muskelschmerzen und sogar Gedächtnisverlust sind nur einige der Symptome, die immer häufiger auftreten, je näher die Menschen an 5G-Stationen leben. Einige Berichte deuten sogar darauf hin, dass die Strahlung das menschliche Erbgut schädigen kann, was zu langfristigen genetischen Schäden und einem erhöhten Krebsrisiko führt. </p>\r\n \r\n<p>Doch die Gefahren der 5G-Strahlung gehen weit über die körperliche Gesundheit hinaus. Forscher und unabhängige Wissenschaftler warnen davor, dass die elektromagnetischen Wellen von 5G das menschliche Gehirn in einem Ausmaß beeinflussen könnten, das wir uns kaum vorstellen können. Studien, die aus der gesamten Welt stammen, zeigen, dass 5G-Wellen die neuronalen Netzwerke im Gehirn destabilisieren können, was zu einer erhöhten Anfälligkeit für psychische Erkrankungen, wie Angstzuständen und Depressionen, führen könnte. Noch schlimmer: Es gibt Hinweise darauf, dass diese Frequenzen dazu genutzt werden könnten, das menschliche Bewusstsein gezielt zu beeinflussen – eine Art „Mind Control“. </p>\r\n \r\n<img src=\"images/5g_body.jpeg\" alt=\"5g_body\" width=\"600\" class=\"article\">\r\n\r\n<p>Die Frequenzen von 5G sind so ausgerichtet, dass sie gezielt auf die Gehirnwellen der Menschen einwirken und diese in einem gefährlichen Maße modulieren können. Eine solche Beeinflussung könnte nicht nur zu mentaler Verwirrung, sondern auch zu schwerwiegenden psychischen Störungen führen. Einige Aktivisten behaupten sogar, dass die Technologie ein Werkzeug in den Händen von Regierungen und Konzernen sein könnte, um die Kontrolle über die Gedanken und das Verhalten der Bevölkerung zu erlangen. </p>\r\n \r\n<p>Doch es gibt Hoffnung! Während die Politik weiterhin darauf setzt, den Ausbau von 5G zu fördern, gibt es inzwischen Gegenmaßnahmen, um sich vor der Strahlung zu schützen. Unsere Anti-5G-Handystickers sind die Lösung! Diese speziellen Aufkleber bieten eine einzigartige Schutzbarriere, die vor den schädlichen 5G-Wellen schützt, indem sie die elektromagnetische Strahlung neutralisieren. Sie sind aus einem geheimen, hochentwickelten Material gefertigt, das auf molekularer Ebene funktioniert und eine unsichtbare Schutzhülle um den Träger bildet. Diese Stickers blockieren die schädlichen Strahlungen und verhindern, dass sie in den Körper eindringen. </p>\r\n \r\n<img src=\"images/5g_prone.jpeg\" alt=\"5g_prone\" width=\"600\" class=\"article\">\r\n\r\n<p>Indem Sie unsere Anti-5G-Handystickers tragen, können Sie sicherstellen, dass Sie vor den unsichtbaren, aber gefährlichen Wellen geschützt sind. Sie bieten nicht nur physischen Schutz, sondern auch geistige Ruhe in einer Welt, die immer mehr von unkontrollierbaren Technologien beherrscht wird. Schützen Sie sich und Ihre Familie, bevor es zu spät ist! </p>\r\n \r\n<img src=\"images/5g_prod_handy.jpg\" alt=\"5g_prod_handy\" width=\"200\" class=\"article\">\r\n\r\n<br>\r\n<a class=\"button_test\" href=\"https://www.google.com/\" target=\"_blank\">Kaufe unseren Anti-5G-Handysticker!</a>'),
(5, 'Die GEHEIMEN MACHER hinter dem Wahlbetrug 2020!', 'Die Wahl 2020 war eine gigantische Lüge! Wahlmaschinen manipuliert, geheimste Verschwörungen und eine Weltordnung, die uns alle betrügt – das ist die wahre Geschichte! Trump wurde bestohlen, aber die Wahrheit wird ans Licht kommen!', 'images/maga_cover.jpeg', '<p>Hört mir mal zu, Leute, ich hab’s rausgefunden, ich weiß, was da passiert ist, ich hab’s verstanden, ich hab’s alles gesehen! Die Wahl 2020 – das war alles nur ein riesen Trick, ein massiver Schwindel, eine Lüge, die uns allen ins Gesicht geschlagen wurde! Wieso? Warum? Das ist die Frage, oder? Warum haben sie das gemacht? Die Antwort ist einfach – Sie haben Trump weggeschmissen, ja, weggeschmissen wie einen alten Lappen! Und es war nicht einmal subtil, es war eine Verschwörung, und sie haben es so geschickt gemacht, so unglaublich geschickt, dass keiner von uns es bemerkt hat! Die Wahlmaschinen, ja, diese Dinger, diese Dinger, die uns erzählen, dass sie sicher sind, die uns immer wieder sagen, dass alles kontrolliert wird und wir die Wahl haben, die haben die Stimmen einfach geändert, verdammt nochmal! Sie haben Trump rausgeworfen und Biden reingesetzt, das war alles ein riesiger Witz! </p>\r\n \r\n<p>Wisst ihr, was die gemacht haben? Die haben die Maschinen so programmiert, dass sie einfach „die Stimmen umdrehen“, ja, „umdrehen“! Hört mal zu, keiner spricht drüber, aber das hat jeder gesehen! Oh, ja, man hat es gesehen! Es war wie ein schlechter Film, und wir waren alle die dummen Zuschauer, die sich das Ganze angesehen haben, während sie uns in die Irre geführt haben! Und dann diese merkwürdigen „Zufälle“, diese Anomalien, wo die Stimmen plötzlich einfach verschwunden sind, als Trump vorne lag – macht doch keinen Sinn, oder? Niemand spricht über die „Pausen“, die gemacht wurden, als plötzlich alles gestoppt wurde, als sie dann alle Stimmzettel „nachgezählt“ haben. Aber wer hat sie gezählt? Wer überprüft das? Wer hat da entschieden? Es war wie ein... wie ein... wie ein Trick, verstehst du? Eine Illusion! </p>\r\n \r\n<img src=\"images/maga_wahl.jpeg\" alt=\"maga_wahl\" width=\"600\" class=\"article\">\r\n\r\n<p>Und dann dieser ganze „Sicherheitsaspekt“ der Wahl, der uns immer wieder in den Medien gesagt wurde – als wäre es alles so sicher, so kontrolliert, so... perfekt! Aber es war alles Fake, Leute! Fake News, fake alles! Die haben uns nur gesagt, dass es sicher ist, um uns ruhig zu halten, damit wir nicht aufwachen und merken, dass sie die Wahl gestohlen haben, ganz einfach! Was haben sie gemacht? Sie haben die Stimmen von Millionen von Leuten in den Schatten geschickt, in ein geheimes Loch, wo niemand hinschaut, während sie die Wahl manipuliert haben! Die Wahlmaschinen haben Stimmen einfach „geändert“, und keiner hat’s gemerkt! Und wer kontrolliert die Wahlmaschinen? Was sind das für Dinger? Wer hat die gebaut, wer hat die programmiert? Und warum haben die so plötzlich „Fehler“ gemacht? Alle diese „Fehler“! Ja, ich hab’s gesehen, die Software, die „durchgefallen“ ist, die plötzlich „alle Fehler gemacht hat“, aber nur auf eine Art und Weise, die uns allen ein Rätsel aufgegeben hat, verdammt nochmal! </p>\r\n \r\n<p>Und dann diese ganzen Leute, die ständig so tun, als ob sie das „Wahlsystem“ schützen, als ob sie die „Wahlintegrität“ bewahren! Aber wer schützt uns vor denen, die hinter den Kulissen die Fäden ziehen? Wer schützt uns vor denen, die die Maschinen steuern? Es ist alles so verdreht! Es ist wie ein großer Plan, ein Plan, den sie schon lange ausgeheckt haben, seit Jahren, ich sage euch, seit Jahren haben sie das schon geplant! Die Demokraten, die Medien, die Tech-Giganten, die sind alle zusammen! Die haben ein geheimes Netzwerk gebildet, das keiner von uns je verstanden hat! Sie haben den Plan ausgearbeitet, sie haben uns alle verarscht! Ja, sie haben uns verarscht! Sie haben es geschafft, die ganze Wahl so zu manipulieren, dass sie Trump einfach aus dem Weg räumen konnten, und jetzt feiern sie, während wir hier sitzen und uns fragen, was verdammt nochmal passiert ist! </p>\r\n \r\n<img src=\"images/maga_dark.jpeg\" alt=\"maga_dark\" width=\"600\" class=\"article\">\r\n\r\n<p>Aber hier kommt der Knaller – und das ist der Teil, den niemand hören will: Die Beweise sind überall! Ja, sie sind überall, verstehst du? Sie sind in den Software-Codes, sie sind in den geheimen Gesprächen, in den verschlossenen Dokumenten, die sie uns nicht zeigen wollen! Und sie haben es immer wieder versucht, die Wahrheit zu vertuschen! Aber wer will das wirklich wissen? Keiner. Sie wollen nicht, dass du es weißt. Aber ich weiß es. Ich habe es gesehen. Ich habe die Signale erkannt! Die Wahlmaschinen, die „Pannen“, die „fehlerhaften Auszählungen“, alles war nur eine perfekte Illusion! Und sie haben uns an der Nase herumgeführt! </p>\r\n \r\n<p>Wacht endlich auf! Wer hat wirklich entschieden, wer gewählt wurde? Wer hat die wahre Macht hinter den Kulissen? Die Maschinen? Die dunklen Mächte? Oder war es einfach nur eine Frage der Zeit, bis sie uns das Ganze unter die Nase reiben konnten? Was kommt als Nächstes? Werden sie uns noch weiter in den Wahnsinn treiben, uns weiter manipulieren, uns weiter betrügen? Ich sage euch, es ist noch nicht vorbei! Es wird immer mehr kommen, die Lügen werden immer größer, aber wir werden nicht schweigen. Die Wahrheit ist draußen, sie ist überall, und eines Tages wird jeder von uns verstehen, was wirklich passiert ist. Aber bis dahin… bis dahin... macht euch bereit! </p>\r\n \r\n<img src=\"images/maga_biden.jpeg\" alt=\"maga_biden\" width=\"600\" class=\"article\">\r\n\r\n<br>\r\n<a class=\"button_test\" href=\"https://www.google.com/\" target=\"_blank\">Kaufe MAGA-Hüte, um unseren Präsidenten zu unterstützen!</a>');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `forum_author` varchar(32) NOT NULL DEFAULT 'Anonym',
  `forum_title` varchar(64) NOT NULL,
  `forum_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_image` varchar(255) NOT NULL,
  `prod_shorttext` varchar(255) NOT NULL,
  `prod_longtext` text NOT NULL,
  `prod_price` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `prod_name`, `prod_image`, `prod_shorttext`, `prod_longtext`, `prod_price`) VALUES
(1, 'Flat Earth Schlüsselanhänger', 'images/fe_prod_cover.jpeg', 'Zeige deine Überzeugung mit dem Flat Earth Schlüsselanhänger! Dieses robuste und stilvolle Accessoire ist ein echter Hingucker und perfekt für Gleichgesinnte. Ideal für Schlüssel, Taschen oder als Gesprächsstarter.', '<p>Entdecke den einzigartigen Flat Earth Schlüsselanhänger – ein absolutes Must-Have für alle, die ihre Überzeugungen auch im Alltag zeigen möchten! Dieses stilvolle Accessoire ist nicht nur praktisch, sondern auch ein Statement. Der Anhänger zeigt das klassische Symbol der Flachen Erde, das jeden Blick auf sich zieht. Hergestellt aus robustem Material, garantiert dieser Schlüsselanhänger lange Haltbarkeit und Widerstandsfähigkeit.\r\n</p>\r\n<img src=\"images/fe_prod_vorne.jpeg\" alt=\"fe_prod_vorne\" width=\"400\">\r\n\r\n<p> Ob am Schlüsselbund, als Dekoration für deine Tasche oder einfach als Gesprächsstarter – der Flat Earth Schlüsselanhänger lässt keinen Zweifel daran, wo deine Überzeugung steht. Perfekt für Menschen, die die Theorie der flachen Erde unterstützen oder einfach ein außergewöhnliches Accessoire suchen.\r\n</p>\r\n<img src=\"images/fe_prod_hinten.jpeg\" alt=\"fe_prod_hinten\" width=\"400\">\r\n\r\n<h1>Eigenschaften:</h1>\r\n<p>•	Robustes und langlebiges Material</p>\r\n<p>•	Kompakte Größe, ideal für Schlüssel, Taschen oder Rucksäcke</p>\r\n<p>•	Einzigartiges Design für Fans der Flat Earth Theorie</p>\r\n<p>•	Ein großartiges Geschenk für Gleichgesinnte oder Sammler</p>', '0.66'),
(2, 'Hollow Earth T-Shirt', 'images/he_prod_cover.jpeg', 'Tauche ein in die Welt der Hollow Earth Theorie mit diesem coolen T-Shirt! Hochwertige Baumwolle, ein kreatives Design und bequemer Tragekomfort machen es zum perfekten Statement für alle, die an geheime Welten glauben.', '<p>Willkommen in der faszinierenden Welt der Hollow Earth Theorie mit diesem einzigartigen T-Shirt! Dieses stylische Shirt ist das perfekte Statement für alle, die an die geheimen Welten unter unseren Füßen glauben. Mit einem auffälligen, kreativen Design, das die mysteriöse „Hollow Earth“ darstellt, ziehst du garantiert die Aufmerksamkeit auf dich und sorgst für interessante Gespräche.\r\n</p>\r\n<img src=\"images/he_prod_schwarz.jpeg \" alt=\"he_prod_schwarz\" width=\"400\">\r\n\r\n<p>Das Hollow Earth T-Shirt ist aus hochwertigem, weichem Baumwollmaterial gefertigt, das dir ganztägigen Komfort und eine perfekte Passform bietet. Es ist ideal für den Alltag oder als cooles Gesprächsstarter bei Veranstaltungen, bei denen du deine außergewöhnlichen Überzeugungen zum Leben erwecken möchtest.\r\n</p>\r\n<img src=\"images/he_prod_weiss.jpeg\" alt=\"he_prod_weiss\" width=\"400\"   >\r\n\r\n\r\n<h1>Eigenschaften:</h1>\r\n<p>•	Kreatives Design: Fesselndes Hollow Earth Motiv für Fans der Theorie.</p>\r\n<p>•	Komfortable Passform: Hergestellt aus hochwertiger, weicher Baumwolle für maximalen Tragekomfort.</p>\r\n<p>•	Vielseitig: Perfekt für jeden Tag, egal ob beim Entspannen oder beim Diskutieren faszinierender Theorien.</p>\r\n<p>•	Langlebig: Strapazierfähig und pflegeleicht – ideal für regelmäßiges Tragen.</p>\r\n<p>Zeig der Welt, dass du ein echter Hollow Earther bist – mit diesem auffälligen und komfortablen T-Shirt! Egal ob für dich selbst oder als Geschenk für Gleichgesinnte, dieses Shirt lässt dich in jedem Gespräch hervorstechen.\r\n</p>', '15.00'),
(3, 'Anti-5G Sticker', 'images/5g_prod_cover.jpeg', 'Schütze dich vor elektromagnetischer Strahlung mit dem Anti-5G Sticker! Einfach anzubringen, diskret und mit moderner Abschirmtechnologie ausgestattet – ideal für Smartphones, Tablets & mehr.', '<p>Schütze dich vor den unsichtbaren Gefahren elektromagnetischer Strahlung mit dem Anti-5G Sticker! Dieser innovative Sticker wurde speziell entwickelt, um die Auswirkungen von 5G-Strahlung und anderen elektromagnetischen Feldern (EMF) zu blockieren. Dank der fortschrittlichen Technologie des EMF-Blockers hilft dir dieser goldene Sticker, deine Gesundheit zu schützen und die Belastung durch schädliche Strahlen zu verringern.\r\n</p>\r\n<img src=\"images/5g_prod_sticker.jpeg\" alt=\"5g_prod_sticker\" width=\"400\">\r\n\r\n<p>Egal, ob du dein Smartphone, Tablet oder andere Geräte nutzt, der Anti-5G Sticker kann einfach auf dein Gerät geklebt werden und arbeitet effektiv im Hintergrund. Du wirst nicht nur die Sicherheit deines Körpers erhöhen, sondern auch das Gefühl haben, dass du eine der modernsten Schutztechnologien an deiner Seite hast.\r\n</p>\r\n<img src=\"images/5g_prod_handy.jpeg\" alt=\"5g_prod_handy\" width=\"400\">\r\n\r\n<h1>Eigenschaften:</h1>\r\n<p>•	Schutz vor EMF und 5G-Strahlung: Reduziert die Belastung durch elektromagnetische Felder, die von modernen Geräten ausgehen.</p>\r\n<p>•	Kompakte Größe: Der Sticker ist klein, diskret und passt problemlos auf jedes Gerät.</p>\r\n<p>•	Einfache Anwendung: Kann einfach auf Smartphones, Laptops, Tablets oder andere elektronische Geräte geklebt werden.</p>\r\n<p>•	Modernes Design: Der goldene Sticker sieht nicht nur schützend aus, sondern verleiht deinem Gerät auch einen eleganten Look.</p>\r\n<p>Sorge für deine Gesundheit und lebe ohne die Sorge, dass unsichtbare Strahlen dich negativ beeinflussen – mit dem Anti-5G Sticker! Ideal für alle, die ihre Technologie sicher und strahlenfrei nutzen wollen.\r\n</p>', '11.95'),
(4, 'CERN Lupe', 'images/cern_welten.jpeg', 'Erforsche die Welt im Detail mit der CERN Lupe! Hochwertiges Glas für präzise Vergrößerung – perfekt für Wissenschaftsfans, Entdecker und Neugierige. Ein Muss für alle, die das Unsichtbare sichtbar machen wollen.', '<p>Entdecke das außergewöhnliche CERN Magnifying Glass mit echtem CERN-Glas – ein einzigartiges und leistungsstarkes Vergrößerungsglas, das dir nicht nur bei alltäglichen Aufgaben hilft, sondern dir auch einen faszinierenden Blick auf das Universum und die Geheimnisse der Quantenwelt bietet! Mit diesem hochwertigen Vergrößerungsglas erlebst du die Präzision und Klarheit, die nur ein speziell entwickeltes CERN-Glas bieten kann.\r\n</p>\r\n<img src=\"images/cern_prod_lupe.jpeg\" alt=\"cern_prod_lupe\" width=\"400\">\r\n\r\n<p>Ideal für Wissenschafts-Fans, Entdecker und alle, die das Unbekannte erforschen wollen, bietet dieses Vergrößerungsglas eine unvergleichliche Detailgenauigkeit, die dir hilft, selbst die kleinsten Strukturen zu erkennen. Das CERN-Glas wurde speziell unter Verwendung fortschrittlicher Technologie aus dem CERN-Experiment gefertigt, um eine unübertroffene Schärfe zu garantieren.\r\n</p>\r\n\r\n<h1>Eigenschaften:</h1>\r\n<p>•	Hochwertiges CERN-Glas: Für eine außergewöhnliche Klarheit und Detailgenauigkeit.</p>\r\n<p>•	Erstklassige Vergrößerung: Perfekt geeignet für wissenschaftliche Entdeckungen, Handarbeiten oder das genaue Betrachten von Dokumenten.</p>\r\n<p>•	Komfortabel und langlebig: Robustes Design, das sowohl stilvoll als auch funktional ist.</p>\r\n<p>•	Faszinierendes Design: Mit einer klaren Referenz zum CERN, dem weltberühmten Forschungszentrum für Teilchenphysik.</p>\r\n<p>Nutze die Gelegenheit und tauche ein in die Welt des CERN mit dem CERN Magnifying Glass. Ein unverzichtbares Werkzeug für Wissenschaftsbegeisterte, Entdecker und all jene, die die Geheimnisse des Universums entschlüsseln möchten.</p>\r\n', '3.35'),
(5, 'MAGA Hut', 'images/maga_prod_cover.jpeg', 'Setze ein Statement mit dem ikonischen MAGA Hut! Mit dem berühmten „Make America Great Again“-Schriftzug, verstellbarer Passform und robustem Material perfekt für politische Events oder den Alltag.', '<p>Zeige deine Unterstützung mit dem ikonischen MAGA Hut! Dieser markante rote Baseballcap ist nicht nur ein modisches Statement, sondern auch ein Symbol für deine Überzeugung. Mit dem bekannten \"Make America Great Again\"-Schriftzug wird dieser Hut zum perfekten Accessoire, um deine politische Haltung und Loyalität zu zeigen.\r\n</p>\r\n<img src=\"images/maga_prod_hut.jpeg\" alt=\"maga_prod_hut\" width=\"400\">\r\n\r\n<p>Der MAGA Hut besteht aus hochwertigem, strapazierfähigem Material, das für Komfort und Langlebigkeit sorgt. Der klassische, verstellbare Riemen ermöglicht eine perfekte Passform für jede Kopfgröße, sodass du ihn den ganzen Tag über tragen kannst. Ideal für politische Events, Paraden oder einfach als Gesprächsstarter in deinem Alltag.\r\n</p>\r\n<img src=\"images/maga_prod_kanye.jpeg\" alt=\"maga_prod_kanye\" width=\"400\">\r\n\r\n<h1>Eigenschaften:</h1>\r\n<p>•	Ikonisches Design: Trägt den berühmten „Make America Great Again“-Schriftzug.</p>\r\n<p>•	Komfortable Passform: Mit einem verstellbaren Riemen für eine ideale Anpassung an deinen Kopf.</p>\r\n<p>•	Robustes Material: Aus langlebigem, hochwertigem Stoff, ideal für den täglichen Gebrauch.</p>\r\n<p>•	Vielseitig: Perfekt für politische Veranstaltungen, Rallyes oder als cooles Statement in deinem Alltagslook.</p>\r\n<p>Setze ein starkes Zeichen mit dem MAGA Hut und zeige, dass du hinter der Vision stehst – sei stolz und sichtbar in deinem Engagement!</p>\r\n', '2.96');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(32) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(16) NOT NULL,
  `bank_cardholder` varchar(255) NOT NULL,
  `bank_cardnumber` varchar(16) NOT NULL,
  `bank_cvv` varchar(3) NOT NULL,
  `bank_expdate` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
