<?php
  require_once 'src/PingPongGenerator.php';

  class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
  {
      function test_checkPingPong_false()
      {
        //   Arrange
        $test_PingPongGenerator = new PingPongGenerator;
        $input = 4;

        // Act
        $result = $test_PingPongGenerator->generatePingPongArray($input);

        // Assert
        $this->assertEquals([1,2,'ping',4], $result);
      }

      function test_checkForArray()
      {
        //   Arrange
        $test_PingPongGenerator = new PingPongGenerator;
        $input = 4;

        // Act
        $result = $test_PingPongGenerator->generatePingPongArray($input);

        // Assert
        $this->assertEquals(array(1,2,'ping',4), $result);
      }

      function test_checkPing_true()
      {
          // arrange
          $test_PingPongGenerator = new PingPongGenerator;
          $input = 3;

          // Act
          $result = $test_PingPongGenerator->generatePingPongArray($input);

          // Assert
          $this->assertEquals(array(1,2,'ping'), $result);
      }

      function test_checkPong_true()
      {
          // Arrange
          $test_PingPongGenerator = new PingPongGenerator;
          $input = 5;

          // Act
          $result = $test_PingPongGenerator->generatePingPongArray($input);

          // Assert
          $this->assertEquals(array(1,2,'ping',4,'pong'), $result);
      }

      function test_checkPingPong_true()
      {
          // Arrange
          $test_PingPongGenerator = new PingPongGenerator;
          $input = 15;

          // Act
          $result = $test_PingPongGenerator->generatePingPongArray($input);

          // Assert
          $this->assertEquals(array(1,2,'ping',4,'pong','ping',7,8,'ping','pong',11,'ping',13,14,'ping pong'), $result);
      }
  }
?>
