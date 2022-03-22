<?php
    //Funcion de API "SendMessage"
    //api del bot https://core.telegram.org/bots/api
    //Funcion del link https://api.telegram.org/bot<token>/<funcion><parametro1><parametro2>....<parametron>
    function sendMessage($chat_id,$usuario){//Manda el mensaje de verificacion del codigo
        $apiToken = "5033256231:AAHG75dHuz7qkt3eL0SeoIV0s3m17YQxgUU";
        $data = [
            'chat_id' => $chat_id,
            'text' => 'Hola, este es un mensaje de verificacion de ID del usuario '.$usuario.' por parte de Natural BF, si tu no pediste esto, hasnos saber al correo: NaturalBF@gmail.com'
        ];
        $response = file_get_contents("https://api.telegram.org/bot".$apiToken."/sendMessage?".http_build_query($data));
    }
    function sendMessageCompra($chat_id, $usuario, $pago, $fecha){//Manda el mensaje de compra
        $apiToken = "5033256231:AAHG75dHuz7qkt3eL0SeoIV0s3m17YQxgUU";
        $data = [
            'chat_id' => $chat_id,
            'text' => 'Estimado usuario '.$usuario.'. Acabas de comprar productos con un total de $'.$pago.' en el momento '.$fecha.'. Si tu no pediste esto, hasnos saber al correo: NaturalBF@gmail.com'
        ];
        $response = file_get_contents("https://api.telegram.org/bot".$apiToken."/sendMessage?".http_build_query($data));
    }
    function sendMessageEntrega($chat_id, $usuario){//Manda el mensaje de entrega
        $apiToken = "5033256231:AAHG75dHuz7qkt3eL0SeoIV0s3m17YQxgUU";
        $data = [
            'chat_id' => $chat_id,
            'text' => 'Estimado usuario '.$usuario.'. Se te acaba de entregar tu producto. Si no lo recibiste, hasnos saber al correo: NaturalBF@gmail.com'
        ];
        $response = file_get_contents("https://api.telegram.org/bot".$apiToken."/sendMessage?".http_build_query($data));
    }
?>
