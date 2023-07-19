<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once(__DIR__ . '/vendor/cloudmersive/cloudmersive_document_convert_api_client/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR-API-KEY');



$apiInstance = new Swagger\Client\Api\ConvertDocumentApi(
    
    
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/home/adm101/input.csv"; // \SplFileObject | Input file to perform the operation on.
$output_encoding = "UTF-8";

try {
    $result = $apiInstance->convertDocumentXlsxToCsv($input_file, $output_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScanApi->scanFile: ', $e->getMessage(), PHP_EOL;
}
?>