<!DOCTYPE html>
<html>
<head>
	<title>Utes Football </title>
</head>
<body>
	<h1>Utes Football Team</h1>
	<h2>Add an Athlete</h2>
	<form method="post" action="addathlete.php">
		<label for="firstname">First Name:</label>
		<input type="text" id="firstname" name="firstname" required><br><br>
		<label for="lastname">Last Name:</label>
		<input type="text" id="lastname" name="lastname" required><br><br>
		<label for="position">Position:</label>
		<select id="position" name="position" required>
			<option value="">Select a Position</option>
			<option value="Quarterback">Quarterback</option>
			<option value="Running Back">Running Back</option>
			<option value="Wide Receiver">Wide Receiver</option>
			<option value="Tight End">Tight End</option>
			<option value="Offensive Lineman">Offensive Lineman</option>
			<option value="Defensive Lineman">Defensive Lineman</option>
			<option value="Linebacker">Linebacker</option>
			<option value="Cornerback">Cornerback</option>
			<option value="Safety">Safety</option>
		</select><br><br>
		<label for="height">Height (in inches):</label>
		<input type="number" id="height" name="height" required><br><br>
		<label for="weight">Weight (in pounds):</label>
		<input type="number" id="weight" name="weight" required><br><br>
		<label for="birthdate">Birthdate:</label>
		<input type="date" id="birthdate" name="birthdate" required><br><br>
		<input type="submit" value="Add Athlete" onclick="location.href='roster.php';">
	</form>
</body>
</html>
