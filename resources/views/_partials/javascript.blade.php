{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/zepto/1.2.0/zepto.min.js" integrity="sha512-BrvVYNhKh6yST24E5DY/LopLO5d+8KYmIXyrpBIJ2PK+CyyJw/cLSG/BfJomWLC1IblNrmiJWGlrGueKLd/Ekw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- <script src="{{ mix('js/app.js') }}"></script> --}}
<script>
    $('docment').ready(function() {
        if (localStorage.getItem('theme') === 'light') {
            $('.fa-sun').hide();
            $('.fa-moon').show();
            $('html').removeClass("theme-dark");
            $('html').addClass("theme-light");
        } else {
            $('.fa-sun').show();
            $('.fa-moon').hide();
        }
    });

    $('.change_themes').click(function() {
        let theme = $(this).attr('data-theme');
        localStorage.setItem('theme', theme);
        if (theme === 'dark') {
            $('html').removeClass("theme-light");
            $('html').addClass("theme-dark");
            $('.fa-moon').hide();
            $('.fa-sun').show();
        } else {
            $('html').removeClass("theme-dark");
            $('html').addClass("theme-light");
            $('.fa-sun').hide();
            $('.fa-moon').show();
        }

    });

    $('#menuToggle, .dropdown-content').click(function() {
        $('.dropdown-content').toggleClass('hidden');
    });
</script>
@stack('scripts')
