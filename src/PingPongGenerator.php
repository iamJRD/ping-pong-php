<?php
    class PingPongGenerator
    {
        function generatePingPongArray($input)
        {
            $results = array();
            for($i = 1; $i <= $input; $i++){
                if($i % 3 == 0 && $i % 5 == 0 ) {
                    array_push($results, 'ping pong');
                } elseif($i % 3 == 0){
                    array_push($results, 'ping');
                } elseif($i % 5 == 0) {
                    array_push($results, 'pong');
                } else {
                    array_push($results, $i);
                }
            }
            return $results;
        }
    }
?>
