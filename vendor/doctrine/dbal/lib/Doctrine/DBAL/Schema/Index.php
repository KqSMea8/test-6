<?php
 namespace Doctrine\DBAL\Schema; use Doctrine\DBAL\Platforms\AbstractPlatform; class Index extends AbstractAsset implements Constraint { protected $_columns = array(); protected $_isUnique = false; protected $_isPrimary = false; protected $_flags = array(); private $options = array(); public function __construct($indexName, array $columns, $isUnique = false, $isPrimary = false, array $flags = array(), array $options = array()) { $isUnique = $isUnique || $isPrimary; $this->_setName($indexName); $this->_isUnique = $isUnique; $this->_isPrimary = $isPrimary; $this->options = $options; foreach ($columns as $column) { $this->_addColumn($column); } foreach ($flags as $flag) { $this->addFlag($flag); } } protected function _addColumn($column) { if (is_string($column)) { $this->_columns[$column] = new Identifier($column); } else { throw new \InvalidArgumentException("Expecting a string as Index Column"); } } public function getColumns() { return array_keys($this->_columns); } public function getQuotedColumns(AbstractPlatform $platform) { $columns = array(); foreach ($this->_columns as $column) { $columns[] = $column->getQuotedName($platform); } return $columns; } public function getUnquotedColumns() { return array_map(array($this, 'trimQuotes'), $this->getColumns()); } public function isSimpleIndex() { return !$this->_isPrimary && !$this->_isUnique; } public function isUnique() { return $this->_isUnique; } public function isPrimary() { return $this->_isPrimary; } public function hasColumnAtPosition($columnName, $pos = 0) { $columnName = $this->trimQuotes(strtolower($columnName)); $indexColumns = array_map('strtolower', $this->getUnquotedColumns()); return array_search($columnName, $indexColumns) === $pos; } public function spansColumns(array $columnNames) { $columns = $this->getColumns(); $numberOfColumns = count($columns); $sameColumns = true; for ($i = 0; $i < $numberOfColumns; $i++) { if ( ! isset($columnNames[$i]) || $this->trimQuotes(strtolower($columns[$i])) !== $this->trimQuotes(strtolower($columnNames[$i]))) { $sameColumns = false; } } return $sameColumns; } public function isFullfilledBy(Index $other) { if (count($other->getColumns()) != count($this->getColumns())) { return false; } $sameColumns = $this->spansColumns($other->getColumns()); if ($sameColumns) { if ( ! $this->samePartialIndex($other)) { return false; } if ( ! $this->isUnique() && ! $this->isPrimary()) { return true; } if ($other->isPrimary() != $this->isPrimary()) { return false; } if ($other->isUnique() != $this->isUnique()) { return false; } return true; } return false; } public function overrules(Index $other) { if ($other->isPrimary()) { return false; } elseif ($this->isSimpleIndex() && $other->isUnique()) { return false; } if ($this->spansColumns($other->getColumns()) && ($this->isPrimary() || $this->isUnique()) && $this->samePartialIndex($other)) { return true; } return false; } public function getFlags() { return array_keys($this->_flags); } public function addFlag($flag) { $this->_flags[strtolower($flag)] = true; return $this; } public function hasFlag($flag) { return isset($this->_flags[strtolower($flag)]); } public function removeFlag($flag) { unset($this->_flags[strtolower($flag)]); } public function hasOption($name) { return isset($this->options[strtolower($name)]); } public function getOption($name) { return $this->options[strtolower($name)]; } public function getOptions() { return $this->options; } private function samePartialIndex(Index $other) { if ($this->hasOption('where') && $other->hasOption('where') && $this->getOption('where') == $other->getOption('where')) { return true; } if ( ! $this->hasOption('where') && ! $other->hasOption('where')) { return true; } return false; } } 