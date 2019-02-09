<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 10/10/2018
 * Time: 05:31 م
 */

namespace App\Controllers\Admin;


use System\Controller;

class LogoutController extends Controller
{
    /**
     * Log the user out
     * @return void
     */
    public function index()
    {
        $this->session->destroy();
        $this->cookie->destroy();

        return $this->url->link('/admin/login');
    }


}