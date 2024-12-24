@extends('weblayouts.web')
@section('content') 
<div id="inner_slider">
    <img src="{{ asset('web/images/banner.jpg') }}" alt="slider">
</div>
            <div class="categoryPage">
                <section id="products">
                    <hgroup class="heading">
                        <h2>Contact Us</h2>
                    </hgroup>
                    <div class="container mt-5">
                    @if ($errors->any())
                        <div class="alert alert-danger alert-block">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif
        <form method="post" action="{{url('contactus')}}">
            <!-- CROSS Site Request Forgery Protection -->
            @csrf
            <div class="row">

            <div class="col-md-6"><div class="form-group">
            <label>Name</label>    
            <input type="text" class="form-control" placeholder="Enter Your Name" name="name" id="name" required>
            </div></div>
            <div class="col-md-6"><div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter Your Email"  name="email" id="email" required>
            </div></div>
            <div class="col-md-6"><div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" placeholder="Enter Your Mobile"  name="mobile" id="mobile" required>
            </div></div>
            <div class="col-md-6"> <div class="form-group">
                <label>Product Id</label>
                <input type="text" class="form-control" placeholder="Enter Product Id"  name="sku" id="subject" required>
            </div></div>
            <div class="col-md-12"><div class="form-group">
                <label>Message</label>
                <textarea class="form-control" placeholder="Enter Your Message"  name="message" id="message" rows="3"></textarea>
            </div></div>
        <div class="col-md-12"><br><input type="submit" value="Submit" onClick="javascript: return confirm('Your message has been sent. THANK YOU!')" class="btn btn-dark btn-block"></div>
        
        
        </div>
            
            
            
           
            
         </form>
    </div>
</section></div>
         
             

           

            <section id="supter-box">
                <div class="container">
                    <div class="row d-flex justify-content-between g-0">
                        <div class="col-md-3 box-contant">
                            <div class="info">
                                <ul>
                                    <li class="d-flex align-items-center">
                                        <i class="fa-regular fa-star"></i>
                                        <div>
                                            <h6>Unique Products</h6>
                                            <span>We are manufacture own</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 box-contant">
                            <div class="info">
                                <ul>
                                    <li class="d-flex align-items-center">
                                        <i class="fa-solid fa-phone"></i>
                                        <div>
                                            <h6>100% Satisfaction</h6>
                                            <span>Your Satisfaction is our duty</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 box-contant">
                            <div class="info">
                                <ul>
                                    <li class="d-flex align-items-center">
                                        <i class="fa-solid fa-truck"></i>
                                        <!-- <i class="fa-regular fa-truck"></i> -->
                                        <div>
                                            <h6>Fast delivery</h6>
                                            <span>Delivery in a Glimpse</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <style>
  
form {
    border: 1px solid #a52a2a;
   margin-bottom:50px;
    padding: 40px 50px 45px;
}
.form-control:focus {
    border-color: #000;
    box-shadow: none;
}
label {
    font-weight: 600;
}
.error {
    color: red;
    font-weight: 400;
    display: block;
    padding: 6px 0;
    font-size: 14px;
}
.form-control.error {
    border-color: red;
    padding: .375rem .75rem;
}
</style>
@endsection('content')

