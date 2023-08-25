@extends('layouts.base') @prepend('styles') @section('content')

<section id="contact-us" class="contact-us section">
   <div class="container">
       <div class="contact-head">
           <div class="row">
               <div class="col-lg-12">
                   <div class="section-title">
                       <h2>Contactanos</h2>
                       <p>Digitaltei: Tu aliado digital para potenciar tu presencia en línea. Contáctanos y descubre cómo llevar tu negocio al siguiente nivel en el mundo digital.</p>
                   </div>
               </div>
           </div>
       </div>
       <div class="contact-info">
           <div class="row">
               <div class="col-lg-6 col-md-6 col-12">
                   <div class="single-info-head">
                       <div class="single-info">
                           <i class="lni lni-map"></i>
                           <h3>Ubicacion</h3>
                           <ul>
                               <li>HAB. URBANA ERNESTO VILCHEZ<br></li>
                           </ul>
                       </div>
                       <div class="single-info">
                           <i class="lni lni-phone"></i>
                           <h3>Llamanos</h3>
                           <ul>
                               <li><a href="tel:+18005554400">+1-888 705 770</a></li>
                           </ul>
                       </div>
                       <div class="single-info">
                           <i class="lni lni-envelope"></i>
                           <h3>Correo</h3>
                           <ul>
                               <li><a href="/cdn-cgi/l/email-protection#166563666679646256657e796671647f72653875797b"><span class="__cf_email__" data-cfemail="afdcdadfdfc0dddbefdcc7c0dfc8ddc6cbdc81ccc0c2">digitaltei@gmail.com</span></a></li>
                           </ul>
                       </div>
                   </div>
               </div>
               <div class="col-lg-6 col-md-6 col-12">
                   <div class="contact-form-head">
                       <div class="form-main">
                           <form class="form" method="post" action="{{route('contact.send')}}">
                               @csrf
                               <div class="row">
                                   <div class="col-12">
                                       @if(session('success'))
                                       <div class="alert alert-success">
                                           {{ session('success') }}
                                       </div>
                                       @endif
                                   </div>
                                   <div class="col-12">
                                       <div class="form-group">
                                           <input name="name" type="text" placeholder="Tu nombre" required="required">
                                       </div>
                                   </div>
                                   <div class="col-12">
                                       <div class="form-group">
                                           <input name="subject" type="text" placeholder="Asunto" required="required">
                                       </div>
                                   </div>
                                   <div class="col-12">
                                       <div class="form-group">
                                           <input name="email" type="email" placeholder="Tu correo electronico" required="required">
                                       </div>
                                   </div>
                                   <div class="col-12">
                                       <div class="form-group">
                                           <input name="phone" type="text" placeholder="Tu celular" required="required">
                                       </div>
                                   </div>
                                   <div class="col-12">
                                       <div class="form-group message">
                                           <textarea name="message" placeholder="Escribe un mensaje"></textarea>
                                       </div>
                                   </div>
                                   <div class="col-12">
                                       <div class="form-group button">
                                           <button type="submit" class="btn ">Enviar mensaje</button>
                                       </div>
                                   </div>
                               </div>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>











@endsection
