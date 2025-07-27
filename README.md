# API REST de Mascotas 🐾

Este proyecto es una API RESTful construida con Laravel para la gestión de personas y sus mascotas. Soporta autenticación JWT y cuenta con documentación generada automáticamente.

---

## 🚀 Instalación y ejecución

### 1. Clonar el repositorio

```bash
git clone https://github.com/ThomyEp/api-rest-mascotas.git
cd api-rest-mascotas

### 2. Instalar dependencias

composer install
npm install 
npm run dev

### 3. Copiar archivo .env y configurar

cp .env.example .env

APP_URL=http://127.0.0.1:8000
DB_DATABASE= tu base
DB_USERNAME=tu usuario
DB_PASSWORD=tu contraseña

### 4. Generar clave de aplicación y migrar , sedder con datos de prueba usuarios , personas y mascotas

php artisan key:generate
php artisan migrate --seed

Usuarios de prueba
user: admin@example.com
psw : admin1234
user: juan@example.com
psw : password123
user: ana@example.com
psw : secret456

### 5. Iniciar servidor

php artisan serve

### 6. Documentacion
### generar documentacion
php artisan scribe:generate
###link de la documentacion 
http://127.0.0.1:8000/docs

Endpoints principales 

GET /api/auth/register → Registra usuario

POST /api/auth/login → Iniciar sesión

POST /api/logout → Cerrar sesión

GET /api/auth/me → Obtener usuario autenticado

GET /api/personas → Listar personas

GET /api/personas/{id} → Ver persona por ID

POST /api/personas → Registrar nueva persona

PUT  /api/personas/{id} → Actualizar persona

POST /api/mascotas → Registrar nueva mascota

put /api/mascota/{id} → Actualizar persona

GET /api/personas/{id}/mascotas → Ver mascotas de una persona

GET /api/mascotas → Listar mascotas

🧠 Consideraciones del desarrollador
El proyecto sigue el patrón Service Repository.

Autenticación vía JWT.

Cada sessión pedita el token de autenticación para poder realziar las acciones

Agregar token cuando se solicita 

Uso de recursos API con API Resources de Laravel.

Logs personalizados en canal acciones.

Código documentado con Scribe usando anotaciones.

###Realziar preuebas unitarias y de integracions 
  php artisan test


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
