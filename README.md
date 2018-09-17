# Projeto de prática com o framework laravel

Este projeto foi realizado com o intuito da prática do framework laravel. O projeto consiste em um todo list feito em laravel utilizando algumas das estruturas fornecidas pelo framework.

> ### Libs utilizadas
Foram utilizadas algumas libs neste projeto em conjunto com o laravel:
+  [Bootstrap](https://getbootstrap.com/)
+  [SweetAlert](https://sweetalert.js.org/)
+  [jQuery](https://jquery.com/)
+  [Sass](https://sass-lang.com/)
+  [Laravel Mix](https://laravel.com/docs/5.4/mix)

> ### Executando o projeto

Para executar o projeto é necessário a realização de alguns procedimentos:

+  Executar update do composer:  Executar `composer install` para a instalação das libs e ferramentas do laravel
+  Configurar arquivo env: Como todo projeto laravel, é necessária a configuração do arquivo .env na raiz do diretório. _Informar a configuração do banco de dados no arquivo .env_
+  Gerar token do laravel: Após criado e configurado o arquivo .env é necessário gerar o token com o comando `php artisan key:generate` 
+  Executar as migrations: Executar as migrations para a criação das tabelas no banco `php artisan migrate`
+  Instalar libs npm:  Este projeto utiliza o laravel mix para a compilação dos assets necessários para as views. Executar `npm install`
+  Realizar a compilação dos assets: O projeto está configurado para a compilaçãos dos assets (sass, js e etc) utilizando o laravel mix, para ambientes de desenvolvimente rode o comando `npm run dev` ou `npm run prod` para ambientes de produção
