@extends('layouts.default')
@section('content')
@include('normal_user.partials.nav')</br>
@include('normal_user.partials.logout')
      <div class="content-wrapper" dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}};padding-top:70px;">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <div class="row">
              <div class="container">
          <div class="row m-y-2">
              <!-- edit form column -->
              <div class="col-lg-12"><h3>{{trans('user.profile')}}</h3><hr> </div>
              <div class="col-lg-8 push-lg-4 personal-info">
                   <form role="form" method="POST" action="{{route('normal_user.postprofile')}}">
                     @csrf
                      <div class="form-group row">
                          <label class="col-lg-3 col-form-label form-control-label"><b>{{trans('user.name')}}</b></label>
                          <div class="col-lg-8">
                              <input class="form-control" name="name" type="text" value="{{Auth::user()->name}}" required/>
                          </div>
                      </div>
      
                       <div class="form-group row">
                       <label class="col-lg-3 col-form-label form-control-label"><b>{{trans('user.phone')}}</b><small>({{trans('user.code')}})</small></label>
                          <div class="col-lg-8">
                              <input class="form-control" name="phone" type="text" value="{{Auth::user()->phone}}" pattern="[\+]\d{5,}" required/>
                          </div>
                      </div>
      
                      <div class="form-group row">
                          <label class="col-lg-3 col-form-label form-control-label">{{trans('home.email')}}</label>
                          <div class="col-lg-8">
                              <input class="form-control" name="email" type="email" value="{{Auth::user()->email}}" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required />
                          </div>
                      </div>
                      
                                  
       <div class="form-group row">
          <label class="col-lg-3 col-form-label form-control-label"></label>
            <div class="col-lg-9">
            <input type="submit" class="btn btn-primary" value="{{trans('user.save')}}" />
            </div>
        </div>
      </form>
              </div>
            
          </div>
      </div>
      <hr>
      </div>  
        </div><hr>
       <div class="container-fluid">
            <!-- Breadcrumbs-->
            <div class="row">
              <div class="container">
          <div class="row m-y-2">
              <!-- edit form column -->
              <div class="col-lg-12"><h3> {{trans('user.patient')}}</h3>
                
                <p><b>{{trans('user.uploadcomment')}}</b></p><hr> </div>
              <div class="col-lg-8 push-lg-4 personal-info">
      <form id="userreq" role="form" action="{{route('normal_user.postrequests')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row required">
        <label class="col-lg-3 col-form-label form-control-label">{{trans('user.paname')}}</label>
                <div class="col-lg-8">
                    <input class="form-control" name="patient_name" type="text" placeholder="{{trans('user.enterpname')}}" required/>
                </div>
            </div>
        <div class="form-group row required">
                <label class="col-lg-3 col-form-label form-control-label" >{{trans('user.country')}}</label>
                <div class="col-lg-8">
                    <select name="country" id="country" class="form-control" size="0" required> 
<option value="" selected>{{trans('user.country')}}</option> 
<option value="United States">United States</option> 
<option value="United Kingdom">United Kingdom</option> 
<option value="Afghanistan">Afghanistan</option> 
<option value="Albania">Albania</option> 
<option value="Algeria">Algeria</option> 
<option value="American Samoa">American Samoa</option> 
<option value="Andorra">Andorra</option> 
<option value="Angola">Angola</option> 
<option value="Anguilla">Anguilla</option> 
<option value="Antarctica">Antarctica</option> 
<option value="Antigua and Barbuda">Antigua and Barbuda</option> 
<option value="Argentina">Argentina</option> 
<option value="Armenia">Armenia</option> 
<option value="Aruba">Aruba</option> 
<option value="Australia">Australia</option> 
<option value="Austria">Austria</option> 
<option value="Azerbaijan">Azerbaijan</option> 
<option value="Bahamas">Bahamas</option> 
<option value="Bahrain">Bahrain</option> 
<option value="Bangladesh">Bangladesh</option> 
<option value="Barbados">Barbados</option> 
<option value="Belarus">Belarus</option> 
<option value="Belgium">Belgium</option> 
<option value="Belize">Belize</option> 
<option value="Benin">Benin</option> 
<option value="Bermuda">Bermuda</option> 
<option value="Bhutan">Bhutan</option> 
<option value="Bolivia">Bolivia</option> 
<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
<option value="Botswana">Botswana</option> 
<option value="Bouvet Island">Bouvet Island</option> 
<option value="Brazil">Brazil</option> 
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
<option value="Brunei Darussalam">Brunei Darussalam</option> 
<option value="Bulgaria">Bulgaria</option> 
<option value="Burkina Faso">Burkina Faso</option> 
<option value="Burundi">Burundi</option> 
<option value="Cambodia">Cambodia</option> 
<option value="Cameroon">Cameroon</option> 
<option value="Canada">Canada</option> 
<option value="Cape Verde">Cape Verde</option> 
<option value="Cayman Islands">Cayman Islands</option> 
<option value="Central African Republic">Central African Republic</option> 
<option value="Chad">Chad</option> 
<option value="Chile">Chile</option> 
<option value="China">China</option> 
<option value="Christmas Island">Christmas Island</option> 
<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
<option value="Colombia">Colombia</option> 
<option value="Comoros">Comoros</option> 
<option value="Congo">Congo</option> 
<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
<option value="Cook Islands">Cook Islands</option> 
<option value="Costa Rica">Costa Rica</option> 
<option value="Cote D'ivoire">Cote D'ivoire</option> 
<option value="Croatia">Croatia</option> 
<option value="Cuba">Cuba</option> 
<option value="Cyprus">Cyprus</option> 
<option value="Czech Republic">Czech Republic</option> 
<option value="Denmark">Denmark</option> 
<option value="Djibouti">Djibouti</option> 
<option value="Dominica">Dominica</option> 
<option value="Dominican Republic">Dominican Republic</option> 
<option value="Ecuador">Ecuador</option> 
<option value="Egypt">Egypt</option> 
<option value="El Salvador">El Salvador</option> 
<option value="Equatorial Guinea">Equatorial Guinea</option> 
<option value="Eritrea">Eritrea</option> 
<option value="Estonia">Estonia</option> 
<option value="Ethiopia">Ethiopia</option> 
<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
<option value="Faroe Islands">Faroe Islands</option> 
<option value="Fiji">Fiji</option> 
<option value="Finland">Finland</option> 
<option value="France">France</option> 
<option value="French Guiana">French Guiana</option> 
<option value="French Polynesia">French Polynesia</option> 
<option value="French Southern Territories">French Southern Territories</option> 
<option value="Gabon">Gabon</option> 
<option value="Gambia">Gambia</option> 
<option value="Georgia">Georgia</option> 
<option value="Germany">Germany</option> 
<option value="Ghana">Ghana</option> 
<option value="Gibraltar">Gibraltar</option> 
<option value="Greece">Greece</option> 
<option value="Greenland">Greenland</option> 
<option value="Grenada">Grenada</option> 
<option value="Guadeloupe">Guadeloupe</option> 
<option value="Guam">Guam</option> 
<option value="Guatemala">Guatemala</option> 
<option value="Guinea">Guinea</option> 
<option value="Guinea-bissau">Guinea-bissau</option> 
<option value="Guyana">Guyana</option> 
<option value="Haiti">Haiti</option> 
<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
<option value="Honduras">Honduras</option> 
<option value="Hong Kong">Hong Kong</option> 
<option value="Hungary">Hungary</option> 
<option value="Iceland">Iceland</option> 
<option value="India">India</option> 
<option value="Indonesia">Indonesia</option> 
<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
<option value="Iraq">Iraq</option> 
<option value="Ireland">Ireland</option> 
<option value="Israel">Israel</option> 
<option value="Italy">Italy</option> 
<option value="Jamaica">Jamaica</option> 
<option value="Japan">Japan</option> 
<option value="Jordan">Jordan</option> 
<option value="Kazakhstan">Kazakhstan</option> 
<option value="Kenya">Kenya</option> 
<option value="Kiribati">Kiribati</option> 
<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
<option value="Korea, Republic of">Korea, Republic of</option> 
<option value="Kuwait">Kuwait</option> 
<option value="Kyrgyzstan">Kyrgyzstan</option> 
<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
<option value="Latvia">Latvia</option> 
<option value="Lebanon">Lebanon</option> 
<option value="Lesotho">Lesotho</option> 
<option value="Liberia">Liberia</option> 
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
<option value="Liechtenstein">Liechtenstein</option> 
<option value="Lithuania">Lithuania</option> 
<option value="Luxembourg">Luxembourg</option> 
<option value="Macao">Macao</option> 
<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
<option value="Madagascar">Madagascar</option> 
<option value="Malawi">Malawi</option> 
<option value="Malaysia">Malaysia</option> 
<option value="Maldives">Maldives</option> 
<option value="Mali">Mali</option> 
<option value="Malta">Malta</option> 
<option value="Marshall Islands">Marshall Islands</option> 
<option value="Martinique">Martinique</option> 
<option value="Mauritania">Mauritania</option> 
<option value="Mauritius">Mauritius</option> 
<option value="Mayotte">Mayotte</option> 
<option value="Mexico">Mexico</option> 
<option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
<option value="Moldova, Republic of">Moldova, Republic of</option> 
<option value="Monaco">Monaco</option> 
<option value="Mongolia">Mongolia</option> 
<option value="Montserrat">Montserrat</option> 
<option value="Morocco">Morocco</option> 
<option value="Mozambique">Mozambique</option> 
<option value="Myanmar">Myanmar</option> 
<option value="Namibia">Namibia</option> 
<option value="Nauru">Nauru</option> 
<option value="Nepal">Nepal</option> 
<option value="Netherlands">Netherlands</option> 
<option value="Netherlands Antilles">Netherlands Antilles</option> 
<option value="New Caledonia">New Caledonia</option> 
<option value="New Zealand">New Zealand</option> 
<option value="Nicaragua">Nicaragua</option> 
<option value="Niger">Niger</option> 
<option value="Nigeria">Nigeria</option> 
<option value="Niue">Niue</option> 
<option value="Norfolk Island">Norfolk Island</option> 
<option value="Northern Mariana Islands">Northern Mariana Islands</option> 
<option value="Norway">Norway</option> 
<option value="Oman">Oman</option> 
<option value="Pakistan">Pakistan</option> 
<option value="Palau">Palau</option> 
<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
<option value="Panama">Panama</option> 
<option value="Papua New Guinea">Papua New Guinea</option> 
<option value="Paraguay">Paraguay</option> 
<option value="Peru">Peru</option> 
<option value="Philippines">Philippines</option> 
<option value="Pitcairn">Pitcairn</option> 
<option value="Poland">Poland</option> 
<option value="Portugal">Portugal</option> 
<option value="Puerto Rico">Puerto Rico</option> 
<option value="Qatar">Qatar</option> 
<option value="Reunion">Reunion</option> 
<option value="Romania">Romania</option> 
<option value="Russian Federation">Russian Federation</option> 
<option value="Rwanda">Rwanda</option> 
<option value="Saint Helena">Saint Helena</option> 
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
<option value="Saint Lucia">Saint Lucia</option> 
<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
<option value="Samoa">Samoa</option> 
<option value="San Marino">San Marino</option> 
<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
<option value="Saudi Arabia">Saudi Arabia</option> 
<option value="Senegal">Senegal</option> 
<option value="Serbia and Montenegro">Serbia and Montenegro</option> 
<option value="Seychelles">Seychelles</option> 
<option value="Sierra Leone">Sierra Leone</option> 
<option value="Singapore">Singapore</option> 
<option value="Slovakia">Slovakia</option> 
<option value="Slovenia">Slovenia</option> 
<option value="Solomon Islands">Solomon Islands</option> 
<option value="Somalia">Somalia</option> 
<option value="South Africa">South Africa</option> 
<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
<option value="Spain">Spain</option> 
<option value="Sri Lanka">Sri Lanka</option> 
<option value="Sudan">Sudan</option> 
<option value="Suriname">Suriname</option> 
<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
<option value="Swaziland">Swaziland</option> 
<option value="Sweden">Sweden</option> 
<option value="Switzerland">Switzerland</option> 
<option value="Syrian Arab Republic">Syrian Arab Republic</option> 
<option value="Taiwan, Province of China">Taiwan, Province of China</option> 
<option value="Tajikistan">Tajikistan</option> 
<option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
<option value="Thailand">Thailand</option> 
<option value="Timor-leste">Timor-leste</option> 
<option value="Togo">Togo</option> 
<option value="Tokelau">Tokelau</option> 
<option value="Tonga">Tonga</option> 
<option value="Trinidad and Tobago">Trinidad and Tobago</option> 
<option value="Tunisia">Tunisia</option> 
<option value="Turkey">Turkey</option> 
<option value="Turkmenistan">Turkmenistan</option> 
<option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
<option value="Tuvalu">Tuvalu</option> 
<option value="Uganda">Uganda</option> 
<option value="Ukraine">Ukraine</option> 
<option value="United Arab Emirates">United Arab Emirates</option> 
<option value="United Kingdom">United Kingdom</option> 
<option value="United States">United States</option> 
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
<option value="Uruguay">Uruguay</option> 
<option value="Uzbekistan">Uzbekistan</option> 
<option value="Vanuatu">Vanuatu</option> 
<option value="Venezuela">Venezuela</option> 
<option value="Viet Nam">Viet Nam</option> 
<option value="Virgin Islands, British">Virgin Islands, British</option> 
<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
<option value="Wallis and Futuna">Wallis and Futuna</option> 
<option value="Western Sahara">Western Sahara</option> 
<option value="Yemen">Yemen</option> 
<option value="Zambia">Zambia</option> 
<option value="Zimbabwe">Zimbabwe</option>
</select>
</div>
</div>  
        <div class="form-group row required">
                <label class="col-lg-3 col-form-label form-control-label">{{trans('user.dob')}}</label>
                <div class="col-lg-8">

                <input type="date" class="form-control"  name="dob" required/>
                </div>
            </div>
        <div class="form-group row">
            <div class="col-lg-3 required">
                <label class="col-form-label form-control-label">{{trans('user.sex')}}</label></div>
                <div class="col-lg-8" size="0">
                   <label class="radio-inline" size="0">
                   <input type="radio" name="gender" value="male" required>{{trans('user.male')}}
                    </label>
                    &nbsp;&nbsp;
                    <label class="radio-inline" size="0">
                        <input type="radio" name="gender" value="female" required>{{trans('user.female')}}
                    </label>
                </div>
        </div>

        <div class="form-group row">
            <div class="input-group">
                <label class="col-lg-3 col-form-label form-control-label">{{trans('extra.height')}}</label>
                <div class="col-lg-8" size="0">
                   <input type="text" class="form-control" name="height" value="">
                </div>
            </div>    
        </div>

        <div class="form-group row">
                <div class="input-group">
                    <label class="col-lg-3 col-form-label form-control-label">{{trans('extra.weight')}}</label>
                    <div class="col-lg-8" size="0">
                       <input type="text" class="form-control" name="weight" value="">
                    </div>
                </div>    
        </div>

        <div class="form-group row">
                <div class="input-group">
                    <label class="col-lg-3 col-form-label form-control-label">{{trans('extra.bodystruct')}}</label>
                    <div class="col-lg-8" size="0">
                       <select class="form-control" name="body_structure" value="">
                           <option value="">{{trans('extra.bodystruct')}}</option>
                           <option value="obese">{{trans('extra.bodystructtyp1')}}</option>
                           <option value="medium">{{trans('extra.bodystructtyp2')}}</option>
                           <option value="lean">{{trans('extra.bodystructtyp3')}}</option>
                       </select>   
                    </div>
                </div>    
        </div>

        <div class="form-group row required">
                    <label class="col-lg-3 col-form-label form-control-label" for="complaints_history">{{trans('extra.present_complain')}}</label>
                    <div class="col-lg-8">
                       <textarea class="form-control" rows="4" name="complaints_history" required></textarea>
                    </div>
        </div>

        <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label" for="investigation_details">{{trans('extra.investi_details')}}</label>
                <div class="col-lg-8">
                   <textarea class="form-control" rows="4" name="investigation_details"></textarea>
                </div>
        </div>

        <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label" for="treatment_details">{{trans('extra.treatment_details')}}</label>
                <div class="col-lg-8">
                   <textarea class="form-control" rows="4" name="treatment_details"></textarea>
                </div>
        </div>

        <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label" for="current_medication">{{trans('extra.curr_medic')}}</label>
                <div class="col-lg-8">
                   <textarea class="form-control" rows="4" name="current_medication"></textarea>
                </div>
        </div>

        <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label" for="allergies">{{trans('extra.allergy')}}</label>
                <div class="col-lg-8" size="0">
                   <label class="radio" size="0">
                   <input type="radio" name="allergies" value="1">{{trans('user.y')}}
                    </label>
                    &nbsp;&nbsp;
                    <label class="radio" size="0">
                        <input type="radio" name="allergies" value="0" checked>{{trans('user.n')}}
                    </label>
                    <div id="allergy" class="collapse">
                        <div class="card card-body">
                            <div class="form-group">
                                <div class="imput-group">
                                <label for="allergy_detail">{{trans('extra.allergy_details')}}</label>
                                <textarea class="form-control" name="allergy_detail">
                                </textarea>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <div class="form-group row">
                <label class="col-lg-3 col-form-label" style="text-decoration:underline;">{{trans('extra.diges_state')}}</label>
        </div>

        <div class="form-group row">
                <div class="input-group">
                    <label class="col-lg-3 col-form-label form-control-label">{{trans('extra.appetite')}}</label>
                    <div class="col-lg-8" size="0">
                       <select class="form-control" name="appetite" value="">
                           <option value="">{{trans('extra.appetiteselect')}}</option>
                           <option value="normal">{{trans('extra.normal')}}</option>
                           <option value="less">{{trans('extra.less')}}</option>
                           <option value="more">{{trans('extra.more')}}</option>
                       </select>   
                    </div>
                </div>    
        </div>

        <div class="form-group row">
                <div class="input-group">
                    <label class="col-lg-3 col-form-label form-control-label">{{trans('extra.bowel')}}</label>
                    <div class="col-lg-8" size="0">
                       <select class="form-control" name="bowel_habits" value="">
                           <option value="">{{trans('extra.bowelselect')}}</option>
                           <option value="regular">{{trans('extra.regular')}}</option>
                           <option value="irregular">{{trans('extra.irregu')}}</option>
                       </select>   
                    </div>
                </div>    
        </div>

        <div class="form-group row">
                <div class="input-group">
                    <label class="col-lg-3 col-form-label form-control-label">{{trans('extra.urine')}}</label>
                    <div class="col-lg-8" size="0">
                       <select class="form-control" name="urine_quantity" value="">
                           <option value="">{{trans('extra.urine_type')}}</option>
                           <option value="adequate">{{trans('extra.normal')}}</option>
                           <option value="less">{{trans('extra.less')}}</option>
                           <option value="more">{{trans('extra.more')}}</option>
                       </select>   
                    </div>
                </div>    
        </div>

        <div class="form-group row">
                <div class="input-group">
                    <label class="col-lg-3 col-form-label form-control-label">{{trans('extra.sleep')}}</label>
                    <div class="col-lg-8" size="0">
                       <select class="form-control" name="sleep" value="">
                           <option value="">{{trans('extra.sleeptype')}}</option>
                           <option value="adequate">{{trans('extra.normal')}}</option>
                           <option value="less">{{trans('extra.less')}}</option>
                           <option value="more">{{trans('extra.more')}}</option>
                           <option value="disturbed">{{trans('extra.disturb')}}</option>
                       </select>   
                    </div>
                </div>    
        </div>

        <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">{{trans('user.prefered_hosp')}}</label>
                <div class="col-lg-8" size="0">
                   <label class="radio" size="0">
                   <input type="radio" name="prefered_hospital" value="1">{{trans('user.y')}}
                    </label>
                    &nbsp;&nbsp;
                    <label class="radio" size="0">
                        <input type="radio" name="prefered_hospital" value="0" checked>{{trans('user.n')}}
                    </label>
                    <div id="hospital" class="collapse">
                        <div class="card card-body">
                            <div class="form-group">
                                <div class="imput-group">
                                <label for="hospital_name">{{trans('user.hosp_name')}}</label>
                                <select class="form-control" name="hospital_name">
                                    <option value="">{{trans('user.hosp_place')}}</option>
                                    @if ($hospitals->count()>0)
                                    @foreach ($hospitals as $hospital)
                                <option value="{{$hospital->name_en}}">{{App::getLocale()=='en'? $hospital->name_en : $hospital->name_ar}}</option>
                                    @endforeach 
                                    @endif 
                                </select>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <div class="form-group row">
            <div class="col-lg-3 required">
                <label class="col-form-label form-control-label">{{trans('user.prefered_treatment')}}</label></div>
                <div class="col-lg-8" size="0">
                  <div class="input-group">
                      <label for="treatment_type"> {{trans('user.treatment_type')}}</label>
                      <select name="treatment_type" required>
                          <option value="">{{trans('user.select')}}</option>
                          <option value="ayurveda">{{trans('home.ayur')}}</option>
                          <option value="naturopathy">{{trans('home.natur')}}</option>
                          <option value="not yet decided">{{trans('user.not')}}</option>
                      </select>
                  </div>
                </div>
        </div>
            
        <div class="form-group row">
                <label class="col-lg-3 col-form-label" style="text-decoration:underline;">{{trans('user.addition')}}</label>
            </div>
        <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">{{trans('user.liesur')}}</label>
                <div class="col-lg-8" size="0">
                   <label class="radio " size="0">
                      <input type="radio" name="liesure_tour" value="1" >{{trans('user.y')}}
                    </label>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <label class="radio" size="0">
                        <input type="radio" name="liesure_tour" value="0" checked>{{trans('user.n')}}
                    </label>
                    <div id="liesure" class="collapse">
                            <div class="card card-body">
                              <div class="form-group">
                                  <label for="accomodation">{{trans('user.accom')}}</label>&nbsp;&nbsp;
                                  <select name="accomodation">
                                      <option value="luxury">{{trans('user.luxury')}}</option>
                                      <option value="five_star">{{trans('user.5star')}}</option>
                                      <option value="four_star">{{trans('user.4star')}}</option>
                                      <option value="three_star">{{trans('user.3star')}}</option>
                                      <option value="budget">{{trans('user.budget')}}</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="no-of-adults">{{trans('user.no_a')}}</label>&nbsp;&nbsp;
                                  <input type="number" name="no-of-adults" value="1">
                              </div>
                              <div class="form-group">
                                    <label for="no-of-child">{{trans('user.no_c')}}</label>&nbsp;&nbsp;
                                    <input type="number" name="no-of-child" value="0">
                                </div>           
                      <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">{{trans('user.pass')}}</label>
                            <div class="col-lg-8">
         
                            <input type="number" class="form-control" value="0" name="pass_no" />
        
                            </div>
                        </div>
                            </div>
                    </div>
                </div>
            </div>     
            <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">{{trans('user.perschef')}}</label>
                    <div class="col-lg-8" size="0">
                       <label class="radio" size="0">
                          <input type="radio" name="personal_chef" value="1">{{trans('user.y')}}
                        </label>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <label class="radio" size="0">
                            <input type="radio" name="personal_chef" value="0" checked>{{trans('user.n')}}
                        </label>
                        <div class="collapse" id="personal_chef">
                                <div class="card card-body">
                                  <div class="form-group">
                                      <label for="chef-type">{{trans('user.select')}}</label>&nbsp;&nbsp;
                                      <select name="chef-type" id="chef-type">
                                          <option value="north-indian">{{trans('user.north')}}</option>
                                          <option value="south-indian">{{trans('user.south')}}</option>
                                          <option value="arabic">{{trans('user.arabic')}}</option>
                                          <option value="mixed">{{trans('user.mixed')}}</option>
                                      </select>
                                  </div>
                                </div>
                        </div>
                    </div>
                </div> 
                <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">{{trans('user.bystander')}}</label>
                        <div class="col-lg-8" size="0">
                           <label class="radio" size="0">
                              <input type="radio" name="bystander" value="1" >{{trans('user.y')}}
                            </label>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <label class="radio" size="0">
                                <input type="radio" name="bystander" value="0" checked>{{trans('user.n')}}
                            </label>
                            <div class="collapse" id="bystander">
                                    <div class="card card-body">
                                      <div class="form-group">
                                          <label for="bystander-type">{{trans('user.select')}}</label>&nbsp;&nbsp;
                                          <select name="bystander-type" id="bystander-type">
                                              <option value="male">{{trans('user.male')}}</option>
                                              <option value="female">{{trans('user.female')}}</option>
                                          </select>
                                      </div>
                                    </div>
                            </div>
                        </div>
                    </div> 
                    <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">{{trans('user.interpreter')}}</label>
                            <div class="col-lg-8" size="0">
                               <label class="radio" size="0">
                                  <input type="radio" name="interpreter" value="1">{{trans('user.y')}}
                                </label>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <label class="radio" size="0">
                                    <input type="radio" name="interpreter" value="0" checked>{{trans('user.n')}}
                                </label>
                            </div>
                        </div>   
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">{{trans('extra.uploaddocu')}}</label>
                                <div class="col-lg-9">
                                
            <input type="file" name="documents[]" multiple/>
                        </div>
                     </div>       
                         <div class="form-group row">
                          <label class="col-lg-3 col-form-label form-control-label"></label>
                          <div class="col-lg-9">
                              <input type="submit" class="btn btn-primary" value="{{trans('extra.submit')}}" />
                          </div>
                      </div>   
                  </form>
              </div>
            
          </div>
      </div>
      <hr>
          </div>
         
        </div>
      </div>
@include('normal_user.partials.footer')   
@section('extra-js')
<script>
        $('[name="liesure_tour"]').on('change', function(){  
      if($(this).val()  === "1"){
        $('#liesure').collapse('show')
      }else{
         $('#liesure').collapse('hide')
      }
    });

    $('[name="personal_chef"]').on('change', function(){  
      if($(this).val()  === "1"){
        $('#personal_chef').collapse('show')
      }else{
         $('#personal_chef').collapse('hide')
      }
    });

    $('[name="bystander"]').on('change', function(){  
      if($(this).val()  === "1"){
        $('#bystander').collapse('show')
      }else{
         $('#bystander').collapse('hide')
      }
    });

     $('[name="prefered_hospital"]').on('change', function(){  
      if($(this).val()  === "1"){
        $('#hospital').collapse('show')
      }else{
         $('#hospital').collapse('hide')
      }
    });

     $('[name="allergies"]').on('change', function(){  
      if($(this).val()  === "1"){
        $('#allergy').collapse('show')
      }else{
         $('#allergy').collapse('hide')
      }
    });
</script>
@endsection       
@endsection