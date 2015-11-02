<?php

namespace FPlus\Millennium\Soap\Message;

class LogEntry
{
    /**
     * @var LogType
     */
    protected $type;

    /**
     * @var LogEntry
     */
    protected $entry;

    /**
     * @param LogType  $type
     * @param LogEntry $entry
     */
    public function __construct($type, $entry)
    {
        $this->type = $type;
        $this->entry = $entry;
    }

    /**
     * @return LogType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param LogType $type
     *
     * @return LogEntry
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return LogEntry
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * @param LogEntry $entry
     *
     * @return LogEntry
     */
    public function setEntry($entry)
    {
        $this->entry = $entry;

        return $this;
    }
}
