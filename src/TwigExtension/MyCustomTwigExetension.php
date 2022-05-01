<?php

namespace App\TwigExtension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class MyCustomTwigExetension extends AbstractExtension
{
    public function getFilters()
    {
        return[ new TwigFilter('afficheImage',[$this,'image']) ] ;
    }
    public function image($path) {
        if(strlen(trim($path))==0) {
            return 'firas.jpg';
        }
        return $path ;
    }


}