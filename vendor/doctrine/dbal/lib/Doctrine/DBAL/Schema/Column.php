<?php
 namespace Doctrine\DBAL\Schema; use Doctrine\DBAL\Types\Type; class Column extends AbstractAsset { protected $_type; protected $_length = null; protected $_precision = 10; protected $_scale = 0; protected $_unsigned = false; protected $_fixed = false; protected $_notnull = true; protected $_default = null; protected $_autoincrement = false; protected $_platformOptions = array(); protected $_columnDefinition = null; protected $_comment = null; protected $_customSchemaOptions = array(); public function __construct($columnName, Type $type, array $options=array()) { $this->_setName($columnName); $this->setType($type); $this->setOptions($options); } public function setOptions(array $options) { foreach ($options as $name => $value) { $method = "set".$name; if (method_exists($this, $method)) { $this->$method($value); } } return $this; } public function setType(Type $type) { $this->_type = $type; return $this; } public function setLength($length) { if ($length !== null) { $this->_length = (int) $length; } else { $this->_length = null; } return $this; } public function setPrecision($precision) { if (!is_numeric($precision)) { $precision = 10; } $this->_precision = (int) $precision; return $this; } public function setScale($scale) { if (!is_numeric($scale)) { $scale = 0; } $this->_scale = (int) $scale; return $this; } public function setUnsigned($unsigned) { $this->_unsigned = (bool) $unsigned; return $this; } public function setFixed($fixed) { $this->_fixed = (bool) $fixed; return $this; } public function setNotnull($notnull) { $this->_notnull = (bool) $notnull; return $this; } public function setDefault($default) { $this->_default = $default; return $this; } public function setPlatformOptions(array $platformOptions) { $this->_platformOptions = $platformOptions; return $this; } public function setPlatformOption($name, $value) { $this->_platformOptions[$name] = $value; return $this; } public function setColumnDefinition($value) { $this->_columnDefinition = $value; return $this; } public function getType() { return $this->_type; } public function getLength() { return $this->_length; } public function getPrecision() { return $this->_precision; } public function getScale() { return $this->_scale; } public function getUnsigned() { return $this->_unsigned; } public function getFixed() { return $this->_fixed; } public function getNotnull() { return $this->_notnull; } public function getDefault() { return $this->_default; } public function getPlatformOptions() { return $this->_platformOptions; } public function hasPlatformOption($name) { return isset($this->_platformOptions[$name]); } public function getPlatformOption($name) { return $this->_platformOptions[$name]; } public function getColumnDefinition() { return $this->_columnDefinition; } public function getAutoincrement() { return $this->_autoincrement; } public function setAutoincrement($flag) { $this->_autoincrement = $flag; return $this; } public function setComment($comment) { $this->_comment = $comment; return $this; } public function getComment() { return $this->_comment; } public function setCustomSchemaOption($name, $value) { $this->_customSchemaOptions[$name] = $value; return $this; } public function hasCustomSchemaOption($name) { return isset($this->_customSchemaOptions[$name]); } public function getCustomSchemaOption($name) { return $this->_customSchemaOptions[$name]; } public function setCustomSchemaOptions(array $customSchemaOptions) { $this->_customSchemaOptions = $customSchemaOptions; return $this; } public function getCustomSchemaOptions() { return $this->_customSchemaOptions; } public function toArray() { return array_merge(array( 'name' => $this->_name, 'type' => $this->_type, 'default' => $this->_default, 'notnull' => $this->_notnull, 'length' => $this->_length, 'precision' => $this->_precision, 'scale' => $this->_scale, 'fixed' => $this->_fixed, 'unsigned' => $this->_unsigned, 'autoincrement' => $this->_autoincrement, 'columnDefinition' => $this->_columnDefinition, 'comment' => $this->_comment, ), $this->_platformOptions, $this->_customSchemaOptions); } } 