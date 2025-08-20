<?php

namespace PhpOffice\PhpSpreadsheet\Shared;

class ObjectIdHelper
{
    public static function id(object $object): int
    {
        if (function_exists('spl_object_id')) {
            return spl_object_id($object);
        }

        return abs(crc32(spl_object_hash($object)));
    }
}

