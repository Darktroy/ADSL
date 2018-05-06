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
                    <form class="form-horizontal" method="POST" action="{{url('/crm/add-feature')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
        <!--'','','','active'-->
                        
                            
                        <div class="row form-group">
                            <div class="col col-sm-2"><label for="title" class=" form-control-label">Tittle</label></div>
                            <div class="col col-sm-8"><input type="text" name="title"  class="form-control"></div>
                        </div>   
                        <div class="row form-group">
                            <div class="col col-sm-2"><label for="description" class=" form-control-label">Description</label></div>
                            <div class="col col-sm-8"><textarea type="text" name="description"  class="form-control"></textarea></div>
                        </div>
        
                        <div class="row form-group">
                          <div class="col col-sm-2"><label for="image" class=" form-control-label">image</label></div>
                          <div class="col-12 col-sm-9"><input type="file" id="file-input" name="image" class="form-control-file"></div>
                        </div>
        
                        <div class="row form-group">
                            <div class="col col-sm-2">
                                <label for="devision" class=" form-control-label">Devision</label></div>
                            <div class="col col-sm-8">
                                <select name="devision" id="provider_id" class="form-control">
                                    <option value="1">1</option>  
                                    <option value="2">2</option>  
                                    <option value="3">3</option>  
                                </select>
                            </div>
                          </div>
                        <div class="row form-group">
                            <div class="col col-sm-2">
                                <label for="active" class=" form-control-label">Active</label></div>
                            <div class="col col-sm-8">
                                <select name="active" id="active" class="form-control">
                                    <!--<option value="" >Select </option>-->  
                                    <option value="1" >Active feature</option>  
                                    <option value="0">Not Active feature</option>  
                                </select>
                            </div>
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