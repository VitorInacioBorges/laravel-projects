# laravel-projects

Um repositório de apoio para aprender e testar aplicações feitas com o framework Laravel.

Este repositório contém um projeto de teste (pasta `test-project`) com a estrutura padrão de um aplicativo Laravel. O objetivo é servir como referência, ambiente de experimentação e base para exercícios, estudos e demonstrações.

## O projeto de teste

O diretório `test-project/` é uma aplicação Laravel pronta para desenvolvimento local. Ele inclui o código-fonte, configurações de teste, arquivos de build front-end e dependências instaladas no `vendor/`.

Principais artefatos dentro de `test-project/`:

- `artisan` — CLI do framework para comandos do Laravel.
- `composer.json` — dependências PHP e scripts.
- `package.json` e `vite.config.js` — dependências e build do front-end.
- `phpunit.xml` — configuração dos testes automatizados.

## Objetivo deste repositório

- Oferecer um ambiente de aprendizado com uma aplicação Laravel minimalista.
- Documentar a estrutura padrão do framework para desenvolvedores iniciantes.
- Servir como base para exercícios, templates de projetos ou para testar upgrades e dependências.

## Estrutura e funcionamento das pastas padrão do Laravel

Abaixo uma explicação breve do propósito de cada pasta/configuração que você encontrará em `test-project/` (e em aplicações Laravel em geral):

- `app/`

  - Contém a lógica principal da aplicação: controllers, models, policies, serviços e providers.
  - Local onde normalmente ficam seus `Http/Controllers`, `Models` e `Providers`.

- `bootstrap/`

  - Arquivos de inicialização da aplicação, incluindo `app.php` que carrega o container e as bindings.
  - A pasta `cache/` armazena caches de bootstrap gerados automaticamente (rotas, serviços) para otimizar performance.

- `config/`

  - Arquivos de configuração da aplicação (ex.: `app.php`, `database.php`, `mail.php`).
  - Modifique estes arquivos ou use variáveis de ambiente no `.env` para personalizar o comportamento.

- `database/`

  - Migrations, seeders e factories. Use migrations para versionar a schema do banco e seeders para popular dados de exemplo.

- `public/`

  - Ponto de entrada público da aplicação (index.php). Aqui ficam ativos públicos, imagens e assets compilados para produção.

- `resources/`

  - Assets não compilados (CSS, JS), views Blade (`resources/views`) e arquivos de linguagem.
  - Normalmente você compila os assets (via Vite/NPM) para `public/`.

- `routes/`

  - Arquivos de rotas web (`web.php`), API (`api.php`) e console. Definem como requisições são direcionadas para controllers.

- `storage/`

  - Arquivos gerados pela aplicação: logs, uploads, cache, sessões. Não comitar arquivos de usuário aqui; mantenha a pasta segura.

- `tests/`

  - Testes automatizados (Feature e Unit). Execute-os com `php artisan test` ou `vendor/bin/phpunit`.

- `vendor/`
  - Dependências PHP instaladas pelo Composer. Não comitar manualmente (normalmente é adicionado ao `.gitignore`), mas neste repositório a pasta pode existir para conveniência local.

## Como rodar o projeto localmente (exemplo rápido)

Requisitos mínimos: PHP >= 8.x, Composer, Node.js/NPM, um banco de dados suportado (MySQL, SQLite, Postgres).

1. Entre na pasta do projeto Laravel:

   cd test-project

2. Instale dependências PHP e JavaScript:

   composer install
   npm install

3. Configure o ambiente:

   cp .env.example .env
   php artisan key:generate

   // Ajuste as configurações de banco no `.env` antes de migrar

4. Rode migrations e seeders (se necessário):

   php artisan migrate --seed

5. Compile os assets para desenvolvimento e inicie o servidor:

   npm run dev
   php artisan serve

6. Execute os testes:

   php artisan test

   # ou

   ./vendor/bin/phpunit

Observação: dependendo do ambiente você pode preferir usar Docker/Sail ou outra ferramenta de containers.

## Contribuições e próximos passos

- Sugestões são bem-vindas: abra issues ou PRs para corrigir/expandir o material.
- Possíveis melhorias: adicionar um `.env.example` completo, scripts de CI para rodar testes automaticamente, exemplos de endpoints documentados (Postman/Insomnia) e instruções para usar Docker/Sail.

## Contato

Se precisar de ajuda, abra uma issue no repositório ou entre em contato com o mantenedor.
