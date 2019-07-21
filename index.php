<!DOCTYPE html>
<html lang="ru">
  <head>
    <?php include ("_head-includes.php");?>
  </head>
  <body>

    <header class="header">
      <?php include ("_header.php");?>
    </header>

    <main>
    <section class="hero-area">
      <div class="container">
        <h1 class="hero-area__title">Обучающие видеуроки и статьи о программе</h1>
        <p class="hero-area__description">В этой главе вас ждут познавательные статьи, в которых рассмотрены различные функции программы «Ускоритель компьютера».</p>

        <div class="hero-area__video">
          <div class="video">
            <button class="video__button"><a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto">video</a></button>
            <h4 class="video__title">Ускоритель компьютера</h4>
            <p class="video__description">Видеообзор программы</p>
          </div>
        </div>
      </div>
    </section>

    <section class="programms container">
      <div class="programms__text">
      <h3 class="programms__title">Изучаем программу</h3>
      <p class="programms__description">Мы подготовили для вас подборку полезных видеоуроков о работе в "Ускоритель компютера". В них наглядно показаны основные функции программы, а также даны практические рекомендации по обработке и печати фотографий. Просматривая ролики, вы сможете освоить редактор как минимум в два раза быстрее!</p>
      </div>
      <div class="block">
          <h5 class="block__title">Выбор пользователей</h5>
          <div class="block__all">
            <div class="block__card">
              <div class="block__img">
                <img class="test-popup-link" href="img/card_1.png" src="img/card_1.png" alt="Card_1">
              </div>
              <div class="block__text"><a href="#">Дефрагментация жесткого диска: все типовые вопроссы</a></div>
            </div>
            <div class="block__card">
              <div class="block__img">
                <img class="test-popup-link" href="img/card_2.png" src="img/card_2.png" alt="Card_2">
              </div>
              <div class="block__text"><a href="#">Ускорение компьютера ОСWindows: топ 10 программ</a></div>
            </div>
            <div class="block__card">
              <div class="block__img">
                <img class="test-popup-link" href="img/card_3.png" src="img/card_3.png" alt="Card_3">
              </div>
              <div class="block__text"><a href="#">Что такое оперативная память и для чего она нужна</a></div>
            </div>
            <div class="block__card">
              <div class="block__img">
                <img class="test-popup-link" href="img/card_4.png" src="img/card_4.png" alt="Card_4">
              </div>
              <div class="block__text"><a href="#">Как удалить папку или файл, если они не удаляются</a></div>
            </div>
            <div class="block__card">
              <div class="block__img">
                <img class="test-popup-link" href="img/card_5.png" src="img/card_5.png" alt="Card_5">
              </div>
              <div class="block__text"><a href="#">Что такое файлы cookie, все что нужно знать</a></div>
            </div>
            <div class="block__card">
              <div class="block__img">
                <img class="test-popup-link" href="img/card_6.png" src="img/card_6.png" alt="Card_6">
              </div>
              <div class="block__text"><a href="#">Как отключить слежку в интернет браузере Mozilla</a></div>
            </div>
            <div class="block__card">
              <div class="block__img">
                <img class="test-popup-link" href="img/card_7.png" src="img/card_7.png" alt="Card_7">
              </div>
              <div class="block__text"><a href="#">Оптимизация ОС Windows 10: полезные лайфхаки</a></div>
            </div>
            <div class="block__card">
              <div class="block__img">
                <img class="test-popup-link" href="img/card_8.png" src="img/card_8.png" alt="Card_8">
              </div>
              <div class="block__text"><a href="#">Как удалить папку или файл, если они не удаляются</a></div>
            </div>
          </div>
      </div>
    </section>

    <section class="articles container">

      <div class="articles__all">
        <div class="articles__block">
          <ul class="articles__list">
            <li class="articles__item"><img src="img/icon_1.svg" alt=""></li>
            <li class="articles__item articles__item--title">Работа с ускорителем компьютера</li>
            <li class="articles__item"><a href="#">Однажды одна маленькая строчка рыбного текста</a></li>
            <li class="articles__item"><a href="#">По имени Lorem ipsum решила выйти</a></li>
            <li class="articles__item"><a href="#">Великий Оксмокс предупреждал ее о злых запятых</a></li>
            <li class="articles__item"><a href="#">Диких знаках вопроса и коварных точках с запятой</a></li>
            <li class="articles__item articles__item--button"><a href="#hidden_1" onclick="view('hidden_1'); return false">Больше статей</a></li>
            <div id="hidden_1" style="display: none">
            <li class="articles__item"><a href="#">Однажды одна маленькая строчка рыбного текста</a></li>
            <li class="articles__item"><a href="#">По имени Lorem ipsum решила выйти</a></li>
            <li class="articles__item"><a href="#">Великий Оксмокс предупреждал ее о злых запятых</a></li>
            <li class="articles__item"><a href="#">Диких знаках вопроса и коварных точках с запятой</a></li>
          </div>
          </ul>
          <ul class="articles__list">
            <li class="articles__item"><img src="img/icon_2.svg" alt=""></li>
            <li class="articles__item articles__item--title">Секреты оптимизации ОС Windows</li>
            <li class="articles__item"><a href="">Далеко-далеко за словесными горами в стране</a></li>
            <li class="articles__item"><a href="">В стране гласных и согласных живут рыбные тексты</a></li>
            <li class="articles__item"><a href="">Вдали от всех живут они в буквенных домах</a></li>
            <li class="articles__item"><a href="">На берегу Семантика большого языкового океана</a></li>
            <li class="articles__item articles__item--button"><a href="#hidden_2" onclick="view('hidden_2'); return false">Больше статей</a></li>
            <div id="hidden_2" style="display: none">
            <li class="articles__item"><a href="#">Однажды одна маленькая строчка рыбного текста</a></li>
            <li class="articles__item"><a href="#">По имени Lorem ipsum решила выйти</a></li>
            <li class="articles__item"><a href="#">Великий Оксмокс предупреждал ее о злых запятых</a></li>
            <li class="articles__item"><a href="#">Диких знаках вопроса и коварных точках с запятой</a></li>
          </div>
          </ul>
          <ul class="articles__list">
            <li class="articles__item"><img src="img/icon_3.svg" alt=""></li>
            <li class="articles__item articles__item--title">Как ускорить работу ПК: лайфхаки</li>
            <li class="articles__item"><a href="">Далеко-далеко за словесными горами в стране</a></li>
            <li class="articles__item"><a href="">В стране гласных и согласных живут рыбные тексты</a></li>
            <li class="articles__item"><a href="">Вдали от всех живут они в буквенных домах</a></li>
            <li class="articles__item"><a href="">На берегу Семантика большого языкового океана</a></li>
            <li class="articles__item articles__item--button"><a href="#hidden_3" onclick="view('hidden_3'); return false">Больше статей</a></li>
            <div id="hidden_3" style="display: none">
            <li class="articles__item"><a href="#">Однажды одна маленькая строчка рыбного текста</a></li>
            <li class="articles__item"><a href="#">По имени Lorem ipsum решила выйти</a></li>
            <li class="articles__item"><a href="#">Великий Оксмокс предупреждал ее о злых запятых</a></li>
            <li class="articles__item "><a href="#">Диких знаках вопроса и коварных точках с запятой</a></li>
          </div>
          </ul>
          <ul class="articles__list">
            <li class="articles__item"><img src="img/icon_4.svg" alt=""></li>
            <li class="articles__item articles__item--title">Устранение ошибок ОС Windows</li>
            <li class="articles__item"><a href="#">Однажды одна маленькая строчка рыбного текста</a></li>
            <li class="articles__item"><a href="#">По имени Lorem ipsum решила выйти</a></li>
            <li class="articles__item"><a href="#">Великий Оксмокс предупреждал ее о злых запятых</a></li>
            <li class="articles__item"><a href="#">Диких знаках вопроса и коварных точках с запятой</a></li>
            <li class="articles__item articles__item--button"><a href="#hidden_4" onclick="view('hidden_4'); return false">Больше статей</a></li>
            <div id="hidden_4" style="display: none">
            <li class="articles__item"><a href="#">Однажды одна маленькая строчка рыбного текста</a></li>
            <li class="articles__item"><a href="#">По имени Lorem ipsum решила выйти</a></li>
            <li class="articles__item"><a href="#">Великий Оксмокс предупреждал ее о злых запятых</a></li>
            <li class="articles__item"><a href="#">Диких знаках вопроса и коварных точках с запятой</a></li>
          </div>
          </ul>
        </div>
      </div>
    </section>

    </main>

    <footer>
      <?php include ("_footer.php");?>
    </footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/magnific.js"></script>
  <script src="js/main.js"></script>
  </body>
  </html>
