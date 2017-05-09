<?php

namespace App\Http\Controllers;

use App\Http\Model\MyUser;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class viewController extends Controller
{
    public function index(){
        $data=[
            'name'=>'wangwei',
            'kouhao'=>'kingweiang',
            'score'=>50,
             'article'=>[
                 'news 1',
                 'news 2',
                 'news 3',
                 'news 4',
                 'news 5'
            ]
        ];
//        $title = null;
        return view('MyLaravel',compact('data','title'));
    }
    public function views(){
//        $pdo = DB::connection()->getPdo();
//        dd($pdo);
//        $users = DB::table('user')->where('user_id','>',1)->get();
//        dd($users);
        $admin=MyUser::find(1);
        dd($admin);
        return view('index');
    }
}
