@extends('master')
@section('content')
<div id="service" class="service">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2> <img src="images/head.png" alt="#" /> Fill The Form</h2>
                </div>
            </div>
            <div class="col-md-12">
                <form>
                    <table class="table table-striped ">
                        <thead>
                            <tr>
                                <th>Gejala</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                          @php $arrFix = []; @endphp
                            @foreach($gejala as $key => $item)
                            <tr>
                                <td style="width: 50%">{{$item->nama_gejala}}</td>
                                <td style="width: 50%">
                                        @php $arr = [];
                                        $arr[0] = 'Tidak Tahu';
                                        $arr[1] = 'Kemungkinan';
                                        $arr[2] = 'Kemungkinan Besar';
                                        $arr[3] = 'Hampir Pasti';
                                        $arr[4] = 'Pasti';
                                        
                                        @endphp
                                      @if(isset($getAnswer[$item->ID]))
                                          @php $v = $getAnswer[$item->ID]; 
                                               $arrFix[$item->ID] = $v;
                                               $values = '';
                                          @endphp
                                          @switch($v)
                                              @case(0)
                                                @php  $values = $arr[0]; @endphp
                                              @break
                                              @case(0.4)
                                                @php  $values = $arr[1]; @endphp
                                              @break
                                              @case(0.6)
                                                @php  $values = $arr[2]; @endphp
                                              @break
                                              @case(0.8)
                                                @php  $values = $arr[3]; @endphp
                                              @break 
                                              @default
                                                @php  $values = $arr[4]; @endphp
                                          @endswitch
                                         {{$values}}
                                      @else
                                        @php $arrFix[$item->ID] = 0; @endphp
                                         Tidak Tahu
                                      @endif
                                </td>
                              </div>
                            </td>
                          </tr>
                    @endforeach
                  </tbody>
                </table>
                  @php Session::put('arrFixKonsul',$arrFix); @endphp
                  <a href="/service_result"><button type="button" class="btn btn-danger right">Next</button></a>
            </form>
        </div>
    </div>
</div>
</div>
<!-- service -->
@endsection
@section('script')
<script>
    function getResponden(bobot, id) {
        $.ajax({
            type: 'get',
            url: "{{url('service_get_bobot')}}" + "/" + bobot+"/"+id,
            dataType: 'json',
            success: function (data) {
               console.log(data);
            },
            error: function (data) {
                console.log(data);
            }
        });

    }

</script>

@endsection
