<h1>Buat Acocount Baru</h1>
<h4>Sign Up Form</h4>

<form  action=" {{ route ('get-welcome') }}" method="" id="form1">
  <label>First name:</label>
  <br /><br />
  <input type="text" name="First_name" value="" />
  <br /><br />
  <label>Last name:</label>
  <br /><br />
  <input type="text" name="last_name" value="" />
  <br /><br />
  <label>Gender</label><br />
  <input type="radio" name="male" value="male" />Male
  <input type="radio" name="female" value="female" />Female <br /><br />
  <label>Nationality</label><br /><br />
  <select name="bahasa">
    <option value="indonesia">indonesia</option>
    <option value="amerika">amerika</option>
    <option value="inggris">inggris</option>
  </select>
  <br /><br />
  <label>Language Spoken</label>
  <br /><br />
  <input type="checkbox" id="bahasa1" name="bahasa1" value="indonesia" />
  <label for="bahasa1">Bahasan indonesia</label><br />
  <input type="checkbox" id="bahasa2" name="bahasa2" value="english" />
  <label for="bahasa2">english</label><br />
  <input type="checkbox" id="bahasa3" name="bahasa3" value="others" />
  <label for="bahasa3">others</label><br />
  <br />
  <label for="bio">Bio</label>
  <br /><br />
  <textarea id="bio" name="bio"> </textarea>
</form>
<button type="submit" form="form1" value="sign_up">Sign Up</button>
