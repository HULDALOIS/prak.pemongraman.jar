<?php
namespace Src\Controllers;
 use Src\Helpers\Response;

 Class VersionController extends BaseController {
    public function show() {
        Response::json([
            'status' => 'sangat success ',
            'version' => '8.1.10',
            'message' => 'API version info'
        ]);
    }
 }