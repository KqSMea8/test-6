<?php
 namespace Doctrine\Common\Annotations; use SplFileObject; final class PhpParser { public function parseClass(\ReflectionClass $class) { if (method_exists($class, 'getUseStatements')) { return $class->getUseStatements(); } if (false === $filename = $class->getFileName()) { return array(); } $content = $this->getFileContent($filename, $class->getStartLine()); if (null === $content) { return array(); } $namespace = preg_quote($class->getNamespaceName()); $content = preg_replace('/^.*?(\bnamespace\s+' . $namespace . '\s*[;{].*)$/s', '\\1', $content); $tokenizer = new TokenParser('<?php ' . $content); $statements = $tokenizer->parseUseStatements($class->getNamespaceName()); return $statements; } private function getFileContent($filename, $lineNumber) { if ( ! is_file($filename)) { return null; } $content = ''; $lineCnt = 0; $file = new SplFileObject($filename); while (!$file->eof()) { if ($lineCnt++ == $lineNumber) { break; } $content .= $file->fgets(); } return $content; } } 