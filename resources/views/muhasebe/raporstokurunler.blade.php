@extends('layouts.master')
@section('content')

  <h3><i class="fa fa-angle-right"></i> Stoktaki Ürünler Raporu</h3>
          <div class="col-md-12 mt">
                      <div class="content-panel">
                        <h4><i class="fa fa-angle-right"></i>Stok Değeri</h4>
                        <hr>
                        <table  style="width:100%; height:100px;  border:1px solid #333; border-left:none; border-right:none; border-top:none; margin-top:-20px; border-collapse:collapse;" >

                          <tr>
                            <td style="width:80px;"></td>
                            <td style="margin-left:auto;margin-right: auto;border-right:1px solid #ccc;"><center><b style="font-size:24px;">0</b>,00 &#x20BA;<br><span style="font-weight:bolder; color:#ccc">Tahmini Satış Değeri</span></center></td>
                            <td style="margin-left:auto;margin-right: auto;border-left:1px solid #ccc;border-right:1px solid #ccc;"><center><b style="font-size:24px;">0</b>,00 &#x20BA;<br><span style="font-weight:bolder; color:#ccc">Tahmini Alış Değeri</span></center></td>
                            <td style="margin-left:auto;margin-right: auto;border-left:1px solid #ccc;border-right:1px solid #ccc;"><center><b style="font-size:24px;">0</b>,00 &#x20BA;<br><span style="font-weight:bolder; color:#ccc">Potansiyel Kazanç</span></center></td>
                          
                          </tr>
                        </table>
                          <div style="margin:5px">
                              <i class="fa fa-fw fa-info-circle u-pullLeft u-lineHeight20"></i>    Tahmini Satış Değeri, Tahmini Alış Değeri ve Potansiyel Kazanç hesaplamalarına  <b>stokta olmayan ürünler dahil edilmez.</b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              Hesaplamalar ürün sayfalarında belirtilen <b>Alış Fiyatı</b> ve <b>Satış Fiyatı</b> üzerinden yapılır.
                         </div>
                <!--/showback -->
                <h4><i class="fa fa-angle-right"></i>Tüm Ürünler</h4>
               <table class="table table-hover">
                            <hr>
                                <thead>
                                <tr>
                                    <th style="font-weight:bolder; font-size:16px;">ÜRÜN ADI ve KODU</th>
                                    <th style="font-weight:bolder; font-size:16px;">STOK MİKTARI</th>
                                    <th style="font-weight:bolder; font-size:16px;">ALIŞ FİYATI</th>
                                    <th style="font-weight:bolder; font-size:16px;">SATIŞ FİYATI</th>
                                    <th style="font-weight:bolder; font-size:16px;">STOK MALİYETİ</th>
                                    <th style="font-weight:bolder; font-size:16px;">SATIŞ DEĞERİ</th>
                                    <th style="font-weight:bolder; font-size:16px;">SATIŞ KARI</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Simon</td>
                                    <td>Mosa</td>
                                    <td>@twitter</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                </tbody>
                            </table>     
                             <div style="float:right;margin-top: 20px;margin-right:20px; font-weight:bolder; font-family:calibri"><button type="button" class="btn btn-default"> <i class="fa fa-sign-out" aria-hidden="true"></i>DIŞARI AKTAR</button></div>
                                <div style="clear: both;"></div>
              </div>
                        </div><! --/content-panel -->
                    </div>
        </div>
@endsection
