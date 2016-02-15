<?php
    class PingPongGenerator
    {
        function generatePingPongArray($input)
        {
            if($input % 3 == 0 && $input % 5 == 0 ) {
                return 'ping pong';
            } elseif($input % 3 == 0){
                return 'ping';
            } elseif($input % 5 == 0) {
                return 'pong';
          } else {
                return $input;
          }
        }
    }
?>
