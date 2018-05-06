@extends('crm.Master')
<!--content-->
<!--// Begin a section-->
 @section('content')
<!--  ->with('offers',$offers)

                ->with

                ->with(

                ->with();

-->
  <div class="col-lg-6">
                    <div class="card">
<!--                        ('articles',$articles)
                    'position_id', 'article', 'title',-->
                        <div class="card-header">
                            <strong class="card-title">Articles</strong>
                            <!--'position_id', 'article', 'title',-->
                        </div>
                        <div class="card-body">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Title</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($articles as $key => $value)
                                <tr>
                                      <td>{{$value->title}}</td>
                                </tr>
                             @endforeach   
                            </tbody>
                        </table>
                        </div>
                    </div>
      
      
                    <div class="card">
<!--                        'provider',$provider) 4
                    "id" => $value['id'],
                    "name" => $value['name']);,-->
                        <div class="card-header">
                            <strong class="card-title">Providers</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Name</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($provider as $pkey => $pvalue)
                                <tr>
                                      <td>{{$pvalue['name']}}</td>
                                </tr>
                             @endforeach   
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <div class="card">
<!--                       'features'
                    'id'=>$value['id'],'title'=>$value['title'],
                    'active'=>$value['active']-->
                        <div class="card-header">
                            <strong class="card-title">Features</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Title</th>
                                  <th scope="col">Status</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($features as $key => $value)
                                <tr>
                                      <td>{{$value['title']}}</td>
                                        @if($value['active'] == 1)
                                            <td>Active</td>
                                        @else
                                            <td>Not active</td>
                                        @endif
                                </tr>
                             @endforeach   
                            </tbody>
                        </table>
                        </div>
                    </div>
      
                </div>
 
 
<!--// End a section-->
 @stop