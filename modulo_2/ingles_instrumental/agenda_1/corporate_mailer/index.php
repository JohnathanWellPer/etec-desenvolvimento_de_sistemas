<?php
// [PROGRAMAÇÃO DEFENSIVA E LÓGICA SERVER-SIDE]
// Inicializamos as variáveis para evitar 'undefined variable' no primeiro carregamento (GET)
$generated_email = "";
$display_mode = "none"; // Oculta a div de resultado até o formulário ser enviado

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Sanitização dos inputs (Client-side) para evitar XSS (Cross-Site Scripting)
    $recipient_name = htmlspecialchars(trim($_POST["recipient_name"]));
    $greeting_type  = htmlspecialchars($_POST["greeting_type"]);
    $subject_topic  = htmlspecialchars(trim($_POST["subject_topic"]));
    
    // Dados fixos do remetente (O teu perfil profissional)
    $sender_name = "Johnathan Pereira";
    $sender_role = "Information Technology Analyst";

    // 2. Lógica de Negócio (Server-side): Construção da Saudação (Greetings)
    $greeting = "";
    switch ($greeting_type) {
        case "morning":
            $greeting = "Good morning, " . $recipient_name . ",";
            break;
        case "afternoon":
            $greeting = "Good afternoon, " . $recipient_name . ",";
            break;
        case "evening":
            $greeting = "Good evening, " . $recipient_name . ",";
            break;
        case "formal":
            $greeting = "Hello " . $recipient_name . ", nice to meet you.";
            break;
        case "informal":
            $greeting = "Hi " . $recipient_name . ",";
            break;
        default:
            $greeting = "Dear " . $recipient_name . ",";
    }

    // 3. Estruturação do Corpo do E-mail
    // Aplicando as regras da Agenda: Simple Present e pronomes pessoais
    $email_body  = $greeting . "\n\n";
    $email_body .= "I hope you are doing well.\n\n";
    $email_body .= "I am writing to discuss about " . $subject_topic . ". ";
    $email_body .= "We need to align the next steps regarding this matter.\n\n";
    $email_body .= "Please let me know when you are available for a quick meeting.\n\n";
    
    // Fechamento e Assinatura
    $email_body .= "Best regards,\n\n";
    $email_body .= $sender_name . "\n";
    $email_body .= $sender_role . "\n";
    $email_body .= "TECH CORP";

    // Prepara a exibição na tela
    $generated_email = $email_body;
    $display_mode = "block";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corporate Mailer | Johnathan Pereira</title>
    <style>
        /* IDENTIDADE VISUAL - DARK MODE CORPORATIVO */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #0a0f1a;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }
        .mailer-container {
            background-color: #111928;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0,229,255,0.1);
            width: 100%;
            max-width: 600px;
            padding: 40px;
            border: 2px solid;
            border-image: linear-gradient(135deg, #0052D4, #00E5FF, #00FF88) 1;
            box-sizing: border-box;
        }
        .mailer-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .mailer-title {
            color: #00E5FF;
            font-size: 1.8em;
            font-weight: bold;
            margin-bottom: 10px;
            letter-spacing: 1px;
        }
        .mailer-desc {
            color: #a0aec0;
            font-size: 0.95em;
        }
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #00FF88;
            font-weight: 600;
            font-size: 0.9em;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 12px;
            background-color: #0d1320;
            border: 1px solid #2d3748;
            border-radius: 6px;
            color: #ffffff;
            font-size: 1em;
            box-sizing: border-box;
        }
        .form-group input:focus, .form-group select:focus {
            outline: none;
            border-color: #00E5FF;
        }
        .btn-generate {
            background: linear-gradient(135deg, #0052D4, #00E5FF);
            color: #ffffff;
            border: none;
            padding: 14px 20px;
            font-size: 1.1em;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: opacity 0.3s ease;
            width: 100%;
            margin-top: 10px;
        }
        .btn-generate:hover {
            opacity: 0.9;
        }
        
        /* ÁREA DE RESULTADO (Exibida dinamicamente pelo PHP) */
        .result-area {
            display: <?php echo $display_mode; ?>;
            margin-top: 30px;
            background-color: #0d1320;
            border-radius: 8px;
            padding: 20px;
            border-left: 4px solid #00FF88;
        }
        .result-title {
            color: #a0aec0;
            font-size: 0.85em;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 15px;
            font-weight: bold;
        }
        .email-output {
            white-space: pre-wrap; /* Mantém as quebras de linha nativas do PHP (\n) */
            color: #f1f5f9;
            font-size: 1em;
            line-height: 1.5;
            background: #111928;
            padding: 15px;
            border-radius: 6px;
            border: 1px solid #2d3748;
            font-family: 'Courier New', Courier, monospace;
        }

        /* ASSINATURA INJETADA */
        .site-footer {
            margin-top: 40px;
            font-size: 0.85rem;
            color: #718096;
            border-top: 1px dashed #2d3748;
            padding-top: 20px;
            text-align: center;
        }
        .site-footer a {
            color: #00FF88;
            text-decoration: none;
            font-weight: bold;
        }
        .site-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="mailer-container">
        <div class="mailer-header">
            <div class="mailer-title">TECH CORP // CORPORATE MAILER</div>
            <div class="mailer-desc">
                Gerador automatizado de e-mails corporativos em inglês.
            </div>
        </div>

        <!-- FORMULÁRIO CLIENT-SIDE -->
        <form method="POST" action="">
            <div class="form-group">
                <label for="recipient_name">Nome do Destinatário (Recipient Name)</label>
                <input type="text" id="recipient_name" name="recipient_name" placeholder="Ex: Sarah Smith" required>
            </div>

            <div class="form-group">
                <label for="greeting_type">Saudação Inicial (Greetings)</label>
                <select id="greeting_type" name="greeting_type" required>
                    <option value="" disabled selected>Selecione a saudação...</option>
                    <option value="morning">Bom dia (Good morning)</option>
                    <option value="afternoon">Boa tarde (Good afternoon)</option>
                    <option value="evening">Boa noite - chegada (Good evening)</option>
                    <option value="formal">Prazer em conhecê-lo (Nice to meet you)</option>
                    <option value="informal">Informal (Hi)</option>
                </select>
            </div>

            <div class="form-group">
                <label for="subject_topic">Tópico do E-mail (Subject)</label>
                <input type="text" id="subject_topic" name="subject_topic" placeholder="Ex: the new API integration project" required>
            </div>

            <button type="submit" class="btn-generate">✉️ GENERATE E-MAIL</button>
        </form>

        <!-- RESULTADO PROCESSADO SERVER-SIDE -->
        <div class="result-area">
            <div class="result-title">Generated Output (Ready to Copy)</div>
            <div class="email-output"><?php echo htmlspecialchars($generated_email); ?></div>
        </div>

        <!-- ASSINATURA -->
        <footer class="site-footer">
            Powered by <a href="https://johnathanpereira.com.br/" target="_blank" rel="noopener noreferrer">Johnathan Pereira</a>
        </footer>
    </div>

</body>
</html>