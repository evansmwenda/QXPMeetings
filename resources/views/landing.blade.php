@extends('layouts.qxphome')

@section('main')
 <div class="qxp-higered text-center">
    <img src="{{asset('images/logo/bgAsset7.svg')}}" style="margin-top: 100px 0px" width="300" height="200">
 </div>

 <div class="container">
    <div class="qxp-higered-back">
        <img src="{{asset('images/featured/QXP-meetings-1-1536x864.jpg')}}" >
    </div>
 </div>

 <div class="container text-center qxp-higher-content">
        <h3>Reaching Anyone, Anytime, Anywhere.</h3>
        <p>Working from home couldn’t be more convenient with the best online meeting software, bringing a whole new meaning to face-to-face and making every connection better.</p>
      <br>
         <p>Connect from anywhere with just one click.</p>
      </div>
 {{-- Icon view --}}
 <section id="tw-facts" class="qxp-facts">
    <div class="container"> 
       <!-- Row End -->
       <div class="row">
          <div class="col-md-3 col-sm-12 qxp-section" style="margin: 20px 0px; ">
                <div class="row">
                   <div class="col-md-12 col-sm-12" style="padding:auto;margin-right: 0px !important">
                      <img src="{{asset('images/icons/019-instructor.svg')}}" width="50" height="60">
                   </div>
                </div>
                <h3>Join from anyplace</h3>
                <p>Join meetings and enjoy simplified video conferencing from any device.</p>
                  </div>
 
          <div class="col-md-3 col-sm-12 qxp-section" style="margin: 20px 0px; ">
             <div class="facts-img">
                <div class="row">
                   <div class="col-md-12 col-sm-12" style="padding:auto;margin-right: 0px !important">
                      <img src="{{asset('images/icons/005-video.svg')}}" width="50" height="60">
                   </div>
                </div>
                <h3>Quality Web Audio</h3>
                <p>Enjoy unparalleled High Definition Audio for a clear and natural sound.</p>
              
             </div>
          </div>
 
          <div class="col-md-3 col-sm-12 qxp-section" style="margin: 20px 0px; ">
             <div class="facts-img">
                <div class="row">
                   <div class="col-md-12 col-sm-12" style="padding:auto;margin: auto">
                      <img src="{{asset('images/icons/008-video-call-3.svg')}}" width="50" height="60">
                   </div>
                  </div>
                  <h3>High Definition Video</h3>
                  <p>Experience higher resolution, high quality video conferencing solutions.</p>
             </div>
          </div>
 
          <div class="col-md-3 col-sm-12 qxp-section" style="margin: 20px 0px; ">
             <div class="facts-img">
                <div class="row">
                   <div class="col-md-12 col-sm-12" style="padding:auto;margin: auto">
                      <img src="{{asset('images/icons/013-board.svg')}}" width="50" height="60">
                   </div>
                  </div>
                  <h3>Screen Sharing</h3>
                  <p>Enable real time collaboration and showcase designs and presentations live with multiple screen sharing.</p>
               
             </div>
          </div>
 
          <div class="col-md-3 col-sm-12 qxp-section" style="margin: 20px 0px; ">
             <div class="facts-img">
                <div class="row">
                   <div class="col-md-12 col-sm-12" style="padding:auto;margin: auto">
                      <img src="{{asset('images/icons/011-video-conference-3.svg')}}" width="50" height="60">
                   </div>
                  </div>
                  <h3>Transcripts and Recording</h3>
                  <p>Unearth important meeting highlights with media recording and automated transcribing.</p>
             </div>
          </div>
 
          <div class="col-md-3 col-sm-12 qxp-section" style="margin: 20px 0px; ">
             <div class="facts-img">
                <div class="row">
                   <div class="col-md-12 col-sm-12" style="padding:auto;margin: auto">
                      <img src="{{asset('images/icons/017-coaching.svg')}}" width="50" height="60">
                   </div>
                   </div>
                   <h3>Messaging and Team Chat</h3>
                   <p>Instantly react and interact with your colleagues either publicly or in private with enabled team chat.</p>
              
             </div>
          </div>
 
 
          <div class="col-md-3 col-sm-12 qxp-section" style="margin: 20px 0px; ">
             <div class="facts-img">
                <div class="row">
                   <div class="col-md-12 col-sm-12" style="padding:auto;margin: auto">
                      <img src="{{asset('images/icons/003-video-call-1.svg')}}" width="50" height="60">
                   </div>
                     </div>
                     <h3>Security Compliant</h3>
                     <p>Safeguarding our client’s data and maintaining their privacy is paramount with end-to-end encryption.</p>
             </div>
          </div>
 
 
       </div>
    </div>
    <!-- Container End -->
 </section>


 <div class="qxp-subfooter">
     <div class="container">
         <div class="row">
            <div class="col-md-10">
                <h3>Give Your Students Knowledge Without Borders</h3>
            </div>
            <div class="col-md-2">
                <a href="#"class="btn btn-warning">SIGN UP</a>
            </div>
         </div>
     </div>
 </div>
@endsection
