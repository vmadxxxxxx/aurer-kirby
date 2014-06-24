<section class="foot">
	<footer class="row">
		<span class="copyright">
			<?= kirbytext($site->copyright()) ?>
		</span>
		<nav class="extra">
			<?php foreach ($pages->invisible() as $p): ?>
				<?php if(in_array($p->uri(), array('error'))) continue ?>
				<a href="<?= $p->url() ?>"><?= $p->title() ?></a>
			<?php endforeach ?>
		</nav>
	</footer>
</section>
<?= js(asset_path('assets/dist/js', 'build.js')) ?>
<script defer>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-31871536-1');ga('send','pageview');
</script>
