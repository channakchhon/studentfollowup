<!-- Detail Modal -->
<div class="modal fade" id="detailModal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="background-color: #fdfdfd">

            <!-- Modal Header -->
            <div class="modal-header text-center" style="display: block;background-color:#e9ecef;">
                <img src="{{asset('image/student.png')}}" alt="avatar" width="100px" height="100px">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h2><strong>Chan DaraTy</strong> - Class2022A</h2>
                <br>
                <h3>Description</h3>
                <p>
                    She is historically slow learner and barely pass the exam since M2. 
                    In class she is pay attention ( not sleepy, note and ask some questions). 
                    She lack understanding the lessons of any subjects. 
                    We assign her with group and sit with help full friends. 
                    For her midterm exam, she has a bad result than we expected. 
                </p>
                <h5>Tutor By: Channak</h5>
                <hr>
                <div class="row bootstrap snippets">
                    <div class="col-md-12 col-md-offset-2 col-sm-12">
                        <div class="comment-wrapper">
                            <div class="panel panel-info">                                
                                <div class="panel-body">
                                    <textarea class="form-control" placeholder="Write a comment..." rows="3"></textarea>
                                    <br>
                                    <button type="button" class="btn btn-primary">Post</button>
                                    <div class="clearfix"></div>
                                    <br>
                                    {{-- <hr> --}}
                                    <ul class="media-list">
                                        <li class="media">
                                            <a href="#" class="pull-left">
                                                <img class="img-circle" src="{{asset('image/2.png')}}" alt="">
                                            </a>
                                            <div class="media-body">
                                                <strong>Sokchan</strong>
                                                <span class="text-muted pull-right">
                                                    <small class="text-muted">Dec 4, 2019 at 4:12 PM</small>
                                                </span>                                                
                                                <textarea id="comment" class="form-control" rows="3" readonly>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet.</textarea>
                                                <small><a id="editComment" onclick="edit()" href="#">Edit</a> | <a id="deleteComment" onclick="deleteComment()"  href="#">Delete</a></small>
                                            </div>
                                            
                                        </li>
                                        <li class="media">
                                            <a href="#" class="pull-left">
                                                <img src="https://bootdey.com/img/Content/user_2.jpg" alt="" class="img-circle">
                                            </a>
                                            <div class="media-body">                                                
                                                <strong>LaurenceCorreil</strong>
                                                <span class="text-muted pull-right">
                                                    <small class="text-muted">30 min ago</small>
                                                </span>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Lorem ipsum dolor <a href="#">#ipsumdolor </a>adipiscing elit.
                                                </p>
                                            </div>
                                        </li>
                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div> --}}

        </div>
    </div>
</div>

@push('scripts')

<script>
    var editClick = true;
    function edit(){
        console.log("edit...")
        if(editClick){
            $('#comment').prop('readonly', false)
            $('#comment').select()
            $('#editComment').text("Save")
            $('#deleteComment').text("Cancel")
        }else{
            $('#comment').prop('readonly', true)
            $('#editComment').text("Edit")
            $('#deleteComment').text("Delete")
        }
        editClick = !editClick
    }

    function deleteComment(){
        if(editClick){
            console.log("delete clicked....")
        }else{
            console.log("cancel clicked...")
            $('#comment').prop('readonly', true)
            $('#editComment').text("Edit")
            $('#deleteComment').text("Delete")
            editClick = !editClick
        }
    }
</script>
    
@endpush