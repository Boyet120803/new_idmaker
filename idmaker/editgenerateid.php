<?php  require_once ('admin-partials/header.php') ?>
<?php  require_once ('admin-partials/sidebar.php') ?>
<?php require_once ('admin-partials/js.php') ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>

<style>
 


    .id-wrapper {
       display: flex;
    gap: 30px;
    flex-wrap: wrap;
    justify-content: center;
    transform: scale(1.4); 
    transform-origin: top center;
    transition: transform 0.2s;
    }

  .id {
      width: 204px;
      height: 324px;
    /* background: rgb(0, 0, 0); */
    border-radius: 0px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    position: relative;
    overflow: hidden;
    
  }

    .front {
      background: transparent;
      position: relative;
      overflow: hidden;
      background: #b8d3e6;
    }

    .front-bg {
      position: absolute;
      left: 0;
      right: 0;
      bottom: 0;
      top: 0;
      background: #5420B5;
      clip-path: polygon(0 68%, 100% 58%, 100% 100%, 0% 100%);
      z-index: 2;
    }
    .id-left {
      position: absolute;
      top: 2px;
      left: -7px;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      gap: 8px;
      z-index: 2;
      width: 90px; /* adjust as needed */
    }
    /* Logo */
    .logo {
      position: absolute;
      top: 18px;
      left: 30px;
      width: 43px;
      height: 43px;
      z-index: 2;
    }

  .school-info {
    position: absolute;
    top: 68px;
    left: -5px;
    width: 120px;
    z-index: 2;
    display: flex;
    flex-direction: column;
    gap: 0;
    text-align: center;
  }
  .school-name {
    font-size: 10px;
    font-weight: bold;
    color: #222;
    line-height: 1.1;
    text-align: center;
  }
  .school-address {
    font-size: 6px;
    color: #222;
    margin-top: 2px;
  }

  .qr {
    position: absolute;
    top: 105px;
    left: 15px;
    width: 65px;
    height: 65px;

    object-fit: cover;
    background: #fff;
    z-index: 2;

  }

  .signature {
 
    top: 150px;
    left: 20px;
    width: 55px;
    height: 78px;
    object-fit: contain;
 
  }
  .course{
    font-size: 8px;
  }

  .student-img {
   
    top: 0;
    left: 0;
    object-fit: fill;
    border-radius: 0 0 0px 0px;
    border: none;
    background: transparent;
 
  }

    .bottom-content {
      position: absolute;
      left: 0;
      right: 0;
      bottom: 0;

      z-index: 2;
    }

.name-block {
  margin-bottom: 0px;
  padding: 0 5px 2px 5px;
}

.name {
  font-size: 16px;
  font-weight: bold;
  line-height: 1.4; /* mas dikit */
  text-align: right;
  color: #fff;
  letter-spacing: 1px;
  z-index: 2;
  margin-bottom: -6px;

}

.name span {
  font-size: 13px;
  font-weight: 600;
  letter-spacing: 0.5px;
  margin-top: -6px; /* dikit sa last name */
  display: block;
  line-height: 1.05;
}

    .info-row {
      display: flex;
      justify-content: space-between;
      width: 100%;
      font-size: 10px;
      color: #fff;
      margin-top: 0px;
    }
    .info-row-child {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      margin-bottom: 0;
      justify-content: end; 
      gap: 2px;         
    }
  
      .info-row-child .label {
        font-size: 8px;  
        margin-top: 6px;
        line-height: 1.2;
      }

      .info-row-child .value {
        font-size: 8px;  /* pwede mong adjustan depende sa gusto mo */
        margin-top: -2px; /* dikit sa label */
        line-height: 1.1;
        margin-bottom: 1px;
      }
          .birth {
      text-align: left;
    }

    .address {
      font-size:8px;
      text-align: right;
    }

    .id-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-weight: bold;
      background: #fff;
      color: #000000;
      padding: 0px 10px;
      border-radius: 0px;
      margin: 0px 0 0px 0;
      font-size: 10px;
    }

    .footer {
      font-size: 9px;
      display: flex;
      justify-content: space-between;
      color: #fff;
      margin-top: 2px;
        padding: 0 5px 5px 5px;
    }

    .esc-logo {
      position: absolute;
      right: 5px;
      top: -15px;
      width: 40px;   /* adjust size as needed */
      height: auto;
      z-index: 5;
    
      pointer-events: none; /* para di madrag */
}

.esc{
  display:flex;
  justify-content: flex-end;
  align-items: center;
  font-size:8px;
  margin-top:10px;
  margin-right:5px;
  font-weight: bold;
}


    .id.back {
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      background: none;
      box-shadow: none;
      border-radius: 0;
      padding: 0;
      height: 324px;
      width: 204px;
    }

    .id-card-back {
      /* width: 204px; */
      height: 300px;
      background: white;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      display: flex;
      font-size: 9px;
      position: relative;
      overflow: hidden;
    }

    .left-bar {
      width: 38px;
      color: white;
      display: flex;
      flex-direction: column;
      font-weight: bold;
      font-size: 7px;
    }

    .back-top {
      padding: 12px 8px 5px 8px;
      gap: 5px;
    }

    .left-content{
      width: 25%;
    
    }

    .right-content{
      width: 75%;
      flex: 1;
      box-sizing: border-box;
      display: flex;
      flex-direction: column;
      gap: 0.8px;

    }

    .top-text {
      text-align: center;
      font-size: 7px;
    }

    .top-text b {
      font-size: 7px;
    }

.back-signature {
  position: relative; /* para anchor ng absolute sa loob */
  text-align: center;
  margin: 18px 0 4px 0; /* dagdagan ang taas para di matakpan ang name */
  font-size: 8px;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 2px;
  min-height: 0px; /* para may space sa taas */
}
.signature-img-wrap {
  position: absolute;
  top: -11px; /* adjust mo depende sa gusto mong taas */
  left: 50%;
  transform: translateX(-50%);
  width: 70px;
  height: 28px;
  display: flex;
  justify-content: center;
  align-items: flex-end;
  margin: 0;
  z-index: 2;
}
.back-signature-img {
  width: 85px;
  height: 45px;
  object-fit: contain;
  display: block;
}

    .signature-name {
      font-weight: bold;
      font-size: 7px;
    }
    .director{
      font-size: 7px;
      margin-top: -5px;
    }

    .reminders {
      text-align: center;
      font-size: 7px;
      margin-top: 13px;
    }

    .reminders b {
      font-size: 7px;
    }

    .contact {
      text-align: center;
      font-size: 7px;
      margin-top: 1px;
    }
        .contact1{
      text-align: center;
      font-size: 7px;
      margin-top: 1px;
      font-weight: bold;
    }

    .contact-name {
      font-weight: bold;
      font-size: 7px;
      margin-top: 2px;
    }

    .contact-number {
      font-size: 9px;
      font-weight:bold;
    }

    .qr-box {
      background: black;
      color: white;
      font-size: 7px;
      text-align: center;
      padding: 4px 2px;
      margin-top: 1px; 
      font-weight: bold;
    }

    .facebook-footer {
      background: #000000;
      color: #fff;
      font-size: 7px;
      text-align: center;
      padding: 5px 0 5px 0;
      letter-spacing: 0.5px;  
      width: 204px;
      font-family: inherit;
    }

    .year-strip {
      width: auto;
      background-color: white;
        font-family: "Montserrat", sans-serif;
    }

    .year-strip table {
        border-collapse: collapse;
        table-layout: fixed;
    }

    td {
      text-align: center;
      vertical-align: middle;
      padding: 0;
    }

    .rotated-text {
      writing-mode: vertical-rl;
      transform: rotate(180deg);
      text-orientation: mixed;
      display: inline-block;
      font-size: 7px;
      line-height: 1;
    }


    .year-cell {
      background-color: #000;
      color: white;
      border: 1px solid #333;
      width: 20px;
      height: 56px;
    }


    .word-school-year {
      background-color: #000;
      color: white;
      border: 1px solid #333;
      width: 20px;
      height: 56px;
    
    }


    .semester-cell {
      background-color: #000;
      color: white;
      border: 1px solid #000;
      width: 20px;
      height: 59px;
    }


    .first-cell,
    .second-cell {
      background-color: white;
      color: black;
      border: 1px solid #333;
      width: 20px;
      height: 56px;
    }



    .empty-cell {
      background-color: white;
      border: 1px solid #333;
      width: 15px;
      height: 56px;
    }

    .switch-btn {
  background: linear-gradient(90deg, #5420B5 60%, #7B3FF2 100%);
  color: #fff;
  border: none;
  outline: none;
  padding: 10px 28px;
  margin: 0 8px;
  border-radius: 24px;
  font-size: 15px;
  font-family: 'Montserrat', sans-serif;
  font-weight: 600;
  cursor: pointer;
  box-shadow: 0 2px 8px rgba(84,32,181,0.08);
  transition: background 0.2s, transform 0.2s;
}

.switch-btn:hover, .switch-btn.active {
  background: linear-gradient(90deg, #2b2a2c 60%, #212122 100%);
  transform: translateY(-2px) scale(1.04);
}

.img-drop-area {
  position: absolute;
  overflow: visible;
  width: 100%;
  height: 240px; /* adjust as needed for photo */
  top: 0;
  left: 0;
  pointer-events: none; /* default: di ma-edit */
   box-sizing: border-box; /* <-- important para di lumaki/lumiit pag may border */
  border: none;
  background: transparent;
}
#photoDropArea {
  width: 120%;
  height: 240px;
  top: 0;
  left: 0;
  z-index: 1; /* photo area sa ilalim */
}
#signDropArea {
  width: 55px;
  height: 78px;
  top: 150px;
  left: 20px;
  z-index: 3;
}
.edit-mode .img-drop-area {
  pointer-events: auto; 
  border: 2px dashed #5420B5;
  background: rgba(84,32,181,0.05);
}

@media print {
  body *:not(.id):not(.id *) {
    visibility: hidden !important;
    font-family: "Montserrat", sans-serif;
  }

  .name,
  .name span,
  .info-row-child .label,
  .info-row-child .value,
  .info-row-child .address,
  .info-row-child .dateofbirth,
  .footer span {
   
    -webkit-print-color-adjust: exact !important;
    print-color-adjust: exact !important;
    text-shadow: none !important;
  }

  .id.front, .id.back {
    visibility: visible !important;
    position: absolute !important;
    left: 0;
    top: 0;
    width: 3.2in !important;
    height: 5.0in !important;
    box-shadow: none !important;
    z-index: 9999 !important;
    display: none !important;
  }

  .id.front[style*="display: block"], .id.back[style*="display: block"] {
    display: block !important;
  }

  .id-wrapper, .mt-6 {
    transform: none !important;
    margin: 0 !important;
    padding: 0 !important;
    width: auto !important;
    height: auto !important;
    display: block !important;
  }

  .id-left {
    width: 2.3in;
  }
  .esc-logo{
    position: absolute;
    right: 5px;
    top: -30px;
    width: 0.6in !important;  
    height: 0.6in !important;
    z-index: 5;
    margin-right:5px;
    pointer-events: none;
  }

  .esc{
    font-size: 14px !important;
    font-weight: bold !important;
    color: black !important;
     margin-right:19px;
   
  }
  .esc img{
      margin-top:25px !important;
  }
    .course{
        font-size: 15px !important;
        margin-right:7px;
    }

  body, html {
    margin: 0 !important;
    padding: 0 !important;
    width: auto !important;
    height: auto !important;
    background: white !important;
    font-family: 'Montserrat', sans-serif !important;
  }

  .switch-btn, #editBtn, #saveBtn, #printBtn {
    display: none !important;
  }

  /* QR CODE IMAGE */
  .id-left .qr {
    width: 1.1in !important;
    height: 1.1in !important;
    position: absolute !important;  
    left: 20px !important;
    margin-top: 30px !important;
  }

  /* SIGNATURE IMAGE INSIDE .sig */
  .sig {
    position: relative !important;
     width: 1.8in !important;
    height: 1.8n !important;
    top: -20px !important;
    left: -30px !important;
  }

  .sig img {
    position: absolute !important;
    object-fit: contain !important;
  }

  /* IMAGE DROP AREA */
  .img-drop-area img {
    width: 3.2in !important;
    height: 3.4in !important;
  }


  /* SCHOOL INFO */
  .id-left .school-name {
    font-size: 12px !important;
    margin-right: -39px !important;
    margin-top: 18px;
  }

  .id-left .school-address {
    font-size: 8px !important;
    margin-top: 2px !important;
    margin-right: -40px !important;
    font-weight: bold !important;
  }

  .id-left .logo {
    position: absolute;
    top: 18px !important;
    left: 40px !important;
    width: 65px !important;
    height: 65px !important;
    z-index: 2;
  }

  /* NAME BLOCK */
  .name-block .name {
    
    line-height: 1.2 !important;
  }

  .name-block .name span {
    
    line-height: 1.1 !important;  
  }

  .name-block {
    margin-bottom: 0px !important;
    padding: 0 18px 2px 5px !important;
  }

  /* INFO ROW */
  .info-row {
    padding: 5px 10px 2px 10px !important;
    font-size: 12px !important;
    font-weight: bold !important;
    margin-right:18px;
  }

  .info-row .label {
    font-size: 11px !important;
    font-weight: bold !important;
    margin-right:18px;
  }

  .info-row .value {
    font-size: 13px !important;
    font-weight: bold !important;
  }
  .info-row .address{
    margin-right: -10px !important;
  }

  /* ID ROW */
  .id-row {
    padding: 5px 10px 2px 10px !important;
    height: 30px !important;
    font-size: 19px !important;
    margin-bottom: -10px;
    display:flex;
    align-items: center;
    justify-content: space-between;
  }

  /* FOOTER */
  .footer {
    padding: 12px 15px 2px 11px !important;
    margin-bottom: 2px !important;
  }

  .footer span {
    font-size: 13px !important;
    font-weight: bold !important;
  }
}

@media print {
  @page {
    margin: 0;
  
  }

 body {
    -webkit-print-color-adjust: exact !important;
    print-color-adjust: exact !important;
    font-family: "Montserrat", sans-serif !important;
  }


 
  .left-content{
    width:0.8in;
  }
   .right-content{
    width:1.4in;
    gap:13px;
  }
  .id-card-back{
     height:453px !important;
  }
     .id.back{
      height:485px !important; 
      width:100% !important; 
      background-color:blue;
    }
  

  .top-text {
    font-size: 11px !important;
  }
    .top-text b{
    font-size: 0.1in !important;
     margin-top:10px !important;
  }
  
  .signature-name{
     font-size: 11px !important;
  }

  .director{
     font-size: 0.1in !important;
  }

  .facebook-footer{
    color: white;
    font-size: 10px;
    font-weight:bold;
    text-align: center;
    padding: 10px 0 5px 0 !important;
    letter-spacing: 0.5px;
    width: 100% !important;
    height:100% !important;
    font-family: inherit;
  }
  .reminders{
    text-align: center;
    font-size: 11px;
    margin-top: -10px;
  }
  .reminders .first{
    font-size: 11px;
    font-weight:bold;
  }
  .reminders .second{
    font-size: 11px;
    font-weight:bold;
  }
  .word-school-year{
    height:86px;
  }
  .contact{
    font-size:10px;
    margin-top:-16px;

  }
  .contact .contact-name{
    font-size:15px;
  }
  .contact .contact-number{
    font-size:12px;
    margin-top:-5px;
  }
  .qr-box{
      margin-top:-12px;
      background: black;
      color: white;
      font-size: 10px;
      text-align: center;
      padding: 4px 2px;
      font-weight: bold;
  }
  .rotated-text{
    font-size:10px !important;
    font-weight:bold !important;
     letter-spacing: 0.5px;
  } 
  .signature-img-wrap{
    margin-top:69px;
  }

  .signature-img-wrap img{
    width: 2.5in;
    height: 2in;
    object-fit: contain;
    display: block;
  }
}

</style>

 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css" />
<script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
<link rel="stylesheet" href="assets/css/id.css">
        <main class="flex-1 ml-64">        
            <header class="bg-white shadow-sm">
                <div class="flex items-center justify-between px-6 py-4">
                    <div class="flex items-center">
                        <button id="toggle-sidebar" class="mr-4 text-gray-500 hover:text-gray-700">
                            <div class="w-6 h-6 flex items-center justify-center">
                                <i class="ri-menu-line"></i>
                            </div>
                        </button>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button class="relative text-gray-500 hover:text-gray-700">
                            <div class="w-6 h-6 flex items-center justify-center">
                                <i class="ri-notification-3-line"></i>
                            </div>
                        </button>
                        <div class="h-6 border-r border-gray-200"></div>
                   <div class="relative flex items-center space-x-2" id="user-dropdown-wrapper">
                  <span class="text-sm font-medium" id="fullName">Loading...</span>
                    <button id="user-dropdown-btn"
                        class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center focus:outline-none transition duration-200 hover:bg-gray-300">
                        <i class="ri-user-line text-gray-500 text-lg transition duration-200 group-hover:text-gray-700"></i>
                    </button>
                    <div id="user-dropdown-menu"
                        class="absolute right-0 mt-12 w-40 bg-white rounded-md shadow-lg border border-gray-200 hidden z-10 overflow-hidden transition-all duration-300 ease-in-out">
                       <a href="#"
                        class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition duration-200">
                            <i class="ri-user-line mr-2 text-base"></i>
                            Profile
                        </a>
                       <a href="#"
                        id="logout-btn"
                        class="flex items-center px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition duration-200">
                            <i class="ri-logout-box-r-line mr-2 text-base"></i>
                            Logout
                        </a>
                    </div>
                </div>
                    </div>
                </div>
                <div class="px-6 py-2 border-t border-gray-100">
                    <div class="flex items-center text-sm">
                        <a href="#" class="text-gray-500 hover:text-primary">Generate ID</a>
                        <div class="w-4 h-4 flex items-center justify-center text-gray-400 mx-1">
                            <i class="ri-arrow-right-s-line"></i>
                        </div>
                        <span class="text-gray-700">Page</span>
                    </div>
             </div>
            </header>
    <div style="width:100%; display:flex; flex-direction:column; align-items:center; margin-top:40px;">
      <div style="margin-bottom: 20px;">
        <button id="showFront" class="switch-btn active">Front</button>
        <button id="showBack" class="switch-btn">Back</button>
        <button id="editBtn" class="switch-btn">Edit</button>
        <button id="saveBtn" class="switch-btn" style="display:none;">Save</button>
        <button id="printBtn" class="switch-btn">Print</button>
      </div>

      <div style="margin-bottom:10px;">
  <label for="schoolYearInput" style="font-weight:bold;">School Year:</label>
  <input type="text" id="schoolYearInput" style="width:100px;" placeholder="e.g. 2024-2025">
  <button id="saveSchoolYearBtn" class="switch-btn" style="padding:3px 12px;">Save School Year</button>
</div>

    <div id="fontSizeControls" style="display:none; margin-bottom:10px;">
      <label for="nameFontSize" style="font-weight:bold;">Name Font Size:</label>
      <input type="range" id="nameFontSize" min="16" max="48" value="24" style="vertical-align:middle;">
      <span id="fontSizeValue">24</span>px
    </div>
    <div id="firstNameFontSizeControls" style="display:none; margin-bottom:10px;">
      <label for="firstNameFontSize" style="font-weight:bold;">First Name Font Size:</label>
      <input type="range" id="firstNameFontSize" min="10" max="30" value="13" style="vertical-align:middle;">
      <span id="firstNameFontSizeValue">13</span>px
    </div>
</div>


<div class="mt-6">
 <div class="id-wrapper">
   <div class="id front" id="idFront" style="display: block;">
      <div class="front-bg"></div>
          <div class="id-left">
             <img src="assets/img/log.png" class="logo" alt="Logo">
              <div class="school-info">
                <span class="school-name">MLG COLLEGE<br>OF LEARNING, INC</span>
                <span class="school-address">Atabay, Hilongos, Leyte</span>
              </div>
              <img src="assets/photos/qr.png" class="qr" alt="QR Code" id="qr_code">
              <div class="img-drop-area" id="signDropArea">
                <div class="sig">
                    <img src="assets/img/yan.png" class="signature" id="signatureImg" alt="Signature">
                </div>
              </div>
          </div>
          <div class="img-drop-area" id="photoDropArea">
               <img src="assets/img/id_final.png" class="student-img" id="studentImg" alt="Student Photo" style="width:150%;height:240px;">  
          </div>
          <div class="bottom-content">
            <div class="esc"style="display: none;">
              ESC # <span id="esc_number"></span>
            </div>
             <div class="name-block">
               <div class="name">KISTADIO<br><span class="firstname">JHON BRIX P.</span></div>
                 <div class="info-row">
                   <div class="info-row-child">
                    <span class="label">Date of Birth:</span>
                    <span class="value">09/04/2000</span>
                   </div>
                  <div class="info-row-child">
                    <br><span class="address">Brgy. Atabay, Hilongos</span>
                  </div>             
              </div>
            </div>
          <div class="id-row">
            <span class="student-id">21-003149</span>
            <span id="course_span" class="course">BSED-SS</span>
          </div>
          <div class="footer">
            <span>https://mlgcl.edu.ph</span>
            <span>mlg@mlgcl.edu.ph</span>
          </div>
          <div class="esc-logo"style="display: none;">
            <img src="assets/img/ESC-Logo.png" class="esc-logo" alt="ESC Logo">
          </div>
     </div>
</div>
<!-- BACK SIDE -->
    <div class="id back" id="idBack" style="display: none;">
        <div class="id-card-back back-top">
            <div class="left-content">
<div class="left-bar year-strip">
    <table>
        <tr>
            <td class="word-school-year"></td>
            <td class="year-cell"><div class="rotated-text"></div></td>
            <td class="empty-cell"></td>
            <td class="empty-cell"></td>
        </tr>
        <tr>
            <td class="word-school-year"></td>
            <td class="year-cell"><div class="rotated-text"></div></td>
            <td class="empty-cell"></td>
            <td class="empty-cell"></td>
        </tr>
        <tr>
            <td class="word-school-year"><div class="rotated-text">SCHOOL YEAR</div></td>
            <td class="year-cell"><div class="rotated-text"></div></td>
            <td class="empty-cell"></td>
            <td class="empty-cell"></td>
        </tr>
        <tr>
            <td class="word-school-year"></td>
            <td class="year-cell"><div class="rotated-text"></div></td>
            <td class="empty-cell"></td>
            <td class="empty-cell"></td>
        </tr>
        <tr>
            <td class="word-school-year"></td>
            <td class="semester-cell"><div class="rotated-text">Semester</div></td>
            <td class="first-cell"><div class="rotated-text">First</div></td>
            <td class="second-cell"><div class="rotated-text">Second</div></td>
        </tr>
    </table>
</div>
            </div>

            <div class="right-content">
                <div class="top-text">
                    This is to certify that the person<br>
                    whose picture and signature appear<br>
                    herein is a bonafide student of<br>
                    <b>MLC College of Learning, Inc.</b>
                </div>
                <div class="back-signature">
                      <div class="signature-img-wrap">
                          <img src="assets/img/yan.png" alt="signature" class="back-signature">
                      </div>
                      <div class="signature-name">MARY LILIBETH O. YAN, DEV. ED. D.</div>
                      <div class="director">School Director</div>
                </div>
                <div class="reminders">
                    <b class="first">IMPORTANT REMINDERS</b><br>
                    Always wear this ID while inside<br>
                    the school campus.<br>
                    <b class="second">Do not forget your<br>
                    STUDENT ID NUMBER.</b>
                </div>
                <div class="contact">
                    If lost and found, please surrender<br>
                    this ID to the<br>
                    STUDENT AFFAIRS OFFICE,<br>
                    MLC College of Learning, Inc.,<br>
                    Brgy. Atabay, Hilongos, Leyte
                </div>
                <div class="contact">
                   <b> In case of emergency,<br>
                    please contact</b>
                    <div class="contact-name">EFREN IBAÑEZ</div>
                    <div class="contact-number">0935-121-9395</div>
                </div>
                <div class="qr-box">
                    PLEASE SCAN THE QR<br>
                    CODE AT THE FRONT<br>
                    FOR MORE VALIDATION &<br>
                    CONTACT INFORMATION.
                </div>
            </div>          
        </div>
        <div class="facebook-footer back-bottom">
            https://www.facebook.com/mlgcl/
        </div>
    </div>
</div>

<script>
  printBtn.onclick = function() {
    lastView = idFront.style.display !== 'none' ? 'front' : 'back';
    if (lastView === 'front') {
      idBack.style.display = 'none';
      idFront.style.display = 'block';
    } else {
      idFront.style.display = 'none';
      idBack.style.display = 'block';
    }
  const polygonColor = getComputedStyle(document.querySelector('.front-bg')).backgroundColor;
  let printStyle = document.getElementById('dynamicPrintStyle');
  if (!printStyle) {
    printStyle = document.createElement('style');
    printStyle.id = 'dynamicPrintStyle';
    document.head.appendChild(printStyle);
  }
  printStyle.textContent = `
    @media print {
      .front-bg {
        background: ${polygonColor} !important;
        -webkit-print-color-adjust: exact !important;
        print-color-adjust: exact !important;
        display: block !important;
      }
    }
  `;
  window.print();
};
</script>



 <script>
          const frontBtn = document.getElementById('showFront');
          const backBtn = document.getElementById('showBack');
          frontBtn.onclick = function() {
            document.getElementById('idFront').style.display = 'block';
            document.getElementById('idBack').style.display = 'none';
            frontBtn.classList.add('active');
            backBtn.classList.remove('active');
          };
          backBtn.onclick = function() {
            document.getElementById('idFront').style.display = 'none';
            document.getElementById('idBack').style.display = 'block';
            backBtn.classList.add('active');
            frontBtn.classList.remove('active');
          };
        </script>
<script>
    let newPhotoFile = null;
    let newSignatureFile = null;

    const editBtn = document.getElementById('editBtn');
    const saveBtn = document.getElementById('saveBtn');
    editBtn.onclick = function() {
      document.querySelector('.id.front').classList.toggle('edit-mode');
      saveBtn.style.display = document.querySelector('.id.front').classList.contains('edit-mode') ? 'inline-block' : 'none';

      // Show/hide font size controls
      document.getElementById('fontSizeControls').style.display =
      document.querySelector('.id.front').classList.contains('edit-mode') ? 'block' : 'none';

      // Show/hide first name font size controls
      document.getElementById('firstNameFontSizeControls').style.display =
      document.querySelector('.id.front').classList.contains('edit-mode') ? 'block' : 'none';

    };


const photoDropArea = document.getElementById('photoDropArea');
const studentImg = document.getElementById('studentImg');
photoDropArea.addEventListener('dragover', function(e) {
  if (!photoDropArea.closest('.edit-mode')) return;
  e.preventDefault();
  photoDropArea.style.background = '#f3eaff';
});
photoDropArea.addEventListener('dragleave', function(e) {
  if (!photoDropArea.closest('.edit-mode')) return;
  photoDropArea.style.background = '';
});
photoDropArea.addEventListener('drop', function(e) {
  if (!photoDropArea.closest('.edit-mode')) return;
  e.preventDefault();
  photoDropArea.style.background = '';
  const file = e.dataTransfer.files[0];
  if (file && file.type.startsWith('image/')) {
    const reader = new FileReader();
    reader.onload = function(evt) {
      studentImg.src = evt.target.result;
    };
    reader.readAsDataURL(file);
    newPhotoFile = file; 
  }
});
const signDropArea = document.getElementById('signDropArea');
const signatureImg = document.getElementById('signatureImg');
signDropArea.addEventListener('dragover', function(e) {
  if (!signDropArea.closest('.edit-mode')) return;
  e.preventDefault();
  signDropArea.style.background = '#f3eaff';
});
signDropArea.addEventListener('dragleave', function(e) {
  if (!signDropArea.closest('.edit-mode')) return;
  signDropArea.style.background = '';
});
signDropArea.addEventListener('drop', function(e) {
  if (!signDropArea.closest('.edit-mode')) return;
  e.preventDefault();
  signDropArea.style.background = '';
  const file = e.dataTransfer.files[0];
  if (file && file.type.startsWith('image/')) {
    const reader = new FileReader();
    reader.onload = function(evt) {
      signatureImg.src = evt.target.result;
    };
    reader.readAsDataURL(file);
    newSignatureFile = file; 
  }
});
</script>

<script>
function makeDraggableResizable(img, container) {
  let isDragging = false, isResizing = false, resizeDir = '';
  let startX, startY, startLeft, startTop, startWidth, startHeight;

  img.style.position = 'absolute';
  img.style.left = img.style.left || '0px';
  img.style.top = img.style.top || '0px';
  const handles = {};
  const positions = [
    ['tl', 'nwse-resize', '0', '0'],
    ['t', 'ns-resize', '50%', '0'],
    ['tr', 'nesw-resize', '100%', '0'],
    ['r', 'ew-resize', '100%', '50%'],
    ['br', 'nwse-resize', '100%', '100%'],
    ['b', 'ns-resize', '50%', '100%'],
    ['bl', 'nesw-resize', '0', '100%'],
    ['l', 'ew-resize', '0', '50%'],
  ];
  positions.forEach(([dir, cursor, left, top]) => {
    const h = document.createElement('div');
    h.className = 'resize-handle';
    h.dataset.dir = dir;
    h.style.position = 'absolute';
    h.style.width = '12px';
    h.style.height = '12px';
    h.style.background = '#5420B5';
    h.style.border = '2px solid #fff';
    h.style.borderRadius = '50%';
    h.style.cursor = cursor;
    h.style.left = left;
    h.style.top = top;
    h.style.transform = 'translate(-50%, -50%)';
    h.style.zIndex = 99;
    h.style.display = 'none';
    container.appendChild(h);
    handles[dir] = h;

    h.addEventListener('mousedown', function(e) {
      if (!container.closest('.edit-mode')) return;
      isResizing = true;
      resizeDir = dir;
      startX = e.clientX;
      startY = e.clientY;
      startLeft = img.offsetLeft;
      startTop = img.offsetTop;
      startWidth = img.offsetWidth;
      startHeight = img.offsetHeight;
      e.stopPropagation();
      document.body.style.userSelect = 'none';
    });
  });

  function updateHandles() {
    const show = container.closest('.edit-mode');
    Object.values(handles).forEach(h => h.style.display = show ? 'block' : 'none');
  }
  updateHandles();

  img.addEventListener('mousedown', function(e) {
    if (!container.closest('.edit-mode')) return;
    if (e.target.classList.contains('resize-handle')) return;
    isDragging = true;
    startX = e.clientX;
    startY = e.clientY;
    startLeft = img.offsetLeft;
    startTop = img.offsetTop;
    document.body.style.userSelect = 'none';
  });

  document.addEventListener('mousemove', function(e) {
    if (isDragging) {
      let dx = e.clientX - startX;
      let dy = e.clientY - startY;
      img.style.left = (startLeft + dx) + 'px';
      img.style.top = (startTop + dy) + 'px';
    }
    if (isResizing) {
      let dx = e.clientX - startX;
      let dy = e.clientY - startY;
      let newLeft = startLeft, newTop = startTop, newWidth = startWidth, newHeight = startHeight;
      if (resizeDir.includes('l')) {
        newLeft = startLeft + dx;
        newWidth = startWidth - dx;
      }
      if (resizeDir.includes('r')) {
        newWidth = startWidth + dx;
      }
      if (resizeDir.includes('t')) {
        newTop = startTop + dy;
        newHeight = startHeight - dy;
      }
      if (resizeDir.includes('b')) {
        newHeight = startHeight + dy;
      }
      newWidth = Math.max(30, newWidth);
      newHeight = Math.max(30, newHeight);
      img.style.left = newLeft + 'px';
      img.style.top = newTop + 'px';
      img.style.width = newWidth + 'px';
      img.style.height = newHeight + 'px';
    }
  });

  document.addEventListener('mouseup', function() {
    isDragging = false;
    isResizing = false;
    document.body.style.userSelect = '';
  });

  document.getElementById('editBtn').addEventListener('click', updateHandles);
}

makeDraggableResizable(
  document.getElementById('studentImg'),
  document.getElementById('photoDropArea')
);
makeDraggableResizable(
  document.getElementById('signatureImg'),
  document.getElementById('signDropArea')
);
</script>

    <script>
    // Helper: Convert URL (like from Google Drive) to File object
    async function urlToFile(url, filename, mimeType = 'image/jpeg') {
      const res = await fetch(url);
      const blob = await res.blob();
      return new File([blob], filename, { type: mimeType });
    }

    saveBtn.onclick = async function () {
      const urlParams = new URLSearchParams(window.location.search);
      const studentId = urlParams.get("student_id");

      const pendingRes = await fetch(`https://backendidmaker.test/api/pending/${studentId}`, {
        method: "GET",
        headers: {
          "Accept": "application/json",
          "Authorization": "Bearer " + localStorage.getItem("auth_token")
        }
      });

  const data = await pendingRes.json();

  // Auto-apply saved FIRSTNAME font size
  if (data.firstname_fontsize) {
    document.getElementById('firstNameFontSize').value = data.firstname_fontsize;
    document.getElementById('firstNameFontSizeValue').textContent = data.firstname_fontsize;

    const firstNameSpan = document.querySelector('.name .firstname');
    if (firstNameSpan) {
      firstNameSpan.style.fontSize = data.firstname_fontsize + 'px';
    }
  }

  // Auto-apply saved LASTNAME font size
  if (data.lastname_fontsize) {
    document.getElementById('nameFontSize').value = data.lastname_fontsize;
    document.getElementById('fontSizeValue').textContent = data.lastname_fontsize;

    const lastNameEl = document.querySelector('.name-block .name');
    if (lastNameEl) {
      lastNameEl.style.fontSize = data.lastname_fontsize + 'px';
    }
  }

  const escNumber = document.getElementById('esc_number')?.textContent.trim() || '';

  const studentImg = document.getElementById('studentImg');
  const photoPosition = JSON.stringify({
    left: studentImg.style.left,
    top: studentImg.style.top,
    width: studentImg.style.width,
    height: studentImg.style.height
  });

  const signatureImg = document.getElementById('signatureImg');
  const signaturePosition = JSON.stringify({
    left: signatureImg.style.left,
    top: signatureImg.style.top,
    width: signatureImg.style.width,
    height: signatureImg.style.height
  });

  const firstNameFontSize = document.getElementById('firstNameFontSize').value;
  const lastNameFontSize = document.getElementById('nameFontSize').value;

  const formData = new FormData();
  formData.append('student_id', studentId);
  formData.append('first_name', data.first_name);
  formData.append('last_name', data.last_name);
  formData.append('middle_name', data.middle_name);
  formData.append('address', data.address);
  formData.append('course', data.course);
  formData.append('contact', data.contact);
  formData.append('birth_date', data.birth_date);
  formData.append('photo_position', photoPosition);
  formData.append('signature_position', signaturePosition);
  formData.append('qr_code', data.qr_code || '');
  formData.append('emergency_contact_name', data.emergency_contact_name || '');
  formData.append('emergency_contact_number', data.emergency_contact_number || '');
  formData.append('firstname_fontsize', firstNameFontSize);
  formData.append('lastname_fontsize', lastNameFontSize);
  formData.append('esc', escNumber);

  // ✅ Handle image file or Google Drive URL
  if (typeof newPhotoFile === 'string' && newPhotoFile.startsWith('http')) {
    const file = await urlToFile(newPhotoFile, 'photo.jpg');
    formData.append('image', file);
  } else if (newPhotoFile instanceof File) {
    formData.append('image', newPhotoFile);
  }

// ✅ Handle signature file or URL
if (typeof newSignatureFile === 'string' && newSignatureFile.startsWith('http')) {
  const file = await urlToFile(newSignatureFile, 'signature.jpg');
  formData.append('signature', file);
} else if (newSignatureFile instanceof File) {
  formData.append('signature', newSignatureFile);
} else if (data.signature) {
  // I-add mo ito para ma-copy yung signature from pending to completed
  formData.append('signature_path', data.signature);
}

  try {
    const response = await fetch('https://backendidmaker.test/api/completed', {
      method: 'POST',
      headers: {
        'Authorization': 'Bearer ' + localStorage.getItem("auth_token")
      },
      body: formData
    });

    const result = await response.json();

    if (response.ok) {
      Swal.fire('Saved!', 'ID layout has been saved.', 'success');
      document.querySelector('.id.front').classList.remove('edit-mode');
      saveBtn.style.display = 'none';
      newPhotoFile = null;
      newSignatureFile = null;
    } else {
      console.error("Save failed:", result);
      Swal.fire('Error', 'Failed to save changes.', 'error');
    }
  } catch (err) {
    console.error("Server error:", err);
    Swal.fire('Error', 'Server error. Check console.', 'error');
  }
};
</script>

         <script>
        document.addEventListener("DOMContentLoaded", function () {
        const dropdownBtn = document.getElementById("user-dropdown-btn");
        const dropdownMenu = document.getElementById("user-dropdown-menu");

        dropdownBtn.addEventListener("click", function (e) {
            e.stopPropagation(); 
            dropdownMenu.classList.toggle("hidden");
        });
        document.addEventListener("click", function (e) {
            const dropdownWrapper = document.getElementById("user-dropdown-wrapper");
            if (!dropdownWrapper.contains(e.target)) {
                dropdownMenu.classList.add("hidden");
            }
        });
    });




      document.addEventListener("DOMContentLoaded", function () {
        const logoutBtn = document.getElementById("logout-btn");

        logoutBtn.addEventListener("click", function (e) {
            e.preventDefault();

            Swal.fire({
                title: 'Logout?',
                text: "Are you sure you want to logout?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#aaa',
                confirmButtonText: 'Yes, logout'
            }).then((result) => {
                if (result.isConfirmed) {
                    const token = localStorage.getItem("auth_token");
                    if (!token) {
                        Swal.fire('Error', 'No token found', 'error');
                        return;
                    }

                    fetch("https://backendidmaker.test/api/logout", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "Authorization": "Bearer " + token
                        }
                    })
                    .then(response => {
                        if (!response.ok) throw new Error("Logout failed");
                        return response.json();
                    })
                    .then(data => {
                        Swal.fire({
                            title: 'Logged out!',
                            text: data.message,
                            icon: 'success',
                            timer: 1500,
                            showConfirmButton: false
                        }).then(() => {
                            localStorage.removeItem("auth_token");
                            window.location.href = "index.php";
                        });
                    })
                    .catch(error => {
                        console.error("Logout failed:", error);
                        Swal.fire('Logout Failed', 'Something went wrong.', 'error');
                    });
                }
            });
        });
    });


        document.addEventListener("DOMContentLoaded", () => {
        const token = localStorage.getItem("auth_token");

        if (!token) return;

        fetch("https://backendidmaker.test/api/profile", {
            method: "GET",
            headers: {
            "Authorization": `Bearer ${token}`,
            "Accept": "application/json"
            }
        })
        .then(response => response.json())
        .then(data => {
            const nameElement = document.getElementById("fullName");
            if (nameElement && data.full_name) {
            nameElement.textContent = data.full_name;
            }
        })
        .catch(error => {
            console.error("Error fetching profile:", error);
        });
    });


document.addEventListener("DOMContentLoaded", async () => {
    const urlParams = new URLSearchParams(window.location.search);
    const studentId = urlParams.get("student_id");

    if (!studentId) {
        console.error("No student_id found in URL");
        return;
    }

    try {
        const response = await fetch(`https://backendidmaker.test/api/pending/${studentId}`, {
            method: "GET",
            headers: {
                "Accept": "application/json",
                "Authorization": "Bearer " + localStorage.getItem("auth_token")
            }
        });

        if (!response.ok) throw new Error("Record not found");
        const data = await response.json();

        const lastName = (data.last_name || "").toUpperCase();
        const firstName = (data.first_name || "").toUpperCase();
        const middleInitial = data.middle_name ? data.middle_name.charAt(0).toUpperCase() + "." : "";

        let birthDate = data.birth_date || "";
        if (birthDate.includes("T")) birthDate = birthDate.split("T")[0];
        if (birthDate) {
            const dateObj = new Date(birthDate);
            birthDate = dateObj.toLocaleDateString("en-US", {
                year: "numeric", month: "2-digit", day: "2-digit"
            });
        }

        function toTitleCase(str) {
            return str.toLowerCase().replace(/\b\w/g, c => c.toUpperCase());
        }

        let address = data.address || "";
        address = toTitleCase(address);
        const pobMatch = address.match(/([A-Za-z\s]+Pob\.\s*Hilongos)/i);
        if (pobMatch) {
            address = "Brgy. " + pobMatch[1].trim();
        } else {
            const brgyIndex = address.indexOf("Brgy.");
            const hilongosIndex = address.indexOf("Hilongos");
            if (brgyIndex !== -1 && hilongosIndex !== -1) {
                address = address.substring(brgyIndex, hilongosIndex + "Hilongos".length);
            }
        }

        const student_id = data.student_id || "";
        const idRow = document.querySelector(".id-row");
        const courseSpan = document.getElementById("course_span");

        let course = (data.course || "").toLowerCase();
        let polygonColor = "#FFCC00";

        if (course.includes("elementary")) {
            course = "BEED"; polygonColor = "#6EC6FF";
        } else if (course.includes("information technology")) {
            course = "BSIT"; polygonColor = "#FF9800";
        } else if (course.includes("social studies")) {
            course = "BSED-SS"; polygonColor = "#5420B5";
        } else if (course.includes("math")) {
            course = "BSED-MATH"; polygonColor = "#43A047";
        } else {
            const lowerCourse = course.trim().toLowerCase();
            if (["tvl-ict", "abm", "humms"].includes(lowerCourse)) {
                course = lowerCourse.toUpperCase();
                polygonColor = "#FFCC00";
            } else {
                course = course.toUpperCase().substring(0, 20);
            }
        }

        // Apply values
        document.querySelector('.front-bg').style.background = polygonColor;
        document.querySelector('.name').innerHTML = `${lastName}<br><span class="firstname">${firstName} ${middleInitial}</span>`;
        document.querySelector('.info-row-child .value').textContent = birthDate;
        document.querySelector('.info-row-child .address').textContent = address;
        document.querySelector('.student-id').textContent = student_id;
        document.querySelector('.course').textContent = course;
        document.querySelector('.contact-name').textContent = data.emergency_contact_name || "N/A";
        document.querySelector('.contact-number').textContent = data.emergency_contact_number || "N/A";
        document.querySelector('#qr_code').src = data.qr_code;
        const escDiv = document.querySelector(".esc");
        const escNumberSpan = document.getElementById("esc_number");
        const escLogoDiv = document.querySelector(".esc-logo");

        const isHighSchool = student_id.toUpperCase().includes("JHS") || student_id.toUpperCase().includes("SHS");

        // Check ESC value
        const hasValidESC = data.esc && data.esc.trim() !== "" && data.esc.trim().toUpperCase() !== "N/A";

        if (isHighSchool && hasValidESC) {
            // Show ESC and Logo
            escDiv.style.display = "flex";
            escLogoDiv.style.display = "block";
            if (escNumberSpan) escNumberSpan.textContent = data.esc;
        } else {
            // Hide ESC and Logo
            escDiv.style.display = "none";
            escLogoDiv.style.display = "none";
        }

         // Display signature kung meron
              if (data.signature) {
                  const signatureImg = document.getElementById('signatureImg');
                  const backSignatureImg = document.querySelector('.back-signature-img');
                  
                  // Direct URL sa storage
                  const signatureUrl = `https://backendidmaker.test/storage/${data.signature}`;
                  signatureImg.src = signatureUrl;
                  if (backSignatureImg) backSignatureImg.src = signatureUrl;
                  
                  console.log('Signature loaded:', signatureUrl);
              }

        // Font color control
        if (isHighSchool) {
            document.querySelector('.name').style.color = '#000';
            document.querySelector('.info-row-child .value').style.color = '#000';
            document.querySelector('.info-row-child .address').style.color = '#000';
            document.querySelectorAll('.footer span').forEach(e => e.style.color = '#000');
            document.querySelectorAll('.label').forEach(e => e.style.color = '#000');
        } else {
            document.querySelector('.name').style.color = '#fff';
            document.querySelector('.info-row-child .value').style.color = '#fff';
            document.querySelector('.info-row-child .address').style.color = '#fff';
            document.querySelectorAll('.footer span').forEach(e => e.style.color = '#fff');
        }

            } catch (error) {
                console.error("Error fetching student data:", error);
            }

           

        // DYNAMIC SCHOOL YEAR PATCH

        // SCHOOL YEAR PATCH: PRIORITIZE PER-STUDENT, FALLBACK TO GLOBAL
try {
  const urlParams = new URLSearchParams(window.location.search);
  const studentId = urlParams.get("student_id");
  let usedStudentYears = false;

  // 1. Try per-student school years
  if (studentId) {
    const res = await fetch(`https://backendidmaker.test/api/completed/${studentId}`, {
      headers: { "Authorization": "Bearer " + localStorage.getItem("auth_token") }
    });
    const data = await res.json();
    if (data.school_years && data.school_years.length) {
      const years = data.school_years;
      document.getElementById('schoolYearInput').value = years[0].split('-')[0];
      const yearCells = document.querySelectorAll('.year-cell .rotated-text');
      // Assign years from bottom to top (para 2025-2026 nasa pinakababa)
      for (let i = 0; i < years.length; i++) {
        const cellIdx = yearCells.length - 1 - i;
        if (yearCells[cellIdx]) yearCells[cellIdx].textContent = years[i];
      }
      usedStudentYears = true;
    }
  }

  // 2. If no per-student years, fallback to global
  if (!usedStudentYears) {
    const res = await fetch('https://backendidmaker.test/api/school-year', {
      headers: { "Authorization": "Bearer " + localStorage.getItem("auth_token") }
    });
    const data = await res.json();
    let startYear = parseInt(data.school_year_start || new Date().getFullYear());
    const years = [];
    for (let i = 0; i < 4; i++) {
      years.push(`${startYear + i}-${startYear + i + 1}`);
    }
    const yearCells = document.querySelectorAll('.year-cell .rotated-text');  
    for (let i = 0; i < years.length; i++) {
      const cellIdx = yearCells.length - 1 - i;
      if (yearCells[cellIdx]) yearCells[cellIdx].textContent = years[i];
    }
  }
} catch (err) {
  console.error("Failed to fetch school year:", err);
}
        });


  
      // Font size slider logic for First Name
      const firstNameFontSizeSlider = document.getElementById('firstNameFontSize');
      if (firstNameFontSizeSlider) {
        firstNameFontSizeSlider.addEventListener('input', function() {
          const size = this.value;
          const firstNameSpan = document.querySelector('.name .firstname');
          if (firstNameSpan) {
            firstNameSpan.style.fontSize = size + 'px';
          }
          document.getElementById('firstNameFontSizeValue').textContent = size;
        });
      }

      // Font size slider logic for Last Name
      const nameFontSizeSlider = document.getElementById('nameFontSize');
      if (nameFontSizeSlider) {
        nameFontSizeSlider.addEventListener('input', function() {
          const size = this.value;
          const lastNameEl = document.querySelector('.name-block .name');
          if (lastNameEl) {
            lastNameEl.style.fontSize = size + 'px';
          }
          document.getElementById('fontSizeValue').textContent = size;
        });
      }

     document.getElementById('saveSchoolYearBtn').onclick = async function() {
  const schoolYearStart = parseInt(document.getElementById('schoolYearInput').value.trim(), 10);
  if (isNaN(schoolYearStart)) {
    Swal.fire('Error', 'Please enter a valid year (e.g. 2027)', 'error');
    return;
  }
  const urlParams = new URLSearchParams(window.location.search);
  const studentId = urlParams.get("student_id");
  const resp = await fetch(`https://backendidmaker.test/api/completed/update-by-student-id/${studentId}`, {
    method: 'POST',
    headers: {
      "Authorization": "Bearer " + localStorage.getItem("auth_token"),
      "Content-Type": "application/json"
    },
    body: JSON.stringify({ school_year_start: schoolYearStart })
  });
  if (resp.ok) {
    const result = await resp.json();
    Swal.fire('Saved!', 'School years updated for this ID.', 'success');
    // Update year display (bottom to top)
    const yearCells = document.querySelectorAll('.year-cell .rotated-text');
    if (result.years && yearCells.length) {
      for (let i = 0; i < result.years.length; i++) {
        const cellIdx = yearCells.length - 1 - i;
        if (yearCells[cellIdx]) yearCells[cellIdx].textContent = result.years[i];
      }
    }
  } else {
    Swal.fire('Error', 'Failed to update school year.', 'error');
  }
};

    


   
    </script>

