<?php
class HelperTest extends TestCase {
  function testStatus() {
    $a = \App\Helper\HelperStatus::checkStatus('STATUS_ENABLE_RECEIVE_MAIL_STORY', '00000010');
    echo $a;
  }
}