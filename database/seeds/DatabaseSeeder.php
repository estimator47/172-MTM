<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Info;
use App\Models\Gallery;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	//user table
        User::create(
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'admin',
                'remember_token' => Str::random(10),
                'api_token' => Str::random(8),
            ]
        );

        /**
     * Seed the application's database from Teachers.
     *
     * @return void
     */

        Teacher::create(
            [
                'name' => 'Tolipova Yulduz Ergashovna',
                'occupation' => 'Direktor',
                'info' => '1979-yil Toshkent shahrida tavvalud topgan.',
                'nameru' => 'Толипова Юлдуз Ергашовна',
                'occupationru' => 'Директор',
                'inforu' => 'Родился в 1979 году в Ташкенте.',
                'image' => 'image_1.jpg',

            ]
        );

        Teacher::create(
            [
                'name' => 'Nasrullaeva Dilfuza Xikmatullaevna',
                'occupation' => 'Musiqa rahbari',
                'info' => '1968-Toshkent shahrida tavvalud topgan.',
                'nameru' => 'Насруллаева Дилфуза Хикматулаевна',
                'occupationru' => 'Музыкальный Руководитель',
                'inforu' => 'Родился в 1968 году в Ташкенте.',
                'image' => 'image_2.jpg',

            ]
        );

        Teacher::create(
            [
                'name' => 'Mallaboeva Oydin Sunnatovna',
                'occupation' => 'Tarbiyachi',
                'info' => '1977-yil Toshkent shahrida tavvalud topgan.',
                'nameru' => 'Маллабоева Ойдин Суннатовна',
                'occupationru' => 'Воспитатель',
                'inforu' => 'Родился в 1977 году в Ташкенте.',
                'image' => 'image_3.jpg',

            ]
        );


         /**
     * Seed the application's database from Info.
     *
     * @return void
     */

        Info::create(
            [
                'name' => 'O‘zbekistonda bog‘cha yoshi o‘zgardimi?',
                'info' => "Yaqinda qabul qilingan «Maktabgacha ta’lim va tarbiya to‘g‘risida»gi Qonun yuzasidan turli savollar berilmoqda. Ular orasida eng ko‘p so‘ralayotgani «bog‘chaga bolalarni qabul qilishda quyi yosh chegarasi o‘zgardimi?» degan savol bo‘lyapti.

                    Shu munosabat bilan Adliya vazirligi quyidagilarga aniqlik kiritdi.

                    Qonunning 34-moddasida maktabgacha ta’lim tashkilotlari guruhlarini to‘ldirish haqida so‘z boradi. Unda bog‘cha guruhlarining yoshga doir toifalari keltirilgan va «ilk rivojlanish guruhi (bir yoshdan uch yoshgacha)» degan toifa qayd etilgan.
                    Ushbu jumla fuqarolarni chalg‘itib, «bolalarni hamma bog‘chalarga bir yoshdan boshlab berish mumkin ekan» degan noto‘g‘ri talqinlarni yuzaga keltirmoqda.

                    Biroq Qonunning 33-moddasida «Umumiy turdagi davlat maktabgacha ta’lim tashkilotlariga bolalarni qabul qilish O‘zbekiston Respublikasi Vazirlar Mahkamasi tomonidan belgilanadigan tartibda amalga oshiriladi» deyilgan.

                    Vazirlar Mahkamasining 2019-yil 13-maydagi 391-son qarori bilan tasdiqlangan nizomning 35-moddasida esa shunday deyiladi: «Davlat maktabgacha ta’lim tashkilotlariga 3 yoshdan 7 yoshgacha bo‘lgan bolalar qabul qilinadi».

                    Demak, davlat bog‘chalariga bolalarni qabul qilish yoshi quyi chegarasi 3 yoshligicha qolmoqda.

                    Xususiy bog‘chalarga bolalarni qabul qilish va ulardan chiqarish esa Vazirlar Mahkamasining qarori emas, nodavlat maktabgacha ta’lim tashkilotining ustavi bilan tartibga solinadi. Bunda nodavlat maktabgacha ta’lim muassasasi ustavida nazarda tutilgan bo‘lsa va davlat tomonidan qo‘yilgan ma’lum talablarga javob bersa, bolalarni hatto 1 yoshga to‘lmagan bo‘lsa ham xususiy bog‘chalar qabul qilishi mumkin.
                    Qonundagi yosh guruhlari toifalanishiga oid moddaga «bir yoshdan uch yoshgacha» so‘z birikmasi kiritilishining sababi quyidagilar:
                    birinchidan, davlat bog‘chalariga bolalarni qabul qilishda keyinchalik yosh chegarasi o‘zgarsa, Qonunga o‘zgartirish kiritishdek murakkab yuridik protseduraning oldini olish;
                    ikkinchidan, xususiy bog‘chalarda guruhlarni yoshga doir toifalash me’yorlarini belgilab berish." ,
                'nameru' => 'Изменился ли возраст детского сада в Узбекистане?',
                'inforu' => 'Существуют различные вопросы относительно недавнего принятия Закона о дошкольном образовании. Наиболее часто задаваемый вопрос: «Изменился ли нижний возрастной ценз для приема в детский сад?» вопрос в том

                    В связи с этим Министерство юстиции уточнило следующее.

                    Статья 34 закона касается набора групп дошкольных организаций. В нем перечислены возрастные группы детских садов и категория «группа раннего развития (от одного до трех лет)».
                    Эта фраза сбивает с толку граждан и создает неправильное представление о том, что «детей можно отправлять во все детские сады с одного года».

                    Однако в статье 33 Закона говорится, что «прием детей в государственные дошкольные образовательные учреждения общего типа осуществляется в порядке, установленном Кабинетом Министров Республики Узбекистан».

                    В статье 35 Хартии, утвержденной постановлением Кабинета министров № 391 от 13 мая 2019 года, говорится: «Дети в возрасте от 3 до 7 лет принимаются в государственные дошкольные учреждения».

                    Это означает, что минимальный возраст для приема в государственные детские сады остается на уровне 3 лет.

                    Прием и исключение детей из частных детских садов регулируется не Кабинетом министров, а уставом негосударственного дошкольного учреждения. Частные детские сады могут принимать детей в возрасте до 1 года при условии, что устав негосударственного дошкольного образовательного учреждения соответствует определенным требованиям, установленным государством.
                    Причина включения фразы «от одного до трех лет» в статью о классификации возрастных групп в законе заключается в следующем:
                    во-первых, предотвратить сложную юридическую процедуру, такую как внесение поправок в закон, если позднее возрастные ограничения для приема детей в государственные детские сады изменятся;
                    и во-вторых, установить соответствующие возрасту критерии классификации для групп в частных детских садах.',
                'image' => 'image_1.jpg',
                'click' => '0',

            ]
        );



        Info::create(
            [
                'name' => 'SALOMATLIK ALIFBOSIDA BOLALARDA NUTQ RIVOJLANIShINING O‘ZIGA XOS TOMONLARI.',
                'info' => 'Farzandingiz har tomonlama va to‘laqonli rivojlanishi uchun ularda ko‘plab ko‘nikma va iqtidorni rivojlantirish zarur. Maktabgacha yoshdagi bolalar rivojlanishining muhim yo‘nalishlaridan biri, ularning nutqi hisoblanadi. Bolaning ilk yoshidanoq nutq rivojlanishining quyidagi jihatlariga etibor qaratish zarur:

                    -tovushlarni ayta olishi,
                    -gaplar tuza olishi,
                    -boshqalar tomonidan aytilayotgan so‘zlarni qabul qilishi.' ,
                'nameru' => 'ОСОБЫЕ АСПЕКТЫ РАЗВИТИЯ РЕЧИ У ДЕТЕЙ В АЗБУКЕ ЗДОРОВЬЯ.',
                'inforu' => 'Чтобы ваш ребенок развивался полностью и полноценно, ему необходимо развить множество навыков и умений. Одним из важнейших аспектов развития дошкольников является их речь. Важно обратить внимание на следующие аспекты развития речи с раннего возраста:

                     -может сказать звуки,
                     -коррекция речи,
                     -принимать слова, сказанные другими.',
                'image' => 'news_1.png',
                'click' => '0',

            ]
        );

        Info::create(
            [
                'name' => 'Bog‘cha uchun qilingan to‘lov karantindan so‘ng qayta hisoblanadi',
                'info' => 'Maktabgacha ta’lim vaziri Agrippina Shin karantin davri uchun maktabgacha ta’lim tashkilotiga qilinadigan to‘lovning hisoblanish tartibiga izoh berdi.

                    «Karantin davrida bolaning maktabgacha ta’lim tashkilotiga qatnamaganini inobatga olgan holda, keyingi oy avvalida to‘lov masalasi qayta hisoblab chiqiladi», dedi Agrippina Shin.

                    Shuningdek, karantin davrida MTT metodistlarining ishga chiqishda davom etishi zaruratiga oydinlik kiritildi.

                    «Metodist mudir bilan birgalikda karantin davrida ota-onalar uchun tushuntirish ishlarini olib boradi. Ta’til vaqtida bolaning vaqtini qanday to‘g‘ri tashkil etish bo‘yicha savollar tug‘ilishi tabiiy, bunda metodist maslahati kerak bo‘ladi.

                    Shuningdek, MTT mudiri va metodisti ish davrida jamlanib qolgan yumushlarni bajarishlari mumkin bo‘ladi. Ishning huquqiy masalalari, qog‘oz ishlari jamlanib qolgan. Bular asosiy ishdan tashqari vaqt talab etadi. Hozir shu kabi ishlarni qilib olish, tizimga yangi g‘oya va rejalar kiritish haqida o‘ylash uchun qulay vaqt», dedi Agrippina Shin karantin davrida MTTlar faoliyatini tashkil etish masalasiga bag‘ishlangan brifingda.

                    Brifingda ma’lum qilinishicha, karantindan so‘ng nafaqat davlat, balki xususiy maktabgacha ta’lim tashkilotlarida ham hududiy sanitariya-epidemiologiya markazlari tomonidan dezinfeksiya choralari ko‘rilishi tashkil etiladi.' ,
                'nameru' => 'Плата за детский сад пересчитывается после карантина',
                'inforu' => 'Министр дошкольного образования Агриппина Шина объяснила порядок расчета платы дошкольной организации за карантинный период.

                    «Учитывая, что ребенок не посещал дошкольные учреждения в течение периода карантина, оплата будет пересчитана в начале следующего месяца», - сказала Агриппина Шин.

                    Было также уточнено, что методисты МТТ должны продолжать работать в течение периода карантина.

                    «Методист будет работать с директором, чтобы объяснить родителям в течение периода карантина. Естественно задавать вопросы о том, как правильно организовать время ребенка во время каникул, что требует методистской консультации.

                    Кроме того, руководитель и методист МТТ смогут выполнять работу, накопленную за время работы. Правовые вопросы дела, оформление документов, сосредоточены. Они занимают время вне основной работы. Сейчас самое время сделать что-то подобное, подумать о добавлении новых идей и планов в систему », - сказала Агриппина Шин на брифинге по организации MTT в течение периода карантина.

                    Согласно брифингу, после карантина региональные санитарно-эпидемиологические центры будут дезинфицировать не только государственные, но и частные дошкольные учреждения.',
                'image' => 'image_4.jpg',
                'click' => '0',

            ]
        );



        Info::create(
            [
                'name' => '2020 yil 1 maydan bog‘cha puli miqdorlari o‘zgaradi.',
                'info' => 'Vazirlar Mahkamasining “2020 yil uchun davlat maktabgacha ta‘lim tashkilotlarida bolalar ta‘minoti uchun ota-onalar to‘lovi miqdorlarini tasdiqlash to‘g‘risida”gi qarori qabul qilindi.
                    Qayd etilishicha, Qoraqalpog‘iston Respublikasi, Xorazm viloyati, Navoiy viloyatining Tomdi, Uchquduq, Konimex, Nurota tumanlari va Zarafshon shahri, Qashqadaryo viloyatining Dehqonobod, Kasbi, Mirishkor, Qamashi, Chiroqchi, Nishon, Yakkabog‘ va G‘uzor tumanlarida, Buxoro viloyatining Olot, Shofirkon, Qorako‘l, Peshku va Romitan tumanlarida, Surxondaryo viloyatining Qiziriq, Muzrabot, Oltinsoy, Boysun, Qumqo‘rg‘on, Uzun, Sariosiyo tumanlarida, Samarqand viloyatining Hypobod, Qo‘shrabot, Urgut, Bulung‘ur va Paxtachi tumanlarida, Jizzax viloyatining Baxmal, G‘allaorol, Forish, Mirzacho‘l va Yangiobod tumanlarida, Sirdaryo viloyatining Oqoltin, Mirzaobod, Xovos va Sardoba tumanlarida, Farg‘ona viloyatining So‘x tumani hamda Farg‘ona tumanining “Shohimardon” va “Yordon” qishloqlarida joylashgan davlat maktabgacha ta‘lim tashkilotlarida ota-onalar tomonidan har oyda bolalar ta‘minoti uchun to‘lanadigan haq miqdori o‘rnatilgan tarifning 50 foizi miqdorida belgilanadi.' ,
                'nameru' => 'С 1 мая 2020 года размер платы за детский сад изменится.',
                'inforu' => 'Кабинет министров принял постановление «Об утверждении размера родительских выплат на содержание ребенка в государственных дошкольных учреждениях на 2020 год».
                    Было отмечено, что в Республике Каракалпакстан, Хорезмской области, Томди, Учкудуке, Кенимэкс, Нуратинском районах Навоийской области и городе Зарафшан, Дехканабадском, Касби, Миришкорском, Камашинском, Чиракчинском, Нишанском, Яккабагском и Гузарском районах Бушарского района Алматинской области Кашарского района. , В Шафирканском, Каракульском, Пешкуском и Ромитанском районах, в Кизирикском, Музрабатском, Олтинсойском, Бойсунском, Кумкурганском, Узунском, Сариосийском районах Сурхандарьинской области, в Хипабадском, Кошрабатском, Ургутском, Булунгурском и Пахтаринском районах, Пахтачинского районов, Сахтаринского районов Он расположен в Бахмальском, Галлаорольском, Форишском, Мирзачульском и Янгиабадском районах Джизакской области, в Акалтинском, Мирзаабадском, Хавасском и Сардобинском районах Сырдарьинской области, в Сохском районе Ферганской области и в селах Шохимардон и Йордон Ферганской области. размер ежемесячной платы за алименты, выплачиваемый родителями в государственных дошкольных образовательных учреждениях, устанавливается в размере 50 процентов от установленного тарифа.',
                'image' => 'image_2.jpg',
                'click' => '0',

            ]
        );


        Info::create(
            [
                'name' => 'Ta‘lim muassasalarida: Masofaviy talim tizimi samarasi',
                'info' => 'Masofaviy talim real vaqt rejimida video-konferensiya (ZOOM, Skype, vebinar va b.), oldindan yuklangan video darslarni, taqdimot va yozma materiallarni ko‘rish, telegramdagi yozishmalar shaklida o‘tilmoqda. Birgina telegram ijtimoiy tarmog‘i orqali akademik lisey rasmiy kanali hamda har bir guruh uchun alohida telegramda guruhlar tashkil etilib, o‘quvchilarga amaldagi dars jadvali asosida kundalik darslar mazmuni va mustaqil bajarish uchun topshiriqlar berib borilmoqda. O‘quvchilar topshiriqlarni olib, bir kun ichida bajarganligi bo‘yicha turli shakldagi hisobotlarni yuklashadi va har bir o‘qituvchi o‘z fanidan bajargan ishiga qarab o‘quvchilarni baholab borishadi.

				Ichki ishlar vazirligi ko‘rsatmasiga asosan, akademik lisey elektron kundalik tizimiga azo bo‘ldi. Tizimda o‘qituvchi va o‘quvchilar hatto ota-onalar uchun qulayliklar mavjud. Ularning har biri o‘z shaxsiy kabinetiga ega bo‘lib, tizimga login va parollari orqali kirishadi. Har bir o‘qituvchi o‘z fanidan dars jadvali asosida topshiriqlarni berib boradi, o‘quvchi esa osongina o‘ziga tegishli fanlardan topshiriqlarni oladi, ularni bajarib tizimga javoblarini jo‘natishadi. O‘qituvchi javoblarni tekshirib baholaydi va elektron jurnalga qayd qilib boradi. Shuningdek, ota-onalar farzandining berilayotgan topshiriqlarni o‘z vaqtida bajarayotganligini va qanday baholar olayotganini elektron kundalik orqali kuzatib boradi.

				Kundalik tizimining muhim yo‘nalishlari – talimini modernizasiya qilish, talim jarayonida axborot kommunikasiya texnologiyalari (AKT) integratsiyasi, «O‘qituvchi–o‘quvchi–ota yoki ona» interaktiv kommunikasiyasini rivojlantirish, axborot almashinishning yagona muhitini joriy etish, talim muassasasi ekotizimini yaratish va xizmat ko‘rsatish, shuningdek, masofaviy talim uchun imkoniyatlarni yaratishdan iborat.' ,
                'nameru' => 'В образовательных учреждениях: эффективность дистанционного обучения',
                'inforu' => 'Дистанционное обучение осуществляется в виде видеоконференций в режиме реального времени (ZOOM, Skype, вебинара и т. Д.), Предварительно загруженных видеоуроков, презентаций и письменных материалов, переписки по телеграмме. Через единую социальную сеть с телеграммой, официальный канал академического лицея, а также отдельные группы телеграмм для каждой группы, ученики получают задания для ежедневного содержания урока и самостоятельной работы на основе текущего расписания урока. Студенты принимают задания, загружают отчеты об их завершении в течение одного дня, и каждый учитель оценивает студентов на основе их успеваемости по своему предмету.

Под руководством Министерства внутренних дел академическая гимназия стала участником системы электронных дневников. Система удобна для учителей, учеников и даже родителей. Каждый из них имеет свою личную учетную запись и входит в систему со своим логином и паролем. Каждый учитель назначает задания по своему предмету на основе плана урока, и ученик легко получает задания по соответствующим предметам, выполняет их и отправляет свои ответы в систему. Учитель проверяет ответы и записывает их в электронный журнал. Родители также могут следить за своевременностью и оценками своего ребенка в Интернете.

Важные области повседневной системы - модернизация образования, интеграция информационных и коммуникационных технологий (ИКТ) в образовании, развитие интерактивного общения «учитель-ученик-родитель», внедрение единой среды для обмена информацией, создание экосистемы образовательных учреждений и сервис, а также создание возможностей для дистанционного обучения.',
                'image' => 'news_3.png',
                'click' => '0',

            ]
        );
        Info::create(
            [
                'name' => 'Karantin davrida o‘quv markazlari faoliyati qanday tashkil etiladi?',
                'info' => 'Faqat «yashil» hududlardagina mumkin

            Respublika maxsus komissiyasining karantin cheklovlarini yumshatish bo‘yicha qarori asosida 5 iyun sanasidan boshlab «yashil» toifadagi hududlarda ta‘lim markazlari va to‘garaklar faoliyatiga ruxsat berilgan edi.

            Ammo hududlar toifalarining tez-tez o‘zgarish turishi ko‘plab tadbirkorlik sub‘yektlari qatorida o‘quv markazlari faoliyatida ham muammolar tug‘dirmoqda.

            Ta‘lim sifatini nazorat qilish inspeksiyasi axborot xizmati xodimi Shavkat Xo‘jaqulov «sariq» va «qizil» hududlardagi markaz va to‘garaklar hozircha o‘z darslarini onlayn shaklda tashkil etishi lozimligini ta‘kidladi.

            O‘quv markazlari va to‘garaklar faoliyatiga talablar

            Maxsus komissiya «yashil» hududlardagi o‘quv markazlari va to‘garaklar faoliyatini tashkil etishda quyidagi talablarni qo‘ygan:

            darslarni 10 kishidan ko‘p bo‘lmagan guruhlarda tashkil etish;
            mashg‘ulotlar vaqtini oldindan kelishgan holda belgilash;
            xodimlar va bolalarning sog‘ligini doimiy nazorat qilib borish (tana haroratini muntazam o‘lchab borish);
            infeksiya alomatlari mavjud xodimlar va bolalarni mashg‘ulotlardan chetlatish;
            sanitariya-gigiyena va dezinfeksiya talablariga qat‘iy rioya etish.
            Markaz va to‘garaklar faoliyati SES nazoratida bo‘ladi

            Sanitariya-epidemiologik osoyishtalik agentligi axborot xizmati rahbari Muhammadjon Bozorovning ma‘lumot berishicha, «yashil» hududdagi o‘quv markazlari faoliyatini tiklashdan avval hududiy SESga murojaat qilishi kerak bo‘ladi.

            «O‘quv markazi joylashgan hudud «yashil» toifaga kiritilgan bo‘lsa, markaz rahbari hududiy sanitariya-epidemiologik osoyishtalik bo‘limiga murojaat qiladi.

            Hududiy SES o‘quv markaziga borib, o‘rgangan holda, sanitariya qoidalariga rioya qilish bo‘yicha tegishli ko‘rsatmalarni beradi. Shundan keyingina markaz faoliyatini boshlashi mumkin.

            SES markazning belgilangan normalarga rioya etilishini nazorat qilib boradi.

            Yana bir muhim jihat. O‘quv markazi hududida sanitariya, dezinfeksiya tadbirlarini olib borish bo‘yicha markaz rahbariyati aynan SES bilan shartnoma qilishi majburiy emas. U istasa xususiy sanitariya xizmatlari bilan kelishgan holda, istasa kerakli dezinfeksion uskuna va vositalarni xarid qilib, o‘zi dezinfeksiya ishlarini amalga oshirishi mumkin. Muhimi, barcha sanitariya normalariga amal qilinishi lozim», – dedi Muhammadjon Bozorov.

            Soliq imtiyozlari saqlab qolinadi

            Davlat soliq qo‘mitasi axborot xizmati ma‘lumotiga ko‘ra, «yashil» toifaga kiritilgan hududda o‘quv markazi va to‘garaklar o‘z faoliyatini tiklagan taqdirda ham ularga yuridik shaxs sifatida karantin davrida berilgan imtiyozlar saqlab qolinadi.

            «Koronavirus pandemiyasi davrida aholi va tadbirkorlik sub‘yektlari uchun berilgan soliq imtiyozlari tuman va shaharlar qaysi hudud toifasiga kirishidan qati nazar ularning amal qilish muddati tugagunga qadar amal qiladi», – deyiladi DSQ axborotida.

            Eslatib o‘tamiz, 2020 yilning 1 iyunidan 1 sentyabrigacha bo‘lgan davrda kichik tadbirkorlik sub‘yektlari mol-mulk solig‘i va yer solig‘ini to‘lashdan ozod qilingan.' ,
                'nameru' => 'Как организованы учебные центры в период карантина?',
                'inforu' => 'Возможно только в «зеленых» зонах

            На основании решения республиканской специальной комиссии об ослаблении карантинных ограничений с 5 июня образовательным центрам и клубам было разрешено работать в «зеленых» зонах.

            Однако частые изменения в категориях регионов создают проблемы для многих предприятий, а также для учебных центров.

            Шавкат Ходжакулов, сотрудник информационной службы Инспекции по контролю качества образования, сказал, что центры и клубы в «желтой» и «красной» областях теперь должны организовывать свои занятия онлайн.

            Требования к учебным центрам и клубам

            Специальная комиссия установила следующие требования к организации учебных центров и клубов в «зеленых» зонах:

            организовывать занятия в группах не более 10 человек;
            заранее запланированное время обучения;
            регулярный мониторинг здоровья работников и детей (регулярное измерение температуры тела);
            исключить персонал и детей с признаками инфекции из обучения;
            строгое соблюдение санитарно-гигиенических и дезинфекционных требований.
            Деятельность центра и клубов будет находиться под контролем СЭС

            По словам Мухаммаджона Бозорова, руководителя информационной службы Агентства санитарно-эпидемиологического надзора, учебные центры в «зеленой» зоне должны будут обратиться к региональной ГЭС, прежде чем возобновить работу.

            «Если территория, на которой расположен учебный центр, включена в« зеленую »категорию, руководитель центра обратится в областное санитарно-эпидемиологическое управление.

            Региональная СЭС посетит учебный центр для изучения и предоставления соответствующих инструкций о том, как соблюдать санитарные правила. Только тогда центр может начать работать.

            СЭС контролирует соответствие центра установленным нормам.

            Еще один важный аспект. Руководство центра не обязано подписывать контракт с ГЭС на санитарно-дезинфекционные мероприятия на территории учебного центра. Он может самостоятельно проводить дезинфекцию, если хочет, по согласованию с частными санитарными службами, если он хочет, он может купить необходимое дезинфекционное оборудование и инструменты. Важно, чтобы соблюдались все санитарные нормы », - сказал Мухаммаджон Бозоров.

            Налоговые льготы будут сохранены

            По данным информационной службы Государственного налогового комитета, даже если учебный центр и клубы возобновят свою деятельность в «зеленой» категории, льготы, предоставленные им в течение периода карантина как юридического лица, будут сохранены.

            «Во время пандемии коронавируса налоговые льготы для населения и предприятий будут действовать до истечения срока их полномочий, независимо от категории района и города», - говорится в заявлении.

            Следует отметить, что с 1 июня по 1 сентября 2020 года малые предприятия освобождаются от налога на имущество и земельного налога.',
                'image' => 'image_10.jpg',
                'click' => '0',

            ]
        );
        Info::create(
            [
                'name' => 'O‘zbekistonda 1-sinfga qabul jarayoni onlayn navbat asosida amalga oshirilmoqda',
                'info' => 'Koronavirus pandemiyasi sharoitida farzandingizni maktabga qabul qilish jarayonida duch keladigan navbatda to‘planib turish va ortiqcha sarsongarchiliklarni bartaraf etish maqsadida Xalq ta’limi vazirligi tomonidan 2020-yil 6-iyuldan boshlab 2020/2021-o‘quv yiliga qabul qilishning elektron navbat tizimi yaratildi.

                    1-sinf qabuliga navbatga turish internet tarmog‘idagi ‘www.qabul.maktab.uz’ veb-portali orqali onlayn navbat asosida amalga oshiriladi”, — deyilgan vazirlik axborot xizmati bergan xabarda. Avvalroq O‘zbekistonda 2020/2021-o‘quv yili uchun 1-sinf o‘quvchilarining qabuli 6-iyuldan boshlanishi, 1-iyuldan ixtisoslashtirilgan davlat umumta’lim maktablariga qabul jarayoni boshlangani haqida xabarlar berilgandi.' ,
                'nameru' => 'В Узбекистане процесс поступления в 1 класс осуществляется в режиме онлайн',
                'inforu' => 'В контексте пандемии коронавируса Министерство народного образования создало электронную систему очередей для поступления в 2020/2021 учебный год с 6 июля 2020 года, чтобы избежать очередей и ненужной путаницы в процессе приема вашего ребенка в школу.

                     Очередь за 1-й класс будет осуществляться на основе онлайн-очереди через веб-портал www.qabul.maktab.uz », - сказали в пресс-службе министерства. Ранее сообщалось, что прием первоклассников на 2020/2021 учебный год в Узбекистане начнется 6 июля, а процесс приема в специализированные государственные школы начнется 1 июля.',
                'image' => 'image_11.jpg',
                'click' => '0',

            ]
        );
        Info::create(
            [
                'name' => 'O‘zbek tilining izohli lug‘ati yangi tahrirda chop etildi.',
                'info' => '“O‘zbek tilining izohli lug‘ati”ning yangi tahriri 3 ming nusxada qayta nashr etildi. Bu haqda O‘zbekiston Fanlar akademiyasi xabar berdi. Ta’kidlash kerakki, O‘zbekiston Fanlar akademiyasi O‘zbek tili, adabiyoti va folklori instituti (oldingi Alisher Navoiy nomidagi Til va adabiyot instituti)ning bir guruh lug‘atshunoslari tomonidan 2006—2008-yillarda 5 jildli “O‘zbek tilining izohli lug‘ati” yaratilgan va nashr etilgan.
                    Ushbu lug‘atga 80 mingga yaqin o‘zbek adabiy tilida keng iste’molda bo‘lgan so‘z va so‘z birikmalari, fan, san’at, madaniyat va texnika sohalariga oid terminlar, shevalarda qo‘llanadigan so‘zlar, tarixiy atamalar jamlangan.
                    “Lug‘atning yangi tahririga esa jamiyatda yuz bergan o‘zgarishlar natijasida iste’molga kirib kelgan yuzlab yangi so‘z va atamalar kiritilgan. Masalan, broker, depozit, diler, konsalting, lizing, menejer, menejment, monitoring, nou-xau, sanatsiya, xolding, displey, internet, monitor, printer, sayt, skaner, fayl singari bir qancha yangi so‘zlar shular jumlasiga kiradi”, — deyiladi xabarda.
                    Mavzuga doir: Qoraqalpoq tilining yangi izohli lug‘ati tayyorlanadi.' ,
                'nameru' => 'Аннотированный словарь узбекского языка опубликован в новом издании.',
                'inforu' => 'Новое издание узбекского словаря было перепечатано в 3000 экземпляров. Об этом сообщила Академия наук Узбекистана. Следует отметить, что группа лексикографов Института узбекского языка, литературы и фольклора Академии наук Узбекистана (ранее Институт языка и литературы имени Алишера Навои) в 2006-2008 годах опубликовала 5-томный «Толковый словарь узбекского языка». Название было создано и опубликовано.
                    Словарь включает в себя около 80 000 слов и словосочетаний общего пользования на узбекском литературном языке, термины, относящиеся к науке, искусству, культуре и технике, слова, используемые в диалектах, исторические сроки суммированы.
                    «Новое издание словаря включает в себя сотни новых слов и терминов, которые стали использоваться в результате изменений в обществе. Например, брокер, депозит, дилер, консалтинг, лизинг, менеджер, управление, мониторинг, ноу-хау, реабилитация, хранение, отображение, интернет, монитор, принтер, сайт, сканер, файл и т. Д. - говорится в сообщении.
                    Предмет: готовится новый толковый словарь каракалпакского языка.',
                'image' => 'image_12.jpg',
                'click' => '0',

            ]
        );

        /**
     * Seed the application's database from Gallery.
     *
     * @return void
     */

        Gallery::create(
            [
                'image' => 'image_1.jpg',

            ]
        );
        Gallery::create(
            [
                'image' => 'image_2.jpg',

            ]
        );
        Gallery::create(
            [
                'image' => 'image_3.jpg',

            ]
        );
        Gallery::create(
            [
                'image' => 'image_4.jpg',

            ]
        );
        Gallery::create(
            [
                'image' => 'image_5.jpg',

            ]
        );
        Gallery::create(
            [
                'image' => 'image_6.jpg',

            ]
        );
        Gallery::create(
            [
                'image' => 'image_7.jpg',

            ]
        );
        Gallery::create(
            [
                'image' => 'image_8.jpg',

            ]
        );

    }
}
