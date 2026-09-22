/* 
   [JAVASCRIPT] 
   É a linguagem de programação que roda no navegador.
   Responsável pela lógica, matemática, regras de negócio e manipulação da tela.
*/

// PASSO 1: MAPEAMENTO DO DOM (Document Object Model)
// Aqui nós "capturamos" os elementos do HTML pelo ID para que o JavaScript possa controlá-los.
const btnConvert = document.getElementById('btnConvert');
const inputTextArea = document.getElementById('inputText');
const outputTextArea = document.getElementById('outputText');

// PASSO 2: ESCUTADOR DE EVENTOS (Event Listener)
// Dizemos ao JavaScript para ficar "ouvindo" o botão. Quando ocorrer um 'click', ele roda a função abaixo.
btnConvert.addEventListener('click', function() {
    
    // Captura exatamente o que o usuário digitou no campo de texto
    const textoHumano = inputTextArea.value;

    // Cláusula de Guarda (Guard Clause): Prevenção de erros
    // Se o texto estiver vazio (ou só tiver espaços), avisa o usuário e para a execução (return).
    if (textoHumano.trim() === '') {
        alert('Por favor, digite alguma palavra para realizar a conversão.');
        return; 
    }

    // Variável que vai armazenar o resultado final
    let resultadoBinario = '';

    // PASSO 3: O PROCESSAMENTO (Engenharia Matemática)
    // O 'for' é um laço de repetição. Ele vai rodar letra por letra do texto digitado.
    for (let i = 0; i < textoHumano.length; i++) {
        
        // 1. Extrai o código numérico da letra baseado na Tabela ASCII (ex: 'A' = 65, 'a' = 97)
        let valorAscii = textoHumano.charCodeAt(i);
        
        // 2. Converte o número decimal para o Sistema Binário (Base 2)
        // O método toString(2) faz a divisão matemática sucessiva por 2.
        // O método padStart(8, '0') garante que o resultado tenha sempre 8 casas (1 Byte completo), preenchendo com zeros à esquerda se faltar.
        let pacoteDeBits = valorAscii.toString(2).padStart(8, '0');
        
        // 3. Junta o pacote de 8 bits gerado à nossa variável de resultado, adicionando um espaço no final para leitura
        resultadoBinario += pacoteDeBits + ' ';
    }

    // PASSO 4: SAÍDA DE DADOS
    // Pega o resultado binário final, limpa espaços sobrando no começo/fim (.trim()) e injeta na tela.
    outputTextArea.value = resultadoBinario.trim();

});