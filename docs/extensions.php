<?php
$_is_dev = boolval( filter_input( INPUT_GET, 'dev' ) );
$_ary = explode( 'sloth', __DIR__ );
$_abs_path = rtrim( array_shift( $_ary ), '\\' );
$current_year = (int) date( 'Y' );
$sloth_dist_path = $_is_dev ? '/sloth/dist/sloth.min.css' : '/sloth/docs/assets/sloth.min.css';
$sloth_ext_script_path = $_is_dev ? '/sloth/dist/sloth.extension.js' : '/sloth/docs/assets/sloth.extension.min.js';
//var_dump( file_exists( $sloth_dist_path ), file_exists( $sloth_ext_script_path ) );
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Input Pattern</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= sprintf( '%s?v=%s', $sloth_dist_path, filemtime( $_abs_path . $sloth_dist_path ) ); ?>">
  <link rel="shortcut icon" href="assets/sloth.ico" type="image/x-icon">
</head>
<body class="sloth" data-dialog-effect="1" data-dialog-button="outline">
  <form class="m1 sloth-validation">
    <h2 class="fnt-lg mb1">Sloth style forms with validation as an extension</h2>
    <p class="note">You must enter the fields with this <label class="required" data-size="w:5px"></label>mark.</p>
    <div class="inline mb1">
      <label for="tf-1" class="required" data-size="w:10rem">Name</label>
      <input type="text" id="tf-1" name="first_name" placeholder="First Name" pattern="^.{1,35}$" data-size="w:(50% - 7rem),mw:20em" data-dispname="First Name" autocomplete="nope" required>
<?php /*      <input type="text" id="tf-2" name="middle_name" placeholder="Middle Name (Optional)" pattern="^.{0,100}$" autocomplete="nope"> */ ?>
      <input type="text" id="tf-3" name="last_name" placeholder="Last Name" pattern="^.{1,35}$" data-size="w:(50% - 7rem),mw:20em" data-dispname="Last Name" autocomplete="nope" required>
    </div>
    <div class="inline mb1">
      <label for="tf-4" class="required" data-size="w:10rem">Ruby Name</label>
      <input type="text" id="tf-4" name="ruby_first_name" placeholder="First Name" pattern="^.{1,35}$" data-size="w:(50% - 7rem),mw:20em" data-dispname="First Name Ruby" autocomplete="nope" required>
<?php /*      <input type="text" id="tf-5" name="ruby_middle_name" placeholder="Middle Name (Optional)" pattern="^.{0,100}$" autocomplete="nope"> */ ?>
      <input type="text" id="tf-6" name="ruby_last_name" placeholder="Last Name" pattern="^.{1,35}$" data-size="w:(50% - 7rem),mw:20em" data-dispname="Last Name Ruby" autocomplete="nope" required>
      <small class="note">Full-width Katakana only</small>
    </div>
    <div class="inline mb1">
      <label class="required" data-size="w:10rem">Gender</label>
      <label class="radio">Female
        <input type="radio" name="gender" value="female" data-dispname="Gender" required>
        <span class="indicator"></span>
      </label>
      <label class="radio">Male
        <input type="radio" name="gender" value="male" data-dispname="Gender" required>
        <span class="indicator"></span>
      </label>
    </div>
    <div class="inline mb1">
      <label class="required" data-size="w:10rem">Birth Date</label>
      <label class="dropdown">
        <select name="birth_year" class="txt-fog" data-dispname="Birth Year" required>
          <option value="" data-map="<?= $current_year - 100 ?>...<?= $current_year ?>" class="txt-fog">Year</option>
        </select>
      </label>
      <label class="dropdown">/
        <select name="birth_month" class="txt-fog" data-dispname="Birth Month" required>
          <option value="" data-map="1...12" class="txt-fog">Month</option>
        </select>
      </label>
      <label class="dropdown">/
        <select name="birth_day" class="txt-fog" data-dispname="Birth Day" required>
          <option value="" data-map="1...31" class="txt-fog">Day</option>
        </select>
      </label>
    </div>
    <div class="inline mb1">
      <label class="required" data-size="w:10rem">Country</label>
      <label class="dropdown">
        <select name="country" class="txt-fog" data-dispname="Country" required>
          <option value="" data-map="us:United States America,fr:France,de:Germany,es:Spain,it:Italy,ru:Russia,jp:Japan,cn:China,br:Brazil" class="txt-fog">Country</option>
        </select>
      </label>
    </div>
    <div class="inline mb1">
      <label class="required" for="tf-11" data-size="w:10rem">Postal Code</label>
      <input type="text" id="tf-11" name="postal_code" placeholder="Postal Code" pattern="^\d{2,11}$" data-size="w:11em" data-dispname="Postal Code" required>
      <small class="note">Only numbers without hyphens</small>
    </div>
    <div class="inline mb1">
      <label class="required" data-size="w:10rem">Prefecture</label>
      <label class="dropdown">
        <select name="prefecture" class="txt-fog" data-dispname="Prefecture" required>
          <option value="" data-map="Tokyo,Hokkaido,,Osaka,Kyouto,,Fukuoka,,,Okinawa" class="txt-fog">Prefecture</option>
        </select>
      </label>
    </div>
    <div class="inline mb1">
      <label for="tf-12" class="required" data-size="w:10rem">City</label>
      <input type="text" id="tf-12" name="city" placeholder="City" pattern="^.{0,100}$" data-size="w:(100% - 13rem),mw:20em" data-dispname="City" required>
    </div>
    <div class="inline mb1">
      <label for="tf-13" data-size="w:10rem">Address</label>
      <input type="text" id="tf-13" name="address" placeholder="Address" pattern="^.{0,100}$" data-size="w:(100% - 13rem),mw:35em" data-dispname="Address" autocomplete="nope">
    </div>
    <div class="inline mb1">
      <label for="tf-21" class="required" data-size="w:10rem">Email Address</label>
      <input type="email" id="tf-21" name="email_address" placeholder="Email Address" pattern="^[a-zA-Z]{1}[0-9a-zA-Z]+[\w\.-]+@[\w\.-]+\.\w{2,}$" data-size="w:(100% - 13rem),mw:35em" data-dispname="Email Address" autocomplete="nope" size="60" required>
    </div>
    <div class="inline mb1">
      <label for="pw-1" class="required" data-size="w:10rem">Password</label>
      <label for="pw-1" class="tgl-view">
        <input type="password" id="pw-1" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" autocomplete="new-password" data-dispname="Password" required>
        <span><span class="eye-switch"></span><!-- i class="far fa-eye"></i --></span>
      </label>
      <small class="note">Contain at least 8 letters, numbers, lowercase letters, and uppercase letters</small>
    </div>
    <div class="inline mb1">
      <label for="tf-22" class="required" data-size="w:10rem">Display Name</label>
      <input type="text" id="tf-22" name="display_name" placeholder="Display Name" pattern="^.{0,100}$" data-size="w:15em" data-dispname="Display Name" required>
      <small class="note">Strings at least 3 letters and more</small>
    </div>
    <div class="inline mb1">
      <label for="ff-1" data-size="w:10rem">Avatar Image</label>
      <label for="ff-1" class="upload outline"><i class="fas fa-file-upload"></i> Choose file
        <input type="file" id="ff-1" name="avatar_image" data-dispname="Avatar Image" required>
      </label>
      <small class="note">Maximum upload file size is 100kB</small>
    </div>
    <div class="inline mb1">
      <label for="ff-2" data-size="w:10rem">Avatar Image 2</label>
      <label for="ff-2" class="upload outline"><i class="fas fa-file-upload"></i> Choose file
        <input type="file" id="ff-2" name="avatar_image" data-dispname="Avatar Image 2">
      </label>
    </div>
<?php /*
    <div class="inline mb1">
      <label for="ff-3" data-size="w:10rem">Avatar Image 3</label>
      <label for="ff-3" class="upload outline"><i class="fas fa-file-upload"></i> Choose file to upload
        <input type="file" id="ff-3" name="avatar_image" data-dispname="Avatar Image 3">
      </label>
    </div>
*/ ?>
    <div class="inline mb1">
      <label for="ta-1" data-size="w:10rem">Biography</label>
      <textarea id="ta-1" name="biography" placeholder="Your Biography" pattern="^.{0,100}$" data-size="w:(100% - 11em),h:10em" data-dispname="Biography"></textarea>
    </div>
    <div class="inline mb1">
      <label for="ta-2" class="required" data-size="w:10rem">Feedback</label>
      <textarea id="ta-2" name="feedback" placeholder="Your Feedback" pattern="^.{1,200}$" data-size="w:(100% - 11em),h:10em" data-dispname="Feedback" required></textarea>
      <small class="note">Maximum allowed string length is 200 letters</small>
    </div>
    <div class="inline mb1">
      <label for="cb-1-1" data-size="w:10rem">Capabilities</label>
      <div class="flx-row flx-wrap">
        <label class="checkbox">Physical
          <input type="checkbox" id="cb-1-1" name="capabilities[]" data-dispname="Capabilities" value="physical">
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Endurance
          <input type="checkbox" id="cb-1-2" name="capabilities[]" data-dispname="Capabilities" value="endurance">
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Strength
          <input type="checkbox" id="cb-1-3" name="capabilities[]" data-dispname="Capabilities" value="strength">
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Intelligence
          <input type="checkbox" id="cb-1-4" name="capabilities[]" data-dispname="Capabilities" value="intelligence">
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Agility
          <input type="checkbox" id="cb-1-5" name="capabilities[]" data-dispname="Capabilities" value="agility">
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Mental
          <input type="checkbox" id="cb-1-6" name="capabilities[]" data-dispname="Capabilities" value="mental">
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Leadership
          <input type="checkbox" id="cb-1-7" name="capabilities[]" data-dispname="Capabilities" value="leadership">
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Charisma
          <input type="checkbox" id="cb-1-8" name="capabilities[]" data-dispname="Capabilities" value="charisma">
          <span class="indicator"></span>
        </label>
      </div>
    </div>
    <div class="inline mb1">
      <label for="cb-2-1" class="required" data-size="w:10rem">Favorites</label>
      <div class="flx-row flx-wrap">
        <label class="checkbox">Travel
          <input type="checkbox" id="cb-2-1" name="favorites[]" data-dispname="Favorites" value="travel" required>
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Movies
          <input type="checkbox" id="cb-2-2" name="favorites[]" data-dispname="Favorites" value="movies" required>
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Musics
          <input type="checkbox" id="cb-2-3" name="favorites[]" data-dispname="Favorites" value="musics" required>
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Sports
          <input type="checkbox" id="cb-2-4" name="favorites[]" data-dispname="Favorites" value="sports" required>
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Reading
          <input type="checkbox" id="cb-2-5" name="favorites[]" data-dispname="Favorites" value="reading" required>
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Games
          <input type="checkbox" id="cb-2-6" name="favorites[]" data-dispname="Favorites" value="games" required>
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Communication
          <input type="checkbox" id="cb-2-7" name="favorites[]" data-dispname="Favorites" value="communication" required>
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Development
          <input type="checkbox" id="cb-2-8" name="favorites[]" data-dispname="Favorites" value="development" required>
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Stady
          <input type="checkbox" id="cb-2-9" name="favorites[]" data-dispname="Favorites" value="stady" required>
          <span class="indicator"></span>
        </label>
        <label class="checkbox">Other
          <input type="checkbox" id="cb-2-10" name="favorites[]" data-dispname="Favorites" value="other" required>
          <span class="indicator"></span>
        </label>
      </div>
      <small class="note">Choose at least one option</small>
    </div>
    <div class="inline mb1" data-switch-class="sm:flx-center">
      <label data-size="w:10rem" data-switch-class="sm:hidden">Agreement</label>
      <label class="tgl flat" for="cb-1">I agree to <a href="javascript:;" data-toggle="dialog" rel="external">the terms of service</a>.
        <input type="checkbox" id="cb-1" name="agreement" value="1" data-dispname="Agreement" required>
        <span class="tgl-btn"></span>
      </label>
    </div>
    <hr class="dotted">
    <div class="inline">
      <button type="submit" class="outline clr-prim">Register</button>
      <button type="button" class="outline" data-toggle="dialog" data-effect="2">Set for TEST</button>
      <button type="button" class="outline" data-toggle="dialog" data-title="Title Of Dialog" data-content="<p>Content Of Dialog<br>...</p>" data-foot="{class:'outline clr-sec',label:'<i class=\'fas fa-times\'></i> Close Me!',callback:function(){alert('Do something before hiding the dialog.')}}">Reset</button>
      <button type="button" class="outline" data-toggle="dialog" data-title="Title Of Dialog" data-content="<p>Content Of Dialog<br>...</p>" data-foot="<i class=\'fas fa-times\'></i> Close" data-effect="3">Cancel</button>
    </div>
  </form>
  <script async src="<?= sprintf( '%s?v=%s', $sloth_ext_script_path, filemtime( $_abs_path . $sloth_ext_script_path ) ); ?>"></script>
</body>
</html>