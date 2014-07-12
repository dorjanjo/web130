<html>
<head>
<title>Doreen's Portal</title>
<link rel='stylesheet' href='css/styles.css' type='text/css'/>
  
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
  
<?php include 'includes/nav.php' ?>

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

<div id='aside'>
  <ul>
    <li>Item 1</li>
    <li>Item 2</li>
    <li>Item 3</li>
  </ul>
</div>

<div id='footer'>
  <p>&copy; Doreen's Portal 2014</p>
</div>

</body>

</html>