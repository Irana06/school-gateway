<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>{{ $title ?? config('app.name') }}</title>

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance

<!-- Google Fonts: Poppins -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- Lucide Icons CDN -->
<script src="https://unpkg.com/lucide@latest"></script>

<!-- Custom Styles for Neomorphism -->
<style>
    /* Define color variables for easy management */
    :root {
        --bg-color: #e0e5ec;
        --light-shadow: #ffffff;
        --dark-shadow: #a3b1c6;
        --text-color: #5a677d;
        --accent-color-start: #8e9ef2;
        --accent-color-end: #667eea;
    }

    /* Set base styles */
    body {
        background-color: var(--bg-color);
        font-family: 'Poppins', sans-serif;
        color: var(--text-color);
    }
</style>
