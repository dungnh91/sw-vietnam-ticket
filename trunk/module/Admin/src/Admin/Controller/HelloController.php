<?php
	namespace Admin\Controller;

	use Zend\Mvc\Controller\AbstractActionController;
	use Zend\View\Model\ViewModel;
	use Zend\Debug\Debug;
	
	class HelloController extends AbstractActionController
	{
	    public function worldAction()
	    {
	    echo 'aaa';
	        $message = $this->params()->fromQuery('message', 'foo');
        	
	        return new ViewModel(array('message' => $message));
	    }
	}
	
