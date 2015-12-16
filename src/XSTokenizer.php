<?php
namespace Fook\xunsearch;

interface XSTokenizer
{
    const DFL = 0;
    public function getTokens($value, XSDocument $doc = null);
}