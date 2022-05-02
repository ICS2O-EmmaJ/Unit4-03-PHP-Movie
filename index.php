<!DOCTYPE html>
<html>
  <head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta name="description" content="User Input, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Emma Janani">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Movie Age Rating</title>
  </head>
  <body>
    <?php echo "<h1>Movie Age Rating</h1>"; ?>
		<table>
			<tr>
				<td>
          <!-- Textbox where user enters their age -->
					<?php echo "<h3>How many years old are you?</h3>"; ?>
					<form action="./results.php" method="post" target="results">						
						<label for="input">Age:</label>
						<input type="number" step="1" min="1" name="age" placeholder="Enter your age..."><br><br>
						<input type="submit" value="Display Message">
					</form>
				</td>
			</tr>
		</table>
    <br>
    <!-- Create a space where the user information will be displayed -->
    <iframe id="results" name="results">
    </iframe>
    <br>
    <br>
		<img src="./images/cinema.jpg" alt="Movie" style="width:60%">
  </body>
</html>