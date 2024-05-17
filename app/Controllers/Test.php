<?php

namespace App\Controllers;

class Test extends BaseController
{
    public function test1(): string
    {
        return view('test');
    }
}
