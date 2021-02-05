<?php
namespace App\Http\Controllers;

use Larapack;

class PackageController extends Controller {
    public function larapack()
    {
        Larapack::dump('My Laravel Package');
    }
}