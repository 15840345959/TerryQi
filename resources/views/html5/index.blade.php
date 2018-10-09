<div>
    index page
</div>

<button id="location_btn" onclick="getLocation();">
    获取位置
</button>


<button id="location_btn" onclick="shareTimeLine();">
    分享朋友圈
</button>


<script src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">

    wx.config({!! $wxConfig !!});

    //微信配置成功后
    wx.ready(function () {
        console.log("wx ready");

    });

    function getLocation() {
        wx.getLocation({
            type: 'wgs84', // 默认为wgs84的gps坐标，如果要返回直接给openLocation用的火星坐标，可传入'gcj02'
            success: function (res) {
                console.log(JSON.stringify(res))
                alert(JSON.stringify(res))
            }
        });
    }

    function shareTimeLine() {
        wx.onMenuShareTimeline({
            title: '111', // 分享标题
            link: '222', // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
            imgUrl: '333', // 分享图标
            success: function () {
                // 用户点击了分享后执行的回调函数
            }
        });
    }


</script>