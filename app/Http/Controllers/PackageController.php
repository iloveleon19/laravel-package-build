<?php
namespace App\Http\Controllers;

// use Larapack;
// use Devpack;

use Leon\Devpack\Facades\Devpack;
use KeJyun\Larapack\Facades\Larapack;

class PackageController extends Controller {
    public function larapack()
    {
        Larapack::dump('My Laravel Package');
    }
    public function devpack()
    {
        Devpack::dump();
    }
}