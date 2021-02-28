<?php 

require '../../libs/mailer/ExceptionC.php';
require '../../libs/mailer/PHPMailer.php';
require '../../libs/mailer/SMTP.php';   

class EnvioEmails {
 

           $nome = $portal['Nome'];
           $pessoaID = $portal['PessoaID'];
           $email = 'eduardacirina@gmail.com';
           $destiny = $email;
           $reply = "Resposta";
           $subject = "Consulta de Documentos";
           $altBody = 'This is the body in plain text for non-HTML mail clients';
           $html = '<!DOCTYPE html>
                <html>
                <head>
                <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
                </head>
                <body>
                <!-- cabecalho -->
                   <div>
                <div align="center">
                <tbody><tr style="height:63.75pt;">
                <td colspan="3" style="background-color:#F26522;height:63.75pt;padding:0;">
                <p align="center" style="font-size:11pt;font-family:Calibri,sans-serif;text-align:center;margin:0;background-color:#F26522;">
                <span style="color:black;font-family:Montserrat;"><img data-imagetype="External" src=""></span></p>
                </td>
                </tr>
                <tr>
                <td style="background-color:white;padding:0;border-style:none solid;border-right-width:1pt;border-left-width:1pt;border-right-color:#CCCCCC;border-left-color:#CCCCCC;">
                <div align="center">
                <table border="0" cellspacing="0" cellpadding="0">
                <tbody><tr>
                <td style="padding:33.75pt 0;">
                <p><b><span style="color:#F26522;font-size:13.5pt;font-family:Montserrat;">Olá, ' . $nome .'</span></b></p>
                <p style="font-size:11pt;font-family:Calibri,sans-serif;margin:0;"><span style="font-family:Montserrat;">&nbsp;</span></p>
                <p><span style="font-size:11.5pt;font-family:Montserrat;"><a href="">Clique aqui</a> para acessar os documentos solicitado para consulta. <br>
                <br>
                 Agradecemos o seu contato!</span></p>
                </td>
                </tr>
                </tbody></table>
                </div>
                </td>
                <td style="padding:0;"></td>
                <td style="padding:0;"></td>
                </tr>
                <tr style="background-color: #FDE4CD">
                <td style="background-color:#FDE4CD;padding:22.5pt 0;">
                <div align="center">
                <table border="0" cellspacing="0" cellpadding="0" style="width:382.5pt;">
                <tbody><tr>
                <td style="width:20%;padding:0;">
                <p align="center" style="font-size:11pt;font-family:Calibri,sans-serif;text-align:center;margin:0;">
                <span style="font-family:Montserrat;"></span></p>
                </td>
                <td style="width:20%;padding:0;">
                <p align="center" style="font-size:11pt;font-family:Calibri,sans-serif;text-align:center;margin:0;">
                <span style="font-family:Montserrat;"></span></p>
                </td>
                <td style="width:20%;padding:0;">
                <p align="center" style="font-size:11pt;font-family:Calibri,sans-serif;text-align:center;margin:0;">
                <span style="font-family:Montserrat;"></span></p>
                </td>
                <td style="width:20%;padding:0;">
                <p align="center" style="font-size:11pt;font-family:Calibri,sans-serif;text-align:center;margin:0;">
                <span style="font-family:Montserrat;"></span></p>
                </td>
                <td style="width:20%;padding:0;">
                <p align="center" style="font-size:11pt;font-family:Calibri,sans-serif;text-align:center;margin:0;">
                <span style="font-family:Montserrat;"></span></p>
                </td>
                </tr>
                <tr>
                <td colspan="5" style="padding:0;">
                <div style="margin-top:24.75pt;margin-bottom:24.75pt;">
                <div align="center" style="font-size:11pt;font-family:Calibri,sans-serif;text-align:center;margin:0;">
                <span style="font-family:Montserrat;">
                <hr align="center" width="100%" size="2" style="color:#969696;">
                </span></div>
                </div>
                </td>
                </tr>
                <tr>
                <td colspan="2" style="padding:0;">
                <p align="center" style="font-size:11pt;font-family:Calibri,sans-serif;text-align:center;margin:0 0 24.75pt 0;">
                <span style="font-family:Montserrat;"></span></p>
                <div style="display:inline-block;margin-left:15pt;">
                <p><span style="font-size:10.5pt;font-family:Montserrat;">Reservas 24h</span></p>
                <p><span style="color:#F26522;font-size:10.5pt;font-family:Montserrat;">0800-000-000</span></p>
                </div>
                </td>
                <td style="padding:0;"></td>
                <td colspan="2" style="padding:0;">
                <p align="center" style="font-size:11pt;font-family:Calibri,sans-serif;text-align:center;margin:0;">
                <span style="font-family:Montserrat;"></span></p>
                <div style="display:inline-block;margin-left:15pt;">
                <p><span style="font-size:10.5pt;font-family:Montserrat;">Baixe nossos <span style="color:#F26522;">Apps</span></span></p>
                </div>
                </td>
                </tr>
                <tr>
                <td colspan="5" style="padding:0;">
                <p style="margin-top:16.5pt;"><span style="color:#58595B;font-size:9pt;font-family:Montserrat;">Nossos e-mails nunca trazem arquivos executáveis ou links para downloads. Caso receba mensagens suspeitas ou fraudulentas em nosso nome, entre em contato conosco
                pelo e-mail </span><span style="color:#F26522;font-size:9pt;font-family:Montserrat;"><a href="" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" id="LPlnk193708">eduardacirina@gmail.com</a></span><span style="color:#58595B;font-size:9pt;font-family:Montserrat;">
                </span></p>
                </td>
                </tr>
                <tr>
                <td colspan="5" style="padding:0;">
                <div style="margin-top:24.75pt;margin-bottom:24.75pt;">
                <div align="center" style="font-size:11pt;font-family:Calibri,sans-serif;text-align:center;margin:0;">
                <span style="font-family:Montserrat;">
                <hr align="center" width="100%" size="2" style="color:#969696;">
                </span></div>
                </div>
                </td>
                </tr>
                <tr>
                <td colspan="2" style="padding:0;">
                <p align="center" style="font-size:11pt;font-family:Calibri,sans-serif;text-align:center;margin:0 0 24.75pt 0;">
                <span style="font-family:Montserrat;"></span></p>
                <p align="center" style="text-align:center;"><span style="color:#979797;font-size:9pt;font-family:Montserrat;">Navegue no nosso site</span></p>
                </td>
                <td style="padding:0;"></td>
                <td colspan="2" style="padding:0;">
                <p align="center" style="font-size:11pt;font-family:Calibri,sans-serif;text-align:center;margin:0;">
                <span style="font-family:Montserrat;"></span></p>
                </td>
                </tr>
                </tbody></table>
                </div>
                </td>
                <td style="padding:0;"></td>
                <td style="padding:0;"></td>
                </tr>
                </tbody></table></div>
                </div>
                <p style="font-size:11pt;font-family:Calibri,sans-serif;margin:0;">&nbsp;</p>
                </div>
                </body>
                </html>';
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = "emailsendti@gmail.com";
            $mail->Password = 'sendemail2020';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            //Recipients
            $mail->setFrom($email, $nome);
            $mail->addAddress($destiny);
            $mail->addAddress($destiny);
            $mail->addReplyTo($email, $reply);

            $mail->addAttachment($arquivo);
            $mail->WordWrap = 50;
            // Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $html;
            $mail->AltBody = $altBody;

            $mail->send();


            return true;



        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    }
