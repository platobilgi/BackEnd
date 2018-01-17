@extends('layouts.master')
@section('content')
@section('title')
    Güncel Durum
@endsection


<div class="row">
    <div class="portlets col-md-12">
        <div class="widget">
            <div class="widget-header transparent">
                <h2><strong class="">Tahsilatlar </strong></h2>
                <div class="additional-btn">
                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                </div>
            </div>
            <hr>
            <div class="widget-content padding">
                <div class="table-responsive">
                    <table data-sortable class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Fatura Açıklaması</th>
                            <th>Toplam Meblağ</th>
                            <th>Kalan Meblağ</th>
                            <th>Ödenen Meblağ</th>
                            <th>Ödeme Tarihi</th>

                        </tr>
                        </thead>
                        <tbody>
                        @if(count($payments)!=0)
                            @foreach($payments as $payment)
                            @if($payment->types_id===14)

                                <tr>
                                    <td><strong>{{\App\Models\Back\Sales\invoices::find($payment->invoices_id)->description}}</strong></td>
                                    <td>{{\App\Models\Back\Sales\invoices::find($payment->invoices_id)->fee}}</td>
                                    <td>{{((\App\Models\Back\Sales\invoices::find($payment->invoices_id))->fee)-(\App\Models\Back\Sales\invoices::find($payment->invoices_id))->paid}}</td>
                                    <td>{{$payment->balance}}</td>
                                    <td>{{$payment->issue_date}}</td>


                                </tr>
                            @endif
                        @endforeach
                            @endif
                        </tbody>


                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="row">
    <div class="portlets col-md-12">
        <div class="widget">
            <div class="widget-header transparent">
                <h2><strong class="">Ödemeler </strong></h2>
                <div class="additional-btn">
                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                </div>
            </div>
            <hr>
            <div class="widget-content padding">
                 <div class="table-responsive">
                        <table data-sortable class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Fatura Açıklaması</th>
                                <th>Toplam Meblağ</th>
                                <th>Kalan Meblağ</th>
                                <th>Ödenen Meblağ</th>
                                <th>Ödeme Tarihi</th>

                            </tr>
                            </thead>
                            <tbody>
                            @if(count($payments)!=0)

                                @foreach($payments as $ss)
                                @if($ss->types_id===15)

                                <tr>
                                    <td><strong>{{(\App\Models\Back\Expenses\expenses::find($ss->expenses_id))->description}}</strong></td>
                                    <td>{{\App\Models\Back\Expenses\expenses::find($ss->expenses_id)->fee}}</td>
                                    <td>{{((\App\Models\Back\Expenses\expenses::find($ss->expenses_id))->fee)-((\App\Models\Back\Expenses\expenses::find($ss->expenses_id))->paid)}}</td>
                                    <td>{{$ss->balance}}</td>
                                    <td>{{$ss->issue_date}}</td>


                                </tr>
                                @endif
                                @endforeach
                                @endif
                            </tbody>


                        </table>
                    </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="portlets col-md-12">
        <div class="widget">
            <div class="widget-header transparent">
                <h2><strong class="">Tahsil Edilmemiş veya Ödenmemiş İşlemler
                    </strong></h2>
                <div class="additional-btn">
                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                </div>
            </div>
            <hr>
            <div class="widget-content padding">
                <div class="table-responsive">
                    <table data-sortable class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Fatura Açıklaması</th>
                            <th>Toplam Meblağ</th>
                            <th>Kalan Meblağ</th>
                            <th>Ödenen Meblağ</th>
                            <th>Ödeme Tarihi</th>

                        </tr>
                        </thead>
                        <tbody>
                        @if(count($payments)!=0)

                            @foreach($payments as $payment)
                            @if($payment->types_id==15)

                                <tr>
                                    <td><strong>{{\App\Models\Back\Sales\invoices::find($payment->invoices_id)}}</strong></td>
                                    <td>{{\App\Models\Back\Sales\invoices::find($payment->invoices_id)}}</td>
                                    <td>{{(\App\Models\Back\Sales\invoices::find($payment->invoices_id))}}</td>
                                    <td>{{$payment->balance}}</td>
                                    <td>{{$payment->issue_date}}</td>


                                </tr>
                            @endif
                        @endforeach
                            @endif
                        </tbody>


                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    $("#a1").addClass("active");
</script>
@endsection
