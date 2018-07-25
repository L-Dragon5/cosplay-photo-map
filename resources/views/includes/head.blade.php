<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="Joseph Oh">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">

<link href="/css/app.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="image/x-icon" href="/favicon.ico">

<script type='text/javascript'>
	window.Laravel = <?php echo json_encode([
		'csrfToken' => csrf_token(),
	]); ?>
</script>