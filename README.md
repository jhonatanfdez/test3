# 🚀 CodeIgniter 4 Modern Experience

> Un proyecto demostrativo que lleva CodeIgniter 4 al siguiente nivel con interfaces modernas, animaciones fluidas y una arquitectura sólida.

![CodeIgniter 4](https://img.shields.io/badge/CodeIgniter-4.6-ef4223?style=for-the-badge&logo=codeigniter)
![PHP](https://img.shields.io/badge/PHP-8.1+-777bb4?style=for-the-badge&logo=php)
![MySQL](https://img.shields.io/badge/MySQL-8.0-4479a1?style=for-the-badge&logo=mysql)
![CSS3](https://img.shields.io/badge/CSS3-Animations-1572b6?style=for-the-badge&logo=css3)

## ✨ Características Principales

### 👥 v1.1.0 - Dashboard de Usuarios Futurista
Un sistema de gestión de usuarios que rompe con las tablas aburridas tradicionales.

- **🎨 Diseño Glassmorphism**: Interfaz estilo cristal con efectos de desenfoque y transparencia.
- **⚡ Animaciones Staggered**: Entrada en cascada de los elementos para una experiencia visual suave.
- **👤 Avatares Dinámicos**: Generación automática de avatares basados en el nombre del usuario.
- **📱 Responsive Design**: Adaptación perfecta desde escritorio hasta móvil.
- **🛠 Backend Robusto**: Implementación completa de Migraciones, Seeders y Modelos.

### 🚀 v1.0.0 - Sistema de Bienvenida 3D
Una landing page de bienvenida que atrapa al usuario desde el primer segundo.

- **🌌 Efecto Parallax 3D**: El fondo reacciona al movimiento del mouse.
- **✨ Partículas Interactivas**: Fondo animado con partículas y estrellas brillantes.
- **👋 Personalización Dinámica**: Rutas inteligentes que saludan al usuario por su nombre.
- **💎 UI Moderna**: Gradientes vibrantes y tipografía cuidada.

## 🛠️ Instalación y Configuración

Este proyecto está configurado para funcionar con **DDEV** para una experiencia de desarrollo sin dolor.

1. **Clonar el repositorio**
   ```bash
   git clone https://github.com/jhonatanfdez/test3.git
   cd test3
   ```

2. **Iniciar el entorno**
   ```bash
   ddev start
   ```

3. **Instalar dependencias**
   ```bash
   ddev composer install
   ```

4. **Configurar Base de Datos**
   ```bash
   # Ejecutar migraciones
   ddev exec php spark migrate
   
   # Poblar con datos de prueba
   ddev exec php spark db:seed UsuarioSeeder
   ```

5. **¡Disfrutar!**
   - Bienvenida: `http://test3.ddev.site/bienvenido/TuNombre`
   - Usuarios: `http://test3.ddev.site/usuarios`

## 📝 Rutas Disponibles

| Ruta | Descripción |
|------|-------------|
| `/bienvenido` | Vista de bienvenida por defecto |
| `/bienvenido/(:nombre)` | Vista de bienvenida personalizada |
| `/usuarios` | Dashboard de lista de usuarios |

---
Hecho con ❤️ y mucho ☕ usando CodeIgniter 4
