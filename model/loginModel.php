<?php

require_once('coreModel.php');

/**
 * @author matsumoto norio
 *
 */
class loginModel extends coreModel{

    function __construct( $modelName )
    {
        parent::__construct();

        $this->setTable( $modelName );
        $this->initParam();
    }

    public function initParam()
    {
        $this->objFormParam->addParam('会員番号','login_id');
        $this->objFormParam->addParam('ユーザーID','user_id');
		$this->objFormParam->addParam('パスワード','password');
    
    }

    public function setParam( $arrData )
    {
        $this->objFormParam->setParam( $arrData );
        $this->objFormParam->trimParam();

    }

    public function hasUserID( $user_id )
    {
        $user_id = $this->objDb->count('dtb_user',' user_id = ? ' , array($user_id));
        $is_account = ( $account !== 0 ) ?true : false ;
    
    }

    public function hasAccount( $check_type )
    {
        $objErr = new checkError();

        switch( $check_type )
        {
        case 'login':
            $objCheckErr->doFunc(array('ユーザーアカウント', 'user_id','password'),array());
            break;

        case 'regsit':
            $objCheckErr->doFunc(array('ユーザーアカウント', 'user_id','password'),array());
            break;
        }
        
        $arrErr = $objCheckErr->arrErr;

        return $arrErr;
    }

    public function registAccount()
    {
        $user_id = $this->objFormParam->getValue('user_id');
        $password = $this->objFormParam->getValue('password');
        
        $sqlVal = array( 'user_id'=> $user_id , 'password' => sha1( $password ));

        $this->objDb->insert( $this->table, $sqlVal );
    }

    public function getFormLoginList()
    {
        return $this->objFormParam->getFormParamList();
    }


}

?>
