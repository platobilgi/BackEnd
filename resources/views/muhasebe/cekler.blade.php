@extends('layouts.master')
@section('content')
          <h3><i class="fa fa-angle-right"></i> Çekler</h3>
          <div class="col-md-12 mt">
                      <div class="content-panel">
                          <div style="margin:5px">
                              <form class="form-inline" role="form">
                                 <div class="form-group">
                                           <select class="form-control" style="width: 150px; ">
                                              <option>Filtrele</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                            </select>
                                  </div>
                                  <div class="form-group">
                                      <label class="sr-only" for="exampleInputEmail2">Ara...</label>
                                      <input type="email"  class="form-control" id="exampleInputEmail2" placeholder="Ara..." style="width: 550px;">
                                  </div>
                                    <button type="submit" class="btn btn-theme">ARA</button>
                                  <div class="form-group">
                                      <button type="submit" class="btn btn-theme">Yeni Fatura Oluştur</button>
                                  </div>
                              </form>
                          </div>
                            <table class="table table-hover">
                            <h4><i class="fa fa-angle-right"></i>Çekler</h4>
                            <hr>
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Simon</td>
                                    <td>Mosa</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
        </div>
@endsection
