<?php
 namespace Predis\Command; class SetIntersectionStore extends Command { public function getId() { return 'SINTERSTORE'; } protected function filterArguments(array $arguments) { if (count($arguments) === 2 && is_array($arguments[1])) { return array_merge(array($arguments[0]), $arguments[1]); } return $arguments; } } 