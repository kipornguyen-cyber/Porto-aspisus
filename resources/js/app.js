const menuButton = document.querySelector('[data-menu-toggle]');
const menu = document.querySelector('[data-menu]');

if (menuButton && menu) {
    menuButton.addEventListener('click', () => {
        const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';

        menuButton.setAttribute('aria-expanded', String(!isExpanded));
        menuButton.setAttribute('aria-label', isExpanded ? 'Buka menu navigasi' : 'Tutup menu navigasi');
        menu.dataset.open = String(!isExpanded);
    });

    menu.addEventListener('click', (event) => {
        if (event.target instanceof HTMLAnchorElement && window.matchMedia('(max-width: 767px)').matches) {
            menuButton.setAttribute('aria-expanded', 'false');
            menuButton.setAttribute('aria-label', 'Buka menu navigasi');
            delete menu.dataset.open;
        }
    });

    window.addEventListener('resize', () => {
        if (window.matchMedia('(min-width: 768px)').matches) {
            menuButton.setAttribute('aria-expanded', 'false');
            menuButton.setAttribute('aria-label', 'Buka menu navigasi');
            delete menu.dataset.open;
        }
    });
}
