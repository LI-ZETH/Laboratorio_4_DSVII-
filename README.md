# Laboratorio_4_DSVII-
Nombre: Genesis Luo
Cédula: 8-1020-1006
Salón: 1GS131

Instrucciones Importantes
  El comando `composer dump-autoload` de Composer actualiza el sistema de carga automática de clases del proyecto, 
  permitiendo que PHP reconozca nuevas clases o cambios en namespaces sin usar `require` manualmente.

Estructura de los Archivos
  La estructura del proyecto está organizada en varias carpetas y archivos con funciones específicas. La carpeta **App** 
  contiene la clase `User.php`, donde se define la lógica relacionada con los usuarios del sistema. La carpeta **Database** 
  incluye una subcarpeta llamada **Modelo**, en la cual se encuentra el archivo `ProductModelo.php`, encargado de representar 
  la lógica o estructura de los productos en la base de datos. La carpeta **vendor**, generada automáticamente por Composer, 
  contiene los archivos necesarios para gestionar dependencias y el archivo `autoload.php`, que permite la carga automática de 
  clases. Finalmente, el archivo `index.php` actúa como punto de entrada principal de la aplicación, mientras que `composer.json` 
  almacena la configuración del proyecto, incluyendo la definición del autoload siguiendo el estándar PSR-4.

Conclusión
  Durante el laboratorio se identificaron beneficios importantes del uso de autoloading en PHP:
    Mantenibilidad: Permite agregar nuevas clases sin modificar archivos de configuración o incluir manualmente require o include, facilitando el mantenimiento del código.
    Eficiencia de memoria: Con el uso de Lazy Loading, las clases se cargan solo cuando se necesitan, optimizando recursos y mejorando el rendimiento.
    Estandarización: Seguir el estándar PSR-4 mejora la organización del proyecto y facilita el trabajo colaborativo entre desarrolladores.
