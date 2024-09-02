<?php

namespace HighLiuk\Rwg\Models;

use Google\Protobuf\Internal\Message;

/**
 * @template TMessage of Message
 */
interface Model
{
    /**
     * @return TMessage
     */
    public function toMessage();
}
