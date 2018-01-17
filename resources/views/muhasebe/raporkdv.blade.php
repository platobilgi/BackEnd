@extends('layouts.master')
@section('content')
          <h3><i class="fa fa-angle-right"></i> KDV RAPORU</h3>
          <div class="col-md-12 mt">
                      <div class="content-panel">
                               <!-- tabset0 -->
                            <h4><i class="fa fa-angle-right"></i>Aylara Göre KDV Raporları</h4>
                            <table class="table table-hover">
                            <hr>
                                <thead>
                                <tr>
                                    <th style="font-weight:bolder; font-size:16px;">AY</th>
                                    <th style="font-weight:bolder; font-size:16px;">HESAPLANAN KDV</th>
                                    <th style="font-weight:bolder; font-size:16px;">İNDİRİLECEK KDV</th>
                                    <th style="font-weight:bolder; font-size:16px;">NET KDV</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Simon</td>
                                    <td>Mosa</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                            </table>     
                            <div style="margin:5px;"><button type="button" class="btn btn-theme"> DAHA FAZLA GÖSTER </button>  </div>
                            <h4><i class="fa fa-angle-right"></i>Şubat Ayı Giderler KDV Dökümü</h4>
                            <hr>
                            <div class="seaTabs_switch">
                                <div class="seaTabs_tab seaTabs_switch_active"><b>TÜMÜ</b></div>
                                <div class="seaTabs_tab">SATIŞLAR</div>
                                <div class="seaTabs_tab">GİDERLER</div>
                            </div>
                            <div class="seaTabs_content">
                               <div class="seaTabs_item seaTabs_content_active">
                               <table class="table table-hover">
                               <thead>
                                <tr>
                                    <th>FATURA AÇIKLAMASI</th>
                                    <th>DÜZENLEME TARİHİ</th>
                                    <th></th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style="border-color:#ccc">1</td>
                                    <td style="border-color:#ccc">Mark</td>
                                    <td style="border-color:#ccc">Otto</td>
                                   
                                </tr>
                                <tr>
                                    <td style="border-color:#ccc">2</td>
                                    <td style="border-color:#ccc">Jacob</td>
                                    <td style="border-color:#ccc">Thornton</td>
                                    
                                </tr>
                                <tr>
                                    <td style="border-color:#ccc">3</td>
                                    <td style="border-color:#ccc">Simon</td>
                                    <td style="border-color:#ccc">Mosa</td>
                                   
                                </tr>
                                </tbody>
                            </table>
                               </div>
                               <div class="seaTabs_item">
                                      <table class="table table-hover">
                               <thead>
                                <tr>
                                    <th>FİRMA ÜNVANI</th>
                                    <th>TOPLAM ALIŞ</th>
                                    <th>Kategorilerin Değişimi</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style="border-color:#ccc">1</td>
                                    <td style="border-color:#ccc">Mark</td>
                                    <td style="border-color:#ccc">Otto</td>
                                   
                                </tr>
                                <tr>
                                    <td style="border-color:#ccc">2</td>
                                    <td style="border-color:#ccc">Jacob</td>
                                    <td style="border-color:#ccc">Thornton</td>
                                    
                                </tr>
                                <tr>
                                    <td style="border-color:#ccc">3</td>
                                    <td style="border-color:#ccc">Simon</td>
                                    <td style="border-color:#ccc">Mosa</td>
                                   
                                </tr>
                                </tbody>
                            </table>
                               </div>
                               <div class="seaTabs_item">
                                        <table class="table table-hover">
                               <thead>
                                <tr>
                                    <th>ADI</th>
                                    <th>TOPLAM ALIŞ</th>
                                    <th>Kategorilerin Değişimi</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style="border-color:#ccc">1</td>
                                    <td style="border-color:#ccc">Mark</td>
                                    <td style="border-color:#ccc">Otto</td>
                                   
                                </tr>
                                <tr>
                                    <td style="border-color:#ccc">2</td>
                                    <td style="border-color:#ccc">Jacob</td>
                                    <td style="border-color:#ccc">Thornton</td>
                                    
                                </tr>
                                <tr>
                                    <td style="border-color:#ccc">3</td>
                                    <td style="border-color:#ccc">Simon</td>
                                    <td style="border-color:#ccc">Mosa</td>
                                   
                                </tr>
                                </tbody>
                            </table>
                               </div>
                            </div>
                        </div>
                    </div>
        </div>
@endsection