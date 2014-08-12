<html>
<head>
<title>Doreen's Portal</title>
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
<!-- <link rel="stylsheet/less" href="css/config.less" type="text/css">
 <link rel="stylesheet/less" type="text/css" href="css/styles.less">
 <script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
  <script src="js/less-1.7.3.min.js" type="text/javascript"></script>-->
  
<link rel="stylesheet/css" href="css/milk.css" type="text/css">
	<script src="js/js.js"></script>
	<script src="js/jquery.mockjax.js"></script>
	<script src="js/jquery.validate.js"></script>
	<script>
	$(document).ready(function() {
		$.mockjax({
			url: "emails.action",
			response: function(settings) {
				var email = settings.data.email,
					emails = ["glen@marketo.com", "george@bush.gov", "me@god.com", "aboutface@cooper.com", "steam@valve.com", "bill@gates.com"];
				this.responseText = "true";
				if ($.inArray(email, emails) !== -1) {
					this.responseText = "false";
				}
			},
			responseTime: 500
		});

		$.mockjax({
			url: "users.action",
			response: function(settings) {
				var user = settings.data.username,
					users = ["asdf", "Peter", "Peter2", "George"];
				this.responseText = "true";
				if ($.inArray(user, users) !== -1) {
					this.responseText = "false";
				}
			},
			responseTime: 500
		});

		// validate signup form on keyup and submit
		var validator = $("#signupform").validate({
			rules: {
				firstname: "required",
				lastname: "required",
				username: {
					required: true,
					minlength: 2,
					remote: "users.action"
				},
				password: {
					required: true,
					minlength: 5
				},
				password_confirm: {
					required: true,
					minlength: 5,
					equalTo: "#password"
				},
				email: {
					required: true,
					email: true,
					remote: "emails.action"
				},
				dateformat: "required",
				terms: "required"
			},
			messages: {
				firstname: "Enter your firstname",
				lastname: "Enter your lastname",
				username: {
					required: "Enter a username",
					minlength: jQuery.validator.format("Enter at least {0} characters"),
					remote: jQuery.validator.format("{0} is already in use")
				},
				password: {
					required: "Provide a password",
					minlength: jQuery.validator.format("Enter at least {0} characters")
				},
				password_confirm: {
					required: "Repeat your password",
					minlength: jQuery.validator.format("Enter at least {0} characters"),
					equalTo: "Enter the same password as above"
				},
				email: {
					required: "Please enter a valid email address",
					minlength: "Please enter a valid email address",
					remote: jQuery.validator.format("{0} is already in use")
				},
				dateformat: "Choose your preferred dateformat",
				terms: " "
			},
			// the errorPlacement has to take the table layout into account
			errorPlacement: function(error, element) {
				if (element.is(":radio"))
					error.appendTo(element.parent().next().next());
				else if (element.is(":checkbox"))
					error.appendTo(element.next());
				else
					error.appendTo(element.parent().next());
			},
			// specifying a submitHandler prevents the default submit, good for the demo
			submitHandler: function() {
				alert("submitted!");
			},
			// set this class to error-labels to indicate valid fields
			success: function(label) {
				// set &nbsp; as text for IE
				label.html("&nbsp;").addClass("checked");
			},
			highlight: function(element, errorClass) {
				$(element).parent().next().find("." + errorClass).removeClass("checked");
			}
		});

		// propose username by combining first- and lastname
		$("#username").focus(function() {
			var firstname = $("#firstname").val();
			var lastname = $("#lastname").val();
			if (firstname && lastname && !this.value) {
				this.value = (firstname + "." + lastname).toLowerCase();
			}
		});
	});
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

    <div id="form signupwrap"> <!--Go to parsleyjs.org for a good validation plugin!-->
    <form action="success.html" id="signupform" autocomplete="off" method="get">
      <table cellpadding="5px"> 
        <tr>
          <td class="label_align">
              <label for="firstname">First Name:</label>
          </td>
          <td class="field">
             <input type="text" name="firstname" placeholder="first name" id="firstname" maxlength="100" style="width:15em;"/>
          </td>
          <td class="status"></td>
        </tr>  
        
        <tr>
          <td class="label_align" >
            <label for="first-name">Last Name:</label>
          </td>
          <td class="field">
            <input type="text" name="last-name" placeholder="last name" id="last-name" style="width:15em;"/>
          </td>
        </tr>  
        
        <tr>
          <td class="label_align">
            <label for="address">Street Address:</label>
          </td>
          <td class="field">
            <input type="text" name="address" placeholder="address" id="address" style="width:15em;"/>
            <input type="text" name="apt" placeholder="apt" id="address" style="width:3em;"/>
          </td>
        </tr>  
        
        <tr>
          <td class="label_align">
              <label for="city_state_zip">City, State, Zip:</label>
          </td>
          <td class="inline field">
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
          <td class="field">
             <input type="email" name="email" placeholder="email" id="email"/>
          </td>
        </tr>  
        
         <tr>
          <td class="label_align">
              <label for="email-2">Re-enter Email:</label>
          </td>
          <td class="field">
             <input type="email-2" name="email-2" placeholder="email-2" id="email-2"/>
          </td>
        </tr>  
        
         <tr>
          <td class="label_align">
              <label for="checkbox">Subscribe to our mailing list?</label>
          </td>
          <td class="field">
             <input type="checkbox" name="subscribe" id="subscribe" />
          </td>
        </tr>  
        
        <tr>
          <td>
          </td>
          <td>
             <input onSubmit="greet()" type="submit" name="submit" id="signupsubmit" />
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