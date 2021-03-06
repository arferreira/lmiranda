{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Table Basic')

{{-- page style --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
@endsection

{{-- page content --}}
@section('content')
<div class="section">
  <div class="card">
    <div class="card-content">
      <!-- <p class="caption mb-0">Tables are a nice way to organize a lot of data. We provide a few utility classes to help
        you style your table as easily as possible. In addition, to improve mobile experience, all tables on
        mobile-screen widths are centered automatically.</p> -->
    </div>
  </div>
  <!-- Borderless Table -->
  <div class="row">
    <div class="col s12">
      <div id="borderless-table" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Borderless Table</h4>
                <p>Tables are borderless by default.</p>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-borderless-table">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-borderless-table">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-borderless-table">
            <div class="row">
              <div class="col s12">
                <table>
                  <thead>
                    <tr>
                      <th data-field="id">Name</th>
                      <th data-field="name">Item Name</th>
                      <th data-field="price">Item Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Alvin</td>
                      <td>Eclair</td>
                      <td>$0.87</td>
                    </tr>
                    <tr>
                      <td>Alan</td>
                      <td>Jellybean</td>
                      <td>$3.76</td>
                    </tr>
                    <tr>
                      <td>Jonathan</td>
                      <td>Lollipop</td>
                      <td>$7.00</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div id="html-borderless-table">
            <pre><code class="language-markup">
  &lt;table>
    &lt;thead>
    &lt;tr>
      &lt;th>Name&lt;/th>
      &lt;th>Item Name&lt;/th>
      &lt;th>Item Price&lt;/th>
    &lt;/tr>
    &lt;/thead>
    &lt;tbody>
    &lt;tr>
      &lt;td>Alvin&lt;/td>
      &lt;td>Eclair&lt;/td>
      &lt;td>$0.87&lt;/td>
    &lt;/tr>
    &lt;tr>
      &lt;td>Alan&lt;/td>
      &lt;td>Jellybean&lt;/td>
      &lt;td>$3.76&lt;/td>
    &lt;/tr>
    &lt;tr>
      &lt;td>Jonathan&lt;/td>
      &lt;td>Lollipop&lt;/td>
      &lt;td>$7.00&lt;/td>
    &lt;/tr>
    &lt;/tbody>
  &lt;/table>
  </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bordered Table -->
  <div class="row">
    <div class="col s12 m12 l12">
      <div id="bordered-table" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Bordered Table</h4>
          <p class="mb-2">Add <code class=" language-markup">class="bordered"</code> to the table tag for a
            bordered table</p>
          <div class="row">
            <div class="col s12">
            </div>
            <div class="col s12">
              <table class="bordered">
                <thead>
                  <tr>
                    <th data-field="id">Name</th>
                    <th data-field="name">Item Name</th>
                    <th data-field="price">Item Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Alvin</td>
                    <td>Eclair</td>
                    <td>$0.87</td>
                  </tr>
                  <tr>
                    <td>Alan</td>
                    <td>Jellybean</td>
                    <td>$3.76</td>
                  </tr>
                  <tr>
                    <td>Jonathan</td>
                    <td>Lollipop</td>
                    <td>$7.00</td>
                  </tr>
                  <tr>
                    <td>Shannon</td>
                    <td>KitKat</td>
                    <td>$9.99</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Striped Table -->
  <div class="row">
    <div class="col s12 m12 l12">
      <div id="striped-table" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Striped Table</h4>
          <p class="mb-2">Add <code class=" language-markup">class="striped"</code> to the table tag for a striped
            table</p>
          <div class="row">
            <div class="col s12">
            </div>
            <div class="col s12">
              <table class="striped">
                <thead>
                  <tr>
                    <th data-field="id">Name</th>
                    <th data-field="name">Item Name</th>
                    <th data-field="price">Item Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Alvin</td>
                    <td>Eclair</td>
                    <td>$0.87</td>
                  </tr>
                  <tr>
                    <td>Alan</td>
                    <td>Jellybean</td>
                    <td>$3.76</td>
                  </tr>
                  <tr>
                    <td>Jonathan</td>
                    <td>Lollipop</td>
                    <td>$7.00</td>
                  </tr>
                  <tr>
                    <td>Shannon</td>
                    <td>KitKat</td>
                    <td>$9.99</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Highlight Table -->
  <div class="row">
    <div class="col s12 m12 l12">
      <div id="highlight-table" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Highlight Table</h4>
          <p class="mb-2">Add <code class=" language-markup">class="Highlight"</code> to the table tag for a highlight
            table</p>
          <div class="row">
            <div class="col s12">
            </div>
            <div class="col s12">
              <table class="highlight">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Item Name</th>
                    <th>Item Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Alvin</td>
                    <td>Eclair</td>
                    <td>$0.87</td>
                  </tr>
                  <tr>
                    <td>Alan</td>
                    <td>Jellybean</td>
                    <td>$3.76</td>
                  </tr>
                  <tr>
                    <td>Jonathan</td>
                    <td>Lollipop</td>
                    <td>$7.00</td>
                  </tr>
                  <tr>
                    <td>Shannon</td>
                    <td>KitKat</td>
                    <td>$9.99</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Centered Table -->
  <div class="row">
    <div class="col s12 m12 l12">
      <div id="centered-table" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Centered Table</h4>
          <p class="mb-2">Add <code class=" language-markup">class="centered"</code> to the table tag to center align
            all the
            text in the table</p>
          <div class="row">
            <div class="col s12">
            </div>
            <div class="col s12">
              <table class="centered">
                <thead>
                  <tr>
                    <th data-field="id">Name</th>
                    <th data-field="name">Item Name</th>
                    <th data-field="price">Item Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Alvin</td>
                    <td>Eclair</td>
                    <td>$0.87</td>
                  </tr>
                  <tr>
                    <td>Alan</td>
                    <td>Jellybean</td>
                    <td>$3.76</td>
                  </tr>
                  <tr>
                    <td>Jonathan</td>
                    <td>Lollipop</td>
                    <td>$7.00</td>
                  </tr>
                  <tr>
                    <td>Shannon</td>
                    <td>KitKat</td>
                    <td>$9.99</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Responsive Table -->
  <div class="row">
    <div class="col s12 m12 l12">
      <div id="responsive-table" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Responsive Table</h4>
          <p class="mb-2">Add <code class=" language-markup">class="responsive-table"</code> to the table tag to make
            the table
            horizontally scrollable on smaller screen widths.</p>
          <div class="row">
            <div class="col s12">
            </div>
            <div class="col s12">
              <table class="responsive-table">
                <thead>
                  <tr>
                    <th data-field="id">Name</th>
                    <th data-field="name">Item Name</th>
                    <th data-field="price">Item Price</th>
                    <th data-field="total">Total</th>
                    <th data-field="status">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Alvin</td>
                    <td>Eclair</td>
                    <td>$0.87</td>
                    <td>$1.87</td>
                    <td>Yes</td>
                  </tr>
                  <tr>
                    <td>Alan</td>
                    <td>Jellybean</td>
                    <td>$3.76</td>
                    <td>$10.87</td>
                    <td>No</td>
                  </tr>
                  <tr>
                    <td>Jonathan</td>
                    <td>Lollipop</td>
                    <td>$7.00</td>
                    <td>$12.87</td>
                    <td>Yes</td>
                  </tr>
                  <tr>
                    <td>Shannon</td>
                    <td>KitKat</td>
                    <td>$9.99</td>
                    <td>$14.87</td>
                    <td>No</td>
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