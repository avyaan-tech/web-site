<?php
$caseTitle = 'WCode';
$caseLead = 'Word-based encoding and secure data exchange that pairs human readability with cryptographic rigour.';
$caseTags = array('Platforms', 'Security');
$caseLogo = 'WCode_Logo-Full.svg';
$caseExternal = array('href' => 'https://wcodes.org', 'label' => 'wcodes.org');
$caseSections = array(
	array(
		'h' => 'The challenge',
		'p' => 'Binary payloads and opaque codes are hard for people to communicate. Teams needed encoding that stays speakable and shareable without sacrificing security.'
	),
	array(
		'h' => 'What we built',
		'p' => 'WCode provides word-based encoding workflows for secure data exchange, published at wcodes.org, so humans can read and relay encoded values reliably.'
	),
	array(
		'h' => 'Outcome',
		'p' => 'A practical encoding layer for products and protocols where human transmission of structured data matters as much as machine precision.'
	),
);
require __DIR__ . '/_layout.php';
