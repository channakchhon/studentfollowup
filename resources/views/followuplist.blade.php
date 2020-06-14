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
                    <td>{{$student->firstName}}</td>
                    <td>{{$student->lastName}}</td>
                    <td>{{$student->class}}</td>
                    <td> 
                        <a class="text-success" data-toggle="tooltip" data-placement="bottom" title="Out from Followup"
                            href="#"><i class="fas fa-user-alt-slash"></i></a> |
                        <a 
                            data-fname="{{$student->firstName}}" 
                            data-lname="{{$student->lastName}}" 
                            data-clss="{{$student->class}}" 
                            data-tutor="{{$student->user_id}}" 
                            data-description="{{$student->description}}" 
                            data-picture="{{asset('image/'.$student->picture)}}" 
                            {{-- data-pichidden="{{$student->picture}}"  --}}
                            data-url="{{route('students.update',$student->id)}}"
                            data-toggle="modal" data-target="#editModal"
                            {{-- onclick="editStudent({{$student->id}},event)"  --}}
                            href="#"
                            data-toggle="tooltip"
                            data-placement="bottom" title="Edit">
                            <i class="fas fa-user-edit"></i>
                        </a>
                    </td>
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

      $('#editModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var url = button.data('url')
            var fname = button.data('fname')
            var lname = button.data('lname')
            var clss = button.data('clss')
            var tutor = button.data('tutor')
            var description = button.data('description')
            var picture = button.data('picture')
            // var picHidden = button.data('pichidden')
            // console.log("pichidden"+picHidden)
            var modal = $(this)
            modal.find('#fname').val(fname)
            modal.find('#lname').val(lname)
            modal.find('#description').val(description)
            $("#editForm").attr('action',url)
            $('#clss').val(clss)
            $('#tutor').val(tutor)
            // $('#picHidden').val(picHidden)
            $('#picStudent').attr('src',picture)            
            console.log("url"+url)
       });
       $("#picture").change(function(){
        readURL(this);
        // console.log("picture changess...."+$("#picture").val())
        // $('#picHidden').val(this.value())
        });
    
    });

    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#picStudent').attr('src', e.target.result);           
        }

        reader.readAsDataURL(input.files[0]);
    }

    
}

    function showDetail(){
        $('#detailModal').modal('show')
        console.log("showdetail...")
    }

    // function editStudent(id,event){
    //     event.preventDefault()        
    //     console.log("id"+id)
    //     // $('#editModal').modal('show')
      
        
    // }
   
</script>
@endpush