<?php
      session_start();
?>
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
    <title>Регистрация</title>
    <script src="/js/javascript.js"></script>
    <link rel="stylesheet" href="/css/style.css" />
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
              <a href="/autoriztion/index.html" class="Enter_Btn"> Войти </a>
            </span>
          </span>
        </div>
      </div>
    </header> -->
    <div class="bodystyle">
      <div class="Register">
        <form style="padding-bottom: 40px" method="post" action="registration.php" onsubmit="return check_register()">
          <div >
            <input placeholder="Имя" type="text" name="name" />
          </div>
          <div >
            <input placeholder="Почта" type="email" name="email" />
            <div class="error_text"><?=$_SESSION['email_error']?></div>
          </div>
          <div >
            <input placeholder="Номер телефона" type="tel" name="phone" />
            <div class="error_text"><?=$_SESSION['phone_error']?></div>
          </div>
          <div >
            <input
              placeholder="Введите пароль"
              type="password"
              name="UserPass"
            />
          </div>
          <div >
            <input
              placeholder="Повторите пароль"
              type="password"
              name="UserPass2"
            />
          </div>
          <div>
            <button style="margin-left: 25%">Регистрация</button>
          </div>
        </form>
      </div>
    </div>
    <?php
      require "/OpenServer/domains/RM/blocks/footer.php"; 
    ?>
    <!-- <footer style="background-color: #c3c3c3">
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

