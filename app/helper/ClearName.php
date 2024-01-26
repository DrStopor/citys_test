<?php

namespace helper;

final class ClearName
{
    /**
     * Очищает строку от id
     * @param string $value
     * @return string
     */
    public static function deleteID(string $value) {
        return preg_replace('/id\d+/i', '', $value);
    }
}