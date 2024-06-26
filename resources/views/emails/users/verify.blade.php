<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #dddddd;
            border-radius: 10px;
        }

        .header {
            text-align: center;
            padding: 10px 0;
            border-bottom: 1px solid #dddddd;
        }

        .header img {
            width: 100px;
        }

        .content {
            padding: 20px;
            text-align: center;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: white!important;
            background-color: #7367F0;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
        }

        .footer {
            text-align: center;
            padding: 10px 0;
            border-top: 1px solid #dddddd;
            font-size: 12px;
            color: #777777;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="https://vidoo.app/users-asset/images/logo/logo.png" alt="VIDOO">
        </div>
        <div class="content">
            <h1>{{__('messages.VerifyYourEmail')}}</h1>
            <p>{{__('messages.VerifyEmailDescription')}}</p>
            <a href="{{ route('user.verify.email' , $token) }}" class="button">{{__('messages.VerifyYourEmail')}}</a>
        </div>
        <div class="footer">
            <p>{{__('messages.VerifyYourEmailFooter')}}</p>
        </div>
    </div>
</body>

</html>
