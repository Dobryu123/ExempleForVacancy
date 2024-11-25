<header>
  <div class="headerlinks">
    <a href="/main/">
      <img
        src="/images/logo.png"
        alt="Русская механика"
        width="150"
        style="vertical-align: middle"
      />
    </a>
    <span class="headerblock1">
      <a href="/company/"> О компании </a>
      <a href="/catalog/"> Каталог </a>
      <a href="/repair/"> Ремонт и обслуживание </a>
      <?php 
        if (array_key_exists("logged_email", $_COOKIE)){
          echo "<a href='/marketing_form/'> Опрос </a>";
        } else {
          echo "<a href='/autoriztion/'> Опрос </a>";
        }
      ?>
    </span>
    <div class="headerblock2">
      <?php
        $loggedEmail = htmlspecialchars($_COOKIE["logged_email"]); 
        if (array_key_exists("logged_email", $_COOKIE)){
          echo "<span style='float: right'>
        <span  style='margin-right: 20px;'>$loggedEmail</span>
        <span>
          <a href='/out.php' class='Enter_Btn'> Выйти </a>
        </span>";
        } else {
          echo "<span style='float: right'>
        <a href='/registration/'> Регистрация </a>
        <span>
          <a href='/autoriztion/' class='Enter_Btn'> Войти </a>
        </span>";
        }
      ?>
      </span>
    </div>
  </div>
</header>
