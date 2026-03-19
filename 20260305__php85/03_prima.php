<?php


try {
    runJob();
} catch (Throwable $e) {
    error_log($e->getTraceAsString());
    throw $e;
}
