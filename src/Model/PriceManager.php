<?php

namespace App\Model;
/**
 *
 */
class PriceManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'sport_camp';
    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }
}