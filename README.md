# esihonduras
Proyecto ESI Honduras

Repositorio esihonduras creado en Github el Martes 23 de Septiembre del 2025.

## Manual de instalación y Configuración:

De acuerdo a las especificaciones mencionadas por parte del Gobierno de Honduras, se ha creado un script de instalación para el Sistema Operativo Linux. El archivo en cuestión (installESI.sh) debe ser dado de alta como ejecutable, ya sea por medio de interfaz gráfica, o bien por medio de terminal con la orden: sudo chmod +x installESI.sh

Este instalador incluye la instalación de extensiones PHP que son cruciales para su funcionamiento, como son: php-mbstring php-exif php-gd php-imagick php-xml php-curl

Posterior a una instalación exitosa continuamos con la configuración.

1. **Modo Mantenimiento**:
Cada que sea necesario, se puede desviar el tráfico de la Plataforma ESI Honduras al Modo Mantenimiento, el cuál mostrará una página provisional. Esta función se puede activar o desactivar cambiando el nombre del archivo man.on of man.off respectivamente. Por defecto se encuentra inhabilitado el Modo Mantenimiento por lo que el nombre del archivo es man.off

2. **Configura .htaccess**:
Para comenzar, se renombra el archivo .htaccess.example por .htaccess
Posteriormente, en la línea 13 "RewriteRule ^(.*)index$ /produccion/esihonduras/ [R=301,L]" se establece si la raíz de la Platafoma será directamente en la raíz del directorio actual (por ejemplo /) o si se encuentra dentro de algún subdirectorio (por ejemplo /produccion/esihonduras/)

3. **Configura Variables de Entorno**:
Para comenzar, se renombra el archivo .env.example por .env
A continuación ingresamos las credenciales necesarias para la base de datos local en donde se encuentran los datos de la Plataforma ESI Honduras

4. **Configura Archivo Init**:
Para comenzar, se renombra el archivo init.php.example por init.php
Encontraremos dos datos importantes a configurar en este archivo. El primero será "define('APP_SUBFOLDER', 'produccion/esihonduras');" en donde declaramos si la raíz de la Platafoma será directamente en la raíz del directorio actual (es decir, sin subdirectorios, por lo que esta constante se declara vacía) o si se encuentra dentro de algún subdirectorio (por ejemplo /produccion/esihonduras/)
Dentro de init.php también encontramos las siguientes líneas "define('DEBUG', true);" y "define('PRODUCTION', false);" con las cuales se habilitan o deshabilitan las herramientas de debug del sistema. Una vez en producción es lo óptimo desactivar debug, y activar producción.

Como medida final, es buena idea tomar en cuenta configuraciones adicionales dentro de php.ini para asegurar la habilitación de todo lo necesario para carga de archivos, como la configuración correcta del directorio temporal, los tamaños máximos de carga de archivos, y la cantidad máxima de cargas simultáneas.