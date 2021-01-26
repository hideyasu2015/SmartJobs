<?php
require 'vendor/autoload.php';

use Google\Cloud\Dialogflow\V2\EntityTypesClient;

echo "start";
$entityTypesClient = new EntityTypesClient();
$projectId = 'smartjobs-ykyi';
$entityTypeId = 'job-type';
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