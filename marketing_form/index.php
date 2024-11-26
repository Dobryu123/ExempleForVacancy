<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="/images/logo-shortcut.png"
      type="image/png"
    />
    <title>Заполните форму</title>
    <link rel="stylesheet" href="/css/style.css" />
    <script src="/js/javascript.js"></script>
  </head>
  <body>
    <?php
      require "/OpenServer/domains/RM/blocks/header.php"; 
    ?>
    <!-- <header>
      <div class="headerlinks">
        <a href="/main/index.html">
          <img
            src="/images/logo.png"
            alt="Русская механика"
            width="150"
            style="vertical-align: middle"
          />
        </a>
        <span class="headerblock1">
          <a href="/company/index.html"> О компании </a>
          <a href="/catalog/index.html"> Каталог </a>
          <a href="/repair/index.html"> Ремонт и обслуживание </a>
          <a href="/marketing_form/index.html"> Опрос </a>
        </span>
        <div class="headerblock2">
          <span style="float: right">
            <a href="/registration/index.html"> Регистрация </a>
            <span>
              <a
              href="/autoriztion/index.html"
              class="Enter_Btn"
              >
              Войти
            </a>
            </span>
          </span>
        </div>
      </div>
    </header> -->
    <div class="bodystyle" min-height: 500px">
      <form name="gost" method="post" enctype="multipart/form-data" class="Marketing_form" onsubmit="return checkIt()" action="check_form.php">
        <div>
          <div>
            <p style="margin-top: 30px">Введите имя</p>
            <input
              placeholder="Имя"
              type="text"
              name="name"
              class="Marketing_input"
            />
          </div>
          <div>
            <p>Введите адрес электронной почты</p>
            <input
              placeholder="Почта"
              type="email"
              name="email"
              class="Marketing_input"
              value="<?=$_COOKIE['logged_email']?>"
              readonly
            />
          </div>
          <div class="Marketing_input_checkbox">
            <p>Пол</p>
            <div>
              <input
                type="radio"
                id="man"
                name="gender"
                value="man"
                checked
              />
              <label for="man">Мужской</label>
            </div>
            <div>
              <input
                type="radio"
                id="woman"
                name="gender"
                value="woman"
              />
              <label for="woman">Женский</label>
              </div>
          </div>
          <div class="Marketing_input_checkbox">
            <p>Какая акция Вам наиболее интересна:</p>
            <div>
              <input type="radio" id="oil" name="promo" value="oil" checked />
              <label for="oil">Промокод на замену масла</label>
            </div>
            <div>
              <input type="radio" id="equip" name="promo" value="equip" />
              <label for="equip">Скидка на экипировку 20%</label>
            </div>
            <div>
              <input type="radio" id="tires" name="promo" value="tires" />
              <label for="equip">Комплект зимней резины в подарок</label>
            </div>
          </div>
          <div class="Marketing_input_checkbox">
            <p>Как вы узнали о нашей компании:</p>
            <div>
              <input type="checkbox" id="radio" name="info" />
              <label for="radio">Из рекламы на радио</label>
            </div>
            <div>
              <input type="checkbox" id="magazine" name="info" />
              <label for="magazine">Из рекламы в журнале</label>
            </div>
            <div>
              <input type="checkbox" id="tv" name="info" />
              <label for="tv">Из рекламы на ТV</label>
            </div>
            <div>
              <input type="checkbox" id="Internet" name="info" />
              <label for="Internet">Из рекламы в Internet</label>
            </div>
            <div>
              <input type="checkbox" id="friends" name="info" />
              <label for="friends">От друзей, коллег</label>
            </div>
            <div>
              <input type="checkbox" id="random" name="random" />
              <label for="random">Случайно</label>
            </div>
          </div>
          <div class="Marketing_input_checkbox">
            <p>
              Для каких целей вы планируете использовать квадроцикл/снегоход:
            </p>
            <div>
              <input
                type="radio"
                id="promoive"
                name="ForWhat"
                value="promoive"
                checked
              />
              <label for="promoive">Для активного отдыха и развлечений</label>
            </div>
            <div>
              <input type="radio" id="hunt" name="ForWhat" value="hunt" />
              <label for="hunt">Для охоты и рыбалки</label>
            </div>
            <div>
              <input type="radio" id="village" name="ForWhat" value="village" />
              <label for="village">Для работы в сельской местности</label>
            </div>
            <div>
              <input type="radio" id="sport" name="ForWhat" value="sport" />
              <label for="sport">Для участия в соревнованиях</label>
            </div>
          </div>
          <div class="Marketing_input_checkbox">
            <p>Как часто используете технику:</p>
            <div>
              <input
                type="radio"
                id="everyday"
                name="frequency"
                value="everyday"
                checked
              />
              <label for="everyday">Каждый день</label>
            </div>
            <div>
              <input
                type="radio"
                id="everyweek"
                name="frequency"
                value="everyweek"
              />
              <label for="everyweek">Раз в неделю</label>
            </div>
            <div>
              <input
                type="radio"
                id="everymonth"
                name="frequency"
                value="everymonth"
              />
              <label for="everymonth">Раз в месяц</label>
            </div>
          </div>
          <div class="Marketing_input_checkbox">
            <p>На какой бюджет вы ориентируетесь при покупке:</p>
            <div>
              <input
                type="radio"
                id="halfmil"
                name="budget"
                value="less 0.5"
                checked
              />
              <label for="halfmil">До 500 000 руб.</label>
            </div>
            <div>
              <input
                type="radio"
                id="mil"
                name="budget"
                value="0.5 - 1"
              />
              <label for="mil">500 000 – 1 000 000 руб.</label>
            </div>
            <div>
              <input
                type="radio"
                id="OneAndHalf"
                name="budget"
                value="1 - 1.5"
              />
              <label for="OneAndHalf">1 000 000 – 1 500 000 руб.</label>
            </div>
            <div>
              <input
                type="radio"
                id="more"
                name="budget"
                value="More then 1.5"
              />
              <label for="more">Более 1 500 000 руб.</label>
            </div>
          </div>
            <div class="Marketing_input_checkbox">
            <p>Какие аксессуары вы бы хотели приобрести</p>
            <div>
              <input
                type="radio"
                id="tent"
                name="accessories"
                value="tent"
                checked
              />
              <label for="tent">Чехол</label>
            </div>
            <div>
              <input
                type="radio"
                id="tyres"
                name="accessories"
                value="tyres"
              />
              <label for="tyres">Резина</label>
            </div>
            <div>
              <input
                type="radio"
                id="equip"
                name="accessories"
                value="equip"
              />
              <label for="equip">Экипировка</label>
            </div>
            <div>
              <input
                type="radio"
                id="winch"
                name="accessories"
                value="winch"
              />
              <label for="winch">Лебёдка</label>
            </div>
          </div>
          <div class="Marketing_input_checkbox">
            <p>Что для вас наиболее важно при выборе квадроцикла или снегохода:</p>
            <div>
              <input type="checkbox" id="Power" name="main_criteria " />
              <label for="Power">Высокая проходимость и мощность</label>
            </div>
            <div>
              <input type="checkbox" id="comfort" name="main_criteria " />
              <label for="comfort">Комфорт и удобство управления</label>
            </div>
            <div>
              <input type="checkbox" id="durability" name="main_criteria" />
              <label for="durability">Надежность и долговечность</label>
            </div>
            <div>
              <input type="checkbox" id="price" name="main_criteria" />
              <label for="price">Доступная цена </label>
            </div>
            <div>
              <input type="checkbox" id="maneuverability" name="main_criteria" />
              <label for="maneuverability">Маневренность и легкость в управлении</label>
            </div>
            <div>
              <input type="checkbox" id="expenses" name="main_criteria" />
              <label for="expenses">Низкие эксплуатационные расходы</label>
            </div>
            <div>
              <input type="checkbox" id="safety" name="main_criteria" />
              <label for="safety">Безопасность и стабильность на дороге</label>
            </div>
            <div>
              <input type="checkbox" id="design" name="main_criteria" />
              <label for="design">Стильный дизайн и внешний вид</label>
            </div>
            <div>
              <input type="checkbox" id="trunk" name="main_criteria" />
              <label for="trunk">Большой багажный отсек</label>
            </div>
            <div>
              <input type="checkbox" id="accessories" name="main_criteria" />
              <label for="accessories">Широкий выбор аксессуаров и опций</label>
            </div>
          </div>

          <div style= "margin-top: 30px;">
            <input class="button" type="submit"/>
            <input type="reset" class="button" style="margin-left: 30px"/>
          </div>

        </div>
      </form>
    </div>
    <?php
      require "/OpenServer/domains/RM/blocks/footer.php"; 
    ?>
    <!-- <footer>
      <div class="footermenu">
        <div>
          <img
            src="\images\logobw.png"
            alt="Русская механика"
            class="footerlogo"
          />
          <div class="footerlinks">
            <a href="/main/index.html"> Главная </a><br />
            <a href="/company/index.html"> О компании </a><br />
            <a href="/catalog/index.html"> Каталог </a><br />
            <a href="/repair/index.html"> Ремонт и обслуживание </a><br />
            <a href="/autoriztion/index.html"> Личный кабинет </a>
          </div>
        </div>
        <div class="footer_right_menu">
          <div class="footer_right">
            <div>
              <div class="social_btn">
                <a href="https://vk.com/rusmechanics" target="_blank">
                  <img src="/images/vk.png" alt="Русская механика" />
                </a>
                <a
                  href="https://www.youtube.com/user/RusMechanics"
                  target="_blank"
                >
                  <img src="/images/yt.png" alt="Русская механика" />
                </a>
                <a href="https://t.me/russianmechanics" target="_blank">
                  <img src="/images/tg.png" alt="Русская механика" />
                </a>
              </div>
              <span>
                <p>© 2004–2024 АО «Русская механика»</p>
              </span>
            </div>
          </div>
        </div>
      </div>
    </footer> -->
  </body>
</html>
