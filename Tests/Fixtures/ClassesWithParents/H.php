<?php

namespace ClassesWithParents;

/**
 * Class H
 *
 * Class Example with magic constant
 *
 * @package ClassesWithParents
 */
class H extends G{

    /**
     * @return array
     */
    public function run() {
        return array(
            'file'      => __FILE__,
            'dir'       => __DIR__,
            'parentDir' => dirname(__DIR__),
            // ignored
//            'ignored'   => __DIR__,
        );
    }
}