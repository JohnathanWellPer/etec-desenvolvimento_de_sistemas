<div align="center">
  <h2>TechLinter Corporativo</h2>
  <p>
    <em>Technical Writing Analyzer & Auto-Corrector | Communication - Agenda 1</em><br>
    <em>Analisador e Auto-Corretor de Redação Técnica | Comunicação - Agenda 1</em>
  </p>

  <p>
    <b>Choose your language:</b><br>
    <b>Escolha seu idioma:</b><br>
    <a href="#study-context">English</a> | <a href="#contexto-do-estudo">Português</a>
  </p>

  <p>
    <b>Tech Stack & Tools</b><br>
    <b>Tecnologias & Ferramentas</b>
  </p>

  <img src="https://img.shields.io/badge/Windows-0078D6?style=for-the-badge&logo=windows&logoColor=white" alt="Windows" />
  <img src="https://img.shields.io/badge/Google%20Chrome-4285F4?style=for-the-badge&logo=GoogleChrome&logoColor=white" alt="Google Chrome" />
  <img src="https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white" alt="GitHub" />
  <img src="https://img.shields.io/badge/Markdown-000000?style=for-the-badge&logo=markdown&logoColor=white" alt="Markdown" />
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5" />
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3" />
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript" />
  <img src="https://img.shields.io/badge/Notepad++-90E59A?style=for-the-badge&logo=notepadplusplus&logoColor=black" alt="Notepad++" />
</div>

<br/>

---

### Study Context

Project developed as the practical basis for Agenda 1 of the Communication course. The academic objective of the week was the study of language, communication barriers, and technical writing. To elevate the study level, the theoretical concepts of grammar deviations (barbarisms, pleonasms, solecisms) were translated into a real, functional application.

### The Application

An autonomous client-side web tool for corporate text analysis. The system parses drafts in real-time, highlights grammar deviations, explains the technical errors, and generates an auto-corrected version ready for clipboard copying.

### Business Rules (Applied Logic)

The system's intelligence was structured under four logical pillars of software engineering:

1. **Rapid Prototyping -> Separation of Concerns (SoC):** The project was initially developed as a single file to validate the core logic quickly without routing overhead. Once the Proof of Concept (POC) was approved, the codebase was refactored into three distinct layers (HTML, CSS, JS), heavily improving maintainability and enabling browser caching.
2. **Regular Expressions (Regex) Engine:** The lexical analysis engine is powered by JavaScript Regex. Patterns like `/\b(word)\b/gi` were utilized to ensure exact word boundaries (`\b`), preventing partial matches inside other words.
3. **Dynamic DOM Manipulation:** The UI does not rely on page reloads. The JS engine dynamically injects formatted HTML directly into the Document Object Model (DOM) using ES6 Template Literals.
4. **Clipboard API Integration:** To maximize workflow efficiency, the native `navigator.clipboard.writeText()` API was integrated, allowing users to copy the auto-corrected text with a single click, providing immediate visual feedback.

### How to Run (Local Deploy)

As a native web application, the system requires no installation of packages, dependencies, databases, or servers (such as Apache/PHP).

1. Clone this repository or download the files.
2. Navigate to the folder and double-click the `index.html` file.
3. The interface will automatically open in your default web browser, fully ready for interactions and testing.

<br/>

---

### Contexto do Estudo

Projeto desenvolvido como base prática da Agenda 1 da disciplina de Comunicação. O objetivo acadêmico da semana foi o estudo da linguagem, vícios de comunicação e redação técnica. Para elevar o nível do estudo, os conceitos teóricos de desvios gramaticais (barbarismos, pleonasmos, solecismos) foram materializados na criação de uma aplicação real e funcional.

### A Aplicação

Uma ferramenta autônoma operando no lado do cliente (Client-Side) para análise de textos corporativos. O sistema varre os rascunhos, destaca desvios gramaticais, explica o erro técnico e gera uma versão corrigida automaticamente pronta para cópia.

### Regras de Negócio (Lógica Aplicada)

A inteligência do sistema foi estruturada sob quatro pilares lógicos de engenharia de software:

1. **Prototipagem Rápida -> Separação de Responsabilidades (SoC):** O projeto foi inicialmente desenvolvido em um único arquivo para validar a lógica central rapidamente. Após a aprovação da Prova de Conceito (POC), o código foi refatorado em três camadas (HTML, CSS, JS), facilitando a manutenção e permitindo o uso de cache pelo navegador.
2. **Motor de Expressões Regulares (Regex):** O motor de análise léxica é alimentado por Regex. Padrões como `/\b(palavra)\b/gi` foram utilizados para garantir a detecção de limites exatos de palavras (`\b`), impedindo que o algoritmo corte palavras pela metade.
3. **Manipulação Dinâmica do DOM:** A interface não depende de recarregamento de página. O JS injeta HTML formatado diretamente no DOM utilizando Template Literals do ES6.
4. **Integração da API de Clipboard:** Para maximizar a eficiência, foi integrada a API nativa do navegador (`Clipboard API`), permitindo que o usuário copie o texto auto-corrigido com um único clique.

### Como Executar (Deploy Local)

Por ser uma aplicação web nativa, o sistema não exige instalação de pacotes, dependências, bancos de dados ou servidores (como Apache/PHP).

1. Faça o clone deste repositório ou o download dos arquivos.
2. Navegue até a pasta e dê um duplo clique no arquivo `index.html`.
3. A interface abrirá automaticamente no seu navegador web padrão, totalmente pronta para interações e testes.

<br/>

<div align="center">
  <a href="https://github.com/JohnathanWellPer/etec-desenvolvimento_de_sistemas">
    <img src="https://img.shields.io/badge/Return_to_ETEC_Root-B30000?style=for-the-badge&logo=github&logoColor=white" alt="Return to Root" />
  </a>
</div>
