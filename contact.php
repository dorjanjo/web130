<html>
<head>
<title>Doreen's Portal</title>
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
 <link rel="stylsheet/less" href="css/config.less" type="text/css">
 <link rel="stylesheet/less" type="text/css" href="css/styles.less">
 <script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
  <script src="js/less-1.7.3.min.js" type="text/javascript"></script>
  
<script type="text/javascript">
  window.onload = function(){
	  
	function greet(){
	  alert("work");
	}
   
}
</script>
  
</head>

<body class="container">

<div id='header'>
  <h1>Welcome to Doreen's Portal Page!</h1>
  <h2>Web 130 - Web Authoring</h2>
</div>
  
<?php include 'includes/nav_new.php' ?>

<div id='section'>
  <section>
    <h2>Contact</h2>
    <h3 id="greet"> </h3>

    <div id="form"> <!--Go to parsleyjs.org for a good validation plugin!-->
    <form action="" id="contact-form">
      <table cellpadding="5px"> 
        <tr>
          <td class="label_align">
              <label for="first-name">First Name:</label>
          </td>
          <td>
             <input type="text" name="first-name" placeholder="first name" id="first-name" style="width:15em;"/>
          </td>
        </tr>  
        
        <tr>
          <td class="label_align" >
            <label for="first-name">Last Name:</label>
          </td>
          <td>
            <input type="text" name="last-name" placeholder="last name" id="last-name" style="width:15em;"/>
          </td>
        </tr>  
        
        <tr>
          <td class="label_align">
            <label for="address">Street Address:</label>
          </td>
          <td>
            <input type="text" name="address" placeholder="address" id="address" style="width:15em;"/>
            <input type="text" name="apt" placeholder="apt" id="address" style="width:3em;"/>
          </td>
        </tr>  
        
        <tr>
          <td class="label_align">
              <label for="city_state_zip">City, State, Zip:</label>
          </td>
          <td class="inline">
            <select>
                <option value="seattle">Seattle</option>
                <option value="bremerton">Bremerton</option>
                <option value="tacoma">Tacoma</option>
                <option value="tukwila">Tukwila</option>
                <option value="other">Other</option>
             </select>
            
            <input type="text" name="state" placeholder="state" id="state" style="width:9em;"/>         
             
            <input type="text" name="zip" placeholder="zipcode" id="zip" style="width:4em;"/>
          </td>
        </tr>  
        
        <tr>
          <td class="label_align">
              <label for="email">Email:</label>
          </td>
          <td>
             <input type="email" name="email" placeholder="email" id="email"/>
          </td>
        </tr>  
        
         <tr>
          <td class="label_align">
              <label for="email-2">Re-enter Email:</label>
          </td>
          <td>
             <input type="email-2" name="email-2" placeholder="email-2" id="email-2"/>
          </td>
        </tr>  
        
         <tr>
          <td class="label_align">
              <label for="checkbox">Subscribe to our mailing list?</label>
          </td>
          <td>
             <input type="checkbox" name="subscribe" id="subscribe" />
          </td>
        </tr>  
        
        <tr>
          <td>
          </td>
          <td>
             <input onSubmit="greet()" type="submit" name="submit" id="submit" />
          </td>
        </tr>
     </table>   
   </form>             

            
      
    </div> <!--end of form-->
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