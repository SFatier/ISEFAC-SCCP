<?php

namespace Isefac\Bundle\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Isefac\Bundle\MainBundle\Entity\Entreprise;
use Isefac\Bundle\MainBundle\Form\EntrepriseType;

/**
 * Entreprise controller.
 *
 */
class EntrepriseController extends Controller
{
    /**
     * Lists all Entreprise entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entreprises = $em->getRepository('IsefacMainBundle:Entreprise')->findAll();

        return $this->render('entreprise/index.html.twig', array(
            'entreprises' => $entreprises,
        ));
    }

    /**
     * Creates a new Entreprise entity.
     *
     */
    public function newAction(Request $request)
    {
        $entreprise = new Entreprise();
        $form = $this->createForm('Isefac\Bundle\MainBundle\Form\EntrepriseType', $entreprise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entreprise);
            $em->persist($entreprise->getOffre());
            $em->flush();
            
            //après l'envoie a la bdd retourner sur le formulaire
            return $this->redirectToRoute('entreprise_new', array('id' => $entreprise->getId()));
        }

        return $this->render('entreprise/new.html.twig', array(
            'entreprise' => $entreprise,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Entreprise entity.
     *
     */
    public function showAction(Entreprise $entreprise)
    {
        $deleteForm = $this->createDeleteForm($entreprise);

        return $this->render('entreprise/show.html.twig', array(
            'entreprise' => $entreprise,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Entreprise entity.
     *
     */
    public function editAction(Request $request, Entreprise $entreprise)
    {
        $deleteForm = $this->createDeleteForm($entreprise);
        $editForm = $this->createForm('Isefac\Bundle\MainBundle\Form\EntrepriseType', $entreprise);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entreprise);
            $em->flush();

            return $this->redirectToRoute('entreprise_edit', array('id' => $entreprise->getId()));
        }

        return $this->render('entreprise/edit.html.twig', array(
            'entreprise' => $entreprise,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Entreprise entity.
     *
     */
    public function deleteAction(Request $request, Entreprise $entreprise)
    {
        $form = $this->createDeleteForm($entreprise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($entreprise);
            $em->flush();
        }

        return $this->redirectToRoute('entreprise_index');
    }

    /**
     * Creates a form to delete a Entreprise entity.
     *
     * @param Entreprise $entreprise The Entreprise entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Entreprise $entreprise)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('entreprise_delete', array('id' => $entreprise->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function postuler ()
    {
        //code qui récupère les données des deux formulaires
    }
}
