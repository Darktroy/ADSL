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
                    <form class="form-horizontal" method="POST" action="{{url('/crm/add-provider')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="row form-group">
                            <div class="col col-sm-2"><label for="name" class=" form-control-label">Provider name</label></div>
                            <div class="col col-sm-8"><input type="text" name="name" placeholder="Provider name" class="form-control"></div>
                        </div>   
                            
                        <div class="row form-group">
                            <div class="col col-sm-2"><label for="input-normal" class=" form-control-label">Provider Site URL</label></div>
                            <div class="col col-sm-8"><input type="text" name="site_url" placeholder="URL" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                          <div class="col col-sm-2"><label for="logo" class=" form-control-label">Provider Logo</label></div>
                          <div class="col-12 col-sm-9"><input type="file" id="file-input" name="logo" class="form-control-file"></div>
                        </div>
                            
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