# Projeto Hublife

Este projeto foi gerado com Wordpress versão 5.5.1 

# Primeiro Passo:
Para ter Acesso a esse projeto basta da um git clone no projeto.
# Segundo Passo:
Dentro do projeto você pode acessar a pasta sql e fazer o dump do banco de dados em server de sua preferência.
## Instalando o Wordpress Localmente:
Você pode Saber o passo a passo de como instalar o wordpress localmente através do  [link](https://www.mirago.com.br/aula/como-instalar-wordpress-localhost)

# Terceiro Passo:
## Instalando o Node (caso não tenha)
é necessário para o próximo passo ter o node instalado, caso você não tenha acesse [aqui](https://nodejs.org/en/) e baixe.
## Instalando o gulp Globalmente (Caso não tenha) 
é necessário ter instalado  gulp de forma global na sua maquina, caso não tenha acesse [aqui](https://gulpjs.com/docs/en/getting-started/quick-start)
Após baixar o projeto e instalar o wordpress na sua maquina, é necessário acessar a pasta  do tema do projeto através do terminal (contido no seguinte caminho wp-content/themes/hublife)

Com o caminho acessado é necessário rodar o comando `npm install` para baixar as depências do projeto.

# Quarto passo 
Após as instalações das dependências do gulp é necessário modificar a url continda dentro do arquivo `gulpfile.js`.

obs: No meu caso eu estou utilizando o [local by Flyweel](https://localwp.com/) você pode alterar para o server que você utilizar como mamp ou wamp.

No Arquivo `gulpfile.js` temos o seguinte trecho de código:

`
    function browser() {
    browserSync.init({
        proxy:'http://hublife.dev'
    })
}
`

Basta trocar a url do proxy, para a url onde você vai acessar o projeto( ex: localhost/hublife)

# O Projeto
![App UI](/app.png)








