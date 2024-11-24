<!DOCTYPE php>
<php lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="/images/logo-shortcut.png"
      type="image/png"
    />
    <title>Каталог</title>
    <link rel="stylesheet" href="/css/style.css" />
  </head>
  <body>
    <?php
      require "/OpenServer/domains/RM/blocks/header.php"; 
    ?>
    <!-- <header>
      <div class="headerlinks">
        <a href="/main/index.php">
          <img
            src="/images/logo.png"
            alt="Русская механика"
            width="150"
            style="vertical-align: middle"
          />
        </a>
        <span class="headerblock1">
          <a href="/company/index.php"> О компании </a>
          <a href="/catalog/index.php"> Каталог </a>
          <a href="/repair/index.php"> Ремонт и обслуживание </a>
          <a href="/marketing_form/index.php"> Опрос </a>
        </span>
        <div class="headerblock2">
          <span style="float: right">
            <a href="/registration/index.php"> Регистрация </a>
            <span>
              <a href="/autoriztion/index.php" class="Enter_Btn"> Войти </a>
            </span>
          </span>
        </div>
      </div>
    </header> -->
    <div class="bodystyle">
      <h1>Каталог</h1>
      <div class="catalog_menu">
        <div>
          <a href="quad.php">
            <img src="quadro.jpg" alt="Квадроциклы" width="200" />
            <h2>Квадроциклы</h2>
          </a>
        </div>
        <div>
          <a href="snow.php">
            <img src="Snowbike.jpg" alt="снегоходы" width="200" />
            <h2>Снегоходы</h2>
          </a>
        </div>
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
            <a href="/main/index.php"> Главная </a><br />
            <a href="/company/index.php"> О компании </a><br />
            <a href="/catalog/index.php"> Каталог </a><br />
            <a href="/repair/index.php"> Ремонт и обслуживание </a><br />
            <a href="/autoriztion/index.php"> Личный кабинет </a>
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
</php>
