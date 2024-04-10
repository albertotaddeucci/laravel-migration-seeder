
@extends('layouts/app')


@section('content')

<div class="container">
    
    <h1 class="text-center py-5">Treni</h1>
    <table class="table">
        <thead>
          <tr>
            <th>Giorno di partenza </th>
            <th>Partenza da </th>
            <th>Arrivo a</th>
            <th>Orario di partenza</th>
            <th>Orario di arrivo</th>
            <th>Treno Nº</th>
            <th></th>
            <th></th>
            
          </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
            @if ($train->departure_day > now())
                <tr>
                    <td>
                        {{$train->departure_day}}
                    </td>
                    
                    <td>
                        {{$train->departure_station}}
                    </td>
                    <td>
                        {{$train->arrival_station}}
                    </td>
                    <td>
                        {{$train->departure_time}}
                    </td>
                    <td>
                        {{$train->arrival_time}}
                    </td>
                    
                    <td>
                        {{$train->train_code}}
                    </td>
                    <td>
                        {{$train->on_schedule}}
                    </td>
                    <td>
                        {{$train->is_cancelled}}
                    </td>
                    
                    
                    
                </tr>
                @endif
            @endforeach
        </tbody>
      </table>
</div>

        
@endsection