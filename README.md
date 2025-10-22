"# ProyectoHerramientasDesarrollo" 
Este proyecto tiene como objetivo poner en práctica el uso de **Git y GitHub** para la gestión de versiones, ramas, commits y fusiones entre entornos de desarrollo.  

## Funcionalidades
- Gestión de ramas con flujos de trabajo organizados.
- Desarrollo modular con las siguientes ramas:
  - `developer`: rama principal de desarrollo.
  - `feature-pagos`: implementación de funcionalidades relacionadas a pagos.
  - `feature-recibo`: implementación de funcionalidades relacionadas a recibos.
- Ejemplos de commits, merges y resolución de conflictos.

## Estructura del proyecto

Este proyecto está organizado en los siguientes directorios y archivos:

### 📁 Carpetas
- `css/` — Archivos de estilos CSS.
- `images/` — Imágenes utilizadas en el sitio.
- `js/` — Scripts JavaScript.

### 📄 Archivos
- `.gitignore` — Configuración para excluir archivos del control de versiones.
- `README.md` — Documentación del proyecto.
- `connection.php` — Conexión a la base de datos.
- `functions.php` — Funciones reutilizables del sistema.
- `index.php` — Página principal del proyecto.
- `presentation.html` — Página de presentación (HTML estático).
- `receipt.php` — Generación de comprobantes de pago.
- `register_payment.php` — Registro de pagos.
- `save_payment.php` — Guardado de pagos en la base de datos.
- `student.php` — Listado de estudiantes.
- `student_add.php` — Añadir nuevo estudiante.
- `student_delete.php` — Eliminar estudiante.
- `student_edit.php` — Editar información de estudiante.

---

Esta estructura refleja un sistema web que gestiona estudiantes y pagos, con una separación clara entre lógica de servidor (PHP), presentación (HTML/CSS/JS) y recursos multimedia.

## Flujo de ramas
1. Las nuevas características se crean en ramas `feature-*`.  
2. Una vez listas, se integran en `developer` mediante **merge**.  
3. Desde `developer`, se puede preparar la integración hacia `main` (producción).


---


DOCUMENTACION DE CONFLICTO

1. Conflicto: Durante la fusión entre las ramas main y feature/mejoras-interfaz, surgieron conflictos en el archivo student.php. Ambas ramas modificaron las mismas secciones del código HTML —principalmente los títulos y textos de la interfaz—, como el nombre del panel, el título de la lista de alumnos y el encabezado del registro de alumnos.

<img width="709" height="192" alt="image" src="https://github.com/user-attachments/assets/fa167a57-12eb-4f53-b964-198b52725b5a" />

2. Se acepta el cambio actual

<img width="709" height="73" alt="image" src="https://github.com/user-attachments/assets/1bbeb4e6-0848-42cc-96aa-08139a81f5c2" />


3. Se acepta el cambio entrante
   <img width="709" height="83" alt="image" src="https://github.com/user-attachments/assets/866e81ee-1219-4ac2-99f0-00ed6d6c9fa7" />


4. Se acepta el cambio entrante
   <img width="709" height="78" alt="image" src="https://github.com/user-attachments/assets/2075888f-c07a-40c2-bbb6-37d5294afbc8" />


5. Se acepta el cambio entrante
   El conflicto se resolvió manteniendo los cambios de la rama feature/mejoras-interfaz, los cuales actualizaban los textos y mejoraban la presentación visual.
 <img width="709" height="78" alt="image" src="https://github.com/user-attachments/assets/445dd6a5-87f2-432a-9044-b332f699d6a7" />


6. Se guardan cambios

<img width="709" height="73" alt="image" src="https://github.com/user-attachments/assets/ca5d4eee-2f04-4b7a-8fd8-e181995a419a" />




















