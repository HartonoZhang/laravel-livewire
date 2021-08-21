<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title-page')
    </title>
    @livewireStyles
    @include('components.style-link')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('components.navigation')
        <!-- Main Sidebar Container -->
        @include('components.sidebar')

        {{ $slot }}

        @include('components.footer')

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>

    @include('components.script-link')
    @livewireScripts

    <script>
        window.livewire.on('studentAdded', () => {
            $('#addStudentModal').modal('hide');
        })
    </script>
</body>

</html>
