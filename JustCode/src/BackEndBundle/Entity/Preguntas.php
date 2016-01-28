<?php

namespace BackEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Preguntas
 *
 * @ORM\Table(name="preguntas")
 * @ORM\Entity(repositoryClass="BackEndBundle\Repository\PreguntasRepository")
 */
class Preguntas

{
     /**
     * @ORM\OneToMany(targetEntity="Respuestas", mappedBy="incorrecta")
     * @ORM\OneToMany(targetEntity="RespuestasCorrectas", mappedBy="correcta")
     */
    protected $respuestas;
    protected $correcta;

    public function __construct()
    {
        $this->respuestas = new ArrayCollection();
        $this->correcta = new ArrayCollection();
    }
    
    public function __toString()
    {
        return strval($this->id);
    }
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="enunciado", type="string", length=250)
     */
    private $enunciado;

    /**
     * @var string
     *
     * @ORM\Column(name="dificultad", type="string", length=5)
     */
    private $dificultad;

    /**
     * @var int
     *
     * @ORM\Column(name="id_nivel", type="integer")
     */
    private $idNivel;

    /**
     * @var int
     *
     * @ORM\Column(name="id_correcta", type="integer", unique=true)
     */
    private $idCorrecta;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set enunciado
     *
     * @param string $enunciado
     *
     * @return Preguntas
     */
    public function setEnunciado($enunciado)
    {
        $this->enunciado = $enunciado;

        return $this;
    }

    /**
     * Get enunciado
     *
     * @return string
     */
    public function getEnunciado()
    {
        return $this->enunciado;
    }

    /**
     * Set dificultad
     *
     * @param string $dificultad
     *
     * @return Preguntas
     */
    public function setDificultad($dificultad)
    {
        $this->dificultad = $dificultad;

        return $this;
    }

    /**
     * Get dificultad
     *
     * @return string
     */
    public function getDificultad()
    {
        return $this->dificultad;
    }

    /**
     * Set idNivel
     *
     * @param integer $idNivel
     *
     * @return Preguntas
     */
    public function setIdNivel($idNivel)
    {
        $this->idNivel = $idNivel;

        return $this;
    }

    /**
     * Get idNivel
     *
     * @return int
     */
    public function getIdNivel()
    {
        return $this->idNivel;
    }

    /**
     * Set idCorrecta
     *
     * @param string $idCorrecta
     *
     * @return Preguntas
     */
    public function setIdCorrecta($idCorrecta)
    {
        $this->idCorrecta = $idCorrecta;

        return $this;
    }

    /**
     * Get idCorrecta
     *
     * @return string
     */
    public function getIdCorrecta()
    {
        return $this->idCorrecta;
    }

    /**
     * Add respuesta
     *
     * @param \BackEndBundle\Entity\Respuestas $respuesta
     *
     * @return Preguntas
     */
    public function addRespuesta(\BackEndBundle\Entity\Respuestas $respuesta)
    {
        $this->respuestas[] = $respuesta;

        return $this;
    }

    /**
     * Remove respuesta
     *
     * @param \BackEndBundle\Entity\Respuestas $respuesta
     */
    public function removeRespuesta(\BackEndBundle\Entity\Respuestas $respuesta)
    {
        $this->respuestas->removeElement($respuesta);
    }

    /**
     * Get respuestas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRespuestas()
    {
        return $this->respuestas;
    }
}
