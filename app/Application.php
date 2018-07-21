<?php

namespace App;

use Brain\Analyzer;
use Brain\Request;

/**
 * Class Application
 *
 * @package App
 */
class Application
{
    /**
     * @var Analyzer
     */
    private $analyzer;

    /**
     * Application constructor.
     */
    public function __construct()
    {
        $this->analyzer = new Analyzer();
    }

    public function run(): void
    {
        echo $this->analyzer->analyze(
            new Request(
                $_GET['message'] ?? null
            )
        )->getMessage();
    }
}
