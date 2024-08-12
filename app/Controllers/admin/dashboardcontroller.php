<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
class dashboardcontroller extends BaseController
{
        public function index()
    {
         $data = [
            'title'=> 'Dashboard'
        ];

        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }
        
        return view('Admin/dashboard/index', $data);
    }
}
