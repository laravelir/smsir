<?php

namespace Laravelir\SMSIR\Drivers;

class Raygansms extends Driver
{

    private $UserName = "";
    private $Password = "";
    private $Footer;

    public static function SendOTP($receptor, $code)
    {
        $url = "http://smspanel.Trez.ir/SendMessageWithCode.ashx";

        $message = <<<MESSAGE
            کد فعال سازی شما:
            $code
            rasadm.com
        MESSAGE;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt(
            $ch,
            CURLOPT_POSTFIELDS,
            http_build_query(array(
                'Username' => "alij26t",
                'Password' => "5859001324",
                'Mobile' => $receptor,
                'Message' => $message
            ))
        );

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec($ch);

        curl_close($ch);
        return $server_output;
    }

    public static function Sendsms($receptor, $message)
    {

        $Url = "http://smspanel.Trez.ir/SendMessageWithPost.ashx";

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $Url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt(
            $ch,
            CURLOPT_POSTFIELDS,
            http_build_query(array(
                'Username' => "alij26t",
                'Password' => "5859001324",
                'PhoneNumber' => "5000299556191",
                'MessageBody' => $message,
                'RecNumber' => $receptor,
                'Smsclass' => 1
            ))
        );

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec($ch);

        curl_close($ch);

        return $server_output;
    }

    function SendCode($mobileNumber, $footer)
    {
        $Url = "http://smspanel.Trez.ir/AutoSendCode.ashx";
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $Url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt(
            $ch,
            CURLOPT_POSTFIELDS,
            http_build_query(array(
                'Username' => $this->UserName,
                'Password' => $this->Password,
                'Mobile' => $mobileNumber,
                'Footer' => $footer
            ))
        );

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec($ch);

        curl_close($ch);
        return $server_output;
    }

    function IsCodeValid($mobileNumber, $code)
    {
        $Url = "http://smspanel.Trez.ir/CheckSendCode.ashx";
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $Url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt(
            $ch,
            CURLOPT_POSTFIELDS,
            http_build_query(array(
                'Username' => $this->UserName,
                'Password' => $this->Password,
                'Mobile' => $mobileNumber,
                'Code' => $code
            ))
        );

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec($ch);

        curl_close($ch);
        return $server_output;

    }

}
