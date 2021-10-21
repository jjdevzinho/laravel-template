@extends('styles.tailwindcss')
@section('title', 'Bem vindo a Home')
@section('description', 'Pagina inicial do site de teste para templates no laravel')
@section('content')


    <h1 class="text-2xl mb-8 font-thin">Lista de Catálogos</h1>
    <div class="grid grid-cols-2 xs:grid-cols-2 sm:grid-cols-3 md:grid-cols-4 xl:grid-cols-5 gap-3 lg:gap-6">
        <div class="bg-base-100 rounded-lg">
            <figure>
                <a class="text-primary" href="http://supernerds.test/mangas/588203265" title="Tennis no Ouji-sama">
                    <img class="object-cover w-full rounded-t-lg"
                        src="https://img.superlistas.site/img/animes/62839-large.jpg" width="280" height="400"
                        alt="Tennis no Ouji-sama">
                </a>
            </figure>

            <h2 class="p-2 capitalize flex items-center text-xl font-thin overflow-ellipsis overflow-hidden h-16 ">
                <a class="text-primary" href="http://supernerds.test/mangas/588203265" title="Tennis no Ouji-sama">Tennis
                    no Ouji-sama</a>
            </h2>

            <div class="p-2 capitalize font-thin border-t-2 border-base-300">
                <a class="text-accent" href="http://supernerds.test/mangas" title="Tennis no Ouji-sama">
                    manga
                </a>
            </div>

        </div>
        <div class="bg-base-100 rounded-lg">
            <figure>
                <a class="text-primary" href="http://supernerds.test/mangas/355816965"
                    title="Koko ga Uwasa no El Palacio">
                    <img class="object-cover w-full rounded-t-lg"
                        src="https://img.superlistas.site/img/animes/62774-large.jpg" width="280" height="400"
                        alt="Koko ga Uwasa no El Palacio">
                </a>
            </figure>

            <h2 class="p-2 capitalize flex items-center text-xl font-thin overflow-ellipsis overflow-hidden h-16 ">
                <a class="text-primary" href="http://supernerds.test/mangas/355816965"
                    title="Koko ga Uwasa no El Palacio">Koko ga Uwasa no El Palacio</a>
            </h2>

            <div class="p-2 capitalize font-thin border-t-2 border-base-300">
                <a class="text-accent" href="http://supernerds.test/mangas" title="Koko ga Uwasa no El Palacio">
                    manga
                </a>
            </div>

        </div>
        <div class="bg-base-100 rounded-lg">
            <figure>
                <a class="text-primary" href="http://supernerds.test/light-novels/500281606"
                    title="Kekkai Sensen: Only a Paper Moon">
                    <img class="object-cover w-full rounded-t-lg"
                        src="https://img.superlistas.site/img/animes/62899-large.jpg" width="280" height="400"
                        alt="Kekkai Sensen: Only a Paper Moon">
                </a>
            </figure>

            <h2 class="p-2 capitalize flex items-center text-xl font-thin overflow-ellipsis overflow-hidden h-16 ">
                <a class="text-primary" href="http://supernerds.test/light-novels/500281606"
                    title="Kekkai Sensen: Only a Paper Moon">Kekkai Sensen: Only a Paper Moon</a>
            </h2>

            <div class="p-2 capitalize font-thin border-t-2 border-base-300">
                <a class="text-accent" href="http://supernerds.test/light-novels"
                    title="Kekkai Sensen: Only a Paper Moon">
                    light novel
                </a>
            </div>

        </div>
        <div class="bg-base-100 rounded-lg">
            <figure>
                <a class="text-primary" href="http://supernerds.test/manhwas/999752456" title="Enoch">
                    <img class="object-cover w-full rounded-t-lg"
                        src="https://img.superlistas.site/img/animes/62790-large.jpg" width="280" height="400" alt="Enoch">
                </a>
            </figure>

            <h2 class="p-2 capitalize flex items-center text-xl font-thin overflow-ellipsis overflow-hidden h-16 ">
                <a class="text-primary" href="http://supernerds.test/manhwas/999752456" title="Enoch">Enoch</a>
            </h2>

            <div class="p-2 capitalize font-thin border-t-2 border-base-300">
                <a class="text-accent" href="http://supernerds.test/manhwas" title="Enoch">
                    manhwa
                </a>
            </div>

        </div>
        <div class="bg-base-100 rounded-lg">
            <figure>
                <a class="text-primary" href="http://supernerds.test/mangas/895815438" title="Kamen Rider Kuuga">
                    <img class="object-cover w-full rounded-t-lg"
                        src="https://img.superlistas.site/img/animes/62940-large.jpg" width="280" height="400"
                        alt="Kamen Rider Kuuga">
                </a>
            </figure>

            <h2 class="p-2 capitalize flex items-center text-xl font-thin overflow-ellipsis overflow-hidden h-16 ">
                <a class="text-primary" href="http://supernerds.test/mangas/895815438" title="Kamen Rider Kuuga">Kamen
                    Rider Kuuga</a>
            </h2>

            <div class="p-2 capitalize font-thin border-t-2 border-base-300">
                <a class="text-accent" href="http://supernerds.test/mangas" title="Kamen Rider Kuuga">
                    manga
                </a>
            </div>

        </div>
        <div class="bg-base-100 rounded-lg">
            <figure>
                <a class="text-primary" href="http://supernerds.test/animes/690329617" title="Oda Cinnamon Nobunaga">
                    <img class="object-cover w-full rounded-t-lg"
                        src="https://img.superlistas.site/img/animes/62846-large.jpg" width="280" height="400"
                        alt="Oda Cinnamon Nobunaga">
                </a>
            </figure>

            <h2 class="p-2 capitalize flex items-center text-xl font-thin overflow-ellipsis overflow-hidden h-16 ">
                <a class="text-primary" href="http://supernerds.test/animes/690329617" title="Oda Cinnamon Nobunaga">Oda
                    Cinnamon Nobunaga</a>
            </h2>

            <div class="p-2 capitalize font-thin border-t-2 border-base-300">
                <a class="text-accent" href="http://supernerds.test/animes" title="Oda Cinnamon Nobunaga">
                    anime
                </a>
            </div>

        </div>
        <div class="bg-base-100 rounded-lg">
            <figure>
                <a class="text-primary" href="http://supernerds.test/animes/166650897" title="Sengoku Night Blood">
                    <img class="object-cover w-full rounded-t-lg"
                        src="https://img.superlistas.site/img/animes/62967-large.jpg" width="280" height="400"
                        alt="Sengoku Night Blood">
                </a>
            </figure>

            <h2 class="p-2 capitalize flex items-center text-xl font-thin overflow-ellipsis overflow-hidden h-16 ">
                <a class="text-primary" href="http://supernerds.test/animes/166650897" title="Sengoku Night Blood">Sengoku
                    Night Blood</a>
            </h2>

            <div class="p-2 capitalize font-thin border-t-2 border-base-300">
                <a class="text-accent" href="http://supernerds.test/animes" title="Sengoku Night Blood">
                    anime
                </a>
            </div>

        </div>
        <div class="bg-base-100 rounded-lg">
            <figure>
                <a class="text-primary" href="http://supernerds.test/mangas/659167766" title="Hoshi Furu Makiba!">
                    <img class="object-cover w-full rounded-t-lg"
                        src="https://img.superlistas.site/img/animes/62998-large.jpg" width="280" height="400"
                        alt="Hoshi Furu Makiba!">
                </a>
            </figure>

            <h2 class="p-2 capitalize flex items-center text-xl font-thin overflow-ellipsis overflow-hidden h-16 ">
                <a class="text-primary" href="http://supernerds.test/mangas/659167766" title="Hoshi Furu Makiba!">Hoshi
                    Furu Makiba!</a>
            </h2>

            <div class="p-2 capitalize font-thin border-t-2 border-base-300">
                <a class="text-accent" href="http://supernerds.test/mangas" title="Hoshi Furu Makiba!">
                    manga
                </a>
            </div>

        </div>
        <div class="bg-base-100 rounded-lg">
            <figure>
                <a class="text-primary" href="http://supernerds.test/mangas/898785046" title="Cerberus">
                    <img class="object-cover w-full rounded-t-lg"
                        src="https://img.superlistas.site/img/animes/62935-large.jpg" width="280" height="400"
                        alt="Cerberus">
                </a>
            </figure>

            <h2 class="p-2 capitalize flex items-center text-xl font-thin overflow-ellipsis overflow-hidden h-16 ">
                <a class="text-primary" href="http://supernerds.test/mangas/898785046" title="Cerberus">Cerberus</a>
            </h2>

            <div class="p-2 capitalize font-thin border-t-2 border-base-300">
                <a class="text-accent" href="http://supernerds.test/mangas" title="Cerberus">
                    manga
                </a>
            </div>

        </div>
        <div class="bg-base-100 rounded-lg">
            <figure>
                <a class="text-primary" href="http://supernerds.test/filmes/953953561"
                    title="Psycho-Pass 3: First Inspector">
                    <img class="object-cover w-full rounded-t-lg"
                        src="https://img.superlistas.site/img/animes/62984-large.jpg" width="280" height="400"
                        alt="Psycho-Pass 3: First Inspector">
                </a>
            </figure>

            <h2 class="p-2 capitalize flex items-center text-xl font-thin overflow-ellipsis overflow-hidden h-16 ">
                <a class="text-primary" href="http://supernerds.test/filmes/953953561"
                    title="Psycho-Pass 3: First Inspector">Psycho-Pass 3: First Inspector</a>
            </h2>

            <div class="p-2 capitalize font-thin border-t-2 border-base-300">
                <a class="text-accent" href="http://supernerds.test/filmes" title="Psycho-Pass 3: First Inspector">
                    filme
                </a>
            </div>

        </div>
        <div class="bg-base-100 rounded-lg">
            <figure>
                <a class="text-primary" href="http://supernerds.test/animes/340258084" title="Isekai Quartet 2">
                    <img class="object-cover w-full rounded-t-lg"
                        src="https://img.superlistas.site/img/animes/62942-large.jpg" width="280" height="400"
                        alt="Isekai Quartet 2">
                </a>
            </figure>

            <h2 class="p-2 capitalize flex items-center text-xl font-thin overflow-ellipsis overflow-hidden h-16 ">
                <a class="text-primary" href="http://supernerds.test/animes/340258084" title="Isekai Quartet 2">Isekai
                    Quartet 2</a>
            </h2>

            <div class="p-2 capitalize font-thin border-t-2 border-base-300">
                <a class="text-accent" href="http://supernerds.test/animes" title="Isekai Quartet 2">
                    anime
                </a>
            </div>

        </div>
        <div class="bg-base-100 rounded-lg">
            <figure>
                <a class="text-primary" href="http://supernerds.test/mangas/845095209" title="Samishii Hito">
                    <img class="object-cover w-full rounded-t-lg"
                        src="https://img.superlistas.site/img/animes/62755-large.jpg" width="280" height="400"
                        alt="Samishii Hito">
                </a>
            </figure>

            <h2 class="p-2 capitalize flex items-center text-xl font-thin overflow-ellipsis overflow-hidden h-16 ">
                <a class="text-primary" href="http://supernerds.test/mangas/845095209" title="Samishii Hito">Samishii
                    Hito</a>
            </h2>

            <div class="p-2 capitalize font-thin border-t-2 border-base-300">
                <a class="text-accent" href="http://supernerds.test/mangas" title="Samishii Hito">
                    manga
                </a>
            </div>

        </div>
        <div class="bg-base-100 rounded-lg">
            <figure>
                <a class="text-primary" href="http://supernerds.test/mangas/158231338" title="Toraware Voice">
                    <img class="object-cover w-full rounded-t-lg"
                        src="https://img.superlistas.site/img/animes/62818-large.jpg" width="280" height="400"
                        alt="Toraware Voice">
                </a>
            </figure>

            <h2 class="p-2 capitalize flex items-center text-xl font-thin overflow-ellipsis overflow-hidden h-16 ">
                <a class="text-primary" href="http://supernerds.test/mangas/158231338" title="Toraware Voice">Toraware
                    Voice</a>
            </h2>

            <div class="p-2 capitalize font-thin border-t-2 border-base-300">
                <a class="text-accent" href="http://supernerds.test/mangas" title="Toraware Voice">
                    manga
                </a>
            </div>

        </div>
        <div class="bg-base-100 rounded-lg">
            <figure>
                <a class="text-primary" href="http://supernerds.test/mangas/540813868"
                    title="Aitsu to Kanojo to Mahou no Te">
                    <img class="object-cover w-full rounded-t-lg"
                        src="https://img.superlistas.site/img/animes/62928-large.jpg" width="280" height="400"
                        alt="Aitsu to Kanojo to Mahou no Te">
                </a>
            </figure>

            <h2 class="p-2 capitalize flex items-center text-xl font-thin overflow-ellipsis overflow-hidden h-16 ">
                <a class="text-primary" href="http://supernerds.test/mangas/540813868"
                    title="Aitsu to Kanojo to Mahou no Te">Aitsu to Kanojo to Mahou no Te</a>
            </h2>

            <div class="p-2 capitalize font-thin border-t-2 border-base-300">
                <a class="text-accent" href="http://supernerds.test/mangas" title="Aitsu to Kanojo to Mahou no Te">
                    manga
                </a>
            </div>

        </div>
        <div class="bg-base-100 rounded-lg">
            <figure>
                <a class="text-primary" href="http://supernerds.test/manhwas/839721773" title="The Abandoned Empress">
                    <img class="object-cover w-full rounded-t-lg"
                        src="https://img.superlistas.site/img/animes/62990-large.jpg" width="280" height="400"
                        alt="The Abandoned Empress">
                </a>
            </figure>

            <h2 class="p-2 capitalize flex items-center text-xl font-thin overflow-ellipsis overflow-hidden h-16 ">
                <a class="text-primary" href="http://supernerds.test/manhwas/839721773" title="The Abandoned Empress">The
                    Abandoned Empress</a>
            </h2>

            <div class="p-2 capitalize font-thin border-t-2 border-base-300">
                <a class="text-accent" href="http://supernerds.test/manhwas" title="The Abandoned Empress">
                    manhwa
                </a>
            </div>

        </div>
        <div class="bg-base-100 rounded-lg">
            <figure>
                <a class="text-primary" href="http://supernerds.test/cartoons/830927407" title="Detention">
                    <img class="object-cover w-full rounded-t-lg"
                        src="https://img.superlistas.site/img/animes/62731-large.jpg" width="280" height="400"
                        alt="Detention">
                </a>
            </figure>

            <h2 class="p-2 capitalize flex items-center text-xl font-thin overflow-ellipsis overflow-hidden h-16 ">
                <a class="text-primary" href="http://supernerds.test/cartoons/830927407" title="Detention">Detention</a>
            </h2>

            <div class="p-2 capitalize font-thin border-t-2 border-base-300">
                <a class="text-accent" href="http://supernerds.test/cartoons" title="Detention">
                    cartoon
                </a>
            </div>

        </div>
        <div class="bg-base-100 rounded-lg">
            <figure>
                <a class="text-primary" href="http://supernerds.test/cartoons/233075248" title="A Kind of Magic">
                    <img class="object-cover w-full rounded-t-lg"
                        src="https://img.superlistas.site/img/animes/62862-large.jpg" width="280" height="400"
                        alt="A Kind of Magic">
                </a>
            </figure>

            <h2 class="p-2 capitalize flex items-center text-xl font-thin overflow-ellipsis overflow-hidden h-16 ">
                <a class="text-primary" href="http://supernerds.test/cartoons/233075248" title="A Kind of Magic">A
                    Kind of Magic</a>
            </h2>

            <div class="p-2 capitalize font-thin border-t-2 border-base-300">
                <a class="text-accent" href="http://supernerds.test/cartoons" title="A Kind of Magic">
                    cartoon
                </a>
            </div>

        </div>
        <div class="bg-base-100 rounded-lg">
            <figure>
                <a class="text-primary" href="http://supernerds.test/doramas/447651897" title="Love Cuisine">
                    <img class="object-cover w-full rounded-t-lg"
                        src="https://img.superlistas.site/img/animes/62866-large.jpg" width="280" height="400"
                        alt="Love Cuisine">
                </a>
            </figure>

            <h2 class="p-2 capitalize flex items-center text-xl font-thin overflow-ellipsis overflow-hidden h-16 ">
                <a class="text-primary" href="http://supernerds.test/doramas/447651897" title="Love Cuisine">Love
                    Cuisine</a>
            </h2>

            <div class="p-2 capitalize font-thin border-t-2 border-base-300">
                <a class="text-accent" href="http://supernerds.test/doramas" title="Love Cuisine">
                    dorama
                </a>
            </div>

        </div>
        <div class="bg-base-100 rounded-lg">
            <figure>
                <a class="text-primary" href="http://supernerds.test/filmes/422536512" title="Triangle">
                    <img class="object-cover w-full rounded-t-lg"
                        src="https://img.superlistas.site/img/animes/62861-large.jpg" width="280" height="400"
                        alt="Triangle">
                </a>
            </figure>

            <h2 class="p-2 capitalize flex items-center text-xl font-thin overflow-ellipsis overflow-hidden h-16 ">
                <a class="text-primary" href="http://supernerds.test/filmes/422536512" title="Triangle">Triangle</a>
            </h2>

            <div class="p-2 capitalize font-thin border-t-2 border-base-300">
                <a class="text-accent" href="http://supernerds.test/filmes" title="Triangle">
                    filme
                </a>
            </div>

        </div>
        <div class="bg-base-100 rounded-lg">
            <figure>
                <a class="text-primary" href="http://supernerds.test/mangas/601226560" title="Alice kara Mahou">
                    <img class="object-cover w-full rounded-t-lg"
                        src="https://img.superlistas.site/img/animes/62934-large.jpg" width="280" height="400"
                        alt="Alice kara Mahou">
                </a>
            </figure>

            <h2 class="p-2 capitalize flex items-center text-xl font-thin overflow-ellipsis overflow-hidden h-16 ">
                <a class="text-primary" href="http://supernerds.test/mangas/601226560" title="Alice kara Mahou">Alice
                    kara Mahou</a>
            </h2>

            <div class="p-2 capitalize font-thin border-t-2 border-base-300">
                <a class="text-accent" href="http://supernerds.test/mangas" title="Alice kara Mahou">
                    manga
                </a>
            </div>

        </div>
        <div class="bg-base-100 rounded-lg">
            <figure>
                <a class="text-primary" href="http://supernerds.test/mangas/369662279"
                    title=".hack//Alcor: Hagun no Jokyoku">
                    <img class="object-cover w-full rounded-t-lg"
                        src="https://img.superlistas.site/img/animes/62819-large.jpg" width="280" height="400"
                        alt=".hack//Alcor: Hagun no Jokyoku">
                </a>
            </figure>

            <h2 class="p-2 capitalize flex items-center text-xl font-thin overflow-ellipsis overflow-hidden h-16 ">
                <a class="text-primary" href="http://supernerds.test/mangas/369662279"
                    title=".hack//Alcor: Hagun no Jokyoku">.hack//Alcor: Hagun no Jokyoku</a>
            </h2>

            <div class="p-2 capitalize font-thin border-t-2 border-base-300">
                <a class="text-accent" href="http://supernerds.test/mangas" title=".hack//Alcor: Hagun no Jokyoku">
                    manga
                </a>
            </div>

        </div>
        <div class="bg-base-100 rounded-lg">
            <figure>
                <a class="text-primary" href="http://supernerds.test/animes/842946898" title="Senyoku no Sigrdrifa">
                    <img class="object-cover w-full rounded-t-lg"
                        src="https://img.superlistas.site/img/animes/62801-large.jpg" width="280" height="400"
                        alt="Senyoku no Sigrdrifa">
                </a>
            </figure>

            <h2 class="p-2 capitalize flex items-center text-xl font-thin overflow-ellipsis overflow-hidden h-16 ">
                <a class="text-primary" href="http://supernerds.test/animes/842946898"
                    title="Senyoku no Sigrdrifa">Senyoku no Sigrdrifa</a>
            </h2>

            <div class="p-2 capitalize font-thin border-t-2 border-base-300">
                <a class="text-accent" href="http://supernerds.test/animes" title="Senyoku no Sigrdrifa">
                    anime
                </a>
            </div>

        </div>
        <div class="bg-base-100 rounded-lg">
            <figure>
                <a class="text-primary" href="http://supernerds.test/mangas/408304470" title="Kuuchuu de Oshokuji">
                    <img class="object-cover w-full rounded-t-lg"
                        src="https://img.superlistas.site/img/animes/62981-large.jpg" width="280" height="400"
                        alt="Kuuchuu de Oshokuji">
                </a>
            </figure>

            <h2 class="p-2 capitalize flex items-center text-xl font-thin overflow-ellipsis overflow-hidden h-16 ">
                <a class="text-primary" href="http://supernerds.test/mangas/408304470"
                    title="Kuuchuu de Oshokuji">Kuuchuu de Oshokuji</a>
            </h2>

            <div class="p-2 capitalize font-thin border-t-2 border-base-300">
                <a class="text-accent" href="http://supernerds.test/mangas" title="Kuuchuu de Oshokuji">
                    manga
                </a>
            </div>

        </div>
        <div class="bg-base-100 rounded-lg">
            <figure>
                <a class="text-primary" href="http://supernerds.test/doramas/379043159"
                    title="Iryu Team Medical Dragon 3">
                    <img class="object-cover w-full rounded-t-lg"
                        src="https://img.superlistas.site/img/animes/62859-large.jpg" width="280" height="400"
                        alt="Iryu Team Medical Dragon 3">
                </a>
            </figure>

            <h2 class="p-2 capitalize flex items-center text-xl font-thin overflow-ellipsis overflow-hidden h-16 ">
                <a class="text-primary" href="http://supernerds.test/doramas/379043159"
                    title="Iryu Team Medical Dragon 3">Iryu Team Medical Dragon 3</a>
            </h2>

            <div class="p-2 capitalize font-thin border-t-2 border-base-300">
                <a class="text-accent" href="http://supernerds.test/doramas" title="Iryu Team Medical Dragon 3">
                    dorama
                </a>
            </div>

        </div>
    </div>
    <div class="container">
        <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between mt-5">
            <div class="flex justify-between flex-1 sm:hidden">
                <span
                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium border-base-300 bg-base-100 cursor-default leading-5 rounded-md">
                    « Anterior
                </span>

                <a href="http://supernerds.test/lista?page=2"
                    class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium border-base-300 bg-base-100 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    Próxima »
                </a>
            </div>

            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                <div class="hidden">
                    <p class="text-base leading-5">
                        Showing
                        <span class="font-medium">1</span>
                        to
                        <span class="font-medium">24</span>
                        of
                        <span class="font-medium">17875</span>
                        results
                    </p>
                </div>

                <div>
                    <span class="relative z-0 inline-flex shadow-sm rounded-md">

                        <span aria-disabled="true" aria-label="&amp;laquo; Anterior">
                            <span
                                class="relative inline-flex items-center px-2 py-2 text-sm font-medium border-base-300 bg-base-100 cursor-default rounded-l-md leading-5"
                                aria-hidden="true">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                        </span>





                        <span aria-current="page">
                            <span
                                class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium border-base-300 bg-base-100 cursor-default leading-5">1</span>
                        </span>
                        <a href="http://supernerds.test/lista?page=2"
                            class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium border-base-300 bg-base-100 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                            aria-label="Go to page 2">
                            2
                        </a>
                        <a href="http://supernerds.test/lista?page=3"
                            class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium border-base-300 bg-base-100 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                            aria-label="Go to page 3">
                            3
                        </a>
                        <a href="http://supernerds.test/lista?page=4"
                            class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium border-base-300 bg-base-100 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                            aria-label="Go to page 4">
                            4
                        </a>
                        <a href="http://supernerds.test/lista?page=5"
                            class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium border-base-300 bg-base-100 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                            aria-label="Go to page 5">
                            5
                        </a>
                        <a href="http://supernerds.test/lista?page=6"
                            class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium border-base-300 bg-base-100 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                            aria-label="Go to page 6">
                            6
                        </a>

                        <span aria-disabled="true">
                            <span
                                class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium border-base-300 bg-base-100 cursor-default leading-5">...</span>
                        </span>





                        <a href="http://supernerds.test/lista?page=744"
                            class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium border-base-300 bg-base-100 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                            aria-label="Go to page 744">
                            744
                        </a>
                        <a href="http://supernerds.test/lista?page=745"
                            class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium border-base-300 bg-base-100 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                            aria-label="Go to page 745">
                            745
                        </a>


                        <a href="http://supernerds.test/lista?page=2" rel="next"
                            class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium border-base-300 bg-base-100 rounded-r-md leading-5 hover:text-gray-400 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150"
                            aria-label="Próxima &amp;raquo;">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </span>
                </div>
            </div>
        </nav>

    </div>


@endsection
