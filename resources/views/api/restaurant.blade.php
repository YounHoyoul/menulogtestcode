@forelse($data as $restaurant)
  <div class="item">
    <div class="row">
      <div class="col-xs-3 col-md-3">
        <a href="https://www.just-eat.co.uk/restaurants-{{$restaurant['UniqueName']}}">
          <img src="{{$restaurant['Logo'][0]?$restaurant['Logo'][0]['StandardResolutionURL']:''}}" />
        </a>
      </div>
      <div class="col-xs-6 col-md-6">
        <div class="row">
          <div class="col-xs-12">
            <a href="https://www.just-eat.co.uk/restaurants-{{$restaurant['UniqueName']}}">{{$restaurant['Name']}}</a>
          </div>
          <div class="col-xs-12 contents">
            <p>Rate : {{$restaurant['RatingAverage']}}</p>
            <ul>
             @foreach($restaurant['CuisineTypes'] as $type)
               <li>{{$type['Name']}}</li>
             @endforeach
            </ul>
          </div>
        </div>
      </div>
      <div class="col-xs-3 col-md-3">
        <a href="/api/menu/{{$restaurant['Id']}}" class="btn btn-default form-control btn-menu">Menu</a>
      </div>
    </div>
  </div>
@empty
  <div class="item">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h4>There is no results. Please check if postcode is valid.</h4>
      </div>
    </div>
  </div>
@endforelse
