<?php
  require_once 'src/PingPongGenerator.php';

  class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
  {
      function test_checkPing_true()
      {
        // arrange
        $test_PingPongGenerator = new PingPongGenerator;
        $input = 3;

        // Act
        $result = $test_PingPongGenerator->generatePingPongArray($input);

        // Assert
        $this->assertEquals('ping', $result);
      }

  }
?>