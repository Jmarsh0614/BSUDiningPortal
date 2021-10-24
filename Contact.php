<!DOCTYPE html>
<!--Begin Page-->
<html>
	<link rel="stylesheet" href="style.css">
	<!--Add Style Sheet Link-->

	<head>
		<title>Bowie State Dining Hall Portal</title>
		<div class="topnav">
			<!--Top Nav Bar Code-->

			<!--==========TO DO=========-->
			<!--==========CHANGE THE LINKS==========-->
			<!--==========ORGANIZE THE FOLDERS======-->
			<!--=========SAVE AS PHPS===============-->


			<a href="C:\Users\Joshua\Documents\GitHub\BSUDiningPortal\BSUDiningApp\Index.html">Home</a>
			<a href="C:\Users\Joshua\Documents\GitHub\BSUDiningPortal\BSUDiningApp\HomeSkillet.html">Home Skillet</a>
			<a href="C:\Users\Joshua\Documents\GitHub\BSUDiningPortal\BSUDiningApp\Chilaca.html">Chilaca Burrito</a>
			<a
				href="C:\Users\Joshua\Documents\GitHub\BSUDiningPortal\BSUDiningApp\SweetPeppersDeli.html">BulldogBites</a>
			<a href="C:\Users\Joshua\Documents\GitHub\BSUDiningPortal\BSUDiningApp\Contact.html">Contact</a>
		</div>
		<link href="#Contact">

	</head>


	<body id="Contact">

		<h1>Contact Us!</h1>
		<p style="text-align:center;">Take part in your Food Service Program! Send us an email or speak with your Food
			Service Manager in any of
			the
			locations about your comments or concerns. We value your input!
		</p>
		<br>
		<p style="text-align:center;"> Members of our Management Team are always available during meals to help you. Get
			to know your Food Service
			Director, and feel free to share your comments, suggestions or questions. We appreciate your feedback, and
			want
			to be a part of making your dining services what you want it to be!
		</p>

		<br>
		<br>


		<!--Contact form section, all field are required before submit allowed-->
		<div>

			<form style="text-align: left;" id="ContactUs">
				<p style="font-size: 16px ;">NAME</p>
				<br>
				<br>
				<label for="fname">First Name</label>
				<br>
				<input type="text" id="fname" name="fname" required size="25" placeholder="First Name">
				<br>
				<label for="lname">Last Name</label>
				<br>
				<input type="text" id="lname" name="lname" required size="25" placeholder="Last Name">
				<br>
				<label for="email">E-mail</label>
				<br>

				<!--email validated with regular expression pattern-->
				<input type="email" id="email" name="email" placeholder="name@domain.com"
					pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required size="35">

				<br>

				<label for="phonenumber">Phone Number</label>
				<br>
				<input type="tel" id="phonenumber" name="phone number" placeholder="XXX-XXX-XXXX"
					pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required size="10">


				<br>
				<br>
				<br>
				<label for="comments">Comments</label>
				<br>
				<textarea required id=comments name="comments"
					style="resize:none; height:200px; width:400px;"></textarea>
				<br>
				<input type="submit">


			</form>


		</div>

	</body>


</html>