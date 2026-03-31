# InstaTech

Proyecto académico web tipo marketplace orientado a la gestión y visualización de productos tecnológicos.

## Descripción
InstaTech fue desarrollado como proyecto académico en formación técnica. El sistema incluye flujo de registro e inicio de sesión, formularios conectados a base de datos, gestión básica de usuarios y módulos CRUD para diferentes tipos de usuario.

## Tecnologías utilizadas
- PHP
- MySQL
- HTML
- CSS
- Bootstrap
- JavaScript
- XAMPP

## Mi participación
Proyecto desarrollado en equipo de 3 integrantes. Mi aporte principal estuvo en:
- Desarrollo de buena parte del frontend
- Formularios de registro e inicio de sesión
- Conexión con MySQL
- Implementación de operaciones CRUD
- Apoyo en backend con PHP

## Funcionalidades principales
- Registro de usuarios
- Inicio y cierre de sesión
- Catálogo de productos
- Formularios conectados a base de datos
- Gestión CRUD para usuarios y productos
- Vistas diferenciadas por tipo de usuario
- Panel administrativo con tablas de gestión

## Estructura sugerida del repositorio
```text
InstaTech/
├── index.php
├── carrito/
├── controlador/
├── vista/
├── css/
├── js/
├── images/
├── database/
│   └── instatech.sql
├── README.md
└── .gitignore
```

## Cómo ejecutarlo en local con XAMPP
1. Instalar o abrir XAMPP
2. Iniciar **Apache** y **MySQL**
3. Copiar la carpeta del proyecto dentro de `htdocs`
4. Entrar a `http://localhost/phpmyadmin`
5. Crear una base de datos llamada `instatech`
6. Importar el archivo `database/instatech.sql`
7. Revisar el archivo de conexión para confirmar estos datos de ejemplo:

```php
$host = "localhost";
$user = "root";
$password = "";
$database = "instatech";
```

8. Abrir en el navegador:

```text
http://localhost/InstaTech/
```

> Si el nombre real de la carpeta es distinto, cambia la URL según corresponda.


## Estado del proyecto
Proyecto académico de 2023. Actualmente se presenta como evidencia de bases en desarrollo web con PHP y MySQL.

## Nota importante
Este repositorio se publica con fines de portafolio y demostración técnica.
