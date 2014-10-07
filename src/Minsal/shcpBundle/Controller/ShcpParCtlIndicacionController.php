<?php

namespace Minsal\shcpBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Minsal\shcpBundle\Entity\ShcpParCtlIndicacion;
use Minsal\shcpBundle\Form\ShcpParCtlIndicacionType;

/**
 * ShcpParCtlIndicacion controller.
 *
 * @Route("/shcpparctlindicacion")
 */
class ShcpParCtlIndicacionController extends Controller
{

    /**
     * Lists all ShcpParCtlIndicacion entities.
     *
     * @Route("/", name="shcpparctlindicacion")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MinsalshcpBundle:ShcpParCtlIndicacion')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new ShcpParCtlIndicacion entity.
     *
     * @Route("/", name="shcpparctlindicacion_create")
     * @Method("POST")
     * @Template("MinsalshcpBundle:ShcpParCtlIndicacion:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new ShcpParCtlIndicacion();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('shcpparctlindicacion_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a ShcpParCtlIndicacion entity.
    *
    * @param ShcpParCtlIndicacion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(ShcpParCtlIndicacion $entity)
    {
        $form = $this->createForm(new ShcpParCtlIndicacionType(), $entity, array(
            'action' => $this->generateUrl('shcpparctlindicacion_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ShcpParCtlIndicacion entity.
     *
     * @Route("/new", name="shcpparctlindicacion_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new ShcpParCtlIndicacion();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a ShcpParCtlIndicacion entity.
     *
     * @Route("/{id}", name="shcpparctlindicacion_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MinsalshcpBundle:ShcpParCtlIndicacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ShcpParCtlIndicacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing ShcpParCtlIndicacion entity.
     *
     * @Route("/{id}/edit", name="shcpparctlindicacion_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MinsalshcpBundle:ShcpParCtlIndicacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ShcpParCtlIndicacion entity.');
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
    * Creates a form to edit a ShcpParCtlIndicacion entity.
    *
    * @param ShcpParCtlIndicacion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ShcpParCtlIndicacion $entity)
    {
        $form = $this->createForm(new ShcpParCtlIndicacionType(), $entity, array(
            'action' => $this->generateUrl('shcpparctlindicacion_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ShcpParCtlIndicacion entity.
     *
     * @Route("/{id}", name="shcpparctlindicacion_update")
     * @Method("PUT")
     * @Template("MinsalshcpBundle:ShcpParCtlIndicacion:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MinsalshcpBundle:ShcpParCtlIndicacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ShcpParCtlIndicacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('shcpparctlindicacion_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a ShcpParCtlIndicacion entity.
     *
     * @Route("/{id}", name="shcpparctlindicacion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MinsalshcpBundle:ShcpParCtlIndicacion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ShcpParCtlIndicacion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('shcpparctlindicacion'));
    }

    /**
     * Creates a form to delete a ShcpParCtlIndicacion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('shcpparctlindicacion_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
