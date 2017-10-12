<?php
	use EddTurtle\DirectUpload\Signature;

	require_once __DIR__ . "/vendor/autoload.php";

	$opt = array('acl' => 'public-read-write');

	$upload = new Signature(
	    "YOUR_S3_KEY",
	    "YOUR_S3_SECRET",
	    "YOUR_S3_BUCKET",
	    "eu-west-1",
	    $opts
	);

	echo json_encode([
		'signature' => $upload->getFormInputs(),
		'postEndpoint' => $upload->getFormUrl()
	]);
