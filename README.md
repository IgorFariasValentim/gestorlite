# 👔 GestorLite – Sistema de Cadastro de Funcionários

Sistema simples e funcional desenvolvido com **PHP** e **MySQL**, com interface moderna e leve. Criado para praticar lógica, organização de código, banco de dados e sessões em PHP — ideal para pequenos cadastros internos.

![Screenshot](screenshot2.png)

---

## ✨ Funcionalidades

- ✅ Login com sessão
- ✅ Cadastro de funcionários
- ✅ Listagem com busca (ordenada por nome)
- ✅ Edição e exclusão de registros
- ✅ Layout limpo, responsivo e intuitivo
- ✅ Código simples, comentado e fácil de expandir

---

## 🚀 Como rodar localmente

### 🛠️ Requisitos:
- XAMPP ou WAMP instalado

### 📦 Passos:

1. Clone ou baixe este repositório
2. Copie a pasta para `C:/xampp/htdocs/`
3. Inicie `Apache` e `MySQL` no XAMPP
4. Acesse [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
5. Crie um banco chamado `gestorlite`
6. Importe o arquivo `banco.sql` (vem junto com o projeto)
7. Acesse o sistema em:  
   👉 [http://localhost/gestorlite/](http://localhost/gestorlite/)

### 🔐 Login de acesso:
- **Usuário:** `admin`  
- **Senha:** `123`

---

## 📁 Estrutura de arquivos
```
gestorlite/
├── index.php            # Tela de login
├── conexao.php          # Conexão com o banco de dados
├── cadastrar.php        # Cadastro de funcionários
├── listar.php           # Listagem de dados
├── editar.php           # Edição
├── excluir.php          # Exclusão
├── banco.sql            # Estrutura inicial do banco
└── screenshot2.png      # Imagem de preview
```

---

## 🚀 Autor
**Igor Farias Valentim**  
[github.com/IgorFariasValentim](https://github.com/IgorFariasValentim)

Se esse projeto te ajudou, deixa uma ⭐ lá no repositório!
