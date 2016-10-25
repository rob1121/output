@extends('layouts.app')

@section('content')
    <div class="container" v-cloak>
        <div class="row" style="position:relative">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#output" role="tab" data-toggle="tab" @click="getOutput('output')">OUTPUT</a></li>
                        <li><a href="#rto" role="tab" data-toggle="tab"  @click="getOutput('rto')">RTO</a></li>
                        <li><a href="#nrto" role="tab" data-toggle="tab"  @click="getOutput('nrto')">NRTO</a></li>
                        <li><a href="#tray" role="tab" data-toggle="tab"  @click="getOutput('tray')">TRAY</a></li>
                        <li><a href="#mems" role="tab" data-toggle="tab"  @click="getOutput('mems')">MEMs</a></li>
                    </ul>
                    <div class="row" style="position:absolute;right: 16px;margin-top: 3px">
                        <label for="">Filter by date:</label>
                        <datepicker :readonly="true" format="YYYY-MM-DD"></datepicker>
                    </div>
                    <!-- TAB CONTENT -->
                    <div class="tab-content">
                        <div class="active tab-pane fade in" id="output">
                            <output-table :output="output.output">OUTPUT</output-table>
                        </div>

                        <div class="tab-pane fade" id="rto">
                            <output-table :output="output.rto">RTO</output-table>
                        </div>

                        <div class="tab-pane fade" id="nrto">
                            <output-table :output="output.nrto">NRTO</output-table>
                        </div>

                        <div class="tab-pane fade" id="tray">
                            <output-table :output="output.tray">TRAY</output-table>
                        </div>

                        <div class="tab-pane fade" id="mems">
                            <output-table :output="output.mems">MEMs</output-table>
                        </div>
                    </div>

        </div>
    </div>
@endsection
