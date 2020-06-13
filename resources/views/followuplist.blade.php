<input class="form-control" id="followupSearch" type="text" placeholder="Search..">
<br>
<div class="row">
    <div class="col-12">
        <table class="table table-bordered table-hover">
            <thead class="thead-light">
                <tr>
                    <th style="width:10%">Picture</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Class</th>
                    <th style="width:10%">Action</th>
                </tr>
            </thead>
            <tbody id="followupTable">
                @if (count($students)>0)
                    @foreach ($students as $student)
                        <tr>
                            <td><img src="{{asset('image/'.$student->picture)}}" alt="avatar" width="100px" height="100px"></td>
                            <td>{{$student->firstName}}</td>picture>
                            <td>{{$student->lastName}}</td>
                            <td>{{$student->class}}</td>
                            <td> <a class="text-success" data-toggle="tooltip" data-placement="bottom" title="Out from Followup" href="#"><i class="fas fa-user-alt-slash"></i></a> | <a href="#" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fas fa-user-edit"></i></a></td>
                        </tr>  
                    @endforeach
                    
                @endif
                             
            </tbody>
        </table>
    </div>
</div>

{{-- @include('followupdetail') --}}

@push('scripts')
<script>
    $(document).ready(function(){
      $("#followupSearch").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#followupTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });

      $('#followupTable tr td:not(:last-child)').click(function () {
        showDetail()
      });
      $('#outTable tr td:not(:last-child)').click(function () {
        showDetail()
      });
    
    });

    function showDetail(){
        $('#detailModal').modal('show')
        console.log("showdetail...")
    }
</script>
@endpush