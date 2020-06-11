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
                <tr>
                    <td><img src="{{asset('image/student.png')}}" alt="avatar" width="100px" height="100px"></td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                    <td>john@example.com</td>
                    <td> <a class="text-success" href="#"><i class="fas fa-user-alt-slash"></i></a> | <a href="#"><i class="fas fa-user-edit"></i></a></td>
                </tr>
                <tr>
                    <td>Mary</td>
                    <td>Moe</td>
                    <td>mary@example.com</td>
                    <td>mary@example.com</td>
                    <td>Out | Edit</td>
                </tr>
                <tr>
                    <td>July</td>
                    <td>Dooley</td>
                    <td>july@example.com</td>
                    <td>july@example.com</td>
                    <td>Out | Edit</td>
                </tr>
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