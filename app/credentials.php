<?php

    // https://www.mercadopago.com.br/developers/pt/docs/credentials
    const MERCADO_PAGO_CONFIG = [
        "access_token"     => "Insira aqui o Access_Token",
        // "access_token"     => "Insira aqui o Access_Token",
        "notification_url" => "https://meu.site/public/payment/notification.php"// Retirar o "meu.site" e colocar seu site.
    ];

    const DATABASE_CONFIG = [
        "drive"  => "mysql",
        "host"   => "localhost",
        "user"   => "root",
        "pass"   => "root",
        "dbname" => "pix"
    ];