<?php
declare(strict_types=1);

namespace Glagol\SourceMap;

class File
{
    /**
     * @var string
     */
    private $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }
}