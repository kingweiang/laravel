<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class IndexController extends Controller{
    public function index() {
        echo "admin目录下index控制器下的index方法";
    }
    
    public function login() {
        echo "admin目录下index控制器下的login方法";
    }
}