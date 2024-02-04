<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your One-Page Website</title>
    <!-- Include your CSS stylesheets here -->
    <link rel="stylesheet" href="{{ asset('path/to/your/styles.css') }}">
</head>
<body>
    <header>
        <nav>
            <!-- Your navigation menu goes here -->
        </nav>
    </header>

    <main>
        <!-- Your one-page content goes here -->
        @yield('content')
    </main>

    <footer>
        <!-- Your footer content goes here -->
    </footer>

    <!-- Include your JS scripts here -->
    <script src="{{ asset('path/to/your/scripts.js') }}"></script>
</body>
</html>
