<?php

namespace IntrepidGroup\ApiBundle\Controller;

use IntrepidGroup\ApiBundle\Entity\User;
use IntrepidGroup\ApiBundle\Form\UserType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Request\ParamFetcherInterface;
use FOS\RestBundle\View\View;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;

/**
 * Rest controller for users
 */
class UserController extends FOSRestController
{
    /**
     * List all users.
     *
     * @Rest\Get("/users")
     * @Rest\View()
     *
     * @ApiDoc(
     *   section = "User",
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Unauthorized"
     *   },
     *  tags = {
     *   "stable" = "#4A7023"
     *  }
     * )
     *
     * @return array
     */
    public function getUsersAction()
    {
        if ($this->get('security.context')->isGranted('ROLE_API') === FALSE) {
            throw new AccessDeniedException();
        }

        $users = $this->getDoctrine()->getRepository('IntrepidGroupApiBundle:User')->findAll();
        $data = [
            'data' => $users,
        ];
        /*
         * Is cacheable by local and shared caches.
         * Is cacheable for 10 minutes for local caches.
         * Is cacheable for 1 hour for shared caches.
         */
        $headers = [
            'Cache-Control' => 'public, max-age=600, s-maxage=3600'
        ];
        $view = new View($data, Response::HTTP_OK, $headers);

        return $view;
    }

    /**
     * Get a single user by username.
     *
     * @Rest\Get("/users/{username}")
     * @Rest\View(templateVar = "user")
     *
     * @ApiDoc(
     *   section = "User",
     *   resource = true,
     *   output = "IntrepidGroup\ApiBundle\Entity\User",
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when the user is not found"
     *   }
     * )
     *
     * @param string $username the user's username
     *
     * @return View
     *
     * @throws NotFoundHttpException when user not exist
     */
    public function getUserAction($username)
    {
        $user = $this->getDoctrine()->getRepository('IntrepidGroupApiBundle:User')->findOneByUsername($username);
        if (!is_object($user)) {
            throw $this->createNotFoundException("User does not exist.");
        }

        $data = [
            'data' => $user,
        ];

        $etagContent = md5(serialize($user));

        $headers = [
            'ETag' => $etagContent,
        ];

        $view = new View($data, Response::HTTP_OK, $headers);

        return $view;
    }

    /**
     * Create a new user.
     *
     * @Rest\Post("/users")
     * @Rest\View()
     *
     * @ApiDoc(
     *   section = "User",
     *   resource = true,
     *   input = "IntrepidGroup\ApiBundle\Form\UserType",
     *   output = "IntrepidGroup\ApiBundle\Entity\User",
     *   statusCodes = {
     *     201 = "Returned when successful",
     *     400 = "Returned when the required data is empty"
     *   }
     * )
     *
     * @param Request $request the request object
     *
     * @return View
     */
    public function postUsersAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(new UserType(), $user);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($user);
            $em->flush();
            return new View($user, Response::HTTP_CREATED);
        }
        return $form->getErrors();
    }

    /**
     * Update existing user from the submitted data.
     *
     * @Rest\Put("/users/{username}")
     * @Rest\View()
     *
     * @ApiDoc(
     *   section = "User",
     *   resource = true,
     *   input = "IntrepidGroup\ApiBundle\Form\UserType",
     *   statusCodes = {
     *     204 = "Returned when successful",
     *     404 = "Returned when the user is not found"
     *   }
     * )
     *
     * @param Request $request the request object
     * @param string $username the user's username
     *
     * @return View
     *
     * @throws NotFoundHttpException when note not exist
     */
    public function putUserAction(Request $request, $username)
    {
        $firstName = $request->get('firstName');
        $lastName = $request->get('lastName');
        $email = $request->get('email');

        /** @var User $user */
        $user = $this->getDoctrine()->getRepository('IntrepidGroupApiBundle:User')->findOneByUsername($username);

        if (!is_object($user)) {
            return new View("user not found", Response::HTTP_NOT_FOUND);
        }

        if (!empty($firstName)) {
            $user->setFirstName($firstName);
        }
        if (!empty($lastName)) {
            $user->setLastName($lastName);
        }
        if (!empty($email)) {
            $user->setEmail($email);
        }

        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($user);
        $em->flush();

        return new View("User Updated Successfully", Response::HTTP_OK);
    }

    /**
     * Get a single users comments.
     *
     * @Rest\Get("/users/{username}/comments")
     * @Rest\View(templateVar = "user")
     *
     * @ApiDoc(
     *   section = "User",
     *   resource = true,
     *   output = "IntrepidGroup\ApiBundle\Entity\User",
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when the user is not found"
     *   }
     * )
     *
     * @param string $username the user's username
     *
     * @return View
     *
     * @throws NotFoundHttpException when user not exist
     */
    public function getUserCommentsAction($username)
    {
        /** @var User $user */
        $user = $this->getDoctrine()->getRepository('IntrepidGroupApiBundle:User')->findOneByUsername($username);
        if (!is_object($user)) {
            throw $this->createNotFoundException("User does not exist.");
        }

        $comments = $this->getDoctrine()->getRepository('IntrepidGroupApiBundle:Comment')->findBy(array('userId' => $user->getId()));

        $user->setComments($comments);

        /*
         * Is cacheable by local and shared caches.
         * If it has expired in less that a minute, the cached copy can be released while persisting the original request to the origin server.
         * If the request encounters an error and the cached copy has expired in less than 2 hours, the cached copy can be released to the client.
         */
        $headers = [
          'Cache-Control' => 'public, max-age=600, s-maxage=3600, stale-while-revalidate=60, stale-if-error=7200, public',
        ];

        $data = [
          'data' => $user,
        ];
        $view = new View($data, Response::HTTP_OK, $headers);

        return $view;
    }
}