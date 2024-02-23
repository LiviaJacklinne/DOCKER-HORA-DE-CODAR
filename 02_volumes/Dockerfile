FROM php:8-apache

WORKDIR /var/www/html

COPY . .

EXPOSE 80

# dando permissão para o usuário em todos os arquivos do nosso projeto
RUN chown -R www-data:www-data /var/www
# permisão de escrita, leitura e gravação
RUN chmod -R 777 /var/www/html/