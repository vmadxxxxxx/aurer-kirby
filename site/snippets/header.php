<!DOCTYPE html>
<html lang="en" <?= c::get('html-attr') ?>>
    <head>
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?= html($site->title()) ?> - <?= html($page->title()) ?></title>
		<meta name="description" content="<?= html($site->description()) ?>">
		<meta name="keywords" content="<?= html($site->keywords()) ?>" />
		<meta name="robots" content="index, follow" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?= css(asset_path('assets/dist/css', 'screen.css')) ?>
		<!--[if lt IE 9]>
			<?= css(asset_path('assets/dist/css', 'ie8.css')) ?>
            <script src="/assets/dist/js/html5shiv.min.js"></script>
        <![endif]-->
    </head>
    <body class="<?= snippet('body-class') ?>">
        
        <?= snippet('mast') ?>