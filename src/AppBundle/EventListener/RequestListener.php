<?php
namespace AppBundle\EventListener;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class RequestListener
{
	public function onKernelRequest(\Symfony\Component\HttpKernel\Event\GetResponseEvent $event)
	{
		$request = $event->getRequest();
//		var_dump($this->isRequestJson($request)); die();

		if($this->isRequestJson($request))
		{
			$parameters = json_decode($request->getContent(), true);

			if(is_array($parameters))
			{
//				var_dump($parameters); die();
				$request->request->add($parameters);
			}
		}
	}

	private function isRequestJson(\Symfony\Component\HttpFoundation\Request $request)
	{
		return (bool)strpos($request->headers->get('content_type'), 'json');
	}
}
