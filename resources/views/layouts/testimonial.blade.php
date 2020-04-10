<!--==========================
  Testimonials Section
  ============================-->
  <section id="testimonials">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Testimonials</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Erdo lide, nora porodo filece, salvam esse se, quod concedimus ses haec dicturum fuisse</p>
        </div>
      </div>
      

      @for ($i = 0; $i < count($Testimonial) ; $i++)

          @if ($i  % 2)

            <div class="row">

              <div class="col-md-3">

                <div class="profile">

                  <div class="pic"><img src={{$Testimonial[$i]->img}} alt=""></div>

                  <h4>{{$Testimonial[$i]->name}}</h4>

                  <span>{{$Testimonial[$i]->factoryName}}</span>

                </div>

              </div>

              <div class="col-md-9">

                <div class="quote">

                  <b><img src="img/quote_sign_left.png" alt=""></b>{{$Testimonial[$i]->text}}<small><img src="img/quote_sign_right.png" alt=""></small>

                </div>

              </div>

            </div>

          @else

            <div class="row">

            <div class="col-md-9">

              <div class="quote">

                <b><img src="img/quote_sign_left.png"  alt=""></b>{{$Testimonial[$i]->text}}<small><img src="img/quote_sign_right.png" alt=""></small>

              </div>

            </div>

            <div class="col-md-3">

              <div class="profile">

                <div class="pic"><img src={{$Testimonial[$i]->img}} alt=""></div>

                    <h4>{{$Testimonial[$i]->name}}</h4>

                   <span>{{$Testimonial[$i]->factoryName}}</span>

                </div>  

              </div>

            </div>

          @endif

       @endfor


      {{-- @foreach ($Testimonial->slice(0,4) as $testimonial)
          @if ($testimonial->id % 2 === 0  )
          <div class="row">
            <div class="col-md-3">
              <div class="profile">
                <div class="pic"><img src="{{$testimonial->img}}" alt=""></div>
              <h4>{{$testimonial->name}}</h4>
              <span>{{$testimonial->factoryName}}</span>
              </div>
            </div>
            <div class="col-md-9">
              <div class="quote">
                <b><img src="img/quote_sign_left.png" alt=""></b>{{$testimonial->text}} <small><img src="img/quote_sign_right.png" alt=""></small>
              </div>
            </div>
          </div>
              
          @else
          <div class="row">
            <div class="col-md-9">
              <div class="quote">
                <b><img src="img/quote_sign_left.png"  alt=""></b>{{$testimonial->text}}<small><img src="img/quote_sign_right.png" alt=""></small>
              </div>
            </div>
            <div class="col-md-3">
              <div class="profile">
                <div class="pic"><img src={{$testimonial->img}} alt=""></div>
                    <h4>{{$testimonial->name}}</h4>
                   <span>{{$testimonial->factoryName}}</span>
                </div>
              </div>
            </div>
              
          @endif
      
      
      @endforeach --}}
    

    </div>
  </section>