<?php
    class PingPongGenerator
    {
        function generatePingPongArray($input)
        {
            $results = array();
            for($i = 1; $i <= $input; $i++){
                // $ping_pong_result = $new_PingPongGenerator->generatePingPongArray($input);
                // if($input % 3 == 0 && $input % 5 == 0 ) {
                //     return 'ping pong';
                // } elseif($input % 3 == 0){
                //     return 'ping';
                // } elseif($input % 5 == 0) {
                //     return 'pong';
                // } else {
                //     return $input;
                // }
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
