<!-- Modal last month uploads list-->
<div class="modal fade bottom" id="modal_lastWeekUploads" tabindex="-1" role="dialog"
  aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog modal-full-height modal-bottom modal-notify modal-success" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading lead">PER PASTARASIAS 7 D. PATALPINTAS TURINYS</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div style="width:100%; height:40vh; overflow:auto;">
        <div class="modal-body">
        <table class="table cursor_pointer">
          <thead>
             <tr>
              <th scope="col">Pamokos #</th>
              <th scope="col">Pavadinimas</th>
              <th scope="col">Įkėlimo data</th>
              <th scope="col">Atnaujinimo data</th>
              <th scope="col">Autorius</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($upploadsLessonsInWeekGet as $lesson)                       
              <tr id="post" class="cursor_pointer" onclick="window.location='{{ route('lesson.review_id', $lesson->id) }}'">
                <th scope="row"><a href="{{route('lesson.review_id', $lesson->id)}}">{{ $loop->iteration }}</a></th>
                <td><a href="{{route('lesson.review_id', $lesson->id)}}">{{ $lesson->title }}</a></td>
                <td><a href="{{route('lesson.review_id', $lesson->id)}}">{{ $lesson->created_at }}</a></td>
                <td><a href="{{route('lesson.review_id', $lesson->id)}}">{{ $lesson->updated_at }}</a></td>
                <td><a href="{{route('lesson.review_id', $lesson->id)}}">{{ $lesson->author }}</a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
        <hr>

        <table class="table cursor_pointer">
          <thead>
             <tr>
              <th scope="col">Projekto #</th>
              <th scope="col">Pavadinimas</th>
              <th scope="col">Įkėlimo data</th>
              <th scope="col">Atnaujinimo data</th>
              <th scope="col">Autorius</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($upploadsPostsInWeekGet as $post)                       
              <tr id="post" class="cursor_pointer" onclick="window.location='{{ route('post.review_id', $post->id) }}'">
                <th scope="row"><a href="{{route('post.review_id', $post->id)}}">{{ $loop->iteration }}</a></th>
                <td><a href="{{route('post.review_id', $post->id)}}">{{ $post->title }}</a></td>
                <td><a href="{{route('post.review_id', $post->id)}}">{{ $post->created_at }}</a></td>
                <td><a href="{{route('post.review_id', $post->id)}}">{{ $post->updated_at }}</a></td>
                <td><a href="{{route('post.review_id', $post->id)}}">{{ $post->author }}</a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      </div>
      <!--Body-->
      <!--Footer-->
      <div class="modal-footer">
        <a href="{{route('admin.conmanager')}}" role="button" class="btn btn-success">PEREITI Į TURINIO VALDYMĄ
          <i class="fa fa-diamond ml-1"></i>
        </a>
        <a role="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">UŽDARYTI LANGĄ</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal last month uploads list-->