# Piloti - Teste de Estágio

## Pré requisitos

Para executar esse projeto, é necessário que as ferramentas listadas abaixo estejam instaladas.

- [Composer](https://getcomposer.org/download/)
- [NPM (NodeJS)](https://nodejs.org/en/download/)
- É necessário também um servidor que atenda os requisitos para execução do Framework Laravel em sua versão 5.5. Mais informações [nesse link](https://laravel.com/docs/5.5/installation#server-requirements).


## Antes de começar

Renomeie o arquivo `.env.example` para `.env`. Nesse arquivo, preencha o endereço do host, porta, nome do banco de dados, além do usuário e a senha do sgdb.

Na raiz do projeto, execute os passos a seguir na ordem em que serão apresentados.

- `composer install`
- `npm install`
- `npm run prod`
- `php artisan migrate`
- `php artisan db:seed`
- `php artisan serve`
- Acesse no seu browser o endereço http://localhost:8000

## Sobre o teste

Se todos os passos anteriores foram executados sem problemas, já é possível que um usuário visitante crie e gerencie sua conta. Além disso, o sistema já vem com uma conta com privilegios de administrador. Os dados de acesso dessa conta são:

email: `adm@adm.com`

senha: `123`

Com essa conta, o usuário poderá atualizar os dados de sua própria conta, além de poder também atualizar e excluir o cadastro de outros usuários. A listagem de usuários deletados também está disponível. Todos os links de acesso as páginas do sistema ficam em um menu no canto superior direito.

## Dúvidas

Caso tenha alguma dúvida, pode me chamar no e-mail cleiton.spereira@live.com.