<!DOCTYPE html>
<html>
<head>
	<title>messages</title>
	 <style type="text/css"\>
	 	table, th, td{
	 		border: 1px solid gray;
	 		border-collapse: collapse;
	 	}
	 </style>
</head>
<body>
	<table width="100%">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Subject</th>
			<th>Message</th>
		</tr>
		 @foreach($message as $message)
		<tr>
			<td>{{$message->id}}</td>
			<td>{{$message->name}}</td>
			<td>{{$message->email}}</td>
			<td>{{$message->subject}}</td>
			<td>{{$message->message}}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>