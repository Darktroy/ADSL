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
                    <form class="form-horizontal" method="POST" action="{{url('/crm/add-offer')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            
                        <div class="row form-group">
                            <div class="col col-sm-2"><label for="title" class=" form-control-label">Title</label></div>
                            <div class="col col-sm-8"><input type="text" name="title" placeholder="title" class="form-control"></div>
                        </div>   

                        <div class="row form-group">
                            <div class="col col-sm-2"><label for="subtitle" class=" form-control-label">Sub-title</label></div>
                            <div class="col col-sm-8"><input type="text" name="subtitle" placeholder="sub-title" class="form-control"></div>
                        </div>   
                            
                            
                            
                            <div class="row form-group">
                            <div class="col col-md-9">
                              <div class="form-check">
                                <div class="checkbox">
                                  <label for="contract" class="form-check-label ">
                                    <input type="checkbox" id="contract" name="contract" value="1" class="form-check-input">Contract Offer
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                            
                            <div class="row form-group">
                            <div class="col col-md-9">
                              <div class="form-check">
                                <div class="checkbox">
                                  <label for="active" class="form-check-label ">
                                    <input type="checkbox" id="active" name="active" value="1" class="form-check-input">Active Offer
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                            
                            
                            
                            <div class="row form-group">
                            <div class="col col-sm-2">
                                <label for="provider_id" class=" form-control-label">Provider</label></div>
                            <div class="col col-sm-8">
                              <select name="provider_id" id="provider_id" class="form-control">
                                    @foreach ($providersList as $provider)
                                        <option value="{{$provider['id']}}">{{$provider['name']}}</option>
                                    @endforeach  
                              </select>
                            </div>
                          </div>
                        <div class="row form-group">
                            <div class="col col-sm-2"><label for="price" class=" form-control-label">Price </label></div>
                            <div class="col col-sm-2"><input type="number" name="price" placeholder="price " class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-sm-2"><label for="price_sub_title" class=" form-control-label">Price Title</label></div>
                            <div class="col col-sm-8"><input type="text" name="price_sub_title" placeholder="price title" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-sm-2"><label for="offer_url" class=" form-control-label">Offer Site URL</label></div>
                            <div class="col col-sm-8"><input type="text" name="offer_url" placeholder="" class="form-control"></div>
                        </div>
<!--                        <div class="row form-group">
                          <div class="col col-sm-2"><label for="logo" class=" form-control-label">Provider Logo</label></div>
                          <div class="col-12 col-sm-9"><input type="file" id="file-input" name="logo" class="form-control-file"></div>
                        </div>-->
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Features</label>
                                </div>
                            
                            <div class="col col-md-9">
                                <span>
                                    <small><a href="{{url('/crm/add-feature')}}" >if feature not listed please add it first</a></small>
                                    </span>
                              <div class="form-check">
                                     @foreach ($featureList as $feature)
                                <div class="checkbox">
                                   
                                  <label for="checkbox1" class="form-check-label ">
                                    <input type="checkbox" id="features" name="feature[]" value="{{$feature['id']}}" class="form-check-input">{{$feature['title']}}
                                  </label>
                                </div> 
                                @endforeach  
                              </div>
<!--                                    <span>
                                        <small> if feature not listed please add it first</small>
                                    </span>-->
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