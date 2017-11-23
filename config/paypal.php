<?php
return array(
    // set your paypal credential
    'client_id' => 'AXMZf1DKE06M1voxIg2h1N6EKkJFTv6KEraCDvk4g5FeWvz5h1uizBlhOyGVwjF0vCcwrLQ4wpwgQlPN',
    'secret' => 'ELj-ZSrZjVeHzsf3lzhB7XQfr21-K9u9dlfZq8TlWGYi70sfFosJcQQIOF8D55lvAPdHe-Al-3xZTvn0',
 
    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',
 
        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,
 
        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,
 
        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',
 
        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);