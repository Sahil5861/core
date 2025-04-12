@extends('layouts.frontend_default')
@section('title', 'Project Details')
@section('content')
<style>
  .main-menu{
    background-color:#fff;
  }
  .spacer{
    padding: 20px;
  }
  .projectimg{
    width:500px;
    height:300px;
    margin-top:70px;
    /* margin-right:-140px; */
  }
    .slider-container {
      position: relative;
      width: 100vw;
      height: 500px; /* Adjust the height as needed */
      overflow: hidden;
      /* top:-10px; */
      left:-8px;
    }
    .slider-container::before {
      content: "";
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('../frontend/assets/images/background/theader_pink.png') no-repeat center top / cover;
      z-index: -1;
    }

    .slider-text {
      position: absolute;
      top: 45%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      color: white;
      font-size: 24px;
      font-weight: bold;
    }

    /* end */
    .card-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      /* justify-content: space-between; */
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px; /* Add left and right padding */
      height: 250px;
      flex-basis: calc(50% - 20px);
    }

    @media (max-width: 768px) {
    .card-container {
      justify-content: space-between; /* Revert to original spacing for smaller screens */
    }

    .card {
      flex-basis: calc(50% - 10px); /* Adjust the space between cards for smaller screens */
      
    }
  }
    .card {
      width: calc(25% - 20px); /* Adjust the space between cards */
      background-color: #f5f5f5;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
      overflow: hidden;
      margin-right:15px;
      color:#000;
    }

    .card:nth-child(1) {
      background-image: linear-gradient( 135deg, #3C8CE7 10%, #00EAFF 100%);
    }

    .card:nth-child(2) {
      background: #FF5F6D;  /* fallback for old browsers */
      background: -webkit-linear-gradient(to bottom, #FFC371, #FF5F6D);  /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to bottom, #FFC371, #FF5F6D); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }

    .card:nth-child(3) {
      background-image: linear-gradient( 135deg, #81FBB8 10%, #28C76F 100%);
    }

    .card:nth-child(4) {
      background-image: linear-gradient( 135deg, #FAB2FF 10%, #1904E5 100%);
    }

    .card-content {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100%;
      padding: 20px;
      text-align: center;
    }

    .card-content:hover img {
      background-color: rgba(0, 0, 0, 0.2); /* Change the background color of the image on hovering */
    }

    .card-content h3 {
      margin: 0;
      font-size: 18px;
      margin-bottom: 50px;
    }

    .round-circle {
      width: 100px;
      height: 100px;
      background-color: black;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      margin-bottom: 20px;
    }

    .round-circle img {
      max-width: 75%;
      max-height: 75%;
      object-fit: contain;
      border-radius: 50%;
      transition: background-color 0.3s ease;
    }

    @media (max-width: 768px) {
      .card {
        width: calc(50% - 10px);
      }
    }

    /* end */
    html {
      font-size: 16px;
    }

    body {
      background-color: #1F2039;
      overflow-x: hidden;
    }

    section {
      padding: 80px;
    }

    .hero {
      display: flex;
      flex-direction: row;
      /* width: 65%; */
      margin: auto;
    }

    h1 {
      color: #A5B4FC;
      font-size: 3em;
      padding-bottom: 25px;
    }

    p {
      color: white;
      font-size: 1.2em;
      margin-bottom: 70px;
    }

    a {
      text-decoration: none;
      color: white;
    }

    a:hover {
      text-decoration: none;
    }

    .cta {
      color: white;
      background: linear-gradient(#8E86B5, #ACAEED);
      padding: 20px 30px;
      font-size: 1.1em;
      border-radius: 50px;
    }

    .cta:hover {
      text-decoration: none;
      background: linear-gradient(#696484, #8788BA);
    }

    @media screen and (max-width: 996px) {
      .hero {
        flex-direction: column;
        text-align: center;
        justify-content: center;
        padding: 30px;
        padding: 10px;
        width: 85%;
      }

      .hero img {
        order: 1;
        margin-bottom: 40px;
      }

      .hero div {
        order: 2;
        height: auto;
        margin-bottom: 15px;
        margin-right: 0;
      }

      .home p {
        padding: 0 50px 0 50px;
        margin-bottom: 50px;
      }
    }

    @media screen and (max-width: 470px) {
      .hero h1 {
        font-size: 2em;
      }

      .hero p {
        font-size: 1.2em;
      }
    }

    /* Why Choose Us Section */
    .why-choose-us .card-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start; /* Align items from the top */
    padding: 20px;
    text-align: center;
  }

  .why-choose-us .card-content h3 {
    font-size: 20px;
    margin-bottom: 10px;
    color: #1F2039;
    margin-top: 0; /* Add top margin to the heading */
  }

  .why-choose-us .card-content p {
    font-size: 16px;
    margin-bottom: 0;
  }

  .why-choose-us .card-content .round-circle {
    width: 100px;
    height: 100px;
    background-color: var(--card-bg-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    margin-bottom: 10px;
    transition: background-color 0.3s ease;
    margin-top: 0; /* Add top margin to the circular image container */
  }

  .why-choose-us .card-content .round-circle img {
    max-width: 75%;
    max-height: 75%;
    object-fit: contain;
    border-radius: 50%;
    transition: background-color 0.3s ease;
  }
    .round-circle {
      background-color: var(--card-bg-color);
    }
    .card-content:hover .round-circle{
      background-color:rgb(141,46,226);
    }
    .card {
  transition: transform 0.3s;
}

.card:hover {
  transform: translateY(-5px);
}
img:hover{
  transform: scale(1.1);
}


@media screen and (min-width: 500px) and (max-width: 600px) {
  .projectimg{
    width:427px;
    height:256px;
  }
}

@media screen and (min-width: 400px) and (max-width: 500px) {
  .projectimg{
    width:300px;
    height:180px;
  }
}

@media screen and (min-width: 250px) and (max-width: 400px) {
  .projectimg{
    width:220px;
    height:132px;
  }
}

@media screen and (max-width: 769px) {
  .prog{
    flex-wrap: nowrap;
    height: 200px;

  }
  .prog .card .card-content{
    padding: 0px;
}
}



</style>
<div class="slider-container">
    <div class="slider-text">
      <h1>{{$details->company_name}}</h1>
      <!-- <p>Additional description or content</p> -->
    </div>
  </div>
  <!-- end -->
  <section class="hero">
    <div>
    <h1 class="text-center">{{$details->company_name}}</h1>
      <p>{{$details->description}}</p>
      <!-- <a class="cta" href="">CONTACTEZ-MOI</a> -->
    </div>
    <span class="spacer"></span>
    <center>
    <img src="{{asset('images/our_clients/'.$details->image)}}" class="projectimg" alt="" >
    <center>
  </section>
  <!-- start -->
  <div class="card-container prog">
  @foreach($technologies as $tech)  
        <div class="card">
           <div class="card-content">
                <div class="round-circle">
                    <img src="{{asset('images/project/'.$tech->image)}}" alt="HTML">
                </div>
                <h3>{{$tech->name}}</h3>
            </div>
        </div>
        @endforeach
      </div>

 

@endsection