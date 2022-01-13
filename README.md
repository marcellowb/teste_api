# Projeto de Teste de API

Sistema desenvolvido como teste para vaga de Desenvolvedor PHP Pleno

### Tecnologias Utilizadas
- Framework Backend: Laravel 8
- Banco de Dados Relacional: MySQL

## Instruções para Instalação

Link do Repositório
```
https://github.com/marcellowb/teste_api.git

```


- Após baixar o o projeto do repositório, executar os comandos abaixo para a instalação dos pacotes do composer
```
composer install

```

- Configurar as credenciais do banco de dados (mysql) no arquivo .env
- Caso necessário, executar o comando para configuração da chave do Laravel

```
php artisan key:generate

```

- Executar o comando para criação do banco de dados (migrations seeds)

```
php artisan migrate --seed

```

- Executar o projeto

```
Servidor Web: php artisan serve
```


## Endponts para Teste

- Cadastro de Pessoa
```
Endpoint: [HOST]/api/pessoa
Method: POST

Parâmetros (JSON) 
{
    "nome": "xxxxx",
    "endereco": "xxxxx",
    "cpf": "00000000000",
    "whatsapp": "00000000000"
}
```

- Busca de Pessoa
```
Endpoint: [HOST]/api/pessoa
Method: GET

Parâmetros (JSON) 
{
   "cpf": "xxxxxxxxxxx"
}
```
