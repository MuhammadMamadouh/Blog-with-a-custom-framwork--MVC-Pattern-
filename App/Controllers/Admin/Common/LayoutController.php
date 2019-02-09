<?php


namespace App\Controllers\Admin\Common;

use System\View\ViewInterface;
use System\Controller;

class LayoutController extends Controller
{

    public function render(ViewInterface $view)
    {
        $data['content'] = $view;
        $data['header']  = $this->load->controller('Admin/Common/Header')->index();
        $data['footer']  = $this->load->controller('Admin/Common/Footer')->index();
        $data['sidebar'] = $this->load->controller('Admin/Common/Sidebar')->index();

        return $this->view->render('admin/common/layout', $data);

    }
}