
<div id="app" class="page page-about">
  <div class="navbar">
    <div class="navbar-bg"></div>
    <div class="navbar-inner">
        <div class="left">
            <a href="#" class="link back">
                <i class="icon icon-back"></i>
            </a>
        </div>
        <div class="title">Add Product</div>

    </div>
</div>
  <div class="page-content">

    <div class="block block-strong">
      <form action="{{action('ProductController@create')}}" method="POST">
        @csrf
        <div class="list no-hairlines-md">
        <ul>
          <li>
            <div class="item-content item-input">
              <div class="item-inner">
                <div class="item-title item-label">Title</div>
                <div class="item-input-wrap">
                  <input type="text" name="title" placeholder="Fill title of product...">
                  <span class="input-clear-button"></span>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="item-content item-input">
              <div class="item-inner">
                <div class="item-title item-label">Price</div>
                <div class="item-input-wrap">
                  <input type="number" name="price" placeholder="Fill price of product ..">
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="item-content item-input">
              <div class="item-inner">
                <div class="item-title item-label">Amount</div>
                <div class="item-input-wrap">
                  <input type="number" name="amount" placeholder="Fill amount of product ..">
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="item-content item-input">
              <div class="item-inner">
                <div class="item-title item-label">Supplier</div>
                <div class="item-input-wrap">
                  <select name="supplier">
                    @foreach($suppliers as $supplier)
                    <option value="{{ $supplier->id }}" selected>{{ $supplier->name }}</option>
                    @endforeach
                  </select>
                </div>
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
