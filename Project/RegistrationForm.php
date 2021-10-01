<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Registration forms</title>
    
    <script language="JavaScript">
    const Fname = document.getElementById('Fname')
const Age = document.getElementById('Age')
const Regno = document.getElementById(' Regno')
const form = document.getElementById('RegistrationForm')
const errorElement= document.getElementById('errror')
RegistrationForm.addEventListener('submit',(e) =>{
    let messages=[]
    if(Fname.value===''|| Fname.value==nul){
        messages.push('fname is recquired')
    }
    if (Regno.value.length<=5){
        messages.push('Regno must be longer than that')
    }
    if(messages.length>0){}
    e.preventDefault()
    errorElement.InnerText=messages.join(',')
})
</script>
  </head>
  <body bgcolor="lightgrey">
    <div id="error"></div>
    <form action="insert.php" method="post">
      <h3>Please fill the recquired information below.</h3>
      <p>full name: <input type="text" name="Fname" required /></p>
      <p>Regno: <input type="text" name="Regno" required></p>
      <p>
        Gender:<br />
      <input type="radio" name="Gender"> Male<br>
      <input type="radio" name="Gender">female
      
      </p>
      <p>Date of birth:<input type="date" name="DOB" required /></p>
      <p>Age: <input type="number" name="Age" required /></p>
      <p>Email: <input type="link" name="Email" required/></p>
      <p>Course: <input type="text" name="Course" required></p>
      <p>
        County<br />
        <select name="County" required>
          <option value="Nairobi">Nairobi</option>
          <option value="Kisumu">Kisumu</option>
          <option value="Nakuru">Nakuru</option>
          <option value="Mombasa">Mombasa</option>
        </select>
      </p>

      <P></P><input type="submit"></P> 
      <hr color="black" />
      <p align="center">
        &copy Kenyatta University 2021 <br />
        All rights reserved.
      </p>
    </form>
  </body>
</html>
