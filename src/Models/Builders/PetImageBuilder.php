<?php

declare(strict_types=1);

/*
 * SwaggerPetstoreOpenAPI30Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SwaggerPetstoreOpenAPI30Lib\Models\Builders;

use Core\Utils\CoreHelper;
use SwaggerPetstoreOpenAPI30Lib\Models\PetImage;

/**
 * Builder for model PetImage
 *
 * @see PetImage
 */
class PetImageBuilder
{
    /**
     * @var PetImage
     */
    private $instance;

    private function __construct(PetImage $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new pet image Builder object.
     */
    public static function init(): self
    {
        return new self(new PetImage());
    }

    /**
     * Sets code field.
     */
    public function code(?int $value): self
    {
        $this->instance->setCode($value);
        return $this;
    }

    /**
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Sets message field.
     */
    public function message(?string $value): self
    {
        $this->instance->setMessage($value);
        return $this;
    }

    /**
     * Initializes a new pet image object.
     */
    public function build(): PetImage
    {
        return CoreHelper::clone($this->instance);
    }
}
