<?php

namespace FPlus\Millennium\Soap\Message;

class LogEntry
{
    /**
     * @var LogType
     */
    protected $type = null;

    /**
     * @var LogEntry
     */
    protected $entry = null;

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
     * @return \Millennium\Soap\LogEntry
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
     * @return \Millennium\Soap\LogEntry
     */
    public function setEntry($entry)
    {
        $this->entry = $entry;

        return $this;
    }
}
