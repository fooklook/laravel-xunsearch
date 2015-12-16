<?php
namespace Fook\xunsearch;

class XSTokenizerFull implements XSTokenizer
{
    public function getTokens($value, XSDocument $doc = null)
    {
        return array($value);
    }
}