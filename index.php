<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Lastminutebooks</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aframe/0.7.1/aframe.js"></script>
    <link type="text/css" rel="stylesheet" href="css/custom.css"  media="screen,projection"/>
  </head>
  <body>


  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper blue">
        <a href="#!" class="brand-logo center">Lastminutebooks</a>
      </div>
    </nav>
  </div>
  <a-scene background="color: #fff">
      <a-assets>
        <img id="aiht1" src="./images/full.jpg">
      </a-assets>
      <a-sky rotation="0 255 0" src="#aiht1"></a-sky>
      <a-entity>
        <a-camera></a-camera>
      </a-entity>
    </a-scene>
    <div class="fixed-action-btn" style="bottom: 15px; right: 10px;">
    <a class="btn-floating btn-large blue"><i class="material-icons">reorder</i></a>
    <ul>
      <li>
        <a href="#modal_languages" class="btn-floating modal-trigger amber"><i class="material-icons">code</i></a>
        <a href="#modal_languages" class="btn-floating modal-trigger mobile-fab-tip">3 Languages</a>
      </li>
      <li>
        <a href="#modal_colleges" class="btn-floating modal-trigger red"><i class="material-icons">account_balance</i></a>
        <a href="#modal_colleges" class="btn-floating modal-trigger mobile-fab-tip">1 Colleges</a>
      </li>
      <li>
        <a href="#modal_students" class="btn-floating modal-trigger yellow"><i class="material-icons">person_pin</i></a>
        <a href="#modal_students" class="btn-floating modal-trigger mobile-fab-tip">30 Students</a>
      </li>
      <li>
        <a href="#modal_joinus" class="btn-floating modal-trigger amber"><i class="material-icons">add</i></a>
        <a href="#modal_joinus" class="btn-floating modal-trigger mobile-fab-tip">Join Us</a>
      </li>
    </ul>
        </div>
        <div id="modal_languages" class="modal modal-fixed-footer">
        <div class="modal-content">
          <h4>Programming Languages</h4>
          <ul class="collection">
    <li class="collection-item avatar">
      <i class="material-icons circle green">code</i>
      <span class="title">Javascript</span>
      <p class="secondary-content"><span data-badge-caption="ppl" class="badge new green">5</span></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle red">code</i>
      <span class="title">PHP</span>
      <p class="secondary-content"><span data-badge-caption="ppl" class="badge new red">5</span></a>
    </li>
  </ul>
        </div>
        <div class="modal-footer">
        <a href="#modal_joinus" class="modal-action modal-close waves-effect waves-blue btn-flat modal-trigger">Join Us</a>
        </div>
      </div>
      <div id="modal_colleges" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Colleges</h4>
      <ul class="collection">
      <li class="collection-item avatar">
        <i class="material-icons circle green">account_balance</i>
        <span class="title">Anand Institute of Higher Technology</span>
        <p class="secondary-content"><span data-badge-caption="ppl" class="badge new">30</span></a>
      </li>     
    </ul>    </div>
    <div class="modal-footer">
    <a href="#modal_joinus" class="modal-action modal-close waves-effect waves-blue btn-flat modal-trigger">Join Us</a>
    </div>
  </div>
  <div id="modal_students" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>All students</h4>
      <p>All students list inga</p>
    </div>
    <div class="modal-footer">
    <a href="#modal_joinus" class="modal-action modal-close waves-effect waves-blue btn-flat modal-trigger">Join Us</a>
    </div>
  </div>
  <div id="modal_joinus" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Register</h4>
      <div class="row">
      <div class="input-field col s12">
      <input  id="register_no" type="text">
      <label for="register_no" class="active">AU Register No</label>
      </div>
      <div class="input-field col s6">
        <input  id="first_name" type="text"  tabindex="2">
        <label for="first_name" class="active">First Name</label>
      </div>
      <div class="input-field col s6">
        <input id="last_name" type="text" tabindex="3">
        <label for="last_name" class="">Last Name</label>
      </div>
    <div class="input-field col s6">
        <input  id="dob" type="text" class="datepicker"  tabindex="2">
        <label for="dob" class="active">Date of Birth</label>
      </div>
      <div class="input-field col s6">
        <input id="mobile_no" type="text" tabindex="3">
        <label for="mobile_no">Mobile</label>
      </div>
      <div class="input-field col s12">
      <input id="email_id" type="email" class="validate" tabindex="6">
      <label for="email_id" data-error="valid email id enter karo" data-success="right" class="active">E-mail</label>
      </div>
      </div>
      </div>
    <div class="modal-footer">
    <a href="#modal_joinus" class="modal-action modal-close waves-effect waves-blue btn-flat modal-trigger">Register</a>
    </div>
  </div>
  
  <script type="text/javascript" src="js/custom.js"></script>
  </body>
</html>