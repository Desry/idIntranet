@extends('layouts.layout')


@section('content')
<br>
<!--<div class="container">-->
    <h5 class="center-align">Meet the Team</h5>
    <hr id="header-hr">
    <div class="container">

    <br><br>
    <div class="section">
        <div class="row valign-wrapper">
                <div class="col s2 valign-wrapper"></div>
                <div id="directories_img_wrapper" class="col s2 valign-wrapper">
                    <img src="images/directories/mirek.jpg" alt="" class="directories_img circle responsive-img" href="#mirek">
                </div>
                <div class="col s2 valign-wrapper"></div>
        </div>
        <div id="names_titles" class="row valign-wrapper">
            <div class="col s6 pull-s3 center-align">
                <p class="name"><a href="#mirek" class="modal-trigger">Miroslaw Andziak</a></p>
                <p class="title">Chief Executive Officer</p>
            </div>
        </div>
    </div>

    <br><br>


    <div class="section">
        <div class="row valign-wrapper">
            <div class="col s2">
                <img href="#mirek" src="images/directories/tomek.jpg" alt="" class="directories_img circle responsive-img modal-trigger">
            </div>
        
            <div class="col s2">
                <img src="images/directories/adam.jpg" alt="" class="directories_img circle responsive-img">
            </div>

             <div class="col s2">
                <img src="images/directories/lukasz.jpg" alt="" class="directories_img circle responsive-img">
            </div>
        </div>

        <div id="names_titles" class="row valign-wrapper">
            <div class="col s6 center-align">
                <p class="name">Tomasz Gorzkowski</p>
                <p class="title">Solution Architect/Chief Finance Officer</p>
            </div>

             <div class="col s6 center-align">
                <p>Adam Kaczmarek</p>
                <p class="title">Chief Technology Officer</p>
            </div>

             <div class="col s6 center-align">
                <p>Lukasz Wilke</p>
                <p class="title">Chief Technologist</p>
            </div>
        </div>
    </div>
    <br><br>

    <div class="modal" id="mirek">
        <div class="modal-content">
            <center><h6 class="name">Miroslaw Andziak | Chief Executive Officer</h6><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="modal-footer">
            <a href="#" class="modal-close btn blue waves-effect">Close</a>
        </div>

    </div>

    <div class="section">
        <div class="row valign-wrapper">
            <div class="col s2">
                <img src="images/directories/krystian.jpg" alt="" class="directories_img circle responsive-img">
            </div>
            <div class="col s2">
                <img src="images/directories/marek.jpg" alt="" class="directories_img circle responsive-img">
            </div>

            <div class="col s2">
                <img src="images/directories/ariel.jpg" alt="" class="directories_img circle responsive-img">
            </div>
        </div>

        <div id="names_titles" class="row valign-wrapper">
            <div class="col s6 center-align">
                <p class="name">Krystian Stępień</p>
                <p class="title">Solutions Architect</p>
            </div>

            <div class="col s6 center-align">
                <p>Marek Bodzan</p>
                <p class="title">Principal Architect</p>
            </div>

            <div class="col s6 center-align">
                <p>Ariel Kenneth Ampol</p>
                <p class="title">Customer Success Manager</p>
            </div>
        </div>
    </div>

    <br><br>
 
    <div class="section">
        <div class="row valign-wrapper">
            <div class="col s2">
                <img src="images/directories/eiman.jpg" alt="" class="directories_img circle responsive-img">
            </div>
            
             <div class="col s2">
                <img src="images/directories/desry.jpg" alt="" class="directories_img circle responsive-img">
            </div>

            <div class="col s2">
                <img src="images/directories/aga.png" alt="" class="directories_img circle responsive-img">
            </div>
        </div>

        <div id="names_titles" class="row valign-wrapper">
            <div class="col s6 center-align">
                <p class="name">John Eiman Mission</p>
                <p class="title">Product Solutions Engineer</p>
            </div>

            <div class="col s6 center-align">
                <p>Desry Hernalin</p>
                <p class="title">Product Solutions Engineer</p>
            </div>

            <div class="col s6 center-align">
                <p>Agnieszka Konieczna</p>
                <p class="title">Sales Representative</p>
            </div>
        </div>


    </div>
        
    </div>

@endsection