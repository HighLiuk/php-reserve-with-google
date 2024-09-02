<?php

namespace HighLiuk\Rwg;

trait Exportable
{
    /**
     * @return $this
     */
    public function export(string $path): static
    {
        $feed = $this->getFeed()->setData($this->getMessages());

        $this->fileset
            ->addFile(new MessageFile($feed, $this->getName()))
            ->save($path);

        return $this;
    }
}
