<?php
    include('./header.php')
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Statistics Club Signup Form</title>
  <style>
    .bodypart {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      padding-top:130px;
      padding-bottom:30px;
      background-color:#47bee5
    }
    .dlfexDiv{
      display:flex;
      justify-content:space-between;
    }
    .dlfexDiv div{
      padding:0px 5px;
      width:50%;
    }

    .form-container {
      background-color: #fff;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      padding: 20px;
      width: 800px;
      
    }

    .form-field {
      display: flex;
      flex-direction: column;
      margin-bottom: 20px;
    }

    .form-field label {
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-field input,
    .form-field select,
    .form-field textarea {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
      resize: none;
      width:100%
    }

    .form-field select {
      width: 100%;
    }

    .form-submit {
      display: flex;
      justify-content: center;
    }

    .form-submit button {
      background-color: #007BFF;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }
    @media only screen and (min-width: 200px) and (max-width: 991px) {
      .form-container {
      background-color: #fff;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      padding: 20px;
      width: 100%;
      max-width: 100%;
    }
    }
  </style>
</head>

<div class='bodypart'>

  <div class="form-container">
    
    <form>
      <div class='dlfexDiv'>
        <div class="form-field">
          <label for="name">Name: *</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-field">
          <label for="membership-id">Membership ID: *</label>
          <input type="text" id="membership-id" name="membership-id" required>
        </div>
      </div>

      <div class="form-field">
        <label for="student-id">Student ID: *</label>
        <input type="text" id="student-id" name="student-id" required>
      </div>

      <div class='dlfexDiv'>
        <div class="form-field">
          <label for="batch">Batch: *</label>
          <select id="batch" name="batch" required>
            <option value="12th">12th</option>
            <option value="13th">13th</option>
            <option value="14th">14th</option>
            <option value="15th">15th</option>
            <option value="16th">16th</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div class="form-field">
          <label for="session">Session: *</label>
          <input type="text" id="session" name="session" required>
        </div>
      </div>


      <div class='dlfexDiv'>
        <div class="form-field">
          <label for="current-semester">Current Semester: *</label>
          <select id="current-semester" name="current-semester" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
          </select>
        </div>
        <div class="form-field">
          <label for="blood-group">Blood Group: *</label>
          <select id="blood-group" name="blood-group" required>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
          </select>
        </div>
      </div>


      <div class="form-field">
        <label for="mobile-no">Mobile No: *</label>
        <input type="tel" id="mobile-no" name="mobile-no" required>
      </div>
      <div class="form-field">
        <label for="email">Email: *</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-field">
        <label for="present-address">Present Address:</label>
        <textarea id="present-address" name="present-address"></textarea>
      </div>

      <div class='dlfexDiv'>
        <div class="form-field">
          <label for="software-skill">Software Skill:</label>
          <select>
            <option value="" disabled selected>Select a skill</option>
            <option value="MS Word">MS Word</option>
            <option value="MS Excel">MS Excel</option>
            <option value="MS Power Point">MS Power Point</option>
            <option value="R Programming">R Programming</option>
            <option value="Python">Python</option>
            <option value="SPSS">SPSS</option>
            <option value="STATA">STATA</option>
            <option value="Graphics">Graphics</option>
            <option value="HTML">HTML</option>
            <option value="Social Media">Social Media</option>
            <option value="Others">Others</option>
          </select>
        </div>
        <div class="form-field">
          <label for="extra-curricular-activities">Extra Curricular Activities:</label>
          <select>
            <option value="" disabled selected>Select a skill</option>
            <option value="Cricket">Cricket</option>
            <option value="Football">Football</option>
            <option value="Debate">Debate</option>
            <option value="Photography">Photography</option>
            <option value="Presentation">Presentation</option>
            <option value="Others">Others</option>
          </select>
        </div>
      </div>
      <div class="form-field">
        <label for="research-experience">Have any Research Experience:</label>
        <select id="research-experience" name="research-experience">
          <option value="yes">Yes</option>
          <option value="no">No</option>
        </select>
      </div>
      <div class="form-field">
        <label for="research-interest">Research Interest:</label>
        <input type="text" id="research-interest" name="research-interest">
      </div>
      <div class="form-field">
        <label for="previous-club-activities">Previous Club Activities:</label>
        <select id="previous-club-activities" name="previous-club-activities">
          <option value="yes">Yes</option>
          <option value="no">No</option>
        </select>
      </div>
      <div class="form-field">
        <label for="previous-club-details">Name of previous club and Designation:</label>
        <input type="text" id="previous-club-details" name="previous-club-details">
      </div>
      <div class="form-submit">
        <button type="submit">Submit</button>
      </div>
    </form>
  </div>

  </div>
  <?php
    include('./footer.php')
?>

