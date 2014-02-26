<? include('header.php'); ?>
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
<div style="position:relative;">
    <div class="animated rotateIn r-d badge-postn">
        <a href="<?=$domain_affiliate_link;?>" target="_blank" alt="Contrib">
            <img src="http://d2qcctj8epnr7y.cloudfront.net/images/2013/badge-contrib-3.png">
        </a>
    </div>
</div>
<div class="container-fluid lead-reset-padd">
    <div class="row-fluid">
        <div id="wrap-lead-bckgrnd">
            <div class="content">
                <? if($logo!=''){ ?>
                <a href="http://<?=$domain?>"><img class="img-domain" src="<?=$logo?>" alt="<?=$title?>" title="<?=$domain?>"/></a>					
                <? }else{ ?>
                <h1><?=ucwords($domain)?></h1>
                <? } ?>
                <h2>
					<br><br>
                    <? if(str_replace(' ','',$top_description)!=''){
						echo $top_description;
					}else if(str_replace(' ','',$description)!=''){
						echo $description;
					}else{
						echo 'Learn more about Joining our Partner Network.';
					} ?>
                </h2>
                <div class="row-fluid" id="leadcontent">
                    <form class="form-inline" id="leadform" style="margin: 0;">
                        <div class="wrap-email-input">
                            <div class="input-append email-glow control-group success">							
                                <input class="input-xlarge input-lg" id="email" type="text" placeholder="email@yahoo.com" style="width: 325px;">
                                <input type="hidden" id="refid" value="0">
                                <input type="hidden" id="domain" value="<?php echo $domain?>">
                                <input type="hidden" id="user_ip" value="<?php echo $_SERVER['REMOTE_ADDR']?>">
                                <button class="btn btn-danger btn-lg" id="submitLead" type="button">Join Now!</button>							
                            </div>
                            <div class="arrw-rela hidden-phone">
                                <div class="arrw-point-white">
                                    
                                </div>
                            </div>
                        </div>
                    </form>	
                </div>
                <div class="row-fluid">
                    <div id="social">
                        <table style="border:0px;width: 350px;margin: 0 auto;">
                            <tr>
                                <td valign='top' style='width:15%;'>
                                    <script src="http://platform.linkedin.com/in.js" type="text/javascript"></script>
                                    <script type="IN/Share" data-url="http://www.linked.com"></script>
                                </td>
                                <td valign='top' style='width:85%;'>
                                    
                                    <!-- AddThis Button BEGIN -->
                                    <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                                        <a class="addthis_button_preferred_1"></a>
                                        <a class="addthis_button_preferred_2"></a>
                                        <a class="addthis_button_preferred_3"></a>
                                        <a class="addthis_button_preferred_4"></a>
                                        <a class="addthis_button_compact"></a>
                                        <a class="addthis_counter addthis_bubble_style"></a>
                                    </div>
                                    <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
                                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-517895f814f07260"></script>
                                    <!-- AddThis Button END -->
                                </td>    
                            </tr>
                        </table>
                    </div>
                </div>
                <center style="margin: 15px 30px 20px 30px;">
                    <span class="counter counter-analog" data-direction="up" data-interval="1" data-format="9999999" data-stop="<?=$follow_count?>">
                        <span class="part part0">
                            <?
							$count = 7;
							$digits = strlen($follow_count);
							$splittedString = str_split($follow_count);
							for($i=$count; $i>0; $i--){
								if($i==$digits){
									for($j=0;$j<$digits;$j++){						
										echo '<span class="digit digit'.$splittedString[$j].'"></span>';
									}	
									break;					
								}else{
									echo '<span class="digit digit0"></span>';
								}
							}
                            ?>
                        </span>	
                    </span>
                </center>
            </div>
            
            
        </div>
    </div>
</div>
<div class="container">
    <div class="row-fluid text-center lead-ttle-top">
        <h1 class="brdr-lead">
            <?=ucwords($domain)?> Opportunity 
        </h1>
    </div>
    <div class="row-fluid">
        <div class="span4 well">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#news" data-toggle="tab">News</a></li>
                <li><a href="#people" data-toggle="tab">People</a></li>
                <li><a href="#jobs" data-toggle="tab">Jobs</a></li>
                <!--li><a href="#eservices" data-toggle="tab">e-Services</a></li-->
            </ul>
            
            <div class="tab-content">
                <div class="tab-pane active" id="news">
					<div style="height:300px"><script type="text/javascript" src="http://contrib.com/widgets?ma=micronews&dn=<?echo $domain?>"></script></div>
				</div>
                <div class="tab-pane" id="people"><script type="text/javascript" src="http://www.contrib.com/widgets?ma=users"></script></div>
                <div class="tab-pane" id="jobs"><script type="text/javascript" src="http://www.contrib.com/widgets?ma=jobs"></script></div>
                <!--div class="tab-pane" id="eservices"><script type="text/javascript" src="http://www.contrib.com/widgets?ma=eservices"></script></div-->
            </div>
            
            <script>
                $(function () {
                    $('#myTab').tab();
                })
            </script>
            
            
        </div>
        
        <div class="span7">
            <br /><br />
            <div class="row-fluid">
                <div class="span4 features">
                    <div class="media"><a class="pull-left" href="http://www.contrib.com/signup/follow/<?=ucwords($domain)?>" target="_blank">
                        <img class="media-object img-phone" src="http://d2qcctj8epnr7y.cloudfront.net/images/2013/icon-50x50-contrib-market2.png" alt="Marketplace" style="padding-bottom: 40px;"></a>
                        <h4 class="media-heading">Contrib Marketplace </h4>
                        <p>Browse Jobs, Ideas and Micro Tasks.</p></div> 
                </div>
                <div class="span4 features">
                    <div class="media">
                        <a class="pull-left" href="http://www.contrib.com/signup/follow/<?=ucwords($domain)?>" target="_blank">
                            <img class="media-object img-phone" alt="Contribute" src="http://d2qcctj8epnr7y.cloudfront.net/images/2013/icon-50x50-contrib-contribute2.png" style="padding-bottom: 40px;">
                        </a>
                        <h4 class="media-heading">Contribute</h4>
                        <p>Contribute using your skills, services, apps and/or capital.
                        </p>
                    </div>
                </div>
                <div class="span4 features">
                    <div class="media">
                        <a class="pull-left" href="http://www.contrib.com/signup/follow/<?=ucwords($domain)?>" target="_blank">
                            <img class="media-object img-phone" alt="Make Money through Contribution" src="http://d2qcctj8epnr7y.cloudfront.net/images/2013/icon-50x50-contrib-money2.png" style="padding-bottom: 40px;">
                        </a>
                        <h4 class="media-heading">Earn Equity</h4>
                        <p>Get equity for your hard work and be the next success story!</p>
                    </div>
                </div>
            </div>            
            <div class="clearfix"></div>
            <br />      
            <p class="p-desc p-phone">
                We envision people around the world with complementary skills, passion, time and resources coworking 
                online with targeted premium assets just like <?=ucwords($domain)?>. </p> 
            
        </div>
    </div>  
    
</div>
<div class="container-fluid" style="background:none repeat scroll 0 0 #F2F2F2;margin-top: 50px;">
    <div class="row-fluid">	
        <div class="row-fluid featre-scroll">
            <div class="absolute-scroll">
                <h3 style="text-align: center;margin: 30px 0 5px;">Follow, Build, and Help Launch<i>!</i></h3>
                <p>
                    <b>Follow <?=ucwords($domain)?></b> and other great ventures on the Contrib platform.
                    <br><br>
                    <b>Build <?=ucwords($domain)?></b> and Help cofound a relevant new Startup, Part-Time.
                    <br><br>
                    <b>Launch <?=ucwords($domain)?></b> and you could be front and center in the process. Launch <?=ucwords($domain)?> with us today!
                </p>
                <p class="text-center">
                    <a href="http://contrib.com/brand/details/<?=$domain?>" target="_blank" class="btn btn-primary btn-large phne-s1">
                        Learn about <?=ucwords($domain)?>
                    </a>
                </p>
            </div>
        </div>
        <div class="row-fluid">
            <div class="wrap-hori-scroll">
                <div class="als-container" id="demo3">
                    <div class="als-viewport">
                        <ul class="als-wrapper">
                            <li class="als-item"><a href="http://applications.net" target="_blank"><img src="http://www.contrib.com/images/footer_images/applicationsnet.png" alt="applications.net" title="applications.net" /></a></li>
                            <li class="als-item"><a href="http://consultants.com" target="_blank"><img src="http://www.contrib.com/images/footer_images/consultants.png" alt="consultants.com" title="consultants.com" /></a></li>
                            <li class="als-item"><a href="http://globalventures.com" target="_blank"><img src="http://www.contrib.com/images/footer_images/globalventures.png" alt="globalventures.com" title="globalventures.com" /></a></li>
                            <li class="als-item"><a href="http://photostream.com" target="_blank"><img src="http://www.contrib.com/images/footer_images/photostream.png" alt="photostream.com" title="photostream.com" /></a></li>
                            <li class="als-item"><a href="http://referrals.com" target="_blank"><img src="http://www.contrib.com/images/footer_images/referrals.png" alt="referrals.com" title="referrals.com" /></a></li>
                            <li class="als-item"><a href="http://venturecamp.com" target="_blank"><img src="http://www.contrib.com/images/footer_images/venturecamp.png" alt="venturecamp.com" title="venturecamp.com" /></a></li>
                            <li class="als-item"><a href="http://virtualinterns.com" target="_blank"><img src="http://www.contrib.com/images/footer_images/virtualinterns.png" alt="virtualinterns.com" title="virtualinterns.com" /></a></li>
                            <li class="als-item"><a href="http://wellnesschallenge.com" target="_blank"><img src="http://www.contrib.com/images/footer_images/wellnesschallenge.png" alt="wellnesschallenge.com" title="wellnesschallenge.com" /></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--Scrolling-->
<div class="container" style="background:none repeat scroll 0 0 #fff;">
    <div class="row-fluid text-center lead-ttle-top">
        <h1 class="brdr-lead">
            <?=ucwords($domain)?> Team
        </h1>
    </div>
    <p class="p-desc">
        <?=ucwords($domain)?> is a bit different than most startups.  We are small, diverse team working remotely and loving what we do.  We only cowork with others who also have this same passion.
        <br><br>
        <?=ucwords($domain)?> seeks to contract and hire the best people and then trust them: it's the thinking behind the work at their own time policy. 
        <br><br>
        The <?=ucwords($domain)?> team loves building things and focus on being the most productive individual, not the amount of time spent in the office. We put a lot of effort into making <?=ucwords($domain)?> a fun place to work for people who like getting things done. So if you're game with this then enter your email address and be a part of the global team.
    </p>

</div><!--2nd section-->

<div class="container-fluid lead-reset-padd"  style="background: url(/img/bg-socialholdings.jpg) repeat;">
    <div class="row-fluid">
        <div class="wrap-ad" style="background: none repeat scroll 0 0 rgba(0, 0, 0, 0.8);">
            <div class="container overflow-ad">
                <div class="row-fluid">
                    <div class="content-ad">
                        <div class="section-heading-ttle text-left">
                            <a name="top"></a>
                            <h2 style="padding-left:0;"><span id="_title">About</span> <?=ucwords($domain)?></h2>							
                        </div>
                        <div class="row-fluid">
                            <div class="span12">
                                <div id="non_terms">
                                    <div class="span4">
                                        <!-- about --><img id="l_about" class="ad-img" src="http://d2qcctj8epnr7y.cloudfront.net/images/marvinpogi/logo-ecorp2.png" style="margin: 30px 0 0 -50px;"/>
                                        
                                        <!-- contact --><iframe id="l_contactus" src="http://domaindirectory.com/servicepage/contactus2_form.php?domain=<?=$domain?>" frameborder="0" scrolling="no" style="display:none;width: 350px;background: whitesmoke;height: 500px;padding: 15px 0 0 15px;border-radius: 5px;margin-top: 30px;"></iframe>
                                        
                                        <!-- partner --><iframe id="l_partner" src="http://domaindirectory.com/servicepage/partners_form.php?domain=<?=$domain?>" frameborder="0" scrolling="no" style="display:none;width:350px;height:435px;border: none;background: whitesmoke;border-radius: 5px;margin-top: 30px;"></iframe>
                                        
                                        <!-- apply --><iframe id="l_apply" src="http://domaindirectory.com/servicepage/staffing_form.php?domain=<?=$domain?>" frameborder="0" scrolling="no" style="display:none;width:350px;height:470px;border:none;background: whitesmoke;border-radius: 5px;margin-top: 30px;"></iframe>
                                    </div>
                                    <div class="span7">
                                        <div id="r_about">
                                            <p class="p-desc stripe-text right text-left">
                                                <span class="p-intro"><?=ucwords($domain)?></span>
                                                Platform is part of the Global Ventures Network.											
                                                
                                                <?//=$description?> 
                                                <br>
                                                <br>
                                                Founded in 1996, Global Ventures is the worlds largest virtual Domain Development Incubator on the planet.
                                                <br>
                                                <br>
                                                We create and match great domain platforms with talented people, applications and resources to build successful, value driven, web-based businesses. Join the fastest growing Virtual Business Network and earn Equity and Cowork with other great people making a difference.
                                            </p>
                                            <br />
                                            <p class="p-desc stripe-text left text-left">
                                                <a href="http://globalventures.com" target="_blank" class="btn btn-primary btn-large">
                                                    Learn about this site
                                                </a>
                                            </p>
                                        </div>
                                        <div id="r_apply" style="display:none;margin-left:50px;">
                                            <p class="p-desc stripe-text right text-left">
                                                <br>
                                                <br>
                                                <br>
                                                We are looking for the best of the best, Full-Time, Part-Time, Moonlighting, Contractual and Freelance.
                                                <br>
                                                <br>										
                                                We consult and manage over 100,000 domain name ventures and are always seeking Strategic Partnerships, Applications, Domains, Engineers, Developers, Specialist and just cool smart people around the Globe. Learn more about openings and opportunities with our partner companies and send us your resume or examples to accelerate the process.
                                                <br>
                                                <br>
                                                Learn more about openings and opportunities with our partner companies.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div id="f_terms" style="display:none;text-align: left;">
                                    <?include('terms-content.php')?>
                                </div>
                                <div id="f_privacy" style="display:none;text-align: left;">
                                    <?include('privacy-content.php')?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--3rd section-->

<? include('footer.php'); ?>