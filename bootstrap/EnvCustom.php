<?php

namespace Bootstrap;

use App\Exception\EnvFileNotFound;

class EnvCustom
{
    /**
     * lokasi file env yang akan di load
     * 
     * @var string
     */
    protected $file;

    public function __construct($file)
    {
        if (!file_exists($file)) {
            throw new EnvFileNotFound($file);
        }

        $this->file = $file;
    }

    public function load()
    {
        $env = file_get_contents($this->file);
        $env = explode("\n", $env);

        foreach ($env as $line) {
            $line = trim($line);
            if (empty($line)) continue;
            if (strpos($line, '#') === 0) continue;

            $baris = explode('=', $line);
            $baris[1] = trim($baris[1]);
            putenv("{$baris[0]}={$baris[1]}");
            $_ENV[$baris[0]] = $baris[1];
        }
    }
}
