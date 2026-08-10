<div id='search_box' class='hide_display'>
	<form id='avyaan-site-search-form' class='avyaan-site-search' role='search' action='https://www.google.com/search' method='get' target='_blank' data-site-domain='<?php echo htmlspecialchars($config['site_domain'], ENT_QUOTES, 'UTF-8'); ?>'>
		<label class='avyaan-site-search-label' for='avyaan-site-search-q'>Search this site</label>
		<input id='avyaan-site-search-q' class='avyaan-site-search-input' type='search' name='q' placeholder='Search Avyaan…' autocomplete='off' enterkeyhint='search'>
		<button class='avyaan-site-search-submit' type='submit'>Search</button>
	</form>
</div>
<script>
(function () {
	var form = document.getElementById('avyaan-site-search-form');
	if (!form || form.getAttribute('data-bound') === '1')
		return;
	form.setAttribute('data-bound', '1');
	form.addEventListener('submit', function (event) {
		event.preventDefault();
		var domain = form.getAttribute('data-site-domain') || '';
		var input = document.getElementById('avyaan-site-search-q');
		if (!input)
			return;
		var query = (input.value || '').trim();
		if (!query) {
			input.focus();
			return;
		}
		var googleQuery = domain ? ('site:' + domain + ' ' + query) : query;
		window.open('https://www.google.com/search?q=' + encodeURIComponent(googleQuery), '_blank', 'noopener');
	});
})();
</script>
