### SisGetúlio2

Nascido em 2021, o [SisGetúlio]("https://github.com/ropehapi/SisGetulio") era uma plataforma que visava agilizar alguns processos pertinentes à administração do capítulo DeMolay Getúlio Pereira Salerno nº302. O projeto contou com um release onde eram liberadas funcionalidades básicas da plataforma, porém, nunca chegou a ir ao ar por questões internas.
Ao final de 2022, surgindo uma oportunidade de a plataforma ser de fato colocada no ar, foi decidido que seria melhor para o projeto, que ele fosse reformulado e reconstruído em Laravel, visando facilidade na manutenção e rapidez no desenvolvimento.

### Funcionalidades
- Gerenciamento de usuários
- Gerenciamento de membros

### Estrutura
- Backend
    - PHP v8.1.2
    - Laravel v9.39.0
- Front-end
    - Bootstrap
    - Jquery
    - [Template AdminLTE3](https://github.com/jeroennoten/Laravel-AdminLTE)

### Instalação
- `$ git clone https://github.com/ropehapi/SisGetulio2`
- `$ composer update`
- `$ php artisan adminlte:install`
- `$ php artisan migrate`
- `SQL: insert into users (id,name,email,password, profile) values(1,"root","root@sisgetulio.com","ad415aec8652bfb33b408181b44a3f9643fd74e0","ROOT");`
