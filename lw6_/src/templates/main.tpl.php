<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Информация о себе</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
</head>
<body>
<div class="main_block">
    <div class="menu">
        <ul>
            <li><a href="#about_me" class="icon">Обо мне</a></li>
            <li><a href="#hobbies" class="icon hobbies">Мое хобби</a></li>
            <li><a href="#favourite_movies" class="icon favourite_movies">Любимые фильмы</a></li>
        </ul>
    </div>
    <div class="nature"></div>
    <img src="images/photo.png" class="photo">
    <div class="quote">
        <blockquote class="blockquote">Не ошибается тот, кто ничего не делает</blockquote>
        <cite class="cite">— Теодор Рузвельт</cite>
    </div>
    <div class="favourites">
        <div class="favourites_heading">Любимые писатели:</div>
        <ul class="list">
            <li>Оскар Уайльд</li>
            <li>Чарльз Диккенс</li>
            <li>Джек Лондон</li>
            <li>Михаил Лермонтов</li>
        </ul>
        <div class="favourites_heading movies_heading">Любимые фильмы:</div>
        <ol class="list-numeric">
            <li>Очень странные дела</li>
            <li>Во все тяжкие</li>
            <li>Настоящий детектив</li>
            <li>Форс-Мажоры</li>
        </ol>
    </div>
    <div class="main_text">
        <h1 class="name_heading"><a name="about_me"></a>Ольга Вохминцева</h1>
        <div class="rectangle"></div>
        <p class="text">
            Промышленным переворотом (промышленной революцией) называют переход от традиционной экономической системы,
            при которой основой хозяйственной жизни являются земледелие и ручной труд, к индустриальной, при которой
            начинается внедрение машин в производство и появляются фабрики.
        </p>
        <h2 class="hobbies_heading"><a name="hobbies"></a>Мое хобби</h2>
        <p class="text">
            Англия была первым государством, пережившим подобный переход ещё в конце XVIII века. Именно эта страна была
            родиной парового двигателя, прядильных машин, станков и новых технологий, используемых в металлургии. Смысл
            жизни, следовательно, творит данный закон внешнего мира.
        </p>
        <a href="http://vk.com/id4014017" class="reference">Напиши мне</a>
    </div>
    <div class="clear"></div>
    <div class="four_movies">
        <h2 class="hobbies_heading four_movies_heading"><a name="favourite_movies"></a>Любимые фильмы</h2>
        <div class="film">
            <img src="images/stranger_things.png" class="film_image">
            <h3 class="name_of_the_movie">Очень странные дела</h3>
            <p class="movies_description">1980-е годы, тихий провинциальный американский городок. Благоприятное течение
                местной жизни нарушает загадочное исчезновение подростка по имени Уилл. Выяснить обстоятельства дела полны
                решимости родные мальчика и местный шериф, также события затрагивают лучшего друга Уилла – Майка.</p>
        </div>
        <div class="film">
            <img src="images/breaking_bad.png" class="film_image">
            <h3 class="name_of_the_movie">Во все тяжкие</h3>
            <p class="movies_description">С целью оплаты лечения и обеспечения финансового будущего своей семьи Уолтер Уайт
                решает заняться производством метамфетамина. Его напарником становится бывший ученик — Джесси Пинкман. Вместе
                они находят домик на колёсах и отправляются в пустыню, чтобы приготовить первую партию наркотика. </p>
        </div>
        <div class="film">
            <img src="images/true_detective.png" class="film_image">
            <h3 class="name_of_the_movie">Настоящий детектив</h3>
            <p class="movies_description">Действие разворачивается в районе известнякового плато Озарк, расположенного
                одновременно в нескольких штатах. Детектив Уэйн Хейз совместно со следователем из Арканзаса Роландом Уэстом
                пытаются разобраться в загадочном преступлении, растянувшемся на три десятилетия.</p>
        </div>
        <div class="suits">
            <img src="images/suits.png" class="film_image">
            <h3 class="name_of_the_movie">Настоящий детектив</h3>
            <p class="movies_description">Убегая после неудачной попытки сбыта наркотиков, юрист-самоучка Майк Росс,
                выдающий себя за выпускника Гарварда, попадает на собеседование к одному из лучших адвокатов по сделкам Нью-
                Йорка Харви Спектру.</p>
        </div>
        <div class="clear"></div>
        <button class="button" onclick='location.href="#favourite_movies"'>Все фильмы</button>
    </div>
    <div class="heading_with_lines">
        <span class="write_me_heading">НАПИШИ МНЕ</span>
    </div>
    <form method="POST" action="index.php" class="form">
        <div>
            <label for="name" class="required_data">Ваше имя</label><span class="star"> *</span><br>
            <input type="text" class="cell <?php echo $args['nameError'] ?? ''; ?>" id="name" name="name" value="<?php echo $args['name'] ?? ''; ?>" required>
        </div>
        <div>
            <label for="email" class="required_data">Ваш email</label><span class="star"> *</span><br>
            <input type="email" class="cell email <?php echo $args['emailError'] ?? ''; ?>" id="email" name="email" value="<?php echo $args['email'] ?? ''; ?>" required>
        </div>
        <div>
            <label for="country" class="required_data where_are_you_from">Откуда вы?</label><br>
            <div class="new-select-style">
                <img src="images/arrow.png" class="arrow_image">
                <select id="country" size="1" name="country">
                    <option <?php if ($args['country'] === 'Russia' || is_null($args['country'])) echo 'selected';?> value="Russia">Россия</option>
                    <option <?php if ($args['country'] === 'France') echo 'selected';?> value="France">Франция</option>
                    <option <?php if ($args['country'] === 'Italy') echo 'selected';?> value="Italy">Италия</option>
                </select>
            </div>
        </div>
        <legend class="required_data your_gender">Ваш пол</legend><br>
        <div class="radio">
            <input type="radio" name="gender" id="male" value="male" <?php if ($args['gender'] === 'male' || is_null($args['gender'])) echo 'checked';?> class="circle">
            <label for="male" class="gender">Мужской</label>
            <input type="radio" name="gender" id="female" <?php if ($args['gender'] === 'female') echo 'checked';?> value="female">
            <label for="female" class="gender">Женский</label>
        </div>
        <label for="message" class="required_data">Ваше сообщение</label><span class="star"> *</span><br>
        <textarea class="message" id="message" name="message" required><?php echo $args['message'] ?? '';?></textarea>
        <input type="submit" class="button submit_button">
        <div><?php echo $args['result'] ?? '';?></div>
    </form>
    <footer class="footer">&copy; 2006-2018 Поволжский государственный технологический университет, ФГБОУ ВО «ПГТУ»</footer>
</div>
</body>
</html>