@if(Session::has('success'))
<div class="success" id='message' style='display:none'>
	<p>Terima kasih, konfirmasi anda sudah terkirim.</p>					
</div>		
@endif


<div class="container">

      <div class="row">
        <h2>Konfirmasi Order &nbsp;</h2><br>
        <div class="span12">
            <table class="table">
                  <thead>
                    <tr>
                      <th><span>ID Order</span></th>
                      <th class="desc"><span>Tanggal Order</span></th>
                      <th><span>Detail Order</span></th>
                      <th><span>Jumlah</span></th>
                      <th><span>Jumlah yg Belum dibayar</span></th>
                      <th><span>No. Resi</span></th>
                      <th><span>Status</span></th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>
                        {{prefixOrder()}}{{$order->kodeOrder}}
                      </td>
                      <td>
                        {{waktu($order->tanggalOrder)}}
                      </td>
                      <td class="desc">
                        <!-- <h4><a href="#" class="invarseColor">
                          Foliomania the designer
                        </a></h4>
                        <ul class="rating clearfix">
                          <li><i class="star-on"></i></li>
                          <li><i class="star-on"></i></li>
                          <li><i class="star-on"></i></li>
                          <li><i class="star-off"></i></li>
                          <li><i class="star-off"></i></li>
                        </ul>
                        <ul class="unstyled">
                          <li>Available In Stock</li>
                          <li>No. CtAw9458</li>
                        </ul> -->
                        <ul>
                          @foreach ($order->detailorder as $detail)
                          <li style="margin-left: 8px">{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku->opsi1.($detail->opsisku->opsi2 != '' ? ' / '.$detail->opsisku->opsi2:'').($detail->opsisku->opsi3 !='' ? ' / '.$detail->opsisku->opsi3:'').')':''}} - {{$detail->qty}}</li>
                          @endforeach
                        </ul>
                      </td>
                      <td class="quantity">
                        {{ jadiRupiah($order->total)}}
                      </td>
                      <td class="quantity">
                        {{($order->status==2 || $order->status==3) ? jadiRupiah(0) : jadiRupiah($order->total)}}
                      </td>
                      <td class="sub-price">
                        {{ $order->noResi}}
                      </td>
                      <td class="total-price">
                        @if($order->status==0)
                          <span class="label label-warning">Pending</span>
                        @elseif($order->status==1)
                          <span class="label label-important">Konfirmasi diterima</span>
                        @elseif($order->status==2)
                          <span class="label label-info">Pembayaran diterima</span>
                        @elseif($order->status==3)
                          <span class="label label-info">Terkirim</span>
                        @elseif($order->status==4)
                          <span class="label label-info">Batal</span>
                        @endif
                      </td>
                    </tr>
                    
                  </tbody>
                </table>
            <hr>
                @if($paymentinfo!=null)
                    <h3><center>Paypal Payment Details</center></h3><br>
                    <hr>
                    <table class='table table-bordered'>
                        <tr>
                            <td>Payment Status</td><td>:</td><td>{{$paymentinfo['payment_status']}}</td>
                        </tr>
                        <tr>
                            <td>Payment Date</td><td>:</td><td>{{$paymentinfo['payment_date']}}</td>
                        </tr>
                        <tr>
                            <td>Address Name</td><td>:</td><td>{{$paymentinfo['address_name']}}</td>
                        </tr>
                        <tr>
                            <td>Payer Email</td><td>:</td><td>{{$paymentinfo['payer_email']}}</td>
                        </tr>
                        <tr>
                            <td>Item Name</td><td>:</td><td>{{$paymentinfo['item_name1']}}</td>
                        </tr>
                        <tr>
                            <td>Receiver Email</td><td>:</td><td>{{$paymentinfo['receiver_email']}}</td>
                        </tr>
                        <tr>
                            <td>Total Payment</td><td>:</td><td>{{$paymentinfo['payment_gross']}} {{$paymentinfo['mc_currency']}}</td>
                        </tr>
                    </table>
                    <p>Thanks you for your order.</p>
                    <br>
                @endif  

                @if($order->jenisPembayaran==1)
                    <h3><center>Konfirmasi Form</center></h3><br>
                    {{Form::open(array('url'=> 'konfirmasiorder/'.$order->id, 'method'=>'put', 'class'=> 'form-horizontal'))}}    
                        <div class="registerbox">
                            <fieldset>

                                <div class="control-group">
                                    <label class="control-label"> Nama Pengirim:</label>
                                    <div class="controls">
                                        <input type="text" name='nama' value='{{Input::old("nama")}}' required class="input-xlarge">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label  class="control-label"> No Rekening:</label>
                                    <div class="controls">
                                        <input type="text" name='noRekPengirim' value='{{Input::old("noRekPengirim")}}' required class="input-xlarge">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label for="select01" class="control-label">
                                    Rekening Tujuan:</label>
                                    <div class="controls">
                                        <select name='bank' class="span3">
                                            <option value=''>-- Pilih Bank Tujuan --</option>
                                            @foreach ($banktrans as $bank)
                                            <option value="{{$bank->id}}">{{$bank->bankdefault->nama}} - {{$bank->noRekening}} - A/n {{$bank->atasNama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label  class="control-label"> Jumlah:</label>
                                    <div class="controls">
                                        <input type="text" name='jumlah' value='{{$order->total}}' required class="input-xlarge">
                                    </div>
                                </div>

                            </fieldset>
                        </div>
                        <div class="pull-right" style="float:right">
                        &nbsp;
                         <div class="control-group">
                            <div class="controls">
                              <input type="Submit" class="btn btn-primary" value="Konfirmasi Order">
                            </div>
                          </div><!--end control-group-->
                        <div style="clear:both; display:block; height:40px"></div>
                        </div>
                    {{Form::close()}}
                    <br>
                @endif

                @if($order->jenisPembayaran==2)
                    <h3><center>Konfirmasi Pemabayaran Via Paypal</center></h3><br>
                    <p>Silakan melakukan pembayaran dengan paypal Anda secara online via paypal payment gateway. Transaksi ini berlaku jika pembayaran dilakukan sebelum {{$expired}}. Klik tombol "Bayar Dengan Paypal" di bawah untuk melanjutkan proses pembayaran.</p>
                    {{$paypalbutton}}
                    <br>
                @endif
        </div><!--end span7-->


      </div><!--end row-->

    </div><!--end conatiner-->