<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <title>Информация о себе</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
  </head>
  <body class="body">
    <div class="wrapper">
      <div class="main_block">
        <ul class="menu">
          <li class="menu_items"><a href="#about_me" class="icon">Обо мне</a></li>
          <li class="menu_items"><a href="#hobbies" class="icon hobbies">Мое хобби</a></li>
          <li class="menu_items"><a href="#favourite_movies" class="icon favourite_movies">Любимые фильмы</a></li>
        </ul>
        <div class="clear"></div>
        <div class="main_content">
          <div>
            <img src="images/photo.png" alt="photo" class="photo">
            <div class="favourites_heading">Любимые писатели:</div>
            <ul class="list1">
              <li class="fav_items">Оскар Уайльд</li>
              <li class="fav_items">Чарльз Диккенс</li>
              <li class="fav_items">Джек Лондон</li>
              <li class="fav_items">Михаил Лермонтов</li>
            </ul>
            <div class="favourites_heading fav_movies_heading">Любимые фильмы:</div>
            <ol class="list2">
              <li class="fav_items">Очень странные дела</li>
              <li class="fav_items">Во все тяжкие</li>
              <li class="fav_items">Настоящий детектив</li>
              <li class="fav_items">Форс-Мажоры</li>
            </ol>
          </div>
          <div>
            <blockquote class="blockquote">Не ошибается тот, кто ничего не делает</blockquote>
            <cite class="cite">— Теодор Рузвельт</cite>
            <h1 id="about_me" class="name_heading">Ольга Вохминцева</h1>
            <div class="rectangle"></div>
            <p class="paragraph">
              Промышленным переворотом (промышленной революцией) называют переход от традиционной экономической
              системы, при которой основой хозяйственной жизни являются земледелие и ручной труд, к индустриальной, при которой
              начинается внедрение машин в производство и появляются фабрики.
            </p>
            <h2 id="hobbies" class="hobbies_heading">Мое хобби</h2>
            <p class="paragraph">
              Англия была первым государством, пережившим подобный переход ещё в конце XVIII века. Именно эта страна
              была родиной парового двигателя, прядильных машин, станков и новых технологий, используемых в металлургии.
              Смысл жизни, следовательно, творит данный закон внешнего мира.
            </p>
            <a href="http://vk.com/id4014017" class="reference">Напиши мне</a>
          </div>
        </div>
        <div class="four_movies">
          <h2 id="favourite_movies" class="hobbies_heading four_movies_heading">Любимые фильмы</h2>
          <div class="movie_holder">
            <div class="movie">
              <img src="images/stranger_things.png" alt="stranger_things" class="movie_image">
              <h3 class="name_of_the_movie">Очень странные дела</h3>
              <p class="movies_description">1980-е годы, тихий провинциальный американский городок. Благоприятное
                течение местной жизни нарушает загадочное исчезновение подростка по имени Уилл. Выяснить обстоятельства дела
                полны решимости родные мальчика и местный шериф, также события затрагивают лучшего друга Уилла –
                Майка.
              </p>
            </div>
            <div class="movie">
              <img src="images/breaking_bad.png" alt="breaking_bad" class="movie_image">
              <h3 class="name_of_the_movie">Во все тяжкие</h3>
              <p class="movies_description">С целью оплаты лечения и обеспечения финансового будущего своей семьи
                Уолтер Уайт решает заняться производством метамфетамина. Его напарником становится бывший ученик — Джесси
                Пинкман. Вместе они находят домик на колёсах и отправляются в пустыню, чтобы приготовить первую партию
                наркотика.
              </p>
            </div>
            <div class="movie">
              <img src="images/true_detective.png" alt="true_detective" class="movie_image">
              <h3 class="name_of_the_movie">Настоящий детектив</h3>
              <p class="movies_description">Действие разворачивается в районе известнякового плато Озарк,
                расположенного одновременно в нескольких штатах. Детектив Уэйн Хейз совместно со следователем из
                Арканзаса Роландом Уэстом пытаются разобраться в загадочном преступлении, растянувшемся на три
                десятилетия.
              </p>
            </div>
            <div class="movie">
              <img src="images/suits.png" alt="suits" class="film_movie">
              <h3 class="name_of_the_movie">Настоящий детектив</h3>
              <p class="movies_description">Убегая после неудачной попытки сбыта наркотиков, юрист-самоучка Майк Росс,
                выдающий себя за выпускника Гарварда, попадает на собеседование к одному из лучших адвокатов по
                сделкам Нью-Йорка Харви Спектру.
              </p>
            </div>
          </div>
          <div class="butt"><a href="#favourite_movies" class="button">Все фильмы</a></div>
        </div>
        <div class="heading_with_lines">
          <span class="write_me_heading">НАПИШИ МНЕ</span>
        </div>
        <form method="POST" class="form">
          <div class="form_item">
            <label for="name" class="label">Ваше имя<span class="star"> *</span></label>
            <input type="text" class="cell <?php echo $args['nameError'] ?? ''; ?>" id="name" name="name"
                   value="<?php echo $args['name'] ?? ''; ?>" required>
          </div>
          <div class="form_item">
            <label for="email" class="label">Ваш email<span class="star"> *</span></label>
            <input type="email" class="cell <?php echo $args['emailError'] ?? ''; ?>" id="email" name="email"
                   value="<?php echo $args['email'] ?? ''; ?>" required>
          </div>
          <div class="form_item">
            <label for="country" class="label label_country">Откуда вы?</label>
            <div class="cell new_select_style">
              <img src="images/arrow.png" alt="arrow" class="arrow_image">
              <select id="country" size="1" name="country" class="select">
                <option <?php if ($args['country'] === 'Russia' || is_null($args['country'])) echo 'selected'; ?>
                  value="Russia">Россия
                </option>
                <option <?php if ($args['country'] === 'France') echo 'selected'; ?> value="France">Франция</option>
                <option <?php if ($args['country'] === 'Italy') echo 'selected'; ?> value="Italy">Италия</option>
              </select>
            </div>
          </div>
          <div class="form_item form_item_gender">
            <div class="label label_gender">Ваш пол</div>
            <div class="radio">
              <input type="radio" name="gender" id="male"
                     value="male" <?php if ($args['gender'] === 'male' || is_null($args['gender'])) echo 'checked'; ?>
                     class="circle">
              <label for="male" class="gender">Мужской</label>
              <input type="radio" name="gender"
                     id="female" <?php if ($args['gender'] === 'female') echo 'checked'; ?>
                     value="female" class="circle">
              <label for="female" class="gender gender_female">Женский</label>
            </div>
          </div>
          <div class="form_item">
            <label for="message" class="label">Ваше сообщение<span class="star"> *</span></label>
            <textarea class="message" id="message" name="message" required><?php echo $args['message'] ?? ''; ?></textarea>
          </div>
          <input type="submit" class="button submit_button">
          <div class="label"><?php echo $args['result'] ?? ''; ?></div>
        </form>
        <footer class="footer">
          &copy; 2006-2018 Поволжский государственный технологический университет, ФГБОУ ВО «ПГТУ»
        </footer>
      </div>
    </div>
  </body>
</html>