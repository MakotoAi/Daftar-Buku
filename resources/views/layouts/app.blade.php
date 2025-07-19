<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Aplikasi Buku')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #F0F4F8;
            color: #333;
            line-height: 1.6;
            font-size: 16px;
        }

        body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        main {
            flex: 1;
            padding: 20px;
            background-color: #FFFFFF;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        footer {
            flex-shrink: 0;
            padding: 20px;
        }

        .navbar-custom {
            background-color: #07588A;
            border-bottom: 2px solid #118894;
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: #ffffff;
        }

        footer {
            background-color: #2D0A52; /* ungu gelap */
            color: #ffffff;
            font-size: 0.9em;
        }

        .btn-custom {
            background-color: #118894; /* teal gelap */
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #80C1BF; /* biru muda kehijauan */
            color: #fff;
        }

        .table td {
            word-wrap: break-word;
            white-space: normal;
            max-width: 200px; /* Batasi lebar sel */
        }
    </style>

</head>
<body>

    {{-- Header --}}
    <nav class="navbar navbar-expand-lg navbar-custom mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">📚 Aplikasi Buku</a>
        </div>
    </nav>

    {{-- Konten --}}
    <main class="container mb-4">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="text-center py-3">
        <div class="container">
            &copy; {{ date('Y') }} - Ahmad Hanif Nur'Aidzin
        </div>
    </footer>

</body>
</html>
