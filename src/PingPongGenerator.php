<?php
    class PingPongGenerator
    {
        function generatePingPongArray($input)
        {
            if($input % 3 == 0){
              return 'ping';
            } elseif($input % 5 == 0) {
              return 'pong';
            }
        }

    }
?>
