<?php
require_once('core.php');

/**
 * @author matsumoto norio
 *
 */
class Regist extends Core{
	
	//親属性の継承
	public function __construct()
	{
        parent::__construct();
        $this->template_filename ='';
        $objDate                    = new dateClass();
        $objDate->setStartYear( START_YEAR );
        $objDate->setEndYear(date('Y'));
  //  $objMaster             = new 
        $this->smarty->assign( 'arrYear', $objDate->getYear());
        $this->smarty->assign( 'arrMonth', $objDate->getMonth());
        $this->smarty->assign( 'arrDay', $objDate->getDay());
  //    $this->smarty->assign( 'arrSex', $objMaster->getMaster('mtb_sex') );
  //    $this->smarty->assign( 'arrLanguage',$objMaster->getMaster('mtb_language') );

	}

	public function main()
	{
        $mode = $this->getMode();

        $this->$mode();
    }
	

    public function index()
    {
    
    }

    public function add()
    {
        $this->initParam( $objFormParam );
    
    }
    
    public function edit()
    {
    
    }

    public function delete()
    {
    
    }

	public function initParam( &$objFormParam)
    {
        $objFormParam->addParam('苗字','family_name','','s',array('EXIST_CHECK'));
		$objFormParam->addParam('名前','first_name','','s',array('EXIST_CHECK'));
		$objFormParam->addParam('性別','sex','','n',array('EXIST_CHECK'));
		$objFormParam->addParam('言語','skill_language','','n',array('EXIST_CHECK'));
        $objFormParam->addParam('誕生年', 'birth_year','', 'n', array('NUM_CHECK'),date('Y'));
        $objFormParam->addParam('誕生月', 'birth_month','', 'n', array('NUM_CHECK'),date('n') );
        $objFormParam->addParam('誕生日', 'birth_day','', 'n', array('NUM_CHECK'),date('d'));
        $objFormParam->addParam('郵便番号1', 'zip1','', 'n', array('NUM_CHECK'));
        $objFormParam->addParam('郵便番号2', 'zip2','', 'n', array('NUM_CHECK'));
        $objFormParam->addParam('住所1', 'address1','', 's', array('EXIST_CHECK'));
        $objFormParam->addParam('住所2', 'address2','', 's', array());
        
        $objFormParam->setParam( $_POST );
        $objFormParam->trimParam();

		//$objFormParam->convParam();
    }
	
	public function checkError( &$objFormParam )
	{
        $arrErr = $objFormParam->checkError();

        return $arrErr;
    }
	
	
	
}

$regist = new Regist();
$regist->main();

?>
