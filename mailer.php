<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="css/styles.css" type="text/css" />
<title>ReleaseMedia - Thanks for contacting us!</title>
<meta name="description" content="ReleaseMedia is a multimedia consultancy providing services in all areas of multimedia, from small business web design/development to large commercial consultancy contracts on bespoke training applications, based in Hampshire. Graphic design, Web design, animation, 3D modelling, e-Learning, photography, audio editing, video editing. ReleaseMedia is a multimedia consultancy providing services in all areas of multimedia, from small business web design/development to large commercial consultancy contracts on bespoke training applications, based in Hampshire. Graphic design, Web design, animation, 3D modelling, e-Learning, photography, audio editing, video editing. ReleaseMedia is a multimedia consultancy providing services in all areas of multimedia, from small business web design/development to large commercial consultancy contracts on bespoke training applications, based in Hampshire. Graphic design, Web design, animation, 3D modelling, e-Learning, photography, audio editing, video editing. ReleaseMedia is a multimedia consultancy providing services in all areas of multimedia, from small business web design/development to large commercial consultancy contracts on bespoke training applications, based in Hampshire. Graphic design, Web design, animation, 3D modelling, e-Learning, photography, audio editing, video editing. ReleaseMedia is a multimedia consultancy providing services in all areas of multimedia, from small business web design/development to large commercial consultancy contracts on bespoke training applications, based in Hampshire. Graphic design, Web design, animation, 3D modelling, e-Learning, photography, audio editing, video editing. ReleaseMedia is a multimedia consultancy providing services in all areas of multimedia, from small business web design/development to large commercial consultancy contracts on bespoke training applications, based in Hampshire. Graphic design, Web design, animation, 3D modelling, e-Learning, photography, audio editing, video editing. ReleaseMedia is a multimedia consultancy providing services in all areas of multimedia, from small business web design/development to large commercial consultancy contracts on bespoke training applications, based in Hampshire. Graphic design, Web design, animation, 3D modelling, e-Learning, photography, audio editing, video editing. "/>
</head>

<body>
<div id="container">

<div id="header">

	<div id="logo">
        <a href="http://www.releasemedia.co.uk" class="logohome"></a> 
    </div>
    <div class="spacer">
    <p>&nbsp;</p>
    </div>
    <div class="date">
    <p> 
Date: <script type="text/javascript">
<!--
var currentTime = new Date()
var month = currentTime.getMonth() + 1
var day = currentTime.getDate()
var year = currentTime.getFullYear()
document.write(day + "." + month + "." + year)
//-->
</script>
</p>
    </div>
    <div id="menu">
    <ul id="nav">
      <li><a href="index.html">Home</a></li>
      <li><a href="work.html">Porfolio</a></li>
      <li><a href="#" class="navon">Contact</a></li>
    </ul>
  </div>

</div> <!--header-->

<div id="content">
	
    <div id="top">
    <div class="topleft">
    <div class="title">
    	<p>Talk to us</p>
    </div>
    <div class="text">
    <p>We are dedicated to all projects we undertake, we take great satisfaction in exceeding our clients expectations.</p>
    <p>We protect the privatacy of our customers and enquirers, please leave a query below and we will be in contact very soon with the answers.</p>
    </div>
    </div> <!--topleft-->
    <div class="image">
    
    </div>
    </div> <!--top-->
    
    <div class="services">
        <?php
		if(isset($_POST['submit'])) {
		$to = "chris_martins@hotmail.com";
		$subject = "ReleaseMedia Ltd Enquiry";
		$name_field = $_POST['name'];
		$telephone_field = $_POST['telephone'];
		$email_field = $_POST['email'];
		$message = $_POST['message'];
		 
		$body = "From: $name_field\n Telephone: $telephone_field\n E-Mail: $email_field\n Message:\n $message";
		 
		echo "<br>Thanks for taking the time to fill out an enquiry, it has been submitted to $to.<br><br>We will get back to you as soon as possible, with an answer to your enquiry.";
		mail($to, $subject, $body);
		} else {
		echo "Thanks";
		}
		?>
      </div>

</div> <!--content-->

<div id="footer">

	<div class="message">
    <p>Please get in touch with us to disscuss your bespoke needs and we will provide you with a no obligation <b>free</b> estimate.</p>
    </div>
    
    <div class="links">
    &gt; <a class="link" title="Bearded Code" href="http://mahoney.eu/">Bearded Code</a>
	<br>
	&gt; <a class="link" title="Smashing Magazine" href="http://www.smashingmagazine.co.uk">Smashing Magazine</a>
	<br>
	&gt; <a class="link" title="Jessica Kate Photography" href="http://www.jessicakate.co.uk/">Jessica Kate Photography</a>
	<br>
	&gt; <a class="link" title="Thor Gaming Flash Games" href="http://www.thorgaming.com/">ThorGaming Flash Games</a>
    </div>
    
    <div class="contact">
    <p>E: <a href="mailto:chris_martins@hotmail.com" class="link">info@releasemedia.co.uk</a><br>T: 07854091098<br>M: West View Stores, High Street, Broughton, Hampshire. SO20 8AX</p>
    </div>
    
	<p class="copyright">&copy; Chris Martins d'Almeida 2010 - 2011 | All rights reserved</p>
</div> <!--footer-->

</div> <!--container-->

</body>
</html>