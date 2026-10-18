<?php
// [PROGRAMAÇÃO DEFENSIVA E LÓGICA SERVER-SIDE]
// O PHP executa no servidor ANTES de enviar o HTML para o cliente (navegador).
// Aqui definimos as variáveis com os dados do funcionário de forma oculta.
// Em um sistema real corporativo, esses dados viriam de uma consulta segura ao Banco de Dados.

$nome_funcionario = "Johnathan Wellington Pereira";
$idade_funcionario = 29; // Sua idade processada no backend
$cargo_funcionario = "Analista de Segurança da Informação Júnior"; // Focado no seu objetivo de carreira em cyber
$id_cracha = "ID-2026-X79A"; // Um código único gerado pelo sistema (simulação)
$data_emissao = date("d/m/Y"); // Função nativa do PHP para capturar a data atual do servidor web
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema RH - Emissão de Crachá</title>
    
    <!-- ESTILIZAÇÃO CSS (Client-side) -->
    <!-- Tudo o que está aqui no bloco style é baixado e interpretado pelo navegador do usuário -->
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #0a0f1a; /* Fundo escuro inspirado no seu Dark Mode institucional */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #ffffff;
        }
        .cracha-container {
            background-color: #111928;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0,229,255,0.1);
            width: 360px;
            overflow: hidden;
            /* Borda com o gradiente da sua marca (Azul para Ciano e Verde) */
            border: 2px solid;
            border-image: linear-gradient(135deg, #0052D4, #00E5FF, #00FF88) 1;
        }
        .cracha-header {
            /* Cabeçalho acompanhando a paleta da sua identidade visual */
            background: linear-gradient(135deg, #0052D4, #00E5FF);
            color: #ffffff;
            text-align: center;
            padding: 20px;
            font-weight: bold;
            font-size: 1.2em;
            letter-spacing: 2px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
        }
        .cracha-body {
            padding: 30px 20px;
            text-align: center;
        }
        .funcionario-nome {
            font-size: 1.5em;
            color: #00E5FF; /* Destaque no seu ciano principal */
            margin-bottom: 5px;
            font-weight: bold;
        }
        .funcionario-detalhes {
            color: #a0aec0;
            font-size: 0.95em;
            margin: 8px 0;
        }
        .cracha-footer {
            background-color: #0d1320;
            padding: 15px;
            text-align: center;
            font-size: 0.8em;
            color: #718096;
            border-top: 1px dashed #2d3748;
        }
        .assinatura {
            margin-top: 15px;
            font-size: 0.85em;
        }
        .assinatura a {
            color: #00FF88; /* Verde da sua marca para os links */
            text-decoration: none;
            font-weight: bold;
        }
        .assinatura a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- ESTRUTURA DO CRACHÁ HTML (Injeção de dados Server-side) -->
    <div class="cracha-container">
        <div class="cracha-header">
            TECH CORP // ACESSO AUTORIZADO
        </div>
        
        <div class="cracha-body">
            <!-- O comando de 'echo' do PHP imprime o valor da variavel processada pelo Apache direto no HTML -->
            <!-- Isso atende exatamente o requisito da Agenda 1: exibir Nome, Idade e Profissao dinamicamente -->
            <h2 class="funcionario-nome"><?php echo $nome_funcionario; ?></h2>
            <p class="funcionario-detalhes">Cargo: <strong style="color: #ffffff;"><?php echo $cargo_funcionario; ?></strong></p>
            <p class="funcionario-detalhes">Idade: <?php echo $idade_funcionario; ?> anos</p>
        </div>

        <div class="cracha-footer">
            <!-- Imprimindo o ID simulado e a Data gerada nativamente pelo servidor -->
            <?php echo $id_cracha; ?> | Emitido em: <?php echo $data_emissao; ?>
            
            <!-- Assinatura dinamica baseada na sua marca registrada -->
            <div class="assinatura">
                Powered by <a href="https://johnathanpereira.com.br/" target="_blank">Johnathan Pereira</a>
            </div>
        </div>
    </div>

</body>
</html>