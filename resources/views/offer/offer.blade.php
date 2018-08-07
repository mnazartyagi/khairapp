@extends('layouts.default')
@section('content')
    @include('layouts.header')</br>
    <main id="main" dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}}">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                <h1>{{App::getLocale()=='en'? $offer->name_en : $offer->name_ar }}</h1>
                </div>
                <div class="col-md-6">
                  <div class="row">
                      <div class="col-6 col-md-4">
                        <span>{{trans('extra.starting')}}</span></br>
                      {{$offer->price}}
                      </div>
                      <div class="col-6 col-md-4">
                      <a class="btn btn-danger btn-sm rounded-0" href="{{route('book_offer',$offer->slug)}}">Book Now</a>
                        <div class="modal" id="getOffer" tabindex="-1" role="dialog" aria-labelledby="getOfferTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content rounded-0" style="margin:1rem">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="card" style="border:0px">
                                        <article class="card-body">
                                            <h4 class="card-title text-center mb-4 mt-1">Book Your Offer</h4>
                                            <hr>
                                            <form class="form" role="form" action="{{route('post.consultation')}}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <div class="input-group">
                                                     <div class="input-group-prepend">
                                                       <span class="input-group-text rounded-0"> <i class="fa fa-user-circle"></i> </span>
                                                        </div>
                                                       <input name="name" class="form-control rounded-0" placeholder="{{trans('home.name')}}" type="text" required="">
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                     <div class="input-group">
                                                        <div class="input-group-prepend">
                                                         <span class="input-group-text rounded-0"> <i class="fa fa-envelope"></i> </span>
                                                          </div>
                                                          <input name="email" placeholder="{{trans('home.email')}}" class="form-control rounded-0" type="text" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                                    </div>
                                                 </div>
                                                 <div class="form-group">
                                                     <div class="input-group">
                                                         <div class="input-group-prepend">
                                                             <span class="input-group-text rounded-0"><i class="fa fa-flag"></i></span>
                                                         </div>
                                                         <select name="country" id="country" class="form-control rounded-0" size="0" required> 
                                                                <option value="">Select Your Country</option> 
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
                                                 <div class="form-group input-group input-group-lg">
                                                        <input name="phone"  id="mmhp" class="form-control rounded-0" type="text" required="" pattern="[\+]\d{5,}">
                                                 </div>
                                                 
                                                 <div class="form-group">
                                                     <button type="submit" class="btn btn-primary btn-block rounded-0">{{trans('home.consul')}}</button>
                                                 </div>
                                             </form>
                                            <hr>
                                        </article>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8" style="padding-top:5px;">
                    <div id="carouselOffer" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                              <img class="img-fluid rounded-0 offer" src="{{asset('storage/'.$offer->image_main)}}" alt="" width="730">
                          </div>
                          <div class="carousel-item">
                              <img class="img-fluid rounded-0 offer" src="{{asset('storage/'.$offer->image_main)}}" alt="" width="730">
                          </div>
                          <div class="carousel-item">
                              <img class="img-fluid rounded-0 offer" src="{{asset('storage/'.$offer->image_main)}}" alt="" width="730">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselOffer" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselOffer" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                
                </div>
                <div class="col-md-4" style="padding-top:5px;padding-right:40px;">
                  <h5>{{trans('extra.desc')}}</h5>
                <p>{{App::getLocale()=='en'? $offer->description_en : $offer->description_ar }}</p>
                </div>
              </div>
            </div>
            <div class="container mt-4">

              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist" style="text-align:center;">
                  <a class="nav-item nav-link active col-6 col-md-3" id="nav-description-tab" data-toggle="tab" href="#nav-description" role="tab" aria-controls="nav-description" aria-selected="true">{{trans('extra.detail')}}</a>
                  <a class="nav-item nav-link col-6 col-md-3" id="nav-inclusion-tab" data-toggle="tab" href="#nav-inclusion" role="tab" aria-controls="nav-inclusion" aria-selected="false">{{trans('extra.inclu')}}</a>
                  <a class="nav-item nav-link col-6 col-md-3" id="nav-exclusion-tab" data-toggle="tab" href="#nav-exclusion" role="tab" aria-controls="nav-exclusion" aria-selected="false">{{trans('extra.exclu')}}</a>
                  <a class="nav-item nav-link col-6 col-md-3" id="nav-terms-tab" data-toggle="tab" href="#nav-terms" role="tab" aria-controls="nav-terms" aria-selected="false">{{trans('extra.term')}}</a>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab">
                  <div class="container" style="margin-top:10px;">
                      {!!App::getLocale()=='en'? $offer->details_en : $offer->details_ar !!}
                </div>
                </div>
                <div class="tab-pane fade" id="nav-inclusion" role="tabpanel" aria-labelledby="nav-inclusion-tab">
                  <div class="container" style="margin-top:10px;">
                    {!!App::getLocale()=='en'? $offer->inclusions_en : $offer->inclusions_ar !!}
                  </div>
                </div>
                <div class="tab-pane fade" id="nav-exclusion" role="tabpanel" aria-labelledby="nav-exclusion-tab">
                  <div class="container" style="margin-top:10px;">
                    {!!App::getLocale()=='en'? $offer->exclusions_en : $offer->exclusions_ar !!}
                  </div>
                </div>
                <div class="tab-pane fade" id="nav-terms" role="tabpanel" aria-labelledby="nav-terms-tab">
                  <div class="container" style="margin-top:10px;">
                    {!!App::getLocale()=='en'? $offer->terms_en : $offer->terms_ar !!}
                  </div>
                </div>
              </div><br>
            </div>
    </main>
    @include('layouts.footer')
@endsection