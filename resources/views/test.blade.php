<!DOCTYPE html>

<html>

<head>
    <title>How to count Twitter Followers without authentication</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
</head>

<body>
    <div class="container">

        <h3>Total Follower : <strong></strong></h3>

    </div>



    <script type="text/javascript">
        var twitter_username = 'pksaudi4';



  $.ajax({

    url: "https://cdn.syndication.twimg.com/widgets/followbutton/info.json?screen_names="+twitter_username,

    dataType : 'jsonp',

    crossDomain : true

  }).done(function(data) {

    $("h3 strong").text(data[0]['followers_count']);

  });



    </script>



</body>

</html>