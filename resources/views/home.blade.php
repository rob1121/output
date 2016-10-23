@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <!-- TAB NAVIGATION -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#output" role="tab" data-toggle="tab">OUTPUT</a></li>
                    <li><a href="#rto" role="tab" data-toggle="tab">RTO</a></li>
                    <li><a href="#nrto" role="tab" data-toggle="tab">NRTO</a></li>
                    <li><a href="#tray" role="tab" data-toggle="tab">TRAY</a></li>
                    <li><a href="#mems" role="tab" data-toggle="tab">MEMs</a></li>
                </ul>
                <!-- TAB CONTENT -->
                <div class="tab-content">
                    <div class="active tab-pane fade in" id="output">
                        <h2>Tab1</h2>
                        <table class="table table-hover">
                        	<thead>
                        		<tr>
                                    <th>PACKAGE</th>
                                    <th>LOTS</th>
                                    <th>QUANTITY</th>
                        		</tr>
                        	</thead>
                        	<tbody>
                        		<tr>
                                    <td>a</td>
                                    <td>a</td>
                                    <td>a</td>
                        		</tr>
                        	</tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="rto">
                        <h2>Tab2</h2>
                        <p>Lorem ipsum.</p>
                    </div>
                    <div class="tab-pane fade" id="nrto">
                        <h2>Tab3</h2>
                        <p>Lorem ipsum.</p>
                    </div>
                    <div class="tab-pane fade" id="tray">
                        <h2>Tab3</h2>
                        <p>Lorem ipsum.</p>
                    </div>
                    <div class="tab-pane fade" id="mems">
                        <h2>Tab3</h2>
                        <p>Lorem ipsum.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
