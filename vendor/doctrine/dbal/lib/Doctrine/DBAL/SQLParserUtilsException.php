<?php
 namespace Doctrine\DBAL; class SQLParserUtilsException extends DBALException { public static function missingParam($paramName) { return new self(sprintf('Value for :%1$s not found in params array. Params array key should be "%1$s"', $paramName)); } public static function missingType($typeName) { return new self(sprintf('Value for :%1$s not found in types array. Types array key should be "%1$s"', $typeName)); } } 