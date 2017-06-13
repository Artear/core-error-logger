<?php

namespace ErrorLogger;

use Exception;

class NewrelicLogger implements ErrorLogger {

  public function logError(Exception $exception) {

    global $conf;

    if (extension_loaded('newrelic') && $conf['newrelic_logger']) {
      newrelic_notice_error($exception->getMessage(), $exception);
    }
  }
}