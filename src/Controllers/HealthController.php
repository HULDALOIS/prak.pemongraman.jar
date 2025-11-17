<?php
namespace Src\Controllers;

class HealthController extends BaseController
{
    public function show()
    {
        $this->ok([
            'status' => 'ok',
            'time' => date('c')
        ]);
    }

    public function contract()
    {
        include __DIR__ . '/../../public/api-contract.php';
    }
}
