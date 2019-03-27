<?php
namespace app\admin\controller;

use think\Controller;

//h后台基础类库
class Base extends Controller
{
    public function _initialize()
    {
        //判断用户是否登录
        $isLogin = $this->isLogin();
        if (!$isLogin){
            return $this->redirect('login/index');
        }
    }

    //判断是否登录
    public function isLogin(){
        //获取session
        $user = session(config('admin.session_user'),'',config('admin.session_user_scope'));
        if ($user && $user->id){
            return true;
        }
        return false;
    }


}

