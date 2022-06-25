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
                            @foreach($gejala as $key => $item)
                            <tr>
                                <td style="width: 50%">{{$item->nama_gejala}}</td>
                                <td style="width: 50%">
                                    <div class="row">
                                        @php $arr = [];
                                        $arr['value'][0] = 'Tidak Tahu';
                                        $arr['value'][1] = 'Kemungkinan';
                                        $arr['value'][2] = 'Kemungkinan Besar';
                                        $arr['value'][3] = 'Hampir Pasti';
                                        $arr['value'][4] = 'Pasti';

                                        $arr['number'][0] = 0;
                                        $arr['number'][1] = 0.4;
                                        $arr['number'][2] = 0.6;
                                        $arr['number'][3] = 0.8;
                                        $arr['number'][4] = 1.0;
                                        @endphp

                                        @for($i=0; $i<=4; $i++) <div class="col">
                                            <input type="radio" id="val-{{$i}}-{{$item->ID}}" value="{{$i}}-{{$item->ID}}" name="bobot-{{$item->ID}}"
                                                onchange="getResponden('<?php echo $arr['number'][$i]?>','<?php echo $item->ID?>')">
                                            <label for="age{{$i}}-{{$item->ID}}">
                                                {{$arr['value'][$i]}}
                                            </label>
                                    </div>
                                    @endfor

            </div>
            </td>
            </tr>
            @endforeach
            </tbody>
            </table>
            <a href="/service_summary"><button type="button" class="read_more">Next</button></a>
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
