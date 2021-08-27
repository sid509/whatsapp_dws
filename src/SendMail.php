<?php
namespace Dws\Whatsapp;
class SendMail
{
    public static function generateQr($number,$message)
    {
        $urlQr ='https://api.qrserver.com/v1/create-qr-code/?data=https://wa.me/'.$number.'/?text='.$message;
        $base_url = 'http://tinyurl.com/api-create.php?url=';
        $url = $base_url .''. $urlQr;
        $turl=Http::get($url);
        return $turl;
    }
}
