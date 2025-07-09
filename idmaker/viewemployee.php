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
        border-radius: 0px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        position: relative;
        overflow: hidden;
        
      }

      .front {
      background: #b8d3e6;
        position: relative;
        overflow: hidden;
      }

      .front-bg {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
        background: #5420B5;
        clip-path: polygon(0 58%, 100% 68%, 100% 100%, 0% 100%);
        z-index: 2;
      }
      .id-left {
        position: absolute;
        top: 2px;
        right: -1px; 
        left: auto;
        display: flex;
        flex-direction: column;
        align-items: flex-end; 
        gap: 8px;
        z-index: 2;
        width: 90px;
          }
    
      .logo {
        position: absolute;
        top: 10px;
        left: 28px;
        width: 43px;
        height: 43px;
        z-index: 2;
      }

    .school-info {
      position: absolute;
      top: 55px;
      left: -12px;
      width: 120px;
      z-index: 2;
      display: flex;
      flex-direction: column;
      gap: 0;
      text-align: center;
    }
    .school-name {
      font-size: 7px;
      font-weight: bold;
      color: #222;
      line-height: 1.0;
      text-align: center;
    }
    .school-address {
      font-size: 6px;
      color: #222;
      margin-top: -2px;
      font-weight: 500;
    }

    .qr {
      position: absolute;
      top: 78px;
      left: 14px;
      width: 70px;
      height: 70px;

      object-fit: cover;
      background: #fff;
      z-index: 2;


    }

    .signature {
      top: auto;
      left: auto;
      width: 220px !important;
      height:auto;
      object-fit: contain;
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
    line-height: 1.4;
    text-align: left; /* ✅ bagong value */
    color: #fff;
    letter-spacing: 1px;
    z-index: 2;
    margin-bottom: -6px;
    }

   .name span {
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 0.5px;
    margin-top: -6px;
    display: block;
    line-height: 1.05;
    text-align: left; 
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
        font-size: 8px; 
        margin-top: -2px; 
        line-height: 1.1;
        margin-bottom: 1px;
      }
          .birth {
      text-align: left;
    }

    .address {
      text-align: right;
        font-size: 8px;
    }

    .id-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-weight: bold;
      background: #fff;
      color: #000000;
      padding: 0px 5px 0px 5px;
      border-radius: 0px;
      margin: 0px 0 0px 0;
      font-size: 13px;
    }   
    .student-id{
      margin-top: 0px;
    }
    .course{
      margin-top:0px;
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
      width: 40px;   
      height: auto;
      z-index: 5;         
      pointer-events: none; 
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
      height: 240px;
      top: 0;
      left: 0;
      pointer-events: none; 
      box-sizing: border-box; 
      border: none;
      background: transparent;
    }
    #photoDropArea {
      width: 120%;
      height: 240px;
      top: 0;
      left: -90px;
      z-index: 1;
    }
    #signDropArea {
      width: 90px;
      height: 78px;
      top: 140px;
      left: 2px;
      z-index: 3;
    }
    .edit-mode .img-drop-area {
      pointer-events: auto; 
      border: 2px dashed #5420B5;
      background: rgba(84,32,181,0.05);
    }
</style>
<!-- back -->

<style>
  .id-card {
      width: 204px;
      height: 324px;
      background: #fff;
      box-shadow: 0 0 6px rgba(0, 0, 0, 0.15);
      padding: 0;
      box-sizing: border-box;
      font-size: 7.1px;
      display: flex;
      flex-direction: column;
      overflow: hidden;
    
    }

    .box {
      padding: 10px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      height: 100%;
      box-sizing: border-box;
    }

    .certification {
      text-align: center;
      line-height: 1.2;
    }

    .certification b {
      font-size: 7px;
      display: block;
      margin-top: 2px;
    }

    .signature-block {
      text-align: center;
      margin: 6px 0 4px;
    }

   .signature-employee img {
      width: 45px;
      height: auto;
      object-fit: contain;
      margin-bottom:-5px;
      display: block;
    }
    .signature-employee {
      text-align: center; 
       margin-top: -14px;
    }

    .director-name {
      font-weight: bold;
      font-size: 6.4px;
      margin-top: -4px;
    }

    .director-title {
      font-size: 6px;
    }

    .info-table {
      width: 100%;
      font-size: 6px;
      border-collapse: collapse;
      margin-top: 5px;
    }

    .info-table td {
      border: 1px solid #969393;
      padding: 2px 3px;
      vertical-align: top;
    }

    .reminders {
      text-align: center;
      font-size: 6.5px;
      font-weight: bold;
      margin: 10px 0;
      padding: 4px 0;
      line-height: 1.3;
    }

    .contact-info {
      font-size: 7px;
      text-align: center;
      line-height: 1.3;
    }

    .emergency {
      font-weight: bold;
      margin-top: 4px;
      font-size: 7.1px;
    }

    .red-box {
      background:rgb(12, 11, 11);
      color: white;
      font-size: 6px;
      padding: 5px 5px;
      text-align: center;
      font-weight: bold;
      letter-spacing: 0.5px;
      line-height: 1.4;
      text-transform: uppercase;
      margin-top: 5px;
      box-sizing: border-box;
    }

    .bottom {
      margin-top: -25px;
    }

    .social-link {
      background:rgb(12, 11, 11);
      padding: 5px 4px;
      text-align: center;
      box-sizing: border-box;
    }

    .facebook-link {
      font-size: 7px;
      color: #fff;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 3px;
      white-space: nowrap;
    }

    .fb-icon {
      display: inline-block;
      width: 12px;
      height: 12px;
      background-image: url('https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg');
      background-size: cover;
      background-repeat: no-repeat;
      margin-right: 4px;
    }
</style>
<style>

   @media print {
      html, body {
        zoom: 1.03; 
        padding: 0;
        margin: 0;
      }

      body * {
        visibility: hidden;
      }

      #idWrapper, #idWrapper * {
        visibility: visible;
      }

      #idWrapper {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        background: white;
      }

      #idFront, #idBack {
        page-break-before: avoid;
        page-break-after: avoid;
      }

      .front {
        background-color: #b8d3e6 !important;
        -webkit-print-color-adjust: exact !important;
        print-color-adjust: exact !important;
      }

      @page {
        margin: 0;
        size: auto;
      }
    
      .back {
        background-color: white !important;
        -webkit-print-color-adjust: exact !important;
        print-color-adjust: exact !important;
      }
    }
</style>

<style>
    .glass-radio-group {
      --bg: rgba(255, 255, 255, 0.06);
      --text: rgb(155, 148, 148);
      display: flex;
      position: relative;
      background: var(--bg);
      border-radius: 1rem;
      backdrop-filter: blur(12px);
      box-shadow:
        inset 1px 1px 4px rgba(255, 255, 255, 0.2),
        inset -1px -1px 6px rgba(0, 0, 0, 0.3),
        0 4px 12px rgba(0, 0, 0, 0.15);
      overflow: hidden;
      width: fit-content;
    }

    .glass-radio-group input {
      display: none;
    }

    .glass-radio-group label {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      min-width: 100px;
      font-size: 14px;
      padding: 0.8rem 1.6rem;
      cursor: pointer;
      font-weight: 600;
      letter-spacing: 0.3px;
      color: var(--text);
      position: relative;
      z-index: 2;
      transition: color 0.3s ease-in-out;
    }

    .glass-radio-group label:hover {
      color: gray;
    }

    .glass-radio-group input:checked + label {
      color: #fff;
    }

    .glass-glider {
      position: absolute;
      top: 0;
      bottom: 0;
      width: calc(100% / 3);
      border-radius: 1rem;
      z-index: 1;
      transition:
        transform 0.5s cubic-bezier(0.37, 1.95, 0.66, 0.56),
        background 0.4s ease-in-out,
        box-shadow 0.4s ease-in-out;
    }

   
    #showAllBtn:checked ~ .glass-glider {
      transform: translateX(0%);
      background: linear-gradient(135deg, #ffc10788, #ffeb3b);
      box-shadow:
        0 0 18px rgba(255, 193, 7, 0.5),
        0 0 10px rgba(255, 255, 150, 0.4) inset;
    }

    
    #showFrontBtn:checked ~ .glass-glider {
      transform: translateX(100%);
      background: linear-gradient(135deg, #3498db88, #6dd5fa);
      box-shadow:
        0 0 18px rgba(52, 152, 219, 0.5),
        0 0 10px rgba(255, 255, 255, 0.4) inset;
    }

  
    #showBackBtn:checked ~ .glass-glider {
      transform: translateX(200%);
      background: linear-gradient(135deg, #28a74588, #a8e063);
      box-shadow:
        0 0 18px rgba(40, 167, 69, 0.5),
        0 0 10px rgba(200, 240, 200, 0.4) inset;
    }

    button.print-button {
        width: 60px;
        height: 60px;     
        border-radius: 50%;
        position: relative;
        padding: 0;
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center; 
        transition: transform 0.2s;
    }

    button.print-button:hover {
        transform: scale(1.1);
    }

    span.print-icon,
    span.print-icon::before,
    span.print-icon::after,
    button.print-button:hover .print-icon::after {
        box-sizing: border-box;
        background-color: #fff;
        border: solid 3px #333;
    }

    span.print-icon::after {
        border-width: 2px;
    }

    span.print-icon {
        position: relative;
        display: inline-block;
        width: 50%;
        height: 30%;
        background: #fff;
        border-radius: 20% 20% 0 0;
    }

    span.print-icon::before {
        content: "";
        position: absolute;
        bottom: 100%;
        left: 12%;
        right: 12%;
        height: 110%;
        transition: height 0.2s 0.15s;
    }

    span.print-icon::after {
        content: "";
        position: absolute;
        top: 55%;
        left: 12%;
        right: 12%;
        height: 0%;
        background: #fff;
        background-repeat: no-repeat;
        background-size: 70% 90%;
        background-position: center;
        background-image: linear-gradient(
            to top,
            #fff 0, #fff 14%,
            #333 14%, #333 28%,
            #fff 28%, #fff 42%,
            #333 42%, #333 56%,
            #fff 56%, #fff 70%,
            #333 70%, #333 84%,
            #fff 84%, #fff 100%
        );
        transition: height 0.2s, border-width 0s 0.2s, width 0s 0.2s;
    }

    button.print-button:hover .print-icon::before {
        height: 0;
        transition: height 0.2s;
    }

    button.print-button:hover .print-icon::after {
        height: 120%;
        transition: height 0.2s 0.15s, border-width 0s 0.16s;
    }

    .back-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background: transparent;
        transition: background 0.3s;
        margin-left: 10px;
        text-decoration: none;
    }

    .back-button:hover {
        background: #e0e0e0;
    }

    .back-button svg {
        transition: transform 0.3s;
    }

    .back-button:hover svg {
        transform: translateX(-2px); 
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
                        <a href="#" class="text-gray-500 hover:text-primary">Preview ID</a>
                        <div class="w-4 h-4 flex items-center justify-center text-gray-400 mx-1">
                            <i class="ri-arrow-right-s-line"></i>
                        </div>
                        <span class="text-gray-700">Page</span>
                    </div>
             </div>
          </header>
        <div class="-mt-1 p-4">
                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 30px;">
                    <div style="flex: 1;">
                        <button onclick="goBack()" class="back-button">
                          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="none" stroke="#333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <line x1="19" y1="12" x2="5" y2="12"/>
                              <polyline points="12 19 5 12 12 5"/>
                          </svg>
                        </button>
                    </div>
                   <div style="flex: 1; text-align: center;">
                      <div class="glass-radio-group" style="margin: 0 auto;">
                          <input type="radio" name="id-view" id="showAllBtn" checked />
                          <label for="showAllBtn">All</label>

                          <input type="radio" name="id-view" id="showFrontBtn" />
                          <label for="showFrontBtn">Front</label>

                          <input type="radio" name="id-view" id="showBackBtn" />
                          <label for="showBackBtn">Back</label>

                          <div class="glass-glider"></div>
                      </div>
                  </div>
                  <div style="flex: 1; text-align: right; padding-right: 10px;">
                      <button class="print-button" onclick="printVisibleID()">
                          <span class="print-icon"></span>
                      </button>
                  </div>
                </div>
            </div>
          <div class="-mt-7">
            <div class="id-wrapper hidden" id="idWrapper">
            <div class="id front" id="idFront" style="display: block;">
                <div class="front-bg"></div>

                <!-- STUDENT PHOTO (LEFT) -->
                <div class="img-drop-area" id="photoDropArea" style="position: relative;">
                <img src="assets/img/id_final.png" class="student-img" id="studentImg" alt="Employee Photo"
                    style="position: absolute; width: 150%; height: 240px;" />
                </div>

                <!-- RIGHT SIDE INFO -->
                <div class="id-left">
                <img src="assets/img/log.png" class="logo" alt="Logo" />
                <div class="school-info">
                    <span class="school-name">MLG COLLEGE<br>OF LEARNING, INC</span>
                    <span class="school-address">Atabay, Hilongos, Leyte</span>
                </div>
                <img src="assets/photos/qr.png" class="qr" alt="QR Code" id="qr_code" />

                <div class="img-drop-area" id="signDropArea" style="position: relative;">
                    <img src="assets/img/yan.png" class="signature" id="signatureImg" alt="Signature"
                    style="position: absolute;" />
                </div>
                </div>

                <!-- BOTTOM DETAILS -->
                <div class="bottom-content">
                <div class="esc" style="display: none; text-align: right; margin-right: 7px;">
                    ESC # <span id="esc_number"></span>
                </div>

                <div class="name-block">
                    <div class="name">LASTNAME<br><span class="firstname">FIRST M.</span></div>
                    <div class="info-row">
                    <div class="info-row-child">
                        <br><span class="address">Address Here</span>
                    </div>
                    <div class="info-row-child">
                        <span class="label">Date of Birth:</span>
                        <span class="value">MM/DD/YYYY</span>
                    </div>
                    </div>
                </div>

                <div class="id-row">
                    <span class="student-id">EMP-000000</span>
                    <span id="course_span" class="course">POSITION</span>
                </div>

                <div class="footer">
                    <span>https://mlgcl.edu.ph</span>
                    <span>mlg@mlgcl.edu.ph</span>
                </div>

                <div class="esc-logo" style="display: none;">
                    <img src="assets/img/ESC-Logo.png" class="esc-logo" alt="ESC Logo">
                </div>
                </div>
            </div>

            <!-- BACK SIDE -->
            <div class="id-card back" id="idBack">
                <div class="box">
                <div>
                    <div class="certification">
                    This is to certify that the person whose<br>
                    picture and signature appear herein is a<br>
                    bonafide employee of<br><b>MLG College of Learning, Inc.</b>
                    </div>

                    <div class="signature-block">
                    <div class="signature-employee">
                        <img src="assets/img/yan.png" alt="">
                    </div>
                    <div class="director-name">MARY LILIBETH OYAN, DEV. ED. D.</div>
                    <div class="director-title">School Director</div>
                    </div>

                    <table class="info-table">
                    <tr>
                        <td><b>TIN #</b></td>
                        <td><span class="tin-number">N/A</span></td>
                        <td><b>PhilHealth#</b></td>
                        <td><span class="philhealth-number">N/A</span></td>
                    </tr>
                    <tr>
                        <td><b>SSS #</b></td>
                        <td><span class="sss-number">N/A</span></td>
                        <td><b>HDMF #</b></td>
                        <td><span class="hdmf-number">N/A</span></td>
                    </tr>
                    </table>

                    <div class="reminders">
                    IMPORTANT REMINDERS<br>
                    Always wear this ID while inside the school campus.<br>
                    DO NOT FORGET YOUR ID NUMBER.
                    </div>

                    <div class="contact-info">
                    If lost and found, please surrender this ID to the<br>
                    SCHOOL DIRECTOR’S OFFICE, MLG College of Learning.<br>
                    Inc., Brgy. Atabay, Hilongos, Leyte

                    <div class="emergency">
                        In case of emergency, please contact:<br>
                        <span class="contact-name">N/A</span><br>
                        <span class="contact-number">N/A</span>
                    </div>
                    </div>

                    <div class="qr-box">
                    <div class="red-box">
                        PLEASE SCAN THE QR CODE AT THE FRONT<br>
                        FOR MORE VALIDATION & CONTACT <br> INFORMATION
                    </div>
                    </div>
                </div>
                </div>

                <div class="bottom">
                <div class="social-link">
                    <a class="facebook-link" href="https://www.facebook.com/mlgcl/" target="_blank">
                    <span class="fb-icon"></span> https://www.facebook.com/mlgcl/
                    </a>
                </div>
                </div>
            </div>
            </div>



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

                    fetch("http://127.0.0.1:8000/api/logout", {
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

        fetch("http://127.0.0.1:8000/api/profile", {
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
    const employeeId = urlParams.get("id");

    if (!employeeId) {
        console.error("No employee_id found in URL");
        return;
    }

    try {
        const response = await fetch(`http://127.0.0.1:8000/api/showemployeecomplete/${employeeId}`, {
            method: "GET",
            headers: {
                "Accept": "application/json",
                "Authorization": "Bearer " + localStorage.getItem("auth_token")
            }
        });

        if (!response.ok) throw new Error("Record not found");
        const data = await response.json();

        console.log("Employee Data:", data); // DEBUG: check kung may image at signature

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
        address = address
            .replace(/,/g, "")
            .replace(/\bBrgy\.?/gi, "")
            .replace(/\bLeyte\b/gi, "")
            .replace(/\b\d{4}\b/g, "")
            .replace(/\s+/g, " ")
            .trim();
        address = toTitleCase(address);

        document.querySelector('.name').innerHTML = `${lastName}<br><span class="firstname">${firstName} ${middleInitial}</span>`;
        document.querySelector('.info-row-child .value').textContent = birthDate;
        document.querySelector('.info-row-child .address').textContent = address;
        document.querySelector('.student-id').textContent = data.employee_id || "";
        document.getElementById("course_span").textContent = data.position || "";
        document.querySelector('.contact-name').textContent = data.emergency_contact_name || "N/A";
        document.querySelector('.contact-number').textContent = data.emergency_contact_number || "N/A";
        document.querySelector('.tin-number').textContent = data.tin_no || "N/A";
        document.querySelector('.sss-number').textContent = data.sss_no || "N/A";
        document.querySelector('.philhealth-number').textContent = data.philhealth_no || "N/A";
        document.querySelector('.hdmf-number').textContent = data.hdmf_no || "N/A";

        // Images
        const studentImg = document.getElementById("studentImg");
        const signatureImg = document.getElementById("signatureImg");

        // QR
        if (data.qr) document.getElementById("qr_code").src = data.qr;

        // Image (convert relative path to full URL)
        if (data.image && studentImg) {
            studentImg.src = data.image.includes('http') ? data.image : `http://127.0.0.1:8000/storage/${data.image}`;
        }

        // Signature
        if (data.signature && signatureImg) {
            signatureImg.src = data.signature.includes('http') ? data.signature : `http://127.0.0.1:8000/storage/${data.signature}`;
        }

        // Photo position
        if (data.photo_position && studentImg) {
            try {
                const pos = JSON.parse(data.photo_position);
                Object.assign(studentImg.style, pos);
            } catch (e) {
                console.error("Invalid photo_position JSON");
            }
        }

        // Signature position
        if (data.signature_position && signatureImg) {
            try {
                const pos = JSON.parse(data.signature_position);
                Object.assign(signatureImg.style, pos);
            } catch (e) {
                console.error("Invalid signature_position JSON");
            }
        }

        // Font sizes
        const firstNameSpan = document.querySelector(".name .firstname");
        const lastNameBlock = document.querySelector(".name-block .name");

        if (data.firstname_fontsize && firstNameSpan) {
            firstNameSpan.style.fontSize = data.firstname_fontsize + "px";
        }
        if (data.lastname_fontsize && lastNameBlock) {
            lastNameBlock.style.fontSize = data.lastname_fontsize + "px";
        }

        // Font colors
        document.querySelector('.name').style.color = '#fff';
        document.querySelector('.info-row-child .value').style.color = '#fff';
        document.querySelector('.info-row-child .address').style.color = '#fff';
        document.querySelectorAll('.footer span').forEach(e => e.style.color = '#fff');
        document.querySelectorAll('.label').forEach(e => e.style.color = '#fff');

        // Background color
        const frontBg = document.querySelector('.front-bg');
        const positionText = (data.position || "").toLowerCase();

        if (positionText.includes('instructor')) {
            frontBg.style.background = '#00008B';
        } else if (positionText.includes('head') || positionText.includes('admin')) {
            frontBg.style.background = '#CC0000';
        } else {
            frontBg.style.background = '#000000';
        }

    } catch (error) {
        console.error("Error fetching employee data:", error);
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


   
    </script>

    <script>
     const frontBtn = document.getElementById('showFrontBtn');
    const backBtn = document.getElementById('showBackBtn');
    const allBtn = document.getElementById('showAllBtn');

    const idFront = document.getElementById('idFront');
    const idBack = document.getElementById('idBack');

    function showWithAnimation(showEl, hideEl) {
        hideEl.style.transition = 'opacity 0.5s ease';
        hideEl.style.opacity = '0';
        setTimeout(() => {
            hideEl.style.display = 'none';
            showEl.style.display = 'block';
            showEl.style.opacity = '0';
            showEl.style.transition = 'opacity 0.5s ease';
            setTimeout(() => {
                showEl.style.opacity = '1';
            }, 10);
        }, 400);
    }

    frontBtn.addEventListener('change', () => {
        showWithAnimation(idFront, idBack);
    });

    backBtn.addEventListener('change', () => {
        showWithAnimation(idBack, idFront);
    });

    allBtn.addEventListener('change', () => {
        idFront.style.transition = 'opacity 0.5s ease';
        idBack.style.transition = 'opacity 0.5s ease';
        idFront.style.display = 'block';
        idBack.style.display = 'block';
        setTimeout(() => {
            idFront.style.opacity = '1';
            idBack.style.opacity = '1';
        }, 10);
    });
</script>

<script>
    function printVisibleID() {
    const idFront = document.getElementById('idFront');
    const idBack = document.getElementById('idBack');

    const isFrontVisible = idFront.style.display !== 'none';
    const isBackVisible = idBack.style.display !== 'none';
    if (isFrontVisible) idBack.style.display = 'none';
    if (isBackVisible) idFront.style.display = 'none';

    setTimeout(() => {
      window.print();
      if (isFrontVisible) {
        idFront.style.display = 'block';
        idBack.style.display = 'none';
      } else {
        idFront.style.display = 'none';
        idBack.style.display = 'block';
      }
    }, 100);
  }
</script>

<script>
    function goBack() {
    window.history.back();
}
</script>
