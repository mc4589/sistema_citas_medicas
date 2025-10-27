<<<<<<< HEAD
# Sistema de Citas Médicas

Sistema web desarrollado en Laravel 12 para gestionar citas médicas entre médicos y pacientes, con una base de datos MySQL que almacena 100 registros por tabla (`medicos`, `pacientes`, `citas`). Las descripciones de las citas están en español y no nulas, y se han eliminado componentes innecesarios para optimizar el proyecto.

## Requisitos

- PHP >= 8.2
- Composer
- MySQL
- XAMPP (Apache en puerto 8012, MySQL en puerto 3306)
- Git

## Instalación
1. Clonar el repositorio: `git clone https://github.com/tuusuario/sistema_citas_medicas.git`
2. Instalar dependencias: `composer install`
3. Copiar `.env.example` a `.env` y configurar la base de datos MySQL
4. Ejecutar migraciones: `php artisan migrate`
5. Poblar datos: `php artisan db:seed`

## Estructura
- **Tablas**: `medicos`, `pacientes`, `citas`
- **Relaciones**: Citas vinculadas a médicos y pacientes mediante claves foráneas
- **Datos**: 100 registros por tabla, con descripciones en español no nulas
=======
# sistema_citas_medicas
Modelos, migraciones, factorías de entidades médico, paciente y citas médicas usando Laravel 12 y MySQL.
>>>>>>> d77611776271f0bf90304e9b0bf3bcbc3d7a5c77
