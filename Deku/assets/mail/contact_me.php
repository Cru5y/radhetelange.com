
<?php

// multiple recipients (note the commas)
$to = "contact@radhetelange.com";

// subject
$subject = "New mail from radhetelange.com/deku";

// compose message
$message = "
<html>
  <head>
    <title>Title</title>
  </head>
  <body>
    <h1>Topic</h1>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
       Nam iaculis pede ac quam. Etiam placerat suscipit nulla.
       Maecenas id mauris eget tortor facilisis egestas.
       Praesent ac augue sed <a href=\"http://lipsum.com/\">enim</a> aliquam auctor.
       Pellentesque convallis tempor tortor. Nullam nec purus.</p>
  </body>
</html>
";

// To send HTML mail, the Content-type header must be set
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

// send email
mail($to, $subject, $message, $headers);
?>