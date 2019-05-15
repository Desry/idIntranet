@extends('layouts.layout')
@section('content')


<h5 class="center-align">Meet the Team</h5>
<hr id="header-hr">

<div class="container">
    <div class="row img_wrapper center">
        <div class="col s12">
            <img src="images/directories/mirek.jpg" alt="" class="directories_img circle responsive-img" href="#mirek">
            <p class="name"><a href="#mirek" class="modal-trigger">Miroslaw Andziak</a></p>
            <p class="title">Chief Executive Officer</p>
        </div>
    </div>

   
    <div class="row img_wrapper center">
        <div class="col s12 m4">
            <img src="images/directories/tomek.jpg" alt="" class="directories_img circle responsive-img" href="#tomek">
            <p class="name"><a href="#tomek" class="modal-trigger">Tomasz Gorzkowski</a></p>
            <p class="title">Solution Architect/Chief Finance Officer</p>
        </div>
        <div class="col s12 m4">
            <img src="images/directories/adam.jpg" alt="" class="directories_img circle responsive-img" href="#mirek">
            <p class="name">Adam Kaczmarek</p>
            <p class="title">Chief Technology Officer</p>
        </div>
        <div class="col s12 m4">
            <img src="images/directories/lukasz.jpg" alt="" class="directories_img circle responsive-img" href="#mirek">
            <p class="name">Lukasz Wilke</p>
            <p class="title">Chief Technologist</p>
        </div>
    </div>



    <div class="row img_wrapper center">
        <div class="col s12 m4">
            <img src="images/directories/krystian.jpg" alt="" class="directories_img circle responsive-img">
            <p class="name">Krystian Stępień</p>
            <p class="title">Solutions Architect</p>
        </div>

        <div class="col s12 m4">
            <img src="images/directories/marek.jpg" alt="" class="directories_img circle responsive-img" href="#mirek">
            <p class="name">Marek Bodzan</p>
            <p class="title">Principal Architect</p>
        </div>
        <div class="col s12 m4">
            <img src="images/directories/ariel.jpg" alt="" class="directories_img circle responsive-img" href="#mirek">
            <p class="name">Ariel Kenneth Ampol</p>
            <p class="title">Customer Success Manager</p>
        </div>
    </div>


    <div class="row img_wrapper center">
        <div class="col s12 m4">
            <img src="images/directories/eiman.jpg" alt="" class="directories_img circle responsive-img">
            <p class="name">Eiman Mission</p>
            <p class="title">Product Solutions Engineer</p>
        </div>
         <div class="col s12 m4">
            <img src="images/directories/desry.jpg" alt="" class="directories_img circle responsive-img">
            <p class="name">Desry Hernalin</p>
            <p class="title">Product Solutions Engineer</p>
        </div>
         <div class="col s12 m4">
            <img src="images/directories/aga.png" alt="" class="directories_img circle responsive-img">
            <p class="name">Agnieszka Konieczna</p>
            <p class="title">Sales Representative</p>
        </div>

    </div>

    <div id="mirek" class="modal bottom-sheet black white-text">
        <div class="modal-content center">
            <h6>Miroslaw Andziak | Chief Executive Officer</h6>
            <br><br>
            <a href="#!" target="_blank" class="waves-effect waves-light btn-large social linkedin"><i class="fa fa-linkedin"></i>View LinkedIn Profile</a>

        </div>
        <div class="modal-footer black">
            <a href="#!" class="modal-close waves-effect waves-light btn-floating"><i class="material-icons">close</i></a>
        </div>
    </div>

    <div id="tomek" class="modal bottom-sheet black white-text">
        <div class="modal-content center">
            <h6>Tomasz Gorzkowski | Solution Architect / Chief Finance Officer</h6>
            <br><br>
            <a href="#!" target="_blank" class="waves-effect waves-light btn-large social linkedin"><i class="fa fa-linkedin"></i>View LinkedIn Profile</a>

        </div>
        <div class="modal-footer black">
            <a href="#!" class="modal-close waves-effect waves-light btn-floating"><i class="material-icons">close</i></a>
        </div>
    </div>


<!-- 
     <div class="modal" id="mirek">
        <div class="modal-content center">
            <center><h6 class="name">Miroslaw Andziak | Chief Executive Officer</h6><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <h6 class="name">Miroslaw Andziak | Chief Executive Officer</h6>

            <br><br>

            <a href="" target="_blank" class="waves-effect waves-light btn-large social linkedin"><i class="fa fa-linkedin"></i>View LinkedIn Profile</a>
        </div>
        <div class="modal-footer">
            <a href="#" class="modal-close btn blue waves-effect"></a>
        </div>

    </div> -->

</div>


@include('layouts.footer')


@endsection