<?php
namespace App\Lib;

class XSTokenizerNone implements XSTokenizer
{
    public function getTokens($value, XSDocument $doc = null)
    {
        return array();
    }
}