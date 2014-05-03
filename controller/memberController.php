<?php
require_once('coreController.php');

/**
 * @author matsumoto norio
 *
 */
class memberController extends coreController{

	//親属性の継承
	public function __construct()
	{
        parent::__construct();

        //親には書けないのでここに書く
        $this->model = new memberModel( 'member');

        //日付の読み込み
        $objDate  = new dateClass();
        $objDate->setStartYear( START_YEAR );
        $objDate->setEndYear(date('Y'));
        
        $this->smarty->assign( 'arrYear', $objDate->getYear());
        $this->smarty->assign( 'arrMonth', $objDate->getMonth());
        $this->smarty->assign( 'arrDay', $objDate->getDay());

        //マスターデータの読み込み
        $objMaster = new masterData();
        $this->smarty->assign( 'arrSex', $objMaster->getMasterData('mtb_sex') );
        $this->smarty->assign( 'arrLanguage',$objMaster->getMasterData('mtb_language'));

	}

    public function index()
    {
        parent::index();
                
        if( isset($this->id) && $this->id !=='' )
        {
            $page_no = $this->id;
            $this->model->objFormParam->setValue('page_no', $page_no );
        }
        
        $arrMember = $this->model->getMemberList( 'dtb_member','*','',array() );
        
        $this->smarty->assign( 'arrMember' , $arrMember );
        $this->smarty->assign( 'arrPagenavi' , $this->model->objPage->arrPagenavi );
        $this->smarty->assign( 'current_page_message' , $this->model->objPage->current_page_message );
        $this->render(__FUNCTION__);

    }

    public function view( $id = '')
    {
        parent::view();
        $id = $this->id;
        $arrData = $this->model->getMemberDetail('dtb_member','*','member_id= ?' ,array( $id ));
        $this->model->setParam( $arrData[0]);
        $this->smarty->assign( 'arrForm', $this->model->getFormItemList() );
        $this->render(__FUNCTION__);

    }

    public function regist()
    {
        parent::regist();

        switch( $this->getMode() )
        {
        case 'confirm':
        	$arrErr = $this->model->checkError();
            
            if( $arrErr === array() )
            {
                $this->smarty->assign( 'arrForm', $this->model->getFormItemList() );
                $this->render('confirm');
            }
            else
            {
                $this->smarty->assign( 'arrForm', $this->model->getFormItemList() );
                $this->smarty->assign( 'arrErr' ,$arrErr );
                $this->render(__FUNCTION__);
            }

            break;
        case 'complete':
            $this->model->registMember();
            $this->render('complete');
            break;
        case 'back':
        default:
            $this->smarty->assign( 'arrForm', $this->model->getFormItemList() );
            $this->render(__FUNCTION__);
            break;
        }

    }
    
    public function edit( $id ='')
    {
        parent::edit();
        $id = $this->id;
        $arrData = $this->model->getMemberDetail('dtb_member','*','member_id= ?' ,array( $id ));
        $this->model->setParam( $arrData[0]);
        $this->smarty->assign( 'arrForm', $this->model->getFormItemList() );
        $this->render('regist');
    }

    public function delete( $id ='')
    {
        $id = $this->id;
        $res = $this->model->deleteItem( 'dtb_member', 'member_id = ? ',array($id ));
        echo ($res === true )? 'success' : 'failed';
    }

}

?>
