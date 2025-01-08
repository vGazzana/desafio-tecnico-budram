## Desafio Tecnico Brudam

### Pré-requisitos

Certifique-se de ter os seguintes softwares instalados em sua máquina:

- Docker
- Docker Compose
- Node.js
- NPM

### Iniciando o Projeto

Para iniciar o projeto utilizando Docker, siga os passos abaixo:

1. Certifique-se de ter o Docker e o Docker Compose instalados em sua máquina.
2. No diretório raiz do projeto, execute o comando abaixo para construir e iniciar os containers:
    ```sh
    docker-compose up --build
    ```

### Rodando as Migrations

Para rodar as migrations dentro do container Docker, siga os passos abaixo:

1. Acesse o container da aplicação:
    ```sh
    docker-compose exec app bash
    ```
2. Dentro do container, execute o comando abaixo para rodar as migrations:
    ```sh
    php artisan migrate
    ```

### Rodando os Seeders

Para rodar os seeders dentro do container Docker, siga os passos abaixo:

1. Acesse o container da aplicação (caso ainda não tenha feito):
    ```sh
    docker-compose exec app bash
    ```
2. Dentro do container, execute o comando abaixo para rodar os seeders:
    ```sh
    php artisan db:seed
    ```

### Instalando Dependências do NPM e Build do TailwindCSS

Para garantir que você tenha acesso ao CSS do TailwindCSS, siga os passos abaixo:

1. No diretório raiz do projeto, execute o comando abaixo para instalar as dependências do NPM:
    ```sh
    npm install
    ```
2. Após a instalação das dependências, execute o comando abaixo para construir os arquivos CSS:
    ```sh
    npm run build
    ```

Agora você está pronto para utilizar o projeto!