## Desafio Tecnico Laravel

### Pré-requisitos

Certifique-se de ter os seguintes softwares instalados em sua máquina:

-   Docker
-   Docker Compose
-   Node.js
-   NPM

### Configuração Inicial do Projeto

1. Clone o repositório:
    ```sh
    git clone git@github.com:vGazzana/desafio-tecnico-laravel.git
    cd desafio-tecnico-laravel
    ```
2. Copie o arquivo de configuração `.env.example` e renomeie para `.env`
    ```sh
    cp .env.example .env
    ```

### Iniciando o Projeto

Para iniciar o projeto utilizando Docker, siga os passos abaixo no diretório raiz do projeto `desafio-tecnico-laravel`:

1. Instale as dependências do Composer dentro do container:
    ```sh
    docker-compose run --rm app composer install
    ```
2. Gere a chave da aplicação Laravel:
    ```sh
    docker-compose run --rm app php artisan key:generate
    ```
3. Suba os containers:
    ```sh
    docker-compose up --build
    ```
4. Execute as migrations para criar as tabelas:
    ```sh
    docker-compose exec app php artisan migrate
    ```
5. Popule o banco de dados com os seeders:
    ```sh
    docker-compose exec app php artisan db:seed
    ```
6. Instale as dependências do NPM:
    ```sh
    npm install
    ```
7. Compile os arquivos CSS utilizando o comando:
    ```sh
    npm run build
    ```
8. Agora você está pronto para utilizar o projeto!

### Resumo dos Comandos Principais

| Descricao                      | Comando                                                              |
| ------------------------------ | -------------------------------------------------------------------- |
| Instalar dependências Composer | docker-compose run --rm app composer install                         |
| Gerar chave da aplicação       | docker-compose run --rm app php artisan key:generate                 |
| Subir os containers            | docker-compose up --build -d                                         |
| Rodar as migrations            | docker-compose exec app php artisan migrate                          |
| Rodar os seeders               | docker-compose exec app php artisan db:seed                          |
| Instalar dependências NPM      | npm install                                                          |
| Compilar TailwindCSS           | npm run build                                                        |
| Iniciar o servidor Laravel     | docker-compose exec app php artisan serve --host=0.0.0.0 --port=8000 |
