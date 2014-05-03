<?php
require_once('coreController.php');

/**
 * @author matsumoto norio
 *
 */
class loginController extends coreController{

	//親属性の継承
	public function __construct()
	{
        parent::__construct();

        //親には書けないのでここに書く
        $this->model = new loginModel( 'login');
	}

    public function index()
    {
        parent::index();
        switch($this->getMode())
        {
        case 'login':
            $arrErr = $this->model->hasAccount('login');
          
            if( $arrErr === array() )
            {
                $this->model->setSession();
                $this->sendRedirect();
            }
            else
            {
                $this->smarty->assign('arrErr',$arrErr);
            }
         break;
        default:
                $this->smarty->assign( 'arrForm', $this->model->getFormLoginList() );
            break;
        }
        
        $this->render(__FUNCTION__);
    }

    public function regist()
    {
        parent::regist();

        switch( $this->getMode() )
        {
        case 'confirm':
        	$arrErr = $this->model->hasAccount( 'regist');
            
            if( $arrErr === array() )
            {
                $this->smarty->assign( 'arrForm', $this->model->getFormLoginList() );
                $this->render('confirm');
            }
            else
            {
                $this->smarty->assign( 'arrForm', $this->model->getFormLoginList() );
                $this->smarty->assign( 'arrErr' ,$arrErr );
                $this->render(__FUNCTION__);
            }

            break;
        case 'complete':
            $this->model->registUser();
            $this->model->sendRedirect();
            break;
        case 'back':
        default:
            $this->smarty->assign( 'arrForm', $this->model->getFormLoginList() );
            $this->render(__FUNCTION__);
            break;
        }

    }
}

?>
