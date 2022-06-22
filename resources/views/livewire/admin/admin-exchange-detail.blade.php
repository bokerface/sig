<div>
    {{ $student_id }}
    {{-- @php

        dd($exchanges);

    @endphp
     --}}
    {{-- <table class="table table-bordered">
        <tr>
            <td>Name</td>
            <td><strong>{{ $fullname }} ({{ $student_id }})</strong></td>
        </tr>
    </table>
    <form wire:submit.prevent="handleFormVerification">    
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Value</th>
                    <th>OK</th>
                    <th>Notes</th>
                </tr>
            </thead>
            @if($modalOpen)
                @foreach($metass as $meta)                        
                    <tr>
                        <td>{{ $meta->key }}</td>
                        <td><a href="{{ $meta->value }}"><i class="fas fa-file-pdf"></i><a></td>
                        <td class="text-center"><input type="checkbox" class="fieldOk" wire:click="handleFormVerification('2222', '{{ $exchange->id }}')"/></td>
                        <td><input type="text" class="form-control" /></td>
                    </tr>    
                @endforeach
            @endif
            <tr class="table-warning">                            
                <td colspan="3">Verification status</td>
                <td>
                    <select class="form-control">
                        <option value="">--Select status--</option>
                        <option value="1">Valid</option>
                        <option value="2">Need Revision</option>
                    </select>

                </td>
            </tr>
        </table>
    </form> --}}
</div>
