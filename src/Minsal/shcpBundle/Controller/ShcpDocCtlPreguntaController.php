<?php

namespace Minsal\shcpBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Minsal\shcpBundle\Entity\ShcpDocCtlPregunta;
use Minsal\shcpBundle\Form\ShcpDocCtlPreguntaType;

/**
 * ShcpDocCtlPregunta controller.
 *
 * @Route("/shcpdocctlpregunta")
 */
class ShcpDocCtlPreguntaController extends Controller
{

    /**
     * Lists all ShcpDocCtlPregunta entities.
     *
     * @Route("/", name="shcpdocctlpregunta")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MinsalshcpBundle:ShcpDocCtlPregunta')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new ShcpDocCtlPregunta entity.
     *
     * @Route("/", name="shcpdocctlpregunta_create")
     * @Method("POST")
     * @Template("MinsalshcpBundle:ShcpDocCtlPregunta:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new ShcpDocCtlPregunta();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('shcpdocctlpregunta_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a ShcpDocCtlPregunta entity.
    *
    * @param ShcpDocCtlPregunta $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(ShcpDocCtlPregunta $entity)
    {
        $form = $this->createForm(new ShcpDocCtlPreguntaType(), $entity, array(
            'action' => $this->generateUrl('shcpdocctlpregunta_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ShcpDocCtlPregunta entity.
     *
     * @Route("/new", name="shcpdocctlpregunta_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new ShcpDocCtlPregunta();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a ShcpDocCtlPregunta entity.
     *
     * @Route("/{id}", name="shcpdocctlpregunta_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MinsalshcpBundle:ShcpDocCtlPregunta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ShcpDocCtlPregunta entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing ShcpDocCtlPregunta entity.
     *
     * @Route("/{id}/edit", name="shcpdocctlpregunta_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MinsalshcpBundle:ShcpDocCtlPregunta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ShcpDocCtlPregunta entity.');
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
    * Creates a form to edit a ShcpDocCtlPregunta entity.
    *
    * @param ShcpDocCtlPregunta $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ShcpDocCtlPregunta $entity)
    {
        $form = $this->createForm(new ShcpDocCtlPreguntaType(), $entity, array(
            'action' => $this->generateUrl('shcpdocctlpregunta_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ShcpDocCtlPregunta entity.
     *
     * @Route("/{id}", name="shcpdocctlpregunta_update")
     * @Method("PUT")
     * @Template("MinsalshcpBundle:ShcpDocCtlPregunta:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MinsalshcpBundle:ShcpDocCtlPregunta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ShcpDocCtlPregunta entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('shcpdocctlpregunta_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a ShcpDocCtlPregunta entity.
     *
     * @Route("/{id}", name="shcpdocctlpregunta_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MinsalshcpBundle:ShcpDocCtlPregunta')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ShcpDocCtlPregunta entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('shcpdocctlpregunta'));
    }

    /**
     * Creates a form to delete a ShcpDocCtlPregunta entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('shcpdocctlpregunta_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
