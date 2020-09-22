<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
th {
	border: 1px solid black;
	width: 250px;
}
td {
	text-align: center;
	font-weight: bold;
	color: #e83838;
}
</style>	
<body>
	<table>
		<tr>
			<th>name</th>
			<th>Last name</th>
			<th>Address</th>
			<th>Biography</th>
			<th>Date of Birth</th>
		</tr>
		<tr>
			@foreach ($newdata as $data)
				<td>{{ $data }}</td>
			@endforeach
			
		</tr>
	</table>
</body>
</html>