1. Ejecutamos el archivo 'db.sql' (IMPORTANTE cambiar las palabras 'USUARIO' y 'CONTRASEÑA' por el usuario y contraseña deseados respectivamente)

2. Abrimos la terminal y nos dirigimos a la carpeta docker que se encuentra dentro de la carpeta Tampico34.com.

3. Escribimos en la terminal 'docker-compose up -d'.

4. En el archivo 'db.php' dentro de la carpeta 'credentials' de tampico34.com introducimos los siguientes valores:
	a. En la opcion '$credentials_servername', despues del igual y entre comillas simples escibimos la ip de la maquina.
	b. En la opcion '$credentials_username', despues del igual y entre comillas simples escribimos el usuario que hayamos introducido en el archivo 'db.sql'.
	c. En la opcion '$credentials_password', despues del igual y entre comillas simples escribimos la contraseña que hayamos introducido en el archivo 'db.sql'.
	d. En la opcion '$credentials_dbname', despues del igual y entre comillas simples escibimos 'enzo'.