<?php
namespace App\Classe;

use Mailjet\Client;
use Mailjet\Resources;

class Mail
{
    private $api_key = 'a30b537478cdd23605b4da2d56a0ec63';
    private $api_key_secret = '409c01224e7d185d868ac8be40f482cf';

    public function send($to_email,$to_name,$subject,$content)
    {
        $mj = new Client($this->api_key,$this->api_key_secret,true,['version' => 'v3.1']);
        $body = [
        'Messages' => [
        [ 
                'From' => [
                'Email' => "pablolarade@gmail.com",
                'Name' => "La Boutique Antillaise"
             ],
            'To' => [
                        [
                            'Email' => $to_email,
                            'Name' => $to_name
                        ]
                    ],
                        'TemplateID' => 2148726,
                        'TemplateLanguage' => true,
                        'Subject' => $subject,
                        'Variables' => [
                          'content' => $content,//variable dans mailjet quont a creer.
                      ]
            ]
               
         ]
 ];
     
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $response->success();
    }
}


