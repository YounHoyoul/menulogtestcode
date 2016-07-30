@foreach($data as $menu)
  <div class="row">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h3> Menu of :RestaurantName</h3>
    </div>
    @foreach($menu['Categories'] as $category) 
      <div class="col-md-8 col-md-offset-2">
        <h4>{{$category['Name']}}</h4>
        @foreach($category['Products'] as $product)
          <div class="row">
            <div class="col-md-8">
              {{$product['Synonym']}} {{$product['Name']}}
            </div>
            <div class="col-md-4 text-right">
              £{{number_format($product['Price'],2)}}
            </div>
          </div>
        @endforeach
      </div>
    @endforeach
  </div>
@endforeach
