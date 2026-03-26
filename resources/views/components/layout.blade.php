<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --clay: #834733;
            --clay-dark: #5c3122;
            --clay-light: #b06648;
            --cream: #f5ede4;
            --warm-white: #fdf8f3;
            --text: #2b1a12;
            --muted: #9a7060;
        }

        body {
            min-height: 100vh;
            background-color: var(--warm-white);
            font-family: 'Jost', sans-serif;
            font-weight: 300;
            color: var(--text);
            display: flex;
            flex-direction: column;
        }

        nav {
            background-color: var(--clay-dark);
            padding: 0 2.5rem;
            display: flex;
            gap: 0.25rem;
            box-shadow: 0 2px 14px rgba(0, 0, 0, 0.3);
        }

        nav a {
            color: var(--cream);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.78rem;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            padding: 1.1rem 1.2rem;
            position: relative;
            transition: color 0.2s;
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            right: 50%;
            height: 3px;
            background: var(--clay-light);
            transition: left 0.25s, right 0.25s;
        }

        nav a:hover {
            color: #fff;
        }

        nav a:hover::after {
            left: 0.8rem;
            right: 0.8rem;
        }

        main {
            flex: 1;
            max-width: 860px;
            width: 100%;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        h1 {
            font-family: 'Playfair Display', serif;
            font-size: 5vw;
            color: var(--clay);
            margin-bottom: 1.5rem;
        }

        h1::after {
            content: '';
            display: block;
            height: 3px;
            width: 100%;
            background: var(--clay-light);
        }

        footer {
            text-align: center;
            padding: 1.4rem;
            font-size: 0.73rem;
            letter-spacing: 0.08em;
            color: var(--muted);
            border-top: 1px solid var(--cream);
        }
    </style>
</head>

<body>
    {{ $slot }}
    <footer> lol</footer>
</body>

</html>