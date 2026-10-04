/*
 * DICIONÁRIO DE REGRAS (Expressões Regulares / Regex)
 * Cada objeto {} dentro da lista [] é uma regra que o sistema vai buscar no texto.
 * 
 * Entendendo a Regex: /\b(palavra)\b/gi
 * \b -> "Word Boundary" (Limite de palavra). Garante que vai achar a palavra exata, e não um pedaço de outra (ex: 'mente' dentro de 'rapidamente').
 * () -> Captura a palavra encontrada para podermos usá-la depois.
 * g  -> Global: Procura no texto todo, e não apenas a primeira vez que aparecer.
 * i  -> Case Insensitive: Ignora maiúsculas e minúsculas (acha tanto "reintero" quanto "Reintero").
 */
const rules = [
    // BARBARISMOS
    { regex: /\b(reintero)\b/gi, original: "reintero", suggestion: "reitero", class: "hl-barbarismo", type: "barbarismo", title: "Barbarismo Encontrado" },
    { regex: /\b(beneficiente)\b/gi, original: "beneficiente", suggestion: "beneficente", class: "hl-barbarismo", type: "barbarismo", title: "Barbarismo Encontrado" },
    { regex: /\b(gratuíto)\b/gi, original: "gratuíto", suggestion: "gratuito", class: "hl-barbarismo", type: "barbarismo", title: "Barbarismo Encontrado", obs: "A palavra 'gratuito' não possui acento." },
    { regex: /\b(pograma)\b/gi, original: "pograma", suggestion: "programa", class: "hl-barbarismo", type: "barbarismo", title: "Barbarismo Encontrado" },
    { regex: /\b(mecher)\b/gi, original: "mecher", suggestion: "mexer", class: "hl-barbarismo", type: "barbarismo", title: "Barbarismo Encontrado" },
    
    // PLEONASMOS
    { regex: /\b(entrar para dentro)\b/gi, original: "entrar para dentro", suggestion: "entrar", class: "hl-pleonasmo", type: "pleonasmo", title: "Pleonasmo Vicioso" },
    { regex: /\b(acabamento final)\b/gi, original: "acabamento final", suggestion: "acabamento", class: "hl-pleonasmo", type: "pleonasmo", title: "Pleonasmo Vicioso" },
    { regex: /\b(surpresa inesperada)\b/gi, original: "surpresa inesperada", suggestion: "surpresa", class: "hl-pleonasmo", type: "pleonasmo", title: "Pleonasmo Vicioso" },
    { regex: /\b(fato real)\b/gi, original: "fato real", suggestion: "fato", class: "hl-pleonasmo", type: "pleonasmo", title: "Pleonasmo Vicioso" },

    // SOLECISMOS E GERUNDISMOS
    { regex: /\b(fazem dois dias)\b/gi, original: "fazem dois dias", suggestion: "faz dois dias", class: "hl-sintaxe", type: "sintaxe", title: "Solecismo (Concordância)", obs: "O verbo fazer indicando tempo decorrido é impessoal (não vai para o plural)." },
    { regex: /\b(a gente vamos)\b/gi, original: "a gente vamos", suggestion: "a gente vai", class: "hl-sintaxe", type: "sintaxe", title: "Solecismo (Concordância)" },
    { regex: /\b(vou estar tentando estar te ajudando)\b/gi, original: "vou estar tentando estar te ajudando", suggestion: "tentarei te ajudar", class: "hl-sintaxe", type: "sintaxe", title: "Gerundismo", obs: "Evite o uso excessivo de gerúndios em sequência (típico de telemarketing)." }
];

/*
 * FUNÇÃO DE ANÁLISE PRINCIPAL
 * Disparada pelo botão "Analisar Redação".
 */
function analyzeText() {
    // 1. Pega o texto digitado
    const input = document.getElementById("inputText").value;
    
    // 2. Se o texto estiver vazio, encerra a função
    if (!input.trim()) return;

    // 3. Prepara as variáveis. 
    // outputHTML servirá para a visualização com as cores.
    // correctedText servirá para gerar o texto final perfeito.
    let outputHTML = input;
    let correctedText = input; 
    let logsHTML = "";      
    let matchCount = 0;     

    // 4. Inicia o loop para verificar cada regra do dicionário contra o texto
    rules.forEach(rule => {
        // Se a regex encontrar a palavra no texto...
        if (rule.regex.test(input)) {
            
            // --- PASSO A: Cria a versão colorida (para apontar o erro) ---
            // Substitui a palavra errada por ela mesma ($1) mas dentro de um span colorido
            outputHTML = outputHTML.replace(rule.regex, `<span class="${rule.class}" title="Sugestão: ${rule.suggestion}">$1</span>`);
            
            // --- PASSO B: Cria a versão autocorrigida (para o texto final) ---
            // Passamos uma função para o replace, para analisar a palavra exata que o usuário digitou
            correctedText = correctedText.replace(rule.regex, (match) => {
                let suggestion = rule.suggestion;
                
                // Se a primeira letra que o usuário digitou for Maiúscula, 
                // garantimos que a primeira letra da correção também será Maiúscula.
                if (match[0] === match[0].toUpperCase()) {
                    suggestion = suggestion.charAt(0).toUpperCase() + suggestion.slice(1);
                }
                return suggestion; // Retorna a palavra corrigida (ex: reintero -> reitero)
            });
            
            // --- PASSO C: Monta os Cards Explicativos (De -> Para) ---
            logsHTML += `
                <div class="log-card ${rule.type}">
                    <div class="log-title">${rule.title}</div>
                    <div class="log-correction">
                        <span class="word-wrong">"${rule.original}"</span>
                        <span class="arrow">➔</span>
                        <span class="word-right">"${rule.suggestion}"</span>
                    </div>
                    <!-- Se a regra tiver uma observação, cria a div. Senão, fica vazio. -->
                    ${rule.obs ? `<div class="log-obs">💡 ${rule.obs}</div>` : ""}
                </div>
            `;
            
            matchCount++; // Achamos mais um erro!
        }
    });

    // 5. Injeta o HTML colorido na tela
    document.getElementById("outputText").innerHTML = outputHTML;
    
    // 6. Mostra resultados baseando-se se achou erro (matchCount > 0) ou não (matchCount == 0)
    if (matchCount === 0) {
        // Mensagem de sucesso (sem erros)
        document.getElementById("logContainer").innerHTML = `
            <div class="log-card" style="border-color: var(--success-color);">
                <div class="log-title" style="color: var(--success-color);">Tudo certo!</div>
                <div>Nenhum desvio técnico grave encontrado. O texto parece adequado para o ambiente corporativo.</div>
            </div>`;
            
        // Esconde a área de auto-correção final, pois não houve correções
        document.getElementById("finalSection").style.display = "none";
    } else {
        // Injeta os cards de erro montados
        document.getElementById("logContainer").innerHTML = logsHTML;
        
        // Injeta o texto perfeitamente corrigido no último textarea
        document.getElementById("finalText").value = correctedText;
        
        // Mostra a seção de auto-correção final
        document.getElementById("finalSection").style.display = "block";
    }

    // 7. Torna toda a área de resultados visível
    document.getElementById("resultsSection").classList.add("active");
}

/*
 * FUNÇÃO DE COPIAR (Clipboard API)
 * Disparada pelo botão "Copiar Texto".
 */
function copyText() {
    // Aponta para a textarea final
    const finalTextArea = document.getElementById("finalText");
    
    // Seleciona o texto dentro dela
    finalTextArea.select();
    finalTextArea.setSelectionRange(0, 99999); // Suporte para dispositivos móveis
    
    // Usa a API moderna do navegador para jogar o texto na área de transferência (Ctrl+C)
    navigator.clipboard.writeText(finalTextArea.value).then(() => {
        
        // Se der certo, vamos dar um feedback visual no botão
        const copyBtn = document.querySelector(".btn-copy");
        const originalText = copyBtn.innerHTML;
        
        // Muda o texto e a cor
        copyBtn.innerHTML = "✅ Copiado!";
        copyBtn.style.backgroundColor = "#16a34a"; 
        
        // Depois de 2 segundos, o botão volta ao normal
        setTimeout(() => {
            copyBtn.innerHTML = originalText;
            copyBtn.style.backgroundColor = "var(--success-color)";
        }, 2000);
        
    }).catch(err => {
        // Fallback caso o navegador bloqueie a cópia
        alert("Falha ao copiar o texto. Selecione manualmente.");
    });
}