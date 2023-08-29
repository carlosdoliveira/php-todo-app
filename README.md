# Documentação do Projeto To-do List em PHP

## Visão Geral

O projeto To-do List em PHP é uma aplicação web para gerenciar listas de tarefas. Ele permite que os usuários criem, visualizem e gerenciem suas tarefas de forma eficiente.

## Estrutura de Pastas

A estrutura de pastas do projeto foi organizada de acordo com as melhores práticas de desenvolvimento web. Aqui está um resumo da estrutura:

```
- /ToDoApp
  - /public
    - index.php
    - style.css
  - /src
    - /Controller
      - TaskController.php
    - /Model
      - Task.php
    - /View
      - /templates
        - layout.php
        - task_list.php
    - /Repository
      - TaskRepository.php
  - /config
    - config.php
  - /vendor
```

## Configuração

A aplicação se conecta a um banco de dados MySQL usando informações obtidas de variáveis de ambiente. Certifique-se de configurar corretamente as seguintes variáveis de ambiente no arquivo `.env`:

```
DB_HOST=seu_host_mysql
DB_NAME=seu_banco_de_dados
DB_USER=seu_usuario
DB_PASS=sua_senha
```

## Funcionalidades

### Exibição de Tarefas

A página inicial `index.php` exibe a lista de tarefas. Cada tarefa é exibida na página utilizando o arquivo de visualização `task_list.php`.

### Adição de Tarefas

Os usuários podem adicionar novas tarefas à lista usando o formulário na página inicial. O controlador `TaskController.php` gerencia essa funcionalidade.

### Estilo Personalizado

O estilo da aplicação é definido no arquivo `style.css` na pasta `/public`. Personalize esse arquivo para atender às preferências de estilo da sua aplicação.

## Desenvolvimento

Para contribuir com o projeto, siga as melhores práticas de desenvolvimento e orientação a objetos. Use os métodos definidos nas classes `Task` e `TaskRepository` para acessar e manipular os dados das tarefas.

## Dependências

O projeto utiliza o Composer para gerenciar as dependências. Certifique-se de executar `composer install` para instalar as bibliotecas necessárias.

## Conclusão

A documentação fornece uma visão geral das principais funcionalidades, estrutura de pastas e configurações do projeto To-do List em PHP. Use essa documentação como referência durante o desenvolvimento e compartilhe-a com outros desenvolvedores que possam colaborar no projeto.
