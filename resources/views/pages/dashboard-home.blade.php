{{-- extend layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Agenda')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/fullcalendar/css/fullcalendar.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/fullcalendar/daygrid/daygrid.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/fullcalendar/timegrid/timegrid.min.css')}}">
@endsection

{{-- page styles --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/app-calendar.css')}}">
@endsection

{{-- page content --}}
@section('content')
<div id="app-calendar">
  <div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-content">
          <h4 class="card-title center-align">
          <!-- <a class="waves-effect waves-light  btn"><span class="fc-icon fc-icon-chevron-left"></span></a> -->
          <ul class="pagination">
            <li class="waves-effect"><a href="#!"><span class="fc-icon fc-icon-chevron-left"></span></a></li>
            <li class="waves-effect"><a href="#!">{{ Helper::hoje() }}</a></li>
            <li class="waves-effect"><a href="#!"><span class="fc-icon fc-icon-chevron-right"></span></a></li>
          </ul>
           
          <!-- <a class="waves-effect waves-light  btn"><span class="fc-icon fc-icon-chevron-right"></span> </a> -->
          </h4>
          
          <div id="baasic-calendar">
          <div class="collection">
          <table class="responsive-table">
    <thead>
    <tr>
      <th>Horário</th>
      <th>Paciente</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td>{{ Helper::montaAgenda() }}</td>
      <td>PEDRO SILVA PINTO - Clínica Geral </td>
    </tr>
    <tr>
      <td>Jonathan</td>
      <td>LUIZ CARLOS DE OLIVEIRA - Clínica Geral </td>
    </tr>
    </tbody>
  </table>
        </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>
@endsection

{{--vendor scripts  --}}
@section('vendor-script')
<script src="{{asset('vendors/fullcalendar/lib/moment.min.js')}}"></script>
<script src="{{asset('vendors/fullcalendar/js/fullcalendar.min.js')}}"></script>
<script src="{{asset('vendors/fullcalendar/daygrid/daygrid.min.js')}}"></script>
<script src="{{asset('vendors/fullcalendar/timegrid/timegrid.min.js')}}"></script>
<script src="{{asset('vendors/fullcalendar/interaction/interaction.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-script')
<script src="{{asset('js/scripts/app-calendar.js')}}"></script>
@endsection