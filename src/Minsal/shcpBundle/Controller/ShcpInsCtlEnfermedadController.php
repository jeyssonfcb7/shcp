<?php

namespace Minsal\shcpBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Minsal\shcpBundle\Entity\ShcpInsCtlEnfermedad;
use Minsal\shcpBundle\Form\ShcpInsCtlEnfermedadType;

/**
 * ShcpInsCtlEnfermedad controller.
 *
 * @Route("/shcpinsctlenfermedad")
 */
class ShcpInsCtlEnfermedadController extends Controller
{

    /**
     * Lists all ShcpInsCtlEnfermedad entities.
     *
     * @Route("/", name="shcpinsctlenfermedad")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MinsalshcpBundle:ShcpInsCtlEnfermedad')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new ShcpInsCtlEnfermedad entity.
     *
     * @Route("/", name="shcpinsctlenfermedad_create")
     * @Method("POST")
     * @Template("MinsalshcpBundle:ShcpInsCtlEnfermedad:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new ShcpInsCtlEnfermedad();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('shcpinsctlenfermedad_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a ShcpInsCtlEnfermedad entity.
    *
    * @param ShcpInsCtlEnfermedad $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(ShcpInsCtlEnfermedad $entity)
    {
        $form = $this->createForm(new ShcpInsCtlEnfermedadType(), $entity, array(
            'action' => $this->generateUrl('shcpinsctlenfermedad_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ShcpInsCtlEnfermedad entity.
     *
     * @Route("/new", name="shcpinsctlenfermedad_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new ShcpInsCtlEnfermedad();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a ShcpInsCtlEnfermedad entity.
     *
     * @Route("/{id}", name="shcpinsctlenfermedad_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MinsalshcpBundle:ShcpInsCtlEnfermedad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ShcpInsCtlEnfermedad entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing ShcpInsCtlEnfermedad entity.
     *
     * @Route("/{id}/edit", name="shcpinsctlenfermedad_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MinsalshcpBundle:ShcpInsCtlEnfermedad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ShcpInsCtlEnfermedad entity.');
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
    * Creates a form to edit a ShcpInsCtlEnfermedad entity.
    *
    * @param ShcpInsCtlEnfermedad $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ShcpInsCtlEnfermedad $entity)
    {
        $form = $this->createForm(new ShcpInsCtlEnfermedadType(), $entity, array(
            'action' => $this->generateUrl('shcpinsctlenfermedad_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ShcpInsCtlEnfermedad entity.
     *
     * @Route("/{id}", name="shcpinsctlenfermedad_update")
     * @Method("PUT")
     * @Template("MinsalshcpBundle:ShcpInsCtlEnfermedad:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MinsalshcpBundle:ShcpInsCtlEnfermedad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ShcpInsCtlEnfermedad entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('shcpinsctlenfermedad_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a ShcpInsCtlEnfermedad entity.
     *
     * @Route("/{id}", name="shcpinsctlenfermedad_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MinsalshcpBundle:ShcpInsCtlEnfermedad')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ShcpInsCtlEnfermedad entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('shcpinsctlenfermedad'));
    }

    /**
     * Creates a form to delete a ShcpInsCtlEnfermedad entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('shcpinsctlenfermedad_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
