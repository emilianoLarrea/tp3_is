<!DOCTYPE html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<head>
    <title>Pusher Test Server</title>
</head>

<body>
    <h1>Pusher Test Server</h1>
    <label>Mensaje:</label>
    <input type="text" id = "message">
    <label>Canal:</label>
    <input type="text" id = "channel">
    <label>Evento:</label>
    <input type="text" id = "event">
    <button id="send">Enviar</button>
</body>
<script>
var send = function(message, channel, event) {
    $.ajax({
        type: "POST",
        url: "server.php",
        data: {
            message: message,
            channel: channel,
            event: event
        }
    }).done(function(msg) {
        console.log("Message Send: " + message);
    });
};
$("#send").on('click', function() {
    
    send($("#message").val(),$("#channel").val(),$("#event").val());

});
</script>