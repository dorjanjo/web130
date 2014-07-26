<html>
<head>
<title>Doreen's Portal</title>
 <!--<link rel="stylesheet" href="css/styles.css" type="text/css"/>-->
  <link rel="stylsheet/less" href="css/config.less" type="text/css"/>
  <link rel="stylesheet/less" type="text/css" href="css/styles.less">
  <script src="js/less-1.7.3.min.js" type="text/javascript"></script>
  
<script type="text/javascript">
  window.onload = function(){
	  
	function greet(){
	  alert("work");
	}
   
}
</script>
  
</head>

<body>

<div id='header'>
  <h1>Welcome to Doreen's Portal Page!</h1>
  <h2>Web 130 - Web Authoring</h2>
</div>
  
<?php include 'includes/nav_new.php' ?>

<div id='section'>
  <section>
  <h2>Contact</h2>
  <h3 id="greet"> </h3>
  <div id="form">
  <form >
  <label id="label">Enter your name: </label>
  <input type="text" name="guest_name" placeholder=" name" id="name"/>
  <input onSubmit="greet()" type="submit" name="submit" id="submit"/>
  </form>
  </div>
  
  <section> 
</div>

<div id="aside">
  <h2>Aside</h2>
  <ul>
    <li>Item 1</li>
    <li>Item 2</li>
    <li>Item 3</li>
  </ul>
  
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc convallis, justo a bibendum luctus, erat enim tempor eros, vitae dapibus metus enim sed quam. Donec at nibh massa. Fusce sed aliquet sapien. Suspendisse sit amet urna lectus. Donec ut augue ante.</p>
  
</div>

<div id='footer'>
  <p>&copy; Doreen's Portal 2014</p>
</div>

</body>

</html>