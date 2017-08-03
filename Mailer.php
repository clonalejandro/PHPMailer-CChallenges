<?php
/**
 * Created by alejandrorioscalera
 * 03/08/2017
 *
 * -- SOCIAL NETWORKS --
 *
 * GitHub: https://github.com/clonalejandro or @clonalejandro
 * Website: https://clonalejandro.me/
 * Twitter: https://twitter.com/clonalejandro11/ or @clonalejandro11
 * Keybase: https://keybase.io/clonalejandro/
 *
 * -- LICENSE --
 *
 * All rights reserved for clonalejandro ©Mailer 2017 / 2018
 */


/**
 * @param $sender
 * @param $receiver
 * @param $subject
 * @param $content
 * @param $html
 */
function sendMail($sender, $receiver, $subject, $content, $html){
    $headers = "From: $sender\r\n";
    $headers .= "Reply-To: $sender\r\n";
    if ($html)
        $headers .= "Content-Type: text/html; charset=\"iso-8859-1\" Content-Transfer-Encoding: quoted-printable; charset=utf-8"."\r\n";

    mail($receiver, $subject, $content, $headers);
}
