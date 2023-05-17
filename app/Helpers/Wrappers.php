<?php
namespace App\Helpers;

class Wrappers {
    public static function api(): \TikScraper\Api {
        $options = [
            'signer' => [
                'method' => "remote",
                'url' => "https://signtok.vercel.app/api/signature",
            ]
        ];

        return new \TikScraper\Api($options);
    }
}