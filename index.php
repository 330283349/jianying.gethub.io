<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>一键激活剪映VIP会员权益-老A网络</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <link rel="stylesheet" href="./soures/index.css">
    <link rel="stylesheet" href="./soures/layui.css">
    <script src="https://unpkg.com/callapp-lib"></script>
<link id="layuicss-laydate" rel="stylesheet" href="./soures/laydate.css" media="all"><link id="layuicss-layer" rel="stylesheet" href="./soures/layer.css" media="all"><link id="layuicss-skincodecss" rel="stylesheet" href="./soures/code.css" media="all"></head>
<body>
<div class="app">
    <div class="header-container">
        <img src="./soures/logo.png" class="logo">
    </div>
    <div class="main">
        <div class="form-box">
            <div class="form-box-title"></div>
            <div class="line"></div>
            <!--    未登录        -->
            <div class="not-login-in">
                <div class="account">
                </div>
                <div class="exchange-btn login-exchange-btn" id="copy">一键激活</div>
            </div>
            <!-- 提示弹窗 -->
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <p class="alert-msg">msg</p>
                </div>
            </div>
        </div>
        <!-- <div class="movement-cell">
            <div class="movement-cell-title">
                卡密购买
            </div>
            <div class="vip-buy">
                <img class="vip-img" src="./image/company-buy-ed54b8b9.png" alt="" srcset="">
                <img class="vip-img-h5" src="./image/company-buy-h5-e4b38ede.png" alt="" srcset="">
            </div>
        </div> -->
        <div class="movement-cell">
<!--             <div class="test-btn">打开剪映</div>-->
            <div class="movement-cell-title">
                兑换说明
            </div>
            <div class="illustrate">
                <p>1、请确保您的剪映软件已更新至最新版。</p>
                <p>2、激活前请确保您的剪映号已绑定抖音。</p>
                <p>3、内置接口一个月有效期限。</p>
                <p>4、仅限于自己测试使用。</p>
                <p>5、请勿非法倒卖本程序。</p>
                <!--<p>3、同一卡密仅可兑换在一个账号上使用。</p>-->
                <p>6、被移除小组无法使用后，重新返回本页面一键激活即可继续使用。</p>
                

            </div>
        </div>
    </div>
    <!-- 微信环境遮罩 -->
    <div class="wechat-mask" style="display: none; width: 100%; height: 100vh; position: fixed; top: 0px; left: 0px; background-color: rgba(0,0,0,.9);color: #fff;z-index: 999999;user-select: none;">
        <div style="width: 100%;height: 100%;display: flex;align-items: center;justify-content: center;">
            请在默认浏览器打开
        </div>
    </div>
    <!-- 显示二维码code -->
    <div class="code-mask">
        <div class="code-mask-content">
            <div class="close-btn"></div>
           <!-- <img src="" class="qr-code-m" alt="" srcset=""> -->
        </div>
    </div>
</div>
<script src="./soures/jquery.min.js"></script>
<script src="./soures/clipboard.min.js"></script>
<script src="./soures/layui.js"></script>
<script src="./soures/main.js"></script>


</body></html>