<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php.ini</title>
</head>
<body>
  <h1>Configuração básica do php no php.ini</h1>
  <p>
    Básicos:<br>
    O servidor deve ser reiniciado em toda alteração de configurações no servidor.<br>
    Sempre consulte a documentação no próprio php.ini, nem sempre é bom ligar as configurações.<br>
  </p>
  <ul>
    <li>display_startup_errors = On/Off: Exibir erros de interpretação.</li>
      display_startup_errors é recomendado ser desligado quando em produção.<br>
    <li>short_open_tag = On/Off: Processa as short open tags</li>
      No caso das short_open_tags tenha cuidado já que se o servidor não processar essas tags
      ele vai enviar todo o conteúdo não processado para o cliente tornando o código visível.
      Isso pode ser desastroso dependendo do conteúdo e contexto de segurança.<br>
      O problema de ligar é que talvez o servidor para o qual vai enviar ou migrar o código
      pode não permitir alterações no php.ini. Pode gerar dores de cabeças.
  </ul>
</body>
</html>