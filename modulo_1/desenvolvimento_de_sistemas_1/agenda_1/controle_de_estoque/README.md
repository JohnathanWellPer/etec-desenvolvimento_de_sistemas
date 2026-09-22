<div align="center">
  <h1>Logical Inventory Control System</h1>
  <p>
    <em>Warehouse Management Tool | DS 1 - Agenda 1</em><br>
    <em>Sistema de Controle Lógico de Estoque | DS 1 - Agenda 1</em>
  </p>
  <p>
    <i>Choose your language:</i><br>
    <i>Escolha seu idioma:</i><br>
    <a href="#english">English</a> | <a href="#portuguese">Português</a>
  </p>
</div>

<br/>

<div align="center">
  <h3>Tech Stack & Tools<br>Tecnologias & Ferramentas</h3>
  <img src="https://img.shields.io/badge/Windows-0078D6?style=for-the-badge&logo=windows&logoColor=white" alt="Windows" />
  <img src="https://img.shields.io/badge/Google%20Chrome-4285F4?style=for-the-badge&logo=GoogleChrome&logoColor=white" alt="Google Chrome" />
  <img src="https://img.shields.io/badge/Google%20Gemini-8E75B2?style=for-the-badge&logo=googlegemini&logoColor=white" alt="Google Gemini" />
  <img src="https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white" alt="GitHub" />
  <img src="https://img.shields.io/badge/Markdown-000000?style=for-the-badge&logo=markdown&logoColor=white" alt="Markdown" />
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5" />
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3" />
  <img src="https://img.shields.io/badge/JavaScript-323330?style=for-the-badge&logo=javascript&logoColor=F7DF1E" alt="JavaScript" />
  <img src="https://img.shields.io/badge/Notepad++-90E59A?style=for-the-badge&logo=notepadplusplus&logoColor=black" alt="Notepad++" />
</div>

<br/>

---

<div id="english"></div>

## Study Context

Project developed as the practical basis for **Agenda 1 of the Systems Development 1 (ETEC) course**. The academic objective of the week was the study of algorithm fundamentals: the continuous flow of **Input, Processing, and Output**. To elevate the study level, the use of theoretical pseudocode was replaced by the creation of a real, functional application.

<br/>

## The Application

An autonomous client-side web tool for warehouse management and control. The system processes material write-offs in real-time and issues dynamic visual feedback (DOM Manipulation) based on the company's current inventory health.

<br/>

## Business Rules (Applied Logic)

The system's intelligence was structured under three logical pillars of software engineering:

1. **Input (Validation):** *Guard Clauses* intercept the request and block processing if the user submits empty fields or invalid data formats.
2. **Processing:** Instant calculation of the final balance (`Current Inventory - Withdrawn Quantity`).
3. **Output (Conditionals):**
   - `Balance < 0` -> **Block:** Data consistency error (impossible to withdraw more units than the system holds).
   - `Balance <= 5` -> **Alert:** Withdrawal approved with reservations. The interface applies a "Critical Inventory" flag indicating the need for restocking.
   - `Balance > 5` -> **Success:** Withdrawal approved, certifying a standard and healthy inventory status.

<br/>

## How to Run (Local Deploy)

As a native web application, the system requires no installation of packages, dependencies, databases, or servers (such as Apache/PHP).

1. Clone this repository or download the files.
2. Navigate to the folder and double-click the `estoque.html` file.
3. The interface will automatically open in your default web browser, fully ready for interactions and testing.

<br/>

---

<div id="portuguese"></div>

## Contexto do Estudo

Projeto desenvolvido como base prática da **Agenda 1 da disciplina de Desenvolvimento de Sistemas 1 (ETEC)**. O objetivo acadêmico da semana foi o estudo dos fundamentos de algoritmos: o fluxo contínuo de **Entrada, Processamento e Saída**. Para elevar o nível do estudo, o uso de pseudocódigos teóricos foi substituído pela criação de uma aplicação real e funcional.

<br/>

## A Aplicação

Uma ferramenta autônoma operando no lado do cliente (Client-Side) para gestão e controle de almoxarifado. O sistema processa baixas de materiais em tempo real e emite feedbacks visuais dinâmicos (DOM Manipulation) com base na saúde atual do inventário da empresa.

<br/>

## Regras de Negócio (Lógica Aplicada)

A inteligência do sistema foi estruturada sob três pilares lógicos de engenharia de software:

1. **Entrada (Validação):** *Cláusulas de Guarda* (Guard Clauses) interceptam a requisição e bloqueiam o processamento caso o usuário envie campos vazios ou formatos de dados inválidos.
2. **Processamento:** Cálculo instantâneo do saldo final (`Estoque Atual - Quantidade Retirada`).
3. **Saída (Condicionais):**
   - `Saldo < 0` -> **Bloqueio:** Erro de consistência de dados (impossível retirar mais unidades do que o sistema possui).
   - `Saldo <= 5` -> **Alerta:** Baixa aprovada com ressalvas. A interface aplica a flag de "Estoque Crítico" indicando necessidade de reposição.
   - `Saldo > 5` -> **Sucesso:** Baixa aprovada atestando status padrão e saudável do inventário.

<br/>

## Como Executar (Deploy Local)

Por ser uma aplicação web nativa, o sistema não exige instalação de pacotes, dependências, bancos de dados ou servidores (como Apache/PHP).

1. Faça o clone deste repositório ou o download dos arquivos.
2. Navegue até a pasta e dê um duplo clique no arquivo `estoque.html`.
3. A interface abrirá automaticamente no seu navegador web padrão, totalmente pronta para interações e testes.

<br/>

---

<div align="center">
  <a href="../../..">
    <img src="https://img.shields.io/badge/Return_to_ETEC_Root-100000?style=for-the-badge&logo=github&logoColor=white" alt="Return to Root">
  </a>
</div>
