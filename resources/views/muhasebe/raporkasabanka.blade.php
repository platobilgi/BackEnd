@extends('layouts.master')
@section('content')

  <h3><i class="fa fa-angle-right"></i> Kasa / Banka Raporu</h3>
          <div class="col-md-12 mt">
                      <div class="content-panel">
                        <div style="float:left"><h4><i class="fa fa-angle-right"></i>Kasa / Banka</h4></div>
                        <div style="float:right; padding-right:300px;">

                                   <div class="form-group" style=" margin-left:30px; float:left;">
                                      <div class="accordion">
                                        <h3 class="panel-title"> <i class="fa fa-calendar fa-2x"></i> Takvim </h3>
                                        <div class="panel-content">
                                          <span>Lorem ipsum </span>
                                        </div>
                                      </div>
                                   </div>
                        </div>
                        <div style="clear:both;"></div>
                        <hr>
                        <table  style="width:100%; height:100px;  border:1px solid #333; border-left:none; border-right:none; border-top:none; margin-top:-20px; border-collapse:collapse;" >

                          <tr>
                            <td style="width:80px;"></td>
                            <td style="margin-left:auto;margin-right: auto;border-right:1px solid #ccc;"><center><b style="font-size:24px;">0</b>,00 &#x20BA;<br><span style="font-weight:bolder; color:#ccc">TOPLAM NAKİT GİRİŞİ</span></center></td>
                            <td style="margin-left:auto;margin-right: auto;border-left:1px solid #ccc;border-right:1px solid #ccc;"><center><b style="font-size:24px;">0</b>,00 &#x20BA;<br><span style="font-weight:bolder; color:#ccc">TOPLAM NAKİT ÇIKIŞI</span></center></td>
                            <td style="margin-left:auto;margin-right: auto;border-left:1px solid #ccc;border-right:1px solid #ccc;"><center><b style="font-size:24px;">0</b>,00 &#x20BA;<br><span style="font-weight:bolder; color:#ccc">NET NAKİT AKIŞI</span></center></td>
                           
                          </tr>
                        </table>
                         <div style="clear:both;"></div>
                         <br><br>

                          <div style="position:absolute;bottom: 0px;right:30px;">
                               <div class="btn-group">
                                <button type="button" class="btn btn-default">GÜN</button>
                                <button type="button" class="btn btn-default">HAFTA</button>
                                <button type="button" class="btn btn-default">AY</button>
                                <button type="button" class="btn btn-default">YIL</button>
                              </div>
                          </div>

                          <br><br><br><br><br><br><br><br>


                        </div><! --/content-panel -->
                    </div>
        </div>

<script>
  $( '.panel-content' ).hide();
  $( '.accordion' ).attr({
    role: 'tablist',
    multiselectable: 'true'
   });
  $( '.panel-content' ).attr( 'id', function( IDcount ) {
    return 'panel-' + IDcount; 
  });
  $( '.panel-content' ).attr( 'aria-labelledby', function( IDcount ) { 
    return 'control-panel-' + IDcount; 
  });
  $( '.panel-content' ).attr( 'aria-hidden' , 'true' );
  $( '.accordion .panel-content' ).attr( 'role' , 'tabpanel' );
  $( '.panel-title' ).each(function(i){
      $target = $(this).next( '.panel-content' )[0].id;
      $link = $( '<a>', {
      'href': '#' + $target,
      'aria-expanded': 'false',
      'aria-controls': $target,
      'id' : 'control-' + $target
    });
      $(this).wrapInner($link);
    
  });
  $( '.panel-title a' ).append('<span class="icon">+</span>');
  $( '.panel-title a' ).click(function() {
    
    if ($(this).attr( 'aria-expanded' ) == 'false'){
      

      $(this).parents( '.accordion' ).find( '[aria-expanded=true]' ).attr( 'aria-expanded' , false ).removeClass( 'active' ).parent().next( '.panel-content' ).slideUp(200).attr( 'aria-hidden' , 'true');


      $(this).attr( 'aria-expanded' , true ).addClass( 'active' ).parent().next( '.panel-content' ).slideDown(200).attr( 'aria-hidden' , 'false');

    } else {

      $(this).attr( 'aria-expanded' , false ).removeClass( 'active' ).parent().next( '.panel-content' ).slideUp(200).attr( 'aria-hidden' , 'true');;

    }
    return false;
  });
</script>

                                        
@endsection
