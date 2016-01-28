<?php

namespace BackEndBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BackEndBundle\Entity\Preguntas;
use BackEndBundle\Form\PreguntasType;

/**
 * Preguntas controller.
 *
 */
class PreguntasController extends Controller
{
    /**
     * Lists all Preguntas entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $preguntas = $em->getRepository('BackEndBundle:Preguntas')->findAll();

        return $this->render('preguntas/index.html.twig', array(
            'preguntas' => $preguntas,
        ));
    }

    /**
     * Creates a new Preguntas entity.
     *
     */
    public function newAction(Request $request)
    {
        $pregunta = new Preguntas();
        $form = $this->createForm('BackEndBundle\Form\PreguntasType', $pregunta);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pregunta);
            $em->flush();

            return $this->redirectToRoute('preguntas_show', array('id' => $pregunta->getId()));
        }

        return $this->render('preguntas/new.html.twig', array(
            'pregunta' => $pregunta,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Preguntas entity.
     *
     */
    public function showAction(Preguntas $pregunta)
    {
        $deleteForm = $this->createDeleteForm($pregunta);

        return $this->render('preguntas/show.html.twig', array(
            'pregunta' => $pregunta,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Preguntas entity.
     *
     */
    public function editAction(Request $request, Preguntas $pregunta)
    {
        $deleteForm = $this->createDeleteForm($pregunta);
        $editForm = $this->createForm('BackEndBundle\Form\PreguntasType', $pregunta);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pregunta);
            $em->flush();

            return $this->redirectToRoute('preguntas_edit', array('id' => $pregunta->getId()));
        }

        return $this->render('preguntas/edit.html.twig', array(
            'pregunta' => $pregunta,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Preguntas entity.
     *
     */
    public function deleteAction(Request $request, Preguntas $pregunta)
    {
        $form = $this->createDeleteForm($pregunta);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pregunta);
            $em->flush();
        }

        return $this->redirectToRoute('preguntas_index');
    }

    /**
     * Creates a form to delete a Preguntas entity.
     *
     * @param Preguntas $pregunta The Preguntas entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Preguntas $pregunta)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('preguntas_delete', array('id' => $pregunta->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
