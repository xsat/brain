<?php

namespace Brain;

/**
 * Class Analyzer
 *
 * @package Brain
 */
class Analyzer
{
    public function analyze(Request $request): Response
    {
        var_dump($request);

        return new Response(null);
    }
}
