<?php

namespace Brain;

/**
 * Class Response
 *
 * @package Brain
 */
class Response
{
    /**
     * @var string
     */
    private $message;

    /**
     * Response constructor.
     *
     * @param null|string $message
     */
    public function __construct(?string $message)
    {
        $this->message = $message;
    }

    /**
     * @return null|string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }
}