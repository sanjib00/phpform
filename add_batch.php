<?php
$batch = $_POST['batch_name'];
	
	if (strlen($batch) < 4)
	{
		header('location: add_batch.php?len=short');
	}
	
	elseif(strlen($batch) > 6)
	{
		header('location: add_batch.php?len=long');
	}
	?>