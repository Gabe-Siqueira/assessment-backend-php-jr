# Teste para candidatos à vaga de Desenvolvedor PHP Júnior

Olá, caro desenvolvedor ou desenvolvedora! Neste teste, iremos avaliar seu conhecimento geral e sua habilidade de desenvolvimento, inclusive sua eficiência na programação. A seguir, apresentaremos todos os detalhes necessários.

## Teste

O desafio é desenvolver um sistema de cadastro. Esse sistema será composto de um cadastro de clientes e produtos. Os requisitos desse sistema estão listados nos tópicos abaixo. Também é solicitada uma solução para as duas questões listados abaixo em 'Raciocínio Lógico'. Não existe certo ou errado, queremos saber como você se sai em situações reais como esse desafio.

## Instruções

O desafio consiste em implementar uma aplicação Web utilizando a linguagem PHP, e um banco de dados relacional MySQL, a partir do script 'php_mvc.sql'.

Você vai criar uma aplicação de cadastro, a partir de uma modelagem inicial, com as seguintes funcionalidades:

- CRUD de clientes.
- CRUD de produtos.

## Modelo de dados

- Tabela db_cliente:
    - cliente_id (Chave primária)
    - cliente_nome
    - create_at 

- Tabela db_produto: 
    - produto_id (Chave primária)
    - produto_nome
    - produto_valor
    - create_at 

- Implementação das validações necessárias na camada que julgar melhor.

## Tecnologias a serem utilizadas

Devem ser utilizadas as seguintes tecnologias (preferencialmente na versão mais recente):

- PHP
- MySQL

## Raciocínio Lógico

**Questão 1:**
---
Escreva um código em PHP que, dada uma matriz bidimensional (uma matriz), encontre o maior número contido na matriz. A matriz é composta por linhas e colunas de números inteiros, e o código deve determinar qual desses números é o maior.

- Exemplo de Matriz:
```php
[
  [45, 12, 78],
  [34, 55, 90],
  [22, 75, 60]
]
```

**Questão 2:**
---
Crie um programa em PHP que leia o conteúdo de um arquivo de texto (test/arquivo.txt) e realize as seguintes operações:

- Conte a quantidade total de caracteres no arquivo.
- Conte a quantidade total de palavras no arquivo.
- Exiba o conteúdo completo do arquivo na tela.

Lembre-se de verificar a existência do arquivo, e se ele não existir, exiba uma mensagem indicando que o arquivo não foi encontrado. Certifique-se de usar a função file_get_contents para ler o arquivo e a função echo para exibir o conteúdo na tela.

**Observação:**
---
Implementar solução em test/index.php.

## Entrega

- Por favor, envie um e-mail para [rogerio@onilearning.com.br] contendo o link do seu repositório. O repositório do teste deve ser público.
- Em caso de dúvidas sobre o teste, não hesite em entrar em contato conosco.

## Bônus (Opcional)

- Implementar a camada de Front-End utilizando a biblioteca javascript Bootstrap e ser responsiva.
- API Rest JSON para todos os CRUDS listados acima.

## O que iremos analisar

- Organização do código;
- Soluções adotadas;
- Tecnologias utilizadas;
- Separação de módulos e componentes;
- Legibilidade;
- Qualidade;
- Enfim, tudo será observado e levado em conta

### Boa sorte!