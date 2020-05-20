<!DOCTYPE html>
<html>
<head>
	<title>Automatic Certificate Generator</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Barriecito|Cedarville+Cursive|DM+Serif+Display|Dancing+Script|Lobster|Mountains+of+Christmas|Open+Sans|Roboto|Russo+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="animate.css">
</head>
<body style="font-family: 'Roboto', sans-serif;">



	<div style="text-align: center; font-family: 'Roboto', sans-serif; margin-top: 100px;">
		<h1 class="animated rubberBand">Automatic Certificate Generator</h1><br>
		<samp class="animated flash">Select the Certificate Templates from our Directory..<br>And position the names and add colors..<br>Hurray!! Completed.. Its as that as Simple<br></samp><hr>
	</div>
	


	<div style="width: 25%; height: 100%; background-color: #17181f; color: white;">

	<div style="text-align: center; margin: 50px;">
		<form action="certiDisplay.php" method="POST">
			<div class="form-group"><br>
				 <label for="Image Select">Select Certificate Template</label>
    			<select class="form-control" id="certificate" style="width: 200px;" onchange="certificateDisplay()" name="certificate">
      				<option value="certificates/1.png">1</option>
      				<option value="certificates/2.png">2</option>
     				<option value="certificates/3.png">3</option>
      				<option value="certificates/4.png">4</option>
      				<option value="certificates/5.png">5</option>
      				<option value="certificates/6.png">6</option>
    			</select>
			</div><hr>

			<div class="form-group">

			<label for="Title">Title: </label><br>
			<input type="text" name="title" id="titleInput" onchange="titleDisplay()" class="form-control"><br>
			<input type="text" name="titleTopPx" id="titleTopPxInput" placeholder="Enter Top in Pixels" onchange="setTitleStyle()" class="form-control"><br>
			<input type="text" name="titleLeftPx" id="titleLeftPxInput" placeholder="Enter Left in Pixels" onchange="setTitleStyle()" class="form-control"><br>
			<input type="text" name="titleFontSizePx" id="titleFontSizePxInput" placeholder="Enter Font Size in Pixels" onchange="setTitleStyle()" class="form-control"><br>
			<select style="width: 200px; left: 50%;" onchange="setTitleStyle()" id="titleColorInput" class="form-control">
				<option value="red">Red</option>
				<option value="blue">Blue</option>
				<option value="Green">Green</option>
				<option value="black">Black</option>
				<option value="white">White</option>
			</select>

			<br>
			<select style="width: 200px; left: 50%;" onchange="setTitleStyle()" id="titleFontInput" class="form-control">
				<option value="'Roboto'">Roboto</option>
				<option value="'Barriecito'">Barriecito</option>
				<option value="'Cedarville Cursive', cursive">Blue</option>
				<option value="'Mountains of Christmas', cursive">Mountains of Christmas</option>
				<option value="'Russo One'">Russo One</option>
				<option value="'Lobster'">Lobster</option>
				<option value="'Dancing Script'">Dancing Script</option>
			</select>

			<hr>
			<br><br>

			<label for="Name">Name: </label>
			<input type="text" name="name" id="nameInput" onchange="nameDisplay()" class="form-control"><br>
			<input type="text" name="nameTopPx" id="nameTopPxInput" placeholder="Enter Top in Pixels" onchange="setNameStyle()" class="form-control"><br>
			<input type="text" name="nameLeftPx" id="nameLeftPxInput" placeholder="Enter Left in Pixels" onchange="setNameStyle()" class="form-control"><br>
			<input type="text" name="nameFontSizePx" id="nameFontSizePxInput" placeholder="Enter Font Size in Pixels" onchange="setNameStyle()" class="form-control"><br>
			<select style="width: 200px; left: 50%;" onchange="setNameStyle()" id="nameColorInput" class="form-control">
				<option value="red">Red</option>
				<option value="blue">Blue</option>
				<option value="Green">Green</option>
				<option value="black">Black</option>
				<option value="white">White</option>
			</select><br>

			<select style="width: 200px; left: 50%;" onchange="setNameStyle()" id="nameFontInput" class="form-control">
				<option value="'Roboto'">Roboto</option>
				<option value="'Barriecito'">Barriecito</option>
				<option value="'Cedarville Cursive', cursive">Blue</option>
				<option value="'Mountains of Christmas', cursive">Mountains of Christmas</option>
				<option value="'Russo One'">Russo One</option>
				<option value="'Lobster'">Lobster</option>
				<option value="'Dancing Script'">Dancing Script</option>
			</select>
			<hr>
			<br><br>


			<label for="alternateTextOne">Alternate Text 1:  </label>
			<input type="text" name="alternateTextOne" id="alternateTextOneInput" onchange="alternateTextOneDisplay()" class="form-control"><br>
			<input type="text" name="alternateTextOneTopPx" id="alternateTextOneTopPxInput" placeholder="Enter Top in Pixels" onchange="setAlternateTextOneStyle()" class="form-control"><br>
			<input type="text" name="alternateTextOneLeftPx" id="alternateTextOneLeftPxInput" placeholder="Enter Left in Pixels" onchange="setAlternateTextOneStyle()" class="form-control"><br>
			<input type="text" name="alternateTextOneFontSizePx" id="alternateTextOneFontSizePxInput" placeholder="Enter Font Size in Pixels" onchange="setAlternateTextOneStyle()" class="form-control"><br>
			<select style="width: 200px; left: 50%;" onchange="setAlternateTextOneStyle()" id="alternateTextOneColorInput" class="form-control"><br>
				<option value="red">Red</option>
				<option value="blue">Blue</option>
				<option value="Green">Green</option>
				<option value="black">Black</option>
				<option value="white">White</option>
			</select><hr>
			<br><br>


			<label for="alternateTextTwo">Alternate Text 2:  </label>
			<input type="text" name="alternateTextTwo" id="alternateTextTwoInput" onchange="alternateTextTwoDisplay()" class="form-control">
			<input type="text" name="alternateTextTwoTopPx" id="alternateTextTwoTopPxInput" placeholder="Enter Top in Pixels" onchange="setAlternateTextTwoStyle()" class="form-control">
			<input type="text" name="alternateTextTwoLeftPx" id="alternateTextTwoLeftPxInput" placeholder="Enter Left in Pixels" onchange="setAlternateTextTwoStyle()" class="form-control">
			<input type="text" name="alternateTextTwoFontSizePx" id="alternateTextTwoFontSizePxInput" placeholder="Enter Font Size in Pixels" onchange="setAlternateTextTwoStyle()" class="form-control">
			<select style="width: 200px; left: 50%;" onchange="setAlternateTextTwoStyle()" id="alternateTextTwoColorInput" class="form-control">
				<option value="red">Red</option>
				<option value="blue">Blue</option>
				<option value="Green">Green</option>
				<option value="black">Black</option>
				<option value="white">White</option>
			</select><hr>
			<br><br>
		</div>
		
		</form>
	</div>

	</div>

	<div style="width: 75%; left: 25%; background-color: #040504; height: 1000px; position: relative; margin-top: -1800px;">

		<div style="margin: 20px; position: relative; height: 100%;" id="certi"><br>

			


			<img src="certificates/2.png" style="width: 100%; height: auto; margin: 0 auto; z-index: -1;">
			<h1 id="titleText" style="position: relative; z-index: 1;"></h1>
			<h1 id="nameText" style="position: relative;"></h1>
			<p id="alternateTextOneText" style="position: relative;"></p>
			<p id="alternateTextTwoText" style="position: relative;"></p>
			
		</div>
		

	</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script type="text/javascript">
		
		function certificateDisplay()
		{
			var certificate = document.getElementById('certificate').value;
			document.getElementsByTagName('img')[0].setAttribute("src",certificate);
		}

		function titleDisplay()
		{
			var title = document.getElementById('titleInput').value;
			document.getElementById('titleText').innerHTML = title;
		}

		function setTitleStyle()
		{
			var titleTopPx = document.getElementById('titleTopPxInput').value;
			var titleLeftPx = document.getElementById('titleLeftPxInput').value;
			var titleFontSizePx = document.getElementById('titleFontSizePxInput').value;
			var titleColor = document.getElementById('titleColorInput').value;
			var titleFont = document.getElementById('titleFontInput').value;
			document.getElementById('titleText').style.top = "-" + titleTopPx + "px";
			document.getElementById('titleText').style.left = titleLeftPx + "px";
			document.getElementById('titleText').style.fontSize = titleFontSizePx + "px";
			document.getElementById('titleText').style.color = titleColor;
			document.getElementById('titleText').style.fontFamily = titleFont;
		}

		function nameDisplay()
		{
			var name = document.getElementById('nameInput').value;
			document.getElementById('nameText').innerHTML = name;
		}

		function setNameStyle()
		{

			var nameTopPx = document.getElementById('nameTopPxInput').value;
			var nameLeftPx = document.getElementById('nameLeftPxInput').value;
			var nameFontSizePx = document.getElementById('nameFontSizePxInput').value;
			var nameColor = document.getElementById('nameColorInput').value;
			var nameFont = document.getElementById('nameFontInput').value;
			document.getElementById('nameText').style.top = "-" + nameTopPx + "px";
			document.getElementById('nameText').style.left = nameLeftPx + "px";
			document.getElementById('nameText').style.fontSize = nameFontSizePx + "px";
			document.getElementById('nameText').style.color = nameColor;
			document.getElementById('nameText').style.fontFamily = nameFont;
		}

		function alternateTextOneDisplay()
		{
			var alternateTextOne = document.getElementById('alternateTextOneInput').value;
			document.getElementById('alternateTextOneText').innerHTML = alternateTextOne;
		}

		function setAlternateTextOneStyle()
		{
			var alternateTextOneTopPx = document.getElementById('alternateTextOneTopPxInput').value;
			var alternateTextOneLeftPx = document.getElementById('alternateTextOneLeftPxInput').value;
			var alternateTextOneFontSizePx = document.getElementById('alternateTextOneFontSizePxInput').value;
			var alternateTextOneColor = document.getElementById('alternateTextOneColorInput').value;
			document.getElementById('alternateTextOneText').style.top = "-" + alternateTextOneTopPx + "px";
			document.getElementById('alternateTextOneText').style.left = alternateTextOneLeftPx + "px";
			document.getElementById('alternateTextOneText').style.fontSize = alternateTextOneFontSizePx + "px";
			document.getElementById('alternateTextOneText').style.color = alternateTextOneColor;
		}

		function alternateTextTwoDisplay()
		{
			var alternateTextTwo = document.getElementById('alternateTextTwoInput').value;
			document.getElementById('alternateTextTwoText').innerHTML = alternateTextTwo;
		}

		function setAlternateTextTwoStyle()
		{
			var alternateTextTwoTopPx = document.getElementById('alternateTextTwoTopPxInput').value;
			var alternateTextTwoLeftPx = document.getElementById('alternateTextTwoLeftPxInput').value;
			var alternateTextTwoFontSizePx = document.getElementById('alternateTextTwoFontSizePxInput').value;
			var alternateTextTwoColor = document.getElementById('alternateTextTwoColorInput').value;
			document.getElementById('alternateTextTwoText').style.top = "-" + alternateTextTwoTopPx + "px";
			document.getElementById('alternateTextTwoText').style.left = alternateTextTwoLeftPx + "px";
			document.getElementById('alternateTextTwoText').style.fontSize = alternateTextTwoFontSizePx + "px";
			document.getElementById('alternateTextTwoText').style.color = alternateTextTwoColor;
		}



	</script>

	<script type="text/javascript" src="html2canvas.js"></script>
	<script type="text/javascript">
		
		
		
			function screenshot(){
   				html2canvas(document.getElementById('certi')).then(function(canvas) {
    				document.body.appendChild(canvas);
   });
  }
		

	</script>
</body>
</html>