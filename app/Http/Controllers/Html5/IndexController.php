<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/25
 * Time: 14:54
 */

namespace App\Http\Controllers\Html5;

use Illuminate\Http\Request;
use App\Components\RequestValidator;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiResponse;
use Illuminate\Support\Facades\Log;

class IndexController extends Controller
{
    /*
     * 首页测试
     *
     * By ouyang
     *
     * 2018-02-25
     *
     */
    public function index(Request $request)
    {
        $data = $request->all();

        $session_val = session('wechat.oauth_user'); // 拿到授权用户资料

        Log::info("session_val:" + json_encode($session_val));

        return view('html5.index', []);
    }
}