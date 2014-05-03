<?php

require_once('coreModel.php');

/**
 * @author matsumoto norio
 *
 */
class memberModel extends coreModel{

    function __construct( $modelName )
    {
        parent::__construct();

        $this->setTable( $modelName );
        $this->initParam();
    }

    public function initParam()
    {
        $this->objFormParam->addParam('現在の開始ページNo','page_no','s',array(),1,false);

        $this->objFormParam->addParam('会員番号','member_id');
        $this->objFormParam->addParam('苗字','family_name','s',array('EXIST_CHECK'));
		$this->objFormParam->addParam('名前','first_name','s',array('EXIST_CHECK'));
		$this->objFormParam->addParam('性別','sex','n',array('EXIST_CHECK'));
		$this->objFormParam->addParam('言語','skill_language','n',array('EXIST_CHECK'));
        $this->objFormParam->addParam('誕生年', 'birth_year','n', array('NUM_CHECK'),date('Y'));
        $this->objFormParam->addParam('誕生月', 'birth_month','n', array('NUM_CHECK'),date('n'));
        $this->objFormParam->addParam('誕生日', 'birth_day','n', array('NUM_CHECK'),date('d'));
        $this->objFormParam->addParam('郵便番号', 'zip1','n', array('NUM_CHECK'));
        $this->objFormParam->addParam('郵便番号2', 'zip2','n', array('NUM_CHECK'));
        $this->objFormParam->addParam('住所', 'address1','s', array('EXIST_CHECK'));
        $this->objFormParam->addParam('住所2', 'address2','s', array());
    
    }

    public function setParam( $arrData )
    {
        $this->objFormParam->setParam( $arrData );
        $this->objFormParam->trimParam();

    }

    public function getMemberList( $table ='',$col='*' ,$where='', $arrVal=array() ,$sqlOption=array() )
    {
        $member_num = $this->getItemCount($table , $where, $arrVal);
                       
        $arrMember = $this->getItemList( $table, $col, $where, $arrVal, $sqlOption, true, $member_num );

        if( $arrMember !== false )
        {
            $this->convParamsFromDB( $arrMember);
            return $arrMember;
        }
        else
        {
            return false;
        }

    }

    public function getMemberDetail( $table, $col='*', $where, $arrVal)
    {
         $memberDetail = $this->getItemDetail($table, $col, $where, $arrVal);
         
         if( $memberDetail !== false )
         {
             $this->convParamsFromDB( $memberDetail );
             return $memberDetail;
         }
         else
         {
             return false;
         }
         
    }

    public function convParamsFromDB( &$arrParams )
    {
        foreach( $arrParams as $id => $params)
        {
            $arrParams[$id]['skill_language'] =explode("_", $params['skill_language']);
            $date = new DateTime( $params['birth_day']);
            list($arrParams[$id]['birth_year'],$arrParams[$id]['birth_month'], $arrParams[$id]['birth_day']) =explode("-" ,$date->format('Y-n-j'));
        }
    }

    public function convParamsFromPost( &$arrParams )
    {

        $arrParams['skill_language'] =implode("_", $arrParams['skill_language']);
        $arrParams['birth_day'] =$arrParams['birth_year'] . "-" . $arrParams['birth_month'] . "-".$arrParams['birth_day'];

    }

    public function checkError()
    {

        $arrErr = $this->objFormParam->checkError();

        $objCheckErr = new CheckError();
        $objCheckErr->doFunc(array('誕生日', 'birth_year','birth_month', 'birth_day'),array('CHECK_BIRTHDAY'));

        $arrErr2 = $objCheckErr->arrErr;
 
        $arrErr = array_merge( $arrErr, $arrErr2 );

        return $arrErr;
    }


    public function registMember()
    {
        $arrParams = $this->objFormParam->getDbArray();
        $this->convParamsFromPost( $arrParams );

        //member_idあればupdateそうでなければinsert
        $mode = (isset( $arrParams['member_id']) && $arrParams['member_id'] !== '' ) ? 'update' : 'insert';

        $where ='';
        $arrWhereVal = array();

        switch( $mode )
        {
        case 'update':
            $where =' member_id = ? ';
            $arrWhereVal = array( $arrParams['member_id']);
            break;

            case 'insert';
        default:
            break;
        }

        $res = $this->registItem( $mode,$this->table, $arrParams, $where, $arrWhereVal );

        echo ( $res === true )?'success!':'failed!';

    }

}

?>
