<?php 
if(!isset($title)){$title = 'Portofolio Site';}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-166968526-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-166968526-1');
	</script>
	<!---------------- -->
	
	<!-- 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
	 -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
	
	<script src="<?php echo base_url('assets/js/jquery-3.4.1.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/script.js');?>"></script>
	
	<title><?php echo $title;?></title>
</head>
<!----------------------------------------------------------------------------->
<body>
<!---Header--------------->
<div class="container">
	<header class="">
		<!---Menu--------------->
		<?php $this->load->view('layouts/nav');?>
	</header>
	<?php $this->load->view('layouts/statusMessage'); ?>
<!----------------------------------------------------------------------------->
<!----------------------------------------------------------------------------->