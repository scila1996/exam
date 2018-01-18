<?php

namespace App\Controllers;

use System\Core\Controller;
use System\Libraries\Finder\Finder;

class TestCtrl extends Controller
{

    public function index()
    {
        $finder = new Finder();
        $iter = $finder->files()->in(__DIR__);
        $s = '';
        foreach ($iter as $f)
        {
            $s .= $f . '<br>';
        }
        return $s;
    }

}
