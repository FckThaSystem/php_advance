<?php

namespace logger;

include __DIR__ . '/../vendor/autoload.php';

class setLog extends \Psr\Log\AbstractLogger
{
    private $writer;

    public function __construct(WriterInterface $writer){
        $this->writer = $writer;
    }

    public function log($level, $message, array $context = array())
    {
        $this->writer->write($level, $message, $context);
    }
}