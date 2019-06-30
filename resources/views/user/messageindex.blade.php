@extends('user.messagedashboard')

@section('content')
<h2 class="text-center py-2">Your Channels</h2>
{{-- <div class="container">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-sm table-hover table-bordered">
            
                @if (count($channels)>0)
                <thead class="thead-dark text-center">
                    <tr>
                        <th>ID</th>
                        <th>First User</th>
                        <th>Second User</th>
                        <th>Pet ID</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($channels as $channel)
                    <tr>
                        <td>{{$channel->id}}</td>
                        <td>{{$channel->first_user}}</td>
                        <td>{{$channel->second_user}}</td>
                        <td>{{$channel->pet_id}}</td>
                    </tr>
                @endforeach
                </tbody>
                @else
                    <div class="mx-auto mt-5" style="background:url({{asset('assets/landingimages/nopost.png')}});background-position:center;background-size:cover;height:220px; width:220px;"></div>
                    <p class="text-center">No Messages</p>
                @endif                
                <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
                <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
                <script>
                    $(".table").DataTable();
                </script>
            </table>
        </div>
    </div>
</div> --}}
@endsection