// Subtle prefers-reduced-motion respect
if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    document.querySelectorAll('.pulse').forEach(n => n.style.animation = 'none');
}

// Delegate clicks for elements that want to scroll to a target id
// Uses data-scroll-target="element-id" on the trigger element.
(function () {
    const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    document.addEventListener('click', function (e) {
        const btn = e.target.closest && e.target.closest('[data-scroll-target]');
        if (!btn) return;
        const targetId = btn.getAttribute('data-scroll-target');
        if (!targetId) return;

        const target = document.getElementById(targetId);
        if (!target) return;

        // Prevent default if button is inside a form or anchor
        e.preventDefault();

        // Choose behavior based on reduced motion preference
        const behavior = prefersReduced ? 'auto' : 'smooth';
        target.scrollIntoView({ behavior });
    });
})();
