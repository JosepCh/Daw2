<?php

namespace BackEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Respuestas
 *
 * @ORM\Table(name="respuestas")
 * @ORM\Entity(repositoryClass="BackEndBundle\Repository\RespuestasRepository")
 */
class Respuestas
{
    /**
     * @ORM\ManyToOne(targetEntity="Preguntas", inversedBy="respuestas")
     * @ORM\JoinColumn(name="id_pregunta", referencedColumnName="id")
     * 
     */
    protected $incorrecta;
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set pregunta
     *
     * @param \BackEndBundle\Entity\Preguntas $pregunta
     *
     * @return Respuestas
     */
    public function setPregunta(\BackEndBundle\Entity\Preguntas $pregunta = null)
    {
        $this->pregunta = $pregunta;

        return $this;
    }

    /**
     * Get pregunta
     *
     * @return \BackEndBundle\Entity\Preguntas
     */
    public function getPregunta()
    {
        return $this->pregunta;
    }


    /**
     * Set incorrecta
     *
     * @param \BackEndBundle\Entity\Preguntas $incorrecta
     *
     * @return Respuestas
     */
    public function setIncorrecta(\BackEndBundle\Entity\Preguntas $incorrecta = null)
    {
        $this->incorrecta = $incorrecta;

        return $this;
    }

    /**
     * Get incorrecta
     *
     * @return \BackEndBundle\Entity\Preguntas
     */
    public function getIncorrecta()
    {
        return $this->incorrecta;
    }

    /**
     * Set enunciado
     *
     * @param string $enunciado
     *
     * @return Respuestas
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
}
