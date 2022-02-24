<?php

namespace ContainerYz0MNob;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder28291 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb7ae9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7cc71 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'getConnection', array(), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'getMetadataFactory', array(), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'getExpressionBuilder', array(), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'beginTransaction', array(), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'getCache', array(), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'transactional', array('func' => $func), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'commit', array(), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->commit();
    }

    public function rollback()
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'rollback', array(), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'getClassMetadata', array('className' => $className), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'createQuery', array('dql' => $dql), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'createNamedQuery', array('name' => $name), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'createQueryBuilder', array(), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'flush', array('entity' => $entity), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'clear', array('entityName' => $entityName), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->clear($entityName);
    }

    public function close()
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'close', array(), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->close();
    }

    public function persist($entity)
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'persist', array('entity' => $entity), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'remove', array('entity' => $entity), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'refresh', array('entity' => $entity), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'detach', array('entity' => $entity), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'merge', array('entity' => $entity), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'contains', array('entity' => $entity), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'getEventManager', array(), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'getConfiguration', array(), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'isOpen', array(), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'getUnitOfWork', array(), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'getProxyFactory', array(), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'initializeObject', array('obj' => $obj), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'getFilters', array(), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'isFiltersStateClean', array(), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'hasFilters', array(), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return $this->valueHolder28291->hasFilters();
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

        $instance->initializerb7ae9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder28291) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder28291 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder28291->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, '__get', ['name' => $name], $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        if (isset(self::$publicProperties7cc71[$name])) {
            return $this->valueHolder28291->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28291;

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

        $targetObject = $this->valueHolder28291;
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
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28291;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder28291;
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
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, '__isset', array('name' => $name), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28291;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder28291;
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
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, '__unset', array('name' => $name), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28291;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder28291;
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
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, '__clone', array(), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        $this->valueHolder28291 = clone $this->valueHolder28291;
    }

    public function __sleep()
    {
        $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, '__sleep', array(), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;

        return array('valueHolder28291');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb7ae9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb7ae9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb7ae9 && ($this->initializerb7ae9->__invoke($valueHolder28291, $this, 'initializeProxy', array(), $this->initializerb7ae9) || 1) && $this->valueHolder28291 = $valueHolder28291;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder28291;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder28291;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
