<!DOCTYPE html>
<html>
    <head>
        <title>Marketing System</title>
    </head>
    <body>
        <h4>Hello,</h4>
        <p>We wanted to remind you that you have Ad with details: </p>
        @foreach ($ads as $ad)
            
        <ul>
            <li><b>Customer:</b> {{$ad['name']}}</li>
            <li><b>Type:</b> {{$ad['type']}}</li>
            <li><b>Date:</b> {{$ad['date']}}</li>
            <li><b>Time:</b> {{$ad['time']}}</li>
            
        </ul>
        <hr>
        @endforeach
        <p>please,publish it on time and make sure that you have uploaded all the necessary files and information to our System.</p>

        <p>Best regards,</p>
        <p>Marketing System</p>
    </body>
</html>