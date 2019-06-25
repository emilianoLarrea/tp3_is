<!DOCTYPE html>

<head>
    <title>Pusher Test</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
        integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous">
    </script>
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    .notification {
        background-color: #555;
        color: white;
        text-decoration: none;
        padding: 15px 26px;
        position: relative;
        display: inline-block;
        border-radius: 2px;
    }

    .notification:hover {
        background: red;
    }

    .notification .badge {
        position: absolute;
        top: -10px;
        right: -10px;
        padding: 5px 10px;
        border-radius: 50%;
        background-color: red;
        color: white;
    }
    </style>
</head>

<body>
    <h1>Pusher Test</h1>
    <div style="margin: 40px;">

    <a href="#" class="notification">
        <span>Inbox</span>
        <span class="badge">0</span>
    </a>
    <div class="row">
        <label for="">Mensaje Recibido:  </label><br>
        <p id='mensaje'></p>

    </div>
    </div>
</body>
<script>
// Enable pusher logging - don't include this in production
Pusher.logToConsole = true;

var pusher = new Pusher('4644373361ec12918451', {
    cluster: 'us2',
    forceTLS: true
});

var channel = pusher.subscribe('1');
channel.bind('alerta', function(data) {
    $("#mensaje").text((data['message']));
    $(".badge").text(parseInt($(".badge").text()) + 1);
});
channel.bind('consola', function(data) {
    console.log(data['message']);
});
</script>