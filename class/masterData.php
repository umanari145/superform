<?php
class master
{ 
   /** SC_Query �C���X�^���X */
    var $objQuery;

    /** �f�t�H���g�̃e�[�u���J������ */
    var $columns = array('id', 'name', 'rank' );

    /**
     * �}�X�^�[�f�[�^���擾����.
     *
     * �ȉ��̏����Ń}�X�^�[�f�[�^���擾����.
     * 1. MASTER_DATA_REALDIR �Ƀ}�X�^�[�f�[�^�L���b�V�������݂��Ȃ��ꍇ�A
     *    DB����}�X�^�[�f�[�^���擾���āA�}�X�^�[�f�[�^�L���b�V���𐶐�����B
     * 2. �}�X�^�[�f�[�^�L���b�V����ǂݍ��݁A�ϐ��Ɋi�[���Ԃ��B
     *
     * �Ԃ�l��, key => value �`���̔z��ł���.
     *
     * @param string $name �}�X�^�[�f�[�^��
     * @param array $columns [0] => �L�[, [1] => �\��������, [2] => �\����
     *                        ��\���J���������i�[�����z��
     * @return array �}�X�^�[�f�[�^
     */
    function getMasterData($name, $columns = array()) {

        return $masterData;
    }
}

?>
