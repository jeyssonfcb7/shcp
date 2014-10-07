<?php

namespace Minsal\shcpBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Minsal\shcpBundle\Entity\ShcpAboCtlCie10;
use Minsal\shcpBundle\Form\ShcpAboCtlCie10Type;

/**
 * ShcpAboCtlCie10 controller.
 *
 * @Route("/shcpaboctlcie10")
 */
class ShcpAboCtlCie10Controller extends Controller
{

    /**
     * Lists all ShcpAboCtlCie10 entities.
     *
     * @Route("/", name="shcpaboctlcie10")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MinsalshcpBundle:ShcpAboCtlCie10')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new ShcpAboCtlCie10 entity.
     *
     * @Route("/", name="shcpaboctlcie10_create")
     * @Method("POST")
     * @Template("MinsalshcpBundle:ShcpAboCtlCie10:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new ShcpAboCtlCie10();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('shcpaboctlcie10_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a ShcpAboCtlCie10 entity.
    *
    * @param ShcpAboCtlCie10 $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(ShcpAboCtlCie10 $entity)
    {
        $form = $this->createForm(new ShcpAboCtlCie10Type(), $entity, array(
            'action' => $this->generateUrl('shcpaboctlcie10_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ShcpAboCtlCie10 entity.
     *
     * @Route("/new", name="shcpaboctlcie10_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new ShcpAboCtlCie10();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a ShcpAboCtlCie10 entity.
     *
     * @Route("/{id}", name="shcpaboctlcie10_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MinsalshcpBundle:ShcpAboCtlCie10')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ShcpAboCtlCie10 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing ShcpAboCtlCie10 entity.
     *
     * @Route("/{id}/edit", name="shcpaboctlcie10_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MinsalshcpBundle:ShcpAboCtlCie10')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ShcpAboCtlCie10 entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a ShcpAboCtlCie10 entity.
    *
    * @param ShcpAboCtlCie10 $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ShcpAboCtlCie10 $entity)
    {
        $form = $this->createForm(new ShcpAboCtlCie10Type(), $entity, array(
            'action' => $this->generateUrl('shcpaboctlcie10_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ShcpAboCtlCie10 entity.
     *
     * @Route("/{id}", name="shcpaboctlcie10_update")
     * @Method("PUT")
     * @Template("MinsalshcpBundle:ShcpAboCtlCie10:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MinsalshcpBundle:ShcpAboCtlCie10')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ShcpAboCtlCie10 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('shcpaboctlcie10_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a ShcpAboCtlCie10 entity.
     *
     * @Route("/{id}", name="shcpaboctlcie10_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MinsalshcpBundle:ShcpAboCtlCie10')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ShcpAboCtlCie10 entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('shcpaboctlcie10'));
    }

    /**
     * Creates a form to delete a ShcpAboCtlCie10 entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('shcpaboctlcie10_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
