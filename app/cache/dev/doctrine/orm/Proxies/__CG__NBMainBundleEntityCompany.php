<?php

namespace Proxies\__CG__\NB\MainBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Company extends \NB\MainBundle\Entity\Company implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'id', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'nom', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'adresse', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'commission', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'slogan', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'description', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'logo', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'telephone', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'email', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'createdAt', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'updatedAt', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'active', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'metatitre', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'meta_description', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'motcle', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'users'];
        }

        return ['__isInitialized__', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'id', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'nom', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'adresse', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'commission', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'slogan', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'description', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'logo', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'telephone', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'email', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'createdAt', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'updatedAt', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'active', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'metatitre', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'meta_description', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'motcle', '' . "\0" . 'NB\\MainBundle\\Entity\\Company' . "\0" . 'users'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Company $proxy) {
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
    public function setUsers(\NB\UsersBundle\Entity\User $users = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsers', [$users]);

        return parent::setUsers($users);
    }

    /**
     * {@inheritDoc}
     */
    public function addUsers(\NB\UsersBundle\Entity\User $users)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUsers', [$users]);

        return parent::addUsers($users);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUsers(\NB\UsersBundle\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUsers', [$user]);

        return parent::removeUsers($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsers', []);

        return parent::getUsers();
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
    public function getCommission()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommission', []);

        return parent::getCommission();
    }

    /**
     * {@inheritDoc}
     */
    public function setCommission($commission)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommission', [$commission]);

        return parent::setCommission($commission);
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse($adresse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlogan($slogan)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlogan', [$slogan]);

        return parent::setSlogan($slogan);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlogan()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlogan', []);

        return parent::getSlogan();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogo($logo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogo', [$logo]);

        return parent::setLogo($logo);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogo', []);

        return parent::getLogo();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhotos($photos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhotos', [$photos]);

        return parent::setPhotos($photos);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhotos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhotos', []);

        return parent::getPhotos();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelephone($telephone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelephone', [$telephone]);

        return parent::setTelephone($telephone);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelephone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelephone', []);

        return parent::getTelephone();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
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
    public function getMotcle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMotcle', []);

        return parent::getMotcle();
    }

    /**
     * {@inheritDoc}
     */
    public function setMotcle($motcle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMotcle', [$motcle]);

        return parent::setMotcle($motcle);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetaDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetaDescription', []);

        return parent::getMetaDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetaDescription($meta_description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetaDescription', [$meta_description]);

        return parent::setMetaDescription($meta_description);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetatitre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetatitre', []);

        return parent::getMetatitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetatitre($metatitre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetatitre', [$metatitre]);

        return parent::setMetatitre($metatitre);
    }

}
