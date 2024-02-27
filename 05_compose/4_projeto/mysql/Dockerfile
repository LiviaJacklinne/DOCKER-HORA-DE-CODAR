FROM mysql:5.7

# arquivo que vai criar o banco dentro do container/pasta
# o scrip vai ser criado na hora da criação da imagem
COPY schema.sql /docker-entrypoint-initdb.d/

EXPOSE 3306