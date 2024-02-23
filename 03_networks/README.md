### Comando caso dê erro de acesso ao banco
```
docker run -d --network=host --add-host host.docker.internal:127.0.0.1  -p 5000:5000 --name flaskhostcontainer --rm flaskhost
```
>OBS: mudar o ip de acordo com seu banco

>Genérico
>```
>docker run -d --network=host --add-host host.docker.internal:127.0.0.1  -p 5000:5000 --name containerName --rm imageName
>```
