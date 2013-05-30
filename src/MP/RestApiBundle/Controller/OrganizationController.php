<?php

namespace MP\RestApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\Rest\Util\Codes;
use Symfony\Component\HttpFoundation\Request;
use MP\RestApiBundle\Entity\Organization;
use MP\RestApiBundle\Form\Type\OrganizationType;

class OrganizationController extends FOSRestController implements ClassResourceInterface
{
/**
 * Collection get action
 * @var Request $request
 * @return array
 *
 * @Rest\View()
 */
    public function cgetAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
    
        $entities = $em->getRepository('MPRestApiBundle:Organization')->findAll();
    
        return array(
            'organizations' => $entities,
        );
    }
    
/**
 * Get entity instance
 * @var integer $id Id of the entity
 * @return Organization
 */
    protected function getEntity($id)
    {
        $em = $this->getDoctrine()->getManager();
    
        $entity = $em->getRepository('MPRestApiBundle:Organization')->find($id);
    
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find organization entity');
        }
    
        return $entity;
    }
    
/**
 * Get action
 * @var integer $id Id of the entity
 * @return array
 *
 * @Rest\View()
 */
    public function getAction($id)
    {
        $entity = $this->getEntity($id);
    
        return array(
            'organization' => $entity,
        );
    }
    
/**
 * Collection post action
 * @var Request $request
 * @return View|array
 */
    public function cpostAction(Request $request)
    {
        $entity = new Organization();
        $form = $this->createForm(new OrganizationType(), $entity);
        $form->bind($request);
    
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
    
            return $this->redirectView(
                $this->generateUrl(
                    'get_organization',
                    array('id' => $entity->getId())
                ),
                Codes::HTTP_CREATED
            );
        }
    
        return array(
            'form' => $form,
        );
    }

/**
 * Put action
 * @var Request $request
 * @var integer $id Id of the entity
 * @return View|array
 */
    public function putAction(Request $request, $id)
    {
        $entity = $this->getEntity($id);
        $form = $this->createForm(new OrganizationType(), $entity);
        $form->bind($request);
    
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
    
            return $this->view(null, Codes::HTTP_NO_CONTENT);
        }
    
        return array(
            'form' => $form,
        );
    }

/**
 * Delete action
 * @var integer $id Id of the entity
 * @return View
 */
    public function deleteAction($id)
    {
        $entity = $this->getEntity($id);
    
        $em = $this->getDoctrine()->getManager();
        $em->remove($entity);
        $em->flush();
    
        return $this->view(null, Codes::HTTP_NO_CONTENT);
    }
}