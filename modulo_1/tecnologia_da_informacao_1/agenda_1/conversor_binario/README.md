<div align="center">
  <h1>Binary String Parser</h1>
  <p>
    <em>Text-to-Binary Conversion Tool | TI 1 - Agenda 1</em><br>
    <em>Ferramenta de Conversão de Texto para Binário | TI 1 - Agenda 1</em>
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

Project developed as the practical basis for **Agenda 1 of the Information Technology 1 (ETEC) course**. The academic objective of the week was the study of computer systems fundamentals, processor architecture, and the binary representation of information. To elevate the study level, the theory of low-level data abstraction was materialized into the creation of a real, functional application.

<br/>

## The Application

An autonomous client-side web tool for translating human text into machine language. The system captures characters in real-time and delivers the exact mathematical conversion (Base 2) in 8-bit packets (Bytes), emulating via software what the logical units of physical processors execute.

<br/>

## Business Rules (Applied Logic)

The system's intelligence was structured under three logical pillars of software engineering:

1. **Input (Validation):** *Guard Clauses* intercept the request and block processing if the user attempts to convert empty or null fields, preventing execution failures.
2. **Processing (Algorithmic Engineering):**
   - Extraction of the numerical value of each typed character based on the **ASCII Table**.
   - Mathematical conversion via successive divisions of the decimal value to the Binary System.
   - String Formatting (*Padding*): Dynamic left-padding with zeros to ensure all packets have exact 8-bit blocks (1 Byte).
3. **Output (Dynamic Feedback):** Concatenation of the generated bit string and injection of the final machine code directly into the user interface (DOM Manipulation).

<br/>

## How to Run (Local Deploy)

As a native web application, the system requires no installation of packages, dependencies, databases, or servers (such as Apache/PHP).

1. Clone this repository or download the files.
2. Navigate to the folder and double-click the `index.html` file.
3. The interface will automatically open in your default web browser, fully ready for interactions and testing.

<br/>

---

<div id="portuguese"></div>

## Contexto do Estudo

Projeto desenvolvido como base prática da **Agenda 1 da disciplina de Tecnologia da Informação 1 (ETEC)**. O objetivo acadêmico da semana foi o estudo dos fundamentos de sistemas computacionais, arquitetura de processadores e a representação binária da informação. Para elevar o nível do estudo, a teoria de abstração de dados de baixo nível foi materializada na criação de uma aplicação real e funcional.

<br/>

## A Aplicação

Uma ferramenta autônoma operando no lado do cliente (Client-Side) para tradução de texto humano em linguagem de máquina. O sistema captura caracteres em tempo real e entrega a exata conversão matemática (Base 2) em pacotes de 8 bits (Bytes), emulando via software o que as unidades lógicas dos processadores físicos executam.

<br/>

## Regras de Negócio (Lógica Aplicada)

A inteligência do sistema foi estruturada sob três pilares lógicos de engenharia de software:

1. **Entrada (Validação):** *Cláusulas de Guarda* (Guard Clauses) interceptam a requisição e bloqueiam o processamento caso o usuário tente converter campos vazios ou nulos, prevenindo falhas de execução.
2. **Processamento (Engenharia Algorítmica):**
   - Extração do valor numérico de cada caractere digitado com base na **Tabela ASCII**.
   - Conversão matemática via divisões sucessivas do valor decimal para o Sistema Binário.
   - Formatação de String (*Padding*): Preenchimento dinâmico com zeros à esquerda para garantir que todos os pacotes possuam blocos exatos de 8 bits (1 Byte).
3. **Saída (Feedback Dinâmico):** Concatenação da cadeia de bits gerada e injeção do código de máquina final diretamente na interface do usuário (DOM Manipulation).

<br/>

## Como Executar (Deploy Local)

Por ser uma aplicação web nativa, o sistema não exige instalação de pacotes, dependências, bancos de dados ou servidores (como Apache/PHP).

1. Faça o clone deste repositório ou o download dos arquivos.
2. Navegue até a pasta e dê um duplo clique no arquivo `index.html`.
3. A interface abrirá automaticamente no seu navegador web padrão, totalmente pronta para interações e testes.

<br/>

---

<div align="center">
  <a href="../../..">
    <img src="https://img.shields.io/badge/Return_to_ETEC_Root-100000?style=for-the-badge&logo=github&logoColor=white" alt="Return to Root">
  </a>
</div>
