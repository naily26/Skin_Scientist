@extends('master')
@section('content')
<div id="service"  class="service">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2> <img src="images/head.png" alt="#"/> Check Your Answer</h2>
             </div>
          </div>
          <div class="col-md-12">
              <form>
                <table class="table table-striped ">
                    <thead>
                      <tr>
                        <th>Gejala</th>
                        <th>Nilai</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Kulit berminyak</td>
                        <td>
                          <div class="form-group">
                              tidak tahu
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Mary</td>
                        <td>Moe</td>
                      </tr>
                      <tr>
                        <td>July</td>
                        <td>Dooley</td>
                      </tr>
                    </tbody>
                  </table>
                  <a href="/select"><button type="button" class="btn btn-secondary">Reset</button></a>
                  <a href="/result"><button type="button" class="btn btn-danger right">Next</button></a>
              </form>
          </div>
       </div>
      
    </div>
 </div>
@endsection