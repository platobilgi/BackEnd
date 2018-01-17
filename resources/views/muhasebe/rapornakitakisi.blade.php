@extends('layouts.master')
@section('content')

  <h3><i class="fa fa-angle-right"></i> Nakit Akışı Raporu</h3>
          <div class="col-md-12 mt">
                      <div class="content-panel">
                        <div style="float:left"><h4><i class="fa fa-angle-right"></i>Nakit Akışı Raporu</h4></div>
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
                         <div style="clear:both;"></div>
                              <div class="row">

                              <div class="col-lg-4 col-md-4 col-sm-4 mb">
                                  <div class="white-panel pn">
                                    <div class="white-header">
                                      <h5><span style="color:#68DFF0"> Bugün toplam bakiye</span></h5>
                                    </div>
                                    
                                    <h3 class="centered" style="color:#333"><b style="font-size:24px;">0</b>,00 &#x20BA;<br></h3>
                                    <p>NAKİT</p>
                                     
                                  </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 mb">
                                 
                                  <div class="white-panel pn">
                                    <div class="white-header">
                                      <h5><span style="color:#68DFF0"> Vadesi geçmiş</span></h5>
                                    </div>
                                      <div class="row">
                                        <div class="col-md-6">
                                          <p class="small mt"> <h3 class="centered" style="color:#333"><b style="font-size:24px;">0</b>,00 &#x20BA;<br></h3></p>
                                          <p>TAHSİLAT</p>
                                        </div>
                                        <div class="col-md-6">
                                          <p class="small mt"><h3 class="centered" style="color:#333"><b style="font-size:24px;">0</b>,00 &#x20BA;<br></h3></p>
                                          <p>ÖDEME</p>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                                
                                <div class="col-lg-4 col-md-4 col-sm-4 mb">
                                 
                                  <div class="white-panel pn">
                                    <div class="white-header">
                                      <h5><span style="color:#68DFF0"> Planlanmamış</span></h5>
                                    </div>
                                      <div class="row">
                                       <div class="col-md-6">
                                          <p class="small mt"> <h3 class="centered" style="color:#333"><b style="font-size:24px;">0</b>,00 &#x20BA;<br></h3></p>
                                          <p>TAHSİLAT</p>
                                        </div>
                                        <div class="col-md-6">
                                          <p class="small mt"><h3 class="centered" style="color:#333"><b style="font-size:24px;">0</b>,00 &#x20BA;<br></h3></p>
                                          <p>ÖDEME</p>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                        </div><! --/END 1ST ROW OF PANELS -->
                        <div style="clear:both;"></div>
                        <div class="seaTabs_switch">
                                <div class="seaTabs_tab seaTabs_switch_active"><b>ÖNÜMÜZDEKİ 12 HAFTA</b></div>
                                <div class="seaTabs_tab">ÖNÜMÜZDEKİ 12 AY</div>
                        </div>
                            <div class="seaTabs_content">
                               <div class="seaTabs_item seaTabs_content_active">
                                      <table class="table table-hover">
                                        <h4><i class="fa fa-angle-right"></i>Giderler</h4>
                                        <hr>
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>20. Şub</th>
                                                <th>27. Şub</th>
                                                <th>6. Mar</th>
                                                <th>6. Mar</th>
                                                <th>6. Mar</th>
                                                <th>6. Mar</th>
                                                <th>6. Mar</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td style="font-size:13px; font-family:calibri"><b>DÖNEM BAŞI BAKİYESİ</b></td>
                                                <td style="font-size:14px; font-family:calibri; color:#333; font-weight:bold;">3.374</td>
                                                <td>--</td>
                                                <td style="font-size:14px; font-family:calibri; color:#333; font-weight:bold;">3.374</td>
                                                <td style="font-size:14px; font-family:calibri; color:#333; font-weight:bold;">3.374</td>
                                                <td style="font-size:14px; font-family:calibri; color:#333; font-weight:bold;">3.374</td>
                                                <td style="font-size:14px; font-family:calibri; color:#333; font-weight:bold;">3.374</td>
                                                <td style="font-size:14px; font-family:calibri; color:#333; font-weight:bold;">3.374</td>

                                            </tr>
                                            <tr>
                                                <td style="font-size:13px; font-family:calibri">
                                                    <h3 class="panel-title"> <i class="fa fa-fw fa-caret-right"></i> Tahsilatlar </h3>
                                                    <div class="panel-content">
                                                      <span>Lorem ipsum </span><br> <span>Lorem ipsum </span>
                                                    </div>
                                                </td>
                                                <td style="font-size:14px; font-family:calibri; color:#333; font-weight:bold;">3.374</td>
                                                <td>--</td>
                                                <td style="font-size:14px; font-family:calibri; color:#333; font-weight:bold;">3.374</td>
                                                <td style="font-size:14px; font-family:calibri; color:#333; font-weight:bold;">3.374</td>
                                                <td style="font-size:14px; font-family:calibri; color:#333; font-weight:bold;">3.374</td>
                                                <td style="font-size:14px; font-family:calibri; color:#333; font-weight:bold;">3.374</td>
                                                <td style="font-size:14px; font-family:calibri; color:#333; font-weight:bold;">3.374</td>
                                            </tr>
                                            <tr>
                                                <td style="font-size:13px; font-family:calibri">
                                                   <h3 class="panel-title"> <i class="fa fa-fw fa-caret-right"></i> Ödemeler </h3>
                                                    <div class="panel-content">
                                                      <span>Lorem ipsum </span>
                                                    </div>
                                                </td>
                                                <td style="font-size:14px; font-family:calibri; color:#333; font-weight:bold;">3.374</td>
                                                <td>--</td>
                                                <td style="font-size:14px; font-family:calibri; color:#333; font-weight:bold;">3.374</td>
                                                <td style="font-size:14px; font-family:calibri; color:#333; font-weight:bold;">3.374</td>
                                                <td style="font-size:14px; font-family:calibri; color:#333; font-weight:bold;">3.374</td>
                                                <td style="font-size:14px; font-family:calibri; color:#333; font-weight:bold;">3.374</td>
                                                <td style="font-size:14px; font-family:calibri; color:#333; font-weight:bold;">3.374</td>
                                            </tr>
                                             <tr>
                                                <td style="font-size:13px; font-family:calibri"><b>TAHMİNİ DÖNEM SONU BAKİYESİ</b></td>
                                                <td style="font-size:14px; font-family:calibri; color:#333; font-weight:bold;">3.374</td>
                                                <td>--</td>
                                                <td style="font-size:14px; font-family:calibri; color:#333; font-weight:bold;">3.374</td>
                                                <td style="font-size:14px; font-family:calibri; color:#333; font-weight:bold;">3.374</td>
                                                <td style="font-size:14px; font-family:calibri; color:#333; font-weight:bold;">3.374</td>
                                                <td style="font-size:14px; font-family:calibri; color:#333; font-weight:bold;">3.374</td>
                                                <td style="font-size:14px; font-family:calibri; color:#333; font-weight:bold;">3.374</td>
                                            </tr>
                                            </tbody>
                            </table>
                               </div>
                               <div class="seaTabs_item">
                            
                               </div>
                            </div>
                              
                       

                        </div>
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
