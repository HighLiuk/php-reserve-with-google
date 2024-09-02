<?php

namespace HighLiuk\Rwg\Feeds;

use Google\Protobuf\Internal\Message;
use HighLiuk\Rwg\FileSet;
use HighLiuk\Rwg\Models\Model;

/**
 * @template TMessage of Message
 * @template TFeed of Message
 */
abstract class Feed
{
    /**
     * @var FileSet<TFeed>
     */
    protected readonly FileSet $fileset;

    /**
     * @var Model<TMessage>[]
     */
    protected array $models = [];

    public function __construct()
    {
        $this->fileset = new FileSet($this->getName(), $this->getId());
    }

    /**
     * @param  Model<TMessage>  $model
     * @return $this
     */
    public function add(Model $model): static
    {
        $this->models[] = $model;

        return $this;
    }

    /**
     * @return TMessage[]
     */
    protected function getMessages(): array
    {
        return array_map(
            fn ($model) => $model->toMessage(),
            $this->models
        );
    }

    /**
     * @return string
     */
    abstract protected function getName();

    /**
     * @return string
     */
    abstract protected function getId();

    /**
     * @return TFeed
     */
    abstract protected function getFeed();
}
