
function getRefs(el) {
    let result = {};
    
    [...el.querySelectorAll('[data-ref]')]
      .forEach(ref => {
        result[ref.dataset.ref] = ref;
      });
    
    return result;
  }
  
  function getProps(el) {
    return JSON.parse(el.dataset.props);
  }
  
  function createFromHTML(html='') {
    let element = document.createElement(null);
    element.innerHTML = html;
    return element.firstElementChild;
  }
  
  function fieldRepeaterComponent(el) {
    const props = getProps(el);
    const refs = getRefs(el);
    
    let rowNumber = 1;
    
    function renderRow() {
      return `
        <li class="repeatable-field__row">
          <div class="repeatable-field__row-wrap">
            <input
                class="repeatable-field__input form-field"
                data-ref="input"
                type="text"
                name="${props.inputName}[]"
                aria-label="${props.labelText} #${rowNumber}"
            />
  
            <button
                class="repeatable-field__remove-button button"
                data-ref="removeButton"
                type="button"
            >
              ${props.removeLabel ?? 'Remove'}
            </button>
          </div>
        </li>
      `;
    }
    
    function updateLimitCounter() {
      const rowCount = refs.rowList.children.length;
      refs.limitCounter.innerText = `${rowCount}/${props.maxRows}`;
    }
    
    function addRow(focusInput=false) {
      if (refs.rowList.children.length >= props.maxRows)
        return;
      
      let newRow = createFromHTML(renderRow());
      const rowRefs = getRefs(newRow);
  
      rowRefs.removeButton.onclick = (e) => {
        e.preventDefault();
        removeRow(newRow);
      }
      
      refs.rowList.appendChild(newRow);
      
      if (focusInput) rowRefs.input.focus();
      
      if (refs.rowList.children.length >= props.maxRows) {
        refs.addButton.style.display = 'none';
      }
      
      rowNumber += 1;
      
      updateLimitCounter();
    }
    
    function removeRow(row) {
      if (refs.rowList.children.length <= 1)
        return;
      
      row.remove();
      el.focus();
      
      updateLimitCounter();
      
      if (refs.rowList.children.length < props.maxRows) {
        refs.addButton.style.display = '';
      }
    }
    
    function init() {
      addRow();
    }
    
    refs.addButton.onclick = (e) => {
      e.preventDefault();
      addRow(true);
    }
    
    init();
  }
  
  document.querySelectorAll('[data-component="field-repeater"]')
    .forEach(el => {
      fieldRepeaterComponent(el);
    });

    function convertToJSON(name) {
        const inputFields = document.getElementsByName(name);
        const inputData = [];
        // Collect all the input values
        for (let i = 0; i < inputFields.length; i++) {
            const value = inputFields[i].value;
            if(value != ""){
                inputData.push(value);
            }
        }
    
        if(inputData == ""){
           return null;
        }else{
            const jsonString = JSON.stringify(inputData);
            
            return jsonString;
        }
    }

    $(document).on('submit', '#formAddClub', function (e) {
    e.preventDefault();
    var userCode = document.getElementById("userCode").value;

    var clubObjective = convertToJSON('clubObjective[]');
    var clubSpec = convertToJSON('clubSpec[]');
    var clubResource = convertToJSON('clubResource[]');
    var clubAssessment = convertToJSON('clubAssessment[]');
    var clubPlan = convertToJSON('clubPlan[]');

    var clubName = document.getElementById("clubName").value;
    var clubClass = document.getElementById("clubClass").value;
    var clubAmount = document.getElementById("clubAmount").value;
    var clubPlace = document.getElementById("clubPlace").value;
    var clubSubject = document.getElementById("clubSubject").value;
    var clubTeacher = document.getElementById("clubTeacher").value;
    var clubDescription = document.getElementById("clubDescription").value;
    // console.log(JSON.parse(clubPlan).length);
    if(userCode == null || userCode == ""){
        Swal.fire({
            title: 'Error!',
            text: 'กรุณาเข้าสู่ระบบก่อน',
            icon: 'error',
        }).then(function() {
            window.location.href = burl() + "login";
        })
    }

    if(clubObjective == null || clubSpec == null || clubResource == null || clubAssessment == null || clubName == "" || clubClass == "" || clubAmount == "" || clubPlace == "" || clubSubject == "" || clubTeacher == "" || clubDescription == "" || clubPlan == null || userCode == null || userCode == ""){
      Swal.fire({
        title: 'Error!',
        text: 'กรุณากรอกข้อมูลให้ครบถ้วน',
        icon: 'error',
      })
    }else{
        if(JSON.parse(clubPlan).length != 20){
            Swal.fire({
                title: 'Error!',
                text: 'กรุณาใส่ข้อมูลในแผน แผนกำหนดกิจกรรมรายชั่วโมงให้ครบ 20 ชั่วโมง',
                icon: 'error',
            })
        }else{
      $.ajax({
        url: burl() + 'api/backdoor/club/add',
        method: 'POST',
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        data: {
            userCode: userCode,
            clubObjective: clubObjective,
            clubSpec: clubSpec,
            clubResource: clubResource,
            clubAssessment: clubAssessment,
            clubPlan: clubPlan,
            clubName: clubName,
            clubClass: clubClass,
            clubAmount: clubAmount,
            clubPlace: clubPlace,
            clubSubject: clubSubject,
            clubTeacher: clubTeacher,
            clubDescription: clubDescription,
            
        },
        contentType: 'application/json',
        success: function (res) {
          console.log(res.status);
          if (res.status === 'true') { 
            Swal.fire({
              title: 'Success!',
              text: res.message,
              icon: 'success',
              timer: 2000,
              timerProgressBar: true,
            }).then((result) => {
              window.location.href = burl() + "backdoor/club";
            })
              // window.location.href = "home";
          } else {
            if(res.code == "300"){
              window.location.href = "login";
            }else{
            Swal.fire({
              title: 'Error!',
              text: res.message,
              icon: 'error',
            })
          }
          }
        },
  
      }); 
    }
    }
  });