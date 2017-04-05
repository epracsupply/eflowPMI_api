<?php

namespace AppBundle\Entity;

/**
 * PmiDashboardIndicador
 */
class PmiDashboardIndicador
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $codigoDashboard;

    /**
     * @var string
     */
    private $codigoIndicador;

    /**
     * @var string
     */
    private $tipoGrafico;

    /**
     * @var integer
     */
    private $cantidad;

    /**
     * @var integer
     */
    private $periodos;

    /**
     * @var string
     */
    private $textox;

    /**
     * @var string
     */
    private $textoy;

    /**
     * @var integer
     */
    private $posicion;


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
     * Set codigoDashboard
     *
     * @param string $codigoDashboard
     *
     * @return PmiDashboardIndicador
     */
    public function setCodigoDashboard($codigoDashboard)
    {
        $this->codigoDashboard = $codigoDashboard;

        return $this;
    }

    /**
     * Get codigoDashboard
     *
     * @return string
     */
    public function getCodigoDashboard()
    {
        return $this->codigoDashboard;
    }

    /**
     * Set codigoIndicador
     *
     * @param string $codigoIndicador
     *
     * @return PmiDashboardIndicador
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
     * Set tipoGrafico
     *
     * @param string $tipoGrafico
     *
     * @return PmiDashboardIndicador
     */
    public function setTipogGrafico($tipoGrafico)
    {
        $this->tipoGrafico = $tipoGrafico;

        return $this;
    }

    /**
     * Get tipoGrafico
     *
     * @return string
     */
    public function getTipogGrafico()
    {
        return $this->tipoGrafico;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return PmiDashboardIndicador
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set periodos
     *
     * @param integer $periodos
     *
     * @return PmiDashboardIndicador
     */
    public function setPeriodos($periodos)
    {
        $this->periodos = $periodos;

        return $this;
    }

    /**
     * Get periodos
     *
     * @return integer
     */
    public function getPeriodos()
    {
        return $this->periodos;
    }

    /**
     * Set textox
     *
     * @param string $textox
     *
     * @return PmiDashboardIndicador
     */
    public function setTextox($textox)
    {
        $this->textox = $textox;

        return $this;
    }

    /**
     * Get textox
     *
     * @return string
     */
    public function getTextox()
    {
        return $this->textox;
    }

    /**
     * Set textoy
     *
     * @param string $textoy
     *
     * @return PmiDashboardIndicador
     */
    public function setTextoy($textoy)
    {
        $this->textoy = $textoy;

        return $this;
    }

    /**
     * Get textoy
     *
     * @return string
     */
    public function getTextoy()
    {
        return $this->textoy;
    }

    /**
     * Set posicion
     *
     * @param integer $posicion
     *
     * @return PmiDashboardIndicador
     */
    public function setPosicion($posicion)
    {
        $this->posicion = $posicion;

        return $this;
    }

    /**
     * Get posicion
     *
     * @return integer
     */
    public function getPosicion()
    {
        return $this->posicion;
    }
}

