<?php


class classMainJWTAuth {
    function __construct() {
        // key da API
        $key = API_KEY;

        // Base 64
    }

    public static function checkAuth($accessToken) {
        if ($accessToken != null) {
            /* Parte-se o token pelos pontos para separar o header, opayload e a assinatura*/
            $accessToken = explode('.', $accessToken);
            $header = $accessToken[0];
            $payload = $accessToken[1];
            $signature = $accessToken[2];

            /* É feito novamente uma nova assinatura com o header e o paylaod da assinatura recebida da API,
            e com a nossa chave da api */
            $valid = hash_hmac('sha256', $header . "." . $payload, API_KEY, true);
            // Transforma um Base64 em Base64Url porque ainda não existe em PHP
            $valid = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($valid));

            if ($signature === $valid) {
                return true;
            }
        }
        return false;
    }
}