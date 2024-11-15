function checkIt() {
  var t0 = document.getElementsByName("name")[0].value;
  var t1 = document.getElementsByName("email")[0].value;
  if (t0 == "" || t0 == "Имя") {
    alert("Вы не указали свое имя!");
    return false;
  } else {
    if (t1 == "" || t1 == "Имя") {
      alert("Вы не указали свою почту!");
      return false;
    }
  }
}
