<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email</title>
</head>

<body>
    <h1>Verify Your Email Address</h1>
    <p>Please click the link below to verify your email address:</p>
    <a href="{{ route('user.verify.email' , $token) }}">Verify Email</a>
</body>

</html>
