@extends('layouts.adminlayout.master')


@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Requests</h4>
                  <p class="card-description">
                    ID 
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
                            Assigned To 
                          </th>
                          <th>
                            Created At
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
                        <tr>
                          <td class="py-1">
                           1
                          </td>
                          <td>
                            Herman Beck  
                          </td>
                          <td>
                              Technician 1
                          </td>
                          <td>
                            $ 77.99
                          </td>
						  <td><label class="badge badge-danger">Pending</label></td>
						  <td>
                          <button type="button" class="btn btn-danger">Delete</button>
                          <button type="button" class="btn btn-dark">Edit</button>

                          <button type="button" class="btn btn-warning">Confrim</button>

                        <button type="button" class="btn btn-success">Solved</button>
						<button type="button" class="btn btn-info">Detailes</button>


                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                               2
                          </td>
                          <td>
                            Messsy Adam
                          </td>
                          <td>
						  Technician 2

                          </td>
                          <td>
                            $245.30
                          </td>
						  <td><label class="badge badge-warning">In progress</label></td>
						  <td>   
                          <button type="button" class="btn btn-danger">Delete</button>
                          <button type="button" class="btn btn-dark">Edit</button>

                          <button type="button" class="btn btn-warning">Confrim</button>

                        <button type="button" class="btn btn-success">Solved</button>
						<button type="button" class="btn btn-info">Detailes</button>

					</td>

                        </tr>
						<tr>
                          <td class="py-1">
                           1
                          </td>
                          <td>
                            Herman Beck
                          </td>
                          <td>
						  Technician 3

                          </td>
                          <td>
                            $ 77.99
                          </td>
						  <td><label class="badge badge-success">Fixed</label></td>
						  <td>				     
                          <button type="button" class="btn btn-danger">Delete</button>
                          <button type="button" class="btn btn-dark">Edit</button>

                          <button type="button" class="btn btn-warning">Confrim</button>

                        <button type="button" class="btn btn-success">Solved</button>
						<button type="button" class="btn btn-info">Detailes</button>
					</td>
						  
                        </tr>
                 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
	
@endsection
