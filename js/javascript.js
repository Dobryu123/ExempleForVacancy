function checkIt() {
  var t0 = document.getElementsByName("name")[0].value;
  var t1 = document.getElementsByName("email")[0].value;
  if (t0 == "" || t0 == "Имя") {
    alert("Вы не указали свое имя!");
    return false;
  } else if (t1 == "" || t1 == "Имя") {
    alert("Вы не указали свою почту!");
    return false;
  }
}

function check_register() {
  var t0 = document.getElementsByName("name")[0].value;
  var t1 = document.getElementsByName("email")[0].value;
  var t2 = document.getElementsByName("phone")[0].value;
  var t3 = document.getElementsByName("UserPass")[0].value;
  var t4 = document.getElementsByName("UserPass2")[0].value;
  if (t0 == "" || t0 == "Имя") {
    alert("Вы не указали свое имя!");
    return false;
  } else if (t1 == "" || t1 == "Почта") {
    alert("Вы не указали свою почту!");
    return false;
  } else if (t2 == "" || t2 == "Номер телефона") {
    alert("Вы не указали номер телефона!");
    return false;
  } else if (t3 == "" || t3 == "Введите пароль") {
    alert("Вы не ввели пароль");
    return false;
  } else if (t4 == "" || t4 == "Повторите пароль") {
    alert("Вы не ввели пароль повторно");
    return false;
  } else if (t3 !== t4) {
    alert("Пароли не совпадают");
    return false;
  }
}

function check_autorize() {
  var t0 = document.getElementsByName("email")[0].value;
  var t1 = document.getElementsByName("UserPass")[0].value;
  if (t0 == "" || t0 == "Почта") {
    alert("Вы не указали почту!");
    return false;
  } else if (t1 == "" || t1 == "Имя") {
    alert("Вы не указали пароль!");
    return false;
  }
}
