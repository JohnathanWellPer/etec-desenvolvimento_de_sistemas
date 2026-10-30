<div align="center">
  <h1>Corporate Badge Generator</h1>
  <p>
    <em>Corporate Badge Generator | ETEC - DS2 - Agenda 1</em><br>
    <em>Gerador de Crachá Corporativo | ETEC - DS2 - Agenda 1</em>
  </p>
  <p>
    <b>Choose your language:</b><br>
    <b>Escolha seu idioma:</b><br>
    <a href="#english">English</a> | <a href="#portuguese">Português</a>
  </p>
</div>

<br/>

<div align="center">
  <h3>Tech Stack & Tools<br>Tecnologias & Ferramentas</h3>
  <img src="https://img.shields.io/badge/Windows-0078D6?style=for-the-badge&logo=windows&logoColor=white" alt="Windows" />
  <img src="https://img.shields.io/badge/Google%20Chrome-4285F4?style=for-the-badge&logo=GoogleChrome&logoColor=white" alt="Google Chrome" />
  <img src="https://img.shields.io/badge/Google%20Gemini-8E75B2?style=for-the-badge&logo=googlegemini&logoColor=white" alt="Google Gemini" />
  <img src="https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white" alt="GitHub" />
  <img src="https://img.shields.io/badge/Markdown-000000?style=for-the-badge&logo=markdown&logoColor=white" alt="Markdown" />
  <img src="https://img.shields.io/badge/Notepad++-90E59A?style=for-the-badge&logo=notepadplusplus&logoColor=black" alt="Notepad++" />
  <img src="https://img.shields.io/badge/XAMPP-F37623?style=for-the-badge&logo=xampp&logoColor=white" alt="XAMPP" />
  <img src="https://img.shields.io/badge/Windows%20Terminal-4D4D4D?style=for-the-badge&logo=windows-terminal&logoColor=white" alt="Windows Terminal" />
  <img src="https://img.shields.io/badge/Antigravity_CLI-4285F4?style=for-the-badge&logo=google&logoColor=white" alt="Antigravity CLI" />
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP" />
</div>

<br/>
<hr/>
<br/>

<div id="english"></div>

## Study Context

> This project introduces the foundational architecture of web applications by separating processing environments: the Client-side (user's browser) and the Server-side (the web server). Using PHP hosted on an Apache server (via XAMPP), it demonstrates how a server processes logic, accesses hidden variables, and dynamically generates the final HTML structure before sending it back to the client as a secure response.

<br/>

## The Application

A dynamic corporate badge generator that simulates a backend endpoint. The application stores employee credentials inside isolated PHP server variables and securely renders a styled HTML/CSS identification card (Dark Mode theme) displaying the employee's name, age, job title, and the real-time server date.

<br/>

## Business Rules (Applied Logic)

1. **Server-Side Rendering:** All sensitive employee data is processed inside the server logic (`<?php ... ?>`). Only the final resulting text is sent to the browser, hiding the application's source variables and business rules from the end user.
2. **Dynamic Timestamp Injection:** The badge's issue date is not hardcoded; it is dynamically generated using PHP's native `date()` function exactly at the moment the client requests the page from the Apache server.

<br/>

## How to Run (Local Deploy)

1. Install and start the **XAMPP Control Panel**.
2. Click **"Start"** on the Apache service module.
3. Clone this repository inside the local Apache root directory: `C:\xampp\htdocs\`.
4. Open a web browser (e.g., Google Chrome) and type: `http://localhost/[repository_path]/index.php` to execute the server script.

<br/>
<hr/>
<br/>

<div id="portuguese"></div>

## Contexto do Estudo

> Este projeto introduz a arquitetura fundamental de aplicações web ao separar os ambientes de processamento: o Client-side (navegador do usuário) e o Server-side (o servidor web). Utilizando PHP hospedado em um servidor Apache (via XAMPP), ele demonstra como um servidor processa lógica, acessa variáveis ocultas e gera dinamicamente a estrutura HTML final antes de enviá-la de volta ao cliente como uma resposta segura.

<br/>

## A Aplicação

Um gerador dinâmico de crachá corporativo que simula um endpoint de backend. A aplicação armazena credenciais de funcionários dentro de variáveis isoladas no servidor PHP e renderiza de forma segura um cartão de identificação HTML/CSS estilizado (tema Dark Mode) exibindo o nome, idade, cargo do funcionário e a data do servidor em tempo real.

<br/>

## Regras de Negócio (Lógica Aplicada)

1. **Renderização no Lado do Servidor:** Todos os dados sensíveis do funcionário são processados dentro da lógica do servidor (`<?php ... ?>`). Apenas o texto resultante final é enviado para o navegador, ocultando as variáveis de origem da aplicação e as regras de negócio do usuário final.
2. **Injeção Dinâmica de Data:** A data de emissão do crachá não é estática; ela é gerada dinamicamente utilizando a função nativa `date()` do PHP exatamente no momento em que o cliente solicita a página ao servidor Apache.

<br/>

## Como Executar (Deploy Local)

1. Instale e inicie o **XAMPP Control Panel**.
2. Clique em **"Start"** no módulo de serviço do Apache.
3. Faça o clone deste repositório dentro do diretório raiz local do Apache: `C:\xampp\htdocs\`.
4. Abra um navegador web (ex: Google Chrome) e digite: `http://localhost/[caminho_do_repositorio]/index.php` para executar o script do servidor.

<br/>

<div align="center">
  <a href="https://github.com/JohnathanWellPer/etec-desenvolvimento_de_sistemas">
    <img src="https://img.shields.io/badge/Return_to_ETEC_Root-B30000?style=for-the-badge&logo=github&logoColor=white" alt="Return to Root" />
  </a>
</div>
