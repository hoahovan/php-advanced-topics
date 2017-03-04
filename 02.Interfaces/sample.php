<?php
/**
 * Topic: Interface in PHP
 *
 *
 */

interface LogInterface {
  public function log(string $message);
}

class Query {
  public function logQuery(LogInterface $logger, string $message) {
    $logger->log($message);
    return true;
  }
}