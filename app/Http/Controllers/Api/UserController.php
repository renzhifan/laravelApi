<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Api\UserRequest;
class UserController extends Controller
{
    public function index()
    {
        return 'index';
    }

    //用户注册
    public function store(UserRequest $request)
    {
        User::create($request->all());
        return '用户注册成功。。。';
    }

    //用户登录
    public function login(Request $request)
    {
        $res = Auth::guard('web')->attempt(['name' => $request->name, 'password' => $request->password]);
        if ($res) {
            return '用户登录成功...';
        }
        return '用户登录失败';
    }
}
