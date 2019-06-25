<?php
  require __DIR__ . '/vendor/autoload.php';
function send($m,$c,$e){
   $options = array(
    'cluster' => 'us2',
    'useTLS' => true
  );
  $pusher = new Pusher\Pusher(
    'dcbd7a69b1bd1fc304a5',
              'b84f29a8139308c83d62',
              '784009',
              $options
  );
  
  $data['message'] = $m;
  $pusher->trigger($c, $e, $data);
}
if(isset($_POST['message'])){
    send($_POST['message'],$_POST['channel'],$_POST['event']);
}
?>
