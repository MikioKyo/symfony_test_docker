<?php

namespace ContainerVd29mGB;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc608e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer209c4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties288f9 = [
        
    ];

    public function getConnection()
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'getConnection', array(), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'getMetadataFactory', array(), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'getExpressionBuilder', array(), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'beginTransaction', array(), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'getCache', array(), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'transactional', array('func' => $func), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'commit', array(), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->commit();
    }

    public function rollback()
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'rollback', array(), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'getClassMetadata', array('className' => $className), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'createQuery', array('dql' => $dql), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'createNamedQuery', array('name' => $name), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'createQueryBuilder', array(), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'flush', array('entity' => $entity), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'clear', array('entityName' => $entityName), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->clear($entityName);
    }

    public function close()
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'close', array(), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->close();
    }

    public function persist($entity)
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'persist', array('entity' => $entity), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'remove', array('entity' => $entity), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'refresh', array('entity' => $entity), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'detach', array('entity' => $entity), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'merge', array('entity' => $entity), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'contains', array('entity' => $entity), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'getEventManager', array(), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'getConfiguration', array(), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'isOpen', array(), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'getUnitOfWork', array(), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'getProxyFactory', array(), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'initializeObject', array('obj' => $obj), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'getFilters', array(), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'isFiltersStateClean', array(), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'hasFilters', array(), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return $this->valueHolderc608e->hasFilters();
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

        $instance->initializer209c4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc608e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc608e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc608e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, '__get', ['name' => $name], $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        if (isset(self::$publicProperties288f9[$name])) {
            return $this->valueHolderc608e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc608e;

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

        $targetObject = $this->valueHolderc608e;
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
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc608e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc608e;
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
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, '__isset', array('name' => $name), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc608e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc608e;
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
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, '__unset', array('name' => $name), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc608e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc608e;
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
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, '__clone', array(), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        $this->valueHolderc608e = clone $this->valueHolderc608e;
    }

    public function __sleep()
    {
        $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, '__sleep', array(), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;

        return array('valueHolderc608e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer209c4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer209c4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer209c4 && ($this->initializer209c4->__invoke($valueHolderc608e, $this, 'initializeProxy', array(), $this->initializer209c4) || 1) && $this->valueHolderc608e = $valueHolderc608e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc608e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc608e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
