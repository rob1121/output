@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
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
                            <h2>Output</h2>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th class="text-center" colspan="2">Output</th>
                                    <th class="text-center" colspan="2">Commit</th>
                                    <th class="text-center" colspan="2">Delta</th>
                                </tr>
                                <tr>
                                    <th class="text-left">Package</th>
                                    <th class="text-right">Lot Quantity</th>
                                    <th class="text-right">Unit Quantity</th>
                                    <th class="text-right">Lot Quantity</th>
                                    <th class="text-right">Unit Quantity</th>
                                    <th class="text-right">Lot Quantity</th>
                                    <th class="text-right">Unit Quantity</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($packages as $package)
                                    <tr class="{{$package->highlight_reached_commit}}">
                                        <td class="text-left ">{{$package->package}}</td>
                                        <td class="text-right">{{ number_format( $package->output_lot_quantity_count ) }}</td>
                                        <td class="text-right">{{ number_format( $package->output_unit_quantity_count ) }}</td>
                                        <td class="text-right">{{ number_format( $package->commit->lot_quantity ) }}</td>
                                        <td class="text-right">{{ number_format( $package->commit->unit_quantity ) }}</td>
                                        <td class="text-right">{{ number_format( $package->delta_of_lot_quantity ) }}</td>
                                        <td class="text-right">{{ number_format( $package->delta_of_unit_quantity ) }}</td>
                                    </tr>
                                @endforeach
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
@endsection
