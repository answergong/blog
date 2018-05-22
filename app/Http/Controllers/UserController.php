<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    //
    /**
     * 为指定用户显示详情
     *
     * @param int $id
     *
     * @return Response
     * @author LaravelAcademy.org
     */
    public function show($id)
    {
        $data = User::get()->toArray();
        var_dump($data);
        die;
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }

    /**
     * 删除数据
     *
     * @author   gongxiangzhu
     * @dateTime 2018/5/22 18:33
     *
     * @param  integer $id
     * @param  string  $name
     *
     * @return mixed
     */
    public function delete($id)
    {
        $userObj = User::find($id);
        $userObj->delete();
    }
}
