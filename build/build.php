<?php

$outputDir = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'types';
if(!file_exists($outputDir))
{
  mkdir($outputDir);
}
$files = glob(__DIR__ . DIRECTORY_SEPARATOR . 'tmp_webhooks/*.json');

function filenameToClass($file)
{
  return ucfirst($file);
}

foreach($files as $file)
{
  $json = json_decode(file_get_contents($file));
  $filename = basename($file, '.json');
  $className = filenameToClass($json->name ?? $filename);

  $src = [];
  $src[] = '<?php';
  $src[] = 'namespace ChargeHive\\Webhooks\\Types;';
  $src[] = '';
  if(isset($json->description))
  {
    $src[] = '/**';
    $src[] = ' * ' . $json->description;
    $src[] = ' */';
  }
  $src[] = 'class ' . $className;
  $src[] = '{';
  $src[] = '  //Generated at ' . date("Y-m-d H:i:s");

  foreach($json->properties as $property => $propertyDefinition)
  {
    $src[] = '';

    if(isset($propertyDefinition->enum))
    {
      foreach($propertyDefinition->enum as $enum)
      {
        $src[] = '  const ' . strtoupper($property) . '_' . strtoupper($enum) . ' = '
          . '"' . addslashes($enum) . '";';
      }
    }

    $docBlock = [];
    if(isset($propertyDefinition->description))
    {
      $docBlock[] = '   * ' . $propertyDefinition->description;
      $docBlock[] = '   *';
    }

    if(isset($propertyDefinition->type))
    {
      $docBlock[] = '   * @var ' . $propertyDefinition->type;
    }
    else if(isset($propertyDefinition->{'$ref'}))
    {
      $ref = $propertyDefinition->{'$ref'};
      $class = filenameToClass(basename($ref, '.json'));
      $docBlock[] = '   * @var ' . $class;
    }

    if(!empty($docBlock))
    {
      $src[] = '  /**';
      $src = array_merge($src, $docBlock);
      $src[] = '   */';
    }

    $src[] = '  public $' . $property . ';';
  }

  $src[] = '}';
  $src[] = '';

  file_put_contents($outputDir . DIRECTORY_SEPARATOR . $className . '.php', implode(PHP_EOL, $src));
}
