<?php

namespace App\Presenters;

use Nette;
use App\Model;

/**
 * About presenter pro http://doge.jecool.net/about/
 * @author KORandi
 *
 */

class AboutPresenter extends BasePresenter
{
	/**
	 * About presenter pro http://doge.jecool.net/about/
	 * @param Nette\Database\Context $database
	 * @param Nette\Http\Request $http
	 * @param Nette\Security\User $user
	 * @param Nette\Http\Session $session
	 * @param Nette\Http\Response $response
	 */
	public function __construct(Nette\Database\Context $database, Nette\Http\Request $http,  Nette\Security\User $user,Nette\Http\Session $session,Nette\Http\Response $response){
		parent::__construct($database, $http, $user, $session,$response);
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \Nette\Application\UI\Presenter::startup()
	 */
	public function startup(){
		parent::startup();
	}
	
	/**
	 * View-Controler cast
	 */
	public function renderDefault()
	{
		$this->template->anyVariable = 'any value';
	}

}
