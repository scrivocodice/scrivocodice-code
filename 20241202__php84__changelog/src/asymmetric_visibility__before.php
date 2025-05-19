<?php

class PhpVersion
{
    private string $version = '8.3';

    public function getVersion(): string
    {
        return $this->version;
    }

    public function increment(): void
    {
        [$major, $minor] = explode('.', $this->version);
        $minor++;
        $this->version = "{$major}.{$minor}";
    }
}
