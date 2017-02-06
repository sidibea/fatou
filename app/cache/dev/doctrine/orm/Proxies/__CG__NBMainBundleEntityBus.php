<?php

namespace Proxies\__CG__\NB\MainBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Bus extends \NB\MainBundle\Entity\Bus implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'NB\\MainBundle\\Entity\\Bus' . "\0" . 'id', '' . "\0" . 'NB\\MainBundle\\Entity\\Bus' . "\0" . 'regno', '' . "\0" . 'NB\\MainBundle\\Entity\\Bus' . "\0" . 'brand', '' . "\0" . 'NB\\MainBundle\\Entity\\Bus' . "\0" . 'company', '' . "\0" . 'NB\\MainBundle\\Entity\\Bus' . "\0" . 'capacity', '' . "\0" . 'NB\\MainBundle\\Entity\\Bus' . "\0" . 'type', '' . "\0" . 'NB\\MainBundle\\Entity\\Bus' . "\0" . 'createdAt', '' . "\0" . 'NB\\MainBundle\\Entity\\Bus' . "\0" . 'updatedAt', '' . "\0" . 'NB\\MainBundle\\Entity\\Bus' . "\0" . 'active', '' . "\0" . 'NB\\MainBundle\\Entity\\Bus' . "\0" . 'photo', '' . "\0" . 'NB\\MainBundle\\Entity\\Bus' . "\0" . 'wifi', '' . "\0" . 'NB\\MainBundle\\Entity\\Bus' . "\0" . 'tele', '' . "\0" . 'NB\\MainBundle\\Entity\\Bus' . "\0" . 'music', '' . "\0" . 'NB\\MainBundle\\Entity\\Bus' . "\0" . 'nourriture'];
        }

        return ['__isInitialized__', '' . "\0" . 'NB\\MainBundle\\Entity\\Bus' . "\0" . 'id', '' . "\0" . 'NB\\MainBundle\\Entity\\Bus' . "\0" . 'regno', '' . "\0" . 'NB\\MainBundle\\Entity\\Bus' . "\0" . 'brand', '' . "\0" . 'NB\\MainBundle\\Entity\\Bus' . "\0" . 'company', '' . "\0" . 'NB\\MainBundle\\Entity\\Bus' . "\0" . 'capacity', '' . "\0" . 'NB\\MainBundle\\Entity\\Bus' . "\0" . 'type', '' . "\0" . 'NB\\MainBundle\\Entity\\Bus' . "\0" . 'createdAt', '' . "\0" . 'NB\\MainBundle\\Entity\\Bus' . "\0" . 'updatedAt', '' . "\0" . 'NB\\MainBundle\\Entity\\Bus' . "\0" . 'active', '' . "\0" . 'NB\\MainBundle\\Entity\\Bus' . "\0" . 'photo', '' . "\0" . 'NB\\MainBundle\\Entity\\Bus' . "\0" . 'wifi', '' . "\0" . 'NB\\MainBundle\\Entity\\Bus' . "\0" . 'tele', '' . "\0" . 'NB\\MainBundle\\Entity\\Bus' . "\0" . 'music', '' . "\0" . 'NB\\MainBundle\\Entity\\Bus' . "\0" . 'nourriture'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Bus $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getUniqueName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUniqueName', []);

        return parent::getUniqueName();
    }

    /**
     * {@inheritDoc}
     */
    public function setRegno($regno)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegno', [$regno]);

        return parent::setRegno($regno);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegno()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegno', []);

        return parent::getRegno();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompany($company)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompany', [$company]);

        return parent::setCompany($company);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompany()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompany', []);

        return parent::getCompany();
    }

    /**
     * {@inheritDoc}
     */
    public function setCapacity($capacity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCapacity', [$capacity]);

        return parent::setCapacity($capacity);
    }

    /**
     * {@inheritDoc}
     */
    public function getCapacity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCapacity', []);

        return parent::getCapacity();
    }

    /**
     * {@inheritDoc}
     */
    public function setConfort($confort)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConfort', [$confort]);

        return parent::setConfort($confort);
    }

    /**
     * {@inheritDoc}
     */
    public function getConfort()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConfort', []);

        return parent::getConfort();
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoto', []);

        return parent::getPhoto();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoto($photo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoto', [$photo]);

        return parent::setPhoto($photo);
    }

    /**
     * {@inheritDoc}
     */
    public function isWifi()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isWifi', []);

        return parent::isWifi();
    }

    /**
     * {@inheritDoc}
     */
    public function setWifi($wifi)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWifi', [$wifi]);

        return parent::setWifi($wifi);
    }

    /**
     * {@inheritDoc}
     */
    public function isTele()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isTele', []);

        return parent::isTele();
    }

    /**
     * {@inheritDoc}
     */
    public function setTele($tele)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTele', [$tele]);

        return parent::setTele($tele);
    }

    /**
     * {@inheritDoc}
     */
    public function isMusic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isMusic', []);

        return parent::isMusic();
    }

    /**
     * {@inheritDoc}
     */
    public function setMusic($music)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMusic', [$music]);

        return parent::setMusic($music);
    }

    /**
     * {@inheritDoc}
     */
    public function isNourriture()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isNourriture', []);

        return parent::isNourriture();
    }

    /**
     * {@inheritDoc}
     */
    public function setNourriture($nourriture)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNourriture', [$nourriture]);

        return parent::setNourriture($nourriture);
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setActive($active)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActive', [$active]);

        return parent::setActive($active);
    }

    /**
     * {@inheritDoc}
     */
    public function getActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActive', []);

        return parent::getActive();
    }

    /**
     * {@inheritDoc}
     */
    public function getBrand()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBrand', []);

        return parent::getBrand();
    }

    /**
     * {@inheritDoc}
     */
    public function setBrand($brand)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBrand', [$brand]);

        return parent::setBrand($brand);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

}
