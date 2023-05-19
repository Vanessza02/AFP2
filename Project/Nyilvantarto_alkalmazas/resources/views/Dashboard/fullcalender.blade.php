<head>
    <title>Laravel Fullcalender</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
  </head>

@extends('layouts.index')

@section('content')
 
 
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
   
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" />
   
  <script src="https://cdn.jsdelivr.net/npm/moment@2.27.0/moment.min.js"></script>
   
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
<div class="content-page">

            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <h4 class="page-title">Naptár</h4>
                                <div class="container">
                                    <div id='calendar'></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end page-title -->
                    </div>
                    <!-- end row -->

                    <!-- START ROW -->
                    
                    <script>
                        $(document).ready(function () {
                        var SITEURL = "{{url('/')}}";
                        $.ajaxSetup({
                        headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                        });
                        var calendar = $('#calendar').fullCalendar({
                        editable: true,
                        events: SITEURL + "fullcalendar",
                        displayEventTime: true,
                        editable: true,
                        eventRender: function (event, element, view) {
                        if (event.allDay === 'true') {
                        event.allDay = true;
                        } else {
                        event.allDay = false;
                        }
                        },
                        selectable: true,
                        selectHelper: true,
                        select: function (start, end, allDay) {
                        var title = prompt('Event Title:');
                        if (title) {
                        var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                        var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                        $.ajax({
                        url: SITEURL + "fullcalendar/create",
                        data: 'title=' + title + '&start=' + start + '&end=' + end,
                        type: "POST",
                        success: function (data) {
                        displayMessage("Added Successfully");
                        }
                        });
                        calendar.fullCalendar('renderEvent',
                        {
                        title: title,
                        start: start,
                        end: end,
                        allDay: allDay
                        },
                        true
                        );
                        }
                        calendar.fullCalendar('unselect');
                        },
                        eventDrop: function (event, delta) {
                        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                        $.ajax({
                        url: SITEURL + 'fullcalendar/update',
                        data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,
                        type: "POST",
                        success: function (response) {
                        displayMessage("Updated Successfully");
                        }
                        });
                        },
                        eventClick: function (event) {
                        var deleteMsg = confirm("Do you really want to delete?");
                        if (deleteMsg) {
                        $.ajax({
                        type: "POST",
                        url: SITEURL + 'fullcalendar/delete',
                        data: "&id=" + event.id,
                        success: function (response) {
                        if(parseInt(response) > 0) {
                        $('#calendar').fullCalendar('removeEvents', event.id);
                        displayMessage("Deleted Successfully");
                        }
                        }
                        });
                        }
                        }
                        });
                        });
                        function displayMessage(message) {
                        $(".response").html("<div class='success'>"+message+"</div>");
                        setInterval(function() { $(".success").fadeOut(); }, 1000);
                        }
                        </script>

                    </div>
                    <!-- END ROW -->

                </div>
                <!-- container-fluid -->

            </div>
            <!-- content -->

@endsection
