@extends('layouts.master')
@section('content')

  <h3><i class="fa fa-angle-right"></i> Tahsilatlar Raporu</h3>
          <div class="col-md-12 mt">
                      <div class="content-panel">
                        <h4><i class="fa fa-angle-right"></i>Tahsilatlar Raporu</h4>
                        <hr>
                        <table  style="width:100%; height:100px;  border:1px solid #333; border-left:none; border-right:none; border-top:none; margin-top:-20px; border-collapse:collapse;" >

                          <tr>
                            <td style="width:80px;"></td>
                            <td style="margin-left:auto;margin-right: auto;border-right:1px solid #ccc;"><center><b style="font-size:24px;">0</b>,00 &#x20BA;<br><span style="font-weight:bolder; color:#ccc">PLANLANMIŞ</span></center></td>
                            <td style="margin-left:auto;margin-right: auto;border-left:1px solid #ccc;border-right:1px solid #ccc;"><center><b style="font-size:24px;">0</b>,00 &#x20BA;<br><span style="font-weight:bolder; color:#ccc">VADESİ GEÇEN</span></center></td>
                            <td style="margin-left:auto;margin-right: auto;border-left:1px solid #ccc;border-right:1px solid #ccc;"><center><b style="font-size:24px;">0</b>,00 &#x20BA;<br><span style="font-weight:bolder; color:#ccc">TOPLAM TAHSİLAT</span></center></td>
                            <td style="margin-left:auto;margin-right: auto;border-left:1px solid #ccc;"><center><b style="font-size:24px;">0 GÜN</b><br><span style="font-weight:bolder; color:#ccc">ORT. VADE AŞIMI</span></center></td>
                          </tr>
                        </table>
                <div style="padding: 10px;">
                <div class="progress">
              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                <span class="sr-only">40% Complete (success)</span><span style="color:#333; font-family:calibri">PLANLANMAMIŞ <b style="font-size:13px;">0</b>,00 &#x20BA;</span>

              </div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                <span class="sr-only">20% Complete</span><span style="color:#333; font-family:calibri">GÜNCEL <b style="font-size:13px;">0</b>,00 &#x20BA;</span>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                <span class="sr-only">60% Complete (warning)</span><span style="color:#333; font-family:calibri">1–30 GÜN GECİKMİŞ <b style="font-size:13px;">0</b>,00 &#x20BA;</span>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                <span class="sr-only">80% Complete</span><span style="color:#333; font-family:calibri">31–60 GÜN GECİKMİŞ <b style="font-size:13px;">0</b>,00 &#x20BA;</span>
              </div>
              </div>
                <div class="progress">
              <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                <span class="sr-only">20% Complete</span><span style="color:#333; font-family:calibri">61–90 GÜN GECİKMİŞ <b style="font-size:13px;">0</b>,00 &#x20BA;</span>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                <span class="sr-only">60% Complete (warning)</span><span style="color:#333; font-family:calibri">91–120 GÜN GECİKMİŞ <b style="font-size:13px;">0</b>,00 &#x20BA;</span>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                <span class="sr-only">80% Complete</span><span style="color:#333; font-family:calibri">120+ GÜN GECİKMİŞ <b style="font-size:13px;">0</b>,00 &#x20BA;</span>
              </div>
            </div>
              </div>
                        </div>
                    </div>
        </div>

@endsection
