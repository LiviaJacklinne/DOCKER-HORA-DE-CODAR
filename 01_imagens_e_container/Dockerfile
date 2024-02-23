# Imagem base
FROM node 

# Configurando diretório
WORKDIR /app

COPY package*.json . 

# comando para rodar a imagem 
RUN npm install

COPY . .

EXPOSE 3000

CMD ["node", "app.js"]