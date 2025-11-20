<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($titulo) ?></title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;900&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: #0f0c29;
            background: linear-gradient(to right, #24243e, #302b63, #0f0c29);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            position: relative;
        }
        
        /* Partículas de fondo animadas */
        .particles {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }
        
        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 15s infinite;
        }
        
        .particle:nth-child(1) { width: 80px; height: 80px; left: 10%; animation-delay: 0s; }
        .particle:nth-child(2) { width: 60px; height: 60px; left: 20%; animation-delay: 2s; }
        .particle:nth-child(3) { width: 100px; height: 100px; left: 35%; animation-delay: 4s; }
        .particle:nth-child(4) { width: 50px; height: 50px; left: 50%; animation-delay: 6s; }
        .particle:nth-child(5) { width: 90px; height: 90px; left: 65%; animation-delay: 8s; }
        .particle:nth-child(6) { width: 70px; height: 70px; left: 80%; animation-delay: 10s; }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100px) rotate(360deg);
                opacity: 0;
            }
        }
        
        .container {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            padding: 4rem 3rem;
            border-radius: 30px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            border: 1px solid rgba(255, 255, 255, 0.18);
            text-align: center;
            max-width: 600px;
            width: 90%;
            position: relative;
            z-index: 10;
            animation: fadeInUp 1s ease-out;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .emoji-container {
            position: relative;
            display: inline-block;
            margin-bottom: 2rem;
        }
        
        .emoji {
            font-size: 5rem;
            animation: wave 2s ease-in-out infinite;
            display: inline-block;
            filter: drop-shadow(0 0 20px rgba(255, 215, 0, 0.5));
        }
        
        @keyframes wave {
            0%, 100% {
                transform: rotate(0deg);
            }
            25% {
                transform: rotate(20deg);
            }
            75% {
                transform: rotate(-20deg);
            }
        }
        
        .glow-circle {
            position: absolute;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255, 215, 0, 0.3), transparent);
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation: pulse 2s ease-in-out infinite;
            z-index: -1;
        }
        
        @keyframes pulse {
            0%, 100% {
                transform: translate(-50%, -50%) scale(1);
                opacity: 0.5;
            }
            50% {
                transform: translate(-50%, -50%) scale(1.2);
                opacity: 0.8;
            }
        }
        
        h1 {
            color: #fff;
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 3px;
            background: linear-gradient(45deg, #FFD700, #FFA500, #FF69B4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradientShift 3s ease infinite;
            background-size: 200% 200%;
        }
        
        @keyframes gradientShift {
            0%, 100% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
        }
        
        .nombre-wrapper {
            perspective: 1000px;
            margin: 2rem 0;
        }
        
        .nombre {
            color: #fff;
            font-size: 4rem;
            font-weight: 900;
            margin: 1.5rem 0;
            text-transform: capitalize;
            background: linear-gradient(45deg, #00f2fe, #4facfe, #00f2fe);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            background-size: 200% 200%;
            animation: nameGlow 3s ease-in-out infinite;
            text-shadow: 0 0 30px rgba(79, 172, 254, 0.5);
            position: relative;
            display: inline-block;
        }
        
        @keyframes nameGlow {
            0%, 100% {
                background-position: 0% 50%;
                transform: scale(1);
            }
            50% {
                background-position: 100% 50%;
                transform: scale(1.05);
            }
        }
        
        .nombre::before {
            content: attr(data-text);
            position: absolute;
            left: 0;
            top: 0;
            z-index: -1;
            background: linear-gradient(45deg, #FF00FF, #00FFFF);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            filter: blur(10px);
            opacity: 0.7;
        }
        
        p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.2rem;
            line-height: 1.8;
            font-weight: 300;
            margin-top: 2rem;
        }
        
        .decorative-line {
            width: 100px;
            height: 3px;
            background: linear-gradient(90deg, transparent, #FFD700, transparent);
            margin: 2rem auto;
            border-radius: 2px;
            animation: lineExpand 2s ease-in-out infinite;
        }
        
        @keyframes lineExpand {
            0%, 100% {
                width: 100px;
            }
            50% {
                width: 200px;
            }
        }
        
        .stats {
            display: flex;
            justify-content: space-around;
            margin-top: 3rem;
            gap: 2rem;
        }
        
        .stat-item {
            flex: 1;
            background: rgba(255, 255, 255, 0.1);
            padding: 1.5rem;
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }
        
        .stat-item:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.15);
            box-shadow: 0 10px 30px rgba(79, 172, 254, 0.3);
        }
        
        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: #FFD700;
            margin-bottom: 0.5rem;
        }
        
        .stat-label {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.7);
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        /* Estrellas brillantes */
        .stars {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 2;
            pointer-events: none;
        }
        
        .star {
            position: absolute;
            width: 2px;
            height: 2px;
            background: white;
            border-radius: 50%;
            animation: twinkle 3s infinite;
        }
        
        @keyframes twinkle {
            0%, 100% { opacity: 0; }
            50% { opacity: 1; }
        }
        
        .star:nth-child(1) { top: 20%; left: 15%; animation-delay: 0s; }
        .star:nth-child(2) { top: 40%; left: 80%; animation-delay: 1s; }
        .star:nth-child(3) { top: 60%; left: 25%; animation-delay: 2s; }
        .star:nth-child(4) { top: 80%; left: 70%; animation-delay: 1.5s; }
        .star:nth-child(5) { top: 30%; left: 50%; animation-delay: 0.5s; }
        
        @media (max-width: 768px) {
            .container {
                padding: 2.5rem 1.5rem;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            .nombre {
                font-size: 2.5rem;
            }
            
            .stats {
                flex-direction: column;
                gap: 1rem;
            }
            
            p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Partículas de fondo -->
    <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>
    
    <!-- Estrellas -->
    <div class="stars">
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
    </div>
    
    <div class="container">
        <div class="emoji-container">
            <div class="glow-circle"></div>
            <div class="emoji">�</div>
        </div>
        
        <h1>¡Bienvenido!</h1>
        
        <div class="decorative-line"></div>
        
        <div class="nombre-wrapper">
            <div class="nombre" data-text="<?= esc($nombre) ?>"><?= esc($nombre) ?></div>
        </div>
        
        <p>✨ Nos alegra enormemente tenerte aquí ✨<br>
        Prepárate para una experiencia increíble</p>
        
        <div class="stats">
            <div class="stat-item">
                <div class="stat-number">💯</div>
                <div class="stat-label">Calidad</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">⚡</div>
                <div class="stat-label">Velocidad</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">🎯</div>
                <div class="stat-label">Precisión</div>
            </div>
        </div>
    </div>
    
    <script>
        // Efecto de paralaje suave al mover el mouse
        document.addEventListener('mousemove', (e) => {
            const container = document.querySelector('.container');
            const x = (window.innerWidth / 2 - e.pageX) / 50;
            const y = (window.innerHeight / 2 - e.pageY) / 50;
            
            container.style.transform = `perspective(1000px) rotateY(${x}deg) rotateX(${y}deg)`;
        });
        
        // Restaurar posición cuando el mouse sale
        document.addEventListener('mouseleave', () => {
            const container = document.querySelector('.container');
            container.style.transform = 'perspective(1000px) rotateY(0deg) rotateX(0deg)';
        });
    </script>
</body>
</html>
