<?php

$outputDir = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Types';
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
  $src[] = 'use ChargeHive\\Webhooks\\WebhookFoundation;';
  $src[] = '';
  if(isset($json->description))
  {
    $src[] = '/**';
    $src[] = ' * ' . $json->description;
    $src[] = ' */';
  }
  $src[] = 'class ' . $className . ' extends WebhookFoundation';
  $src[] = '{';
  $src[] = '  //Generated on ' . date("Y-m-d");

  $setters = [];

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
      if($propertyDefinition->type == "array" && isset($propertyDefinition->items))
      {
        if(isset($propertyDefinition->items->{'$ref'}))
        {
          $ref = $propertyDefinition->items->{'$ref'};
          $class = filenameToClass(basename($ref, '.json'));
          $docBlock[] = '   * @var ' . $class . '[]';
          $setters[$property] = "$class::manyFromSource(\$value)";
        }
        else if(isset($propertyDefinition->items->type))
        {
          $docBlock[] = '   * @var ' . $propertyDefinition->items->type . '[]';
        }
      }
      else
      {
        $docBlock[] = '   * @var ' . $propertyDefinition->type;
      }
    }
    else if(isset($propertyDefinition->{'$ref'}))
    {
      $ref = $propertyDefinition->{'$ref'};
      $class = filenameToClass(basename($ref, '.json'));
      $docBlock[] = '   * @var ' . $class;
      $setters[$property] = "$class::fromSource(\$value)";
    }

    if(!empty($docBlock))
    {
      $src[] = '  /**';
      $src = array_merge($src, $docBlock);
      $src[] = '   */';
    }

    $src[] = '  public $' . $property . ';';
  }

  if(!empty($setters))
  {
    $src[] = '';
    $src[] = '  protected function _set($property, $value)';
    $src[] = '  {';
    foreach($setters as $property => $setter)
    {
      $src[] = '    if($property == \'' . $property . '\')';
      $src[] = '    {';
      $src[] = '      $this->' . $property . ' = ' . $setter . ';';
      $src[] = '      return;';
      $src[] = '    }';
      $src[] = '    ';
    }
    $src[] = '    parent::_set($property, $value);';
    $src[] = '  }';
    $src[] = '';
  }

  $src[] = '}';
  $src[] = '';

  file_put_contents($outputDir . DIRECTORY_SEPARATOR . $className . '.php', implode(PHP_EOL, $src));
}
