# Sistema de Autenticação e Registro de Usuários com PHP - Prigramação III

**Nome:** [Roney Bieger Anschau]  
**Turma:** [ 5a Fase - Ciência da Computação - UNOESC]  
**Professor:** [Leandro Otavio Cordova Vieira]

## :exclamation: Descrição

Projeto acadêmico para a disciplina de Programação III.  
O objetivo é construir um sistema de autenticação de usuários utilizando apenas PHP puro com orientação a objetos.

## :pushpin: Funcionalidades

- Cadastro de usuário (nome, e-mail, senha)
- Login com verificação de senha (via `password_verify`)
- Área restrita com saudação personalizada
- Armazenamento do e-mail em cookie ("Lembrar e-mail")
- Logout com destruição da sessão
- Estrutura organizada por classes e arquivos

## :page_facing_up: Classes

- `Usuario`: representa o usuário e encapsula dados como nome, e-mail e senha.
- `Sessao`: gerencia a sessão via métodos estáticos.
- `Autenticador`: simula o banco de dados com array e gerencia autenticação.
##  Diferenciais Implementados
- password_hash() e password_verify() usados para proteger as senhas
- Sessão iniciada e protegida nas rotas restritas
- Cookies funcionais com checkbox "Lembrar e-mail"
- Código limpo, comentado e modularizado com OOP


##  Como Executar Localmente

1. Clone o repositório:

```bash
git clone https://github.com/Roneybieger/prog3-a1-poo-roney-bieger-anschau

Inicie o servidor embutido com PHP:

cd prog3-a1-poo-roney-bieger-anschau
php -S localhost:8000

Acesse pelo navegador:

http://localhost:8000


