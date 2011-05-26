<?php

/*
 * This file is part of the Orient package.
 *
 * (c) Alessandro Nadalin <alessandro.nadalin@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Class Where
 *
 * @package     Orient
 * @subpackage  Formatter
 * @author      Alessandro Nadalin <alessandro.nadalin@gmail.com>
 */

namespace Orient\Formatter\Query;

use Orient\Formatter\Query;
use Orient\Formatter\String;

class IndexClass extends Query
{
    public static function format(array $values)
    {
        if (count($values)) {
            return String::filterNonSQLChars(array_shift($values)) . ".";
        }

        return NULL;
    }
}
