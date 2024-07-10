<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Live Chat</h1>

        <div id="chat">
            <div id="messages">
                @foreach($messages as $message)
                <p>{{ $message->content }}</p>
                @endforeach
            </div>

            <form id="message-form">
                <input type="text" id="content" name="content" placeholder="Type your message">
                <button type="submit">Send</button>
            </form>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        var task_id = '{{ $task_id }}';

        var pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
            cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
            encrypted: true
        });

        var channel = pusher.subscribe('chat.' + task_id);
        channel.bind('App\\Events\\NewMessageEvent', function (data) {
            var message = document.createElement('p');
            message.textContent = data.message.content;
            document.getElementById('messages').appendChild(message);
        });

        document.getElementById('message-form').addEventListener('submit', function (e) {
            e.preventDefault();

            var content = document.getElementById('content').value;

            axios.post('/chats/' + task_id + '/messages', {
                user_id: 1, // Replace with the authenticated user's ID
                content: content
            })
            .then(function (response) {
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });

            document.getElementById('content').value = '';
        });
    </script>
</body>

</html>
