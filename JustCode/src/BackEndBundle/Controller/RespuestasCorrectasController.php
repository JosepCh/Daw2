<?php

namespace BackEndBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BackEndBundle\Entity\RespuestasCorrectas;
use BackEndBundle\Form\RespuestasCorrectasType;

/**
 * RespuestasCorrectas controller.
 *
 */
class RespuestasCorrectasController extends Controller
{
    /**
     * Lists all RespuestasCorrectas entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $respuestasCorrectas = $em->getRepository('BackEndBundle:RespuestasCorrectas')->findAll();

        return $this->render('respuestascorrectas/index.html.twig', array(
            'respuestasCorrectas' => $respuestasCorrectas,
        ));
    }

    /**
     * Creates a new RespuestasCorrectas entity.
     *
     */
    public function newAction(Request $request)
    {
        $respuestasCorrectas = new RespuestasCorrectas();
        $form = $this->createForm('BackEndBundle\Form\RespuestasCorrectasType', $respuestasCorrectas);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($respuestasCorrectas);
            $em->flush();

            return $this->redirectToRoute('respuestascorrectas_show', array('id' => $respuestasCorrectas->getId()));
        }

        return $this->render('respuestascorrectas/new.html.twig', array(
            'respuestasCorrecta' => $respuestasCorrectas,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a RespuestasCorrectas entity.
     *
     */
    public function showAction(RespuestasCorrectas $respuestasCorrectas)
    {
        $deleteForm = $this->createDeleteForm($respuestasCorrectas);

        return $this->render('respuestascorrectas/show.html.twig', array(
            'respuestasCorrecta' => $respuestasCorrectas,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing RespuestasCorrectas entity.
     *
     */
    public function editAction(Request $request, RespuestasCorrectas $respuestasCorrectas)
    {
        $deleteForm = $this->createDeleteForm($respuestasCorrectas);
        $editForm = $this->createForm('BackEndBundle\Form\RespuestasCorrectasType', $respuestasCorrectas);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($respuestasCorrectas);
            $em->flush();

            return $this->redirectToRoute('respuestascorrectas_edit', array('id' => $respuestasCorrectas->getId()));
        }

        return $this->render('respuestascorrectas/edit.html.twig', array(
            'respuestasCorrecta' => $respuestasCorrectas,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a RespuestasCorrectas entity.
     *
     */
    public function deleteAction(Request $request, RespuestasCorrectas $respuestasCorrectas)
    {
        $form = $this->createDeleteForm($respuestasCorrectas);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($respuestasCorrectas);
            $em->flush();
        }

        return $this->redirectToRoute('respuestascorrectas_index');
    }

    /**
     * Creates a form to delete a RespuestasCorrectas entity.
     *
     * @param RespuestasCorrectas $respuestasCorrecta The RespuestasCorrectas entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(RespuestasCorrectas $respuestasCorrectas)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('respuestascorrectas_delete', array('id' => $respuestasCorrectas->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
