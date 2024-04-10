
@extends('layouts/app')


@section('content')

<table class="table">
    <thead>
      <tr>
        <th>Partenza da </th>
        <th>Arrivo a</th>
        <th>Orario di partenza</th>
        <th>Orario di arrivo</th>
        <th>Treno Nº</th>
        <th>In orario</th>
        <th>Cancellato</th>

        
      </tr>
    </thead>
    <tbody>
        @foreach ($trains as $train)
            <tr>
                
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
        @endforeach
    </tbody>
  </table>

        
@endsection