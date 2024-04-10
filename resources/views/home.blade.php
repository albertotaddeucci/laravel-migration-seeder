
@extends('layouts/app')


@section('content')

<div class="container">
    
    <table class="table border border-5 border-dark table-hover  ">
        <thead>
          <tr>
            <th class="text-center">Giorno di partenza </th>
            <th class="text-center ">Partenza da </th>
            <th class="text-center ">Arrivo a</th>
            <th class="text-center ">Orario di partenza</th>
            <th class="text-center ">Orario di arrivo</th>
            <th class="text-center ">Treno Nº</th>
            <th class="text-center ">Stato</th>
            
          </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)                
                <tr @class(['table-warning'=> $train->on_schedule,'table-danger'=> $train->is_cancelled]) >
                    <td class="text-center">
                        {{$train->departure_day}}
                    </td>
                    
                    <td class="text-center">
                        {{$train->departure_station}}
                    </td>
                    <td class="text-center">
                        {{$train->arrival_station}}
                    </td>
                    <td class="text-center">
                        {{$train->departure_time}}
                    </td>
                    <td class="text-center">
                        {{$train->arrival_time}}
                    </td>
                    
                    <td class="text-center">
                        {{$train->train_code}}
                    </td>
                    <td class="text-center fw-bold">
                        {{$train->on_schedule}}
                        {{$train->is_cancelled}}
                    </td>
                    
                    
                                        
                </tr>
            @endforeach
        </tbody>
      </table>
</div>

        
@endsection