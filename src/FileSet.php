<?php

namespace HighLiuk\Rwg;

use Generated\Rwg\FilesetDescriptor;
use Google\Protobuf\Internal\Message;
use LogicException;

/**
 * @template TMessage of Message
 *
 * @extends MessageFile<FilesetDescriptor>
 */
class FileSet extends MessageFile
{
    /**
     * @var MessageFile<TMessage>[]
     */
    protected array $files = [];

    public function __construct(string $name, string $id)
    {
        parent::__construct(new FilesetDescriptor, $name, 'filesetdesc.json');

        $this->message
            ->setGenerationTimestamp($this->timestamp)
            ->setName($id)
            ->setDataFile([]);
    }

    /**
     * @param  MessageFile<TMessage>  $file
     * @return $this
     */
    public function addFile(MessageFile $file): static
    {
        $this->files[] = $file;

        return $this;
    }

    /**
     * @return $this
     */
    public function save(string $path): static
    {
        if (count($this->files) === 0) {
            throw new LogicException('No files to save');
        }

        $data_file = [];
        foreach ($this->files as $file) {
            $file->save($path);
            $data_file[] = $file->getFilename().'.gz';
        }

        $this->message->setDataFile($data_file);

        parent::save($path);

        return $this;
    }
}
