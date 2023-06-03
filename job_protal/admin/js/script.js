
  function Login(submit) {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username === "admin" && password === "1234") {
      alert("validation succeeded");

      (' location: admin/Deshboard.php');
    } else {
      alert("validation failed");
      return false;
      ('location:admin_login.php');
    }
  }