<?php

/**
 * dynamic data source for selectbox2 with articles
 *
 * return value of these functions has to be an array of objects
 * where every object should have the members cWert, cName and optional nSort
 *
 * @package jtl_test
 */

declare(strict_types=1);

use JTL\DB\ReturnType;
use JTL\Shop;

return Shop::Container()->getDB()->query(
    'SELECT kArtikel AS cWert, cName FROM tartikel LIMIT 6',
    ReturnType::ARRAY_OF_OBJECTS
);
