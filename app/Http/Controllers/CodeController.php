<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CodeController extends Controller
{

    private $path;

    function __construct()
    {
        $this->path = base_path() . '/public/upload';
    }

    public function receiveCode(Request $request)
    {
        $code_path = $this->path.'\code.txt';
//        var_dump($request);
        if ($request->has('code')) {
            $file = fopen($code_path, 'w');
            fwrite($file, $request->input('code'));
//            echo json_encode('success');
            echo json_encode($code_path);
        } else {
            echo json_encode('error');
        }
    }
}
