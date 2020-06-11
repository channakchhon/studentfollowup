<input class="form-control" id="searchOut" type="text" placeholder="Search..">
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
                    <th style="width:5%">Action</th>
                </tr>
            </thead>
            <tbody id="outTable">
                <tr>
                    <td><img src="{{asset('image/student.png')}}" alt="avatar" width="100px" height="100px"></td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                    <td>john@example.com</td>
                    <td> <a class="text-danger" href="#"><i class="fas fa-hospital-user"></i></a></td>
                </tr>               
            </tbody>
        </table>
    </div>
</div>


@push('scripts')
<script>
    $(document).ready(function(){
      $("#searchOut").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#outTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });

    });

</script>
@endpush 