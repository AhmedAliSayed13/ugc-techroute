<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{__('messages.reset_password')}}</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            max-width: 150px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            line-height: 1.5;
            margin-bottom: 10px;
            text-align: right;
        }
        .button {
            display: inline-block;
            background-color: #007bff;
            color: #fff!important;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="https://vidoo.app/users-asset/images/logo/logo.png" alt="Logo">
        </div>
        <h2>{{__('messages.reset_password')}}</h2>
        <p> {{__('messages.hello')}},</p>
        <p>{{__('messages.reset_email_description')}}</p>
        <p>
            {{__('messages.reset_email_instruction')}}
            <br>
            <a href="{{ route("user.reset.password.get", ['token'=>$token]) }}" class="button">{{__('messages.reset_password')}}</a>
        </p>
        <p>{{__('messages.reset_email_warning')}}</p>
        <p>{{__('messages.thank_you')}} </p>
    </div>
</body>

</html>
