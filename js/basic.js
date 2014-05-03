$(function(){

    $('.submit_button').click(function(){
        var mode = this.id.split('_')[0];
        $('#mode').val(mode);
        $('#form1').submit();
    });

    //郵便番号の補助入力
    $('.zip').bind('focus , keyup , blur' , function(){
         
         var zip1 = $('#zip1').val();
         var zip2 = $('#zip2').val();

         if( zip1.match(/[0-9]{3}/) === zip1 && zip2.match(/[0-9]{4}/) === zip2 )
         {
             $.ajax({
                type    : "post", 
                url     : "../../ajax/setPostCode.php",
                scriptCharset: 'utf-8',
                data    :{zip1:zip1,zip2:zip2},
                //urlのプログラムで出力されたものがdata
                success : function ( data ){
                
                 if( data !== false && data !=='' )
                 {
                    $('#address1').val( data ); 
                 }
                 else
                 {
                     alert('存在しない郵便番号です。');
                 }

                }
 
             });
         }
         else
         {
                $('#address1').val(''); 
         }

    });

      
});

  function moveNaviPage( page )
  {
      location.href='http://localhost/framework/member/index/' + page;
  }

  function delete_member( member_id )
 {
     if( confirm("このデータを削除してもよいですか？") )
     {
         location.href='http://localhost/framework/member/delete/' + member_id;
     }
  }
