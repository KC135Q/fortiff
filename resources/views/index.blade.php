<!--Main / First screen -->
@extends('layout')

@section('content')
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <br><br>
            <h1 class="header center purple-text">Helpdesk Tools in One Spot</h1>
            <div class="row center">
                <h4 class="col s12 light" id="desc">Asset management tracking, helpdesk ticketing system, purchase approvals, and chat window all in one easy to use application.</h4>
            </div>
            <div class="row center">
                <a href="login.blade.php" id="download-button" class="btn-large waves-effect waves-light purple">Level Up Your Helpdesk</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="section">
            <!--Icon Section-->
            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <div class="center image"><img src="img/approved.png"></div>
                        <h5 class="center subheader">Purchase Approval</h5>

                        <p class="point" style="text-align: justify;">
                            Request management approval for purchases with tracking and transparency.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <div class="center image"><img src="img/support.png"></div>
                        <h5 class="center subheader">Helpdesk Ticketing System</h5>

                        <p class="point" style="text-align: justify;">Users can enter tickets, check status, and keep open communitcation with the IT Department.  Your helpdesk can enter, update and complete tickets, while creating a knowledge base with every completed ticket. </p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <div class="center image"><img src="img/barcode.png"></div>
                        <h5 class="center subheader">Asset Management</h5>

                        <p class="point" style="text-align: justify;">Track inventory of all computers, printers, network equipment, and mobile phones, and license renewal dates in one place.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection