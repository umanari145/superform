<?php
class master
{ 
   /** SC_Query インスタンス */
    var $objDb = NULL;

    /** デフォルトのテーブルカラム名 */
    var $columns = array('id', 'name', 'rank' );

    /**
     * マスターデータを取得する.
     *
     * 以下の順序でマスターデータを取得する.
     * 1. MASTER_DATA_REALDIR にマスターデータキャッシュが存在しない場合、
     *    DBからマスターデータを取得して、マスターデータキャッシュを生成する。
     * 2. マスターデータキャッシュを読み込み、変数に格納し返す。
     *
     * 返り値は, key => value 形式の配列である.
     *
     * @param string $name マスターデータ名
     * @param array $columns [0] => キー, [1] => 表示文字列, [2] => 表示順
     *                        を表すカラム名を格納した配列
     * @return array マスターデータ
     */
    function getMasterData($name, $columns = array()) {

    	$this->objDb = new Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        
    	$masterData = $this->objDb->select($name);
        
    	$masterData2 = $this->setMasterArray($masterData);
    	
    	return $masterData2;
    }
    
    function setMasterArray( $masterData )
    {
    	$masterData2 =array();
    	foreach( $masterData as $id => $val )
    	{
    		$masterData2[$val['id']] = $val['name'];
    	}
    	
    	return $masterData2;
    	
    }
}

?>
