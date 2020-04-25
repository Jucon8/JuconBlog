@extends('layout')
@section('titulo')
Contáctenos
@endsection
@section('contenido')
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/contact-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Contáctenos</h1>
            <span class="subheading">Tenes preguntas? <br>
              Tengo las respuestas.</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p>Porfavor completá el siguiente formulario y nos pondremos en contacto a la brevedad.</p>
        <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
        <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
        <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Nombre Completo</label>
              <input type="text" class="form-control" placeholder="Nombre y Apellido" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>E-mail</label>
              <input type="email" class="form-control" placeholder="Correo Electrónico" id="email" required data-validation-required-message="Please enter your email address.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Teléfono</label>
              <input type="tel" class="form-control" placeholder="Teléfono" id="phone" required data-validation-required-message="Please enter your phone number.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Mensaje</label>
              <textarea rows="5" class="form-control" placeholder="Escriba aquí su mensaje" id="message" required data-validation-required-message="Please enter a message."></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Enviar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <hr>

@endsection
