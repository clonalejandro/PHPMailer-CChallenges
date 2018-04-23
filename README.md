# PHP Mailer

## API - Usage

• Usage: 

```php
<?php
include ('Mailer.php'); //Include php file
use io\clonalejandro\Mailer\Mailer as Mailer; // Import a Mailer class

$sender = "poop@mail.me"; //string of mail sender
$receiver = "contact@clonalejandro.me"; //string of mail receiver
$subject = "Mail test"; //string of mail subject
$content = "<p>Hello world!</p>"; //string of mail content formed in HTML
$html = true; //boolean if mail content is formed in html format

new Mailer($sender, $receiver, $subject, $content, $html); //Call the class Mailer and throw this function
?>
```
<br>






![picture](https://i.imgur.com/1mIWzya.png)


## Copyright ©
#### Developed by clonalejandro
