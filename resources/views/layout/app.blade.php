<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}"> <!-- Include your CSS -->
</head>
<body>
    <header>
        <!-- You can put your navigation bar or header content here -->
        <nav>
            <ul>
                
            </ul>
        </nav>
    </header>

    <main>
        @yield('content') <!-- The content will be injected here -->
    </main>

    <footer>
        <!-- Footer content -->
        <p>Footer</p>
    </footer>

    <script src="{{ mix('js/app.js') }}"></script> <!-- Include your JavaScript -->
</body>
</html>
