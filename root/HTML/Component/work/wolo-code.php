<?php
$caseTitle = 'Wolo Code';
$caseLead = 'Three-word addressing so any point on the map stays precise, memorable, and human-friendly.';
$caseTags = array('Mobile', 'Platforms');
$caseLogo = 'Wolo_Logo-Full.svg';
$caseExternal = array('href' => 'https://wolo.codes/about', 'label' => 'wolo.codes');
$caseSections = array(
	array(
		'h' => 'The challenge',
		'p' => 'Street addresses are ambiguous and GPS coordinates are hard to share. People need a short, spoken form that still resolves to an exact location across cities and devices.'
	),
	array(
		'h' => 'What we built',
		'p' => 'Wolo Code turns map coordinates into three-word codes and back again. The platform spans Android, web, and cloud tooling so search, generation, and decoding stay consistent everywhere people need an address.'
	),
	array(
		'h' => 'Outcome',
		'p' => 'Users can share a precise location with three simple words — useful for deliveries, meetups, and any workflow where a traditional address falls short.'
	),
);
require __DIR__ . '/_layout.php';
