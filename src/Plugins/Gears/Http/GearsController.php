<?php
/**
 * Created by PhpStorm.
 * User: shojan
 * Date: 12/28/2016
 * Time: 11:52 AM
 */

namespace App\Modules\Modules\Plugins\Gears\Http;

use App\Http\Controllers\Controller;


class GearsController  extends Controller
{
    public function getIndex()
    {
        return view('Gears::main.index');

    }
}