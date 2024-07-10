<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Chat</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div id="chat">
        <ul id="messages"></ul>
        <input type="text" id="message" placeholder="Type your message...">
        <button id="send">Send</button>
    </div>

    <script>
        const taskId = "{{ $task_id }}"; // Pass task_id to Blade template
        const pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
            cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
            encrypted: true
        });

        const channel = pusher.subscribe('private-task.' + taskId);

        channel.bind('App\\Events\\MessageSent', function(data) {
            $('#messages').append('<li>' + data.message + '</li>');
        });

        $('#send').click(function() {
            const message = $('#message').val();

            $.ajax({
                type: 'POST',
                url: '/send-message',
                data: { message: message, task_id: taskId },
                success: function() {
                    $('#message').val('');
                }
            });
        });

        // Set up AJAX requests to include the CSRF token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</body>
</html>
