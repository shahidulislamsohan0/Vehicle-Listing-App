<?php


trait FileHandler
{
    private $filePath = __DIR__ . "/../data/vehicles.json";

    public function readFile()
    {
        if (!file_exists($this->filepath)) {
            file_put_contents($this->filepath, json_encode([]));
        }
        return json_decode(file_get_contents($this->filePath), true);
    }

    public function writeFile($data)
    {
        file_put_contents($this->filepath, json_decode($data, JSON_PRETTY_PRINT));
    }
}
