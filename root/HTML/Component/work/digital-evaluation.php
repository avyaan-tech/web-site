<?php
$caseTitle = 'Digital Evaluation Platform';
$caseLead = 'OCR, ICR, and OMR pipelines that automate answersheet processing at exam scale.';
$caseTags = array('AI', 'Platforms');
$caseIcon = 'data_platform';
$caseSections = array(
	array(
		'h' => 'The challenge',
		'p' => 'High-volume exams generate mountains of paper that traditional scanning and manual marking cannot process quickly or consistently.'
	),
	array(
		'h' => 'What we built',
		'p' => 'Pipelines using OpenCV, AWS Textract, and AWS Lambda to automate OCR, ICR, and OMR extraction and downstream evaluation processing.'
	),
	array(
		'h' => 'Outcome',
		'p' => 'Dramatically reduced manual handling and a scalable path from scanned sheets to structured evaluation data.'
	),
);
require __DIR__ . '/_layout.php';
