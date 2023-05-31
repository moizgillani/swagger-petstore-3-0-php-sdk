<?php

declare(strict_types=1);

/*
 * SwaggerPetstoreOpenAPI30Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SwaggerPetstoreOpenAPI30Lib\Models\Builders;

use Core\Utils\CoreHelper;
use SwaggerPetstoreOpenAPI30Lib\Models\User;

/**
 * Builder for model User
 *
 * @see User
 */
class UserBuilder
{
    /**
     * @var User
     */
    private $instance;

    private function __construct(User $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new user Builder object.
     */
    public static function init(): self
    {
        return new self(new User());
    }

    /**
     * Sets id field.
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets username field.
     */
    public function username(?string $value): self
    {
        $this->instance->setUsername($value);
        return $this;
    }

    /**
     * Sets first name field.
     */
    public function firstName(?string $value): self
    {
        $this->instance->setFirstName($value);
        return $this;
    }

    /**
     * Sets last name field.
     */
    public function lastName(?string $value): self
    {
        $this->instance->setLastName($value);
        return $this;
    }

    /**
     * Sets email field.
     */
    public function email(?string $value): self
    {
        $this->instance->setEmail($value);
        return $this;
    }

    /**
     * Sets password field.
     */
    public function password(?string $value): self
    {
        $this->instance->setPassword($value);
        return $this;
    }

    /**
     * Sets phone field.
     */
    public function phone(?string $value): self
    {
        $this->instance->setPhone($value);
        return $this;
    }

    /**
     * Sets user status field.
     */
    public function userStatus(?int $value): self
    {
        $this->instance->setUserStatus($value);
        return $this;
    }

    /**
     * Initializes a new user object.
     */
    public function build(): User
    {
        return CoreHelper::clone($this->instance);
    }
}
