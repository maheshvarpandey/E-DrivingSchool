@extends('drivingschool.header')
@section('title','contact us')
@section('content')

<script type="text/javascript" language="javascript">
  function showHide() {
    var ele = document.getElementById("showHideDiv");
    if(ele.style.display == "block") {
            ele.style.display = "none";
      }
    else {
        ele.style.display = "block";
    }
  }

  function showHide1() {
    var ele = document.getElementById("showHideDiv1");
    if(ele.style.display == "block") {
            ele.style.display = "none";
      }
    else {
        ele.style.display = "block";
    }
}
</script>
<style>
  .para1 {
    color: white;
  }
  .para1:hover {
    padding: 5px;
  }
  .tag1 {
    color: red;
    border-radius: 15px;
    border:1px solid pink;
    padding: 10px;
  }
  .tag1:hover {
    color: #00bfff;
  }
  .btn1 {
    height: 50px;
    width: 150px;
    color: black;
    border-radius: 15px;
    background-color: lightgreen;
  }
  .btn1:hover {
    color:#00bfff ;
  }
  .hide1:hover {
    color: white;
    padding: 5px;
    opacity: 1.0;
  }
  .hide3 {
    border-radius: 15px;
    border:1px solid pink;
    padding: 10px;
  }
  .hide3:hover {
    color: #00bfff;
  }
</style>
<div class="container-fluid-text">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-xl-4 mh1">
          <h2><strong class="tag1">Welcome</strong></h2>
          <p class="para1">
            So, you're learning to drive? Then these pages are for you. If you are thinking about learning to drive, these pages are useful for you aswell.

            Within this section you will find all the necessary information to help you make sense of what learning to drive will be like and what you can look forward to in your lessons. You will also find important information about the theory and practical tests you will need to take to earn your licence..

            We've also included a section on choosing the best instructor for you, helping you make sense of what qualifications an instructor should have and the types of questions you should be asking when it comes to choosing someone to teach you how to drive.

            So take a few moments to read through the information in the section and you will be well prepared to start your driving lessons.
          </p>
        </div>

        <div class="col-lg-4 col-md-4 col-xl-4 mh1">
          <h2><strong class="tag1">Getting Started</strong></h2><br>
          <p class="para1">
            So you're thinking about getting started but don't know where to begin? If you don't already have a qualifing licence you need to apply for a provisional licence. To be eligible you must be a resident of Great Britain and meet the minimum age requirement which is currently 17 years of age. You will also need your birth certificate, a valid UK Passport or another form of identification and must be able to provide addresses of your residence over the past 3 years. If you are looking to start from the age of 17 you may apply for your Provisional 3 months before your 17th birthday.
          </p>
              <button type="button" class="btn1" value="Show-Hide" onclick="return showHide();" ><strog>Apply For Provissional</strog></button> &nbsp;&nbsp;
              <button type="button" class="btn1" value="Show-Hide" onclick="return showHide1();" ><strog>Medical Requirement</strog></button>

        </div>

        <div class="col-lg-4 col-md-4 col-xl-4 mh1">
          <h2><strong class="tag1">Theory Test</strong></h2><br>
          <p class="para1">
            To earn your full UK driving licence you are required to pass two examinations. The first that you must take is the Theory Test. This can be applied for as soon as you have your provisional licence and you will need to attend your local theory test centre to take the test. The Theory Test consists of a multiple choice test which is followed by an interactive Hazard Perception test. You must pass both of these to successfully complete the test and receive your pass certificate. This section will help you book your theory test as well as give you a better understanding of what each part of the test requires from you.
          </p>
          <button type="button" class="btn1"><strog>Book a Theory Test</strog></button> &nbsp;&nbsp;
          <button type="button" class="btn1"><strog>Taking the Test</strog></button> &nbsp;&nbsp;
          <button type="button" class="btn1"><strog>Hazard Perception</strog></button>
        </div><br><br>

    </div>
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 offset-left-3">
            <div id="showHideDiv" style="display:none; color: green;">
                <strong class="hide1"><h2 style="color:#00bfff ;" class="hide3">Apply For Provissional Licence</h2>
                <p class="hide2">
                The provisional licence can applied for in several different methods. You can also apply for your provisional online by visiting Direct Gov. Alternatively, you can apply by completing the D1 application form. You can get this from your local Post Office branch or from the DVLA ordering form service. <br><br>

                When filling in the form you will need to provide all information correctly as well as documentation confirming your identity and a Passport style colour photo. If you are unsure as to whether you have filled the forms in correctly you can use the Post Office checking service and a clerk will check that you have filled in the forms correctly and send your application to the DVLA for you.<br><br>

                Whichever way you choose to apply for your provisional you will need to pay £50.00. The DVSA will look to provide you with your licence within 10 working days of receipt of your information.
              </p>
              </strong>
              </div>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 offset-left-3">
            <div id="showHideDiv1" style="display:none; color: green;">
                <strong class="hide1"><h2 style="color:#00bfff ;" class="hide3">Medical Requirement</h2>
                <p class="hide2">
                You can still apply for a provisional licence if you are currently suffering from, or have previously suffered from a disability or illness that may affect your ability to drive but you must declare it to the Driving and Vehicle Licensing Agency (DVLA) for review first. The D1 form for Provisional's includes a section on your health in the form of a questionnaire and must be answered providing the appropriate details. It's important to be truthful when filling out the form as failure to declare any medical condition or disability when applying for a licence is a criminal offence and may be punishable by a fine.<br><br>

                <u>Eyesight</u><br>
                To be legally allowed to drive you must be able to comply with the current standards set for eyesight. Currently you must be able to read an old-style number plate from a distance of 20.5 metres (67ft) or 20 metres (66ft) for new-style licence places introduced from 2001. If you are having trouble reading from this distance then you must get corrective glasses before you can start. If you cannot read the licence plate clearly you will not be able to take lessons with an instructor and will be breaking the law should you drive with friends or family.
              </p>
              </strong>
              </div>
        </div>
    </div>

</div>
<br><br><br><br>

@endsection
