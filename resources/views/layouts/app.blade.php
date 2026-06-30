<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'OM Doctor | Personal Website')</title>
    <meta name="description" content="@yield('description', 'OM Doctor personal website, profile, services, thoughts, and contact information.')">

    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <style>
        :root {
            --bg: #f7f9fc;
            --card: #ffffff;
            --text: #111827;
            --muted: #6b7280;
            --primary: #2563eb;
            --primary-dark: #1d4ed8;
            --border: #e5e7eb;
            --soft: #eff6ff;
            --shadow: 0 20px 50px rgba(15, 23, 42, 0.08);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.6;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .container {
            width: min(1120px, calc(100% - 32px));
            margin: 0 auto;
        }

        .navbar {
            position: sticky;
            top: 0;
            z-index: 50;
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--border);
        }

        .nav-inner {
            min-height: 72px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 800;
            font-size: 20px;
        }

        .brand-logo {
            width: 42px;
            height: 42px;
            border-radius: 14px;
            background: linear-gradient(135deg, var(--primary), #06b6d4);
            color: #ffffff;
            display: grid;
            place-items: center;
            font-weight: 900;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 22px;
            color: var(--muted);
            font-weight: 700;
            font-size: 14px;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 46px;
            padding: 0 20px;
            border-radius: 999px;
            font-weight: 800;
            border: 1px solid transparent;
            cursor: pointer;
        }

        .btn-primary {
            background: var(--primary);
            color: #ffffff;
            box-shadow: 0 14px 30px rgba(37, 99, 235, 0.22);
        }

        .btn-primary:hover {
            background: var(--primary-dark);
        }

        .btn-outline {
            border-color: var(--border);
            background: #ffffff;
            color: var(--text);
        }

        .btn-outline:hover {
            border-color: var(--primary);
            color: var(--primary);
        }

        .main {
            min-height: calc(100vh - 72px);
        }

        .section {
            padding: 76px 0;
        }

        .footer {
            padding: 30px 0;
            border-top: 1px solid var(--border);
            color: var(--muted);
            background: #ffffff;
            text-align: center;
            font-size: 14px;
        }

        @media (max-width: 760px) {
            .nav-inner {
                min-height: auto;
                padding: 14px 0;
                align-items: flex-start;
                flex-direction: column;
            }

            .nav-links {
                width: 100%;
                overflow-x: auto;
                gap: 16px;
                padding-bottom: 4px;
            }

            .section {
                padding: 48px 0;
            }
        }
    </style>

    @stack('styles')
</head>
<body>
    <header class="navbar">
        <div class="container nav-inner">
            <a href="{{ url('/') }}" class="brand">
                <span class="brand-logo">OM</span>
                <span>OM Doctor</span>
            </a>

            <nav class="nav-links">
                <a href="#about">About</a>
                <a href="#services">Services</a>
                <a href="#thoughts">Thoughts</a>
                <a href="#contact">Contact</a>
            </nav>
        </div>
    </header>

    <main class="main">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">
            © {{ date('Y') }} OM Doctor. All rights reserved.
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
