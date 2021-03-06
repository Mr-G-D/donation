@extends('layouts.layouts')
@section('content')
<style>
  .hero{
  text-align: center;
  padding: 5% 0 5% 0;
  margin: 0px 0px 70px 0px;
  }
</style>
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
                                <span style="font-size: 3rem;">#HungerFreeIndia</span> <br />
                                "Join our community of passionate Hunger Heroes and lead a movement towards zero hunger."
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slice-lg">
    <div class="container">
        <div class="row align-items-center cols-xs-space cols-sm-space cols-md-space">
            <div class="col-lg-6">
                <div class="d-flex align-items-start">
                    <div class="icon-text">
                        <h3 class="heading">
                            Who are we?
                        </h3>
                        <p>
                          <strong>#feedThePoor</strong> is an initiative brought forward by Roshni Charitable Trust.
                           We believe no-one should suffer the grief of going to sleep empty stomach. Our motive at <strong>#feedThePoor</strong> is
                           to feed the underpivileged half of our nation, that is heavily affeccted by the pangs of poverty and isn't capable of earning their bread.
                           Basically, we raise funds or collect food donated by generous hearted people and direct it to the poor. Each meal we provide, brings a
                           smile to the face of these people, who'd otherwise have to grieve without food.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div>
                    <img style="height: 250px; width: auto;"
                        src="https://cdn.discordapp.com/attachments/530789778912837640/691801343723307068/1585008642050.png"
                        class="img-center img-fluid rounded z-depth-3 z-depth-3" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-gradient-lighter slice-lg">
    <div class="container">
        <div class="row align-items-center cols-xs-space cols-sm-space cols-md-space">


            <div class="col-lg-6">
                <div class="block block-image">
                    <img style="height: auto; width: 100%;"
                        src="https://cdn.discordapp.com/attachments/741259606512107602/745210139396538438/20200818_144848.jpg"
                        class="img-center img-fluid rounded z-depth-3" alt="">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="d-flex align-items-start">
                    <div class="icon-text">
                        <h3 class="heading">
                            Where do we function presently?
                        </h3>
                        <p>
                          Presently <strong>#feedThePoor</strong> is functioning in the villages of Rajasthan and several other remote villages located in the Northern states
                          of India. With a web of over 1.5k volunteers, we are now spreading far and wide, for better accomplishment of our motive. We are being offered constant
                          support from volunteers and donors all over India and by their support, we are able to succeed in our goal. More and more volunteers are now joining us, everyday,
                          and becuase of that, we are now about to shift to a larger domain, and by that, we will be able to serve a larger section of the underprivileged parts of India.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=" slice-lg">
    <div class="container">
        <div class="row align-items-center cols-xs-space cols-sm-space cols-md-space">

          <div class="col-lg-6">
              <div class="d-flex align-items-start">
                  <div class="icon-text">
                      <h3 class="heading">
                          What change have be brought?
                      </h3>
                      <p>
                        Today <strong>#feedThePoor</strong> has fed about <strong>15,000 </strong>underpivileged children and have donated meals to over <strong>500 </strong>families.
                        By the blessing of God and the constant support of our volunteers and donors, we have utilised about <strong>5 lakh (INR)</strong> in the service of the poor.
                        The belief of our Organisation is, with the support of generous hearts, no such motive is unachievable. We are always thankful to those <strong>#hungerHeroes</strong>
                        who've made our dream a success.
                      </p>
                  </div>
              </div>
          </div>

            <div class="col-lg-6">
                <div class="block block-image">
                    <img style="height: auto; width: 100%;"
                    src="https://cdn.discordapp.com/attachments/741259606512107602/745210919029702716/20200818_144926.jpg"
                        class="img-center img-fluid rounded z-depth-3" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
