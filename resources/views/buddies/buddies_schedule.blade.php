@extends('template.master')

@section('content')


        <div class="callout callout-info">
        </div>
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Buddies Schedule</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                		<tr>
	                		<th>Start Point</th>
	                		<th>End Point</th>
	                		<th>Created</th>
	                		<th>Modified</th>
	                	</tr>
                	<?php
                	if(!empty($time_schedule)){
	                	foreach ($time_schedule as $value){
	                ?>
	                	<tr>
	                		<td>{{$value['start']}}</td>
	                		<td>{{$value['end']}}</td>
	                		<td>{{$value['created']}}</td>
	                		<td>{{$value['modified']}}</td>
	                	</tr>
	                <?php 		
	                	}
                	}
                	?>
                </table>
            </div><!-- /.box-body -->
            <div class="box-footer">
                Footer
            </div><!-- /.box-footer-->
        </div><!-- /.box -->





@stop
