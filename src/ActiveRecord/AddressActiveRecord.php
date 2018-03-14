<?php

namespace Cryptomkt\Wallet\ActiveRecord;

use Cryptomkt\Wallet\Resource\ResourceCollection;
use Cryptomkt\Wallet\Resource\Transaction;

trait AddressActiveRecord
{
    use BaseActiveRecord;

    /**
     * Issues a refresh request to the API.
     */
    public function refresh(array $params = [])
    {
        $this->getClient()->refreshAddress($this, $params);
    }

    /**
     * Fetches address transactions from the API.
     *
     * @return ResourceCollection|Transaction[]
     */
    public function getTransactions(array $params = [])
    {
        return $this->getClient()->getAddressTransactions($this, $params);
    }
}
