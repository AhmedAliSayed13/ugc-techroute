<!DOCTYPE html>
<html>

<head>
    <title>Pusher Live Chat Example</title>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>

    <h1>Chat: {{ $chatKey }}</h1>

<div id="messages">
    @foreach ($messages as $message)
        <p>{{ $message->content }}</p>
    @endforeach
</div>

<form id="message-form">
    <input type="text" id="content" name="content" placeholder="Type your message">
    <button type="submit">Send</button>
</form>

<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>
    var pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
        cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
        encrypted: true
    });

    var channel = pusher.subscribe('chat.{{ $chatKey }}');
    channel.bind('App\\Events\\NewMessageEvent', function (data) {
        var message = document.createElement('p');
        message.textContent = data.message.content;
        document.getElementById('messages').appendChild(message);
    });

    document.getElementById('message-form').addEventListener('submit', function (e) {
        e.preventDefault();

        var content = document.getElementById('content').value;

        axios.post('{{ route('messages.store', ['chatKey' => $chatKey]) }}', {
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
