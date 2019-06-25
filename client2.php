<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('4644373361ec12918451', {
      cluster: 'us2',
      forceTLS: true
    });

    var channel = pusher.subscribe('2');
    channel.bind('alerta', function(data) {
      alert(data['message']);
    });
    channel.bind('consola', function(data) {
      console.log(data['message']);
    });
  </script>
</head>
<body>
  <h1>Pusher Test</h1>
  <p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
  </p>
</body>