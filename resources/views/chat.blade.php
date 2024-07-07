<!DOCTYPE html>
<html>
<head>
    <title>Pusher Live Chat Example</title>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <div id="chat">
        <ul id="messages"></ul>
        <form id="message-form">
            <input type="text" id="message-input">
            <button type="submit">Send</button>
        </form>
    </div>

    <script>
        Pusher.logToConsole = true;
        var pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
            cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
            forceTLS: true
        });

        var channel = pusher.subscribe('chat');

        channel.bind('App\\Events\\NewMessageEvent', function(data) {
            var message = data.message;

            var messagesElement = document.getElementById('messages');
            var li = document.createElement('li');
            li.appendChild(document.createTextNode(message.content));
            messagesElement.appendChild(li);
        });

        var form = document.getElementById('message-form');
        var input = document.getElementById('message-input');

        form.addEventListener('submit', function(e) {
            e.preventDefault();

            axios.post('/send-message', { content: input.value })
                .then(function(response) {
                    input.value = '';
                })
                .catch(function(error) {
                    console.error(error);
                });
        });
    </script>
</body>
</html>
