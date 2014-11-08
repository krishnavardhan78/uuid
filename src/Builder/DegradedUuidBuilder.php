<?php

namespace Rhumsaa\Uuid\Builder;

use Rhumsaa\Uuid\UuidBuilder;
use Rhumsaa\Uuid\Codec;
use Rhumsaa\Uuid\DegradedUuid;
use Rhumsaa\Uuid\BigNumberConverter;

class DegradedUuidBuilder implements UuidBuilder
{

    private $converter;

    public function __construct(BigNumberConverter $converter)
    {
        $this->converter = $converter;
    }

    public function build(Codec $codec, array $fields)
    {
        return new DegradedUuid($fields, $this->converter, $codec);
    }
}