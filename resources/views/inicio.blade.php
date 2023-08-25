
  @extends('layouts.base') @prepend('styles') @section('content')
{{-- carrusel end  --}}
  <div class="carousel">
    <div class="carousel-item active">
      <img src="img/1.jpg" alt="Imagen 1">
      <div class="carousel-caption">
        <h2>Título Llamativo 1</h2>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/2.jpg" alt="Imagen 2">
      <div class="carousel-caption">
        <h2>Título Llamativo 2</h2>
      </div>
    </div>
  </div>
{{-- carrusel fin  --}}


{{-- servicios hobber  --}}

<h2 class="centered-title">Servicios</h2>
  <div class="grid">
    <figure class="effect-julia">
      <img src="img/1.jpg" alt="img21"/>
      <figcaption>
        <h2>Passionate <span>Julia</span></h2>
        <div>
          <p>Julia dances in the deep dark</p>
          <p>She loves the smell of the ocean</p>
          <p>And dives into the morning light</p>
        </div>
        {{-- <a href="#">View more</a> --}}
      </figcaption>			
    </figure>
    <figure class="effect-julia">
      <img src="img/2.jpg" alt="img22"/>
      <figcaption>
        <h2>Passionate <span>Julia</span></h2>
        <div>
          <p>Julia dances in the deep dark</p>
          <p>She loves the smell of the ocean</p>
          <p>And dives into the morning light</p>
        </div>
        <a href="#">View more</a>
      </figcaption>			
    </figure>
    <figure class="effect-julia">
      <img src="img/2.jpg" alt="img22"/>
      <figcaption>
        <h2>Passionate <span>Julia</span></h2>
        <div>
          <p>Julia dances in the deep dark</p>
          <p>She loves the smell of the ocean</p>
          <p>And dives into the morning light</p>
        </div>
        <a href="#">View more</a>
      </figcaption>			
    </figure>
   
</div>


{{-- comprometidos con nose que  --}}
<body>
  <div class="container">
    <div class="slideshow" id="slideshow">
      <ol class="slides">
        <li class="current">
          <div class="description">
            <h2>Tilted Content Slideshow</h2>
            <p>This slider, as seen on the landing page of the <a href="http://www.thefwa.com/">FWA</a>, plays with 3D perspective and performs some interesting animations on the right-hand side images.</p>
          </div>
          <div class="tiltview col">
            <a href="http://grovemade.com/"><img src="img/1_screen.jpg"/></a>
            <a href="https://tsovet.com/"><img src="img/2_screen.jpg"/></a>
          </div>
        </li>
        <li>
          <div class="description">
            <h2>CSS Animations</h2>
            <p>We are using 12 different animations for showing and hiding the items of a slide. The animations are defined by randomly adding data-attributes called <code>data-effect-in</code> and <code>data-effect-out</code> for every slide. </p>
          </div>
          <div class="tiltview row">
            <a href="http://pexcil.com/"><img src="img/3_mobile.jpg"/></a>
            <a href="http://foodsense.is/"><img src="img/4_mobile.jpg"/></a>
          </div>
        </li>
        <li>
          <div class="description">
            <h2>Tilted Items</h2>
            <p>The perspective view is achieved by adding a perspective value to the slide list item and tilting a division that contains the two screenshots.</p>
          </div>
          <div class="tiltview col">
            <a href="http://minimalmonkey.com/"><img src="img/5_screen.jpg"/></a>
            <a href="http://www.herschelsupply.com/"><img src="img/6_screen.jpg"/></a>
          </div>
        </li>
        <li>
          <div class="description">
            <h2>Column or Row</h2>
            <p>The items in the tilted container are either laid out in a column or in a row. For some directions we need to adjust the animation delays for the items, since we don't want the items to overlap each other when they move in or out.</p>
          </div>
          <div class="tiltview row">
            <a href="http://grovemade.com/"><img src="img/1_mobile.jpg"/></a>
            <a href="https://tsovet.com/"><img src="img/2_mobile.jpg"/></a>
          </div>
        </li>
        <li>
          <div class="description">
            <h2>Responsiveness</h2>
            <p>For smaller screens, the items on the right hand side will become less opaque and serve as decoration only. The focus will be on the description which will occupy all the width.</p>
          </div>
          <div class="tiltview col">
            <a href="http://pexcil.com/"><img src="img/3_screen.jpg"/></a>
            <a href="http://foodsense.is/"><img src="img/4_screen.jpg"/></a>
          </div>
        </li>
        <li>
          <div class="description">
            <h2>Navigation</h2>
            <p>For the "line" navigation we use a little trick to make the clickable area a bit bigger: we add a thick white border to the top and bottom of the span. Since the border is part of the element, it will be part of the clickable zone.</p>
          </div>
          <div class="tiltview row">
            <a href="http://minimalmonkey.com/"><img src="img/5_mobile.jpg"/></a>
            <a href="http://www.herschelsupply.com/"><img src="img/6_mobile.jpg"/></a>
          </div>
        </li>
      </ol>
    
    
    </div><!-- /slideshow -->
   
  </div><!-- /container -->

  <script>
    new TiltSlider( document.getElementById( 'slideshow' ) );
  </script>
  <!-- For the demo ad only -->   
  <script src="http://tympanus.net/codrops/adpacks/demoad.js"></script>

</body>
{{-- /*cotizaciones*/ --}}
<h2 class="centered-title ">Cotizaciones</h2>

<section class="demo-1 " style="background-image: url('img/6.png'); background-size: cover;"">
  <div class="grid-demo"  ">
    <div class="box">
      <svg xmlns="" width="100%" height="100%">
        <line class="top" x1="0" y1="0" x2="900" y2="0"/>
        <line class="left" x1="0" y1="560" x2="0" y2="-920"/>
        <line class="bottom" x1="300" y1="560" x2="-600" y2="560"/>
        <line class="right" x1="300" y1="0" x2="300" y2="1380"/>
      </svg>
     
      <span>2012</span>
      <span>Broccoli, Asparagus, Curry</span>
    </div>
    <div class="box">
      <svg xmlns="" width="100%" height="100%">
        <line class="top" x1="0" y1="0" x2="900" y2="0"/>
        <line class="left" x1="0" y1="560" x2="0" y2="-920"/>
        <line class="bottom" x1="300" y1="560" x2="-600" y2="560"/>
        <line class="right" x1="300" y1="0" x2="300" y2="1380"/>
      </svg>
      <span>2013</span>
      <span>Arugula, Chickweed</span>
    </div>
    <div class="box">
      <svg xmlns="" width="100%" height="100%">
        <line class="top" x1="0" y1="0" x2="900" y2="0"/>
        <line class="left" x1="0" y1="560" x2="0" y2="-920"/>
        <line class="bottom" x1="300" y1="560" x2="-600" y2="560"/>
        <line class="right" x1="300" y1="0" x2="300" y2="1380"/>
      </svg>
      <span>2014</span>
      <span>Strawberry, Lemon</span>
    </div>
    <div class="box">
      <svg xmlns="" width="100%" height="100%">
        <line class="top" x1="0" y1="0" x2="900" y2="0"/>
        <line class="left" x1="0" y1="560" x2="0" y2="-920"/>
        <line class="bottom" x1="300" y1="560" x2="-600" y2="560"/>
        <line class="right" x1="300" y1="0" x2="300" y2="1380"/>
      </svg>
      <span>2014</span>
      <span>Strawberry, Lemon</span>
    </div>
  </div><!-- /grid -->
</section>


<h2 class="centered-title ">Proyectos</h2>

{{-- proyectos  --}}
{{-- <link rel="shortcut icon" href="../favicon.ico">  --}}
		{{-- <link rel="stylesheet" type="text/css" href="assets/default.css" /> --}}
		{{-- <link rel="stylesheet" type="text/css" href="assets/component.css" /> --}}
		<script src="js/modernizr.custom.js"></script>
<div class="main">
  <ul id="og-grid" class="og-grid">
    <li>
      <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
        <img src="images/thumbs/1.jpg" alt="img01"/>
      </a>
    </li>
    <li>
      <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
        <img src="images/thumbs/2.jpg" alt="img02"/>
      </a>
    </li>
    <li>
      <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
        <img src="images/thumbs/3.jpg" alt="img03"/>
      </a>
    </li>
    <li>
      <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
        <img src="images/thumbs/1.jpg" alt="img01"/>
      </a>
    </li>
   
  </ul>
  {{-- <p>Filler text by <a href="http://veggieipsum.com/">Veggie Ipsum</a></p>
  <a id="og-additems" href="#">add more</a> --}}
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/styles.js"></script>
<script>
  $(function() {
    Grid.init();
    // adding more items
    $('#og-additems').on( 'click', function() {
      var $items = $( '<li><a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot."><img src="images/thumbs/1.jpg" alt="img01"/></a></li><li><a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot."><img src="images/thumbs/1.jpg" alt="img01"/></a></li><li><a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot."><img src="images/thumbs/1.jpg" alt="img01"/></a></li><li><a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot."><img src="images/thumbs/1.jpg" alt="img01"/></a></li><li><a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot."><img src="images/thumbs/1.jpg" alt="img01"/></a></li><li><a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot."><img src="images/thumbs/1.jpg" alt="img01"/></a></li><li><a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot."><img src="images/thumbs/1.jpg" alt="img01"/></a></li><li><a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot."><img src="images/thumbs/1.jpg" alt="img01"/></a></li><li><a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot."><img src="images/thumbs/1.jpg" alt="img01"/></a></li><li><a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot."><img src="images/thumbs/1.jpg" alt="img01"/></a></li>' ).appendTo( $( '#og-grid' ) );
      
      Grid.addItems( $items );
      return false;
    } );
  });
</script>





{{-- /*holaaaa*/ --}}




  @endsection
