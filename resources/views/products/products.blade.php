@extends('layouts.app')
@section('title')
    المنتجات
@stop
@section('content')
<div class="modal-body">
  <form class="form-inline ml-3" method="post"  action="{{route('searsh')}}" >    <!--{{ url('seash') }}-->
    {{csrf_field()}}
    <div class="form-group">
   

    <div class="input-group input-group-sm">

        <input  name="searsh" value="" class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search"> &nbsp; &nbsp; &nbsp;
          <select name="searh_type" id="searh_type">
            <option value="1">رقم المنتج</option>
             <option value="2">اسم المنتج</option>
             <option value="3">اسم المورد</option>
             <option value="4">نوع المنتج</option>

            
          </select>
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div> 
      </div>
    </form>
</div>
<div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th class="border-bottom-0">#</th>
                <th class="border-bottom-0">اسم المنتج</th>
                <th class="border-bottom-0">رقم المنتج</th>
                <th class="border-bottom-0">اسم المورد</th>
                <th class="border-bottom-0">النوع</th>
                <th class="border-bottom-0">السعر</th>


            </tr>
            </thead>
            <tbody>
            <?php $i = 0; ?>
            @foreach($products as $Product)
                <?php $i++; ?>

                <tr>
                    <td>{{$i}}</td>
                    <td>{{ $Product->Product_name }}</td>
                    <td>{{ $Product->Product_number}}</td>
                    <td>{{ $Product->vendors->vendor_name }}</td>
                    <td>{{ $Product->category->category_name }}</td>
                     <td>{{$Product->Product_price}}</td>
                </tr>

            @endforeach
            </tbody>

        </table>
    </div>
@endsection






