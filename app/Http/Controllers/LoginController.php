<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Validator;
use DB;
use Crypt;
use Auth;
use Session;

class LoginController extends Controller
{

    /**
     * 显示所有用户。
     *
     * @param Request $request
     *
     * @return Response
     */

    protected $user;


//    跳转到登录页面
    public function login()
    {
        return view('auth.login');
    }

    //用户登录
    public function postLogin(\Request $request)
    {

        $request = $request::all();
        if (Auth::attempt(['email' => $request['email'], 'password' => ($request['password'])])) {
                return redirect('/posts/list');
        } else {
            return back()
                ->withErrors(array("邮箱或密码输入错误"))
                ->withInput();
        }
    }

    public function captcha($tmp)
    {

        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();

        //把内容存入session
        Session::flash('milkcaptcha', $phrase);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
    }

    public function test()
    {

//开启事务
        DB::beginTransaction();
        try {
//中间逻辑代码
            Admin::where("id",5)->update(array("user"=>'4578'));
            Admin::where("name",'test')->update(array("id"=>''));
            DB::commit();
        } catch (\Exception $e) {
//接收异常处理并回滚
            DB::rollBack();
        }
    }


}
