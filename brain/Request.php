<?php

namespace Brain;

/**
 * Class Request
 *
 * @package Brain
 */
class Request
{
    /**
     * @var string
     */
    private $message;

    /**
     * Request constructor.
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
    public function getMessage(): ?string {
        return $this->message;
    }
}
