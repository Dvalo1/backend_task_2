<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route("posttest") }}" method="POST">
		@csrf
		<label for="name">First Name</label>
		<input type="text" name="name">

		<label for="lastname">Last Name</label>
		<input type="text" name="lastname">

		<label for="address">Address</label>
		<input type="text" name="address">

		<label for="bio">Biography</label>
		<input type="textarea" name="bio">

		<label for="birthday">Birthday:</label>
		<input type="date" name="birthday">

		<button>Submit</button>
	</form>
</body>
</html>