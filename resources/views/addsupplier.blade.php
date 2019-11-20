
<div id="app" class="page page-about">
  <div class="navbar">
    <div class="navbar-bg"></div>
    <div class="navbar-inner">
        <div class="left">
            <a href="#" class="link back">
                <i class="icon icon-back"></i>
            </a>
        </div>
        <div class="title">Add Supplier</div>

    </div>
</div>
  <div class="page-content">

    <div class="block block-strong">
      <form action="{{action('SupplierController@create')}}" method="POST">
        @csrf
      <div class="list no-hairlines-md">
  <ul>
    <li class="item-content item-input">
      <div class="item-inner">
        <div class="item-title item-floating-label">Name</div>
        <div class="item-input-wrap">
          <input name="name" id="name" type="text" placeholder="Enter name of supplier">
          <span class="input-clear-button"></span>
        </div>
      </div>
    </li>
    <li class="item-content item-input">
      <div class="item-inner">
        <div class="item-title item-floating-label">Name of Bussines</div>
        <div class="item-input-wrap">
          <input name="nmbusiness" id="nmbusiness" type="text" placeholder="Enter name of bussines supplier">
          <span class="input-clear-button"></span>
        </div>
      </div>
    </li>
      <li class="item-content item-input">
      <div class="item-inner">
        <div class="item-title item-floating-label">Address</div>
        <div class="item-input-wrap">
          <input name="address" id="address" type="text" placeholder="Enter name address of supplier">
          <span class="input-clear-button"></span>
        </div>
      </div>
    </li>
    <li class="item-content item-input">
      <div class="item-inner">
        <div class="item-title item-floating-label">Phone</div>
        <div class="item-input-wrap">
          <input name="phone" id="phone" type="text" placeholder="Enter phone number of supplier">
          <span class="input-clear-button"></span>
        </div>
      </div>
    </li>

  </ul>

</div>

<button  type="submit" class="button button-raised button-round button-fill button-large savesupplier">Save</button>
</form>
    </div>

  </div>
</div>
