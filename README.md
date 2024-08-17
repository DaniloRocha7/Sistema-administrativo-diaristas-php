## Projeto sistema administrativo da plataforma E-Diaristas

Desenvolvido no curso multi-stack da treinawev

### instalando o projeto

#### Clonar o repositorio

```
git clone https://github.com/DaniloRocha7/sistema-administrativo-diaristas-php.git

```

#### instalar as depencências

```
conposer install

```

ou dm ambiente de desenvolvimento:

```
composer pudate
```

#### Criar arquivo de configurações de ambiente

Compiar o arquivo de exemplo `.env.exemple` para `.env` na raiz do projeto
configurar os detalhes da aplicação e conexão com o banco de dados.

#### Criar a estrutura no banco de dados

```
php artisan migrate
```

```
php artisan serve
```
