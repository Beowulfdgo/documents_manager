<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
          
        @vite(['public/theme/dist/assets/js/widgets.bundle.js','public/theme/dist/assets/plugins/custom/datatables/datatables.bundle.js','public/theme/dist/assets/css/style.bundle.css','public/theme/dist/assets/js/scripts.bundle.js'])


    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')
           <!-- scripts
            @vite(['public/theme/dist/assets/css/style.bundle.css','public/theme/dist/assets/css/style.bundle.rtl.css', 'public/theme/dist/assets/js/scripts.bundle.js','public/theme/dist/assets/js/widgets.bundle.js'])
            @vite(['public/theme/dist/assets/plugins/global/plugins.bundle.js','public/theme/dist/assets/plugins/custom/datatables/datatables.bundle.js'])
            -->

           

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="/theme/dist/assets/plugins/global/plugins.bundle.js"></script>
		<script src="/theme/dist/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used by this page)-->
		<script src="/theme/dist/assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<script src="/theme/dist/assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used by this page)-->
		<script src="/theme/dist/assets/js/widgets.bundle.js"></script>
		<script src="/theme/dist/assets/js/custom/widgets.js"></script>
		<script src="/theme/dist/assets/js/custom/apps/chat/chat.js"></script>
		<script src="/theme/dist/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="/theme/dist/assets/js/custom/utilities/modals/create-project/type.js"></script>
		<script src="/theme/dist/assets/js/custom/utilities/modals/create-project/budget.js"></script>
		<script src="/theme/dist/assets/js/custom/utilities/modals/create-project/settings.js"></script>
		<script src="/theme/dist/assets/js/custom/utilities/modals/create-project/team.js"></script>
		<script src="/theme/dist/assets/js/custom/utilities/modals/create-project/targets.js"></script>
		<script src="/theme/dist/assets/js/custom/utilities/modals/create-project/files.js"></script>
		<script src="/theme/dist/assets/js/custom/utilities/modals/create-project/complete.js"></script>
		<script src="/theme/dist/assets/js/custom/utilities/modals/create-project/main.js"></script>
		<script src="/theme/dist/assets/js/custom/utilities/modals/create-app.js"></script>
		<script src="/theme/dist/assets/js/custom/utilities/modals/create-campaign.js"></script>
		<script src="/theme/dist/assets/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->