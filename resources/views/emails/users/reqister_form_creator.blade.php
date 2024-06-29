<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دعوة للانضمام إلى منصة فيدو</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            direction: rtl !important;
            text-align: right !important;
        }

        .container {
            direction: rtl !important;
            text-align: right !important;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .content {
            margin-bottom: 20px;
            direction: rtl !important;
            text-align: right !important;
        }

        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff !important;
            color: #ffffff !important;
            text-decoration: none;
            border-radius: 5px;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="https://vidoo.app/users-asset/images/logo/logo.png" alt="Vidoo Logo"
                style="width: 100%; max-width: 140px;">
        </div>
        <div class="content">
            <h1>{{__("messages.welcome")}} {{$name}}،</h1>
            <p>
                {{__("messages.welcomeDescEmailCreator")}}
            </p>
            <p>
                {{__("messages.emailCreatorText1")}}
            </p>
            <p>
                <a href="{{ route('user.register.form.creator' ,['token' => $token ]) }}" class="cta-button">
                    {{__("messages.emailCreatorText2")}}</a>
            </p>
            <p>
                {{__("messages.emailCreatorText3")}}
            </p>
            <ul>
                <li>{{__("messages.emailCreatorText4")}}</li>
                <li>{{__("messages.emailCreatorText5")}}</li>
                <li>{{__("messages.emailCreatorText6")}}</li>
            </ul>
            <p>
                {{__("messages.emailCreatorText7")}}

            </p>
            <p>
                {{__("messages.emailCreatorText8")}}
            </p>
        </div>
        <div class="footer">
            <p>
                <br>

            </p>
            <p>
                <a href="https://vidoo.app" target="_blank">https://vidoo.app</a> | <a href="mailto:info@vidoo.app"
                    target="_blank">info@vidoo.app</a>
            </p>
        </div>
    </div>
</body>

</html>
