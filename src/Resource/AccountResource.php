<?php

namespace Cryptomkt\Wallet\Resource;

trait AccountResource 
{
    public function getAccountId()
    {
        if ($resourcePath = $this->getResourcePath()) {
            $parts = explode('/', $resourcePath);

            return $parts[3];
        }
    }
}
