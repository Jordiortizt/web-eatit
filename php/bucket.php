<?php

require '../vendor/autoload.php';


use Aws\S3\S3Client;  

    //Create a S3Client
    $s3Client = new S3Client([
        'region' => 'eu-west-1',
        'version' => '2006-03-01',
        'credentials' => [
            'key'    => "AKIAZ5LAIL3A74RKGK6B",
            'secret' => "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",
        ]
    ]);

    $bucket = "s3ortizjairo";


?>