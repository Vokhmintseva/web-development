const moviesArr = [
  {
    id: 'stranger_things',
    title: 'Очень странные дела',
    description: `1980-е годы, тихий провинциальный американский городок. Благоприятное
                  течение местной жизни нарушает загадочное исчезновение подростка по имени Уилл. Выяснить обстоятельства дела
                  полны решимости родные мальчика и местный шериф, также события затрагивают лучшего друга Уилла –
                  Майка.`,
    image: 'images/stranger_things.png'
  },
  {
    id: 'breaking_bad',
    title: 'Во все тяжкие',
    description: `С целью оплаты лечения и обеспечения финансового будущего своей семьи
                  Уолтер Уайт решает заняться производством метамфетамина. Его напарником становится бывший ученик — Джесси
                  Пинкман. Вместе они находят домик на колёсах и отправляются в пустыню, чтобы приготовить первую партию
                  наркотика.`,
    image: 'images/breaking_bad.png'
  },
  {
    id: 'true_detective',
    title: 'Настоящий детектив',
    description: `Действие разворачивается в районе известнякового плато Озарк,
                  расположенного одновременно в нескольких штатах. Детектив Уэйн Хейз совместно со следователем из
                  Арканзаса Роландом Уэстом пытаются разобраться в загадочном преступлении, растянувшемся на три
                  десятилетия.`,
    image: 'images/true_detective.png'
  },
  {
    id: 'suits',
    title: 'Форс-мажоры',
    description: `Убегая после неудачной попытки сбыта наркотиков, юрист-самоучка Майк Росс,
                  выдающий себя за выпускника Гарварда, попадает на собеседование к одному из лучших адвокатов по
                  сделкам Нью-Йорка Харви Спектру.`,
    image: 'images/suits.png'
  },
  {
    id: 'Sherlock',
    title: 'Шерлок',
    description: `События разворачиваются в наши дни. Он прошел Афганистан, остался инвалидом. По возвращении в родные
                  края встречается с загадочным, но своеобразным гениальным человеком. Тот в поиске соседа по квартире.
                  Лондон, 2010 год. Происходят необъяснимые убийства. Скотланд-Ярд без понятия, за что хвататься.
                  Существует лишь один человек, который в силах разрешить проблемы и найти ответы на сложные вопросы.`,
    image: 'images/sherlock.png'
  },
  {
    id: 'big_bang_theory',
    title: 'Теория большого взрыва',
    description: `Два блестящих физика Леонард и Шелдон - великие умы, которые понимают, как устроена вселенная. Но их
                  гениальность ничуть не помогает им общаться с людьми, особенно с женщинами. Всё начинает меняться, когда
                  напротив них поселяется красавица Пенни.`,
    image: 'images/big_bang_theory.png'
  },
  {
    id: 'game_of_thrones',
    title: 'Игра престолов',
    description: `К концу подходит время благоденствия, и лето, длившееся почти десятилетие,
                  угасает. Вокруг средоточия власти Семи королевств, Железного трона, зреет заговор, и в это непростое
                  время король решает искать поддержки у друга юности Эддарда Старка. В мире, где все — от короля до
                  наемника — рвутся к власти, плетут интриги и готовы вонзить нож в спину, есть место и благородству,
                  состраданию и любви.`,
    image: 'images/game_of_thrones.png'
  },
  {
    id: 'card_house',
    title: 'Карточный домик',
    description: `Амбициозный конгрессмен от Демократической партии Фрэнк Андервуд в обмен на
                  обещание сделать его госсекретарём помогает Гаррету Уокеру стать президентом США. Однако после выборов
                  глава администрации президента Линда Васкез сообщает Андервуду, что он не получит должность. Взбешенные
                  предательством Фрэнк и его жена готовы пойти на всё, чтобы отомстить новоиспечённому президенту.`,
    image: 'images/house_of_cards.png'
  },
  {
    id: 'downtown_abbey',
    title: 'Аббатство Даунтон',
    description: `Главное событие в жизни каждого аристократа — прием правящего монарха в
                  родовом гнезде. Однако в череде изысканных раутов и светских церемоний кто-то из обитателей роскошного
                  особняка готовит покушение на короля.`,
    image: 'images/downton_abbey.png'
  },
  {
    id: 'vikings',
    title: 'Викинги',
    description: `Сериал рассказывает об отряде викингов Рагнара. Он восстал, чтобы стать
                  королём племён викингов. Норвежская легенда гласит, что он был прямым потомком Одина, бога войны и воинов.`,
    image: 'images/vikings.png'
  }
]