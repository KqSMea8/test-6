<?php
return array('default' => env('QUEUE_DRIVER', 'sync'), 'connections' => array('sync' => array('driver' => 'sync'), 'database' => array('driver' => 'database', 'table' => 'jobs', 'queue' => 'default', 'retry_after' => 90), 'beanstalkd' => array('driver' => 'beanstalkd', 'host' => 'localhost', 'queue' => 'default', 'retry_after' => 90), 'sqs' => array('driver' => 'sqs', 'key' => env('SQS_KEY', 'your-public-key'), 'secret' => env('SQS_SECRET', 'your-secret-key'), 'prefix' => env('SQS_PREFIX', 'https://sqs.us-east-1.amazonaws.com/your-account-id'), 'queue' => env('SQS_QUEUE', 'your-queue-name'), 'region' => env('SQS_REGION', 'us-east-1')), 'redis' => array('driver' => 'redis', 'connection' => 'default', 'queue' => 'default', 'retry_after' => 90)), 'failed' => array('database' => env('DB_CONNECTION', 'mysql'), 'table' => 'failed_jobs'));