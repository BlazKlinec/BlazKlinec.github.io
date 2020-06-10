

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Vaši podatki so bili poslavi.
    <a href="4_o_avtorju.html"><button class="btn submit">Nazaj</button></a>


<?php
  $name = $_Post['name'];
  $visitor_email = $_Post['email'];
  $message = $_Post['message'];

  $email_from = 'spletne strani od faksa'
  $email_subject = 'Novo vprašanje'
  $email_body = "Ime in priimek: $name.\n".
                  "eMail od pošiljatelja: $visitor_email.\n".
                  "sporočilo od pošiljatelja: $message. \n";

  $to = "bk8235@student.uni-lj.si";
  $headers = "From: $email_from \r\n";

  $headers = "Replay-To: $visitor_email \r\n";
  mail($to, $email_subject, $email_body, $headers);
  header("Location: 4_o_avtorju.html");

 ?>
</body>
</html>
