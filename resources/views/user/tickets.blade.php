@extends('layouts.userlayout.master')


@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">My Tickets</h4>
                  <p class="card-description">
                  @if ($message = Session::get('success'))
                      <div class="alert alert-success">
                          <p>{{ $message }}</p>
                      </div>
                  @endif 
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            #ID
                          </th>
                          <th>
                            Subject
                          </th>
                          <th>
                            Service
                          </th>
                          <th>
                            Created At
                          </th>
                          <th>
                              Criticité
                          </th>
                          <th>
                          Status
                          </th>
	            					  <th>
                            Actions
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($tickets as $ticket)

                        <tr>
                                            <td class="py-1">
                                            {{ $ticket->ref }}                                            

                                            </td>
                                            <td>
                                            {{ $ticket->sujet }}                                            

                                           </td>
                                            <td>
                                            {{ $ticket->service }}                                            
                                          </td>
                                            <td>
                                            {{ $ticket->created_at }}                                            

                                            </td>
                                            <td>
                                            {{ $ticket->created_at }}                                            

                                            </td>
                                       
                                <td><label class="badge badge-danger">Pending</label></td>
                                <td>
                                <button type="button" class="btn btn-danger">Delete</button>
                                          <button type="button" class="btn btn-warning">Edit</button>
                              <button type="button" class="btn btn-info">Detailes</button>



                                            </td>
                         </tr>
                         @endforeach

                       
						
                 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
	
@endsection
