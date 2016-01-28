<?php

namespace BackEndBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BackEndBundle\Entity\Respuestas;
use BackEndBundle\Form\RespuestasType;

/**
 * Respuestas controller.
 *
 */
class RespuestasController extends Controller
{
    /**
     * Lists all Respuestas entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $respuestass = $em->getRepository('BackEndBundle:Respuestas')->findAll();

        return $this->render('respuestas/index.html.twig', array(
            'respuestas' => $respuestass,
        ));
    }

    /**
     * Creates a new Respuestas entity.
     *
     */
    public function newAction(Request $request)
    {
        $respuestas = new Respuestas();
        $form = $this->createForm('BackEndBundle\Form\RespuestasType', $respuestas);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($respuestas);
            $em->flush();

            return $this->redirectToRoute('respuestas_show', array('id' => $respuestas->getId()));
        }

        return $this->render('respuestas/new.html.twig', array(
            'respuesta' => $respuestas,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Respuestas entity.
     *
     */
    public function showAction(Respuestas $respuestas)
    {
        $deleteForm = $this->createDeleteForm($respuestas);

        return $this->render('respuestas/show.html.twig', array(
            'respuesta' => $respuestas,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Respuestas entity.
     *
     */
    public function editAction(Request $request, Respuestas $respuestas)
    {
        $deleteForm = $this->createDeleteForm($respuestas);
        $editForm = $this->createForm('BackEndBundle\Form\RespuestasType', $respuestas);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($respuestas);
            $em->flush();

            return $this->redirectToRoute('respuestas_edit', array('id' => $respuestas->getId()));
        }

        return $this->render('respuestas/edit.html.twig', array(
            'respuesta' => $respuestas,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Respuestas entity.
     *
     */
    public function deleteAction(Request $request, Respuestas $respuestas)
    {
        $form = $this->createDeleteForm($respuestas);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($respuestas);
            $em->flush();
        }

        return $this->redirectToRoute('respuestas_index');
    }

    /**
     * Creates a form to delete a Respuestas entity.
     *
     * @param Respuestas $respuestas The Respuestas entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Respuestas $respuestas)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('respuestas_delete', array('id' => $respuestas->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
