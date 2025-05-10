# Sistema de Gestión de Biblioteca 📚

Este es un proyecto desarrollado con **Laravel** como parte de mi transición profesional desde QA hacia el desarrollo backend. El objetivo es construir un sistema simple pero funcional para gestionar libros, aplicando buenas prácticas modernas con Laravel y preparando el terreno para futuras integraciones con **Filament Admin** y APIs REST.

## Funcionalidades actuales

- Registro de libros (título, autor, año).
- Seeders para carga inicial de datos.
- Migraciones y estructura base del proyecto.
- CRUD básico con Eloquent ORM.

## Tecnologías utilizadas

- PHP 8.3
- Laravel 11
- Composer
- Laragon / XAMPP (entorno local)
- MySQL / SQLite

## Acceso a la vista local del proyecto:

- Acceder en: http://localhost:8000

## Progreso y roadmap

 Este proyecto forma parte de un roadmap de aprendizaje de 14 semanas enfocado en:

- Laravel moderno

- Filament Admin

- Desarrollo de APIs REST

- Autenticación y autorización


Más información sobre el plan completo está disponible en el archivo README_LaravelPrompt.md.

## Autor

**Juan Saavedra**  
**Transición desde QA hacia Backend Developer**  
[LinkedIn](https://www.linkedin.com/in/juan-david-saavedra/)


## Instalación y ejecución

```bash
git clone https://github.com/tu_usuario/tu_repositorio.git
cd tu_repositorio
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve

⚠️ Este proyecto está en desarrollo. Más funcionalidades serán añadidas a medida que avance el roadmap.