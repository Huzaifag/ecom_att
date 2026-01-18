<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap + jQuery Boilerplate</title>

    <!-- Bootstrap CSS (Latest) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
    <!-- Custom CSS -->
     @vite([
        'resources/css/website/style.css',
        'resources/js/website/index.js'
    ])

    @stack('styles')


</head>

<body>

    @include('website.layout.navbar')
    <main>
        @yield('content')
    </main>
    @include('website.layout.footer')
    <!-- jQuery (Latest) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap JS Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>

    <!-- Custom JS -->
    <script>
        $(document).ready(function () {
            const category_dropdown_content = $('#category-dropdown-content');
            category_dropdown_content.hide();
            $('#category-dropdown').on('click', function() {
                category_dropdown_content.slideToggle();
                const hero_image = $('#hero-image');
                hero_image.toggleClass('col-md-12 col-md-9');
            });
        });
    </script>

    @stack('scripts')

</body>

</html>