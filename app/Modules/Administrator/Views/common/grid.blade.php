                            <!-- START DEFAULT DATATABLE -->
                                <div class="panel-body">
                                    <table class="table datatable table-actions">
                                        <thead>
                                            <tr>
                                                @foreach($grid['columns'] as $th)
                                                <th>{{$th['label']}}</th>
                                                @endforeach
                                                    <th width="100">ACTIONS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($id = 1)
                                            @foreach($tds as $td)
                                            <tr id="trow_{{$id}}">
                                                @foreach($grid['columns'] as $key=>$value)
                                                <td>{{$td->$key}}</td>
                                                @endforeach
                                                <td style="width: 10%;">
                                                    @foreach($grid['urls'] as $action=>$url)
                                                        <a href="{{url($url['url'].'/'.$td->id)}}" class="btn @if($action=='deleteUrl') btn-danger delete_row @else btn-default  @endif btn-rounded btn-sm" data-row="trow_{{$id}}"><span class="{{$url['icon']}}"></span></a>
                                                    @endforeach
                                                </td>
                                            </tr>
                                            @php($id++)
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            <!-- END DEFAULT DATATABLE -->
