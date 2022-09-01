<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<link rel='stylesheet' href='css/css.css'>
</head>
<body>

<div class="navbar">
  <a> Hi Welcome! <?php echo $user_data['username']; ?></a> 
</div>

<div class="row">

  <div class="side">
    <h3>Photo of me:</h3>
    <img class="imgside" src="img/fakeimg.jpg" width="250px" >
    
  </div>

  <div class="main">
     <center><h1>Hi!</h1>
    <p>I'm <b>John Herbert Lanao </b>but they call me Jano as my nickname.</p>
    <p>I'm currently taking <b>Bachelor of Science in Computer Science.</b></p>
    <p>Here's a list of my web-related capabilities.</p>
    <b><p>Interpersonal skills.</p>
    <p>Testing and debugging skills.</p>
    <p>Back-end and Front-end basics.</p>
    <p>Netwoking Skills.</p></b></center>

    <div class="contact">
      <a href="https://www.facebook.com/Itsjano" target="_blank">
        <img class="imgfb"src="img/fb.jpg"><p>Facebook</p></a>

      <a href="https://www.instagram.com/itsrealjano/" target="_blank">
        <img class="imgig"src="img/ig.png"><p>Instagram</p></a>

      <img class="imgtg"src="img/tg.png"><p>@whotfisOxi</p>

      <img class="imgphone"src="img/phone.png"><p>09973451110</p>

      <p><img class="imggmail"src="img/gmail.png">janopogi8@gmail.com</p>
    </div>
  </div>
</div>

<br>

<b><a href="logout.php">Logout</a></b>



</body>
</html>