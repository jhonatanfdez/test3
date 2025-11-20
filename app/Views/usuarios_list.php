<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($titulo) ?></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;700&display=swap');
        
        :root {
            --primary: #4f46e5;
            --secondary: #ec4899;
            --dark: #0f172a;
            --light: #f8fafc;
            --surface: rgba(255, 255, 255, 0.05);
            --border: rgba(255, 255, 255, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Outfit', sans-serif;
            background-color: var(--dark);
            background-image: 
                radial-gradient(at 0% 0%, hsla(253,16%,7%,1) 0, transparent 50%), 
                radial-gradient(at 50% 0%, hsla(225,39%,30%,1) 0, transparent 50%), 
                radial-gradient(at 100% 0%, hsla(339,49%,30%,1) 0, transparent 50%);
            color: var(--light);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }
        
        .dashboard-container {
            width: 100%;
            max-width: 1000px;
            background: rgba(15, 23, 42, 0.6);
            backdrop-filter: blur(20px);
            border: 1px solid var(--border);
            border-radius: 24px;
            padding: 2rem;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            animation: slideUp 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }

        @keyframes slideUp {
            from { transform: translateY(40px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid var(--border);
        }

        .title-group h1 {
            font-size: 2rem;
            font-weight: 700;
            background: linear-gradient(to right, #818cf8, #c084fc, #f472b6);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 0.5rem;
        }

        .subtitle {
            color: #94a3b8;
            font-size: 0.9rem;
        }

        .action-btn {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            box-shadow: 0 4px 15px rgba(79, 70, 229, 0.4);
        }

        .action-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(79, 70, 229, 0.6);
        }

        .user-grid {
            display: grid;
            gap: 1rem;
        }

        .user-card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 1rem 1.5rem;
            display: grid;
            grid-template-columns: auto 2fr 2fr 1.5fr auto;
            align-items: center;
            gap: 1.5rem;
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .user-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(to bottom, var(--primary), var(--secondary));
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .user-card:hover {
            transform: translateX(5px);
            background: rgba(255, 255, 255, 0.08);
            border-color: rgba(255, 255, 255, 0.2);
        }

        .user-card:hover::before {
            opacity: 1;
        }

        .avatar {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: linear-gradient(135deg, #3b82f6, #8b5cf6);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.2rem;
            color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .avatar img {
            width: 100%;
            height: 100%;
            border-radius: 12px;
            object-fit: cover;
        }

        .info-group {
            display: flex;
            flex-direction: column;
        }

        .label {
            font-size: 0.75rem;
            color: #94a3b8;
            margin-bottom: 0.25rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .value {
            font-weight: 500;
            color: #f1f5f9;
        }

        .email-value {
            color: #cbd5e1;
            font-family: monospace;
        }

        .date-badge {
            background: rgba(16, 185, 129, 0.1);
            color: #34d399;
            padding: 0.4rem 0.8rem;
            border-radius: 8px;
            font-size: 0.85rem;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            border: 1px solid rgba(16, 185, 129, 0.2);
        }

        .actions {
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            gap: 0.5rem;
        }

        .user-card:hover .actions {
            opacity: 1;
        }

        .icon-btn {
            background: rgba(255, 255, 255, 0.1);
            border: none;
            width: 36px;
            height: 36px;
            border-radius: 8px;
            color: #cbd5e1;
            cursor: pointer;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .icon-btn:hover {
            background: white;
            color: var(--primary);
        }

        .icon-btn.delete:hover {
            color: #ef4444;
        }

        /* Animation delays for list items */
        <?php for($i = 1; $i <= 10; $i++): ?>
        .user-card:nth-child(<?= $i ?>) {
            animation: fadeIn 0.5s ease-out forwards;
            animation-delay: <?= $i * 0.1 ?>s;
            opacity: 0;
        }
        <?php endfor; ?>

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 768px) {
            .user-card {
                grid-template-columns: auto 1fr;
                gap: 1rem;
                padding: 1.5rem;
            }
            
            .user-card::before {
                width: 100%;
                height: 4px;
                background: linear-gradient(to right, var(--primary), var(--secondary));
            }

            .info-group:nth-child(3), /* Email */
            .info-group:nth-child(4)  /* Date */ {
                grid-column: 1 / -1;
                margin-top: 0.5rem;
            }

            .actions {
                grid-column: 1 / -1;
                opacity: 1;
                justify-content: flex-end;
                margin-top: 1rem;
                border-top: 1px solid var(--border);
                padding-top: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <div class="header">
            <div class="title-group">
                <h1><?= esc($titulo) ?></h1>
                <div class="subtitle">Gestiona tu equipo y permisos</div>
            </div>
            <button class="action-btn">
                <i class="fas fa-plus"></i> Nuevo Usuario
            </button>
        </div>

        <div class="user-grid">
            <?php if (! empty($usuarios) && is_array($usuarios)): ?>
                <?php foreach ($usuarios as $usuario): ?>
                    <div class="user-card">
                        <div class="avatar">
                            <img src="https://ui-avatars.com/api/?name=<?= urlencode($usuario['nombre']) ?>&background=random&color=fff&bold=true" alt="<?= esc($usuario['nombre']) ?>">
                        </div>
                        
                        <div class="info-group">
                            <div class="label">Nombre</div>
                            <div class="value"><?= esc($usuario['nombre']) ?></div>
                        </div>

                        <div class="info-group">
                            <div class="label">Correo Electrónico</div>
                            <div class="value email-value"><?= esc($usuario['email']) ?></div>
                        </div>

                        <div class="info-group">
                            <div class="label">Registrado</div>
                            <div class="date-badge">
                                <i class="far fa-calendar-alt"></i>
                                <?= date('d M, Y', strtotime($usuario['created_at'])) ?>
                            </div>
                        </div>

                        <div class="actions">
                            <button class="icon-btn" title="Editar">
                                <i class="fas fa-pen"></i>
                            </button>
                            <button class="icon-btn delete" title="Eliminar">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div style="text-align: center; padding: 3rem; color: #94a3b8;">
                    <i class="fas fa-users-slash" style="font-size: 3rem; margin-bottom: 1rem; opacity: 0.5;"></i>
                    <p>No hay usuarios registrados aún.</p>
                </div>
            <?php endif ?>
        </div>
    </div>

    <script>
        // Efecto simple al hacer click en las tarjetas
        document.querySelectorAll('.user-card').forEach(card => {
            card.addEventListener('click', function(e) {
                if (!e.target.closest('.actions')) {
                    this.style.transform = 'scale(0.98)';
                    setTimeout(() => {
                        this.style.transform = '';
                    }, 100);
                }
            });
        });
    </script>
</body>
</html>
