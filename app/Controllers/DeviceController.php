<?php

namespace App\Controllers;

use App\Models\DeviceModel;

class DeviceController extends BaseController
{


    public function page1()
    {
        $deviceModel = new DeviceModel();
        $device = $deviceModel->findAll();
        $data = [
            'Device' => $device
        ];

        return view('page1', $data);
    }

    public function save()
    {
        $this->request->getVar();
    }

    public function edit()
    {
    }
}
