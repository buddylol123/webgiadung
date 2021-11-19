@extends('admin_layout')
@section('admin_content')
    

<div class="table-agile-info">
    <div class="panel panel-default">
    <div class="panel-heading">
      Responsive Table
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th ><a class="text-danger">Mã loại sản phẩm</a></th>
            <th><a class="text-danger">Tên loại sản phẩm</a></th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        @foreach($all_category as $key => $cat_pro)
        <tbody>
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $cat_pro->maloai }}</td>
            <td><span class="text-ellipsis">{{ $cat_pro->tenloai }}</span></td>
            
            <td>
<<<<<<< HEAD
              <a href="{{URL::to('/edit-category-product/'.$cat_pro->maloai)}}" class="active" ui-toggle-class=""><i class="fa fa-pencil text-info text-active"></i></a>
              <a onclick="return confirm('Bạn có muốn xóa không?')" href="{{URL::to('/delete-category-product/'.$cat_pro->maloai)}}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
=======
              <a href="" class="active" ui-toggle-class="">
                <i class="fa fa-pencil text-info text-active">
                  </i><i class="fa fa-times text-danger text"></i></a>
>>>>>>> 804b3dbf7c9e6f8a24b9c1044ef1ef24b3d6dc71
            </td>
         
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
    
</div>
@endsection