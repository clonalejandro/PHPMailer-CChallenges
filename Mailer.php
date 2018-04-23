<?php

namespace io\clonalejandro\Mailer;

/**
 * Created by alejandrorioscalera
 * 23/04/2018
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
 * All rights reserved for clonalejandro ©untitled 2017 / 2018
 */

class Mailer {


    /** SMALL CONSTRUCTORS **/

    private $sender, $receiver, $subject, $content, $html;

    /**
     * Mailer constructor.
     * @param  $sender string
     * @param $receiver string
     * @param $subject string
     * @param $content string
     * @param $html boolean
     */
    public function __construct($sender, $receiver, $subject, $content, $html)
    {
        //Define vars
        $this->sender = $sender;
        $this->receiver = $receiver;
        $this->subject = $subject;
        $this->content = $content;
        $this->html = $html;

        //Call to function
        $this->sendMail();
    }


    /** REST **/

    /**
     * This function returns a mail sender
     * @return string
     */
    public function getSender()
    {
        return $this->sender;
    }


    /**
     * This function returns a mail receiver
     * @return string
     */
    public function getReceiver()
    {
        return $this->receiver;
    }


    /**
     * This function returns a mail subject
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }


    /**
     * This function returns a mail content
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }


    /**
     * This function returns if content of mail is in html format
     * @return bool || @return boolean
     */
    public function isHtml()
    {
        return $this->html;
    }


    /** OTHERS **/

    /**
     * This function send a mail with constructor parameters
     */
    private function sendMail()
    {
        $headers = $this->html ?
            "From: $this->sender\r\n"."Reply-To: $this->sender\r\n" :
            "From: $this->sender\r\n"."Reply-To: $this->sender\r\n"."Content-Type: text/html; charset=\"iso-8859-1\" Content-Transfer-Encoding: quoted-printable; charset=utf-8"."\r\n";

        mail($this->receiver, $this->subject, $this->content, $headers);
    }


}
