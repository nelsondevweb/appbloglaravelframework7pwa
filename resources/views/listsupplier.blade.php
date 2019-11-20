@extends('layouts.base')


@section('content')
<div class="page page-home">
  <div class="navbar">
      <div class="navbar-inner">
          <div class="left"><a href="#" class="link icon-only panel-open" data-panel="left">
            <i class="icon f7-icons if-not-md">menu</i>
            <i class="icon material-icons md-only">menu</i>
          </a></div>
          <div class="title">List of Supplier</div>
      </div>
  </div>

 <div class="page-content">

   <div class="list media-list">
  <ul>
    @foreach($suppliers as $supplier)
    <li>

      <div class="item-content">
        <div class="item-inner">
           <div class="item-title-row">


             <div class="item-title">Name : {{ $supplier->name}}</div>
             <div class="item-after">
               <form id="frm-modal-save-user" action="{{route('admin-delete-supplier', $supplier->id)}}" method="post">
                   <input type="hidden" name="_method" value="delete"/>
                   {{csrf_field()}}
                   <button type="submit" class="button button-fill"><i class="fa fa-close"></i></button>
               </form>
               </div>
           </div>

          <div class="item-text">Toko : {{ $supplier->nmbusiness}}</div>
          <div class="item-text">Alamat : {{ $supplier->address }}</div>
          <div class="item-text">Telp. : {{ $supplier->phone }} </div>

        </div>

      </div>
    </li>
    @endforeach

  </ul>
</div>

<div class="fab fab-right-bottom">
<a href="/add-supplier/">

 <i class="fa fa-plus"></i>
</a>

</div>

</div>



 </div>
 </div>


@endsection
