<?php

class PhpVersion
{
    /**
     * @deprecated 8.3 use PhpVersion::getVersion() instead
     */
    public function getPhpVersion(): string
    {
        return $this->getVersion();
    }

    public function getVersion(): string
    {
        return '8.3';
    }
}

$phpVersion = new PhpVersion();
// No indication that the method is deprecated.
echo $phpVersion->getPhpVersion();
