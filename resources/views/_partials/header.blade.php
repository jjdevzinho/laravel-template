<header class="bg-base-300 h-14 p-2">
    <nav class="container mx-auto px-2">
        <ul class="flex flex-row justify-between items-center content-center">
            <li class="flex gap-3 items-center">
                <button js-action="btnNavbarMain" aria-placeholder="menu"><i class="fas fa-bars text-xl hover:text-base-100"></i></button>
                <img src="https://img.superlistas.site/img/logo-site.png" alt="logo">
            </li>
            <li class="flex gap-3 items-center">
                <button aria-placeholder="theme" js-action="btnTheme"><i class="fas fa-search text-xl hover:text-base-100"></i></button>
                <button class="w-5 items-center">
                    <i class="change_themes fas fa-sun text-xl hover:text-base-100" data-theme="light"></i>
                    <i class="change_themes fas fa-moon text-xl hover:text-base-100" data-theme="dark" style="display: none;"></i>
                </button>
                <button aria-placeholder="menu-user"><i class="fas fa-user-ninja text-3xl hover:text-base-100"></i></button>
            </li>
        </ul>
    </nav>
    <div class="fixed top-0 left-0 w-screen h-14 p-2 bg-base-300 hidden" js-id="searchBox">
        <div class="container mx-auto flex justify-between items-center gap-3">
            <input type="search" placeholder="Buscar" id="inputSearch" class="flex-shrink w-full h-10 outline-none bg-base-200 px-2 py-1 rounded-md">
            <button aria-placeholder="close-search" js-action="closeSearch"><i class="flex-1 w-4 fas fa-times text-xl hover:text-danger"></i></button>
        </div>
    </div>
</header>

@push('scripts')
    <script>
        $('[js-action="btnSearch"]').click(function(){
            $('[js-id="searchBox"]').slideDown(300);
            $('#inputSearch').focus();
        });
        $('[js-action="closeSearch"]').click(function(){
            $('[js-id="searchBox"]').slideUp(300);
            $("body").focus();
        });
    </script>
@endpush
