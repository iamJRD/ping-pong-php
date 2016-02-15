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

      function test_checkPong_true()
      {
          // Arrange
          $test_PingPongGenerator = new PingPongGenerator;
          $input = 10;

          // Act
          $result = $test_PingPongGenerator->generatePingPongArray($input);

          // Assert
          $this->assertEquals('pong', $result);
      }

      function test_checkPingPong_true()
      {
          // Arrange
          $test_PingPongGenerator = new PingPongGenerator;
          $input = 15;

          // Act
          $result = $test_PingPongGenerator->generatePingPongArray($input);

          // Assert
          $this->assertEquals('ping pong', $result);
      }

      function test_checkPingPong_false()
      {
        //   Arrange
        $test_PingPongGenerator = new PingPongGenerator;
        $input = 13;

        // Act
        $result = $test_PingPongGenerator->generatePingPongArray($input);

        // Asser
        $this->assertEquals(13, $result);
      }

  }
?>
