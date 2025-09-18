"# ProyectoHerramientasDesarrollo" 
Este proyecto tiene como objetivo poner en práctica el uso de **Git y GitHub** para la gestión de versiones, ramas, commits y fusiones entre entornos de desarrollo.  

## 🚀 Funcionalidades
- Gestión de ramas con flujos de trabajo organizados.
- Desarrollo modular con las siguientes ramas:
  - `developer`: rama principal de desarrollo.
  - `feature-pagos`: implementación de funcionalidades relacionadas a pagos.
  - `feature-recibo`: implementación de funcionalidades relacionadas a recibos.
- Ejemplos de commits, merges y resolución de conflictos.

## 📂 Estructura del proyecto
ProyectoHerramientasDesarrollo/
├── index
├── function
├── connexion
└── README.md
## 🌳 Flujo de ramas
1. Las nuevas características se crean en ramas `feature-*`.  
2. Una vez listas, se integran en `developer` mediante **merge**.  
3. Desde `developer`, se puede preparar la integración hacia `main` (producción).

Ejemplo:
```bash
# Estar en developer
git checkout developer

# Traer cambios de una rama feature
git merge feature-pagos
git merge feature-recibo

# Subir cambios
git push origin developer
