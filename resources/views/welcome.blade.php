<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kalijh</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:300,400,500,600,700,800" rel="stylesheet" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- AOS for Animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Custom Styles -->
    <style>
        .bg-library {
            background: url('https://images.pexels.com/photos/32757427/pexels-photo-32757427.jpeg?auto=compress&cs=tinysrgb&w=1920&h=1080&dpr=2') no-repeat center center/cover;
            height: 100vh;
            position: relative;
            overflow: hidden;
        }

        .content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: #fff;
            padding: 20px;
        }

        .glass-card {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.3);
        }

        .title-gradient {
            background: linear-gradient(90deg, #8B0000, #2F4F4F, #4B0082);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-weight: 800;
            font-size: 3.5rem;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
            animation: gradientShift 5s ease infinite;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .kalijh-highlight {
            background: linear-gradient(90deg, #FFD700, #FFA500, #FF4500);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-size: 4rem;
            font-weight: 900;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .subtitle-color {
            background: linear-gradient(90deg, #a3e4d7, #96ceb4);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-size: 1.5rem;
            text-shadow: 0 0 5px rgba(0, 0, 0, 0.4);
            margin-bottom: 2rem;
        }

        .button-primary {
            background-color: #ef4444;
            padding: 12px 24px;
            border-radius: 8px;
            transition: all 0.3s ease;
            font-weight: 600;
            text-transform: uppercase;
        }

        .button-primary:hover {
            background-color: #dc2626;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(239, 68, 68, 0.4);
        }
    </style>
</head>
<body class="font-poppins">
    <!-- Main Content -->
    <div class="bg-library">
        <div class="content flex flex-col items-center justify-center h-full">
            <div class="glass-card">
                <h1 class="title-gradient mb-6" data-aos="fade-up" data-aos-duration="1000">
                    <span class="kalijh-highlight">Kalijh</span>
                    <span>Librería - Multiservicios</span>
                </h1>
                <p class="subtitle-color mb-8 text-white" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    Tu librería y multiservicios de confianza: encuentras útiles escolares, además de servicios de impresiones, fotocopias y anillados con atención personalizada.
                </p>
                <div class="space-x-4" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <a href="{{ route('login') }}" class="button-primary text-white">Inicio</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Initialize AOS -->
    <script>
        AOS.init();
    </script>
</body>
</html>
