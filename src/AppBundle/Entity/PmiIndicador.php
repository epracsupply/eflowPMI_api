<?php

namespace AppBundle\Entity;

/**
 * PmiIndicador
 */
class PmiIndicador
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $codigoIndicador;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $periodicidad;

    /**
     * @var string
     */
    private $valorMeta;

    /**
     * @var string
     */
    private $valorCritico;

    /**
     * @var boolean
     */
    private $tendenciaPositiva;

    /**
     * @var boolean
     */
    private $porcentual;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set codigoIndicador
     *
     * @param string $codigoIndicador
     *
     * @return PmiIndicador
     */
    public function setCodigoIndicador($codigoIndicador)
    {
        $this->codigoIndicador = $codigoIndicador;

        return $this;
    }

    /**
     * Get codigoIndicador
     *
     * @return string
     */
    public function getCodigoIndicador()
    {
        return $this->codigoIndicador;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return PmiIndicador
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return PmiIndicador
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set periodicidad
     *
     * @param string $periodicidad
     *
     * @return PmiIndicador
     */
    public function setPeriodicidad($periodicidad)
    {
        $this->periodicidad = $periodicidad;

        return $this;
    }

    /**
     * Get periodicidad
     *
     * @return string
     */
    public function getPeriodicidad()
    {
        return $this->periodicidad;
    }

    /**
     * Set valorMeta
     *
     * @param string $valorMeta
     *
     * @return PmiIndicador
     */
    public function setValorMeta($valorMeta)
    {
        $this->valorMeta = $valorMeta;

        return $this;
    }

    /**
     * Get valorMeta
     *
     * @return string
     */
    public function getValorMeta()
    {
        return $this->valorMeta;
    }

    /**
     * Set valorCritico
     *
     * @param string $valorCritico
     *
     * @return PmiIndicador
     */
    public function setValorCritico($valorCritico)
    {
        $this->valorCritico = $valorCritico;

        return $this;
    }

    /**
     * Get valorCritico
     *
     * @return string
     */
    public function getValorCritico()
    {
        return $this->valorCritico;
    }

    /**
     * Set tendenciaPositiva
     *
     * @param boolean $tendenciaPositiva
     *
     * @return PmiIndicador
     */
    public function setTendenciaPositiva($tendenciaPositiva)
    {
        $this->tendenciaPositiva = $tendenciaPositiva;

        return $this;
    }

    /**
     * Get tendenciaPositiva
     *
     * @return boolean
     */
    public function getTendenciaPositiva()
    {
        return $this->tendenciaPositiva;
    }

    /**
     * Set porcentual
     *
     * @param boolean $porcentual
     *
     * @return PmiIndicador
     */
    public function setPorcentual($porcentual)
    {
        $this->porcentual = $porcentual;

        return $this;
    }

    /**
     * Get porcentual
     *
     * @return boolean
     */
    public function getPorcentual()
    {
        return $this->porcentual;
    }
}

