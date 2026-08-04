# Sistema para Testes

## Setup do Projeto UC11

- Tela de Login
- Tela de Dashboard
- CRUD
- Realizar Testes no sistema

## Configurar VSCode

- Pastas e arquivos

Perguntar para a IA: Estou criando um novo projeto em PHP e qual seria uma configuração boa de pastas vou criar procedural.

Padrão de nome das pastas "snake_case"

    - assets (pasta para arquivos estáticos)
    - assets/css (pasta para os arquivos css)
    - assets/js (pasta para os arquivos js)
    - assets/img (pasta para os arquivos de imagem)
    - config (pasta para configurações do site)
    - includes (pasta para reaproveitar códigos e funções)
    - pages (pasta com as páginas do nosso site)

Padrão de nomes dos arquivos "snake_case" ou "kebak-case"

    - index.php (na raiz do site)
    - style.css (na pasta assets/css)
    - script.js (na pasta assets/js)
    - conn.php (na pasta config)
    - parametros.php (na pasta config - parametros do sistema)
    - navbar.php (na pasta includes - navbar do nosso site)
    - footer.php (na pasta includes - rodapé do nosso site)
    - sidebar.php (na pasta includes - barra lateral do site)
    - functions.php (na pasta includes - funções genericas do site)
    - routes.php (na pasta config - arquivo para as rotas do site)
    - .htaccess (na raiz - arquivo de configuração para o apache)
    - .env (na raiz - usado para guardar dados sensiveis)
    - .gitignore (na raiz - usado para ignorar arquivos/pastas)
    - README.md (arquivo inicial para o GitHub)

## Extensões VSCode

- Auto Rename Tag (Jun Han)
- Bootstrap 5 & Font Awesome Snippets (HansUXdev)
- MySQL (Database Client)
- Material Icon Theme (Philipp Kief)
- Open PHP/HTML/JS in Browser (PrimaFuture)
- PHP Intelephense (Intelephense)
- Portuguese (Brasil) Language Pack (Microsoft)

## Criar o layout básico do Site

- Login
- Dashboard
- Tela para Listar / Deletar (CRUD)
- Tela de Cadastro / Edição (CRUD)

## Colocar as pastas e arquivos no gitignore

.env
.htaccess
node_modules/ - biblioteca do npm (frontend)
vendor/ - biblioteca do composer (backend)


## Criar a conexão do BD

config/conn.php




