<x-admin.app title="Exchange">

    <div class="card shadow mb-4">      
        <div class="card-body">
            <div class="table-responsives">
                <table class="table table-bordered" id="dataTable" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Student Id</th>
                            <th>Name</th>
                            <th style="width:120px;">&nbsp;</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        @php $i = 1 @endphp

                        @foreach ($exchanges as $exchange)
                            
                       
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $exchange->student_id; }}</td>
                            <td>{{ $exchange->student_id; }}</td>
                            <td>
                                <a href="{{ route('exchangedetail', $exchange->id) }}" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>

                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-admin.app>