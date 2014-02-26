<? include 'includes/config.php';?>
<? include 'includes/metatitle.php';?>

<!DOCTYPE html>
<html>
<head>
<link rel="canonical" href="http://<?=$domain?>/<?=basename($_SERVER['PHP_SELF'])?>/" />
<link rel="icon" type="image/icon" href="favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="index, follow" />
<title><?=$meta?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="title" content="<?=$meta?> " />
<meta name="description" content="<?=ucwords($domain)?> - <?=$meta_desc?>" />
<!--link rel="stylesheet" media="screen" type="text/css" href="css/bootstrap.min.css"/-->
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
<link rel="stylesheet" media="screen" type="text/css" href="css/custom-lead.css"/>
<link rel="stylesheet" media="screen" type="text/css" href="css/bootstrap-responsive.css"/>
<link href="js/jquery.counter-analog.css" media="screen" rel="stylesheet" type="text/css" />
<link href="js/jquery.counter-analog2.css" media="screen" rel="stylesheet" type="text/css" />
<style type="text/css">
<? if($background_image != ""){ ?>
	#wrap-lead-bckgrnd{ background: url(<?=$background_image?>);color: #A0A0A0;
<? }else{ ?>
	#wrap-lead-bckgrnd{ background: url('http://d2qcctj8epnr7y.cloudfront.net/sheina/contrib/lead_bg.jpg') no-repeat; }
<? } ?>
</style>
</head>
<body>