@extends('layouts.layout')

@section('content')
    <br>
    <h5 class="center-align">Who We Are</h5>
    <hr id="header-hr">

    <div id="company" class="container">
        <br>
        <div class="row">
            <div class="grid-example col l12 m12 s12 center-align"><img src="images/background4.jpg" class="responsive-img"></div>
        </div>

        <div class="row">
            <div class="grid-example col s12 m6 l7">
                <div class="card-panel grey lighten-1">
                    <span class="black-text">
                    Where other business intelligence (BI) and data warehousing (DW) companies focus on supplying hardware, ETL and make the solution operating, InfiniteDATA finds underlying opportunities and helps clients to optimize their information delivery processes to support business decisions better.


                    <br><br>

                    We provide software solutions that allow to deliver business information on time, good quality, at low cost. We have extensive BI/DW implementation and consulting experience with deep industry specific knowledge. We know what it takes to turn data into information asset.

                    <br><br>

                    Here is some of the many reasons that clients choose as their partner:

                    <br><br>

                        <strong>Cutting Edge Solutions</strong>. Our solutions brings easy solutions to complex problems. We differentiate from our competition providing dedicated Information Delivery solutions addressing the most sophisticated needs.

                    <br><br>

                        <strong>Exclusive Focus</strong>. Our consultants' focus is on Information Delivery disciplines (BI, DW). This allows us to excel in solving the most complex and advanced Data Warehousing challenges with intelligently designed and implemented solutions.

                    <br><br>

                        <strong>Delivery Excellence</strong>. We do not compromise on delivery excellence. InfiniteDATA provides high quality on Information Delivery solutions and transferable knowledge on time and on budget. We bring together both technical mastery and business acumen to ensure our clients success and satisfaction.</span>
                </div>
            </div>

            <!-- <div id="prod_serv_card" class="grid-example col s12 m6 l5"> -->
            <div class="grid-example col s12 m6 l5">
                <div class="card small hoverable">
                    <div class="card-image">
                        <img class="responsive-img" src="images/customers.jpg">
                    </div>
                    <div class="card-action center-align">
                        <a href="#products" class="blue-text modal-trigger">Products & Services</a>
                    </div>
                </div>
            </div>


            <div class="modal" id="products">
                <div class="modal-content">
                    <h5 class="center-align">Products and Services</h5>
                    <hr id="header-hr">
                    <center><img src="images/sin.png" class="responsive-img"></center><br><br>

                   ScheduleIN® is a fully integrated enterprise scheduler for Data Warehouse and Business Intelligence environments of all sizes. We brought 15 years of hands on experience in Data Warehousing projects and created the System that is functional, easy to use and allow to manage and optimize Information Delivery processes.
                    <br><br>

                    ScheduleIN® offers a full-featured replacement for traditionally-used native scheduling solutions, providing single design and execution view across the platforms. Its proactive notification functionalities allows Administrators to undertake practive actions and protect service level commitments for Information Delivery.
                </div>
                <div class="modal-footer">
                    <a href="#" class="modal-close btn waves-effect blue">Close</a>
                </div>
            </div>

            <div id="customers_card" class="grid-example col s12 m6 l5">
                <div class="card small hoverable">
                    <div class="card-image">
                        <img class="responsive-img" src="images/customers.png">
                    </div>
                    <div class="card-action center-align">
                        <a href="#customers" class="blue-text modal-trigger">Customers</a>
                    </div>
                </div>
            </div>


            <div class="modal" id="customers">
                <div class="modal-content">
                    <h5 class="center-align">Our Customers</h5>
                    <hr id="header-hr">
                    Our Clients base constitutes of he companies located in EMEA, Asia and Americas.  We address Information Delivery challenges of companies of all sectors: Financial (Banking, Insurance), Telecommunication, Manufacturing, Retail, Logistics and Energy.  The biggest experiences we have in serving Financial, Telco  and Manufacturing Clients in Europe.
                </div>
                <div class="modal-footer">
                    <a href="#" class="modal-close btn waves-effect blue">Close</a>
                </div>

            </div>

        </div>
    </div>

    @include('layouts.footer')
@endsection

