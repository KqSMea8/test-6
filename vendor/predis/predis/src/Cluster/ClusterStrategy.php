<?php
 namespace Predis\Cluster; use Predis\Command\CommandInterface; use Predis\Command\ScriptCommand; abstract class ClusterStrategy implements StrategyInterface { protected $commands; public function __construct() { $this->commands = $this->getDefaultCommands(); } protected function getDefaultCommands() { $getKeyFromFirstArgument = array($this, 'getKeyFromFirstArgument'); $getKeyFromAllArguments = array($this, 'getKeyFromAllArguments'); return array( 'EXISTS' => $getKeyFromAllArguments, 'DEL' => $getKeyFromAllArguments, 'TYPE' => $getKeyFromFirstArgument, 'EXPIRE' => $getKeyFromFirstArgument, 'EXPIREAT' => $getKeyFromFirstArgument, 'PERSIST' => $getKeyFromFirstArgument, 'PEXPIRE' => $getKeyFromFirstArgument, 'PEXPIREAT' => $getKeyFromFirstArgument, 'TTL' => $getKeyFromFirstArgument, 'PTTL' => $getKeyFromFirstArgument, 'SORT' => array($this, 'getKeyFromSortCommand'), 'DUMP' => $getKeyFromFirstArgument, 'RESTORE' => $getKeyFromFirstArgument, 'APPEND' => $getKeyFromFirstArgument, 'DECR' => $getKeyFromFirstArgument, 'DECRBY' => $getKeyFromFirstArgument, 'GET' => $getKeyFromFirstArgument, 'GETBIT' => $getKeyFromFirstArgument, 'MGET' => $getKeyFromAllArguments, 'SET' => $getKeyFromFirstArgument, 'GETRANGE' => $getKeyFromFirstArgument, 'GETSET' => $getKeyFromFirstArgument, 'INCR' => $getKeyFromFirstArgument, 'INCRBY' => $getKeyFromFirstArgument, 'INCRBYFLOAT' => $getKeyFromFirstArgument, 'SETBIT' => $getKeyFromFirstArgument, 'SETEX' => $getKeyFromFirstArgument, 'MSET' => array($this, 'getKeyFromInterleavedArguments'), 'MSETNX' => array($this, 'getKeyFromInterleavedArguments'), 'SETNX' => $getKeyFromFirstArgument, 'SETRANGE' => $getKeyFromFirstArgument, 'STRLEN' => $getKeyFromFirstArgument, 'SUBSTR' => $getKeyFromFirstArgument, 'BITOP' => array($this, 'getKeyFromBitOp'), 'BITCOUNT' => $getKeyFromFirstArgument, 'BITFIELD' => $getKeyFromFirstArgument, 'LINSERT' => $getKeyFromFirstArgument, 'LINDEX' => $getKeyFromFirstArgument, 'LLEN' => $getKeyFromFirstArgument, 'LPOP' => $getKeyFromFirstArgument, 'RPOP' => $getKeyFromFirstArgument, 'RPOPLPUSH' => $getKeyFromAllArguments, 'BLPOP' => array($this, 'getKeyFromBlockingListCommands'), 'BRPOP' => array($this, 'getKeyFromBlockingListCommands'), 'BRPOPLPUSH' => array($this, 'getKeyFromBlockingListCommands'), 'LPUSH' => $getKeyFromFirstArgument, 'LPUSHX' => $getKeyFromFirstArgument, 'RPUSH' => $getKeyFromFirstArgument, 'RPUSHX' => $getKeyFromFirstArgument, 'LRANGE' => $getKeyFromFirstArgument, 'LREM' => $getKeyFromFirstArgument, 'LSET' => $getKeyFromFirstArgument, 'LTRIM' => $getKeyFromFirstArgument, 'SADD' => $getKeyFromFirstArgument, 'SCARD' => $getKeyFromFirstArgument, 'SDIFF' => $getKeyFromAllArguments, 'SDIFFSTORE' => $getKeyFromAllArguments, 'SINTER' => $getKeyFromAllArguments, 'SINTERSTORE' => $getKeyFromAllArguments, 'SUNION' => $getKeyFromAllArguments, 'SUNIONSTORE' => $getKeyFromAllArguments, 'SISMEMBER' => $getKeyFromFirstArgument, 'SMEMBERS' => $getKeyFromFirstArgument, 'SSCAN' => $getKeyFromFirstArgument, 'SPOP' => $getKeyFromFirstArgument, 'SRANDMEMBER' => $getKeyFromFirstArgument, 'SREM' => $getKeyFromFirstArgument, 'ZADD' => $getKeyFromFirstArgument, 'ZCARD' => $getKeyFromFirstArgument, 'ZCOUNT' => $getKeyFromFirstArgument, 'ZINCRBY' => $getKeyFromFirstArgument, 'ZINTERSTORE' => array($this, 'getKeyFromZsetAggregationCommands'), 'ZRANGE' => $getKeyFromFirstArgument, 'ZRANGEBYSCORE' => $getKeyFromFirstArgument, 'ZRANK' => $getKeyFromFirstArgument, 'ZREM' => $getKeyFromFirstArgument, 'ZREMRANGEBYRANK' => $getKeyFromFirstArgument, 'ZREMRANGEBYSCORE' => $getKeyFromFirstArgument, 'ZREVRANGE' => $getKeyFromFirstArgument, 'ZREVRANGEBYSCORE' => $getKeyFromFirstArgument, 'ZREVRANK' => $getKeyFromFirstArgument, 'ZSCORE' => $getKeyFromFirstArgument, 'ZUNIONSTORE' => array($this, 'getKeyFromZsetAggregationCommands'), 'ZSCAN' => $getKeyFromFirstArgument, 'ZLEXCOUNT' => $getKeyFromFirstArgument, 'ZRANGEBYLEX' => $getKeyFromFirstArgument, 'ZREMRANGEBYLEX' => $getKeyFromFirstArgument, 'ZREVRANGEBYLEX' => $getKeyFromFirstArgument, 'HDEL' => $getKeyFromFirstArgument, 'HEXISTS' => $getKeyFromFirstArgument, 'HGET' => $getKeyFromFirstArgument, 'HGETALL' => $getKeyFromFirstArgument, 'HMGET' => $getKeyFromFirstArgument, 'HMSET' => $getKeyFromFirstArgument, 'HINCRBY' => $getKeyFromFirstArgument, 'HINCRBYFLOAT' => $getKeyFromFirstArgument, 'HKEYS' => $getKeyFromFirstArgument, 'HLEN' => $getKeyFromFirstArgument, 'HSET' => $getKeyFromFirstArgument, 'HSETNX' => $getKeyFromFirstArgument, 'HVALS' => $getKeyFromFirstArgument, 'HSCAN' => $getKeyFromFirstArgument, 'HSTRLEN' => $getKeyFromFirstArgument, 'PFADD' => $getKeyFromFirstArgument, 'PFCOUNT' => $getKeyFromAllArguments, 'PFMERGE' => $getKeyFromAllArguments, 'EVAL' => array($this, 'getKeyFromScriptingCommands'), 'EVALSHA' => array($this, 'getKeyFromScriptingCommands'), 'GEOADD' => $getKeyFromFirstArgument, 'GEOHASH' => $getKeyFromFirstArgument, 'GEOPOS' => $getKeyFromFirstArgument, 'GEODIST' => $getKeyFromFirstArgument, 'GEORADIUS' => array($this, 'getKeyFromGeoradiusCommands'), 'GEORADIUSBYMEMBER' => array($this, 'getKeyFromGeoradiusCommands'), ); } public function getSupportedCommands() { return array_keys($this->commands); } public function setCommandHandler($commandID, $callback = null) { $commandID = strtoupper($commandID); if (!isset($callback)) { unset($this->commands[$commandID]); return; } if (!is_callable($callback)) { throw new \InvalidArgumentException( 'The argument must be a callable object or NULL.' ); } $this->commands[$commandID] = $callback; } protected function getKeyFromFirstArgument(CommandInterface $command) { return $command->getArgument(0); } protected function getKeyFromAllArguments(CommandInterface $command) { $arguments = $command->getArguments(); if ($this->checkSameSlotForKeys($arguments)) { return $arguments[0]; } } protected function getKeyFromInterleavedArguments(CommandInterface $command) { $arguments = $command->getArguments(); $keys = array(); for ($i = 0; $i < count($arguments); $i += 2) { $keys[] = $arguments[$i]; } if ($this->checkSameSlotForKeys($keys)) { return $arguments[0]; } } protected function getKeyFromSortCommand(CommandInterface $command) { $arguments = $command->getArguments(); $firstKey = $arguments[0]; if (1 === $argc = count($arguments)) { return $firstKey; } $keys = array($firstKey); for ($i = 1; $i < $argc; ++$i) { if (strtoupper($arguments[$i]) === 'STORE') { $keys[] = $arguments[++$i]; } } if ($this->checkSameSlotForKeys($keys)) { return $firstKey; } } protected function getKeyFromBlockingListCommands(CommandInterface $command) { $arguments = $command->getArguments(); if ($this->checkSameSlotForKeys(array_slice($arguments, 0, count($arguments) - 1))) { return $arguments[0]; } } protected function getKeyFromBitOp(CommandInterface $command) { $arguments = $command->getArguments(); if ($this->checkSameSlotForKeys(array_slice($arguments, 1, count($arguments)))) { return $arguments[1]; } } protected function getKeyFromGeoradiusCommands(CommandInterface $command) { $arguments = $command->getArguments(); $argc = count($arguments); $startIndex = $command->getId() === 'GEORADIUS' ? 5 : 4; if ($argc > $startIndex) { $keys = array($arguments[0]); for ($i = $startIndex; $i < $argc; ++$i) { $argument = strtoupper($arguments[$i]); if ($argument === 'STORE' || $argument === 'STOREDIST') { $keys[] = $arguments[++$i]; } } if ($this->checkSameSlotForKeys($keys)) { return $arguments[0]; } else { return; } } return $arguments[0]; } protected function getKeyFromZsetAggregationCommands(CommandInterface $command) { $arguments = $command->getArguments(); $keys = array_merge(array($arguments[0]), array_slice($arguments, 2, $arguments[1])); if ($this->checkSameSlotForKeys($keys)) { return $arguments[0]; } } protected function getKeyFromScriptingCommands(CommandInterface $command) { if ($command instanceof ScriptCommand) { $keys = $command->getKeys(); } else { $keys = array_slice($args = $command->getArguments(), 2, $args[1]); } if ($keys && $this->checkSameSlotForKeys($keys)) { return $keys[0]; } } public function getSlot(CommandInterface $command) { $slot = $command->getSlot(); if (!isset($slot) && isset($this->commands[$cmdID = $command->getId()])) { $key = call_user_func($this->commands[$cmdID], $command); if (isset($key)) { $slot = $this->getSlotByKey($key); $command->setSlot($slot); } } return $slot; } protected function checkSameSlotForKeys(array $keys) { if (!$count = count($keys)) { return false; } $currentSlot = $this->getSlotByKey($keys[0]); for ($i = 1; $i < $count; ++$i) { $nextSlot = $this->getSlotByKey($keys[$i]); if ($currentSlot !== $nextSlot) { return false; } $currentSlot = $nextSlot; } return true; } protected function extractKeyTag($key) { if (false !== $start = strpos($key, '{')) { if (false !== ($end = strpos($key, '}', $start)) && $end !== ++$start) { $key = substr($key, $start, $end - $start); } } return $key; } } 