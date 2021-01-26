<?php
require 'vendor/autoload.php';

use Google\Cloud\Dialogflow\V2\EntityTypesClient;

putenv('GOOGLE_APPLICATION_CREDENTIALS=/home/takawano120/.config/gcloud/application_default_credentials.json');
$entityTypesClient = new EntityTypesClient();
$projectId = 'smartjobs-ykyi';
$entityTypeId = '0abaf0b3-9e48-4e23-a3ff-d33040e2a024';
$formattedEntityTypeName = $entityTypesClient->entityTypeName($projectId, $entityTypeId);

$entityType = $entityTypesClient->getEntityType($formattedEntityTypeName);
foreach ($entityType->getEntities() as $entity) {
  print(PHP_EOL);
  printf('Entity value: %s' . PHP_EOL, $entity->getValue());
  print('Synonyms: ');
  foreach ($entity->getSynonyms() as $synonym) {
    print($synonym . "\t");
  }
  print(PHP_EOL);
}