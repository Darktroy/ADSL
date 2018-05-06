@extends('crm.Master')
<!--content-->
<!--// Begin a section-->
 @section('content')
   @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div><br />
      @endif
<!--// End a section-->
<script src="../nicEdit/nicEdit.js" type="text/javascript"></script>
<script type="text/javascript">
bkLib.onDomLoaded(function() {
	new nicEditor({fullPanel : true}).panelInstance('article');
});
</script>
  <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{url('/crm/add-article')}}">
                            {{ csrf_field() }}
                        <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Title</label></div>
                            <div class="col col-sm-12"><input type="text" id="title" name="title" placeholder="Title" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Article</label></div>
                            <div class="col col-sm-12">
                                <!--<input type="text" cols="60"  id="article" name="article"/>-->
                                <textarea cols="60" id="article" name="article"></textarea>
                            </div>
                        </div>   
                          <div class="row form-group">
                            <div class="col col-sm-1"><label for="position_id" class=" form-control-label">Position</label></div>
                            <div class="col-12 col-sm-2">
                              <select name="position_id" id="position_id" class="form-control-sm form-control">
                                <option value="1">Left</option>
                                <option value="2">Center</option>
                                <option value="3">Right</option>
                              </select>
                            </div>
                          </div>
                    
<!--//        'position_id', 'article', 'title',-->
 <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
  </div>
                    </form>

 @stop