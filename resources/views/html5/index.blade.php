<div>
    index page
</div>

<button id="location_btn" onclick="getLocation();">
    获取位置
</button>


<script src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">

    wx.config({!! $wxConfig !!});

    //微信配置成功后
    wx.ready(function () {


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


</script>