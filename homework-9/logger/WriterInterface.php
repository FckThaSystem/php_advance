<?php

namespace logger;

interface WriterInterface
{
    public function write($level, $message, $context = array());
}