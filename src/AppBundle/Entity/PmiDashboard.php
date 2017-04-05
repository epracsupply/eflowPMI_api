<?php

namespace AppBundle\Entity;

/**
 * PmiDashboard
 */
class PmiDashboard
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
    private $titulo;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $template;


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
     * @return PmiDashboard
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
     * Set titulo
     *
     * @param string $titulo
     *
     * @return PmiDashboard
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return PmiDashboard
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
     * Set template
     *
     * @param string $template
     *
     * @return PmiDashboard
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Get template
     *
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }
}

