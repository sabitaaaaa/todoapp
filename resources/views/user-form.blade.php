<html>
<head>
  <title>Test JavaScript Form Validation</title>
  <link rel="stylesheet" href="FormValidation.css">
</head>
 
<body>
  <h2>Form Validation</h2>

 
  <form id="theForm" method="get" action="adduser">
    @csrf
    <table>
    <tr>

      <td>Name<span style="color:red">*</span></td>
      
      <td><input type="text" id="name" name="name"/>
      <span style="color: red;">@error('name'){{$message}}@enderror</span>
    </td>
      
    </tr>
   
     
      
    <tr>
      <td>Address</td>
      <td><input type="text" id="address" name="address" />
      <span style="color: red;">@error('address'){{$message}}@enderror</span></td>
      <td id="addressError" style="color:red">&nbsp;</td></tr>
    <tr>
      <td>Zip Code<span style="color:red">*</span></td>
      <td><input type="text" id="zipcode" name="zipcode" />
      <span style="color: red;">@error('zipcode'){{$message}}@enderror</span></td>
      <td id="zipcodeError" style="color:red">&nbsp;</td></tr>
    <tr>
      <td>Country<span style="color:red">*</span></td>
      <td><select id="country" name="country">
            <option value="" selected>Please select...</option>
            <option value="AA">AA</option>
            <option value="BB">BB</option>
            <option value="CC">CC</option>
          </select><br />
          <span style="color: red;">@error('country'){{$message}}@enderror</span></td>
  
      <span style="color: red;"></span></tr>
    <tr>
      <td>Gender<span style="color:red">*</span></td>
      <td><input type="radio" name="gender" value="m" />Male
          <input type="radio" name="gender" value="f" />Female</td>
      
      <span style="color: red;">@error('gender'){{$message}}@enderror</span></tr>
    <tr>
      <td>Preferences<span style="color:red">*</span></td>
      <td><input type="checkbox" name="color" value="r" />Red
          <input type="checkbox" name="color" value="g" />Green
          <input type="checkbox" name="color" value="b" />Blue</td>
 
      <span style="color: red;">@error('color'){{$message}}@enderror</span></tr>
    <tr>
      <td>Phone<span style="color:red">*</span></td>
      <td><input type="text" id="phone" name="phone" /></td>
      
      <span style="color: red;">@error('phone'){{$message}}@enderror</span></tr>
    <tr>
      <td>Email<span style="color:red">*</span></td>
      <td><input type="text" id="email" name="email" /></td>
     
      <span style="color: red;">@error('email'){{$message}}@enderror</span></tr>
    <tr>
      <td>password (6-8 characters)<span style="color:red">*</span></td>
      <td><input type="password" id="password" name="password" /></td>
    
      <span style="color: red;">@error('password'){{$message}}@enderror</span></tr>
    <tr>
      <td>Verify password<span style="color:red">*</span></td>
      <td><input type="password" id="pwVerified" name="pwVerified" /></td>
     
      <span style="color: red;">@error('pwVerified'){{$message}}@enderror</span></tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" value="SEND" id="submit"/>&nbsp;
          <input type="reset" value="CLEAR" id="reset"/></td>
      <td>&nbsp;</td></tr>
    </table>
  </form>
</body>
</html>