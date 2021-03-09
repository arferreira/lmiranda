{{-- extend layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Pacientes')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/fullcalendar/css/fullcalendar.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/fullcalendar/daygrid/daygrid.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/fullcalendar/timegrid/timegrid.min.css')}}">
@endsection



{{-- page content --}}
@section('content')
<div class="section">
  <div class="card">
    <!-- <div class="card-content">
      <p class="caption mb-0">Tables are a nice way to organize a lot of data. We provide a few utility classes to help
        you style your table as easily as possible. In addition, to improve mobile experience, all tables on
        mobile-screen widths are centered automatically.</p>
    </div> -->
  </div>
  

  <!-- Responsive Table -->
  <div class="row">
    <div class="col s12 m12 l12">
      <div id="responsive-table" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Pacientes</h4>
          <div class="row">
            <div class="col s12">
            </div>
            <div class="col s12">
              <table class="responsive-table">
                <thead>
                  <tr>
                    <th data-field="id">Nome</th>
                    <th data-field="name">Telefone</th>
                    <th data-field="price">Whatsapp</th>
                    <th data-field="total">Data de Nascimento</th>
                    <th data-field="status">Última Consulta</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Antonio Ricardo Ferreira de Souza</td>
                    <td>(67) 98446-3583</td>
                    <td>(67) 98446-3583</td>
                    <td>20/11/1988</td>
                    <td>05/03/2021</td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div>
          <ul class="pagination center-align">
                <li class="disabled"><a href="#!"><i class="fc-icon fc-icon-chevron-left"></i></a></li>
                <li class="active"><a href="#!">1</a></li>
                <li class="waves-effect"><a href="#!">2</a></li>
                <li class="waves-effect"><a href="#!">3</a></li>
                <li class="waves-effect"><a href="#!">4</a></li>
                <li class="waves-effect"><a href="#!">5</a></li>
                <li class="waves-effect"><a href="#!"><i class="fc-icon fc-icon-chevron-right"></i></a></li>
                </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

