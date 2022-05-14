<?php

namespace ContainerUGSEJ1Y;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder35983 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer20feb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7a666 = [
        
    ];

    public function getConnection()
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'getConnection', array(), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'getMetadataFactory', array(), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'getExpressionBuilder', array(), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'beginTransaction', array(), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'getCache', array(), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->getCache();
    }

    public function transactional($func)
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'transactional', array('func' => $func), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'wrapInTransaction', array('func' => $func), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'commit', array(), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->commit();
    }

    public function rollback()
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'rollback', array(), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'getClassMetadata', array('className' => $className), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'createQuery', array('dql' => $dql), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'createNamedQuery', array('name' => $name), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'createQueryBuilder', array(), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'flush', array('entity' => $entity), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'clear', array('entityName' => $entityName), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->clear($entityName);
    }

    public function close()
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'close', array(), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->close();
    }

    public function persist($entity)
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'persist', array('entity' => $entity), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'remove', array('entity' => $entity), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'refresh', array('entity' => $entity), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'detach', array('entity' => $entity), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'merge', array('entity' => $entity), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'getRepository', array('entityName' => $entityName), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'contains', array('entity' => $entity), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'getEventManager', array(), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'getConfiguration', array(), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'isOpen', array(), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'getUnitOfWork', array(), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'getProxyFactory', array(), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'initializeObject', array('obj' => $obj), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'getFilters', array(), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'isFiltersStateClean', array(), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'hasFilters', array(), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return $this->valueHolder35983->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer20feb = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder35983) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder35983 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder35983->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, '__get', ['name' => $name], $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        if (isset(self::$publicProperties7a666[$name])) {
            return $this->valueHolder35983->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder35983;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder35983;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder35983;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder35983;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, '__isset', array('name' => $name), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder35983;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder35983;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, '__unset', array('name' => $name), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder35983;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder35983;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, '__clone', array(), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        $this->valueHolder35983 = clone $this->valueHolder35983;
    }

    public function __sleep()
    {
        $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, '__sleep', array(), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;

        return array('valueHolder35983');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer20feb = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer20feb;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer20feb && ($this->initializer20feb->__invoke($valueHolder35983, $this, 'initializeProxy', array(), $this->initializer20feb) || 1) && $this->valueHolder35983 = $valueHolder35983;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder35983;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder35983;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
