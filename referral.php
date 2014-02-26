<? include('header.php'); ?>
<style>
    .padd-banner{
        padding: 10px 20px;
        width: 65%;
        margin: auto;
    }
    .banner-main{
        margin-bottom: 30px;
        padding-bottom:10px;
        border-bottom: 1px solid #fff;
    }
    .banner-main textarea{
        resize:none;
        border-radius: 4px;
        border: 1px solid #000000;
    }
    .banner-main:last-child{
        border-bottom: none;
    }
    .banner-header{
        font-weight: 300;
        color: #fff;
        border-bottom: 1px solid #fff;
        line-height: 65px;
        margin:0 0 30px;
    }
    .banner-img-cont{
        margin-bottom: 25px;
    }
    .banner-source{
        color: #fff;
        font-size:18px;
    }
    .banner-info{
        color: #fff;
    }
    /*
    ==============================================
    tossing
    ==============================================
    */
    
    .tossing{
        animation-name: tossing;
        -webkit-animation-name: tossing;	
        
        animation-duration: 2.5s;	
        -webkit-animation-duration: 2.5s;
        
        animation-iteration-count: infinite;
        -webkit-animation-iteration-count: infinite;
    }
    
    @keyframes tossing {
        0% {
            transform: rotate(-4deg);	
        }
        50% {
            transform: rotate(4deg);
        }
        100% {
            transform: rotate(-4deg);	
        }						
    }
    
    @-webkit-keyframes tossing {
        0% {
            -webkit-transform: rotate(-4deg);	
        }
        50% {
            -webkit-transform: rotate(4deg);
        }
        100% {
            -webkit-transform: rotate(-4deg);	
        }				
    }
    /*
    ==============================================
    floating
    ==============================================
    */
    
    .floating{
        animation-name: floating;
        -webkit-animation-name: floating;
        
        animation-duration: 1.5s;	
        -webkit-animation-duration: 1.5s;
        
        animation-iteration-count: infinite;
        -webkit-animation-iteration-count: infinite;
    }
    
    @keyframes floating {
        0% {
            transform: translateY(0%);	
        }
        50% {
            transform: translateY(8%);	
        }	
        100% {
            transform: translateY(0%);
        }			
    }
    
    @-webkit-keyframes floating {
        0% {
            -webkit-transform: translateY(0%);	
        }
        50% {
            -webkit-transform: translateY(8%);	
        }	
        100% {
            -webkit-transform: translateY(0%);
        }			
    }
</style>
<style>
    .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }
    @-webkit-keyframes rotateIn {
        0% {
            -webkit-transform-origin: center center;
            transform-origin: center center;
            -webkit-transform: rotate(-200deg);
            transform: rotate(-200deg);
            opacity: 0;
        }
        
        100% {
            -webkit-transform-origin: center center;
            transform-origin: center center;
            -webkit-transform: rotate(0);
            transform: rotate(0);
            opacity: 1;
        }
    }
    
    @keyframes rotateIn {
        0% {
            -webkit-transform-origin: center center;
            -ms-transform-origin: center center;
            transform-origin: center center;
            -webkit-transform: rotate(-200deg);
            -ms-transform: rotate(-200deg);
            transform: rotate(-200deg);
            opacity: 0;
        }
        
        100% {
            -webkit-transform-origin: center center;
            -ms-transform-origin: center center;
            transform-origin: center center;
            -webkit-transform: rotate(0);
            -ms-transform: rotate(0);
            transform: rotate(0);
            opacity: 1;
        }
    }
    .rotateIn {
        -webkit-animation-name: rotateIn;
        animation-name: rotateIn;
    }
    .r-d{
        -webkit-animation-delay: 2.5s;
        -moz-animation-delay: 2.5s;
        -ms-animation-delay: 2.5s;
        -o-animation-delay: 2.5s;
        animation-delay: 2.5s;
    }
    .arrw-rela {
        position: relative;
    }
    .arrw-point-white {
        background: url("http://d2qcctj8epnr7y.cloudfront.net/contrib/arrow-1-medium.png") no-repeat scroll 0 0 rgba(0, 0, 0, 0);
        height: 92px;
        left: -130px;
        position: absolute;
        top: -75px;
        width: 100px;
    }
    .badge-postn{
        position: absolute; 
        z-index: 10; 
        top: 30px; 
        right: 90px;
    }
    /* Landscape phones and down */
    @media (max-width: 480px) {
        .badge-postn{
            position: absolute;
            right: 1px;
            top: 2px;
            width: 40px;
            z-index: 10;
        }
        .email-glow input[type="text"] {
            height: 40px;
            width: 163px !important;
        }
        .wrap-email-input{
            width:250px;
        }
        .phne-s1{
            font-size: 14px;
        }
        .span4.features{
            text-align: center;
        }
        .img-phone{
            margin:auto;
        }
        .p-phone{
            text-align:center;
        }
    }
</style>
<a name="top"></a>
<div class="container-fluid lead-reset-padd"  style="background: url(/img/bg-socialholdings.jpg) repeat;">
    <div class="row-fluid">
        <div class="wrap-ad" style="background: none repeat scroll 0 0 rgba(0, 0, 0, 0.8);">
            <div class="container overflow-ad">
                <div class="row-fluid">
                    <div style="position:relative;">
                        <div class="animated rotateIn r-d badge-postn">
                            <a href="<?=$domain_affiliate_link;?>" target="_blank" alt="Contrib">
                                <img src="http://d2qcctj8epnr7y.cloudfront.net/images/2013/badge-contrib-3.png">
                            </a>
                        </div>
                    </div>
                    <div class="content-ad" style="text-align: justify;">
                        <div style="margin-top: -40px;" class="text-center">
                            <? if($logo!=''){ ?>
                            <a href="http://<?=$domain?>"><img src="<?=$logo?>" alt="<?=$title?>" title="<?=$domain?>" style="max-width:500px" border="0" /></a>
                            <? }else{ ?>
                            <h1><?=ucwords($domain)?></h1>
                            <? } ?>
                            <h4>Learn more about Joining our Partner Network</h4>
                        </div>
                        
                        <div class="padd-banner">
                            <h3 class="banner-header">Get <?=ucwords($domain)?> Banners and Make Money</h3>
                            <div class="banner-main">
                                <dl class="dl-horizontal banner-info">
                                    <dt>Marketing Group</dt><dd>Contrib</dd>
                                    <dt>Banner Size</dt><dd>150 x 150</dd>
                                    <dt>Banner Description</dt><dd>Proud member of Contrib Sticker</dd>
                                    <dt>Target URL</dt><dd>http://www.contrib.com</dd>
                                </dl>
                                <div class="tossing text-center banner-img-cont">
                                    <img src="http://referrals.contrib.com/banners/badge-contrib-2.png" />
                                </div>
                                <p class="text-center banner-source">Source Code - Copy/Paste Into Your Website</p>
                                <textarea class="text-left input-block-level" rows="3" onclick="this.focus();this.select()" readonly="readonly">
                                    <a href="http://referrals.contrib.com/idevaffiliate.php?id=<?=$domain_affiliate_id?>" target="_blank"><img style="border:0px" src="http://referrals.contrib.com/banners/badge-contrib-2.png" width="150" height="150" alt="Proud Member of Contrib" /></a>
                                </textarea>
                                
                            </div>
                            <div class="banner-main">
                                <dl class="dl-horizontal banner-info">
                                    <dt>Marketing Group</dt><dd>Contrib</dd>
                                    <dt>Banner Size</dt><dd>150 x 150</dd>
                                    <dt>Banner Description</dt><dd>Contrib Sticker 1</dd>
                                    <dt>Target URL</dt><dd>http://www.contrib.com</dd>
                                </dl>
                                
                                <div class="tossing text-center banner-img-cont">
                                    <img src="http://referrals.contrib.com/banners/badge-contrib-3.png" />
                                </div>
                                
                                <p class="text-center banner-source">Source Code - Copy/Paste Into Your Website</p>
                                <textarea class="text-left input-block-level" rows="3" onclick="this.focus();this.select()" readonly="readonly">
                                    <a href="http://referrals.contrib.com/idevaffiliate.php?id=<?=$domain_affiliate_id?>" target="_blank"><img style="border:0px" src="http://referrals.contrib.com/banners/badge-contrib-3.png" width="150" height="150" alt="Contrib"></a>
                                </textarea>
                            </div>
                            <div class="banner-main">
                                <dl class="dl-horizontal banner-info">
                                    <dt>Marketing Group</dt><dd>Contrib</dd>
                                    <dt>Banner Size</dt><dd>150 x 150</dd>
                                    <dt>Banner Description</dt><dd>I love Contrib Sticker</dd>
                                    <dt>Target URL</dt><dd>http://www.contrib.com</dd>
                                </dl>
                                
                                <div class="tossing text-center banner-img-cont">
                                    <img src="http://referrals.contrib.com/banners/badge-contrib-heart5.png" />
                                </div>
                                
                                <p class="text-center banner-source">Source Code - Copy/Paste Into Your Website</p>
                                <textarea class="text-left input-block-level" rows="3" onclick="this.focus();this.select()" readonly="readonly">
                                    <a href="http://referrals.contrib.com/idevaffiliate.php?id=<?=$domain_affiliate_id?>" target="_blank"><img style="border:0px" src="http://referrals.contrib.com/banners/badge-contrib-heart5.png" width="150" height="150" alt="I love Contrib"></a>
                                </textarea>
                            </div>
                            <div class="banner-main">
                                <dl class="dl-horizontal banner-info">
                                    <dt>Marketing Group</dt><dd>Contrib</dd>
                                    <dt>Banner Size</dt><dd>200 x 200</dd>
                                    <dt>Banner Description</dt><dd>Contrib Banner</dd>
                                    <dt>Target URL</dt><dd>http://www.contrib.com</dd>
                                </dl>
                                
                                <div class="floating text-center banner-img-cont">
                                    <img src="http://referrals.contrib.com/banners/ban-contrib-200x200-4.png" />
                                </div>
                                
                                <p class="text-center banner-source">Source Code - Copy/Paste Into Your Website</p>
                                <textarea class="text-left input-block-level" rows="3" onclick="this.focus();this.select()" readonly="readonly">
                                    <a href="http://referrals.contrib.com/idevaffiliate.php?id=<?=$domain_affiliate_id?>" target="_blank"><img style="border:0px" src="http://referrals.contrib.com/banners/ban-contrib-200x200-4.png" width="200" height="200" alt="Proud Member of Contrib"></a>
                                </textarea>
                            </div>
                            <div class="banner-main">
                                <dl class="dl-horizontal banner-info">
                                    <dt>Marketing Group</dt><dd>Contrib</dd>
                                    <dt>Banner Size</dt><dd>228 x 90</dd>
                                    <dt>Banner Description</dt><dd>Contrib Banner</dd>
                                    <dt>Target URL</dt><dd>http://www.contrib.com</dd>
                                </dl>
                                
                                <div class="floating text-center banner-img-cont">
                                    <img src="http://referrals.contrib.com/banners/ban-contrib-228x90-4.png" />
                                </div>
                                
                                <p class="text-center banner-source">Source Code - Copy/Paste Into Your Website</p>
                                <textarea class="text-left input-block-level" rows="3" onclick="this.focus();this.select()" readonly="readonly">
                                    <a href="http://referrals.contrib.com/idevaffiliate.php?id=1874_0_1_12" target="_blank"><img style="border:0px" src="http://referrals.contrib.com/banners/ban-contrib-228x90-4.png" width="228" height="90" alt="Proud Member of Contrib"></a>
                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--3rd section-->

<? include('footer.php'); ?>