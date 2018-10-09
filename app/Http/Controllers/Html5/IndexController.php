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

    const ACCOUNT_CONFIG = 'wechat.official_account';

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

        //生成微信JS-SDK相关
        $wxConfig = null;
        $app = app(self::ACCOUNT_CONFIG);
        $wxConfig = $app->jssdk->buildConfig(array('getLocation', 'onMenuShareAppMessage'), false);

        Log::info(__METHOD__ . " " . "wxConfig:" . json_encode($wxConfig));

        Log::info("session_val:" . json_encode($session_val));

        return view('html5.index', ['wxConfig' => $wxConfig]);
    }

    public function index2(Request $request)
    {
        $data = $request->all();

        $session_val = session('wechat.oauth_user'); // 拿到授权用户资料

        Log::info("session_val:" . json_encode($session_val));

        return view('html5.index2', []);
    }

    public function index3(Request $request)
    {
        $data = $request->all();

        $session_val = session('wechat.oauth_user'); // 拿到授权用户资料

        Log::info("session_val:" . json_encode($session_val));

        return view('html5.index3', []);
    }
}