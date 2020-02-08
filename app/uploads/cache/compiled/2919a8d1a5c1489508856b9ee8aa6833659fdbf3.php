<!doctype html>
<html <?php (language_attributes()); ?>>
<?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body <?php (body_class()); ?>>
<?php (do_action('get_header')); ?>
<?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="wrap" role="document">
	<main class="main">
		<?php echo $__env->yieldContent('content'); ?>
	</main>
	<?php if(App\display_sidebar()): ?>
		<aside class="sidebar">
			<?php echo $__env->make('partials.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</aside>
	<?php endif; ?>
</div>
<?php (do_action('get_footer')); ?>
<?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php (wp_footer()); ?>


<script type="text/javascript">
	(function(c,a){if(!a.__SV){var b=window;try{var d,m,j,k=b.location,f=k.hash;d=function(a,b){return(m=a.match(RegExp(b+"=([^&]*)")))?m[1]:null};f&&d(f,"state")&&(j=JSON.parse(decodeURIComponent(d(f,"state"))),"mpeditor"===j.action&&(b.sessionStorage.setItem("_mpcehash",f),history.replaceState(j.desiredHash||"",c.title,k.pathname+k.search)))}catch(n){}var l,h;window.mixpanel=a;a._i=[];a.init=function(b,d,g){function c(b,i){var a=i.split(".");2==a.length&&(b=b[a[0]],i=a[1]);b[i]=function(){b.push([i].concat(Array.prototype.slice.call(arguments,
			0)))}}var e=a;"undefined"!==typeof g?e=a[g]=[]:g="mixpanel";e.people=e.people||[];e.toString=function(b){var a="mixpanel";"mixpanel"!==g&&(a+="."+g);b||(a+=" (stub)");return a};e.people.toString=function(){return e.toString(1)+".people (stub)"};l="disable time_event track track_pageview track_links track_forms track_with_groups add_group set_group remove_group register register_once alias unregister identify name_tag set_config reset opt_in_tracking opt_out_tracking has_opted_in_tracking has_opted_out_tracking clear_opt_in_out_tracking people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user people.remove".split(" ");
		for(h=0;h<l.length;h++)c(e,l[h]);var f="set set_once union unset remove delete".split(" ");e.get_group=function(){function a(c){b[c]=function(){call2_args=arguments;call2=[c].concat(Array.prototype.slice.call(call2_args,0));e.push([d,call2])}}for(var b={},d=["get_group"].concat(Array.prototype.slice.call(arguments,0)),c=0;c<f.length;c++)a(f[c]);return b};a._i.push([b,d,g])};a.__SV=1.2;b=c.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?
			MIXPANEL_CUSTOM_LIB_URL:"file:"===c.location.protocol&&"//cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js";d=c.getElementsByTagName("script")[0];d.parentNode.insertBefore(b,d)}})(document,window.mixpanel||[]);
	mixpanel.init("e71dd6803ee2e2b9c11fae515d14b52b", {track_pageview: true} );
</script>


<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window, document,'script',
			'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '407955846439374');
	fbq('track', 'PageView');
</script>
<noscript>
	<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=407955846439374&ev=PageView&noscript=1(44 B)
		https://www.facebook.com/tr?id=407955846439374&ev=PageView&noscript=1" />
</noscript>


<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131551736-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'UA-131551736-1');
</script>
<script>
	(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
				new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-WR5VL7H');
</script>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WR5VL7H" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>


<script data-ad-client="pub-7279366498107915" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

</body>
</html>
