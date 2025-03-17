<?php

namespace encore\Core;

abstract class BaseEvent
{
    private static $executedEvents = [];

    protected function isExecuted($eventName)
    {
        return isset(self::$executedEvents[$eventName]) && self::$executedEvents[$eventName] === true;
    }

    protected function markAsExecuted($eventName)
    {
        self::$executedEvents[$eventName] = true;
    }

    protected function resetExecution($eventName)
    {
        unset(self::$executedEvents[$eventName]);
    }

    abstract public function execute();
} 