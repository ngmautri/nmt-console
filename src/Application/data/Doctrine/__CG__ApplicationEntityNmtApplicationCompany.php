<?php

namespace DoctrineProxies\__CG__\Application\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class NmtApplicationCompany extends \Application\Entity\NmtApplicationCompany implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'id', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'companyCode', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'companyName', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'defaultLogoId', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'status', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'createdOn', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'isDefault', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'token', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'lastChangeOn', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'revisionNo', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'uuid', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'defaultCurrency', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'createdBy', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'country', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'defaultAddress', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'lastChangeBy', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'defaultWarehouse'];
        }

        return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'id', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'companyCode', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'companyName', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'defaultLogoId', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'status', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'createdOn', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'isDefault', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'token', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'lastChangeOn', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'revisionNo', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'uuid', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'defaultCurrency', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'createdBy', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'country', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'defaultAddress', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'lastChangeBy', '' . "\0" . 'Application\\Entity\\NmtApplicationCompany' . "\0" . 'defaultWarehouse'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (NmtApplicationCompany $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
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
    public function setCompanyCode($companyCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompanyCode', [$companyCode]);

        return parent::setCompanyCode($companyCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompanyCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompanyCode', []);

        return parent::getCompanyCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompanyName($companyName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompanyName', [$companyName]);

        return parent::setCompanyName($companyName);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompanyName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompanyName', []);

        return parent::getCompanyName();
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultLogoId($defaultLogoId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefaultLogoId', [$defaultLogoId]);

        return parent::setDefaultLogoId($defaultLogoId);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultLogoId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaultLogoId', []);

        return parent::getDefaultLogoId();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedOn($createdOn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedOn', [$createdOn]);

        return parent::setCreatedOn($createdOn);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedOn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedOn', []);

        return parent::getCreatedOn();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsDefault($isDefault)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsDefault', [$isDefault]);

        return parent::setIsDefault($isDefault);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsDefault()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsDefault', []);

        return parent::getIsDefault();
    }

    /**
     * {@inheritDoc}
     */
    public function setToken($token)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setToken', [$token]);

        return parent::setToken($token);
    }

    /**
     * {@inheritDoc}
     */
    public function getToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getToken', []);

        return parent::getToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastChangeOn($lastChangeOn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastChangeOn', [$lastChangeOn]);

        return parent::setLastChangeOn($lastChangeOn);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastChangeOn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastChangeOn', []);

        return parent::getLastChangeOn();
    }

    /**
     * {@inheritDoc}
     */
    public function setRevisionNo($revisionNo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRevisionNo', [$revisionNo]);

        return parent::setRevisionNo($revisionNo);
    }

    /**
     * {@inheritDoc}
     */
    public function getRevisionNo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRevisionNo', []);

        return parent::getRevisionNo();
    }

    /**
     * {@inheritDoc}
     */
    public function setUuid($uuid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUuid', [$uuid]);

        return parent::setUuid($uuid);
    }

    /**
     * {@inheritDoc}
     */
    public function getUuid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUuid', []);

        return parent::getUuid();
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultCurrency(\Application\Entity\NmtApplicationCurrency $defaultCurrency = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefaultCurrency', [$defaultCurrency]);

        return parent::setDefaultCurrency($defaultCurrency);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultCurrency()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaultCurrency', []);

        return parent::getDefaultCurrency();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedBy(\Application\Entity\MlaUsers $createdBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedBy', [$createdBy]);

        return parent::setCreatedBy($createdBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedBy', []);

        return parent::getCreatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setCountry(\Application\Entity\NmtApplicationCountry $country = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountry', [$country]);

        return parent::setCountry($country);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountry', []);

        return parent::getCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultAddress(\Application\Entity\NmtApplicationCompanyAddress $defaultAddress = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefaultAddress', [$defaultAddress]);

        return parent::setDefaultAddress($defaultAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaultAddress', []);

        return parent::getDefaultAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastChangeBy(\Application\Entity\MlaUsers $lastChangeBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastChangeBy', [$lastChangeBy]);

        return parent::setLastChangeBy($lastChangeBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastChangeBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastChangeBy', []);

        return parent::getLastChangeBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultWarehouse(\Application\Entity\NmtInventoryWarehouse $defaultWarehouse = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefaultWarehouse', [$defaultWarehouse]);

        return parent::setDefaultWarehouse($defaultWarehouse);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultWarehouse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaultWarehouse', []);

        return parent::getDefaultWarehouse();
    }

}
