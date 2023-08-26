# sageal-moderno

# Como usar a função "esqueceu a senha"

## PHP.INI

Primeiramente, direcione-se até "C:\xampp\php" e abra um arquivo nomeado como "php.ini" (em algumas extensões podem estar apenas com "php"), onde sua foto é uma engrenagem.
Execute-o, aperte Ctrl + F para abrir uma caixa de pesquisa e coloque "mail function", em seguida altere as seguintes funções: 

1º Altere de smtp_port = 25 para smtp_port = 587;

2º SMTP= localhost para SMTP=smtp.gmail.com;

3º Haverá uma linha como ";sendmail_from = me@example.com", apague o ";" e altere-o para "sendmail_from = sagealmoderno@gmail.com". (obs:"sagealmoderno@gmail.com" é o email criado para utilizar nessa aplicação);

4º Haverá outra linha como ";sendmail_path", novamente apague o ";" e altere-o para "sendmail_path ="\"C:\xampp\sendmail\sendmail.exe\" -t"

5º Após essas alterações, reinicie os servidores do xampp (Apache e MySQL).

## SENDMAIL.INI

Segundamente, direcione-se até C:\xampp\sendmail e abra o arquivo nomeado como "sendmail".
Em seguida, faça as seguintes alterações:

1º Altere de "smtp_server=mail.mydomain.com" para "smtp_server=smtp.gmail.com";

2º smtp_port = 25 para smtp_port = 587;

3º Um pouco abaixo, terá uma linha como "debug_logfile=debug.log", apenas tire o ";" que o antecede;

4º Em seguida haverá os seguintes campos "auth_username= e auth_password=", preencha-os com os respectivos dados "auth_username= sagealmoderno@gmail.com e auth_password= aywohhwdlsjlpwpp";

5º Descendo algumas linhas, você encontrará o campo "force_sender=", altere para "force_sender=sagealmoderno@gmail.com";

6º Por fim, na última linha do arquivo, teremos "hostname=", acrescente "localhost", tornando-o "hostname=localhost".
