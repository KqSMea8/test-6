<?php
 namespace Doctrine\Common\Persistence\Mapping; interface ReflectionService { public function getParentClasses($class); public function getClassShortName($class); public function getClassNamespace($class); public function getClass($class); public function getAccessibleProperty($class, $property); public function hasPublicMethod($class, $method); } 