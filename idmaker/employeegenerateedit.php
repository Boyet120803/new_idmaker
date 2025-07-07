<?php  require_once ('admin-partials/header.php') ?>
<?php  require_once ('admin-partials/sidebar.php') ?>
<?php require_once ('admin-partials/js.php') ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<style>

        .id-wrapper {
          display: flex;
          gap: 30px;
          flex-wrap: wrap;
          justify-content: center;
            transform: scale(2);      /* adjust 1.2 to your preferred zoom level */
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
      text-align: right;
      color: #fff;
      letter-spacing: 1px;
      z-index: 2;
      margin-bottom: 0px;
    }

    .name span {
      font-size: 13px;
      font-weight: 600;
      letter-spacing: 0.5px;
      margin-top: -2px;
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
            font-size: 7px;   
            margin-top: 6px; 
            line-height: 1.2;
          }
          .info-row-child .value {
            font-size: 10px;  
            margin-top: -2px; 
            line-height: 1.1;
            margin-bottom: 1px;
          }
              .birth {
          text-align: left;
        }

        .address {
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
          font-size: 13px;
        }

        .footer {
          font-size: 9px;
          display: flex;
          justify-content: space-between;
          color: #fff;
          margin-top: 2px;
            padding: 0 5px 5px 5px;
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
<div class="mt-6">
 <div class="id-wrapper">
   <div class="id front" id="idFront" style="display: block;">
      <div class="front-bg"></div>
          <div class="id-left">
             <img src="assets/img/log.png" class="logo" alt="Logo">
              <div class="school-info">
                <span class="school-name">MLG COLLEGE<br>OF LEARNING, INC</span>
                <span class="school-address">Brgy. Atabay, Hilongos, Leyte</span>
              </div>
              <img src="assets/photos/qr.png" class="qr" alt="QR Code" id="qr_code">
              <div class="img-drop-area" id="signDropArea">
                <img src="assets/img/yan.png" class="signature" id="signatureImg" alt="Signature">
              </div>
          </div>
          <div class="img-drop-area" id="photoDropArea">
            <img src="assets/img/id_final.png" class="student-img" id="studentImg" alt="Student Photo" style="width:150%;height:240px;">
          </div>
          <div class="bottom-content">
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
            <span class="course">BSED-SS</span>
          </div>
          <div class="footer">
            <span>https://mlgcl.edu.ph</span>
            <span>mlg@mlgcl.edu.ph</span>
          </div>
     </div>
</div>
<!-- BACK SIDE -->
    <div class="id back" id="idBack" style="display: none;">
       <div class="id-card">
            <div class="box">
                <div>
                    <div class="certification">
                    This is to certify that the person whose<br>
                    picture and signature appear herein is a<br>
                    bonafide employee of<br><b>MLG College of Learning, Inc.</b>
                    </div>

                    <div class="signature-block">
                        <div class="signature">
                            <img src="assets/img/yan.png" alt="">
                        </div>
                        <div class="main-name">
                            <div class="director-name">MARY LILIBETH OYAN, DEV. ED. D.</div>
                            <div class="director-title">School Director</div>
                        </div>
                    </div>

                    <table class="info-table">
                    <tr>
                        <td><b>TIN #</b></td>
                        <td>292-429-675</td>
                        <td><b>PhilHealth#</b></td>
                        <td>01-051293562-7</td>
                    </tr>
                    <tr>
                        <td><b>SSS #</b></td>
                        <td>34-1976221-1</td>
                        <td><b>HDMF #</b></td>
                        <td>1210-2944-8122</td>
                    </tr>
                    </table>

                    <div class="reminders">
                    <span>IMPORTANT REMINDERS</span><br>
                    Always wear this ID while inside the school campus.<br>
                    <span>DO NOT FORGET YOUR ID NUMBER.</span>
                    </div>

                    <div class="contact-info">
                    If lost and found, please surrender this ID to the<br>
                    SCHOOL DIRECTOR’S OFFICE, MLG College of Learning.<br>
                    Inc., Brgy. Atabay, Hilongos, Leyte

                    <div class="emergency">
                        In case of emergency, please contact:<br>
                        JACQUILINE GELSANO<br>
                        0930-646-9599
                    </div>
                    </div>

                    <div class="qr-box">
                    <div class="red-box">
                        PLEASE SCAN THE QR CODE AT THE FRONT<br>
                        FOR MORE VALIDATION & CONTACT INFORMATION
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
 <!--  -->
<script>
    let newPhotoFile = null;
    let newSignatureFile = null;

    const editBtn = document.getElementById('editBtn');
    const saveBtn = document.getElementById('saveBtn');
    editBtn.onclick = function() {
    document.querySelector('.id.front').classList.toggle('edit-mode');
    saveBtn.style.display = document.querySelector('.id.front').classList.contains('edit-mode') ? 'inline-block' : 'none';
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
<!-- draggable -->
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

 saveBtn.onclick = async function () {
  const urlParams = new URLSearchParams(window.location.search);
  const studentId = urlParams.get("student_id");

  const pendingRes = await fetch(`http://127.0.0.1:8000/api/pending/${studentId}`, {
    method: "GET",
    headers: {
      "Accept": "application/json",
      "Authorization": "Bearer " + localStorage.getItem("auth_token")
    }
  });

  const data = await pendingRes.json();

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

  let response;

  if (newPhotoFile || newSignatureFile) {
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

    if (newPhotoFile) formData.append('image', newPhotoFile);
    if (newSignatureFile) formData.append('signature', newSignatureFile);

    response = await fetch('http://127.0.0.1:8000/api/completed', {
      method: 'POST',
      headers: {
        'Authorization': 'Bearer ' + localStorage.getItem("auth_token")
      },
      body: formData
    });
  } else {
    const payload = {
      student_id: studentId,
      first_name: data.first_name,
      last_name: data.last_name,
      middle_name: data.middle_name,
      address: data.address,
      course: data.course,
      contact: data.contact,
      emergency_contact_name: data.emergency_contact_name || '',
      emergency_contact_number: data.emergency_contact_number || '',
      birth_date: data.birth_date,
      photo_position: photoPosition,
      signature_position: signaturePosition,
      qr_code: data.qr_code || ''
    };

    response = await fetch('http://127.0.0.1:8000/api/completed', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'Authorization': 'Bearer ' + localStorage.getItem("auth_token")
      },
      body: JSON.stringify(payload)
    });
  }

  if (response.ok) {
    Swal.fire('Saved!', 'ID layout has been saved.', 'success');
    document.querySelector('.id.front').classList.remove('edit-mode');
    saveBtn.style.display = 'none';
    newPhotoFile = null;
    newSignatureFile = null;
  } else {
    Swal.fire('Error', 'Failed to save changes.', 'error');
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




      document.addEventListener("DOMContentLoaded", function () 
    {
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
    const studentId = urlParams.get("student_id");

    if (!studentId) {
        console.error("No student_id found in URL");
        return;
    }

    try {
        const response = await fetch(`http://127.0.0.1:8000/api/pending/${studentId}`, {
            method: "GET",
            headers: {
                "Accept": "application/json",
                "Authorization": "Bearer " + localStorage.getItem("auth_token")
            }
        });

        if (!response.ok) {
            throw new Error("Record not found");
        }

        const data = await response.json();
        const lastName = (data.last_name || "").toUpperCase();
        const firstName = (data.first_name || "").toUpperCase();
        const middleInitial = data.middle_name ? data.middle_name.charAt(0).toUpperCase() + "." : "";
          let birthDate = data.birth_date || "";
          if (birthDate.includes("T")) {
              birthDate = birthDate.split("T")[0];
          }
          if (birthDate) {
              const dateObj = new Date(birthDate);
             birthDate = dateObj.toLocaleDateString("en-US", {
    year: "numeric",
    month: "2-digit",
    day: "2-digit"
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

       let course = (data.course || "").toLowerCase();
        let polygonColor = "#5420B5"; 

        if (course.includes("elementary")) {
            course = "BEED";
            polygonColor = "#6EC6FF"; 
        } else if (course.includes("information technology")) {
            course = "BSIT";
            polygonColor = "#FF9800";
        } else if (course.includes("social studies")) {
            course = "BSED-SS";
            polygonColor = "#5420B5";
        }else if (course.includes("math")) {
            course = "BSED-MATH";
            polygonColor = "#43A047";
        }
      else {
            course = course.toUpperCase().substring(0, 6); 
        }
        document.querySelector('.front-bg').style.background = polygonColor;    
        document.querySelector('.name').style.color = '#fff';
        document.querySelector('.info-row-child .value').style.color = '#fff';
        document.querySelector('.info-row-child .address').style.color = '#fff';
        document.querySelectorAll('.footer span').forEach(e => e.style.color = '#fff');
        document.querySelector("#qr_code").src = data.qr_code;
        document.querySelector(".name").innerHTML = `${lastName}<br><span>${firstName} ${middleInitial}</span>`;
        document.querySelector(".info-row-child .value").textContent = birthDate;
        document.querySelector(".info-row-child .address").textContent = address;
        document.querySelector(".student-id").textContent = student_id;
        document.querySelector(".course").textContent = course;
        document.querySelector(".contact-name").textContent = data.emergency_contact_name || "N/A";
        document.querySelector(".contact-number").textContent = data.emergency_contact_number || "N/A";


    } catch (error) {
        console.error("Error fetching student data:", error);
    }
});

    </script>
