<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>

    <h1>You have a new message from {{ $data['email'] }}</h1>
    <h1>{{ $data['subject'] }}</h1>
    <p>{{ $data['body'] }}</p>
    
</body>
</html>