<!DOCTYPE html>
<!--Begin Page-->
<html>
	<link rel="stylesheet" href="style.css">
	<!--Add Style Sheet Link-->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script>
		$(document).ready(function () {
			$('input[type="radio"]').click(function () {
				var inputValue = $(this).attr("value");
				var targetBox = $("." + inputValue);
				$(".box").not(targetBox).hide();
				$(targetBox).show();
			});
		});
	</script>

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
			<a href="C:\Users\Joshua\Documents\GitHub\BSUDiningPortal\BSUDiningApp\SweetPeppersDeli.html">Sweet Peppers
				Deli</a>
			<a href="C:\Users\Joshua\Documents\GitHub\BSUDiningPortal\BSUDiningApp\Contact.html">Contact</a>
		</div>


	</head>


	<body>

		<br>
		<br>
		<br>
		<img id="Banner" src="C:\Users\Joshua\Documents\GitHub\BSUDiningPortal\BSUDiningApp\SweetPeppersDeliBanner.JPG">

		<h3>Hours</h3>
		<img src="C:\Users\Joshua\Documents\Web Dev\COSC465Project\ChilacaHours.JPG" class="hours-pics" alt="Hours">
		<hr>
		<br>
		<br>
		<br>


		<form>
			<input type="radio" id="sub12" name="sweet-pepper-rg" value="SubSandwich12">
			<label for="sub12">Sub 12inch </label>


			<input type="radio" id="sub6" name="sweet-pepper-rg" value="SubSandwich6">
			<label for="sub6">Sub 6inch</label>

			<input type="radio" id="sandwich" name="sweet-pepper-rg" value="Sandwich">
			<label for="beef">Deli Sandwich</label>


			<br>
			<br>
			<hr>
			<br>




			<div class="wrapper-c" style="opacity: .75;">
				<!-- <div class="box"> -->

				<div class="box" style="text-align: left;">
					<h3 style="background-color: dimgrey; text-align: center;">Meat</h3>
					<input type="checkbox" name="roast-beef" value="RoastBeef">
					<label for="roast-beef">Roast Beef</label>
					<br>
					<input type="checkbox" name="oven-roasted-turkey" value="OvnRoastTurkey">
					<label for="oven-roasted-turkey">Oven Roasted Turkey</label>
					<br>
					<input type="checkbox" name="ham" value="Ham">
					<label for="ham">Ham</label>
					<br>
					<input type="checkbox" name="grilled-chicken" value="GrilledChicken">
					<label for="grilled-chicken">Grilled Chicken</label>
					<br>
					<input type="checkbox" name="tuna-salad" value="TunaSalad">
					<label for="tuna-salad">Salsa Verde</label>
					<br>
					<input type="checkbox" name="double-meat" value="DoubleMeat">
					<label for="double-meat">Double Meat +$2.29</label>
					<br>
					<input type="checkbox" name="bacon" value="Bacon">
					<label for="bacon">Bacon (2 slices) +$0.99</label>

				</div>

				<div class="box" style="text-align: left;">
					<h3 style="background-color: dimgrey; text-align: center">Cheese</h3>

					<input type="checkbox" name="american" value="American">
					<label for="american">American</label>
					<br>
					<input type="checkbox" name="cheddar" value="Cheddar">
					<label for="cheddar">Cheddar</label>
					<br>
					<input type="checkbox" name="swiss" value="Swiss">
					<label for="swiss">Swiss</label>
					<br>
					<input type="checkbox" name="pepper-jack" value="PepperJack">
					<label for="pepper-jack">Pepper Jack</label>
					<br>
					<input type="checkbox" name="extra-cheese" value="ExtraCheese">
					<label for="extra-cheese">Extra Cheese Slice +$0.29</label>
					<br>


				</div>
				<div class="box-little" style="text-align: left;">
					<h3 style="background-color: dimgrey; text-align: center">Bread</h3>
					<input type="checkbox" name="wheat-sub" value="WheatSub">
					<label for="wheat-sub">Wheat Sub</label>
					<br>
					<input type="checkbox" name="wheat-wrap" value="WheatWrap">
					<label for="wheat-sub">Wheat Wrap</label>
					<br>
				</div>

				<div class="panel" style="text-align: left;">
					<h3 style="background-color: dimgrey; text-align: center">Toppings</h3>

					<input type="checkbox" name="lettuce" value="Lettuce">
					<label for="lettuce">Lettuce</label>
					<br>
					<input type="checkbox" name="tomato" value="Tomato">
					<label for="tomato">Tomato</label>
					<br>
					<input type="checkbox" name="onion" value="Onion">
					<label for="onion">Onion</label>
					<br>
					<input type="checkbox" name="pickles" value="Pickles">
					<label for="pickles">Pickles</label>
					<br>
					<input type="checkbox" name="banana-peppers" value="BananaPeppers">
					<label for="banana-peppers">Banana Peppers</label>
					<br>
					<input type="checkbox" name="roasted-red-peppers" value="RoastedRedPeppers">
					<label for="roasted-red-peppers">Roasted Red Peppers</label>
					<br>
					<input type="checkbox" name="black-olives" value="BlackOlives">
					<label for="black-olives">Black Olives</label>
					<br>
					<input type="checkbox" name="spinach" value="Spinach">
					<label for="spinach">Spinach</label>
					<br>
					<input type="checkbox" name="jalepenos1" value="Jalepenos1">
					<label for="jalepenos1">Jalepenos</label>
					<br>
					<input type="checkbox" name="peppers" value="Peppers">
					<label for="peppers">Peppers</label>
					<br>
					<input type="checkbox" name="bacon1" value="Bacon1">
					<label for="bacon1">Bacon</label>
					<br>


				</div>
				<div class="box" style="height:200px; text-align: left;">
					<h3 style=" background-color: dimgrey; text-align:left;">Sauces</h3>
					<input type="checkbox" name="mayo" value="Mayo">
					<label for="mayo">Mayo</label>
					<br>
					<input type="checkbox" name="chipotle-mayo" value="ChipotleMayo">
					<label for="chipotle-mayo">Chipotle Mayo</label>
					<br>
					<input type="checkbox" name="honey-mustard" value="Honey Mustard">
					<label for="honey-mustard">Honey Mustard</label>
					<br>
					<input type="checkbox" name="dijon" value="Dijon">
					<label for="dijon">Dijon</label>
					<br>
					<input type="checkbox" name="buffalo-sauce" value="BuffaloSauce">
					<label for="buffalo-sauce">Buffalo Sauce</label>
					<br>
					<input type="checkbox" name="balsalmic-vinaigrette" value="BalsamicVinaigrette">
					<label for="balsalmic-vinaigrette">Balsamic Vinaigrette</label>
					<br>
					<input type="checkbox" name="ranch" value="Ranch">
					<label for="ranch">Ranch</label>
					<br>

				</div>


			</div>
			<!-- </div> -->

			<br>
			<br>
			<input type="submit" value="Add To Cart">
			&emsp;
			<a href="C:\Users\Joshua\Documents\GitHub\BSUDiningPortal\BSUDiningApp\Calica.html"
				style="color:red;">Back</a>
			<br>
			<br>
		</form>




	</body>





	<footer>



	</footer>

</html>