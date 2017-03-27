<?php
header("Content-Type: text/html; charset=utf-8");

class MP3Quran {

public $site_title = 'Quran Miracle Audio Library';
public $site_description = 'Quran Dedicated Website';
public $site_keywords = 'islam,English,quran,books,articles,categories,pdf,doc,docx,mp3,mp4';
public $site_banner = '<div class="ads"><a target="_blank" href="http://www.muslim-library.com"><img alt="Muslim Library" src="images/muslim-library.gif" /></a></div>';
public $site_author = 'برمجة نواحي';
public $site_js = '';
public $rewayat = array("Rewayat Hafs A'n Assem", "Almusshaf Al Mo'lim", "Rewayat Warsh A'n Nafi'", "Almusshaf Al Mojawwad", "Rewayat Assosi A'n Abi Amr", "Rewayat Khalaf A'n Hamzah", "Rewayat Qalon A'n Nafi'", "Rewayat Aldori A'n Abi Amr", "Rewayat AlDorai A'n Al-Kisa'ai", "Rewayat Warsh A'n Nafi' Men  Tariq Abi Baker Alasbahani", "Rewayat Albizi and Qunbol A'n Ibn Katheer", "Sho'bah A'n Asim", "Ibn Thakwan A'n Ibn Amer", "Rewayat Qalon A'n Nafi' Men Tariq Abi Nasheet", "Rewayat Rowis and Rawh A'n Yakoob Al Hadrami ");
public $rewayat_arabic = array("حفص عن عاصم", "ورش عن نافع", "قالون عن نافع", "الدوري عن أبي عمرو", "المصحف المعلم", "المصحف المجود", "خلف عن حمزة", "السوسي عن أبي عمرو", "الدوري عن الكسائي", "البزي وقنبل عن ابن كثير", "ورش عن نافع من طريق أبي بكر الأصبهاني", "ابن ذكوان عن ابن عامر", "شعبة عن عاصم", "قالون عن نافع من طريق أبي نشيط", "قراءة يعقوب الحضرمي بروايتي رويس وروح");
public $alphabet_smal = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
public $alphabet = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
public $alphabet_arabic = array('ا','ب','ت','ث','ج','ح','خ','د','ذ','ر','ز','س','ش','ص','ض','ط','ظ','ع','غ','ف','ق','ك','ل','م','ن','ه','و','ي');
public $default_language = 'arabic';
public $language_code = array("arabic","english","france","russia","germany","spain","turkey","china","thai","urdu","bengali","bosnia","uyghur","farsi","tajeki","malayalam","tagalog","indonesia","portuguese");
public $sura_name_arabic = array('القرآن الكريم','الفاتحة','البقرة','آل عمران','النساء','المائدة','الأنعام','الأعراف','الأنفال','التوبة','يونس','هود','يوسف','الرعد','إبراهيم','الحجر','النحل','الإسراء','الكهف','مريم','طه','الأنبياء','الحج','المؤمنون','النور','الفرقان','الشعراء','النمل','القصص','العنكبوت','الروم','لقمان','السجدة','الأحزاب','سبأ','فاطر','يس','الصافات','ص','الزمر','غافر','فصلت','الشورى','الزخرف','الدخان','الجاثية','الأحقاف','محمد','الفتح','الحجرات','ق','الذاريات','الطور','النجم','القمر','الرحمن','الواقعة','الحديد','المجادلة','الحشر','الممتحنة','الصف','الجمعة','المنافقون','التغابن','الطلاق','التحريم','الملك','القلم','الحاقة','المعارج','نوح','الجن','المزمل','المدثر','القيامة','الإنسان','المرسلات','النبأ','النازعات','عبس','التكوير','الانفطار','المطففين','الانشقاق','البروج','الطارق','الأعلى','الغاشية','الفجر','البلد','الشمس','الليل','الضحى','الشرح','التين','العلق','القدر','البينة','الزلزلة','العاديات','القارعة','التكاثر','العصر','الهمزة','الفيل','قريش','الماعون','الكوثر','الكافرون','النصر','المسد','الإخلاص','الفلق','الناس');
public $sura_name_english = array('Quran','Al-Fatihah ( The Opening )','Al-Baqarah ( The Cow )','Al-Imran ( The Famiy of Imran )','An-Nisa ( The Women )','Al-Maidah ( The Table spread with Food )','Al-An\'am ( The Cattle )','Al-A\'raf (The Heights )','Al-Anfal ( The Spoils of War )','At-Taubah ( The Repentance )','Yunus ( Jonah )','Hud','Yusuf (Joseph )','Ar-Ra\'d ( The Thunder )','Ibrahim ( Abraham )','Al-Hijr ( The Rocky Tract )','An-Nahl ( The Bees )','Al-Isra ( The Night Journey )','Al-Kahf ( The Cave )','Maryam ( Mary )','Taha','Al-Anbiya ( The Prophets )','Al-Hajj ( The Pilgrimage )','Al-Mu\'minoon ( The Believers )','An-Noor ( The Light )','Al-Furqan (The Criterion )','Ash-Shuara ( The Poets )','An-Naml (The Ants )','Al-Qasas ( The Stories )','Al-Ankaboot ( The Spider )','Ar-Room ( The Romans )','Luqman','As-Sajdah ( The Prostration )','Al-Ahzab ( The Combined Forces )','Saba ( Sheba )','Fatir ( The Orignator )','Ya-seen','As-Saaffat ( Those Ranges in Ranks )','Sad ( The Letter Sad )','Az-Zumar ( The Groups )','Ghafir ( The Forgiver God )','Fussilat ( Explained in Detail )','Ash-Shura (Consultation )','Az-Zukhruf ( The Gold Adornment )','Ad-Dukhan ( The Smoke )','Al-Jathiya ( Crouching )','Al-Ahqaf ( The Curved Sand-hills )','Muhammad','Al-Fath ( The Victory )','Al-Hujurat ( The Dwellings )','Qaf ( The Letter Qaf )','Adh-Dhariyat ( The Wind that Scatter )','At-Tur ( The Mount )','An-Najm ( The Star )','Al-Qamar ( The Moon )','Ar-Rahman ( The Most Graciouse )','Al-Waqi\'ah ( The Event )','Al-Hadid ( The Iron )','Al-Mujadilah ( She That Disputeth )','Al-Hashr ( The Gathering )','Al-Mumtahanah ( The Woman to be examined )','As-Saff ( The Row )','Al-Jumu\'ah ( Friday )','Al-Munafiqoon ( The Hypocrites )','At-Taghabun ( Mutual Loss &amp; Gain )','At-Talaq ( The Divorce )','At-Tahrim ( The Prohibition )','Al-Mulk ( Dominion )','Al-Qalam ( The Pen )','Al-Haaqqah ( The Inevitable )','Al-Ma\'arij (The Ways of Ascent )','Nooh','Al-Jinn ( The Jinn )','Al-Muzzammil (The One wrapped in Garments)','Al-Muddaththir ( The One Enveloped )','Al-Qiyamah ( The Resurrection )','Al-Insan ( Man )','Al-Mursalat ( Those sent forth )','An-Naba\' ( The Great News )','An-Nazi\'at ( Those who Pull Out )','Abasa ( He frowned )','At-Takwir ( The Overthrowing )','Al-Infitar ( The Cleaving )','Al-Mutaffifin (Those Who Deal in Fraud)','Al-Inshiqaq (The Splitting Asunder)','Al-Burooj ( The Big Stars )','At-Tariq ( The Night-Comer )','Al-A\'la ( The Most High )','Al-Ghashiya ( The Overwhelming )','Al-Fajr ( The Dawn )','Al-Balad ( The City )','Ash-Shams ( The Sun )','Al-Layl ( The Night )','Ad-Dhuha ( The Forenoon )','As-Sharh ( The Opening Forth)','At-Tin ( The Fig )','Al-\'alaq ( The Clot )','Al-Qadr ( The Night of Decree )','Al-Bayyinah ( The Clear Evidence )','Az-Zalzalah ( The Earthquake )','Al-\'adiyat ( Those That Run )','Al-Qari\'ah ( The Striking Hour )','At-Takathur ( The piling Up )','Al-Asr ( The Time )','Al-Humazah ( The Slanderer )','Al-Fil ( The Elephant )','Quraish','Al-Ma\'un ( Small Kindnesses )','Al-Kauther ( A River in Paradise)','Al-Kafiroon ( The Disbelievers )','An-Nasr ( The Help )','Al-Masad ( The Palm Fibre )','Al-Ikhlas ( Sincerity )','Al-Falaq ( The Daybreak )','An-Nas ( Mankind )');
public $sura_name_france = array('Quran france', 'Prologue (Al-Fatiha)','La génisse (Al-Baqarah)','La famille d\'Imran (Al-Imran)','Les femmes (An-Nisa\')','La table servie (Al-Maydah)','Les bestiaux (Al-An’ame)','Al-A’raf','Le butin (Al-Anfâl)','Le repentir (At-Tawbah)','Jonas (Younouss)','Hud','Joseph (Yousoûf)','Le tonnerre (Ar-Raad)','Abraham (Ibrahim)','Al-Hijr','Les abeilles (An-Nahl)','Le voyage nocturne (Al-Israh)','La caverne (Al-Kahf)','Marie (Maryem)','Tâ-Hâ','Les prophètes (Al-Anbiya)','Le pèlerinage (Al-Hajj)','Les croyants (Al-Mouminoune)','La lumière (An-Nour)','Le discernement (Al Fourqane)','Les poètes (As-Chouaraa)','Les fourmis (An-Naml)','Le rècit (Al-Qassas)','L\'araignèe (Al-Ankabout)','Les romains (Ar-Roum)','Louqmane','La prosternation (As-Sajda)','Les coalisés (Al-Ahzab)','Sabaa','Le Créateur (Fatir)','Ya-Sin','Les rangés (As-Saffat)','Sâd','Les groupes (Az-Zoumar)','Le pardonneur (Ghafir)','Les versets détaillés (Foussil','La consultation (Achoura)','L\'ornement (Azzoukhrof)','La fumée (Ad-Doukhan)','L\'agenouillée (Al-Jathya)','Al-Ahqâf ','Mohammed ','La victoire éclatante (Al-Fath','Les appartements (Al-Houjourat','Qâf ','Qui éparpillent (Ad-Dariyat) ','At-Tûr ','L\'étoile (An-Najm) ','La lune (Al-Qamar)','Le Tout Miséricordieux (Ar-Rah','L\'evénement (Al-Waqi\'a) ','Le fer (Al-Hadid) ','La discussion (Al-Moujadalah) ','L\'exode (Al-Hasr) ','L\'éprouvée (Al-Moumtahina) ','Le rang (As-Saff)','Le vendredi (Al-Joumou’a) ','Les hypocrites (Al-Mounafiqoun','La grande perte (At-Tagaboun) ','Le divorce (At-Talaq) ','L\'interdiction (At-Tahrim) ','La royauté (Al-Moulk) ','La plume (Al-Qalam)','Celle qui montre la vérité (Al','Les voies d\'ascension (Al- Ma’','Noé (Nouh) ','Les djinns (Al-Jinn) ','L\'enveloppé (Al-Mouzzamil) ','Le revêtu d\'un manteau (Al-Mou','La résurrection (Al-Qiyamah) ','L\'homme (Al-Inssane) ','Les envoyés (Al-Moursalate)','La nouvelle (An-Nabaa) ','Les anges qui arrachent les âm','Il s\'est renfrogné (Abasa) ','L\'obscurcissement (At-Taqwir) ','La rupture (Al-Infitâr) ','Les fraudeurs (Al-Moutaffifine','La déchirure (Al-Insiqaq) ','Les constellations (Al-Bourouj','L\'astre nocturne (At-Tarîq) ','Le Très-Haut (Al-A’la)','L\'enveloppante (Al-Ghasiyah) ','L\'aube (Al-Fajr) ','La cité (Al-Balad) ','Le soleil (Ach-Chamss) ','La nuit (Al-Layl) ','Le jour montant (Ad-Douha) ','L\'ouverture (As-Sarh) ','Le figuier (At-Tin) ','L\'adhérence (Al-Alaq) ','La Destinée (Al-Qadr) ','La preuve (Al-Bayinah)','La secousse (Az-Zalzalah) ','Les coursiers (Al-Adiyate) ','Le fracas (Al-Qariah) ','La course aux richesses (At-Ta','Le temps (Al-Asr) ','Les calomniateurs (Al-Houmazah','L\'éléphant (Al-Fîl) ','Qoraïsh ','L\'ustensile (Al-Maoun) ','L\'abondance (Al-Kawtar) ','Les infidèles (Al-Qafiroune) ','Les secours (An-Nasr) ','Les fibres (Al-Masad) ','Le monothéisme pur (Al-Ikhlass','L\'aube naissante (Al-Falaq) ','Les hommes (An-Nass)');
public $sura_name_russia = array('Quran russia', 'Открывающая Книгу (Ал-Фатиха)','Корова (Ал-Бакара)','Семейство Имрана (Ал-Имран)','Женщины (Ан-Ниса)','Трапеза (Ал-Маида)','Скот (Ал-Анаам) ','Преграды(Ал-Аaраф)','Добыча (Ал-Анфал)','Покаяние(Ат-Тауба)','Йунус','Худ','Йуcуф','Гром (Ар-Раьд)','Ибpaxим','Aл-Xиджp','Пчелы(Ан-Нахл)','Перенес Ночью(Ал-Исра)','Пещера(Ал-Кахф)','Мapйaм','Тa Xa','Пророки(Ал-Анбияа)','Xaдж','Верующие(Ал-Муьминоон)','Свет(Ан-Ноор)','Различение (Ал-Фуркан)','Поэты(Аш-шуара)','Муравьи(Ан-Намл)','Рассказ (Ал-Касас)','Паук (Ал-Анкабоот)','Pумы (Ар-Роом)','Лукмaн','Поклон (Ас-Сажда)','Сонмы (Ал-Ахзаб)','Caбa','Создатель (Фатир)','Йa Cин','Стоящие В Ряд (Ас-Сааффат)','Сад','Толпы(Аз-Зумар)','Верующий (Гафир)','Разъяснены(Фуссилат)','Совет(Аш-ура)','Украшения(Аз-Зукхруф)','Дым(Ад-Духан)','Коленопреклоненная (Ал-Жатия)','Пески(Ал-Ахкаф)','Муxaммaд','Победа(Ал-Фатх)','Комнаты(Ал-Хуюрат)','Кaф','Рассеивающие(Аз-Зарият)','Гора (Ат-Тур)','Звезда (Ан-Нажм)','Месяц (Ал-Камар)','Милосердный(Ар-Рахман)','Падающее(Ал-уакиа)','Железо(Ал-Хадид)','Препирательство (Ал-Мужядала)','Собрание(Ал-Хашр)','Испытуемая(Ал-Мумтахана)','Ряды(Ас-Сафф)','Сбор(Ал-Жумуа)','Лицемеры(Ал-Мунафикоон)','Взаимное Обманывание (Ат-Тагаб','Развод(Ат-Талак)','Запрещение (Ат-Тахрим)','Власть(Ал-Мулк)','Письменная Трость (Ал-Калам)','Неизбежное (Ал-Хаакках)','Ступени(Ал-Ма\'ариж)','Нуx','Джинны(Ал-жин)','Закутавшийся (Ал-Муззаммил)','Завернувшийся (Ал-Муддасир)','Воскресение (Ал-Кияма)','Человек (Ал-Инсан)','Посылаемые(Ал-Мурсалат)','Весть(Ан-Наба\' )','Вырывающие(Ан-Назяат)','Нахмурился(Абаса)','Скручивание(Ат-Такуир)','Раскалывание(Ал-Инфитар)','Обвешивающие(Ал-Мутаффифин)','Разверзнется(Ал-Иншикак)','Башни(Ал-Буроож)','Идущий Ночью(Ат-Тарик)','Высочайший(Ал-А\'ла)','Покрывающее(Ал-Гашия)','Заря(Ал-Фажр)','Город(Ал-Балад)','Солнце(Аш-шамс)','Ночь(Ал-Ляыл)','Утро(Ад-Дхуха)','Разве Мы Не Раскрыли(Аш-шарх)','Смоковница(Ат-Тин)','Сгусток(Ал-\'алак)','Могущество(Ал-Кадр)','Ясное Знамение(Ал-Баяина)','Землетрясение(Аз-Залзала)','Мчащиеся(Ал-\'адияат)','Поражающее(Ал-Кари\'а)','Охота К Умножению(Ат-Такасур)','Предвечернее Время(Ал-Аср)','Хулитель(Ал-Хумаза)','Слон(Ал-Фил)','Куpaйш','Подаяние(Ал-Ма\'ун)','Обильный(Ал-Каусер)','Неверные(Ал-Кафироон)','Помощь(Ан-Наср)','Пальмовые Волокна(Ал-Масад)','Очищение \'Веры\' (Ал-Икхлас)','Рассвет(Ал-Фалак)','Люди (Ан-Нас)');
public $sura_name_germany = array('Quran germany', 'Al-Fātiha - Die Eröffnende','Al-Baqara - Die Kuh','Āl-i-\'Imrān - Die Sippe \'Imrān','An-Nisā - Die Frauen','Al-Māida - Der Tisch','Al-Anām - Das Vieh','Al-Arāf - Die Höhen','Al-Anfāl - Die Beute','At-Tauba - Die Reue','Yūnus - Jonas','Hūd','Yūsuf - Josef','Ar-Ra\'d - Der Donner','Ibrāhīm - Abraham','Al-Hiğr','An-Nahl - Die Bienen','Al-Isrā\' - Die Nachtreise','Al-Kahf - Die Höhle','Maryam - Maria','Tā-Hā','Al-Anbiyā\' - Die Propheten','Al-Hağğ - Die Pilgerfahrt','Al-Mu\'minūn - Die Gläubigen','An-Nūr - Das Licht','Al-Furqān - Die Unterscheidung','Aš-Šu\'arā - Die Dichter','An-Naml - Die Ameisen','Al-Qasas - Die Geschichten','Al-\'Ankabut - Die Spinne','Ar-Rūm - Die Römer','Luqmān','As-Sağda - Die Niederwerfung','Al-Ahzāb - Die Gruppierungen','Saba\' - Die Sabäer','Fātir - Der Erschaffer','Yā-Sīn','As-Sāffāt - Die Sich Reihenden','Şād','Az-Zumar - Die Scharen','Ġāfir - Der Vergebende','Fussilat - Ausführlich dargele','Aš-Šūrā - Die Beratung','Az-Zuhruf - Die Zierde','Ad-Duhān - Der Rauch ','Al-Ğāţiya - Die Kniende','Al-Ahqaf','Muhammad','Al-Fath - Der Sieg','Al-Huğurāt - Die Gemächer','Qāf','AD-Dāriyāt - Die Zerstreuenden','At-Tūr - Der Berg','An-Nağm - Der Stern','Al-Qammar - Der Mond','Ar-Rahmān - Der Allerbarmer','Al-Wāqi\'a - Die eintreffen wir','Al-Hadid - Das Eisen','Al-Muğādila - Die Streitende','Al-Hašr - Die Versammlung','Al-Mumtahana - Die Geprüfte','As-Saff - Die Reihe','Al-Ğumu\'a - Der Freitag','Al-Munāfiqūn - Die Heuchler','At-Taġābun - Die Übervorteilun','At-Talāq - Die Scheidung','At-Tahrim - Das Verbieten','Al-Mulk - Die Herrschaft','Al-Qalam - Das Schreibrohr','Al-Hāqqa - Die fällig Werdende','Al-Ma\'āriğ - Die Aufstiegswege','Nūh','Al-Ğinn - Die Ğinn','Al-Muzzammil - Der Eingehüllte','Al-Muddattir - Der Zugedeckte','Al-Qiyāma - Die Auferstehung','Al-Insān - Der Mensch','Al-Mursalāt - Die Entsandten','An-Naba - Die Kunde','An-Nāzi\'āt - Die Entreißenden','Abasa - Er blickte düster','At-Takwir - Das Umschlingen','Al-Infitār - Das Zerbrechen','Al-Mutaffifin - Die das Maß Kü','Al-Inšiqāq - Das Sichspalten','Al-Burūğ - Die Türme (Sternzei','At-Tāriq - Der Pochende','Al-A\'lā - Der Höchste','Al-Ğāšiya - Die Überdeckende','Al-Fağr - Die Morgendämmerung','Al-Balad - Die Ortschaft','Aš-Šams - Die Sonne','Al-Lail - Die Nacht','Ad-Duhā - Die Morgenhelle','Aš-Šarh - Das Auftun','At-Tin - Die Feige','Al-\'Alaq - Das Anhängsel','Al-Qadr - Die Bestimmung','Al-Bayyina - Der klare Beweis','Az-Zalzala - Das Beben','Al-\'Ādiyat - Die Rennenden','Al-Qāri\'a - Das Verhängnis','At-Takātur - Die Vermehrung','Al-\'Āsr - Das Zeitalter','Al-Humaza - Der Stichler','Al-Fīl - Der Elefant','Quraiš','Al-Mā\'ūn - Die Hilfeleistung','Al-Kautar - Die Fülle','Al-Kāfirūn - Die Ungläubigen','An-Nasr - Die Hilfe ','Al-Masad - Die Palmfasern','Al-Ihlās - Die Aufrichtigkeit','Al-Falaq - Der Tagesanbruch','An-Nās - Die Menschen');
public $sura_name_spain = array('Quran spain', '﻿La Apertura','La Vaca','La Familia de Imran','Las Mujeres','La Mesa Servida','Los Ganados','El Muro Divisorio','Los Botines','El Arrepentimiento','Jonás','Hud','José','El Trueno','Abraham','Al-Hiyr','Las Abejas','El Viaje Nocturno','La Caverna','María','Ta-Ha','Los Profetas','La Peregrinación','Los Creyentes','La Luz','El Criterio','Los Poetas','Las Hormigas','El Relato','La Araña','Los Bizantinos','Luqman','La Prosternación','Los Aliados','Saba','Originador','ia-sin','Los Ordenados en Filas','Sad','Los Tropeles','El Remisorio','Los Preceptos Detallados','El Consejo','Los Ornamentos de Oro','El Humo','La Arrodillada','Las Dunas','Muhammad','La Victoria','Los aposentos','Qaf','Los Vientos','El Monte','La Estrella','La Luna','El Clemente','El Suceso','El Hierro','La Discusión','El Destierro','La Examinada','Las Filas','El Viernes','Los Hipócritas','El Desengaño','El Divorcio','La Prohibición','El Reino','El Cálamo','La Verdad Inevitable','Las Vías de Ascensión','Noé','Los Genios','El Cobijado','El Envuelto en el Manto','La Resurrección','El Hombre','Los Ángeles Enviados','La Noticia','Los Ángeles Arrancadores','El Ceño','El Arrollamiento','La Hendidura','Los Defraudadores','La Rasgadura','Las Constelaciones','Los Astros Nocturnos','El Altísimo','El Día Angustiante','La Aurora','La Ciudad','El Sol','La Noche','La Mañana','La Abertura del Pecho','La Higuera','El Cigoto','El Decreto','La Evidencia','El Gran Terremoto','Los Corceles','El Día Aterrador','La Codicia','El Transcurso del Tiempo','Los que se Burlan del Prójimo','El Elefante','Quraish','La Ayuda Mínima','Al Kauzar','Los Incrédulos','El Socorro','Las Fibras de Palmeras','El Monoteísmo','La Alborada','Los Hombres');
public $sura_name_turkey = array('Quran turkey', '﻿Fatiha Suresi','Bakara Suresi','Âl-i Imran Suresi','Nisa Suresi','Maide Suresi','Enam Suresi','Araf Suresi','Enfal Suresi','Tevbe Suresi','Yunus Suresi','Hud Suresi','Yusuf Suresi','Rad Suresi','Ibrahim Suresi','Hicr Suresi','Nahl Suresi','Isra Suresi','Kehf Suresi','Meryem Suresi','Taha Suresi','Enbiya Suresi','Hac Suresi','Müminun Suresi','Nur Suresi','Furkan Suresi','Şuara Suresi','Neml Suresi','Kasas Suresi','Ankebut Suresi','Rum Suresi','Lokman Suresi','Secde Suresi','Ahzab Suresi','Sebe Suresi','Fatır Suresi','Yasin Suresi','Saffet Suresi','Sad Suresi','Zümer Suresi','Mümin Suresi','Fussilet Suresi','Şura Suresi','Zuhruf Suresi','Duhan Suresi','Casiye Suresi','Ahkaf Suresi','Muhammed Suresi','Fetih Suresi','Hucurat Suresi','Kaf Suresi','Zariyat Suresi','Tur Suresi','Necm Suresi','Kamer Suresi','Rahman Suresi','Vakia Suresi','Hadid Suresi','Mücadele Suresi','Hasr Suresi','Mümtehine Suresi','Saf Suresi','Cüma Suresi','Münafikun Suresi','Tegabun Suresi','Talak Suresi','Tahrim Suresi','Mülk Suresi','Kalem Suresi','Hakka Suresi','Mearic Suresi','Nuh Suresi','Cin Suresi','Müzemmil Suresi','Müdahhir Suresi','Kiyame Suresi','Insan Suresi','Mürselat Suresi','Nebe Suresi','Naziat Suresi','Abese Suresi','Tekvir Suresi','Infitar Suresi','Müteffifin Suresi','Inşikak Suresi','Büruc Suresi','Tarık Suresi','Ala Suresi','Gaşiye Suresi','Fecr Suresi','Beled Suresi','Şems Suresi','Leyl Suresi','Duha Suresi','Inşirah Suresi','Tin Suresi','Alak Suresi','Kadir Suresi','Beyyine Suresi','Zelzele Suresi','Adiat Suresi','Karia Suresi','Tekasür Suresi','Asr Suresi','Humeze Suresi','Fil Suresi','Kureyş Suresi','Maun Suresi','Kevser Suresi','Kafirun Suresi','Nasr Suresi','Tebbet Suresi','Ihlas Suresi','Felak Suresi','Nas Suresi');
public $sura_name_china = array('Quran china', '开端章','黄牛章','仪姆兰的家属章','妇女章','宴席章','牲畜章','高处章','战利品章','忏悔章','尤努斯章','呼德章','优素福章','雷霆章','易卜拉欣章','石谷章','蜜蜂章','夜行章','山洞章','麦尔彦章','塔哈章','众先知章','朝觐章','信士章','光明章','准则章','众诗人章','蚂蚁章','故事章','蜘蛛章','罗马人章','鲁格曼章','叩头章','同盟军章','赛伯邑章','创造者章','雅辛章','列班者章','萨德章','队伍章','赦宥者章','奉妥来特','协商章','金饰章','烟雾章','屈膝章','沙丘章','穆罕默德章','胜利章','寝室章','嘎弗章','播种者章','山岳章','星宿章','月亮章','至仁主章','大事章','铁章','辩诉着章','放逐章','受考验的妇人章','列阵章','聚礼章','伪信者章','相欺章','离婚章','禁戒章','国权章','笔章','真灾章','天梯章','努哈章','精灵章','披衣的人章','盖被的人章','复活章','人章','天使章','消息章','急掣章','皱眉章','黯黮章','破裂章','称量不公章','绽裂章','十二宫章','启明星章','至高章','大灾章','黎明章','地方章','太阳章','黑夜章','上午章','开拓章','无花果章','血块章','高贵章','明证章','地震章','奔驰的马队章','大难章','竞赛富庶章','时光章','诽谤章','象章','古莱氏章','什物章','多福章','不信道的人们章','援助章','火焰章','忠诚章','曙光章','世人章');
public $sura_name_thai = array('Quran tahi', 'สูเราะฮฺ อัล-ฟาติหะฮฺ','สูเราะฮฺ อัล-บะเกาะเราะฮ','สูเราะฮฺ อาล อิมรอน','สูเราะฮฺ อัน-นิสาอ์','สูเราะฮฺ อัล-มาอิดะฮฺ','สูเราะฮฺ อัล-อันอาม','สูเราะฮฺ อัล-อะอฺรอฟ','สูเราะฮฺ อัล-อันฟาล','สูเราะฮฺ อัต-เตาบะฮฺ','สูเราะฮฺ ยูนุส','สูเราะฮฺ ฮูด','สูเราะฮฺ ยูสุฟ','สูเราะฮฺ อัร-เราะอฺด์','สูเราะฮฺ อิบรอฮีม','สูเราะฮฺ อัล-หิจญ์รฺ','สูเราะฮฺ อัน-นะห์ลฺ','สูเราะฮฺ อัล-อิสรออ์','สูเราะฮฺ อัล-กะฮ์ฟฺ','สูเราะฮฺ มัรยัม','สูเราะฮฺ ฏอฮา','สูเราะฮฺ อัล-อันบิยาอ์','สูเราะฮฺ อัล-หัจญ์','สูเราะฮฺ อัล-มุอ์มินูน','สูเราะฮฺ อัน-นูร','สูเราะฮฺ อัล-ฟุรกอน','สูเราะฮฺ อัช-ชุอะรออ์','สูเราะฮฺ อัน-นัมล์','สูเราะฮฺ อัล-เกาะศ็อศ','สูเราะฮฺ อัล-อันกะบูต','สูเราะฮฺ อัร-รูม','สูเราะฮฺ ลุกมาน','สูเราะฮฺ อัส-สัจญ์ดะฮฺ','สูเราะฮฺ อัล-อะห์ซาบ','สูเราะฮฺ สะบะอ์','สูเราะฮฺ ฟาฏิร','สูเราะฮฺ ยาสีน','สูเราะฮฺ อัศ-ศอฟฟาต','สูเราะฮฺ ศอด','สูเราะฮฺ อัซ-ซุมัร','สูเราะฮฺ ฆอฟิร','สูเราะฮฺ ฟุศศิลัต','สูเราะฮฺ อัช-ชูรอ','สูเราะฮฺ อัช-ซุครุฟ','สูเราะฮฺ อัด-ดุคอน','สูเราะฮฺ อัล-ญาษิยะฮฺ','สูเราะฮฺ อัล-อะห์กอฟ','สูเราะฮฺ มุหัมมัด','สูเราะฮฺ อัล-ฟัตห์','สูเราะฮฺ อัล-หุญุรอต','สูเราะฮฺ กอฟ','สูเราะฮฺ อัซ-ซาริยาต','สูเราะฮฺ อัฏ-ฏูร','สูเราะฮฺ อัน-นัจญ์มฺ','สูเราะฮฺ อัล-เกาะมัร','สูเราะฮฺ อัร-เราะห์มาน','สูเราะฮฺ อัล-วากิอะฮฺ','สูเราะฮฺ อัล-หะดีด','สูเราะฮฺ อัล-มุญาดิละฮฺ','สูเราะฮฺ อัล-หัชร์','สูเราะฮฺ อัล-มุมตะหะนะฮฺ','สูเราะฮฺ อัศ-ศ็อฟ','สูเราะฮฺ อัล-ญุมุอะฮฺ','สูเราะฮฺ อัล-มุนาฟิกูน','สูเราะฮฺ อัต-ตะฆอบุน','สูเราะฮฺ อัฏ-เฏาะลาก','สูเราะฮฺ อัต-ตะห์รีม','สูเราะฮฺ อัล-มุลก์','สูเราะฮฺ อัล-เกาะลัม','สูเราะฮฺ อัล-ห๊ากเกาะฮฺ','สูเราะฮฺ อัล-มะอาริจญ์','สูเราะฮฺ นูหฺ','สูเราะฮฺ อัล-ญิน','สูเราะฮฺ อัล-มุซซัมมิล','สูเราะฮฺ อัล-มุดดัษษิร','สูเราะฮฺ อัล-กิยามะฮฺ','สูเราะฮฺ อัล-อินซาน','สูเราะฮฺ อัล-มุรสะลาต','สูเราะฮฺ อัน-นะบะอ์','สูเราะฮฺ อัน-นาซิอาต','สูเราะฮฺ อะบะสะ','สูเราะฮฺ อัต-ตักวีร','สูเราะฮฺ อัล-อินฟิฏอร','สูเราะฮฺ อัล-มุฏ็อฟฟิฟีน','สูเราะฮฺ อัล-อินชิกอก','สูเราะฮฺ อัล-บุรูจญ์','สูเราะฮฺ อัฏ-ฏอริก','สูเราะฮฺ อัล-อะอฺลา','สูเราะฮฺ อัล-ฆอชิยะฮฺ','สูเราะฮฺ อัล-ฟัจญ์รฺ','สูเราะฮฺ อัล-บะลัด','สูเราะฮฺ อัช-ชัมส์','สูเราะฮฺ อัล-ลัยล์','สูเราะฮฺ อัฎ-ฎุหา','สูเราะฮฺ อัช-ชัรห์','สูเราะฮฺ อัต-ตีน','สูเราะฮฺ อัล-อะลัก','สูเราะฮฺ อัล-ก็อดรฺ','สูเราะฮฺ อัล-บัยยินะฮฺ','สูเราะฮฺ อัซ-ซัลซะละฮฺ','สูเราะฮฺ อัล-อาดิยาต','สูเราะฮฺ อัล-กอริอะฮฺ','สูเราะฮฺ อัต-ตะกาษุร','สูเราะฮฺ อัล-อัศร์','สูเราะฮฺ อัล-ฮุมะซะฮฺ','สูเราะฮฺ อัล-ฟีล','สูเราะฮฺ กุร็อยช์','สูเราะฮฺ อัล-มาอูน','สูเราะฮฺ อัล-เกาษัร','สูเราะฮฺ อัล-กาฟิรูน','สูเราะฮฺ อัน-นัศร์','สูเราะฮฺ อัล-มะสัด','สูเราะฮฺ อัล-อิคลาศ','สูเราะฮฺ อัล-ฟะลัก','สูเราะฮฺ อัน-นาส');
public $sura_name_urdu = array('Quran urdu', '﻿فاتحہ','بقرہ','آل عمران','نساء','مائدہ','انعام','اعراف','انفال','توبہ','یونس','ہود','یوسف','رعد','ابراہیم','حجر','نحل','اسراء','کہف','مریم','طہ','انبیاء','حج ','مؤمنون','نور','فرقان','شعراء','نمل','قصص','عنکبوت','روم','لقمان','سجدہ','احزاب','سبا','فاطر','یس','صافات','ص ','زمر','غافر','فصّلت','شورى','زخرف','دخّان','جاثیہ','احقاف','محمد','فتح','حجرات','ق ','ذاریات','طور','نجم','قمر','رحمن','واقعہ','حدید','مجادلہ','حشر','ممتحنہ','صفّ','جمعہ','منافقون','تغابن','طلاق','تحریم','ملک','قلم','حاقہ','معارج','نوح','جنّ','مزمّل','مدثّر','قیامہ','انسان (دہر)','مرسلات','نبا','نازعات','عبس','تکویر','انفطار','مطفّفین','انشقاق','بروج','طارق','اعلى','غاشیہ','فجر','بلد','شمس','لیل','ضحى','شرح','تین','علق','قدر','بینہ','زلزلہ','عادیات','قارعہ','تکاثر','عصر','ہمزہ','فیل','قریش','ماعون','کوثر','کافرون','نصر','مسد','اخلاص','فلق','ناس');
public $sura_name_bengali = array('Quran bengali', 'আল-ফাতিহা','আল-বাক্বারাহ্','আলে ইমরান','আন-নিসা','আল-মায়েদাহ্','আল-আন‘আম','আল-আ‘রাফ','আল-আনফাল','আত-তাওবাহ্','ইউনুস','হূদ','ইউসুফ','আর-রা‘দ','ইব্রাহীম','আল-হিজর','আন-নাহ্‌ল','আল-ইসরা','আল-কাহফ','মারইয়াম','ত্বা-হা','আল-আম্বিয়া','আল-হাজ্জ','আল-মু’মিনূন','আন-নূর','আল-ফুরক্বান','আশ-শু‘আরা','আন-নামল','আল-ক্বাসাস','আল-‘আনকাবূত','আর-রূম','লুক্বমান','আস-সাজদা','আল-আহযাব','সাবা','ফাতের','ইয়াসীন','আস-সাফ্‌ফাত','সদ','আয-যুমার','গাফের','ফুসসিলাত','আশ-শূরা','আয-যুখরুফ','আদ-দুখান','আল-জাসিয়া','আল-আহক্বাফ','মুহাম্মাদ','আল-ফাতহ','আল-হুজুরাত','ক্বাফ','আয-যারিয়াত','আত-তূর','আন-নাজম','আল-ক্বামার','আর-রাহমান','আল-ওয়াক্বি‘আহ','আল-হাদীদ','আল-মুজাদালাহ্','আল-হাশর','আল-মুমতাহিনা','আস-সাফ','আল-জুমু‘আ','আল-মুনাফিক্বূন','আত-তাগাবুন','আত-ত্বালাক','আত-তাহরীম','আল-মুলক','আল-ক্বালাম','আল-হাক্কাহ্','আল-মা‘আরেজ','নূহ','আল-জিন্ন','আল-মুযযাম্মিল','আল-মুদ্দাস্‌সির','আল-ক্বিয়ামাহ্‌','আল-ইনসান','আল-মুরসালাত','আন-নাবা','আন-নাযি‘আত','‘আবাসা','আত-তাকভীর','আল-ইনফিতার','আল-মুতাফফিফীন','আল-ইনশিক্বাক','আল-বুরূজ','আত-ত্বারেক','আল-আ‘লা','আল-গাশিয়াহ্','আল-ফাজর','আল-বালাদ','আশ-শামস','আল-লাইল','আদ্ব-দ্বুহা','আশ-শারহ','আত-তীন','আল-‘আলাক্ব','আল-ক্বাদর','আল-বায়্যিনাহ্','আয-যালযালাহ্','আল-‘আদিয়াত','আল-ক্বারি‘আহ্','আত-তাকাসুর','আল-‘আসর','আল-হুমাযাহ্','আল-ফীল','ক্বুরাইশ','আল-মা‘ঊন','আল-কাউসার','আল-কাফিরূন','আন-নাসর','আল-মাসাদ','আল-ইখলাস','আল-ফালাক্ব','আন-নাস');
public $sura_name_bosnia = array('Quran bosnia', 'El-Fatiha','El-Bekara','Al Imran','En-Nisa','El-Maide','El-En\'am','El-A\'raf','El-Enfal','Et-Tevbe','Junus','Hud','Jusuf','Er-Ra\'d','Ibrahim','El-Hidžr','En-Nahl','El-Isra','El-Kehf','Merjem','Ta-Ha','El-Enbija','El-Hadždž','El-Mu\'minun','En-Nur','El-Furkan','Eš-Šu\'ara','En-Neml','El-Kasas','El-\'Ankebut','Er-Rum','Lukman','Es-Sedžde','El-Ahzab','Sebe\'','Fatir','Ja-Sin','Es-Saffat','Sad','Ez-Zumer','Gafir','Fussilet','Eš-Šura','Ez-Zuhruf','Ed-Duhan','El-Džasije','El-Ahkaf','Muhammed','El-Feth','El-Hudžurat','Kaf','Ez-Zarijat','Et-Tur','En-Nedžm','El-Kamer','Er-Rahman','El-Vaki\'a','El-Hadid','El-Mudžadele','El-Hašr','El-Mumtehine','Es-Saff','El-Džumu\'a','El-Munafikun','Et-Tegabun','Et-Talak','Et-Tahrim','El-Mulk','El-Kalem','El-Hakka','El-Me\'aridž','Nuh','El-Džinn','El-Muzemmil','El-Muddessir','El-Kijama','El-Insan','El-Murselat','En-Nebe\'','En-Nazi\'at','Abese','Et-Tekvir','El-Infitar','El-Mutaffifin','El-Inšikak','El-Burudž','Et-Tarik','El-A\'la','El-Gašije','El-Fedžr','El-Beled','Eš-Šems','El-Lejl','Ed-Duha','Eš-Šerh','Et-Tin','El-\'Alek','El-Kadr','El-Bejjine','Ez-Zelzele','El-Adijat','El-Kari\'a','Et-Tekasur','El-\'Asr','El-Humeze','El-Fil','Kurejš','El-Ma\'un','El-Kevser','El-Kafirun','En-Nasr','El-Mesed','El-Ihlas','El-Felek','En-Nas');
public $sura_name_uyghur = array('Quran uyghur', 'سۈرە فاتىھە ','سۈرە بەقەرە ','سۈرە ئال ئىمران ','سۈرە نىسا ','سۈرە مائىدە','سۈرە ئەنئام','سۈرە ئەئراف','سۈرە ئەنفال','سۈرە تەۋبە','سۈرە يۇنۇس','سۈرە ھۇد','سۈرە يۇسۇف','سۈرە رەئد','سۈرە ئىبراھىم','سۈرە ھىجر','سۈرە نەھل','سۈرە ئىسرا','سۈرە كەھف','سۈرە مەريەم','سۈرە تاھا','سۈرە ئەنبىيا','سۈرە ھەج','سۈرە مۆئمىنۇن','سۈرە نۇر','سۈرە فۇرقان','سۈرە شۇئەرا','سۈرە نەملە','سۈرە قەسەس','سۈرە ئەنكەبۇت','سۈرە رۇم','سۈرە لوقمان','سۈرە سەجدە','سۈرە ئەھزاب','سۈرە سەبەئ','سۈرە فاتىر','سۈرە ياسىن','سۈرە ساففات','سۈرە ساد','سۈرە زۇمەر','سۈرە غافىر','سۈرە فۇسسىلەت','سۈرە شۇرا','سۈرە زۇخرۇف','سۈرە دۇخان','سۈرە جاسىيە','سۈرە ئەھقاف','سۈرە مۇھەممەد','سۈرە فەتىھ','سۈرە ھۇجەرات','سۈرە قاف','سۈرە زارىيات','سۈرە تۇر','سۈرە نەجم','سۈرە قەمەر','سۈرە رەھمان','سۈرە ۋاقىئە','سۈرە ھەدىد','سۈرە مۇجادىلە','سۈرە ھەشىر','سۈرە مۇمتەھىنە','سۈرە سەف','سۈرە جۇمۇئە','سۈرە مۇناپىقۇن','سۈرە تەغابۇن','سۈرە تالاق','سۈرە تەھرىم','سۈرە مۇلك','سۈرە قەلەم','سۈرە ھاققە','سۈرە مەئارىج','سۈرە نۇھ','سۈرە جىن','سۈرە مۇززەممىل','سۈرە مۇددەسسىر','سۈرە قىيامە','سۈرە ئىنسان','سۈرە مۇرسەلات','سۈرە نەبەئ','سۈرە نازىئات','سۈرە ئەبەسە','سۈرە تەكۋىر','سۈرە ئىنفىتار','سۈرە مۇتەففىفىن','سۈرە ئىنشىقاق','سۈرە بۇرۇج','سۈرە تارىق','سۈرە ئەئلا','سۈرە غاشىيە','سۈرە فەجر','سۈرە بەلەد','سۈرە شەمس','سۈرە لەيل','سۈرە زۇھا','سۈرە ئىنشىراھ','سۈرە تىن','سۈرە ئەلەق','سۈرە قەدر','سۈرە بەييىنە','سۈرە زەلزەلە','سۈرە ئادىيات','سۈرە قارىئە','سۈرە تەكاسۇر','سۈرە ئەسر','سۈرە ھۇمەزە','سۈرە فىل','سۈرە قۇرەيش','سۈرە مائۇن','سۈرە كەۋسەر','سۈرە كافىرۇن','سۈرە نەسىر','سۈرە مەسەد','سۈرە ئىخلاس','سۈرە فەلەق','سۈرە ناس');
public $sura_name_farsi = array('Quran farsi', 'فاتحه','بقره','آل عمران','نساء','مائده','أنعام','أعراف','أنفال','توبه','یونس','هود','یوسف','رعد','إبراهیم','حجر','نحل','إسراء','كهف','مریم','طه','أنبیاء','حج','مؤمنون','نور','فرقان','شعراء','نمل','قصص','عنكبوت','روم','لقمان','سجده','أحزاب','سبأ','فاطر','یس','صافات','ص','زمر','غافر','فصلت','شورى','زخرف','دخان','جاثیه','أحقاف','محمد','فتح','حجرات','ق','ذاریات','طور','نجم','قمر','رحمن','واقعه','حدید','مجادله','حشر','ممتحنه','صف','جمعه','منافقون','تغابن','طلاق','تحریم','ملك','قلم','حاقه','معارج','نوح','جن','مزمل','مدثر','قیامه','إنسان','مرسلات','نبأ','نازعات','عبس','تكویر','انفطار','مطففین','انشقاق','بروج','طارق','أعلى ','غاشیه','فجر','بلد','شمس','لیل','ضحى','شرح','تین','علق','قدر','بینه','زلزله','عادیات','قارعه','تكاثر','عصر','همزه','فیل','قریش','ماعون','كوثر','كافرون','نصر','مسد','إخلاص','فلق','ناس');
public $sura_name_tajeki = array('Quran tajeki', 'ФОТИҲА','БАҚАРА','ОЛИ ИМРОН','НИСО','МОИДА','АНЪОМ','АЪРОФ','АНФОЛ','ТАВБА','ЮНУС','ҲУД','ЮСУФ','РАЪД','ИБРОҲИМ','ҲИҶР','НАҲЛ','ИСРО','КАҲФ','МАРЯМ','ТОҲО','АНБИЁ','ҲАҶ','МУЪМИНУН','НУР','ФУРҚОН','ШУЪАРО','НАМЛ','ҚАСАС','АНКАБУТ','РУМ','ЛУҚМОН','САҶДА',' АҲЗОБ','САБА','ФОТИР','ЁСИН','СОФФОТ','СОД','ЗУМАР','ҒОФИР','ФУССИЛАТ','ШУРО','ЗУХРУФ','ДУХОН','ҶОСИЯ','АҲҚОФ','МУҲАММАД','ФАТҲ','ҲУҶУРОТ','ҚОФ','ЗОРИЁТ','ТУР','НАҶМ','ҚАМАР','РАҲМОН','ВОҚИА','ҲАДИД','МУҶОДАЛА','ҲАШР','МУМТАҲИНА','САФ','ҶУМЪА','МУНОФИҚИН','ТАҒОБУН','ТАЛОҚ','ТАҲРИМ','МУЛК','ҚАЛАМ','ҲОҚҚА','МАЪОРИҶ','НУҲ','ҶИН','МУЗЗАММИЛ','МУДДАССИР','ҚИЁМАТ','ИНСОН','МУРСАЛОТ','НАБА','НОЗИЪОТ','АБАСА','ТАКВИР','ИНФИТОР','МУТАФФИФИН','ИНШИҚОҚ','БУРУҶ','ТОРИҚ','АЪЛО','ҒОШИЯ','ФАҶР','БАЛАД','ШАМС','ЛАЙЛ','ЗУҲО','ШАРҲ','ТИН','АЛАҚ','ҚАДР','БАЙЙИНА','ЗИЛЗИЛА','ЪОДИЁТ','ҚОРИЪА','ТАКОСУР','АСР','ҲУМАЗА','ФИЛ','ҚУРАЙШ','МОЪУН','КАВСАР','КОФИРУН','НАСР','МАСАД','ИХЛОС','ФАЛАҚ','НОС');
public $sura_name_malayalam = array('Quran malbari', 'ഫാതിഹ','ബഖറ','ആലുഇംറാന്','നിസാഅ്','മാഇദ','അന്ആം','അഅ്റാഫ്','അന്ഫാല്','തൌബ','യൂനുസ','ഹൂദ്','യൂസുഫ്','റഅ്ദ്','ഇബ്റാഹീം','ഹിജ്റ്','നഹ് ല്','ഇസ് റാഅ്','കഹ്ഫ്','മറ് യം','ത്വഹാ','അന്പിയാ','ഹജ്ജ് ','മുഅ്മിനൂന്','നൂറ് ','ഷുഅറാ','നംല്','ഖസസ്','അന്കബൂത്ത്','റൂം','ലുഖ്മാന്','സജദ','അഹ്സാബ്','സബഅ്','സബഅ്','ഫാത്വിര്','യാസീന്','സ്വാഫാത്ത്','സ്വാദ്','സുമര്','ഗാഫിര്','ഫുസ്വിലത്ത്','ഷൂറാ','Az-Zukhruf ','ദുഖാന്','ജാസിയ','അഹ്ഖാഫ്','മുഹമ്മദ്','ഫതഹ്','ഹുജറാത്ത്','ഖാഫ്','ദ്ദാരിയാത്ത്','ത്വൂര്','നജ്മ്','ഖമറ്','റ്വഹ്മാന്','വാഖിഅ','ഹദീദ്','മുജാദല','ഹഷ്റ്','മുംതഹിന','സ്വഫ്','ജുമുഅ','മുനാഫിഖൂന്','തഗാബുന്','ത്വലാഖ്','തഹ് രീം','മുലക്','ഖലം','ഹാഖ','മആരിജ്','നൂഹ്','ജിന്ന്','മുസ്സമ്മില്','മുദ്ദസിര്','ഖിയാമ','ഇന്സാന്','മുര്സലാത്ത്','നബഅ്','നാസിആത്ത്','അബസ','തക് വീര്','ഇന്ഫിത്വാര്','മുതഫിഫീന്','ഇന്ഷിഖാഖ്','ബുറൂജ്','ത്വാരിഖ്','അഅ് ലാ','ഗാഷിയ','ഫജ്റ്','ബലദ്','ഷംസ്','ലൈല്','ദ്വുഹാ','ഇന്ഷിറാഹ്','തീന്','അലഖ്','ഖദ്റ്','ബയ്യിന','സല്സല','ആദിയാത്ത്','ഖാരിഅ','തകാഥുര്','അസ്വ് റ്','ഹുമസ','ഫീല്','ഖുറൈശ്','മാഊന്','കൌഥര്','കാഫിറൂന്','നസ്വറ്','മസദ്','ഇഖ് ലാസ്','ഫലഖ്','നാസ് ');
public $sura_name_tagalog = array('Quran tagalog', 'Al-Fâtiha','Ang Baka','Ang Pamilya ni Imran','Ang Kababaihan','Ang Hapag na may Pagkain','Ang mga Baka','Ang mga Matatayog na Pader','Ang mga Labi ng Digmaan','Ang Pagsisisi','Si Propeta Jonah','Si Propeta Hud','Si Propeta Jose','Ang Kidlat','Si Propeta Ibrahim','Ang Mabatong Lupain','Ang Bubuyog','Ang mga Angkan ni Israel','Ang Yungib','Si Maria','Ta Ha','Ang mga Propeta','Ang Itinakdang Paglalakbay sa ','Ang mga Mananampalataya','Ang Liwanag','Ang Panuri','Ang mga Makata','Ang mga Langgam','Ang Salaysay','Ang Gagamba','Ang mga Romano','Si Luqman','Ang Pagpapatirapa','Ang mga Magkakaanib','Ang Sheba','Ang Lumikha','Ya Sin','Ang mga Inihanay sa mga Antas','Sad','Ang mga Pangkat','Ang Mapagpatawad','Ang Masusing Pagpapaliwanag','Ang Sanggunian','Ang mga Palamuting Ginto','Ang Usok','Ang Pagluhod','Ang mga Nakalikong Bunton ng B','Ang Pakikipaglaban','Ang Tagumpay','Ang mga Tirahan','Qaf','Ang mga Hanging Nagkakalat','Ang Bundok','Ang Bituin','Ang Buwan','Ang Mapagpala','Ang Pangyayari','Ang Bakal','Ang Nakikipagtalong Babae','Ang Pagtitipun-tipon','Ang Babaing Sisiyasatin','Ang Hanay','Ang Biyernes','Ang mga Mapagkunwari','Ang Kapwa Pagkatalo at Pagkapa','Ang Diborsiyo','Ang Ipinagbabawal','Ang Kaharian','Ang Panulat','Ang Tiyak na Mangyayari','Ang mga Landas ng Pag-akyat','Si Propeta Noah','Ang Jinn','Ang Nakabalabal sa Damit','Ang Nakabalot','Ang Pagkabuhay-Muli','Ang Tao','Ang mga Ipinadala','Ang mga Balita','Ang mga Humuhugot','Siya\'y Nangunot-Noo','Ang Pagtiklop','Ang Pagkabiyak','Ang mga Mandaraya','Ang Pagkalansag','Ang Malalaking Buntala','Ang Panggabing Panauhin','Ang Kataas-taasan','Ang Nakapananaig','Ang Bukang-Liwayway','Ang Lungsod','Ang Araw','Ang Gabi','Ang Umaga','Ang Pagpapalawak','Ang Igos','Ang Namumuong Dugo','Ang Gabi ng Kahatulan','Ang Maliwanag na Katibayan','Ang Lindol','Ang mga Rumaragasa','Ang Araw ng Malakas na Hiyawan','Ang Paglikom','Ang Panahon','Ang Mapanirang-Puri','Ang Elepante','Ang Tribo ng Quraish','Ang Pangangailangan ng Kapuwa','Ang Kasaganaan','Ang mga Nagtatakwil ng Pananam','Ang Tagumpay','Ang Apoy / Ang Hibla','Ang Kadalisayan ng Pananampala','Ang Madaling-araw','Ang Sangkatauhan');
public $sura_name_indonesia = array('Quran indonesia', 'Surah Al-Fatihah (Pembukaan)','Surah Al-Baqarah (Lembu Betina','Surah Ali ‘Imran (Keluarga Imr','Surah An-Nisaa’ (Wanita)','Surah Al-Maa’idah (Hidangan)','Surah Al-An’aam (Binatang Tern','Surah Al-A’raaf (Tempat Tertin','Surah Al-Anfaal (Rampasan Pera','Surah At-Taubah (Pengampunan)','Surah Yunus (Nabi Yunus a.s.)','Surah Hud (Nabi Hud a.s.)','Surah Yusuf (Nabi Yusuf a.s.)','Surah Ar-Ra’d (Guruh)','Surah Ibrahim (Nabi Ibrahim a.','Surah Al-Hijr (Kawasan Berbatu','Surah An-Nahl (Lebah)','Surah Al-Israa’ (Perjalanan Ma','Surah Al-Kahfi (Gua)','Surah Maryam (Siti Maryam)','Surah Taahaa','Surah Al-Anbiyaa’ (Para Nabi)','Surah Al-Hajj (Haji)','Surah Al-Mu’minun (Golongan ya','Surah An-Nuur (Cahaya)','Surah Al-Furqaan (Pembeza Kebe','Surah Asy-Syu’araa (Para Penya','Surah An-Naml (Semut)','Surah Al-Qasas (Cerita-cerita)','Surah Al-‘Ankabut (Labah-labah','Surah Ar-Rum (Bangsa Rom)','Surah Luqman (Luqman)','Surah As-Sajdah (Sujud)','Surah Al-Ahzab (Golongan yang ','Surah Saba’ (Kaum Saba’)','Surah Faatir (Pencipta)','Surah Yaasin','Surah As-Saaffat (Yang Teratur','Surah Saad','Surah Az-Zumar (Rombongan)','Surah Al-Ghafir / Al-Mu’min (O','Surah Fussilat (Dijelaskan)','Surah Asy-Syuraa (Permesyuarat','Surah Az-Zukhruf (Perhiasan Em','Surah Ad-Dukhaan (Kabut / Asap','Surah Al-Jatsiyah (Yang Berlut','Surah Al-Ahqaaf (Bukit-bukit P','Surah Muhammad (Nabi Muhammad ','Surah Al-Fath (Kemenangan)','Surah Al-Hujurat (Bilik-bilik)','Surah Qaaf','Surah Adz-Dzariyaat (Angin yan','Surah At-Tur (Bukit)','Surah An-Najm (Bintang)','Surah Al-Qamar (Bulan)','Surah Ar-Rahman (Yang Maha Pem','Surah Al-Waqi’ah (Peristiwa ya','Surah Al-Hadid (Besi)','Surah Al-Mujadilah (Perempuan ','Surah Al-Hasyr (Pengusiran)','Surah Al-Mumtahanah (Perempuan','Surah As-Saf (Barisan)','Surah Al-Jumu’ah (Hari Jumaat)','Surah Al-Munafiquun (Golongan ','Surah At-Taghabun (Dinampakkan','Surah At-Talaq (Cerai / Talak)','Surah At-Tahrim (Mengharamkan)','Surah Al-Mulk (Kerajaan)','Surah Al-Qalam (Pena / Kalam)','Surah Al-Haaqqah (Keadaan Sebe','Surah Al-Ma’arij (Tempat-tempa','Surah Nuh (Nabi Nuh a.s.)','Surah A-Jin (Jin)','Surah Al-Muzammil (Yang Bersel','Surah Al-Muddathir (Yang Berse','Surah Al-Qiyaamah (Hari Kebang','Surah Al-Insaan (Manusia)','Surah Al-Mursalat (Malaikat Ya','Surah An-Naba’ (Berita Besar)','Surah An-Naazi’aat (Malaikat Y','Surah ‘Abasa (Dia Bermasam Muk','Surah At-Takwiir (Menggulung)','Surah Al-Infitar (Terpecah & T','Surah Al-Mutaffifiin (Golongan','Surah Al-Insyiqaaq (Terbelah)','Surah Al-Buruj (Gugusan Bintan','Surah At-Taariq (Pengunjung Ma','Surah Al-A’laa (Yang Tertinggi','Surah Al-Ghaasyiah (Peristiwa ','Surah Al-Fajr (Fajar / Sinar M','Surah Al-Balad (Negeri)','Surah Asy-Syams (Matahari)','Surah Al-Lail (Malam)','Surah Adh-Dhuha (Pagi yang Cem','Surah Al-Insyirah/An-Nasyrah (','Surah At-Tin (Buah Tin / Buah ','Surah Al-‘Alaq (Segumpal Darah','Surah Al-Qadr (Kemuliaan)','Surah Al-Baiyinah (Bukti yang ','Surah Al-Zalzalah (Kegoncangan','Surah Al-‘Aadiyaat (Yang Berla','Surah Al-Qari’ah (Hari Yang Hi','Surah At-Takathur (Bermegah-me','Surah Al-‘Asr (Masa)','Surah Al-Humazah (Pengumpat)','Surah Al-Fiil (Gajah)','Surah Quraisy (Kaum Quraisy)','Surah Al-Ma’un (Barangan Bergu','Surah Al-Kauthar (Sungai Di Sy','Surah Al-Kafirun (Golongan Kaf','Surah An-Nasr (Pertolongan)','Surah Al-Masad / Al-Lahab (Nya','Surah Al-Ikhlas (Tulus Ikhlas ','Surah Al-Falaq (Waktu Subuh / ','Surah An-Naas (Manusia)');
public $sura_name_portuguese = array('Quran portuguese','A Abertura','A Vaca','A Família de Imran','As Mulheres','A Mesa Servida','O Gado','Os Cimos','Os Espólios','O Arrependimento','Jonas','Hud','José','O Trovão','Abraão','Alhijr','As Abelhas','A Viagem Noturna','A Caverna','Maria','Ta Ha','Os profetas','A Peregrinação','Os Fiéis','A luz','O Discernimento','Os poetas','As Formigas','As Narrativas','A Aranha','Os Bizantinos','Lucman','A Prostação','Os Partidos','Sabá','O Criador','Yá Sin','Os Enfileirados','A Letra Sad','Os Grupos','O Remissório','Os Detalhados','A Consulta','Os Ornamentos','A Fumaça','O Genuflexo','As Dunas','Mohammad','O Triunfo','Os Aposentos','A Letra Caf','Os Ventos Disseminadores','O Monte','A Estrela','A Lua','O Clemente','O Eventos Inevitável','O Ferro','A Discussão','O Desterro','A Examinada','As Fileiras','A Sexta-Feira','Os Hipócritas','As Defraudações Recíprocas','O Divórcio','As Proibições','A Soberania','O cálamo','A Realidade','As Vias de Ascensão','Noé','Os Gênios','O Acobertado','O Emantado','A Ressurreição','O Homem','Os Enviados','A Notícia','Os Arrebatadores','O Austero','O Enrolamento','O Fendimento','Os Fraudadores','A Fenda','As Constelações','O Visitante Noturno','O Altíssimo','O Evento Assolador','A Aurora','A Metrópole','O sol','A Noite','As Horas da Manhã','O Conforto','O Figo','O Coágulo','O Decreto','A Evidência','O Terremoto','Os Corcéis','A Calamidade','A Cobiça','A Era','O Difamador','O Elefante','Os Coraixitas','Os Obséquios','A Abundância','Os Incrédulos','O Socorro','O Esparto','A Unicidade','A Alvorada','Os Humanos');

public $class_reciters = 'col-xs-12 col-sm-6 col-md-4';
public $class_reciters_by = 'col-xs-12 col-sm-6 col-md-4';
public $class_language = 'col-xs-6 col-sm-4 col-md-2';
public $class_sura = 'col-xs-12 col-sm-6 col-md-4';

function w($v=""){
global $_GET;

	if(isset($_GET['language']) && $_GET['language'] != "" && in_array($_GET['language'], $this->language_code)){
		$language = strip_tags($_GET['language']);
	}else{
		$language = $this->default_language;
	}
	
if($language == "arabic"){
$word['title'] = 'الموسوعة الصوتية للقرآن الكريم';
$word['home'] = 'الرئيسية';
$word['download'] = 'تحميل السورة';
$word['footer'] = '<p>برمجة نواحي و تعديل  <a target="_blank" href="">Sa,Fa</a> - بدعم من <a target="_blank" title="mp3quran.net" href="http://www.mp3quran.net">MP3QURAN.net API</a> الحقوق محفوظة '.date('Y',time()).'</p>';
$word['nothing'] = 'لايوجد قاريء';
$word['reciters'] = 'القرّاء';
$word['reciters_by_letter'] = 'ترتيب القرّاء أبجديا';
$word['reciters_by_rewaya'] = 'ترتيب القرّاء حسب الرواية';
$word['sura'] = $this->sura_name_arabic;
}elseif($language == "france"){
$word['title'] = 'La bibliothque audio du Coran MP3 Coran';
$word['home'] = 'Home';
$word['download'] = 'Download';
$word['footer'] = '<p>Programming by <a target="_blank" href="">Sa,Fa</a>, Copyright '.date('Y',time()).' <a target="_blank" title="mp3quran.net" href="http://www.mp3quran.net">MP3QURAN.net API</a>,All Rights Reserved.</p>';
$word['nothing'] = 'There is nothing';
$word['reciters'] = 'Reciters';
$word['reciters_by_letter'] = 'Reciters by Letter';
$word['reciters_by_rewaya'] = 'Reciters by Rewaya';
$word['sura'] = $this->sura_name_france;
}elseif($language == "russia"){
$word['title'] = 'Ваша MP3 библиотека Корана';
$word['home'] = 'Home';
$word['download'] = 'Download';
$word['footer'] = '<p>Programming by <a target="_blank" href="">Sa,Fa</a>, Copyright '.date('Y',time()).' <a target="_blank" title="mp3quran.net" href="http://www.mp3quran.net">MP3QURAN.net API</a>,All Rights Reserved.</p>';
$word['nothing'] = 'There is nothing';
$word['reciters'] = 'Reciters';
$word['reciters_by_letter'] = 'Reciters by Letter';
$word['reciters_by_rewaya'] = 'Reciters by Rewaya';
$word['sura'] = $this->sura_name_russia;
}elseif($language == "germany"){
$word['title'] = 'Ihre umfassende MP3 Qur\'an-Bibliothek im Internet';
$word['home'] = 'Home';
$word['download'] = 'Download';
$word['footer'] = '<p>Programming by <a target="_blank" href="">Sa,Fa</a>, Copyright '.date('Y',time()).' <a target="_blank" title="mp3quran.net" href="http://www.mp3quran.net">MP3QURAN.net API</a>,All Rights Reserved.</p>';
$word['nothing'] = 'There is nothing';
$word['reciters'] = 'Reciters';
$word['reciters_by_letter'] = 'Reciters by Letter';
$word['reciters_by_rewaya'] = 'Reciters by Rewaya';
$word['sura'] = $this->sura_name_germany;
}elseif($language == "spain"){
$word['title'] = 'Biblioteca del Corán en audio - Corán en MP3';
$word['home'] = 'Home';
$word['download'] = 'Download';
$word['footer'] = '<p>Programming by <a target="_blank" href="">Sa,Fa</a>, Copyright '.date('Y',time()).' <a target="_blank" title="mp3quran.net" href="http://www.mp3quran.net">MP3QURAN.net API</a>,All Rights Reserved.</p>';
$word['nothing'] = 'There is nothing';
$word['reciters'] = 'Reciters';
$word['reciters_by_letter'] = 'Reciters by Letter';
$word['reciters_by_rewaya'] = 'Reciters by Rewaya';
$word['sura'] = $this->sura_name_spain;
}elseif($language == "turkey"){
$word['title'] = 'Sesli Kur\'an Kütüphanesi';
$word['home'] = 'Home';
$word['download'] = 'Download';
$word['footer'] = '<p>Programming by <a target="_blank" href="">Sa,Fa</a>, Copyright '.date('Y',time()).' <a target="_blank" title="mp3quran.net" href="http://www.mp3quran.net">MP3QURAN.net API</a>,All Rights Reserved.</p>';
$word['nothing'] = 'There is nothing';
$word['reciters'] = 'Reciters';
$word['reciters_by_letter'] = 'Reciters by Letter';
$word['reciters_by_rewaya'] = 'Reciters by Rewaya';
$word['sura'] = $this->sura_name_turkey;
}elseif($language == "china"){
$word['title'] = '古兰经语音图书馆';
$word['home'] = 'Home';
$word['download'] = 'Download';
$word['footer'] = '<p>Programming by <a target="_blank" href="">Sa,Fa</a>, Copyright '.date('Y',time()).' <a target="_blank" title="mp3quran.net" href="http://www.mp3quran.net">MP3QURAN.net API</a>,All Rights Reserved.</p>';
$word['nothing'] = 'There is nothing';
$word['reciters'] = 'Reciters';
$word['reciters_by_letter'] = 'Reciters by Letter';
$word['reciters_by_rewaya'] = 'Reciters by Rewaya';
$word['sura'] = $this->sura_name_china;
}elseif($language == "thai"){
$word['title'] = 'ห้องสมุดไฟล์เสียงอัลกุรอาน';
$word['home'] = 'Home';
$word['download'] = 'Download';
$word['footer'] = '<p>Programming by <a target="_blank" href="">Sa,Fa</a>, Copyright '.date('Y',time()).' <a target="_blank" title="mp3quran.net" href="http://www.mp3quran.net">MP3QURAN.net API</a>,All Rights Reserved.</p>';
$word['nothing'] = 'There is nothing';
$word['reciters'] = 'Reciters';
$word['reciters_by_letter'] = 'Reciters by Letter';
$word['reciters_by_rewaya'] = 'Reciters by Rewaya';
$word['sura'] = $this->sura_name_thai;
}elseif($language == "urdu"){
$word['title'] = 'قرآن کریم کی آڈیولائبریرى';
$word['home'] = 'الرئيسية';
$word['download'] = 'تحميل السورة';
$word['footer'] = '<p>برمجة <a target="_blank" href="">Sa,Fa</a> - بدعم من <a target="_blank" title="mp3quran.net" href="http://www.mp3quran.net">MP3QURAN.net API</a> الحقوق محفوظة '.date('Y',time()).'</p>';
$word['nothing'] = 'لايوجد قاريء';
$word['reciters'] = 'القرّاء';
$word['reciters_by_letter'] = 'ترتيب القرّاء أبجديا';
$word['reciters_by_rewaya'] = 'ترتيب القرّاء حسب الرواية';
$word['sura'] = $this->sura_name_urdu;
}elseif($language == "bengali"){
$word['title'] = 'কুরআন কারীমের অডিও লাইব্রেরি';
$word['home'] = 'Home';
$word['download'] = 'Download';
$word['footer'] = '<p>Programming by <a target="_blank" href="">Sa,Fa</a>, Copyright '.date('Y',time()).' <a target="_blank" title="mp3quran.net" href="http://www.mp3quran.net">MP3QURAN.net API</a>,All Rights Reserved.</p>';
$word['nothing'] = 'There is nothing';
$word['reciters'] = 'Reciters';
$word['reciters_by_letter'] = 'Reciters by Letter';
$word['reciters_by_rewaya'] = 'Reciters by Rewaya';
$word['sura'] = $this->sura_name_bengali;
}elseif($language == "bosnia"){
$word['title'] = 'Audio biblioteka Časnog Kur\'ana';
$word['home'] = 'Home';
$word['download'] = 'Download';
$word['footer'] = '<p>Programming by <a target="_blank" href="">Sa,Fay</a>, Copyright '.date('Y',time()).' <a target="_blank" title="mp3quran.net" href="http://www.mp3quran.net">MP3QURAN.net API</a>,All Rights Reserved.</p>';
$word['nothing'] = 'There is nothing';
$word['reciters'] = 'Reciters';
$word['reciters_by_letter'] = 'Reciters by Letter';
$word['reciters_by_rewaya'] = 'Reciters by Rewaya';
$word['sura'] = $this->sura_name_bosnia;
}elseif($language == "uyghur"){
$word['title'] = 'قۇرئان كەرىم ئاۋازلىق كىتابخانىسى';
$word['home'] = 'الرئيسية';
$word['download'] = 'تحميل السورة';
$word['footer'] = '<p>برمجة <a target="_blank" href="">Sa,Fa</a> - بدعم من <a target="_blank" title="mp3quran.net" href="http://www.mp3quran.net">MP3QURAN.net API</a> الحقوق محفوظة '.date('Y',time()).'</p>';
$word['nothing'] = 'لايوجد قاريء';
$word['reciters'] = 'القرّاء';
$word['reciters_by_letter'] = 'ترتيب القرّاء أبجديا';
$word['reciters_by_rewaya'] = 'ترتيب القرّاء حسب الرواية';
$word['sura'] = $this->sura_name_uyghur;
}elseif($language == "farsi"){
$word['title'] = 'آرشیو - کتابخانه صوتی قرآن کریم';
$word['home'] = 'الرئيسية';
$word['download'] = 'تحميل السورة';
$word['footer'] = '<p>برمجة <a target="_blank" href="">Sa,Fa</a> - بدعم من <a target="_blank" title="mp3quran.net" href="http://www.mp3quran.net">MP3QURAN.net API</a> الحقوق محفوظة '.date('Y',time()).'</p>';
$word['nothing'] = 'لايوجد قاريء';
$word['reciters'] = 'القرّاء';
$word['reciters_by_letter'] = 'ترتيب القرّاء أبجديا';
$word['reciters_by_rewaya'] = 'ترتيب القرّاء حسب الرواية';
$word['sura'] = $this->sura_name_farsi;
}elseif($language == "tajeki"){
$word['title'] = 'Китобхонаи савтии Қуръони карим';
$word['home'] = 'Home';
$word['download'] = 'Download';
$word['footer'] = '<p>Programming by <a target="_blank" href="">Sa,Fa</a>, Copyright '.date('Y',time()).' <a target="_blank" title="mp3quran.net" href="http://www.mp3quran.net">MP3QURAN.net API</a>,All Rights Reserved.</p>';
$word['nothing'] = 'There is nothing';
$word['reciters'] = 'Reciters';
$word['reciters_by_letter'] = 'Reciters by Letter';
$word['reciters_by_rewaya'] = 'Reciters by Rewaya';
$word['sura'] = $this->sura_name_tajeki;
}elseif($language == "malayalam"){
$word['title'] = 'വിശുദ്ധ ഖുര്ആന് ഓഢിയോ ലൈബ്ററി';
$word['home'] = 'Home';
$word['download'] = 'Download';
$word['footer'] = '<p>Programming by <a target="_blank" href="">Sa,Fa</a>, Copyright '.date('Y',time()).' <a target="_blank" title="mp3quran.net" href="http://www.mp3quran.net">MP3QURAN.net API</a>,All Rights Reserved.</p>';
$word['nothing'] = 'There is nothing';
$word['reciters'] = 'Reciters';
$word['reciters_by_letter'] = 'Reciters by Letter';
$word['reciters_by_rewaya'] = 'Reciters by Rewaya';
$word['sura'] = $this->sura_name_malayalam;
}elseif($language == "tagalog"){
$word['title'] = 'Ang Banal na Qur\'an - Audio - MP3';
$word['home'] = 'Home';
$word['download'] = 'Download';
$word['footer'] = '<p>Programming by <a target="_blank" href="">Sa,Fa</a>, Copyright '.date('Y',time()).' <a target="_blank" title="mp3quran.net" href="http://www.mp3quran.net">MP3QURAN.net API</a>,All Rights Reserved.</p>';
$word['nothing'] = 'There is nothing';
$word['reciters'] = 'Reciters';
$word['reciters_by_letter'] = 'Reciters by Letter';
$word['reciters_by_rewaya'] = 'Reciters by Rewaya';
$word['sura'] = $this->sura_name_tagalog;
}elseif($language == "indonesia"){
$word['title'] = 'Perpustakaan Audio MP3 Qur\'an';
$word['home'] = 'Home';
$word['download'] = 'Download';
$word['footer'] = '<p>Programming by <a target="_blank" href="">Sa,Fa</a>, Copyright '.date('Y',time()).' <a target="_blank" title="mp3quran.net" href="http://www.mp3quran.net">MMP3QURAN.net API</a>,All Rights Reserved.</p>';
$word['nothing'] = 'There is nothing';
$word['reciters'] = 'Reciters';
$word['reciters_by_letter'] = 'Reciters by Letter';
$word['reciters_by_rewaya'] = 'Reciters by Rewaya';
$word['sura'] = $this->sura_name_indonesia;
}elseif($language == "portuguese"){
$word['title'] = 'Biblioteca Auditiva do Alcorão Sagrado';
$word['home'] = 'Home';
$word['download'] = 'Download';
$word['footer'] = '<p>Programming by <a target="_blank" href="">Sa,Fa</a>, Copyright '.date('Y',time()).' <a target="_blank" title="mp3quran.net" href="http://www.mp3quran.net">MP3QURAN.net API</a>,All Rights Reserved.</p>';
$word['nothing'] = 'There is nothing';
$word['reciters'] = 'Reciters';
$word['reciters_by_letter'] = 'Reciters by Letter';
$word['reciters_by_rewaya'] = 'Reciters by Rewaya';
$word['sura'] = $this->sura_name_portuguese;
}else{
$word['title'] = 'Quran Audio Library';
$word['home'] = 'Home';
$word['download'] = 'Download';
$word['footer'] = '<p>Programming by <a target="_blank" href="">Sa,Fa</a>, Copyright '.date('Y',time()).' <a target="_blank" title="mp3quran.net" href="http://www.mp3quran.net">MP3QURAN.net API</a>,All Rights Reserved.</p>';
$word['nothing'] = 'There is nothing';
$word['reciters'] = 'Reciters';
$word['reciters_by_letter'] = 'Reciters by Letter';
$word['reciters_by_rewaya'] = 'Reciters by Rewaya';
$word['sura'] = $this->sura_name_english;
}
return $word[''.$v.''];
}

function convertto_utf8($text=""){
$converted = preg_replace('/\\\u([0-9a-z]{4})/i', '&#x$1;', $text);
return $converted;
}

function mp3quran_json_get_content($url=""){
$json_url = file_get_contents($url);
return $json_url;
}

function mp3quran_json_decode($url=""){
$json_url = $this->mp3quran_json_get_content($url);
$json_data = json_decode($json_url);
return $json_data;
}

function mp3quran_get_title($type=""){
global $_GET;

	if(isset($_GET['language']) && $_GET['language'] != "" && in_array($_GET['language'], $this->language_code)){
		$language = strip_tags($_GET['language']);
	}else{
		$language = $this->default_language;
	}
	
	$languages_info = $this->languages_info();
	$site_title = $this->w('title'); //$this->site_title
	
if(isset($_GET['data']) && $_GET['data'] == "main"){
	$title = $site_title;
	$description = $this->site_description;
}elseif(isset($_GET['data']) && $_GET['data'] == "reciters"){
	$title = $this->w('reciters').' - '.$language.' - '.$site_title;
	$description = $this->w('reciters').' - '.$language.' - '.$site_title;
}elseif(isset($_GET['data']) && $_GET['data'] == "reciters_by_letter"){
	$title = $this->w('reciters_by_letter').' - '.$language.' - '.$site_title;
	$description = $this->w('reciters_by_letter').' - '.$language.' - '.$site_title;
}elseif(isset($_GET['data']) && $_GET['data'] == "reciters_by_rewaya"){
	$title = $this->w('reciters_by_rewaya').' - '.$language.' - '.$site_title;
	$description = $this->w('reciters_by_rewaya').' - '.$language.' - '.$site_title;
}elseif(isset($_GET['data']) && $_GET['data'] == "info"){
	$get_content = explode("zzz", $this->mp3quran_json_view(1));
	$title = $get_content[0];
	if($get_content[1] == ""){
		$description = $get_content[0].' - '.$languages_info[$language][0].' - '.$site_title;
	}else{
		$description = $get_content[1];
	}
}else{
	$title = $site_title;
	$description = $this->site_description;
}

if($type == 1){
	return $description;
}else{
	return $title;
}

}

function mp3quran_json_language(){

//$url = 'http://www.mp3quran.net/api/get_json.php';
$url = 'json/home.json';

$item = $this->mp3quran_json_decode($url);
$languages_info = $this->languages_info();

$output = '<div class="row">'."\n";
$i=0;
foreach ($item->language as $postinfo) {
	$lang_id = $postinfo->id;
	$lang_title = $postinfo->language;
	$lang_json = $postinfo->json;
	$title = str_replace("_","",$lang_title);
	$page_url = 'index.php?data=reciters&language='.$title.'';
	
	$language = $languages_info[$title][0];
	
	++$i;
	$output .= '<div class="'.$this->class_language.'">';
	$output .= '<div class="spacer">';
	$output .= '<h4><a href="'.$page_url.'" title="'.ucfirst($title).'">'.ucfirst($language).'</a></h4>';
	$output .= '</div>';
	$output .= '</div>'."\n";
}
$output .= '</div>';
return $output;
}


function alphabet_loop(){
global $_GET;

$languages_info = $this->languages_info();

if(isset($_GET['language']) && $_GET['language'] != "" && in_array($_GET['language'], $this->language_code)){
	$language = strip_tags($_GET['language']);
}else{
	$language = $this->default_language;
}

if($language == "arabic"){
	$alphabet = $this->alphabet_arabic;
}else{
	$alphabet = $this->alphabet;
}

$code = '<ol class="breadcrumb">
  <li><a href="index.php">'.$this->w("home").'</a></li>
  <li><a href="index.php?language='.$language.'">'.$languages_info[$language][0].'</a></li>
  <li class="active">'.$this->w('reciters_by_letter').'</li>
</ol>';

$code .= '<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">'."\n";
$code .= '<div class="btn-group" role="group" aria-label="First group">'."\n";
for($x=0; $x < count($alphabet); ++$x){
$code .= '<div class="btn btn-default"><a href="#letter_'.$alphabet[$x].'">'.$alphabet[$x].'</a></div>'."\n";
}
$code .= '</div>'."\n";
$code .= '</div>'."\n";

for($i=0; $i < count($alphabet); ++$i){
$code .= '<div class="panel panel-default" id="letter_'.$alphabet[$i].'">'."\n";
$code .= '<div class="panel-heading"><h3 class="panel-title">'.$alphabet[$i].'</h3></div>'."\n";
$code .= '<div class="panel-body">'."\n";
if($this->mp3quran_json_reciters_by($alphabet[$i], 1) == '<div class="row"></div>'){
$code .= '<p>'.$this->w('nothing').'</p>'."\n";
}else{
$code .= $this->mp3quran_json_reciters_by($alphabet[$i], 1);
}
$code .= '</div>'."\n";
$code .= '</div>'."\n";
}
return $code;
}
	
function rewayat_loop(){
global $_GET;

$languages_info = $this->languages_info();
	
if(isset($_GET['language']) && $_GET['language'] != "" && in_array($_GET['language'], $this->language_code)){
	$language = strip_tags($_GET['language']);
}else{
	$language = $this->default_language;
}

if($language == "arabic"){
	$rewayat = $this->rewayat_arabic;
}else{
	$rewayat = $this->rewayat;
}

$code = '<ol class="breadcrumb">
  <li><a href="index.php">'.$this->w("home").'</a></li>
  <li><a href="index.php?language='.$language.'">'.$languages_info[$language][0].'</a></li>
  <li class="active">'.$this->w('reciters_by_rewaya').'</li>
</ol>';

for($i=0; $i < count($rewayat); ++$i){
$code .= '<div class="panel panel-default">'."\n";
$code .= '<div class="panel-heading"><h3 class="panel-title">'.$rewayat[$i].'</h3></div>'."\n";
$code .= '<div class="panel-body">'."\n";
if($this->mp3quran_json_reciters_by($rewayat[$i]) == '<div class="row"></div>'){
$code .= '<p>'.$this->w('nothing').'</p>'."\n";
}else{
$code .= $this->mp3quran_json_reciters_by($rewayat[$i]);
}
$code .= '</div>'."\n";
$code .= '</div>'."\n";
}
return $code;
}

function mp3quran_json_reciters_by($orderby="", $type=0){
global $_GET;

$languages_info = $this->languages_info();
	
if(isset($_GET['id']) && $_GET['id'] != 0){
	$reciter_id = intval($_GET['id']);
}else{
	$reciter_id = 0;
}

if(isset($_GET['language']) && $_GET['language'] != "" && in_array($_GET['language'], $this->language_code)){
	$language = strip_tags($_GET['language']);
}else{
	$language = $this->default_language;
}

//$url = 'http://www.mp3quran.net/api/_'.$language.'.json';
$url = 'json/_'.$language.'.json';

$item = $this->mp3quran_json_decode($url);

$output = '<div class="row">';
foreach ($item->reciters as $postinfo) {

$id = $postinfo->id;
$name = $postinfo->name;
$server = $postinfo->Server;
$rewaya = $postinfo->rewaya;
$count = $postinfo->count;
$letter = $postinfo->letter;
$suras = $postinfo->suras;

if($type == 1){
	$order_type = $letter;
	$view_rewaya = '<p class="rewaya">'.$rewaya.'</p>';
	$reciters_class = ' class="reciters"';
}else{
	$order_type = $rewaya;
	$view_rewaya = '';
	$reciters_class = ' class="recitersbyrewaya"';
}

$page_link = 'index.php?data=surah&language='.$language.'&id='.$id.'';

	if($order_type == $orderby){
	$output .= '<div class="'.$this->class_reciters_by.'">';
	$output .= '<div class="spacer">';
	$output .= '<h4'.$reciters_class.'><a href="'.$page_link.'">'.$name.'</a></h4>';
	$output .= $view_rewaya;
	$output .= '</div>';
	$output .= '</div>';
	}else{
	$output .= '';
	}
}
$output .= '</div>';

return $output;
}

function mp3quran_json_reciters(){
global $_GET;

$languages_info = $this->languages_info();
	
if(isset($_GET['language']) && $_GET['language'] != "" && in_array($_GET['language'], $this->language_code)){
	$language = strip_tags($_GET['language']);
}else{
	$language = $this->default_language;
}

//$url = 'http://www.mp3quran.net/api/_'.$language.'.json';
$url = 'json/_'.$language.'.json';

$item = $this->mp3quran_json_decode($url);

$output = '<ol class="breadcrumb">
  <li><a href="index.php">'.$this->w("home").'</a></li>
  <li><a href="index.php?language='.$language.'">'.$languages_info[$language][0].'</a></li>
  <li class="active">'.$this->w('reciters').'</li>
</ol>';

$output .= '<div class="row">';
	foreach ($item->reciters as $postinfo) {

	$id = $postinfo->id;
	$name = $postinfo->name;
	$server = $postinfo->Server;
	$rewaya = $postinfo->rewaya;
	$count = $postinfo->count;
	$letter = $postinfo->letter;
	$suras = $postinfo->suras;

	$page_link = 'index.php?data=surah&language='.$language.'&id='.$id.'';
	$output .= '<div class="'.$this->class_reciters.'">';
	$output .= '<div class="spacer">';
	$output .= '<h4 class="reciters"><a href="'.$page_link.'">'.$name.'</a></h4>';
	$output .= '<p class="rewaya">'.$rewaya.'</p>';
	$output .= '</div>';
	$output .= '</div>';
	}
$output .= '</div>';

return $output;
}

function mp3quran_json_surah(){
global $_GET;

$languages_info = $this->languages_info();
	
if(isset($_GET['id']) && $_GET['id'] != 0){
	$reciter_id = intval($_GET['id']);
}else{
	$reciter_id = 0;
}

if(isset($_GET['language']) && $_GET['language'] != "" && in_array($_GET['language'], $this->language_code)){
	$language = strip_tags($_GET['language']);
}else{
	$language = $this->default_language;
}

//$url = 'http://www.mp3quran.net/api/_'.$language.'.json';
$url = 'json/_'.$language.'.json';

$item = $this->mp3quran_json_decode($url);

$code = '';
foreach ($item->reciters as $postinfo) {
$id = $postinfo->id;
$name = $postinfo->name;
$server = $postinfo->Server;
$rewaya = $postinfo->rewaya;
$count = $postinfo->count;
$letter = $postinfo->letter;
$suras = $postinfo->suras;

if($reciter_id == $id){
	$code .= '<div class="row">';
	$code .= '<div class="panel panel-default">';
	$code .= '<div class="panel-heading"><h3 class="panel-title">'.$name.' - '.$rewaya.'</h3></div>';
	$code .= '<div class="panel-body">';

	$code .= '<div id="sound"></div>';

	$allsuras = explode(",",$suras);
	$sura_name = $this->w('sura');

		for($i=0; $i < count($allsuras); ++$i) {
		$sura_id = $allsuras[$i];
		$code .= '<div class="'.$this->class_sura.'">';

		$added_zero = strlen($sura_id);
		if($added_zero==1){
		$current_surh = '00'.$sura_id.'';
		}elseif($added_zero==2){
		$current_surh = '0'.$sura_id.'';
		}elseif($added_zero==3){
		$current_surh = $sura_id;
		}
		$code .= '<div class="spacer">';
		$code .= '<h5 onclick="changesound(\''.$server.'/'.$current_surh.'.mp3\');"><a href="#sound">'.$sura_name[$sura_id].'</a></h5>';
		$code .= '</div>';
		$code .= '</div>';
		}


	$code .= '</div>';
	$code .= '</div>';
	$code .= '</div>';

break;
}else{
	$code .= '';
}
}

$output = '<ol class="breadcrumb">
	  <li><a href="index.php">'.$this->w("home").'</a></li>
	  <li><a href="index.php?language='.$language.'">'.$languages_info[$language][0].'</a></li>
	  <li><a href="index.php?data=reciters&language='.$language.'">'.$this->w('reciters').'</a></li>
	  <li class="active">'.$name.' - '.$rewaya.'</li>
	</ol>';
	$output .= $code;
	
return $output;
}

function languages_info(){
$lang_info['arabic'] = array('عربي', 'ar');
$lang_info['english'] = array('English', 'en');
$lang_info['france'] = array('Français', 'fr');
$lang_info['russia'] = array('Русский', 'ru');
$lang_info['germany'] = array('Deutsch', 'de');
$lang_info['spain'] = array('Español', 'es');
$lang_info['turkey'] = array('Türkçe', 'tr');
$lang_info['china'] = array('中文', 'zh');
$lang_info['thai'] = array('ไทย', 'th');
$lang_info['urdu'] = array('اردو', 'ur');
$lang_info['bengali'] = array('বাংলা', 'bn');
$lang_info['bosnia'] = array('Bosanski', 'bs');
$lang_info['uyghur'] = array('ئۇيغۇرچە', 'ug');
$lang_info['farsi'] = array('فارسى', 'fa');
$lang_info['tajeki'] = array('Тоҷикӣ', 'tg');
$lang_info['malayalam'] = array('മലയാളം', 'ml');
$lang_info['tagalog'] = array('Tagalog', 'tl');
$lang_info['indonesia'] = array('Indonesia', 'id');
$lang_info['portuguese'] = array('Português', 'pt');
return $lang_info;
}

}

class current_page{
var $protocol;
var $site;
var $thisfile;
var $real_directories;
var $num_of_real_directories;
var $virtual_directories = array();
var $num_of_virtual_directories = array();
var $baseurl;
var $thisurl;

function current_page(){
$this->protocol = $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
$this->site = $this->protocol . '://' . $_SERVER['HTTP_HOST'];
$this->thisfile = basename($_SERVER['SCRIPT_FILENAME']);
$this->real_directories = $this->cleanUp(explode("/", str_replace($this->thisfile, "", $_SERVER['PHP_SELF'])));
$this->num_of_real_directories = count($this->real_directories);
$this->virtual_directories = array_diff($this->cleanUp(explode("/", str_replace($this->thisfile, "", $_SERVER['REQUEST_URI']))),$this->real_directories);
$this->num_of_virtual_directories = count($this->virtual_directories);
$this->baseurl = $this->site . "/" . implode("/", $this->real_directories) . "/";
$this->thisurl = $this->baseurl . implode("/", $this->virtual_directories) . "";
}

function cleanUp($array){
$cleaned_array = array();
foreach($array as $key => $value){
$qpos = strpos($value, "?");
if($qpos !== false){ break; }
if($key != "" && $value != ""){ $cleaned_array[] = $value; }
}
return $cleaned_array;
}
}

$current_page = new current_page();
?>
