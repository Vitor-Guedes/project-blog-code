# Projeto - Estudo Udemy

### Curso - PHP do Zero a Maestria

Primeiro projeto do curso que estou fazendo para reforçar meu conhecimento com PHP, CSS e HTML.

## Diferenças do que fiz com o que o curso demonstra:
* Docker e Docker Composer, para levantar o ambiente do desenvolvimento.
* Uso do laradocker para subir apenas os containers Nginx e Mysql
* Configuração do .config do Nginx para redirecionamento para public/index.php
* Lógica própria para identificar o template que deve ser usado de acordo com a url.

### Refatoração e aplicação de novos conceitos
* Aplicado POO, para gerencias as rotas de navegação
* Implementado arquitetura MVC com dados mockados no lugar da model

Agora o public index contem uma classe App, onde nela é listadas as rotas e de acordo com o que é guardado a controller responsavel retorna o conteudo esperado.

Rotas definidas no arquivo: src/Routes/collection.php

### Config Nginx
```.conf
server {
    server_name dev.moviestar.test;
    root /var/www/moviestar/public;
    index index.php index.html index.htm;

    location / {
         try_files $uri $uri/ /index.php$is_args$args;
    }

    location ~ \.php$ {
        try_files $uri /index.php =404;
        fastcgi_pass php-upstream;
        fastcgi_index index.php;
        fastcgi_buffers 16 16k;
        fastcgi_buffer_size 32k;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        #fixes timeouts
        fastcgi_read_timeout 600;
        include fastcgi_params;
    }

    location ~ /\.ht {
        deny all;
    }

    location /.well-known/acme-challenge/ {
        root /var/www/letsencrypt/;
        log_not_found off;
    }
}
```