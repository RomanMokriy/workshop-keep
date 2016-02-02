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

		$oNotesCollection = $this->get('app.repositories.note')->findAll();
		$aNotes = $this->get('serializer')->normalize($oNotesCollection);
		return new JsonResponse($aNotes);
	}

	/**
	 * @Route("/note", name="note_create_note")
	 * @Method("POST")
	 */
	public function createNoteAction(Request $request)
	{
		$oNewNote = new Note();
		$oNewNote->setTitle($request->get('title'));
		$oNewNote->setContent($request->get('content'));
		$em =$this->getDoctrine()->getManager();
		$em->persist($oNewNote);
		$em->flush();

		$aNote = $this->get('serializer')->normalize($oNewNote);
		return new JsonResponse($aNote);
	}

	/**
	 * @Route("/note/{id}", name="note_update_note")
	 * @Method("PUT")
	 */
	public function editNoteAction(Request $request, Note $oNote)
	{

		$oNote->setTitle($request->get('title'));
		$oNote->setContent($request->get('content'));
		
		$em =$this->getDoctrine()->getManager();
		$em->persist($oNote);
		$em->flush();

		$aNote = $this->get('serializer')->normalize($oNote);
		return new JsonResponse($aNote);
	}

	/**
	 * @Route("/note/{id}", name="note_delete_note")
	 * @Method("DELETE")
	 */
	public function DeleteNoteAction(Request $request, Note $oNote)
	{
		$em =$this->getDoctrine()->getManager();
		$em->remove($oNote);
		$em->flush();

		return new JsonResponse([]);
	}
}
