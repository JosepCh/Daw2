<?php

namespace BackEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RespuestasCorrectas
 *
 * @ORM\Table(name="respuestascorrectas")
 * @ORM\Entity(repositoryClass="BackEndBundle\Repository\RespuestasCorrectasRepository")
 */
class RespuestasCorrectas
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /** 
     * @ORM\ManyToOne(targetEntity="Preguntas", inversedBy="correcta")
     * @ORM\JoinColumn(name="id_pregunta", referencedColumnName="id")
    */
    protected $correcta;
    
    /**
     * @var string
     *
     * @ORM\Column(name="respuesta_ok", type="string", length=250, unique=true)
     */
    private $respuestaOk;


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
     * Set idPregunta
     *
     * @param integer $idPregunta
     *
     * @return RespuestasCorrectas
     */
    public function setIdPregunta($idPregunta)
    {
        $this->idPregunta = $idPregunta;

        return $this;
    }

    /**
     * Get idPregunta
     *
     * @return int
     */
    public function getIdPregunta()
    {
        return $this->idPregunta;
    }

    /**
     * Set respuestaOk
     *
     * @param string $respuestaOk
     *
     * @return RespuestasCorrectas
     */
    public function setRespuestaOk($respuestaOk)
    {
        $this->respuestaOk = $respuestaOk;

        return $this;
    }

    /**
     * Get respuestaOk
     *
     * @return string
     */
    public function getRespuestaOk()
    {
        return $this->respuestaOk;
    }

    /**
     * Set correcta
     *
     * @param \BackEndBundle\Entity\Preguntas $correcta
     *
     * @return RespuestasCorrectas
     */
    public function setCorrecta(\BackEndBundle\Entity\Preguntas $correcta = null)
    {
        $this->correcta = $correcta;

        return $this;
    }

    /**
     * Get correcta
     *
     * @return \BackEndBundle\Entity\Preguntas
     */
    public function getCorrecta()
    {
        return $this->correcta;
    }
}
