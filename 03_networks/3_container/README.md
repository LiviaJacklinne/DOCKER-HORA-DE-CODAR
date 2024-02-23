### Subindo as aplicações
- Build
    ```
    docker build -t flaskapinetwork .
    ```
    ```
    docker build -t mysqlapinetwork .
    ```

- Criando o network
    ```
    docker network create flasknetwork
    ``` 
- Subindo as imagens
    ```
    docker run -d -p 5000:5000 --name flask_api_container --rm --network flasknetwork flaskapinetwork
    ``` 
    ```
    docker run -d -p 3306:3306 --name mysql_api_container --rm --network flasknetwork -e MYSQL_ALLOW_EMPTY_PASSWORD=True mysqlapinetwork
    ```    