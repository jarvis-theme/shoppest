<div class="container">

      <div class="row">
        <h2>Member Area &nbsp;</h2>
        <div class="span12">
          <div id="cart-tab">

            <ul class="nav nav-tabs">
              <li class="active">
                <a href="#estimate" data-toggle="tab">My Order</a>
              </li>
              <li>
                <a href="#dis-code" data-toggle="tab">My Account</a>
              </li><!-- 
              <li>
                <a href="#gift-vouc" data-toggle="tab">Use Gift Voucher</a>
              </li> -->
            </ul>

            <div class="tab-content">

              <div class="tab-pane active" id="estimate">
                <table class="table">
                  <thead>
                    <tr>
                      <th><span>ID Order</span></th>
                      <th class="desc"><span>Tanggal Order</span></th>
                      <th><span>Detail Order</span></th>
                      <th><span>Total Order</span></th>
                      <th><span>No. Resi</span></th>
                      <th><span>Status</span></th>
                      <th><span>Konfirmasi</span></th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach ($order as $item)
                    <tr>
                      <td>
                        {{prefixOrder()}}{{$item->kodeOrder}}
                      </td>
                      <td>
                        {{waktu($item->tanggalOrder)}}
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
                          @foreach ($item->detailorder as $detail)
                          <li style="margin-left: 8px">{{@$detail->produk->nama}} {{@$detail->opsiSkuId !=0 ? '('.@$detail->opsisku->opsi1.(@$detail->opsisku->opsi2 != '' ? ' / '.@$detail->opsisku->opsi2:'').(@$detail->opsisku->opsi3 !='' ? ' / '.@$detail->opsisku->opsi3:'').')':''}} - {{@$detail->qty}}</li>
                          @endforeach
                        </ul>
                      </td>
                      <td class="sub-price">
                        {{ jadiRupiah($item->total)}}
                      </td>
                      <td class="quantity">
                        {{ $item->noResi}}
                      </td>
                      <td class="total-price">
                        @if($item->status==0)
                          <span class="label label-warning">Pending</span>
                        @elseif($item->status==1)
                          <span class="label label-important">Konfirmasi diterima</span>
                        @elseif($item->status==2)
                          <span class="label label-info">Pembayaran diterima</span>
                        @elseif($item->status==3)
                          <span class="label label-info">Terkirim</span>
                        @elseif($item->status==4)
                          <span class="label label-default">Batal</span>
                        @endif
                      </td>
                      <td>
                      	@if($item->status==0)
                        <button onclick="window.location.href='{{URL::to('konfirmasiorder/'.$item->id)}}'" class="btn btn-small btn-success" data-title="Edit" data-placement="top" data-tip="tooltip"><i class="icon-shopping-cart"></i></button>
                        @endif
                      </td>
                    </tr>
                    
                    @endforeach
                  </tbody>
                </table>
		          {{$order->links()}}
              </div><!--end tab-pane-->


              <div class="tab-pane" id="dis-code">
              {{Form::open(array('url'=>'member/update','method'=>'put','class'=>'form-horizontal'))}}
              <h3>Your Personal Details</h3><br>
              <div class="control-group">
                <fieldset>
                  <div class="control-group">
                    <label class="control-label"><span class="red">*</span> Nama:</label>
                    <div class="controls">
                      <input type="text" name="nama" value='{{$user->nama}}' required class="input-xlarge">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label"><span class="red">*</span> Email:</label>
                    <div class="controls">
                      <input type="text" name='email' value='{{$user->email}}' required class="input-xlarge">
                    </div>
                  </div>
                  
                </fieldset>
              </div>
              <h3>Your Address</h3><br>
              <div class="registerbox">
                <fieldset>
                  <div class="control-group">
                    <label for="select01" class="control-label">
                      <span class="red">*</span>Negara:</label>
                    <div class="controls">
                      {{Form::select('negara',array('' => '-- Pilih Negara --') + $negara , ($user ? $user->negara :(Input::old("negara")? Input::old("negara") :"")), array('required'=>'', 'id'=>'negara', 'class'=>'span3'))}}
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">
                      <span class="red">*</span>Provinsi:</label>
                    <div class="controls">
                      {{Form::select('provinsi',array('' => '-- Pilih Provinsi --') + $provinsi , ($user ? $user->provinsi :(Input::old("provinsi")? Input::old("provinsi") :"")),array('required'=>'','id'=>'provinsi', 'class'=>'span3'))}}
                    </div>
                  </div>
                   <div class="control-group">
                    <label class="control-label">
                      <span class="red">*</span>Kota:</label>
                    <div class="controls">
                      {{Form::select('kota',array('' => '-- Pilih Kota --') + $kota , ($user ? $user->kota :(Input::old("kota")? Input::old("kota") :"")),array('required'=>'','id'=>'kota', 'class'=>'span3'))}}
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label"> Alamat:</label>
                    <div class="controls">
                      <textarea class="span6" name='alamat' required>{{$user->alamat}}</textarea>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">
                      <span class="red">*</span>Kode Pos:</label>
                    <div class="controls">
                      <input type="text"  class="input-xlarge" name='kodepos' value='{{$user->kodepos}}' required>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">
                      <span class="red">*</span>Telepon / HP:</label>
                    <div class="controls">
                      <input type="text" name='telp' value='{{$user->telp}}' required class="input-xlarge">
                    </div>
                  </div>
                </fieldset>
              </div>
              <h3>Your Password</h3><br>
              <div class="registerbox">
                <fieldset>
                  <div class="control-group">
                    <label  class="control-label"><span class="red">*</span> Password Lama:</label>
                    <div class="controls">
                      <input type="password" name="oldpassword" class="input-xlarge">
                    </div>
                  </div>
                  <div class="control-group">
                    <label  class="control-label"><span class="red">*</span> Password Baru:</label>
                    <div class="controls">
                      <input type="password" name="password" class="input-xlarge">
                    </div>
                  </div>
                  <div class="control-group">
                    <label  class="control-label"><span class="red">*</span> Password Confirm::</label>
                    <div class="controls">
                      <input type="password" type="password" name="password_confirmation"  class="input-xlarge">
                    </div>
                  </div>
                </fieldset>
              </div>
              <div class="control-group">
                <div class="controls">
                  <input type="Submit" class="btn btn-primary" value="Update">
                </div>
              </div><!--end control-group-->
              </form>
              <br>
              
              </div><!--end dis-code-->


              <div class="tab-pane" id="gift-vouc">

                <form method="post" action="page" class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputVoucher">
                      <strong>Voucher Code</strong>
                      </label>
                    <div class="controls">
                      <input type="text" id="inputVoucher" placeholder="Inter Voucher Code...">
                    </div>
                  </div><!--end control-group-->
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn btn-primary">Apply Voucher </button>
                    </div>
                  </div><!--end control-group-->
                </form>
              </div><!--end gift-vouc-->

            </div><!--end tab-content-->

          </div><!--end cart-tab-->
        </div><!--end span7-->


      </div><!--end row-->

    </div><!--end conatiner-->


