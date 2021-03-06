<?php

/*
 * This file is part of felpado.
 *
 * (c) Pablo Díez <pablodip@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace felpado;

use felpado as f;

/**
 * f\values($coll)
 *
 * Returns an array with the values of coll.
 *
 * f\values(array('one' => 1, 'two' => 2, 'three' => 3));
 * => array(1, 2, 3)
 */
function values($coll) {
    $result = array();
    foreach ($coll as $value) {
        $result[] = $value;
    }

    return $result;
}
