<html>
<head>
  <meta charset="UTF-8">
  <title>Lonely Globe Advisor</title>
</head>
<body>
  <h1>Top Hotels in Rome <?php echo base_url() ?></h1>
  <ol>
    <li>Villa Domus - Via Piacenza 9, Rome, Italy</li>
    <li>Hotel Trivelli - Piazza Barberini 11, Rome, Italy</li>
  </ol>
</body>
</html>
<script src="https://www.talater.com/upup/upup.min.js"></script>
<script>
	UpUp.start({
		'cache-version' : 'v2',

		'content-url': '<?php base_url($this->uri->segment(1)) ?>',
		'content':'Cannot reach site',
		'service-worker-url':'/upup.sw.min.js'
	});
</script>