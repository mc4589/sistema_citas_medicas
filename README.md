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

## Estructura del Directorio
sistema-citas-medicas/
├── app/
│   └── Models/
│       ├── Medico.php
│       ├── Paciente.php
│       └── Cita.php
├── database/
│   ├── factories/
│   │   ├── MedicoFactory.php
│   │   ├── PacienteFactory.php
│   │   └── CitaFactory.php
│   ├── migrations/
│   │   ├── 2025_10_27_053928_create_medicos_table.php
│   │   ├── 2025_10_27_054642_create_pacientes_table.php
│   │   ├── 2025_10_27_054710_create_citas_table.php
│   │   └── xxxx_xx_xx_xxxxxx_alter_citas_table_make_descripcion_not_nullable.php (opcional)
│   └── seeders/
│       └── DatabaseSeeder.php
├── .gitignore
├── README.md
└── [otros archivos y carpetas]


**Descripción**:
- `app/Models/`: Contiene los modelos Eloquent (`Medico`, `Paciente`, `Cita`) que mapean las tablas de la base de datos.
- `database/factories/`: Define factories para generar datos falsos para `medicos`, `pacientes`, y `citas`.
- `database/migrations/`: Contiene las migraciones que crean las tablas y definen su estructura.
- `database/seeders/`: Incluye el seeder `DatabaseSeeder` para poblar las tablas con 100 registros cada una.

## Estructura en base de datos
- **Tablas**: `medicos`, `pacientes`, `citas`
- **Relaciones**: Citas vinculadas a médicos y pacientes mediante claves foráneas
- **Datos**: 100 registros por tabla, con descripciones no nulas
=======
