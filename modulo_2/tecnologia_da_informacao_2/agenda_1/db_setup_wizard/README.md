<div align="center">
  <h2>DB Setup Wizard</h2>
  <p>
    <em>Database Initialization Automation | ETEC - TI2 - Agenda 1</em><br>
    <em>Automação de Inicialização de Banco de Dados | ETEC - TI2 - Agenda 1</em>
  </p>
  <p><b>Choose your language:</b><br><b>Escolha seu idioma:</b><br><a href="#study-context">English</a> | <a href="#contexto-do-estudo">Português</a></p>
  <p><b>Tech Stack & Tools</b><br><b>Tecnologias & Ferramentas</b></p>

  <img src="https://img.shields.io/badge/Windows-0078D6?style=for-the-badge&logo=windows&logoColor=white" alt="Windows" />
  <img src="https://img.shields.io/badge/Google%20Chrome-4285F4?style=for-the-badge&logo=GoogleChrome&logoColor=white" alt="Google Chrome" />
  <img src="https://img.shields.io/badge/Google%20Gemini-8E75B2?style=for-the-badge&logo=googlegemini&logoColor=white" alt="Google Gemini" />
  <img src="https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white" alt="GitHub" />
  <img src="https://img.shields.io/badge/Markdown-000000?style=for-the-badge&logo=markdown&logoColor=white" alt="Markdown" />
  <img src="https://img.shields.io/badge/Windows%20Terminal-4D4D4D?style=for-the-badge&logo=windows-terminal&logoColor=white" alt="Windows Terminal" />
  <img src="https://img.shields.io/badge/PowerShell-5391FE?style=for-the-badge&logo=powershell&logoColor=white" alt="PowerShell" />
  <img src="https://img.shields.io/badge/XAMPP-FB7A24?style=for-the-badge&logo=xampp&logoColor=white" alt="XAMPP" />
  <img src="https://img.shields.io/badge/Antigravity_(agy)-012456?style=for-the-badge&logo=powershell&logoColor=white" alt="Antigravity" />
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP" />
  <img src="https://img.shields.io/badge/Notepad++-90E59A?style=for-the-badge&logo=notepadplusplus&logoColor=white" alt="Notepad++" />
</div>

<br/>

---

### 🇺🇸 Study Context
This project bridges software engineering and infrastructure management by automating the initialization of a database. Instead of relying on manual SQL execution via tools like phpMyAdmin or CLI, I developed a custom server-side interface that acts as a deployment wizard, executing DDL (Data Definition Language) commands programmatically.

### The Application
The "DB Setup Wizard" is a PHP-powered web interface configured to connect with a local MySQL server (XAMPP environment). Upon interaction, it attempts to execute a `CREATE DATABASE` statement for a simulated banking system, providing real-time color-coded feedback to the user on the screen.

### Business Rules (Applied Logic)
1. **Automated Infrastructure Provisioning:** The backend establishes a secure connection to the local database server and executes structural SQL logic instantly via an HTTP POST request.
2. **Defensive Programming & Exception Handling:** Using native `try...catch` blocks, the system anticipates SQL exceptions (such as attempting to create a database that already exists). Instead of crashing, it catches the exception and renders a formatted warning in the UI, ensuring system stability.

### How to Run (Local Deploy)
1. Start the **Apache** and **MySQL** services in your XAMPP Control Panel.
2. Clone this repository into the Apache root folder (`htdocs`).
3. Access `http://localhost/[repository_path]/index.php` in your browser.
4. Click "DEPLOY DATABASE" and monitor the visual feedback panel.

<br/>

---

### 🇧🇷 Contexto do Estudo
Este projeto conecta a engenharia de software ao gerenciamento de infraestrutura ao automatizar a inicialização de um banco de dados. Em vez de depender da execução manual de SQL por meio de ferramentas como phpMyAdmin ou CLI, desenvolvi uma interface customizada do lado do servidor que atua como um assistente de implantação, executando comandos DDL (Data Definition Language) de forma programática.

### A Aplicação
O "DB Setup Wizard" é uma interface web baseada em PHP configurada para se conectar a um servidor MySQL local (ambiente XAMPP). Ao interagir, a aplicação tenta executar uma instrução `CREATE DATABASE` para um sistema bancário simulado, fornecendo feedback visual em tempo real na tela.

### Regras de Negócio (Lógica Aplicada)
1. **Provisionamento Automatizado de Infraestrutura:** O backend estabelece uma conexão segura com o servidor de banco de dados local e executa lógicas estruturais SQL instantaneamente via uma requisição HTTP POST.
2. **Programação Defensiva e Tratamento de Exceções:** Utilizando blocos nativos `try...catch`, o sistema antecipa exceções SQL (como a tentativa de criar um banco que já existe). Em vez de falhar criticamente, a aplicação captura a exceção e renderiza um aviso formatado na interface, garantindo a estabilidade do sistema.

<br/>

<div align="center">
  <a href="https://github.com/JohnathanWellPer/etec-desenvolvimento_de_sistemas">
    <img src="https://img.shields.io/badge/Return_to_ETEC_Root-B30000?style=for-the-badge&logo=github&logoColor=white" alt="Return to Root" />
  </a>
</div>
