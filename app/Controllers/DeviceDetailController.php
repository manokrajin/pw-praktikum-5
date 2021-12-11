<?php

namespace App\Controllers;

use App\Models\DeviceDetailModel;

class DeviceDetailController extends BaseController
{
    public function page2()
    {
        $deviceDetailModel = new DeviceDetailModel();
        $deviceDetail = $deviceDetailModel->findAll();
        $data = [
            'Device_Detail' => $deviceDetail
        ];
        return view('page2', $data);
    }
}
