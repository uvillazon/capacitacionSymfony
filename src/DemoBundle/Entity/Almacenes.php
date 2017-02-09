<?php

namespace DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Almacenes
 *
 * @ORM\Table(name="almacenes")
 * @ORM\Entity(repositoryClass="DemoBundle\Repository\AlmacenesRepository")
 */
class Almacenes
{


    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(name="idalmacen", type="string", length=20)
     */
    private $idalmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=30)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=50)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=50)
     */
    private $estado;




    /**
     * Set idalmacen
     *
     * @param string $idalmacen
     *
     * @return Almacenes
     */
    public function setIdalmacen($idalmacen)
    {
        $this->idalmacen = $idalmacen;

        return $this;
    }

    /**
     * Get idalmacen
     *
     * @return string
     */
    public function getIdalmacen()
    {
        return $this->idalmacen;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Almacenes
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
     * Set codigo
     *
     * @param string $codigo
     *
     * @return Almacenes
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Almacenes
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Almacenes
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }
}
