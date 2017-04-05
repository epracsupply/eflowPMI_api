<?php

namespace AppBundle\Entity;

/**
 * PmiIndicadorValor
 */
class PmiIndicadorValor
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
     * @var integer
     */
    private $periodo;

    /**
     * @var string
     */
    private $valor;


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
     * @return PmiIndicadorValor
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
     * Set periodo
     *
     * @param integer $periodo
     *
     * @return PmiIndicadorValor
     */
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;

        return $this;
    }

    /**
     * Get periodo
     *
     * @return integer
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /**
     * Set valor
     *
     * @param string $valor
     *
     * @return PmiIndicadorValor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return string
     */
    public function getValor()
    {
        return $this->valor;
    }
}

