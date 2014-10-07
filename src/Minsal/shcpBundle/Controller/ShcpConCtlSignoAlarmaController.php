<?php

namespace Minsal\shcpBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Minsal\shcpBundle\Entity\ShcpConCtlSignoAlarma;
use Minsal\shcpBundle\Form\ShcpConCtlSignoAlarmaType;

/**
 * ShcpConCtlSignoAlarma controller.
 *
 * @Route("/shcpconctlsignoalarma")
 */
class ShcpConCtlSignoAlarmaController extends Controller
{

    /**
     * Lists all ShcpConCtlSignoAlarma entities.
     *
     * @Route("/", name="shcpconctlsignoalarma")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MinsalshcpBundle:ShcpConCtlSignoAlarma')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new ShcpConCtlSignoAlarma entity.
     *
     * @Route("/", name="shcpconctlsignoalarma_create")
     * @Method("POST")
     * @Template("MinsalshcpBundle:ShcpConCtlSignoAlarma:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new ShcpConCtlSignoAlarma();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('shcpconctlsignoalarma_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a ShcpConCtlSignoAlarma entity.
    *
    * @param ShcpConCtlSignoAlarma $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(ShcpConCtlSignoAlarma $entity)
    {
        $form = $this->createForm(new ShcpConCtlSignoAlarmaType(), $entity, array(
            'action' => $this->generateUrl('shcpconctlsignoalarma_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ShcpConCtlSignoAlarma entity.
     *
     * @Route("/new", name="shcpconctlsignoalarma_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new ShcpConCtlSignoAlarma();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a ShcpConCtlSignoAlarma entity.
     *
     * @Route("/{id}", name="shcpconctlsignoalarma_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MinsalshcpBundle:ShcpConCtlSignoAlarma')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ShcpConCtlSignoAlarma entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing ShcpConCtlSignoAlarma entity.
     *
     * @Route("/{id}/edit", name="shcpconctlsignoalarma_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MinsalshcpBundle:ShcpConCtlSignoAlarma')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ShcpConCtlSignoAlarma entity.');
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
    * Creates a form to edit a ShcpConCtlSignoAlarma entity.
    *
    * @param ShcpConCtlSignoAlarma $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ShcpConCtlSignoAlarma $entity)
    {
        $form = $this->createForm(new ShcpConCtlSignoAlarmaType(), $entity, array(
            'action' => $this->generateUrl('shcpconctlsignoalarma_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ShcpConCtlSignoAlarma entity.
     *
     * @Route("/{id}", name="shcpconctlsignoalarma_update")
     * @Method("PUT")
     * @Template("MinsalshcpBundle:ShcpConCtlSignoAlarma:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MinsalshcpBundle:ShcpConCtlSignoAlarma')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ShcpConCtlSignoAlarma entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('shcpconctlsignoalarma_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a ShcpConCtlSignoAlarma entity.
     *
     * @Route("/{id}", name="shcpconctlsignoalarma_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MinsalshcpBundle:ShcpConCtlSignoAlarma')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ShcpConCtlSignoAlarma entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('shcpconctlsignoalarma'));
    }

    /**
     * Creates a form to delete a ShcpConCtlSignoAlarma entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('shcpconctlsignoalarma_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
