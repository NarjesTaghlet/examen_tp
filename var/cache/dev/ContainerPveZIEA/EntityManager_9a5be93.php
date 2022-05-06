<?php

namespace ContainerPveZIEA;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldereb796 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6adde = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties51869 = [
        
    ];

    public function getConnection()
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'getConnection', array(), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'getMetadataFactory', array(), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'getExpressionBuilder', array(), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'beginTransaction', array(), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'getCache', array(), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'transactional', array('func' => $func), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'commit', array(), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->commit();
    }

    public function rollback()
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'rollback', array(), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'getClassMetadata', array('className' => $className), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'createQuery', array('dql' => $dql), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'createNamedQuery', array('name' => $name), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'createQueryBuilder', array(), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'flush', array('entity' => $entity), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'clear', array('entityName' => $entityName), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->clear($entityName);
    }

    public function close()
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'close', array(), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->close();
    }

    public function persist($entity)
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'persist', array('entity' => $entity), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'remove', array('entity' => $entity), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'refresh', array('entity' => $entity), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'detach', array('entity' => $entity), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'merge', array('entity' => $entity), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'contains', array('entity' => $entity), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'getEventManager', array(), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'getConfiguration', array(), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'isOpen', array(), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'getUnitOfWork', array(), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'getProxyFactory', array(), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'initializeObject', array('obj' => $obj), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'getFilters', array(), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'isFiltersStateClean', array(), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'hasFilters', array(), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return $this->valueHoldereb796->hasFilters();
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

        $instance->initializer6adde = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldereb796) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldereb796 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldereb796->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, '__get', ['name' => $name], $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        if (isset(self::$publicProperties51869[$name])) {
            return $this->valueHoldereb796->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb796;

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

        $targetObject = $this->valueHoldereb796;
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
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb796;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldereb796;
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
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, '__isset', array('name' => $name), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb796;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldereb796;
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
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, '__unset', array('name' => $name), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb796;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldereb796;
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
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, '__clone', array(), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        $this->valueHoldereb796 = clone $this->valueHoldereb796;
    }

    public function __sleep()
    {
        $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, '__sleep', array(), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;

        return array('valueHoldereb796');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6adde = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6adde;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6adde && ($this->initializer6adde->__invoke($valueHoldereb796, $this, 'initializeProxy', array(), $this->initializer6adde) || 1) && $this->valueHoldereb796 = $valueHoldereb796;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldereb796;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldereb796;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
