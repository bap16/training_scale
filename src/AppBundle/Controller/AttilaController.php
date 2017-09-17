<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Attila;
use AppBundle\Form\AttilaType;

/**
 * Attila controller.
 *
 */
class AttilaController extends Controller
{

    /**
     * Lists all Attila entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Attila')->findAll();

        return $this->render('AppBundle:Attila:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Attila entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Attila();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('attila_show', array('id' => $entity->getId())));
        }

        return $this->render('AppBundle:Attila:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Attila entity.
     *
     * @param Attila $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Attila $entity)
    {
        $form = $this->createForm(new AttilaType(), $entity, array(
            'action' => $this->generateUrl('attila_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Attila entity.
     *
     */
    public function newAction()
    {
        $entity = new Attila();
        $form   = $this->createCreateForm($entity);

        return $this->render('AppBundle:Attila:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Attila entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Attila')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Attila entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:Attila:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Attila entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Attila')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Attila entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:Attila:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Attila entity.
    *
    * @param Attila $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Attila $entity)
    {
        $form = $this->createForm(new AttilaType(), $entity, array(
            'action' => $this->generateUrl('attila_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Attila entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Attila')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Attila entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('attila_edit', array('id' => $id)));
        }

        return $this->render('AppBundle:Attila:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Attila entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Attila')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Attila entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('attila'));
    }

    /**
     * Creates a form to delete a Attila entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('attila_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
