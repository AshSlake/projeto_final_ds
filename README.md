# 🧩 Projeto Final DS — Sistema de Cadastro Profissional (PHP + MySQL)

## 📘 Visão Geral

O **projeto_final_ds** é um sistema de gerenciamento de **informações profissionais e acadêmicas** desenvolvido em **PHP** com integração a um banco de dados **MySQL**.  
O sistema permite cadastrar usuários e armazenar suas **formações acadêmicas, experiências profissionais** e **outras formações complementares**.

Este projeto foi desenvolvido como **trabalho final da disciplina de Desenvolvimento de Sistemas (DS)**, com foco em **programação orientada a objetos (POO)** e **manipulação de banco de dados**.

---

## 🧱 Estrutura do Projeto

```
projeto_final_ds/
│
├── ConexaoDB.php                # Classe responsável pela conexão com o banco de dados
├── User.php                     # Classe principal de usuários (CRUD)
├── FormacaoAcademica.php        # Gerencia formações acadêmicas
├── ExperienciaProfissional.php  # Gerencia experiências profissionais
├── OutrasFormacoes.php          # Gerencia cursos e formações complementares
```

---

## ⚙️ Tecnologias Utilizadas

| Tecnologia | Função |
|-------------|--------|
| **PHP 8+** | Linguagem principal do sistema |
| **MySQL** | Banco de dados relacional |
| **MySQLi** | Biblioteca usada para conexão e execução de queries |
| **XAMPP / Laragon** | Ambiente local de desenvolvimento |
| **HTML/CSS/JS (opcional)** | Camada de interface (se integrada futuramente) |

---

## 🧩 Arquitetura do Sistema

O sistema segue um modelo **modular orientado a objetos**, com cada entidade representada por uma classe específica.  
Todas as classes compartilham a mesma instância de conexão com o banco via `ConexaoDB.php`.

### 🔹 Classe `ConexaoDB`
Responsável por criar e retornar uma conexão MySQLi.

### 🔹 Classe `User`
Gerencia os **dados principais do usuário** e realiza operações CRUD na tabela `usuario`.

### 🔹 Classe `FormacaoAcademica`
Gerencia as **formações acadêmicas** de cada usuário.

### 🔹 Classe `ExperienciaProfissional`
Gerencia **experiências profissionais** associadas ao usuário.

### 🔹 Classe `OutrasFormacoes`
Gerencia **cursos, certificados ou formações complementares**.

---

## 💾 Banco de Dados

**Nome do Banco:** `projeto_final`

**Tabelas sugeridas:**
- `usuario`  
- `formacao_academica`  
- `experiencia_profissional`  
- `outras_formacoes`

> 💡 Recomenda-se criar o banco de dados via **phpMyAdmin** antes de executar o projeto, ajustando as credenciais no arquivo `ConexaoDB.php`.

---

## 🚀 Como Executar o Projeto

1. Clone o repositório:
   ```bash
   git clone https://github.com/SEU_USUARIO/projeto_final_ds.git
   ```

2. Configure o servidor local (XAMPP ou Laragon):
   - Mova os arquivos para o diretório `htdocs` (ou equivalente).
   - Crie o banco de dados `projeto_final`.
   - Importe as tabelas manualmente (estrutura baseada nas classes).

3. Ajuste o arquivo de conexão:
   ```php
   private $serverName = "localhost";
   private $userName = "root";
   private $password = "SENHA";
   private $dbName = "projeto_final";
   ```

4. Acesse no navegador:
   ```
   http://localhost/projeto_final_ds/
   ```

---

## 🧠 Conceitos Aplicados

- Programação Orientada a Objetos (POO)
- Encapsulamento e uso de *getters/setters*
- Separação modular de responsabilidades
- Acesso a banco de dados via `mysqli`
- Criação e manipulação de registros com segurança básica

---

## 🧪 Testes e Exemplos de Uso

Exemplo de inserção de usuário:
```php
$user = new User(0, "João Silva", "12345678900", new DateTime("1990-05-20"), "joao@email.com", "1234");
$user->inserirBD();
```

Listar formações acadêmicas:
```php
$formacao = new FormacaoAcademica(0, $user->getUserId(), new DateTime("2018-01-01"), new DateTime("2022-12-01"), "Bacharel em Sistemas de Informação");
$formacao->inserirDB();
```

---

## 🧑‍💻 Autor

**Paulo Henrique**  
💼 Projeto desenvolvido como projeto final da disciplina **Desenvolvimento de Sistemas**.  
📅 Ano: 2025  
📧 Contato: *ashslake264@gmail.com*  

---

## 🪪 Licença

Este projeto é de uso **educacional**, sem fins comerciais.  
Sinta-se livre para reutilizar o código com os devidos créditos.

---

### ⭐ Dica
Se este projeto te ajudou, deixe uma **estrela no repositório** 🌟  
Isso ajuda a valorizar o trabalho e a fortalecer o portfólio acadêmico!
