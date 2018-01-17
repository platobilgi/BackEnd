@extends('layouts.master')
@section('content')
<!-- lightbox -->
<style>
.exampleContainer {margin:-1px 0 50px}
.exampleContainer .exampleLive {padding:20px;font-size:14px}
.exampleContainer .exampleLive:after {content:'';clear:both;display:table}
.exampleContainer .exampleLive .exampleLiveTitle {border-left:5px solid #0084ff;margin:-20px -20px 20px;padding:10px 20px 10px 15px;font-size:20px;text-transform:uppercase}
.exampleContainer .exampleCode {background:#2b2f3b;padding:20px;overflow:auto}
.exampleContainer .exampleCode pre {line-height:0}
.exampleContainer .exampleCode code {white-space:pre-line}
.exampleContainer .exampleCode code * {font-family:consolas;font-size:13px}
.exampleContainer .exampleCode code > p {line-height:20px;color:#7993ad;display:inline-block}
.exampleContainer .exampleCode code .tab {padding-left:15px}
.exampleContainer .exampleCode code .tab2 {padding-left:30px}
.exampleContainer .exampleCode code .tab3 {padding-left:45px}
.exampleContainer .exampleCode code .tab4 {padding-left:60px}
.exampleContainer .exampleCode code .tag {color:#97e0e9}
.exampleContainer .exampleCode code .text {color:#fff}
.exampleContainer .exampleCode code .key {color:#bf5c5b}
.exampleContainer .exampleCode code .val {color:#fadf8c}
.exampleContainer .exampleCode code .var {color:#aae997}
.exampleContainer .exampleCode code .var2 {color:#b297e9}
</style>
<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500">
<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/popModal.css')}}">


  <h3><i class="fa fa-angle-right"></i> Kategori ve Etiketler</h3>
          <div class="col-md-12 mt">
                      <div class="content-panel">
                        <div style="float:left"><h4><i class="fa fa-angle-right"></i>Kategori ve Etiketler</h4></div>
                      
                        <div style="clear:both;"></div>
                        <hr>
                         <div style="clear:both;"></div>
                              <div class="row">
                            
                              <div class="col-lg-4 col-md-4 col-sm-4 mb">
                                  <div class="white-panel pn" style="height: 150px;">
                                    <div class="white-header">
                                      <h5><span style="color:#333;"><i style="color:#666" class="fa fa-folder fa-15x c-textLight"></i> Satış Kategorileri</span></h5>
                                    </div>
                                      <div class="row">
                                      <button  id="popModal_ex1" class="btn btn-default">YENİ EKLE</button>
                                       	<div style="display:none">
										<div id="content1">
											
											<div style="color:#ccc; font-size:12px;">KATEGORİ ADI</div>
											<div class="popModal_footer">
												{{Form::open(array('route' => 'ayarlar.kategoriveEtiketler' , 'method' => 'post'))}}
												{{Form::text('kad', '',array('class'=> 'form-control'))}}
                                                <input id="tip" name="tip"type="hidden" value="1">
												{{Form::submit('Kaydet',array('class' => 'btn btn-theme'))}}
                                                {{Form::close()}}
												<button type="button" class="btn btn-default" data-popmodal-but="cancel">VAZGEÇ</button>
											</div>
										</div>
										</div>
                                      </div>
                                  </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 mb">
                                  <div class="white-panel pn" style="height: 150px;">
                                    <div class="white-header">
                                      <h5><span style="color:#666"><i style="color:#666" class="fa fa-folder fa-15x c-textLight"></i> Gider Kategorileri</span></h5>
                                    </div>
                                      <div class="row">
                                      <button id="popModal_ex2" class="btn btn-default">YENİ EKLE</button>
                                       	<div style="display:none">
										<div id="content2">
											<div style="color:#ccc; font-size:12px;">KATEGORİ ADI</div>
                                            {{Form::open(array('route' => 'ayarlar.kategoriveEtiketler' , 'method' => 'post'))}}
                                            {{Form::text('kad', '',array('class'=> 'form-control'))}}
                                            <input id="tip" name="tip"type="hidden" value="2">

                                            <div class="popModal_footer">
												<button type="submit" class="btn btn-primary" data-popmodal-but="ok">KAYDET</button>
												<button type="button" class="btn btn-default" data-popmodal-but="cancel">VAZGEÇ</button>
                                                {{Form::close()}}

                                            </div>
										</div>
										</div>
                                      </div>
                                  </div>
                                </div>
                                
                                <div class="col-lg-4 col-md-4 col-sm-4 mb">
                                  <div class="white-panel pn" style="height: 150px;">
                                    <div class="white-header">
                                      <h5><span style="color:#666"><i style="color:#666" class="fa fa-tags fa-15x c-textLight"></i>  Gelir ve Gider Etiketleri</span></h5>
                                    </div>
                                      <div class="row">
                                      <button id="popModal_ex3" class="btn btn-default">YENİ EKLE</button>
                                       	<div style="display:none">
										<div id="content3">
											<div style="color:#ccc; font-size:12px;">KATEGORİ ADI</div>
                                            {{Form::open(array('route' => 'ayarlar.kategoriveEtiketler' , 'method' => 'post'))}}
                                            {{Form::text('kad', '',array('class'=> 'form-control'))}}
                                            <input id="tip" name="tip"type="hidden" value="3">

                                            <div class="popModal_footer">
												<button type="submit" class="btn btn-primary" data-popmodal-but="ok">KAYDET</button>
												<button type="button" class="btn btn-default" data-popmodal-but="cancel">VAZGEÇ</button>
                                                {{Form::close()}}

                                            </div>
										</div>
										</div>
                                      </div>
                                  </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 mb">
                                  <div class="white-panel pn" style="height: 150px;">
                                    <div class="white-header">
                                      <h5><span style="color:#666"><i style="color:#666" class="fa fa-folder fa-15x c-textLight"></i>  Çalışan Kategorileri</span></h5>
                                     </div>
                                     <div class="row">
                                      <button id="popModal_ex4" class="btn btn-default">YENİ EKLE</button>
                                       	<div style="display:none">
										<div id="content4">
											<div style="color:#ccc; font-size:12px;">KATEGORİ ADI</div>
                                            {{Form::open(array('route' => 'ayarlar.kategoriveEtiketler' , 'method' => 'post'))}}
                                            {{Form::text('kad', '',array('class'=> 'form-control'))}}
                                            <input id="tip" name="tip"type="hidden" value="4">

                                            <div class="popModal_footer">
												<button type="submit" class="btn btn-primary" data-popmodal-but="ok">KAYDET</button>
												<button type="button" class="btn btn-default" data-popmodal-but="cancel">VAZGEÇ</button>
                                                {{Form::close()}}

                                            </div>
										</div>
										</div>
                                      </div>
                                  </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 mb">
                                  <div class="white-panel pn" style="height: 150px;">
                                    <div class="white-header">
                                      <h5><span style="color:#666"><i style="color:#666" class="fa fa-folder fa-15x c-textLight"></i>  Müşteri ve Tedarikçi Kategorileri</span></h5>
                                    </div>
                                      <div class="row">
                                       <button id="popModal_ex5" class="btn btn-default">YENİ EKLE</button>
                                       	<div style="display:none">
										<div id="content5">
											<div style="color:#ccc; font-size:12px;">KATEGORİ ADI</div>
                                            {{Form::open(array('route' => 'ayarlar.kategoriveEtiketler' , 'method' => 'post'))}}
                                            {{Form::text('kad', '',array('class'=> 'form-control'))}}
                                            <input id="tip" name="tip"type="hidden" value="5">

                                            <div class="popModal_footer">
												<button type="submit" class="btn btn-primary" data-popmodal-but="ok">KAYDET</button>
												<button type="button" class="btn btn-default" data-popmodal-but="cancel">VAZGEÇ</button>
                                                {{Form::close()}}

                                            </div>
										</div>
										</div>
                                      </div>
                                  </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 mb">
                                  <div class="white-panel pn" style="height: 150px;">
                                    <div class="white-header">
                                      <h5><span style="color:#666"><i style="color:#666" class="fa fa-folder fa-15x c-textLight"></i>  Hizmet ve Ürün Kategorileri</span></h5>
                                    </div>
                                      <button id="popModal_ex6" class="btn btn-default">YENİ EKLE</button>
                                       	<div style="display:none">
										<div id="content6">
											<div style="color:#ccc; font-size:12px;">KATEGORİ ADI</div>
                                            {{Form::open(array('route' => 'ayarlar.kategoriveEtiketler' , 'method' => 'post'))}}
                                            {{Form::text('kad', '',array('class'=> 'form-control'))}}
                                            <input id="tip" name="tip"type="hidden" value="6">

                                            <div class="popModal_footer">
												<button type="submit" class="btn btn-primary" data-popmodal-but="ok">KAYDET</button>
												<button type="button" class="btn btn-default" data-popmodal-but="cancel">VAZGEÇ</button>
                                                {{Form::close()}}

                                            </div>
										</div>
										</div>
                                      </div>
                                  </div>
                                </div>
                        </div><! --/END 1ST ROW OF PANELS -->
                       
                       

                        </div>
                    </div>
        </div>

 <!-- lightbox-->



<script src="https://cdn.jsdelivr.net/jquery/3.1.0/jquery.min.js"></script>
<script src="{{URL::asset('js/popModal.js')}}"></script>
<script>
$(function(){
	$('#popModal_ex1').click(function(){
		$('#popModal_ex1').popModal({
			html : $('#content1'),
			placement : 'bottomLeft',
			showCloseBut : true,
			onDocumentClickClose : true,
			onDocumentClickClosePrevent : '',
			overflowContent : false,
			inline : true,
			asMenu : false,
			beforeLoadingContent : 'Please, wait...',
			onOkBut : function() {},
			onCancelBut : function() {},
			onLoad : function() {},
			onClose : function() {}
		});
	});
		
		
	$('#popModal_ex2').click(function(){
		$('#popModal_ex2').popModal({
			html : $('#content2'),
			placement : 'bottomLeft',
			showCloseBut : true,
			onDocumentClickClose : true,
			onDocumentClickClosePrevent : '',
			overflowContent : false,
			inline : true,
			asMenu : false,
			beforeLoadingContent : 'Please, wait...',
			onOkBut : function() {},
			onCancelBut : function() {},
			onLoad : function() {},
			onClose : function() {}
		});
	});
	
	$('#popModal_ex3').click(function(){
		$('#popModal_ex3').popModal({
			html : $('#content3'),
			placement : 'bottomLeft',
			showCloseBut : true,
			onDocumentClickClose : true,
			onDocumentClickClosePrevent : '',
			overflowContent : false,
			inline : true,
			asMenu : false,
			beforeLoadingContent : 'Please, wait...',
			onOkBut : function() {},
			onCancelBut : function() {},
			onLoad : function() {},
			onClose : function() {}
		});
	});

	$('#popModal_ex4').click(function(){
		$('#popModal_ex4').popModal({
			html : $('#content4'),
			placement : 'bottomLeft',
			showCloseBut : true,
			onDocumentClickClose : true,
			onDocumentClickClosePrevent : '',
			overflowContent : false,
			inline : true,
			asMenu : false,
			beforeLoadingContent : 'Please, wait...',
			onOkBut : function() {},
			onCancelBut : function() {},
			onLoad : function() {},
			onClose : function() {}
		});
	});

	$('#popModal_ex5').click(function(){
		$('#popModal_ex5').popModal({
			html : $('#content5'),
			placement : 'bottomLeft',
			showCloseBut : true,
			onDocumentClickClose : true,
			onDocumentClickClosePrevent : '',
			overflowContent : false,
			inline : true,
			asMenu : false,
			beforeLoadingContent : 'Please, wait...',
			onOkBut : function() {},
			onCancelBut : function() {},
			onLoad : function() {},
			onClose : function() {}
		});
	});

	$('#popModal_ex6').click(function(){
		$('#popModal_ex6').popModal({
			html : $('#content6'),
			placement : 'bottomLeft',
			showCloseBut : true,
			onDocumentClickClose : true,
			onDocumentClickClosePrevent : '',
			overflowContent : false,
			inline : true,
			asMenu : false,
			beforeLoadingContent : 'Please, wait...',
			onOkBut : function() {},
			onCancelBut : function() {},
			onLoad : function() {},
			onClose : function() {}
		});
	});
	

	
	
	
	/* tab */
(function($) {
	$.fn.tab = function(method){
	
		var methods = {
			init : function(params) {

				$('.tab').click(function() {
					var curPage = $(this).attr('data-tab');
					$(this).parent().find('> .tab').each(function(){
						$(this).removeClass('active');
					});
					$(this).parent().find('+ .page_container > .page').each(function(){
						$(this).removeClass('active');
					});
					$(this).addClass('active');
					$('.page[data-page="' + curPage + '"]').addClass('active');
				});
			
			}
		};

		if (methods[method]) {
			return methods[method].apply( this, Array.prototype.slice.call(arguments, 1));
		} else if (typeof method === 'object' || ! method) {
			return methods.init.apply(this, arguments);
		}
		
	};
	$('html').tab();
	
})(jQuery);
	
});
</script>

<!-- PANEL -->
            
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
