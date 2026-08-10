<?php
$caseTitle = 'AI Evaluation Platform';
$caseLead = 'Fully automated handwritten answersheet evaluation using modern NLP and serverless pipelines.';
$caseTags = array('AI', 'Consulting');
$caseIcon = 'customer_chat';
$caseSections = array(
	array(
		'h' => 'The challenge',
		'p' => 'Manual evaluation of handwritten answersheets is slow, inconsistent, and hard to scale across large exam volumes.'
	),
	array(
		'h' => 'What we built',
		'p' => 'AI evaluation pipelines using LangChain, Hugging Face models, and AWS Lambda to score and process handwritten responses end to end.'
	),
	array(
		'h' => 'Outcome',
		'p' => 'Near-complete automation of answersheet evaluation with faster turnaround and a foundation for continuous model improvement.'
	),
);
require __DIR__ . '/_layout.php';
