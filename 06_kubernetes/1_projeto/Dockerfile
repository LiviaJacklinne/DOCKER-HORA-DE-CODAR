FROM python:3

RUN apt-get update -y && \
  apt-get install -y python3-pip python3-dev

WORKDIR /app

RUN pip install Flask

COPY . .

EXPOSE 5000

# Comando que vão inicializar o projeto
# O python vai chamar o arquivo app.py = python app.py
CMD [ "python3", "./app.py"]