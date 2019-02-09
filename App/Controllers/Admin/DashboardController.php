<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 02/10/2018
 * Time: 04:18 م
 */

namespace App\Controllers\Admin;

use App\Models\LoginModel;
use System\Controller;


class DashboardController extends Controller
{
    public function index()
    {
        $this->html->setTitle('Dashboard | Blog');

//        $user = new LoginModel();
//        $data['user'] = $user->test();
        $data['user'] = $this->load->model('Login')->test();
        $view = $this->view->render('admin/main/dashboard', $data);

        return $this->adminLayout->render($view);
    }
}