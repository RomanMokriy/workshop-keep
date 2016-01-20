<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Repository\NoteRepository;
use Doctrine\ORM\EntityManager;
use AppBundle\Entity\Note;

class NoteController extends Controller
{
	/**
	 * @Route("/note", name="note_get_all")
	 * @Method("GET")
	 */
	public function getAllAction(Request $request)
	{		// replace this example code with whatever you need

		$oNoteRepository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Note');
		$oNotesCollection = $oNoteRepository->findAll();
		$aNotes = $this->get('serializer')->normalize($oNotesCollection);
		return new JsonResponse($aNotes);
	}

	/**
	 * @Route("/note", name="note_create_note")
	 * @Method("POST")
	 */
	public function createNoteAction(Request $request)
	{
		$content = $request->getContent();
		if (!empty($content))
		{
			$params = json_decode($content, true);
		}

		$oNewNote = new Note();
		$oNewNote->setTitle($params['title']);
		$oNewNote->setContent($params['text']);
		$em =$this->getDoctrine()->getManager();
		$em->persist($oNewNote);
		$em->flush();

		$aNote = $this->get('serializer')->normalize($oNewNote);
		return new JsonResponse($aNote);
	}
}
