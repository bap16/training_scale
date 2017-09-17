<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Kata;
use AppBundle\Form\KataType;

/**
 * Kata controller.
 *
 */
class KataController extends Controller
{

    /**
     * Lists all Kata entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Kata')->findAll();

        return $this->render('AppBundle:Kata:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Kata entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Kata();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('kata_show', array('id' => $entity->getId())));
        }

        return $this->render('AppBundle:Kata:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Kata entity.
     *
     * @param Kata $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Kata $entity)
    {
        $form = $this->createForm(new KataType(), $entity, array(
            'action' => $this->generateUrl('kata_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Kata entity.
     *
     */
    public function newAction()
    {
        $entity = new Kata();
        $form   = $this->createCreateForm($entity);

        return $this->render('AppBundle:Kata:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Kata entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Kata')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Kata entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:Kata:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Kata entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Kata')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Kata entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:Kata:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Kata entity.
    *
    * @param Kata $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Kata $entity)
    {
        $form = $this->createForm(new KataType(), $entity, array(
            'action' => $this->generateUrl('kata_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Kata entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Kata')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Kata entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('kata_edit', array('id' => $id)));
        }

        return $this->render('AppBundle:Kata:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Kata entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Kata')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Kata entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('kata'));
    }

    /**
     * Creates a form to delete a Kata entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('kata_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
