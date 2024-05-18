<html>

<head>
    <title>{{ $page_title ?? 'Admin' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-2.0.2/datatables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-2.0.2/datatables.min.js"></script>
</head>

</html>

<body class="bg-stone-100">

    <button id="sidebar-toggle" type="button" class="w-full inline-flex items-center justify-end p-2 mt-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
    </button>
    <main class="flex relative">
        </div>
        <aside id="sidebar" class="-translate-x-full md:translate-x-0 fixed w-3/4 md:block md:w-2/12 lg:w-[20%] h-screen md:sticky left-0 top-0 z-[999] transition-all duration-200">
            @include('layouts.admin.partials.sidebar')
        </aside>
        <div class="w-full flex-1">
            <div class="sticky top-0 w-full z-[999] transition-transform -translate-x-full sm:translate-x-0">
                <div class="p-8 bg-gray-500">
                    <h1 class="text-white">
                        <a href="{{ route('admin.dashboard') }}" class="text-3xl font-bold text-white">
                            {{ config('app.name') }}
                        </a>
                    </h1>
                </div>
            </div>
            <section class="p-4">
                @yield('content')
            </section>
        </div>
    </main>
    </div>
    <script>
        const btn = document.getElementById('sidebar-toggle');
        const sidebar = document.getElementById('sidebar');

        btn.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
            // btn.classList.toggle('fixed');
        })
        const alertSuccess = document.getElementById('alert-success');
        const alertClose = document.getElementById('alert-close');
        if (alertSuccess) {
            setTimeout(() => {
                alertSuccess.remove();
            }, 3000);
        }
        if (alertClose) {
            alertClose.addEventListener('click', () => {
                alertSuccess.remove();
            })
        }
    </script>
</body>
