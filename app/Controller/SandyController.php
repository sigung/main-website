<?php
App::uses('AppController', 'Controller');
/**
 * Roles Controller
 *
 * @property Role $Role
 * @property PaginatorComponent $Paginator
 */
class SandyController extends AppController {

public $uses = array('Contact', 'ContentForPage');

    function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('display');
    }

	public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			return $this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
        $pageContent = $this->ContentForPage->find('first', array('conditions'=>array('name'=>$path[0], 'controller'=>'sandy')));
        $this->set('pageContent', $pageContent['ContentForPage']['content']);
        $this->set('pageContentAside', $pageContent['ContentForPage']['contentAside']);
        $this->set('pageContentId', $pageContent['ContentForPage']['id']);
        $this->set('pageTitle', 'Shaolin Arts - Martial Arts');
        $this->set('isSideColumn', $pageContent['ContentForPage']['sideColumn']);
        if ($pageContent['ContentForPage']['title'] != null)
        {
            $this->set('pageTitle', $pageContent['ContentForPage']['title']);
        }
        $this->set('pageDescription', 'Shaolin Arts is a family system of martial arts over 3,000 years old. Common western terms used to describe it would be Kung Fu, Tai Chi Chuan, Karate, Self Defense, Wushu, Animal Styles, Mixed Martial Arts, Chi Qi Gung or grappling.');
        if ($pageContent['ContentForPage']['meta_description'] != null)
        {
            $this->set('pageDescription', $pageContent['ContentForPage']['meta_description']);
        }

		$this->set(compact('page', 'subpage', 'title_for_layout'));

		try {
			$this->render(implode('/', $path));
		} catch (MissingViewException $e) {
			if (Configure::read('debug')) {
				throw $e;
			}
			throw new NotFoundException();
		}
	}
}
?>