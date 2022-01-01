<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{{ asset('css/plans.css') }}">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> 
   {{-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" /> --}}
    <title>Document</title>
</head>
<body>

<div class="container">
<div class="mt-5">
      <div class="d-style btn btn-brc-tp border-2 bgc-white btn-outline-blue btn-h-outline-blue btn-a-outline-blue w-100 my-2 py-3 shadow-sm">
        <!-- Basic Plan -->
        <div class="row align-items-center">
          <div class="col-12 col-md-4">
            <h4 class="pt-3 text-170 text-600 text-primary-d1 letter-spacing">
              Basic Plan
            </h4>

            <div class="text-secondary-d1 text-120">
              <span class="ml-n15 align-text-bottom"></span><span class="text-180">299</span> / month
            </div>
          </div>

          <ul class="list-unstyled mb-0 col-12 col-md-4 text-dark-l1 text-90 text-left my-4 my-md-0">
            <li>
              <i class="fa fa-check text-success-m2 text-110 mr-2 mt-1"></i>
              <span>
                <span class="text-110">Donec id elit.</span>
              Fusce dapibus...
              </span>
            </li>

            <li class="mt-25">
              <i class="fa fa-check text-success-m2 text-110 mr-2 mt-1"></i>
              <span class="text-110">
                Placerat duis
            </span>
            </li>

            <li class="mt-25">
              <i class="fa fa-times text-danger-m3 text-110 mr-25 mt-1"></i>
              <span class="text-110">
                Tortor mauris
            </span>
            </li>
          </ul>

          <div class="col-12 col-md-4 text-center">
            <a href="/payment-initiate" class="f-n-hover btn btn-info btn-raised px-4 py-25 w-75 text-600">Get Started</a>
          </div>
        </div>

      </div>



      <div class="d-style bgc-white btn btn-brc-tp btn-outline-green btn-h-outline-green btn-a-outline-green w-100 my-2 py-3 shadow-sm border-2">
        <!-- Pro Plan -->
        <div class="row align-items-center">
          <div class="col-12 col-md-4">
            <h4 class="pt-3 text-170 text-600 text-green-d1 letter-spacing">
              Pro Plan
            </h4>

            <div class="text-secondary-d2 text-120">
              <div class="text-danger-m3 text-90 mr-1 ml-n4 pos-rel d-inline-block">
                <span class="text-150 deleted-text"></span>
                <span>
                    <span class="d-block rotate-45 position-l mt-n475 ml-35 fa-2x text-400 border-l-2 h-5 brc-dark-m1"></span>
                </span>
              </div>
              <span class="align-text-bottom"></span><span class="text-180">599</span> / month
            </div>
          </div>

          <ul class="list-unstyled mb-0 col-12 col-md-4 text-dark-l1 text-90 text-left my-4 my-md-0">
            <li>
              <i class="fa fa-check text-success-m2 text-110 mr-2 mt-1"></i>
              <span>
                <span class="text-110">Everything in Basic...</span>
              </span>
            </li>

            <li class="mt-25">
              <i class="fa fa-check text-success-m2 text-110 mr-2 mt-1"></i>
              <span class="text-110">
                Non diam phasellus
            </span>
            </li>

            <li class="mt-25">
              <i class="fa fa-check text-success-m2 text-110 mr-2 mt-1"></i>
              <span class="text-110">
                Tortor mauris
            </span>
            </li>
          </ul>

          <div class="col-12 col-md-4 text-center">
            <a href="/payment-initiate" class="f-n-hover btn btn-success btn-raised px-4 py-25 w-75 text-600">Get Started</a>
          </div>
        </div>

      </div>



      <div class="d-style btn btn-brc-tp border-2 bgc-white btn-outline-purple btn-h-outline-purple btn-a-outline-purple w-100 my-2 py-3 shadow-sm">
        <!-- Premium Plan -->
        <div class="row align-items-center">
          <div class="col-12 col-md-4">
            <h4 class="pt-3 text-170 text-600 text-purple-d1 letter-spacing">
              Premium Plan
            </h4>

            <div class="text-secondary-d1 text-120">
              <span class="ml-n15 align-text-bottom"></span><span class="text-180">899</span> / month
            </div>
          </div>

          <ul class="list-unstyled mb-0 col-12 col-md-4 text-dark-l1 text-90 text-left my-4 my-md-0">
            <li>
              <i class="fa fa-check text-success-m2 text-110 mr-2 mt-1"></i>
              <span>
                <span class="text-110">Everything in Pro...</span>
              </span>
            </li>

            <li class="mt-25">
              <i class="fa fa-check text-success-m2 text-110 mr-2 mt-1"></i>
              <span class="text-110">
                Placerat duis
            </span>
            </li>

            <li class="mt-25">
              <i class="fa fa-check text-success-m2 text-110 mr-2 mt-1"></i>
              <span class="text-110">
                Molestie nunc non
            </span>
            </li>
          </ul>

          <div class="col-12 col-md-4 text-center">
            <a href="/payment-initiate" class="f-n-hover btn btn-warning btn-raised px-4 py-25 w-75 text-600">Get Started</a>
          </div>
        </div>

      </div>
    </div>
</div>
</body>
</html>