<?php

namespace HighLiuk\Rwg;

use Google\Protobuf\Internal\Message;

/**
 * @template TMessage of Message
 */
class MessageFile
{
    protected readonly int $timestamp;

    /**
     * @param  TMessage  $message
     */
    public function __construct(
        protected readonly Message $message,
        protected readonly string $name,
        protected readonly string $extension = 'json'
    ) {
        $this->timestamp = time();
    }

    /**
     * @return $this
     */
    public function save(string $path): static
    {
        $path = rtrim($path, '/');
        $path = $path.'/'.$this->getFilename();

        file_put_contents($path, $this->toString());
        exec("gzip $path");

        return $this;
    }

    public function getFilename(): string
    {
        return $this->name.'_'.$this->timestamp.'.'.$this->extension;
    }

    protected function toString(): string
    {
        return $this->message->serializeToJsonString();
    }
}
