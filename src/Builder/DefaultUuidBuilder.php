<?php

namespace Rhumsaa\Uuid\Builder;

use Rhumsaa\Uuid\Converter\NumberConverterInterface;
use Rhumsaa\Uuid\Codec;
use Rhumsaa\Uuid\Uuid;
use Rhumsaa\Uuid\UuidBuilder;

class DefaultUuidBuilder implements UuidBuilder
{

    private $converter;

    public function __construct(NumberConverterInterface $converter)
    {
        $this->converter = $converter;
    }

    public function build(Codec $codec, array $fields)
    {
        return new Uuid($fields, $this->converter, $codec);
    }
}
