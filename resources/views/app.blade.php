<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Megan Starrington | Portfolio') }}</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    
    <style>
        :root {
            --font-family: 'Outfit', system-ui, -apple-system, sans-serif;
            --text-color: #4a5568;
            --heading-color: #1a202c;
            --bg-color: #000000;
            --card-bg: #ececec;
            --primary-color: #4133ff;
            --primary-hover: #3525e6;
            --secondary-color: #f7fafc;
            --radius-lg: 24px;
            --radius-md: 12px;
            --radius-sm: 8px;
            --shadow-lg: 0 20px 40px -10px rgba(0, 0, 0, 0.2);
            --shadow-md: 0 10px 20px -5px rgba(0, 0, 0, 0.1);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html {
            font-size: 16px;
            scroll-behavior: smooth;
        }
        
        body {
            font-family: var(--font-family);
            background-color: var(--bg-color);
            color: var(--text-color);
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            overflow-x: hidden;
        }
        
        #app {
            min-height: 100vh;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-weight: 700;
            line-height: 1.2;
            color: var(--heading-color);
        }
        
        a {
            text-decoration: none;
            color: var(--primary-color);
            transition: all 0.3s ease;
        }
        
        img {
            max-width: 100%;
            height: auto;
            display: block;
        }
        
        button, .button {
            cursor: pointer;
            font-family: var(--font-family);
            border: none;
            background: none;
            transition: all 0.3s ease;
        }
        
        /* Fun pulse animation for hover effects */
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }
        
        .pulse-on-hover:hover {
            animation: pulse 1s ease infinite;
        }
    </style>
</head>
<body>
    <div id="app">
        <router-view></router-view>
    </div>
</body>
</html> 