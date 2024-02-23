const express = require("express");
const app = express();
const port = 3000; // porta para expor a aplicação

// configurando resposta da requisição
app.get("/", (req, res) => {
  res.send("Olá minha imagem");
});

// indicando a porta que ele ta executando
app.listen(port, () => {
    console.log(`Executando na porta: ${port}`);
})