
# 🐟 Sistema de Gestión para Pescadería

**Registro de Tipos de Productos y Productos**

Este proyecto es un sistema desarrollado para la gestión sencilla y eficiente de una pescadería, permitiendo registrar **tipos de productos** (categorías) y **productos** .  
Incluye una interfaz amigable, ideal para administrar inventarios y mantener organizada la información de la tienda.

----------

## 📌 Tecnologías Utilizadas

-   **PHP 8+** – Lógica del servidor y controladores.
    
-   **MySQL** – Base de datos del sistema.
    
-   **HTML5** – Estructura de las interfaces.
    
-   **CSS3** – Estilos visuales.
    
-   **JavaScript** – Validación y funciones interactivas.
    
-   **XAMPP** – Entorno local utilizado para ejecutar el proyecto.
-
-   **MYSQL** – Gestor Base de Datos utilizado para el registro de Información.

----------

## ⚙️Ejecución con XAMPP

Sigue estos pasos para poner en marcha el sistema:

----------

### 2️⃣ Clonar o copiar el proyecto

Coloca la carpeta del sistema dentro de:

`C:\xampp\htdocs\` 

Ejemplo:

`C:\xampp\htdocs\pescaderia` 

----------

### 3️⃣ Crear la base de datos

1.  Abre **phpMyAdmin** en tu navegador:
    
    `http://localhost/phpmyadmin` 
    
2.  Crea una nueva base de datos, por ejemplo:
    
    `pescaderia_db` 
    
3.  Importa el archivo SQL (si tu proyecto lo incluye):  
    **Importar → Seleccionar archivo → Ejecutar**
    

----------

### 4️⃣ Configurar la conexión en PHP

Edita el archivo:

`/config/conexion.php` 

Y coloca tus credenciales:

`<?php  $host = "localhost"; $user = "root"; $pass = ""; $db = "pescaderia_db"; $conn = new  mysqli($host, $user, $pass, $db); if ($conn->connect_error) { die("Error de conexión: " . $conn->connect_error);
} ?>` 

----------

### 5️⃣ Ejecutar el sistema

Abre tu navegador y accede:

`http://localhost/pescaderia` 

¡Y listo! El sistema quedará ejecutándose.

----------

## 🚀 Funcionalidades Principales

### ✅ Gestión de tipos de productos

-   Crear, editar y eliminar categorías (Ej: "Pescado fresco", "Mariscos", "Congelados")
    

### ✅ Gestión de productos

-   Registrar productos con precio y tipo asociado
    
-   Editar y eliminar productos
    
-   Listado completo con filtros por tipo
    

### ✅ Interfaz amigable

-   Navegación simple
    
-   Tablas organizadas
    
-   Formularios fáciles de usar
    

----------

## 👨‍💻 Autor

Sistema desarrollado por **JULIAN DAVID ALMANZA SASA**  
Lenguaje principal: **PHP**  
Año: **2025**
