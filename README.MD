# Sistema de Autenticação POO - PHP Puro

**Nome:** [Roney Bieger Anschau]  
**Turma:** [Programação III]  

## 📋 Descrição

Projeto acadêmico para a disciplina de Programação III.  
O objetivo é construir um sistema de autenticação de usuários utilizando apenas PHP puro com orientação a objetos.

## 🚀 Funcionalidades

- Cadastro de usuário (nome, e-mail, senha)
- Login com verificação de senha (via `password_verify`)
- Área restrita com saudação personalizada
- Armazenamento do e-mail em cookie ("Lembrar e-mail")
- Logout com destruição da sessão
- Estrutura organizada por classes e arquivos

## 🧠 Classes

- `Usuario`: representa o usuário e encapsula dados como nome, e-mail e senha.
- `Sessao`: gerencia a sessão via métodos estáticos.
- `Autenticador`: simula o banco de dados com array e gerencia autenticação.

## 🛠️ Como Executar Localmente

1. Clone o repositório:

```bash
git clone https://github.com/Roneybieger/prog3-a1-poo-roney-bieger-anschau
