<?php 


namespace Artemis;

use Artemis\Book;


class Ebook extends Book
{
    // Properties
    public bool $isAugmented;
    public int $availability;
    public bool $isDownloadable;

    /**
     * get the value of isAugmented
     */
    public function getIsAugmented()
    {
        return $this->isAugmented;
    }
    public function setIsAugmented()
    {
        return $this->isAugmented;
    }

    public function getAvailability()
    {
        return $this->availability;
    }
    public function setAvailability()
    {
        return $this->availability;
    }

    public function getIsDownloadable()
    {
        return $this->isDownloadable;
    }
    public function setIsDownloadable()
    {
        return $this->isDownloadable;
    }
}