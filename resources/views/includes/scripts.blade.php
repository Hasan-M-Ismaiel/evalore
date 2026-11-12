<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<!-- for the FAQs -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<!-- for the navigation bar - the where to buy and contact us -->
<script>
    document.addEventListener('DOMContentLoaded', function() {

        function updateHashActive() {
            const currentHash = window.location.hash;

            if (!currentHash) return;

            const isHomePage =
                window.location.pathname === '/' ||
                window.location.pathname.endsWith('/index.php');

            if (!isHomePage) return;

            document.querySelectorAll('.evalore-nav-links > li > a')
                .forEach(function(link) {
                    link.classList.remove('active');

                    const linkUrl = new URL(link.href, window.location.origin);

                    if (linkUrl.pathname === window.location.pathname &&
                        linkUrl.hash === currentHash) {
                        link.classList.add('active');
                    }
                });
        }

        updateHashActive();

        window.addEventListener('hashchange', updateHashActive);
    });
</script>
