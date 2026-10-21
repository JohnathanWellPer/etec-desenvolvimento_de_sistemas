<?php
// [PROGRAMAÇÃO DEFENSIVA E LÓGICA SERVER-SIDE]
// O código PHP abaixo é executado via requisição POST para evitar processamento indevido no carregamento da página.
$mensagem = "";
$status_class = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Configurações do Servidor MySQL local
    $servername = "localhost";
    $username = "root";
    $password = ""; // Senha em branco padrão do XAMPP

    // 1. Bloco Try/Catch para interceptar exceções (Padrão PHP 8.1+)
    try {
        $conexao = new mysqli($servername, $username, $password);

        // 2. Validação da conexão
        if ($conexao->connect_error) {
            $mensagem = "Falha na conexão: " . $conexao->connect_error;
            $status_class = "error";
        } else {
            // 3. Execução do comando SQL DDL (Data Definition Language)
            $sql = "CREATE DATABASE banco;";
            
            if ($conexao->query($sql) === TRUE) {
                $mensagem = "Sucesso! O banco de dados foi provisionado no servidor.";
                $status_class = "success";
            }
        }
        $conexao->close();
    } catch (mysqli_sql_exception $e) {
        // Intercepta a falha (ex: banco já existente) e exibe a mensagem tratada no front-end
        $mensagem = "Aviso de integridade: " . $e->getMessage();
        $status_class = "error";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB Setup Wizard | Johnathan Pereira</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #0a0f1a;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .wizard-container {
            background-color: #111928;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0,229,255,0.1);
            width: 400px;
            text-align: center;
            padding: 40px 30px;
            border: 2px solid;
            border-image: linear-gradient(135deg, #0052D4, #00E5FF, #00FF88) 1;
        }
        .wizard-title {
            color: #00E5FF;
            font-size: 1.6em;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .wizard-desc {
            color: #a0aec0;
            font-size: 0.95em;
            margin-bottom: 30px;
        }
        .btn-deploy {
            background: linear-gradient(135deg, #0052D4, #00E5FF);
            color: #ffffff;
            border: none;
            padding: 12px 25px;
            font-size: 1em;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: opacity 0.3s ease;
            width: 100%;
        }
        .btn-deploy:hover {
            opacity: 0.9;
        }
        .status-message {
            margin-top: 20px;
            padding: 15px;
            border-radius: 8px;
            font-size: 0.9em;
            font-weight: bold;
            display: <?php echo empty($mensagem) ? 'none' : 'block'; ?>;
        }
        .status-message.success {
            background-color: rgba(0, 255, 136, 0.1);
            color: #00FF88;
            border: 1px solid #00FF88;
        }
        .status-message.error {
            background-color: rgba(255, 68, 68, 0.1);
            color: #ff4444;
            border: 1px solid #ff4444;
        }
        .site-footer {
            margin-top: 30px;
            font-size: 0.85rem;
            color: #718096;
            border-top: 1px dashed #2d3748;
            padding-top: 15px;
        }
        .site-footer a {
            color: #00FF88;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="wizard-container">
        <div class="wizard-title">TECH CORP // DB WIZARD</div>
        <div class="wizard-desc">
            Assistente corporativo para inicialização e provisionamento do banco de dados do Sistema Bancário.
        </div>

        <form method="POST" action="">
            <button type="submit" class="btn-deploy">🚀 DEPLOY DATABASE</button>
        </form>

        <div class="status-message <?php echo $status_class; ?>">
            <?php echo $mensagem; ?>
        </div>

        <div class="site-footer">
            Powered by <a href="https://johnathanpereira.com.br/" target="_blank" rel="noopener noreferrer">Johnathan Pereira</a>
        </div>
    </div>

</body>
</html>