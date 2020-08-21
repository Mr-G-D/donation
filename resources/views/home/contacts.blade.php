@extends('layouts.layouts')

@section('content')


<section class="spotlight C-parallax bg-cover bg-size--cover" data-spotlight="fullscreen">
    <span class="mask bg-tertiary alpha-5"></span>
    <div class="spotlight-holder py-lg pt-lg-xl">
        <div class="container d-flex align-items-center no-padding">
            <div class="col">
                <div class="row cols-xs-space align-items-center text-center text-md-left justify-content-start">
                    <div class="col-7">
                        <div class="text-left mt-5">
                          <img src="https://cdn.discordapp.com/attachments/530789778912837640/691801343723307068/1585008642050.png"
                              style="width: 200px;" class="img-fluid animated" data-animation-in="jackInTheBox"
                              data-animation-delay="1000">

                            <!-- <h2 class="heading display-4 font-weight-400 text-white mt-5 animated" data-animation-in="fadeInUp" data-animation-delay="2000">
                <span class="font-weight-700">812</span> hungry mouths fed today
              </h2> -->
                            <h4 class="lead text-white mt-3 lh-180 c-white animated" data-animation-in="fadeInUp"
                                data-animation-delay="2500">
                                <span style="font-size: 3rem;">#AnyQuestions?</span> <br />
                                "We are always there to clear you."
                            </h4>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</section><br><br><br><br>

<section class="slice">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7">
              <div class="text-center pt-lg-md">
                <h2 class="heading h1 mb-4">
                  Wanna Contact us?
                </h2>
                <p class="lead lh-180">
                  Feel free to drop your Questions here.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="slice slice-lg">
        <div class="container">
          <div class="row align-items-center cols-xs-space cols-sm-space cols-md-space">
            <div class="col-lg-6">
              <h3 class="heading h3 mb-4">Send us a message</h3>
              <form method="POST" action="{{url('/contactsuccess')}}">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <input class="form-control" placeholder="Name" type="text">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <input class="form-control" placeholder="Email address" type="email">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <textarea class="form-control" rows="5" placeholder="Your message"></textarea>
                    </div>
                  </div>
                </div>
                <div class="mt-4">
                  <button type="submit" class="btn btn-primary px-4">
                    Send message
                  </button>
                </div>
              </form>
            </div>
            <div class="col-lg-5 ml-lg-auto">
              <h3 class="heading heading-3 strong-200">
                4TH FLR, KAMLESHWAR BUILDING, 19-JAI HIND SOCIETY, N.S. ROAD, 11/12,J.V.P.D. SCHEME, JUHU,
                <br>
                  Mumbai, Maharashtra 400049
              </h3>
              <p class="lead mt-4 mb-4">
                E: <a href="#">support@webpixels.io</a>
                <br>
                T: 0755.222.333
              </p>
              <p class="">
                ROSHNI Foundation works through collaborative partnerships and advocacy initiatives with civil society organizations, government agencies, media and other stakeholders to promote justice, gender equality, and create access to SRHR information, and to advocate human rights of all individuals.
            </div>
          </div>
        </div>
      </section>


<section class="slice bg-primary">
      <div class="container">
        <div class="row align-items-center cols-xs-space cols-sm-space cols-md-space text-center text-lg-left">
          <div class="col-lg-7">
            <h1 class="heading h2 text-white strong-500">
                We have a suggestion driven FAQ section, your question might have already been answered.
            </h1>
            <p class="lead text-white mb-0"></p>
          </div>
          <div class="col-lg-3 ml-lg-auto">
            <div class="text-center text-md-right">
              <a href="{{url('/faq')}}" class="btn bg-secondary">
                FAQ
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
